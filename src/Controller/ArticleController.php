<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;
use App\Entity\Comments;
use App\Form\CommentFormType;
use App\Form\AddArticleFormType;
use Symfony\Component\HttpFoundation\Request; 
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class ArticlesController
 * @package App\Controller
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        $data = $this->getDoctrine()->getRepository(Articles::class)->findBy([], ['created_at' => 'desc']);
        
        $articles = $paginator->paginate(
            $data,
            $request->query->getInt('page', 1),
            8
        );
        
        return $this->render('article/index.html.twig', [
            'article' => $articles,
        ]);
    }

    /**
     * @Route("/{slug}", name="article")
    */
    public function article($slug, Request $request){
        $article = $this->getDoctrine()->getRepository(Articles::class)->findOneBy(['slug' => $slug]);
        $comments = $this->getDoctrine()->getRepository(Comments::class)->findBy([
            'articles' => $article
        ],['created_at' => 'desc']);
        if(!$article){
            throw $this->createNotFoundException('The article doesn\'t exist');
        }

        $comment = new Comments();
        $form = $this->createForm(CommentFormType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setArticles($article);
            $comment->setCreatedAt(new \DateTime('now'));
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($comment);
            $doctrine->flush();
        }
        return $this->render('article/article.html.twig', [
            'form' => $form->createView(),
            'article' => $article,
            'comments' => $comments,
        ]);
    }
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/article/add", name="add_article")
     */
    public function add(Request $request,TranslatorInterface $translator)
    {
        $article = new Articles();
        $form = $this->createForm(AddArticleFormType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article->setUsers($this->getUser());
			$image = $form->get('imageFile')->getData();
			if($image){
				$fichier = md5(uniqid()).'.'.$image->guessExtension();
				$image->move(
					$this->getParameter('app.path.featured_images'),
					$fichier
				);
				$article->setFeaturedImage($fichier);
			}
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            $message = $translator->trans('Article published successfully');
            $this->addFlash('message', $message);
            return $this->redirectToRoute('articles');
        }
        
        return $this->render('article/add.html.twig', [
            'articleForm' => $form->createView(),
        ]);
    }
}
