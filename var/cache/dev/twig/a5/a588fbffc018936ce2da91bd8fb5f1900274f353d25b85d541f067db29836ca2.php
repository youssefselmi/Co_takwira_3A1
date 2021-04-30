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

/* base2.html.twig */
class __TwigTemplate_76fb4d78b841635bbf650695c7896de28fb5babb30fde6a3c7ba3c357269bfe9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
                <li class=\"active menu-item-has-children\">
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li class=\"menu-item-has-children\">
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
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefrontcontactus");
        echo "\">Contact</a></li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                    <ul>
                        <li><a href=\"\">about us</a></li>
                        <li><a href=\"\">shop list</a></li>
                        <li><a href=\"\">shop grid</a></li>
                        <li><a href=\"\">shop detail</a></li>
                        <li><a href=\"\">blog list</a></li>
                        <li><a href=\"\">blog grid</a></li>
                        <li><a href=\"\">blog detail</a></li>
                        <li><a href=\"\">404 error</a></li>
                        <li><a href=\"\">comming soon</a></li>
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
            Home Slider Start
    *************************************-->
    <div class=\"tg-sliderbox\">
        <div class=\"tg-imglayer\">
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div id=\"tg-home-slider\" class=\"tg-home-slider tg-haslayout\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-btn-next\">
                <span>next</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
            <div class=\"tg-btn-prev\">
                <span>prev</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <!--************************************
                About Us Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>About pro soccer</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-aboutussection\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <figure>
                                        <img src=\"images/img-01.jpg\" alt=\"image description\">
                                    </figure>
                                </div>
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                About Us End
        *************************************-->
        <!--************************************
                Upcoming Match Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyleone\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-upcomingmatch-counter\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-02.png\" alt=\"image description\">
                                </figure>
                            </div>
                            <div class=\"col-md-8 col-sm-8 col-xs-12\">
                                <div class=\"tg-contentbox\">
                                    <div class=\"tg-section-heading\"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class=\"tg-counters\">
                                        <div class=\"tg-counter tg-days\"></div>
                                        <div class=\"tg-counter tg-hours\"></div>
                                        <div class=\"tg-counter tg-minutes\"></div>
                                        <div class=\"tg-counter tg-seconds\"></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Upcoming Match End
        *************************************-->
        <!--************************************
                Latest Result Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>latest result</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <div class=\"tab-content tg-tabscontent\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"one\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>3 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"two\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>7 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"three\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 9</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"four\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>5 - 8</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"five\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>2 - 1</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"six\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>10 - 0</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"seven\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 6</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                                    <div id=\"tg-matchscrollbar\" class=\"tg-matchscrollbar tg-allmatchstatus\">
                                        <ul class=\"tg-matchtabnav\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\">
                                                <a href=\"#one\" aria-controls=\"one\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#two\" aria-controls=\"two\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#three\" aria-controls=\"three\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#four\" aria-controls=\"four\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#five\" aria-controls=\"five\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#six\" aria-controls=\"six\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#seven\" aria-controls=\"seven\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Result End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout tg-bgdark\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-statistics\">
                            <div class=\"tg-statistic tg-goals\">
                                <span class=\"tg-icon icon-Icon1\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"2700\" data-speed=\"8000\" data-refresh-interval=\"50\">2700</span></h2>
                                <h3>Goals</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeplayers\">
                                <span class=\"tg-icon icon-Icon2\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"1673\" data-speed=\"8000\" data-refresh-interval=\"50\">1673</span></h2>
                                <h3>Active Players</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeteams\">
                                <span class=\"tg-icon icon-Icon3\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"236\" data-speed=\"8000\" data-refresh-interval=\"50\">236</span></h2>
                                <h3>Active Teams</h3>
                            </div>
                            <div class=\"tg-statistic tg-earnedawards\">
                                <span class=\"tg-icon icon-Icon4\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"197\" data-speed=\"8000\" data-refresh-interval=\"50\">197</span></h2>
                                <h3>Earned Awards</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Fixtures Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>fixtures</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
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
                                    <div id=\"tg-upcomingmatch-slider\" class=\"tg-upcomingmatch-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
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
                Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/iC9CpnSj-MU?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Top Rated Player Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>top Rated Player</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-topratedplayer tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-playerscrollbar\" class=\"tg-players tg-playerscrollbar\">
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Top Rated Player End
        *************************************-->
        <!--************************************
                Points Table Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyletwo\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-pointstablewrapper\">
                            <div class=\"col-sm-8 col-xs-12\">
                                <div class=\"tg-pointstable\">
                                    <div class=\"tg-section-heading\"><h2>points table</h2></div>
                                    <div id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-03.png\" alt=\"image description\">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Points Table End
        *************************************-->
        <!--************************************
                Blog Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Latest blog / news</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-blogpost\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-01.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\">Read more</a>
                                    </article>
                                </div>
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-02.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Blog End
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














































                <form  action=\"";
        // line 1760
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"username/email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <label>
                                <input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
                                <em>Remember Meee</em>
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


</html><!doctype html>
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
                <li class=\"active menu-item-has-children\">
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li class=\"menu-item-has-children\">
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
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"contactus.html\">Contact</a></li>
                <li class=\"menu-item-has-children\">
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
                                            <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
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
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Home Slider Start
    *************************************-->
    <div class=\"tg-sliderbox\">
        <div class=\"tg-imglayer\">
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div id=\"tg-home-slider\" class=\"tg-home-slider tg-haslayout\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-btn-next\">
                <span>next</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
            <div class=\"tg-btn-prev\">
                <span>prev</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <!--************************************
                About Us Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>About pro soccer</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-aboutussection\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <figure>
                                        <img src=\"images/img-01.jpg\" alt=\"image description\">
                                    </figure>
                                </div>
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                About Us End
        *************************************-->
        <!--************************************
                Upcoming Match Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyleone\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-upcomingmatch-counter\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-02.png\" alt=\"image description\">
                                </figure>
                            </div>
                            <div class=\"col-md-8 col-sm-8 col-xs-12\">
                                <div class=\"tg-contentbox\">
                                    <div class=\"tg-section-heading\"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class=\"tg-counters\">
                                        <div class=\"tg-counter tg-days\"></div>
                                        <div class=\"tg-counter tg-hours\"></div>
                                        <div class=\"tg-counter tg-minutes\"></div>
                                        <div class=\"tg-counter tg-seconds\"></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Upcoming Match End
        *************************************-->
        <!--************************************
                Latest Result Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>latest result</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <div class=\"tab-content tg-tabscontent\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"one\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>3 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"two\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>7 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"three\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 9</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"four\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>5 - 8</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"five\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>2 - 1</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"six\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>10 - 0</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"seven\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 6</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                                    <div id=\"tg-matchscrollbar\" class=\"tg-matchscrollbar tg-allmatchstatus\">
                                        <ul class=\"tg-matchtabnav\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\">
                                                <a href=\"#one\" aria-controls=\"one\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#two\" aria-controls=\"two\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#three\" aria-controls=\"three\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#four\" aria-controls=\"four\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#five\" aria-controls=\"five\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#six\" aria-controls=\"six\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#seven\" aria-controls=\"seven\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Result End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout tg-bgdark\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-statistics\">
                            <div class=\"tg-statistic tg-goals\">
                                <span class=\"tg-icon icon-Icon1\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"2700\" data-speed=\"8000\" data-refresh-interval=\"50\">2700</span></h2>
                                <h3>Goals</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeplayers\">
                                <span class=\"tg-icon icon-Icon2\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"1673\" data-speed=\"8000\" data-refresh-interval=\"50\">1673</span></h2>
                                <h3>Active Players</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeteams\">
                                <span class=\"tg-icon icon-Icon3\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"236\" data-speed=\"8000\" data-refresh-interval=\"50\">236</span></h2>
                                <h3>Active Teams</h3>
                            </div>
                            <div class=\"tg-statistic tg-earnedawards\">
                                <span class=\"tg-icon icon-Icon4\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"197\" data-speed=\"8000\" data-refresh-interval=\"50\">197</span></h2>
                                <h3>Earned Awards</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Fixtures Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>fixtures</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
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
                                    <div id=\"tg-upcomingmatch-slider\" class=\"tg-upcomingmatch-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
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
                Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/iC9CpnSj-MU?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Top Rated Player Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>top Rated Player</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-topratedplayer tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-playerscrollbar\" class=\"tg-players tg-playerscrollbar\">
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Top Rated Player End
        *************************************-->
        <!--************************************
                Points Table Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyletwo\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-pointstablewrapper\">
                            <div class=\"col-sm-8 col-xs-12\">
                                <div class=\"tg-pointstable\">
                                    <div class=\"tg-section-heading\"><h2>points table</h2></div>
                                    <div id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-03.png\" alt=\"image description\">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Points Table End
        *************************************-->
        <!--************************************
                Blog Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Latest blog / news</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-blogpost\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-01.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\">Read more</a>
                                    </article>
                                </div>
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-02.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Blog End
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
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1834 => 1760,  343 => 272,  337 => 269,  333 => 268,  324 => 262,  311 => 252,  307 => 251,  299 => 246,  292 => 242,  282 => 235,  132 => 88,  43 => 1,);
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
                <li class=\"active menu-item-has-children\">
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li class=\"menu-item-has-children\">
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
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('templatefrontcontactus') }}\">Contact</a></li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\"><i class=\" fa fa-navicon\"></i></a>
                    <ul>
                        <li><a href=\"\">about us</a></li>
                        <li><a href=\"\">shop list</a></li>
                        <li><a href=\"\">shop grid</a></li>
                        <li><a href=\"\">shop detail</a></li>
                        <li><a href=\"\">blog list</a></li>
                        <li><a href=\"\">blog grid</a></li>
                        <li><a href=\"\">blog detail</a></li>
                        <li><a href=\"\">404 error</a></li>
                        <li><a href=\"\">comming soon</a></li>
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
            Home Slider Start
    *************************************-->
    <div class=\"tg-sliderbox\">
        <div class=\"tg-imglayer\">
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div id=\"tg-home-slider\" class=\"tg-home-slider tg-haslayout\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-btn-next\">
                <span>next</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
            <div class=\"tg-btn-prev\">
                <span>prev</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <!--************************************
                About Us Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>About pro soccer</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-aboutussection\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <figure>
                                        <img src=\"images/img-01.jpg\" alt=\"image description\">
                                    </figure>
                                </div>
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                About Us End
        *************************************-->
        <!--************************************
                Upcoming Match Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyleone\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-upcomingmatch-counter\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-02.png\" alt=\"image description\">
                                </figure>
                            </div>
                            <div class=\"col-md-8 col-sm-8 col-xs-12\">
                                <div class=\"tg-contentbox\">
                                    <div class=\"tg-section-heading\"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class=\"tg-counters\">
                                        <div class=\"tg-counter tg-days\"></div>
                                        <div class=\"tg-counter tg-hours\"></div>
                                        <div class=\"tg-counter tg-minutes\"></div>
                                        <div class=\"tg-counter tg-seconds\"></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Upcoming Match End
        *************************************-->
        <!--************************************
                Latest Result Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>latest result</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <div class=\"tab-content tg-tabscontent\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"one\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>3 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"two\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>7 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"three\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 9</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"four\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>5 - 8</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"five\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>2 - 1</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"six\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>10 - 0</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"seven\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 6</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                                    <div id=\"tg-matchscrollbar\" class=\"tg-matchscrollbar tg-allmatchstatus\">
                                        <ul class=\"tg-matchtabnav\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\">
                                                <a href=\"#one\" aria-controls=\"one\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#two\" aria-controls=\"two\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#three\" aria-controls=\"three\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#four\" aria-controls=\"four\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#five\" aria-controls=\"five\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#six\" aria-controls=\"six\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#seven\" aria-controls=\"seven\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Result End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout tg-bgdark\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-statistics\">
                            <div class=\"tg-statistic tg-goals\">
                                <span class=\"tg-icon icon-Icon1\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"2700\" data-speed=\"8000\" data-refresh-interval=\"50\">2700</span></h2>
                                <h3>Goals</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeplayers\">
                                <span class=\"tg-icon icon-Icon2\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"1673\" data-speed=\"8000\" data-refresh-interval=\"50\">1673</span></h2>
                                <h3>Active Players</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeteams\">
                                <span class=\"tg-icon icon-Icon3\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"236\" data-speed=\"8000\" data-refresh-interval=\"50\">236</span></h2>
                                <h3>Active Teams</h3>
                            </div>
                            <div class=\"tg-statistic tg-earnedawards\">
                                <span class=\"tg-icon icon-Icon4\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"197\" data-speed=\"8000\" data-refresh-interval=\"50\">197</span></h2>
                                <h3>Earned Awards</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Fixtures Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>fixtures</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
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
                                    <div id=\"tg-upcomingmatch-slider\" class=\"tg-upcomingmatch-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
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
                Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/iC9CpnSj-MU?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Top Rated Player Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>top Rated Player</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-topratedplayer tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-playerscrollbar\" class=\"tg-players tg-playerscrollbar\">
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Top Rated Player End
        *************************************-->
        <!--************************************
                Points Table Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyletwo\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-pointstablewrapper\">
                            <div class=\"col-sm-8 col-xs-12\">
                                <div class=\"tg-pointstable\">
                                    <div class=\"tg-section-heading\"><h2>points table</h2></div>
                                    <div id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-03.png\" alt=\"image description\">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Points Table End
        *************************************-->
        <!--************************************
                Blog Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Latest blog / news</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-blogpost\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-01.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\">Read more</a>
                                    </article>
                                </div>
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-02.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Blog End
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














































                <form  action=\"{{ path('login') }}\" class=\"tg-loginform\" method=\"post\">
                    <fieldset>
                        <div class=\"form-group\">
                            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"username/email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <label>
                                <input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
                                <em>Remember Meee</em>
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


</html><!doctype html>
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
                <li class=\"active menu-item-has-children\">
                    <a href=\"#\">Main</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
                        <li><a href=\"index2.html\">home2</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li><a href=\"playerdetail.html\">playergrid detail</a></li>
                    </ul>
                </li>
                <li><a href=\"buyticket.html\">Buy Tickets</a></li>
                <li class=\"menu-item-has-children\">
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
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">pro soccer media</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"soccermedia-1.html\">pro soccer media1</a></li>
                        <li><a href=\"soccermedia-2.html\">pro soccer media2</a></li>
                    </ul>
                </li>
                <li><a href=\"contactus.html\">Contact</a></li>
                <li class=\"menu-item-has-children\">
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
                                            <li class=\"active\"><a href=\"index-2.html\">home1</a></li>
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
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Home Slider Start
    *************************************-->
    <div class=\"tg-sliderbox\">
        <div class=\"tg-imglayer\">
            <img src=\"images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div id=\"tg-home-slider\" class=\"tg-home-slider tg-haslayout\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"container\">
                        <figure class=\"floating\">
                            <img src=\"images/slider/img-01.png\" alt=\"image description\">
                        </figure>
                        <div class=\"tg-slider-content\">
                            <h1>alive and <span>kickin</span></h1>
                            <div class=\"tg-btnbox\">
                                <h2>from june 27</h2>
                                <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-btn-next\">
                <span>next</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
            <div class=\"tg-btn-prev\">
                <span>prev</span>
                <span class=\"fa fa-angle-down\"></span>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <!--************************************
                About Us Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>About pro soccer</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-aboutussection\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <figure>
                                        <img src=\"images/img-01.jpg\" alt=\"image description\">
                                    </figure>
                                </div>
                                <div class=\"col-md-6 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                About Us End
        *************************************-->
        <!--************************************
                Upcoming Match Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyleone\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-upcomingmatch-counter\">
                            <div class=\"col-md-4 col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-02.png\" alt=\"image description\">
                                </figure>
                            </div>
                            <div class=\"col-md-8 col-sm-8 col-xs-12\">
                                <div class=\"tg-contentbox\">
                                    <div class=\"tg-section-heading\"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class=\"tg-counters\">
                                        <div class=\"tg-counter tg-days\"></div>
                                        <div class=\"tg-counter tg-hours\"></div>
                                        <div class=\"tg-counter tg-minutes\"></div>
                                        <div class=\"tg-counter tg-seconds\"></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                        <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Upcoming Match End
        *************************************-->
        <!--************************************
                Latest Result Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>latest result</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
                            <div class=\"row\">
                                <div class=\"col-md-8 col-sm-12 col-xs-12\">
                                    <div class=\"tab-content tg-tabscontent\">
                                        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"one\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>3 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"two\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>7 - 3</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"three\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 9</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"four\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>5 - 8</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"five\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>2 - 1</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"six\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>10 - 0</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role=\"tabpanel\" class=\"tab-pane\" id=\"seven\">
                                            <div class=\"tg-matchresult\">
                                                <div class=\"tg-box\">
                                                    <div class=\"tg-score\"><h3>4 - 6</h3></div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-01.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">Gladiators ( Win )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Roman Fenley (15)</li>
                                                            <li>Miguel Beckel (19)</li>
                                                            <li>Jonah Jolicoeur (39)</li>
                                                            <li>Connie Harland (48)</li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-teamscore\">
                                                        <strong class=\"tg-team-logo\">
                                                            <a href=\"#\">
                                                                <img src=\"images/team-logo/logo-02.png\" alt=\"image description\">
                                                            </a>
                                                        </strong>
                                                        <div class=\"tg-team-nameplusstatus\">
                                                            <h4><a href=\"#\">horned grogs ( lose )</a></h4>
                                                        </div>
                                                        <ul class=\"tg-playernameplusgoadtime\">
                                                            <li>Ethan Ryberg (22)</li>
                                                            <li>Wilbert Delbosquel (27)</li>
                                                            <li>Maynard Brabant (42)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12\">
                                    <div id=\"tg-matchscrollbar\" class=\"tg-matchscrollbar tg-allmatchstatus\">
                                        <ul class=\"tg-matchtabnav\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\">
                                                <a href=\"#one\" aria-controls=\"one\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#two\" aria-controls=\"two\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#three\" aria-controls=\"three\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#four\" aria-controls=\"four\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#five\" aria-controls=\"five\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#six\" aria-controls=\"six\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li role=\"presentation\">
                                                <a href=\"#seven\" aria-controls=\"seven\" role=\"tab\" data-toggle=\"tab\">
                                                    <div class=\"tg-match\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>win</h4>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>6 - 4</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-s-01.png\" alt=\"image description\">
                                                            </strong>
                                                            <h4>lose</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Result End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout tg-bgdark\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-statistics\">
                            <div class=\"tg-statistic tg-goals\">
                                <span class=\"tg-icon icon-Icon1\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"2700\" data-speed=\"8000\" data-refresh-interval=\"50\">2700</span></h2>
                                <h3>Goals</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeplayers\">
                                <span class=\"tg-icon icon-Icon2\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"1673\" data-speed=\"8000\" data-refresh-interval=\"50\">1673</span></h2>
                                <h3>Active Players</h3>
                            </div>
                            <div class=\"tg-statistic tg-activeteams\">
                                <span class=\"tg-icon icon-Icon3\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"236\" data-speed=\"8000\" data-refresh-interval=\"50\">236</span></h2>
                                <h3>Active Teams</h3>
                            </div>
                            <div class=\"tg-statistic tg-earnedawards\">
                                <span class=\"tg-icon icon-Icon4\"></span>
                                <h2><span class=\"tg-statistic-count\" data-from=\"0\" data-to=\"197\" data-speed=\"8000\" data-refresh-interval=\"50\">197</span></h2>
                                <h3>Earned Awards</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Fixtures Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>fixtures</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-latestresult\">
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
                                    <div id=\"tg-upcomingmatch-slider\" class=\"tg-upcomingmatch-slider tg-upcomingmatch\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-match\">
                                                    <div class=\"tg-matchdetail\">
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Gladiators</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <h3>vs</h3>
                                                        </div>
                                                        <div class=\"tg-box\">
                                                            <strong class=\"tg-teamlogo\">
                                                                <img src=\"images/team-logo/logo-l-02.png\" alt=\"image description\">
                                                            </strong>
                                                            <h3>Horned frogs</h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"tg-matchhover\">
                                                        <address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
                                                        <div class=\"tg-btnbox\">
                                                            <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                                            <a class=\"tg-btn\" href=\"#\"><span>book my ticket</span></a>
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
                Fixtures End
        *************************************-->
        <!--************************************
                Video Start
        *************************************-->
        <section class=\"tg-videobox tg-haslayout\">
            <figure>
                <img src=\"images/bg-video.jpg\" alt=\"image description\">
                <figcaption>
                    <a class=\"tg-playbtn\" href=\"https://youtu.be/iC9CpnSj-MU?iframe=true\" data-rel=\"prettyPhoto[iframe]\"></a>
                    <h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
                </figcaption>
            </figure>
        </section>
        <!--************************************
                Video End
        *************************************-->
        <!--************************************
                Top Rated Player Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>top Rated Player</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-topratedplayer tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-md-7 col-sm-12 col-xs-12\">
                                    <div id=\"tg-playerscrollbar\" class=\"tg-players tg-playerscrollbar\">
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-01.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"\t></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-02.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class=\"tg-player\">
                                            <div class=\"col-sm-6 col-xs-6 pull-right\">
                                                <div class=\"tg-playcontent\">
                                                    <a class=\"tg-theme-tag\" href=\"#\">SWEEPER</a>
                                                    <h3><a href=\"#\">Hustlin’ Owls</a></h3>
                                                    <span class=\"tg-stars\"><span></span></span>
                                                    <div class=\"tg-description\">
                                                        <p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
                                                    </div>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-6\">
                                                <figure>
                                                    <a href=\"#\">
                                                        <img src=\"images/player/img-03.png\" alt=\"image description\">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"tg-contentbox\">
                                        <div class=\"tg-section-heading\"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Top Rated Player End
        *************************************-->
        <!--************************************
                Points Table Start
        *************************************-->
        <section class=\" tg-haslayout tg-bgstyletwo\">
            <div class=\"tg-bgboxone\"></div>
            <div class=\"tg-bgboxtwo\"></div>
            <div class=\"tg-bgpattrant\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"tg-pointstablewrapper\">
                            <div class=\"col-sm-8 col-xs-12\">
                                <div class=\"tg-pointstable\">
                                    <div class=\"tg-section-heading\"><h2>points table</h2></div>
                                    <div id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">
                                        <div class=\"swiper-wrapper\">
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Big jaw lion</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Pink Dragons</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                            <div class=\"swiper-slide\">
                                                <div class=\"tg-pointtable\">
                                                    <div class=\"tg-box\">Red Wolves</div>
                                                    <div class=\"tg-box\">w 1</div>
                                                    <div class=\"tg-box\">d 0</div>
                                                    <div class=\"tg-box\">l 1</div>
                                                    <div class=\"tg-box\">pt 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"tg-themebtnnext\"><span class=\"fa fa-angle-down\"></span></div>
                                        <div class=\"tg-themebtnprev\"><span class=\"fa fa-angle-up\"></span></div>
                                    </div>
                                    <div class=\"tg-btnbox\">
                                        <a class=\"tg-btn\" href=\"#\"><span>view all</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 col-xs-12 hidden-xs\">
                                <figure>
                                    <img src=\"images/img-03.png\" alt=\"image description\">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Points Table End
        *************************************-->
        <!--************************************
                Blog Start
        *************************************-->
        <section class=\"tg-main-section tg-haslayout\">
            <div class=\"container\">
                <div class=\"tg-section-name\">
                    <h2>Latest blog / news</h2>
                </div>
                <div class=\"col-sm-11 col-xs-11 pull-right\">
                    <div class=\"row\">
                        <div class=\"tg-blogpost\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-01.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\">Read more</a>
                                    </article>
                                </div>
                                <div class=\"col-sm-6 col-xs-12\">
                                    <article class=\"tg-post\">
                                        <figure class=\"tg-postimg\">
                                            <a href=\"#\">
                                                <img src=\"images/blog/img-02.jpg\" alt=\"image description\">
                                            </a>
                                            <figcaption>
                                                <ul class=\"tg-postmetadata\">
                                                    <li><a href=\"#\">by admin</a></li>
                                                    <li><a href=\"#\">04 comments</a></li>
                                                    <li><a href=\"#\">lifestyle</a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class=\"tg-posttitle\"><h3><a href=\"#\">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                                        </div>
                                        <a class=\"tg-btn\" href=\"#\"><span>read more</span></a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Blog End
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


</html>", "base2.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\base2.html.twig");
    }
}
