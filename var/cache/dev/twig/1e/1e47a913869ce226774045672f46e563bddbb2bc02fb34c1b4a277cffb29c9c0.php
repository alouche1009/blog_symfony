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

/* /partials/header.html.twig */
class __TwigTemplate_761e0c69894184bca9aebf95046f63c0940d111b942d89f079eda177064fb644 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

</head>

<body id=\"top\">

    <div class=\"s-pageheader\">
        <header class=\"header\">
            <div class=\"header__content row\">
                <div >
                    <title> Blog </title>
                </div> 
                <ul class=\"header__social\">
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
                </ul> 
                <a class=\"header__search-trigger\" href=\"#0\"></a>
                <div class=\"header__search\">
                    <form role=\"search\" method=\"get\" class=\"header__search-form\" action=\"#\">
                        <label>
                            <span class=\"hide-content\">Search for:</span>
                            <input type=\"search\" class=\"search-field\" placeholder=\"Type Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"on\">
                        </label>
                        <input type=\"submit\" class=\"search-submit\" value=\"Search\">
                    </form>
                    <a href=\"#0\" title=\"Close Search\" class=\"header__overlay-close\">Close</a>
                </div>  
                <a class=\"header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>
                <nav class=\"header__nav-wrap\">
                    <h2 class=\"header__nav-heading h6\">Site Navigation</h2>
                    <center><ul class=\"header__nav\">
                        <li class=\"current\"><a href=\"/\" title=\"\">Home</a></li>
                        <li class=\"current\"><a href=\"/articles\" title=\"\">Articles</a></li>
                        <li class=\"has-children\">
                            <a href=\"#0\" title=\"\">Categories</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"category.html\">Lifestyle</a></li>
                                <li><a href=\"category.html\">Health</a></li>
                                <li><a href=\"category.html\">Family</a></li>
                                <li><a href=\"category.html\">Travel</a></li>
                            </ul>
                            <li class=\"has-children\">
                            <a href=\"#0\" title=\"\">Users</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"/article/add\">Add article</a></li>
                                <li><a href=\"/login\">Sign in</a></li>
                                <li><a href=\"/register\">Sign up</a></li>
                            </ul>
                            <li><a href=\"/contact\" title=\"\">Contact</a></li>

                    <a href=\"#0\" title=\"Close Menu\" class=\"header__overlay-close close-mobile-menu\">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

</head>

<body id=\"top\">

    <div class=\"s-pageheader\">
        <header class=\"header\">
            <div class=\"header__content row\">
                <div >
                    <title> Blog </title>
                </div> 
                <ul class=\"header__social\">
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
                </ul> 
                <a class=\"header__search-trigger\" href=\"#0\"></a>
                <div class=\"header__search\">
                    <form role=\"search\" method=\"get\" class=\"header__search-form\" action=\"#\">
                        <label>
                            <span class=\"hide-content\">Search for:</span>
                            <input type=\"search\" class=\"search-field\" placeholder=\"Type Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"on\">
                        </label>
                        <input type=\"submit\" class=\"search-submit\" value=\"Search\">
                    </form>
                    <a href=\"#0\" title=\"Close Search\" class=\"header__overlay-close\">Close</a>
                </div>  
                <a class=\"header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>
                <nav class=\"header__nav-wrap\">
                    <h2 class=\"header__nav-heading h6\">Site Navigation</h2>
                    <center><ul class=\"header__nav\">
                        <li class=\"current\"><a href=\"/\" title=\"\">Home</a></li>
                        <li class=\"current\"><a href=\"/articles\" title=\"\">Articles</a></li>
                        <li class=\"has-children\">
                            <a href=\"#0\" title=\"\">Categories</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"category.html\">Lifestyle</a></li>
                                <li><a href=\"category.html\">Health</a></li>
                                <li><a href=\"category.html\">Family</a></li>
                                <li><a href=\"category.html\">Travel</a></li>
                            </ul>
                            <li class=\"has-children\">
                            <a href=\"#0\" title=\"\">Users</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"/article/add\">Add article</a></li>
                                <li><a href=\"/login\">Sign in</a></li>
                                <li><a href=\"/register\">Sign up</a></li>
                            </ul>
                            <li><a href=\"/contact\" title=\"\">Contact</a></li>

                    <a href=\"#0\" title=\"Close Menu\" class=\"header__overlay-close close-mobile-menu\">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->", "/partials/header.html.twig", "/home/aurore/Bureau/Rendu/blog_bro/templates/partials/header.html.twig");
    }
}
