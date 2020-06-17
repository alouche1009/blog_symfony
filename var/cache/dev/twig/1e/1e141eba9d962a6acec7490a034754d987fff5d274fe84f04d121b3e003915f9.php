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

/* /partials/footer.html.twig */
class __TwigTemplate_ba3a35dffd2a833da3129aaf80d328718db8b7e5c649f99bab7cb2431315e0e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/footer.html.twig"));

        // line 1
        echo "    <footer class=\"s-footer\">
        <div class=\"s-footer__main\">
            <div class=\"row\">
                <div class=\"col-two md-four mob-full s-footer__sitelinks\">
                    <h4>Quick Links</h4>
                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/article\">Articles</a></li>
                        <li><a href=\"#0\">Categories</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class=\"col-two md-four mob-full s-footer__archives\">
                        
                    <h4>Archives</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">January 2018</a></li>
                        <li><a href=\"#0\">December 2017</a></li>
                        <li><a href=\"#0\">November 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class=\"col-two md-four mob-full s-footer__social\">
                        
                    <h4>Social</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class=\"col-five md-full end s-footer__subscribe\">
                    <h4>Newsletter</h4>
                    <p>Don't miss any awesome new article, sign up for our newsletter! </p>
                    <div class=\"subscribe-form\">
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">
                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mc-email\" placeholder=\"Email\" required=\"\">
                            <input type=\"submit\" name=\"subscribe\" value=\"Send\">
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->
        </div> <!-- end s-footer__bottom -->
    </footer> <!-- end s-footer -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <footer class=\"s-footer\">
        <div class=\"s-footer__main\">
            <div class=\"row\">
                <div class=\"col-two md-four mob-full s-footer__sitelinks\">
                    <h4>Quick Links</h4>
                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"/article\">Articles</a></li>
                        <li><a href=\"#0\">Categories</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class=\"col-two md-four mob-full s-footer__archives\">
                        
                    <h4>Archives</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">January 2018</a></li>
                        <li><a href=\"#0\">December 2017</a></li>
                        <li><a href=\"#0\">November 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class=\"col-two md-four mob-full s-footer__social\">
                        
                    <h4>Social</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class=\"col-five md-full end s-footer__subscribe\">
                    <h4>Newsletter</h4>
                    <p>Don't miss any awesome new article, sign up for our newsletter! </p>
                    <div class=\"subscribe-form\">
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">
                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mc-email\" placeholder=\"Email\" required=\"\">
                            <input type=\"submit\" name=\"subscribe\" value=\"Send\">
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->
        </div> <!-- end s-footer__bottom -->
    </footer> <!-- end s-footer -->
", "/partials/footer.html.twig", "/home/aurore/Bureau/Rendu/blog_bro/templates/partials/footer.html.twig");
    }
}
