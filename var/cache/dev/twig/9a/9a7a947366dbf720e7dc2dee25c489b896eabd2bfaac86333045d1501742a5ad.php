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

/* templateFront/equipe.html.twig */
class __TwigTemplate_2be3ea192c2bd6c17d9c31ef5718f66a61b31941736261e9b126e1a7f56c88fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/equipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/equipe.html.twig"));

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
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"css/normalize.css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/transitions.css\">
    <link rel=\"stylesheet\" href=\"css/prettyPhoto.css\">
    <link rel=\"stylesheet\" href=\"css/swiper.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"css/customScrollbar.css\">
    <link rel=\"stylesheet\" href=\"css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"css/main.css\">
    <link rel=\"stylesheet\" href=\"css/color.css\">
    <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
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
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
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
                <li class=\"active\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"fixtures.html\">fixtures</a></li>
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
                                                                        <img src=\"images/thumbnails/img-01.jpg\" alt=\"image description\">
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
                                                                        <img src=\"images/thumbnails/img-02.jpg\" alt=\"image description\">
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
                                                                        <img src=\"images/thumbnails/img-03.jpg\" alt=\"image description\">
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
                                <a href=\"index-2.html\"><img src=\"images/logo.png\" alt=\"image description\"></a>
                            </strong>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation\">
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li class=\"active\">
                                        <a href=\"#\">Main</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li class=\"active\"><a href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefront2");
        echo "\">home1</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Team</a>
                                        <ul class=\"tg-dropdown-menu\">

                                            <li><a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontequipe");
        echo "\">equipes</a></li>
                                        </ul>
                                    </li>

                                    <li><a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontcoach");
        echo "\">Coachs</a></li>

                                    <li>
                                        <a href=\"#\">Match Results</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontmatchresult");
        echo "\">match result</a></li>
                                            <li><a href=\"";
        // line 252
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
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontarticles");
        echo "\">fixtures</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href=\"#\">Réclamation</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"  ";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontprosoccermedia1");
        echo " \">Poser Votre Réclamation</a></li>
                                            <li><a href=\"  ";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontprosoccermedia2");
        echo "\">Poser Votre Avis</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 272
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
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>fixtures</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">fixtures</li>
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
        <!--************************************
                Fixtures Start
        *************************************-->


        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">

                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div id=\"tg-otherfixtures-slider\" class=\"tg-otherfixtures-slider tg-tickets\">

                                    <div class=\"swiper-wrapper\">
                                        <div class=\"swiper-slide\">
                                            ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 343, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 344
            echo "                                            <div class=\"tg-ticket\">

                                                <div class=\"tg-matchdetail\">
                                                    <span class=\"tg-theme-tag\">CO_Takwira Premier League</span>
                                                    <h4> ";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nomEquipe", [], "any", false, false, false, 348), "html", null, true);
            echo " </h4>
                                                    <ul class=\"tg-matchmetadata\">
                                                        <li><address>";
            // line 350
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipe"], "idCoach", [], "any", false, false, false, 350), "nomCoach", [], "any", false, false, false, 350), "html", null, true);
            echo " </address></li>
                                                    </ul>
                                                </div>
                                                <div class=\"tg-btnsbox\">
                                                    <a class=\"tg-btn\" href=\"";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontjoueurjunior", ["idEquipe" => twig_get_attribute($this->env, $this->source, $context["equipe"], "idE", [], "any", false, false, false, 354)]), "html", null, true);
            echo "\"> Equipe junior</a>
                                                    <a class=\"tg-btn\" href=\"";
            // line 355
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontjoueursunior", ["idEquipe" => twig_get_attribute($this->env, $this->source, $context["equipe"], "idE", [], "any", false, false, false, 355)]), "html", null, true);
            echo "\">Equipe senior</a>
                                                </div>

                                            </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "                                        </div>


                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!--************************************
                Other Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/a0ksVaLlaIw?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Our Sponser Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>our sponsers</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult tg-oursponsers\">
                            <div class=\"row\">
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sedia tempor labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-sponser-slider\" class=\"tg-sponser-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-01.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-02.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-03.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-01.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-02.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-03.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Our Sponser End
        *************************************-->
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
                                                    <img src=\"images/thumbnails/img-04.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-05.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-06.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-07.jpg\" alt=\"image description\">
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
                                            <img src=\"images/logo2.png\" alt=\"image description\">
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
<script src=\"js/vendor/jquery-library.js\"></script>
<script src=\"js/vendor/bootstrap.min.js\"></script>
<script src=\"js/customScrollbar.min.js\"></script>
<script src=\"js/owl.carousel.js\"></script>
<script src=\"js/isotope.pkgd.js\"></script>
<script src=\"js/prettyPhoto.js\"></script>
<script src=\"js/swiper.min.js\"></script>
<script src=\"js/jquery-ui.js\"></script>
<script src=\"js/countTo.js\"></script>
<script src=\"js/appear.js\"></script>
<script src=\"js/main.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templateFront/equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 360,  440 => 355,  436 => 354,  429 => 350,  424 => 348,  418 => 344,  414 => 343,  340 => 272,  334 => 269,  330 => 268,  321 => 262,  308 => 252,  304 => 251,  296 => 246,  289 => 242,  279 => 235,  43 => 1,);
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
    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"css/normalize.css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/transitions.css\">
    <link rel=\"stylesheet\" href=\"css/prettyPhoto.css\">
    <link rel=\"stylesheet\" href=\"css/swiper.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"css/customScrollbar.css\">
    <link rel=\"stylesheet\" href=\"css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"css/main.css\">
    <link rel=\"stylesheet\" href=\"css/color.css\">
    <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <script src=\"js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
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
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
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
                <li class=\"active\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"fixtures.html\">fixtures</a></li>
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
                                                                        <img src=\"images/thumbnails/img-01.jpg\" alt=\"image description\">
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
                                                                        <img src=\"images/thumbnails/img-02.jpg\" alt=\"image description\">
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
                                                                        <img src=\"images/thumbnails/img-03.jpg\" alt=\"image description\">
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
                                <a href=\"index-2.html\"><img src=\"images/logo.png\" alt=\"image description\"></a>
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
                                            <li><a href=\"{{ path('templatefrontarticles') }}\">fixtures</a></li>
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
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>fixtures</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">fixtures</li>
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
        <!--************************************
                Fixtures Start
        *************************************-->


        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">

                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"row\">
                                <div id=\"tg-otherfixtures-slider\" class=\"tg-otherfixtures-slider tg-tickets\">

                                    <div class=\"swiper-wrapper\">
                                        <div class=\"swiper-slide\">
                                            {% for equipe in equipes %}
                                            <div class=\"tg-ticket\">

                                                <div class=\"tg-matchdetail\">
                                                    <span class=\"tg-theme-tag\">CO_Takwira Premier League</span>
                                                    <h4> {{ equipe.nomEquipe }} </h4>
                                                    <ul class=\"tg-matchmetadata\">
                                                        <li><address>{{ equipe.idCoach.nomCoach}} </address></li>
                                                    </ul>
                                                </div>
                                                <div class=\"tg-btnsbox\">
                                                    <a class=\"tg-btn\" href=\"{{ path('templatefrontjoueurjunior', {'idEquipe': equipe.idE}) }}\"> Equipe junior</a>
                                                    <a class=\"tg-btn\" href=\"{{ path('templatefrontjoueursunior', {'idEquipe': equipe.idE}) }}\">Equipe senior</a>
                                                </div>

                                            </div>
                                            {% endfor %}
                                        </div>


                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!--************************************
                Other Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/a0ksVaLlaIw?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Our Sponser Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>our sponsers</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult tg-oursponsers\">
                            <div class=\"row\">
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sedia tempor labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-sponser-slider\" class=\"tg-sponser-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-01.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-02.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-03.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-01.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-02.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/sponser/img-03.png\" alt=\"image description\">
                                                            </strong>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <span>sponsored in 2016</span>
                                                            <h3>Champions league</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Our Sponser End
        *************************************-->
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
                                                    <img src=\"images/thumbnails/img-04.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-05.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-06.jpg\" alt=\"image description\">
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
                                                    <img src=\"images/thumbnails/img-07.jpg\" alt=\"image description\">
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
                                            <img src=\"images/logo2.png\" alt=\"image description\">
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
<script src=\"js/vendor/jquery-library.js\"></script>
<script src=\"js/vendor/bootstrap.min.js\"></script>
<script src=\"js/customScrollbar.min.js\"></script>
<script src=\"js/owl.carousel.js\"></script>
<script src=\"js/isotope.pkgd.js\"></script>
<script src=\"js/prettyPhoto.js\"></script>
<script src=\"js/swiper.min.js\"></script>
<script src=\"js/jquery-ui.js\"></script>
<script src=\"js/countTo.js\"></script>
<script src=\"js/appear.js\"></script>
<script src=\"js/main.js\"></script>
</body>

</html>", "templateFront/equipe.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\templateFront\\equipe.html.twig");
    }
}
