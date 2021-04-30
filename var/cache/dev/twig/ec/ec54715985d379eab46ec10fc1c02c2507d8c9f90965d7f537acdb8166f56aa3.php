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

/* templateFront/jouerdetails.html.twig */
class __TwigTemplate_9899475e71e575dcccabc67663ad2d1d369ebe1e7e08dce74bfc3282184ddf6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/jouerdetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/jouerdetails.html.twig"));

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
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/transitions.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/swiper.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/customScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">
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
                <li class=\"active\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li class=\"active\"><a href=\"playerdetail.html\">playergrid detail</a></li>
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
        // line 139
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
                                <a href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ex-2.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png\" alt=\"image description"), "html", null, true);
        echo "\"></a>
                            </strong>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation\">
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Main</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"index-2.html\">home1</a></li>
                                            <li><a href=\"index2.html\">home2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"active\">
                                        <a href=\"#\">team</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                                            <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                                            <li class=\"active\"><a href=\"playerdetail.html\">playergrid detail</a></li>
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
                        <h1>player Detail</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">player Detail</li>
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
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"tg-twocolumns\" class=\"tg-twocolumns tg-main-section tg-haslayout\">
                    <div class=\"col-sm-9 col-xs-12 pull-left\">
                        <div class=\"tg-player-detail tg-haslayout\">
                            <div class=\"tg-player-data tg-haslayout\">
                                <div class=\"tg-player-info tg-haslayout\">


                                    <div class=\"row\">
                                        <div class=\"col-sm-4 col-xs-12\">
                                            <div class=\"tg-widget tg-imagewidget\">
                                                <figure>
                                                    <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 340, $this->source); })()), "image", [], "any", false, false, false, 340))), "html", null, true);
        echo "\" alt=\"image description\">
                                                </figure>
                                            </div>
                                            <div class=\"tg-widget tg-mapwidget\">
                                                <div id=\"tg-map\" class=\"tg-map tg-haslayout\">





                                                    </head>
                                                    <body>
                                                    <div id=\"mapcanvas\">

                                                        <script type=\"text/javascript\">

                                                            function getLocation() {
                                                                if (navigator.geolocation) {
                                                                    navigator.geolocation.getCurrentPosition(showPosition);

                                                                } else {
                                                                    x.innerHTML = \"Geolocation is not supported by this browser.\";
                                                                }
                                                            }

                                                            function showPosition(position) {
                                                                x.innerHTML = \"Latitude: \" + position.coords.latitude +
                                                                    \"<br>Longitude: \" + position.coords.longitude;
                                                            }

                                                            document.map = new google.maps.Map(document.getElementById(\"mapcanvas\"));
                                                            var latlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                                                            var Options = {
                                                                zoom: 15,
                                                                center: latlng,
                                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                                            };
                                                            var map = new google.maps.Map(document.getElementById(\"mapcanvas\"), Options);
                                                            //var carMarkerImage = new google.maps.MarkerImage('resources/images/car.png');
                                                            var marker = new google.maps.Marker({
                                                                position: new google.maps.LatLng( getLocation()),
                                                                map: map,
                                                                draggable: false,
//icon: carMarkerImage,
                                                                title: \"\",
                                                                autoPan: true

                                                            });
                                                            var infobulle = new google.maps.InfoWindow({
                                                                content: ";
        // line 389
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 389, $this->source); })()), "ville", [], "any", false, false, false, 389), "html", null, true);
        echo "
                                                            });
                                                            google.maps.event.addListener(marker, 'mouseover', function() {
                                                                infobulle.open(map, marker);
                                                            });


                                                            document.goToLocation = function(x, y) {
                                                                alert(\"goToLocation, x: \" + x +\", y:\" + y);
                                                                var latLng = new google.maps.LatLng(x, y);
                                                                marker.setPosition(latLng);
                                                                map.setCenter(latLng);
                                                            }


                                                        </script>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-8 col-xs-12\">
                                            <div class=\"tg-playcontent\">
                                                <a href=\"#\" class=\"tg-theme-tag\">PLAYER</a>
                                                <h3><a href=\"#\">";
        // line 414
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 414, $this->source); })()), "nomJoueur", [], "any", false, false, false, 414), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 414, $this->source); })()), "prenomJoueur", [], "any", false, false, false, 414), "html", null, true);
        echo "</a></h3>
                                                <span class=\"tg-stars\"><span></span></span>
                                            </div>
                                            <ul>

                                                <li>Team :</li>
                                                <li>";
        // line 420
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 420, $this->source); })()), "idEquipe", [], "any", false, false, false, 420), "nomEquipe", [], "any", false, false, false, 420), "html", null, true);
        echo "</li>
                                                <li>Birth Date :</li>
                                                <li> ";
        // line 422
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 422, $this->source); })()), "dateNaissance", [], "any", false, false, false, 422), "d/m/Y"), "html", null, true);
        echo " </li>
                                                <li>age :</li>
                                                <li>";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 424, $this->source); })()), "ageJoueur", [], "any", false, false, false, 424), "html", null, true);
        echo " Year old</li>
                                                <li>Birth Place :</li>
                                                <li>";
        // line 426
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 426, $this->source); })()), "ville", [], "any", false, false, false, 426), "html", null, true);
        echo "</li>

                                                <li>Position :</li>
                                                <li>";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 429, $this->source); })()), "position", [], "any", false, false, false, 429), "html", null, true);
        echo "</li>

                                                <li>Social Networks :</li>
                                                <li>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                                <div class=\"tg-player-description tg-haslayout\">
                                    <div class=\"tg-description\">
                                        <div class=\"earth3dmap-com\"><iframe id=\"iframemap\" src=\"https://maps.google.com/maps?q=";
        // line 449
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 449, $this->source); })()), "ville", [], "any", false, false, false, 449), "html", null, true);
        echo "&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\"></iframe><div style=\"color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;\"> <a style=\"color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;\" href=\"http://earth3dmap.com/?from=embed\" target=\"_blank\" ></a></div>
                                </div>














































                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
            </div></div>
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
        return "templateFront/jouerdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 449,  552 => 429,  546 => 426,  541 => 424,  536 => 422,  531 => 420,  520 => 414,  492 => 389,  440 => 340,  321 => 226,  231 => 139,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
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
    <link rel=\"apple-touch-icon\" href=\"{{ asset('apple-touch-icon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/transitions.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/prettyPhoto.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/swiper.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/customScrollbar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/color.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\">
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
                <li class=\"active\">
                    <a href=\"#\">team</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                        <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                        <li class=\"active\"><a href=\"playerdetail.html\">playergrid detail</a></li>
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
                                                                        <img src=\"{{ asset('images/thumbnails/img-01.jpg') }}\" alt=\"image description\">
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
                                <a href=\"{{ asset('ex-2.html') }}\"><img src=\"{{ asset('images/logo.png\" alt=\"image description') }}\"></a>
                            </strong>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation\">
                            <div class=\"tg-colhalf\">
                                <ul>
                                    <li>
                                        <a href=\"#\">Main</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"index-2.html\">home1</a></li>
                                            <li><a href=\"index2.html\">home2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"active\">
                                        <a href=\"#\">team</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"playergrid-v1.html\">playergrid-v1</a></li>
                                            <li><a href=\"playergrid-v2.html\">playergrid-v2</a></li>
                                            <li class=\"active\"><a href=\"playerdetail.html\">playergrid detail</a></li>
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
                        <h1>player Detail</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">player Detail</li>
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
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"tg-twocolumns\" class=\"tg-twocolumns tg-main-section tg-haslayout\">
                    <div class=\"col-sm-9 col-xs-12 pull-left\">
                        <div class=\"tg-player-detail tg-haslayout\">
                            <div class=\"tg-player-data tg-haslayout\">
                                <div class=\"tg-player-info tg-haslayout\">


                                    <div class=\"row\">
                                        <div class=\"col-sm-4 col-xs-12\">
                                            <div class=\"tg-widget tg-imagewidget\">
                                                <figure>
                                                    <img src=\"{{ asset('uploads/images/' ~ joueur.image ) }}\" alt=\"image description\">
                                                </figure>
                                            </div>
                                            <div class=\"tg-widget tg-mapwidget\">
                                                <div id=\"tg-map\" class=\"tg-map tg-haslayout\">





                                                    </head>
                                                    <body>
                                                    <div id=\"mapcanvas\">

                                                        <script type=\"text/javascript\">

                                                            function getLocation() {
                                                                if (navigator.geolocation) {
                                                                    navigator.geolocation.getCurrentPosition(showPosition);

                                                                } else {
                                                                    x.innerHTML = \"Geolocation is not supported by this browser.\";
                                                                }
                                                            }

                                                            function showPosition(position) {
                                                                x.innerHTML = \"Latitude: \" + position.coords.latitude +
                                                                    \"<br>Longitude: \" + position.coords.longitude;
                                                            }

                                                            document.map = new google.maps.Map(document.getElementById(\"mapcanvas\"));
                                                            var latlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                                                            var Options = {
                                                                zoom: 15,
                                                                center: latlng,
                                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                                            };
                                                            var map = new google.maps.Map(document.getElementById(\"mapcanvas\"), Options);
                                                            //var carMarkerImage = new google.maps.MarkerImage('resources/images/car.png');
                                                            var marker = new google.maps.Marker({
                                                                position: new google.maps.LatLng( getLocation()),
                                                                map: map,
                                                                draggable: false,
//icon: carMarkerImage,
                                                                title: \"\",
                                                                autoPan: true

                                                            });
                                                            var infobulle = new google.maps.InfoWindow({
                                                                content: {{ joueur.ville }}
                                                            });
                                                            google.maps.event.addListener(marker, 'mouseover', function() {
                                                                infobulle.open(map, marker);
                                                            });


                                                            document.goToLocation = function(x, y) {
                                                                alert(\"goToLocation, x: \" + x +\", y:\" + y);
                                                                var latLng = new google.maps.LatLng(x, y);
                                                                marker.setPosition(latLng);
                                                                map.setCenter(latLng);
                                                            }


                                                        </script>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-8 col-xs-12\">
                                            <div class=\"tg-playcontent\">
                                                <a href=\"#\" class=\"tg-theme-tag\">PLAYER</a>
                                                <h3><a href=\"#\">{{ joueur.nomJoueur }} {{ joueur.prenomJoueur }}</a></h3>
                                                <span class=\"tg-stars\"><span></span></span>
                                            </div>
                                            <ul>

                                                <li>Team :</li>
                                                <li>{{ joueur.idEquipe.nomEquipe }}</li>
                                                <li>Birth Date :</li>
                                                <li> {{joueur.dateNaissance|date('d/m/Y') }} </li>
                                                <li>age :</li>
                                                <li>{{ joueur.ageJoueur }} Year old</li>
                                                <li>Birth Place :</li>
                                                <li>{{ joueur.ville }}</li>

                                                <li>Position :</li>
                                                <li>{{ joueur.position }}</li>

                                                <li>Social Networks :</li>
                                                <li>
                                                    <ul class=\"tg-socialicons\">
                                                        <li><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                                <div class=\"tg-player-description tg-haslayout\">
                                    <div class=\"tg-description\">
                                        <div class=\"earth3dmap-com\"><iframe id=\"iframemap\" src=\"https://maps.google.com/maps?q={{ joueur.ville }}&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\"></iframe><div style=\"color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;\"> <a style=\"color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;\" href=\"http://earth3dmap.com/?from=embed\" target=\"_blank\" ></a></div>
                                </div>














































                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
            </div></div>
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


</html>", "templateFront/jouerdetails.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\templateFront\\jouerdetails.html.twig");
    }
}
