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

/* article/indexf.html.twig */
class __TwigTemplate_bff2b65bd2a05a8256a295c912a6e062d606ba4da5c22fce3c30f53506eb1f23 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/indexf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/indexf.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>\t\t<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zxx\"> <![endif]-->
<!--[if IE 7]>\t\t\t<html class=\"no-js lt-ie9 lt-ie8\" lang=\"zxx\"> <![endif]-->
<!--[if IE 8]>\t\t\t<html class=\"no-js lt-ie9\" lang=\"zxx\"> <![endif]-->
<!--[if gt IE 8]><!-->\t<html class=\"no-js\" lang=\"zxx\"> <!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Soccer BootStrap HTML5 CSS3 Theme</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/transitions.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/swiper.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//code.jquery.com/jquery.js\"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
    <!--************************************
            Mobile Menu Start
    *************************************-->
    <div id=\"tg-navigationm-mobile\" class=\"tg-navigationm-mobile tg-navigation collapse navbar-collapse\">
        <span id=\"tg-close\" class=\"tg-close fa fa-close\"></span>
        <div class=\"tg-colhalf\">
            <ul>
                <li>
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li class=\"active\"><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li>
                    <a href=\"#\">Match Results</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"matchresult.html\">match result</a></li>
                        <li><a href=\"matchresultdetail.html\">match result detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"tg-colhalf\">
            <ul>
                <li>
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"contactus.html\">Contact</a></li>
                <li>
                    <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                    <ul>
                        <li><a href=\"aboutus.html\">about us</a></li>
                        <li><a href=\"shoplist.html\">shop list</a></li>
                        <li><a href=\"shopgrid.html\">shop grid</a></li>
                        <li><a href=\"productsingle.html\">shop detail</a></li>
                        <li><a href=\"bloglist.html\">blog list</a></li>
                        <li><a href=\"bloggrid.html\">blog grid</a></li>
                        <li><a href=\"blogdetail.html\">blog detail</a></li>
                        <li><a href=\"404.html\">404 error</a></li>
                        <li><a href=\"comming-soon.html\">comming soon</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--************************************
            Mobile Menu End
    *************************************-->
    <!--************************************
            Header Start
    *************************************-->
    <header id=\"tg-header\" class=\"tg-header tg-haslayout\">
        <div class=\"container\">
            <div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"tg-topbar tg-haslayout\">
                        <nav id=\"tg-topaddnav\" class=\"tg-topaddnav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-addnavigationm-mobile\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </button>
                            </div>
                            <div id=\"tg-addnavigationm-mobile\" class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
                                <div class=\"tg-colhalf pull-right\">
                                    <nav class=\"tg-addnav\">
                                        <ul>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a></li>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-register\">Register</a></li>
                                            <li>
                                                <div class=\"tg-cart\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>
                                                    <div class=\"tg-cartcontent dropdown-menu\" aria-labelledby=\"tg-cartdropdown\">
                                                        <ul>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-02.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-03.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"tg-btnbox\">
                                                                    <strong class=\"tg-carttotal\">Total: \$134</strong>
                                                                    <a class=\"tg-btn\" href=\"#\"><span>checkout</span></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a id=\"tg-btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class=\"tg-colhalf\">
                                    <ul class=\"tg-socialicons\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-facebook\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-twitter\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-linkedin\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-google-plus\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-dribbble\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <nav id=\"tg-nav\" class=\"tg-nav brand-center\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigationm-mobile\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <strong class=\"tg-logo\">
                                <a href=\"index-2.html\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                            </strong>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation\">
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li class=\"active\">
                                        <a href=\"#\">Main</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li class=\"active\"><a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefront2");
        echo "\">home1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Team</a>
                                        <ul class=\"tg-dropdown-menu\">

                                            <li><a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontequipe");
        echo "\">equipes</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontcoach");
        echo "\">Coachs</a></li>

                                    <li>
                                        <a href=\"#\">Match Results</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"";
        // line 254
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontmatchresult");
        echo "\">match result</a></li>
                                            <li><a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontmatchresultdetails");
        echo "\">match result detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Articles</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"";
        // line 265
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Articles</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Réclamation</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"  ";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontprosoccermedia1");
        echo " \">Poser Votre Réclamation</a></li>
                                            <li><a href=\"  ";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontprosoccermedia2");
        echo "\">Poser Votre Avis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 275
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontcontactus");
        echo "\">Contact</a></li>
                                    <li>
                                        <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                                        <ul>
                                            <li><a href=\"aboutus.html\">about us</a></li>
                                            <li><a href=\"shoplist.html\">shop list</a></li>
                                            <li><a href=\"shopgrid.html\">shop grid</a></li>
                                            <li><a href=\"productsingle.html\">shop detail</a></li>
                                            <li><a href=\"bloglist.html\">blog list</a></li>
                                            <li><a href=\"bloggrid.html\">blog grid</a></li>
                                            <li><a href=\"blogdetail.html\">blog detail</a></li>
                                            <li><a href=\"404.html\">404 error</a></li>
                                            <li><a href=\"comming-soon.html\">comming soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Banner Start
    *************************************-->
    <div class=\"tg-banner tg-haslayout\">
        <div class=\"tg-imglayer\">
            <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg-pattran.png"), "html", null, true);
        echo "\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>buy tickets</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">buy tickets</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Les articles</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        ";
        // line 336
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

                        <div class=\"tg-tickets\">
                            ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 339, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 340
            echo "                            <div class=\"tg-ticket\">
                                <time class=\"tg-matchdate\">";
            // line 341
            ((twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 341)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 341), "d"), "html", null, true))) : (print ("")));
            echo "<span>";
            ((twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 341)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 341), "medium", "medium", "MMMM", null, "gregorian", "fr"), "html", null, true))) : (print ("")));
            echo "</span></time>
                                <div class=\"tg-matchdetail\">

                                    <span class=\"tg-theme-tag\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 344), "html", null, true);
            echo "</span>
                                    <h4>";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 345), "html", null, true);
            echo "</h4>
                                    <ul class=\"tg-matchmetadata\">
                                        <li>";
            // line 347
            ((twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 347)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 347), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</li>
                                        <li><address>";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 348), "html", null, true);
            echo "</address></li>
                                    </ul>
                                </div>
                                <div class=\"tg-btnsbox\">
                                    <a class=\"tg-btn\" href=\"";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_front", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 352)]), "html", null, true);
            echo "\">read more</a>

                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                        </div>
                    </div>
                    ";
        // line 359
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 359, $this->source); })()));
        echo "
                </div>

            </div>
        </section>
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Footer Start
    *************************************-->
    <footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
        <div class=\"tg-haslayout tg-footerinfobox\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-footerinfo\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-posttitle\">
                                    <h3>signup newsletter</h3>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si aliqua quis.</p>
                                </div>
                                <form class=\"tg-form-newsletter\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                        </div>
                                        <button class=\"tg-btn\" type=\"submit\">signup</button>
                                    </fieldset>
                                </form>
                                <div class=\"tg-posttitle\">
                                    <h3>popular tags</h3>
                                </div>
                                <div class=\"tg-tags\">
                                    <a class=\"tg-tag\" href=\"#\">fashion</a>
                                    <a class=\"tg-tag\" href=\"#\">travel</a>
                                    <a class=\"tg-tag\" href=\"#\">blog</a>
                                    <a class=\"tg-tag\" href=\"#\">sports</a>
                                    <a class=\"tg-tag\" href=\"#\">magazine</a>
                                    <a class=\"tg-tag\" href=\"#\">ui</a>
                                    <a class=\"tg-tag\" href=\"#\">tech</a>
                                    <a class=\"tg-tag\" href=\"#\">fun time</a>
                                    <a class=\"tg-tag\" href=\"#\">soccer</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-posttitle\">
                                    <h3>Top products</h3>
                                </div>
                                <div class=\"tg-toprated\">
                                    <ul>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-04.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-05.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-06.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/thumbnails/img-07.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-haslayout\">
                                    <strong class=\"tg-logo\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" alt=\"image description\">
                                        </a>
                                    </strong>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p>
                                </div>
                                <ul class=\"tg-contactinfo\">
                                    <li>
                                        <i class=\"fa fa-home\"></i>
                                        <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                    </li>
                                    <li>
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <a href=\"info%40domain.html\">info@domain.com</a>
                                    </li>
                                    <li>
                                        <i class=\"fa fa-phone\"></i>
                                        <span>+44 123 456 788 - 9</span>
                                    </li>
                                </ul>
                                <div class=\"tg-haslayout\">
                                    <a class=\"tg-btn\" href=\"#\">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"tg-footerbar\">
            <div class=\"container\">
                <span class=\"tg-copyright\"><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                <nav class=\"tg-footernav\">
                    <ul>
                        <li><a href=\"#\">Main</a></li>
                        <li><a href=\"#\">Team</a></li>
                        <li><a href=\"#\">Buy Tickets</a></li>
                        <li><a href=\"#\">Match Results</a></li>
                        <li><a href=\"#\">Upcoming Matches</a></li>
                        <li><a href=\"#\">Shop</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Search Start
*************************************-->
<div class=\"tg-searchbox\">
    <a id=\"tg-close-search\" class=\"tg-close-search\" href=\"javascript:void(0)\"><span class=\"fa fa-close\"></span></a>
    <div class=\"tg-searcharea\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-sm-offset-3\">
                    <form class=\"tg-form-search\">
                        <fieldset>
                            <input type=\"search\" class=\"form-control\" placeholder=\"keyword\">
                            <i class=\"icon-icon_search2\"></i>
                        </fieldset>
                    </form>
                    <p>Start typing and press Enter to search</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Search End
*************************************-->
<!--************************************
    LightBoxes Start
*************************************-->
<div class=\"tg-modalbox modal fade\" id=\"tg-login\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tg-modal-content\">
            <div class=\"tg-formarea\">
                <div class=\"tg-border-heading\">
                    <h3>Login</h3>
                </div>
                <form class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"userName/email\" class=\"form-control\" placeholder=\"username/email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <label>
                                <input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
                                <em>Remember Me</em>
                            </label>
                            <a href=\"#\">
                                <em>Forgot Password</em>
                                <i class=\"fa fa-question-circle\"></i>
                            </a>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
                        </div>
                        <div class=\"tg-description\">
                            <p>Don't have an account? <a href=\"#\">Signup</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"tg-logintype\">
                <div class=\"tg-border-heading\">
                    <h3>Login with</h3>
                </div>
                <ul>
                    <li class=\"tg-facebook\"><a href=\"#\">facebook</a></li>
                    <li class=\"tg-twitter\"><a href=\"#\">twitter</a></li>
                    <li class=\"tg-googleplus\"><a href=\"#\">google+</a></li>
                    <li class=\"tg-linkedin\"><a href=\"#\">linkedin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"tg-modalbox modal fade\" id=\"tg-register\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tg-modal-content\">
            <div class=\"tg-formarea\">
                <div class=\"tg-border-heading\">
                    <h3>Signup</h3>
                </div>
                <form class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"userName\" class=\"form-control\" placeholder=\"username\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <div class=\"tg-note\">
                                <i class=\"fa fa-exclamation-circle\"></i>
                                <span>We will email you your password.</span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
                        </div>
                        <div class=\"tg-description\">
                            <p>Already have an account? <a href=\"#\">Login</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"tg-logintype\">
                <div class=\"tg-border-heading\">
                    <h3>Signup with</h3>
                </div>
                <ul>
                    <li class=\"tg-facebook\"><a href=\"#\">facebook</a></li>
                    <li class=\"tg-twitter\"><a href=\"#\">twitter</a></li>
                    <li class=\"tg-googleplus\"><a href=\"#\">google+</a></li>
                    <li class=\"tg-linkedin\"><a href=\"#\">linkedin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--************************************
    LightBoxes End
*************************************-->
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-library.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/customScrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/swiper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/countTo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
<script>
    \$(document).ready(function (){

        function ShowUnreadNotifications(option = ''){
            \$.ajax({
                url: \"";
        // line 663
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\",
                method: 'GET',
                data: {option : option},
                dataType: 'json',
                success: function (data){
                    console.log(data);
                }

            })
        }

        ShowUnreadNotifications();



        \$('#annuler_form').on('submit',  function (event) {
            // event.preventDefault();
            console.log('submitted');
            var Data = \$(this).serialize();
            \$.ajax({
                url: \"";
        // line 683
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\",
                method: 'GET',
                data: Data,
                success: function (data) {
                    console.log(data);
                    console.log(\"ezaeae\");

                }
            });
        });
    });
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/indexf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 683,  890 => 663,  880 => 656,  876 => 655,  872 => 654,  868 => 653,  864 => 652,  860 => 651,  856 => 650,  852 => 649,  848 => 648,  844 => 647,  840 => 646,  661 => 470,  641 => 453,  627 => 442,  613 => 431,  599 => 420,  535 => 359,  531 => 357,  520 => 352,  513 => 348,  509 => 347,  504 => 345,  500 => 344,  492 => 341,  489 => 340,  485 => 339,  479 => 336,  446 => 306,  412 => 275,  406 => 272,  402 => 271,  393 => 265,  380 => 255,  376 => 254,  368 => 249,  361 => 245,  351 => 238,  339 => 229,  273 => 166,  258 => 154,  243 => 142,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>\t\t<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zxx\"> <![endif]-->
<!--[if IE 7]>\t\t\t<html class=\"no-js lt-ie9 lt-ie8\" lang=\"zxx\"> <![endif]-->
<!--[if IE 8]>\t\t\t<html class=\"no-js lt-ie9\" lang=\"zxx\"> <![endif]-->
<!--[if gt IE 8]><!-->\t<html class=\"no-js\" lang=\"zxx\"> <!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Soccer BootStrap HTML5 CSS3 Theme</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('apple-touch-icon.png')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/normalize.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/transitions.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/prettyPhoto.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/swiper.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/customScrollbar.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/color.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <script src=\"{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}\"></script>
    <script src=\"//code.jquery.com/jquery.js\"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
    <!--************************************
            Mobile Menu Start
    *************************************-->
    <div id=\"tg-navigationm-mobile\" class=\"tg-navigationm-mobile tg-navigation collapse navbar-collapse\">
        <span id=\"tg-close\" class=\"tg-close fa fa-close\"></span>
        <div class=\"tg-colhalf\">
            <ul>
                <li>
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li class=\"active\"><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li>
                    <a href=\"#\">Match Results</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"matchresult.html\">match result</a></li>
                        <li><a href=\"matchresultdetail.html\">match result detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"tg-colhalf\">
            <ul>
                <li>
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"contactus.html\">Contact</a></li>
                <li>
                    <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                    <ul>
                        <li><a href=\"aboutus.html\">about us</a></li>
                        <li><a href=\"shoplist.html\">shop list</a></li>
                        <li><a href=\"shopgrid.html\">shop grid</a></li>
                        <li><a href=\"productsingle.html\">shop detail</a></li>
                        <li><a href=\"bloglist.html\">blog list</a></li>
                        <li><a href=\"bloggrid.html\">blog grid</a></li>
                        <li><a href=\"blogdetail.html\">blog detail</a></li>
                        <li><a href=\"404.html\">404 error</a></li>
                        <li><a href=\"comming-soon.html\">comming soon</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--************************************
            Mobile Menu End
    *************************************-->
    <!--************************************
            Header Start
    *************************************-->
    <header id=\"tg-header\" class=\"tg-header tg-haslayout\">
        <div class=\"container\">
            <div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"tg-topbar tg-haslayout\">
                        <nav id=\"tg-topaddnav\" class=\"tg-topaddnav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-addnavigationm-mobile\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </button>
                            </div>
                            <div id=\"tg-addnavigationm-mobile\" class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
                                <div class=\"tg-colhalf pull-right\">
                                    <nav class=\"tg-addnav\">
                                        <ul>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a></li>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-register\">Register</a></li>
                                            <li>
                                                <div class=\"tg-cart\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>
                                                    <div class=\"tg-cartcontent dropdown-menu\" aria-labelledby=\"tg-cartdropdown\">
                                                        <ul>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('images/thumbnails/img-01.jpg')}}\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('images/thumbnails/img-02.jpg')}}\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"{{ asset('images/thumbnails/img-03.jpg')}}\" alt=\"image description\">
                                                                    </a>
                                                                </figure>
                                                                <div class=\"tg-product-detail\">
                                                                    <h3><a href=\"#\">Smooth 3-Stripes Scarf</a></h3>
                                                                    <span class=\"tg-price\">Price: \$23</span>
                                                                    <a class=\"tg-delete\" href=\"#\"></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"tg-btnbox\">
                                                                    <strong class=\"tg-carttotal\">Total: \$134</strong>
                                                                    <a class=\"tg-btn\" href=\"#\"><span>checkout</span></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a id=\"tg-btn-search\" href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class=\"tg-colhalf\">
                                    <ul class=\"tg-socialicons\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-facebook\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-twitter\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-linkedin\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-google-plus\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-dribbble\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <nav id=\"tg-nav\" class=\"tg-nav brand-center\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigationm-mobile\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <strong class=\"tg-logo\">
                                <a href=\"index-2.html\"><img src=\"{{ asset('images/logo.png')}}\" alt=\"image description\"></a>
                            </strong>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation\">
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li class=\"active\">
                                        <a href=\"#\">Main</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li class=\"active\"><a href=\"{{ path('templatefront2') }}\">home1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Team</a>
                                        <ul class=\"tg-dropdown-menu\">

                                            <li><a href=\"{{ path('templatefrontequipe') }}\">equipes</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"{{ path('templatefrontcoach') }}\">Coachs</a></li>

                                    <li>
                                        <a href=\"#\">Match Results</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"{{ path('templatefrontmatchresult') }}\">match result</a></li>
                                            <li><a href=\"{{ path('templatefrontmatchresultdetails') }}\">match result detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Articles</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"{{ path('front') }}\">Articles</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Réclamation</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"  {{ path('templatefrontprosoccermedia1') }} \">Poser Votre Réclamation</a></li>
                                            <li><a href=\"  {{ path('templatefrontprosoccermedia2') }}\">Poser Votre Avis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('templatefrontcontactus') }}\">Contact</a></li>
                                    <li>
                                        <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                                        <ul>
                                            <li><a href=\"aboutus.html\">about us</a></li>
                                            <li><a href=\"shoplist.html\">shop list</a></li>
                                            <li><a href=\"shopgrid.html\">shop grid</a></li>
                                            <li><a href=\"productsingle.html\">shop detail</a></li>
                                            <li><a href=\"bloglist.html\">blog list</a></li>
                                            <li><a href=\"bloggrid.html\">blog grid</a></li>
                                            <li><a href=\"blogdetail.html\">blog detail</a></li>
                                            <li><a href=\"404.html\">404 error</a></li>
                                            <li><a href=\"comming-soon.html\">comming soon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Banner Start
    *************************************-->
    <div class=\"tg-banner tg-haslayout\">
        <div class=\"tg-imglayer\">
            <img src=\"{{ asset('images/bg-pattran.png')}}\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>buy tickets</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">buy tickets</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Les articles</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        {{ include('@MercurySeriesFlashy/flashy.html.twig') }}

                        <div class=\"tg-tickets\">
                            {% for article in articles %}
                            <div class=\"tg-ticket\">
                                <time class=\"tg-matchdate\">{{ article.date ? article.date|date('d') : '' }}<span>{{ article.date ? article.date|format_datetime(locale='fr',pattern=\"MMMM\") : '' }}</span></time>
                                <div class=\"tg-matchdetail\">

                                    <span class=\"tg-theme-tag\">{{ article.type }}</span>
                                    <h4>{{ article.titre }}</h4>
                                    <ul class=\"tg-matchmetadata\">
                                        <li>{{ article.date ? article.date|date('H:i:s') : '' }}</li>
                                        <li><address>{{ article.description }}</address></li>
                                    </ul>
                                </div>
                                <div class=\"tg-btnsbox\">
                                    <a class=\"tg-btn\" href=\"{{ path('article_front', {'id': article.id}) }}\">read more</a>

                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                    {{ knp_pagination_render(articles) }}
                </div>

            </div>
        </section>
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Footer Start
    *************************************-->
    <footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
        <div class=\"tg-haslayout tg-footerinfobox\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-footerinfo\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-posttitle\">
                                    <h3>signup newsletter</h3>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si aliqua quis.</p>
                                </div>
                                <form class=\"tg-form-newsletter\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                        </div>
                                        <button class=\"tg-btn\" type=\"submit\">signup</button>
                                    </fieldset>
                                </form>
                                <div class=\"tg-posttitle\">
                                    <h3>popular tags</h3>
                                </div>
                                <div class=\"tg-tags\">
                                    <a class=\"tg-tag\" href=\"#\">fashion</a>
                                    <a class=\"tg-tag\" href=\"#\">travel</a>
                                    <a class=\"tg-tag\" href=\"#\">blog</a>
                                    <a class=\"tg-tag\" href=\"#\">sports</a>
                                    <a class=\"tg-tag\" href=\"#\">magazine</a>
                                    <a class=\"tg-tag\" href=\"#\">ui</a>
                                    <a class=\"tg-tag\" href=\"#\">tech</a>
                                    <a class=\"tg-tag\" href=\"#\">fun time</a>
                                    <a class=\"tg-tag\" href=\"#\">soccer</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-posttitle\">
                                    <h3>Top products</h3>
                                </div>
                                <div class=\"tg-toprated\">
                                    <ul>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/thumbnails/img-04.jpg')}}\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/thumbnails/img-05.jpg')}}\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/thumbnails/img-06.jpg')}}\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/thumbnails/img-07.jpg')}}\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"tg-footercol\">
                                <div class=\"tg-haslayout\">
                                    <strong class=\"tg-logo\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('images/logo2.png')}}\" alt=\"image description\">
                                        </a>
                                    </strong>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p>
                                </div>
                                <ul class=\"tg-contactinfo\">
                                    <li>
                                        <i class=\"fa fa-home\"></i>
                                        <address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
                                    </li>
                                    <li>
                                        <i class=\"fa fa-envelope-o\"></i>
                                        <a href=\"info%40domain.html\">info@domain.com</a>
                                    </li>
                                    <li>
                                        <i class=\"fa fa-phone\"></i>
                                        <span>+44 123 456 788 - 9</span>
                                    </li>
                                </ul>
                                <div class=\"tg-haslayout\">
                                    <a class=\"tg-btn\" href=\"#\">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"tg-footerbar\">
            <div class=\"container\">
                <span class=\"tg-copyright\"><a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a></span>
                <nav class=\"tg-footernav\">
                    <ul>
                        <li><a href=\"#\">Main</a></li>
                        <li><a href=\"#\">Team</a></li>
                        <li><a href=\"#\">Buy Tickets</a></li>
                        <li><a href=\"#\">Match Results</a></li>
                        <li><a href=\"#\">Upcoming Matches</a></li>
                        <li><a href=\"#\">Shop</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Search Start
*************************************-->
<div class=\"tg-searchbox\">
    <a id=\"tg-close-search\" class=\"tg-close-search\" href=\"javascript:void(0)\"><span class=\"fa fa-close\"></span></a>
    <div class=\"tg-searcharea\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-sm-offset-3\">
                    <form class=\"tg-form-search\">
                        <fieldset>
                            <input type=\"search\" class=\"form-control\" placeholder=\"keyword\">
                            <i class=\"icon-icon_search2\"></i>
                        </fieldset>
                    </form>
                    <p>Start typing and press Enter to search</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Search End
*************************************-->
<!--************************************
    LightBoxes Start
*************************************-->
<div class=\"tg-modalbox modal fade\" id=\"tg-login\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tg-modal-content\">
            <div class=\"tg-formarea\">
                <div class=\"tg-border-heading\">
                    <h3>Login</h3>
                </div>
                <form class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"userName/email\" class=\"form-control\" placeholder=\"username/email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <label>
                                <input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
                                <em>Remember Me</em>
                            </label>
                            <a href=\"#\">
                                <em>Forgot Password</em>
                                <i class=\"fa fa-question-circle\"></i>
                            </a>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
                        </div>
                        <div class=\"tg-description\">
                            <p>Don't have an account? <a href=\"#\">Signup</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"tg-logintype\">
                <div class=\"tg-border-heading\">
                    <h3>Login with</h3>
                </div>
                <ul>
                    <li class=\"tg-facebook\"><a href=\"#\">facebook</a></li>
                    <li class=\"tg-twitter\"><a href=\"#\">twitter</a></li>
                    <li class=\"tg-googleplus\"><a href=\"#\">google+</a></li>
                    <li class=\"tg-linkedin\"><a href=\"#\">linkedin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"tg-modalbox modal fade\" id=\"tg-register\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"tg-modal-content\">
            <div class=\"tg-formarea\">
                <div class=\"tg-border-heading\">
                    <h3>Signup</h3>
                </div>
                <form class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"userName\" class=\"form-control\" placeholder=\"username\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <div class=\"tg-note\">
                                <i class=\"fa fa-exclamation-circle\"></i>
                                <span>We will email you your password.</span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
                        </div>
                        <div class=\"tg-description\">
                            <p>Already have an account? <a href=\"#\">Login</a></p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"tg-logintype\">
                <div class=\"tg-border-heading\">
                    <h3>Signup with</h3>
                </div>
                <ul>
                    <li class=\"tg-facebook\"><a href=\"#\">facebook</a></li>
                    <li class=\"tg-twitter\"><a href=\"#\">twitter</a></li>
                    <li class=\"tg-googleplus\"><a href=\"#\">google+</a></li>
                    <li class=\"tg-linkedin\"><a href=\"#\">linkedin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--************************************
    LightBoxes End
*************************************-->
<script src=\"{{ asset('js/vendor/jquery-library.js')}}\"></script>
<script src=\"{{ asset('js/vendor/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('js/customScrollbar.min.js')}}\"></script>
<script src=\"{{ asset('js/owl.carousel.js')}}\"></script>
<script src=\"{{ asset('js/isotope.pkgd.js')}}\"></script>
<script src=\"{{ asset('js/prettyPhoto.js')}}\"></script>
<script src=\"{{ asset('js/swiper.min.js')}}\"></script>
<script src=\"{{ asset('js/jquery-ui.js')}}\"></script>
<script src=\"{{ asset('js/countTo.js')}}\"></script>
<script src=\"{{ asset('js/appear.js')}}\"></script>
<script src=\"{{ asset('js/main.js')}}\"></script>
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
<script>
    \$(document).ready(function (){

        function ShowUnreadNotifications(option = ''){
            \$.ajax({
                url: \"{{ path('front') }}\",
                method: 'GET',
                data: {option : option},
                dataType: 'json',
                success: function (data){
                    console.log(data);
                }

            })
        }

        ShowUnreadNotifications();



        \$('#annuler_form').on('submit',  function (event) {
            // event.preventDefault();
            console.log('submitted');
            var Data = \$(this).serialize();
            \$.ajax({
                url: \"{{ path('front') }}\",
                method: 'GET',
                data: Data,
                success: function (data) {
                    console.log(data);
                    console.log(\"ezaeae\");

                }
            });
        });
    });
</script>
</body>

</html>", "article/indexf.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\article\\indexf.html.twig");
    }
}
