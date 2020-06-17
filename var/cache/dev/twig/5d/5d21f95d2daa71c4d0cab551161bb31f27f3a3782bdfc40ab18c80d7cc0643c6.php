<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/extras.html.twig */
class __TwigTemplate_d33589a2a51ae7d552f36a74f7b4c613eeed838ece5b845f8dcae810b51f60f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/extras.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/extras.html.twig"));

        // line 1
        echo "    <section class=\"s-extra\">

        <div class=\"row top\">

            <div class=\"col-eight md-six tab-full popular\">
                <h3>Popular Posts</h3>

                <div class=\"block-1-2 block-m-full popular__posts\">
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/wheel-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class=\"popular__meta\">
                             <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-19\">Dec 19, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/shutterbug-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Key Benefits Of Family Photography.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-18\">Dec 18, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/cookies-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class=\"popular__meta\">
                                <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-16\">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/beetle-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Throwback To The Good Old Days.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-16\">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/tulips-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">10 Interesting Facts About Caffeine.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-14\">Dec 14, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/salad-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Healthy Mediterranean Salad Recipes</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-12\">Dec 12, 2017</time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class=\"col-four md-six tab-full about\">
                <h3>About Philosophy</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class=\"about__social\">
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class=\"row bottom tags-wrap\">
            <div class=\"col-full tags\">
                <h3>Tags</h3>

                <div class=\"tagcloud\">
                    <a href=\"#0\">Salad</a>
                    <a href=\"#0\">Recipe</a>
                    <a href=\"#0\">Places</a>
                    <a href=\"#0\">Tips</a>
                    <a href=\"#0\">Friends</a>
                    <a href=\"#0\">Travel</a>
                    <a href=\"#0\">Exercise</a>
                    <a href=\"#0\">Reading</a>
                    <a href=\"#0\">Running</a>
                    <a href=\"#0\">Self-Help</a>
                    <a href=\"#0\">Vacation</a>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/extras.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"s-extra\">

        <div class=\"row top\">

            <div class=\"col-eight md-six tab-full popular\">
                <h3>Popular Posts</h3>

                <div class=\"block-1-2 block-m-full popular__posts\">
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/wheel-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class=\"popular__meta\">
                             <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-19\">Dec 19, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/shutterbug-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Key Benefits Of Family Photography.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-18\">Dec 18, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/cookies-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class=\"popular__meta\">
                                <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-16\">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/beetle-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Throwback To The Good Old Days.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-16\">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/tulips-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">10 Interesting Facts About Caffeine.</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-14\">Dec 14, 2017</time></span>
                        </section>
                    </article>
                    <article class=\"col-block popular__post\">
                        <a href=\"#0\" class=\"popular__thumb\">
                            <img src=\"images/thumbs/small/salad-150.jpg\" alt=\"\">
                        </a>
                        <h5><a href=\"#0\">Healthy Mediterranean Salad Recipes</a></h5>
                        <section class=\"popular__meta\">
                            <span class=\"popular__author\"><span>By</span> <a href=\"#0\"> John Doe</a></span>
                            <span class=\"popular__date\"><span>on</span> <time datetime=\"2017-12-12\">Dec 12, 2017</time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class=\"col-four md-six tab-full about\">
                <h3>About Philosophy</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class=\"about__social\">
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class=\"row bottom tags-wrap\">
            <div class=\"col-full tags\">
                <h3>Tags</h3>

                <div class=\"tagcloud\">
                    <a href=\"#0\">Salad</a>
                    <a href=\"#0\">Recipe</a>
                    <a href=\"#0\">Places</a>
                    <a href=\"#0\">Tips</a>
                    <a href=\"#0\">Friends</a>
                    <a href=\"#0\">Travel</a>
                    <a href=\"#0\">Exercise</a>
                    <a href=\"#0\">Reading</a>
                    <a href=\"#0\">Running</a>
                    <a href=\"#0\">Self-Help</a>
                    <a href=\"#0\">Vacation</a>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->", "partials/extras.html.twig", "/home/aurore/Bureau/Rendu/blog_bro/templates/partials/extras.html.twig");
    }
}
