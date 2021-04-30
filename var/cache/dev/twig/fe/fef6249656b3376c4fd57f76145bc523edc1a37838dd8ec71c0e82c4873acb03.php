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

/* rate/new.html.twig */
class __TwigTemplate_bab6366ef72f14dfd035b1a35b6a6215b9e02921f41098f2776d4a52da67109e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zxx\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\" lang=\"zxx\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\" lang=\"zxx\"> <![endif]-->
<!--[if gt IE 8]><!-->
\t<html
\tlang=\"zxx\"> <!--<![endif]-->


\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>Soccer BootStrap HTML5 CSS3 Theme</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"apple-touch-icon\" href=\"../apple-touch-icon.png\">
\t\t<link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/normalize.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/transitions.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/prettyPhoto.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/swiper.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/jquery-ui.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/animate.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/customScrollbar.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/icomoon.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/color.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/responsive.css\">
\t\t<script src=\"../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
\t</head>
\t<body>
\t\t<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
\t\t    your browser</a> to improve your experience.</p>
\t\t<![endif]-->
\t\t<!--************************************
\t\t        Wrapper Start
\t\t*************************************-->
\t\t\t<div
\t\t\tid=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\"> <!--************************************
\t\t\t\t            Mobile Menu Start
\t\t\t\t    *************************************-->
\t\t\t<div id=\"tg-navigationm-mobile\" class=\"tg-navigationm-mobile tg-navigation collapse navbar-collapse\">
\t\t\t\t<span id=\"tg-close\" class=\"tg-close fa fa-close\"></span>
\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Main</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">home1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">home2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">team</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v1.html\">playergrid-v1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v2.html\">playergrid-v2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playerdetail.html\">playergrid detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"buyticket.html\">Buy Tickets</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Match Results</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"matchresult.html\">match result</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"matchresultdetail.html\">match result detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">fixtures</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"fixtures.html\">fixtures</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"fixturedetail.html\">fixture detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_index");
        echo "\">Rating</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"  ";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo " \">Poser Votre Réclamation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"  ";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_new");
        echo "\">Poser Votre Avis</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\ts
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contactus.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\" fa fa-navicon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"aboutus.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shoplist.html\">shop list</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shopgrid.html\">shop grid</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"productsingle.html\">shop detail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"bloglist.html\">blog list</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"bloggrid.html\">blog grid</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blogdetail.html\">blog detail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 error</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">comming soon</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--************************************
\t\t\t            Mobile Menu End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Header Start
\t\t\t    *************************************-->
\t\t\t<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tg-topbar tg-haslayout\">
\t\t\t\t\t\t\t\t<nav id=\"tg-topaddnav\" class=\"tg-topaddnav\">
\t\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-addnavigationm-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"tg-addnavigationm-mobile\" class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"tg-addnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-register\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartcontent dropdown-menu\" aria-labelledby=\"tg-cartdropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-01.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-02.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-03.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-btnbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"tg-carttotal\">Total: \$134</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>checkout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"tg-btn-search\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-dribbble\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav id=\"tg-nav\" class=\"tg-nav brand-center\">
\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigationm-mobile\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<strong class=\"tg-logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\"><img src=\"../images/logo.png\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-navigation\" class=\"tg-navigation\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Main</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">home1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">home2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">team</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v1.html\">playergrid-v1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v2.html\">playergrid-v2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playerdetail.html\">playergrid detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"buyticket.html\">Buy Tickets</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Match Results</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"matchresult.html\">match result</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"matchresultdetail.html\">match result detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">fixtures</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"fixtures.html\">fixtures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"fixturedetail.html\">fixture detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 336
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_index");
        echo "\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"  ";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo " \">Poser Votre Réclamation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"  ";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_new");
        echo "\">Poser Votre Avis</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contactus.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-navicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"aboutus.html\">about us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoplist.html\">shop list</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopgrid.html\">shop grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"productsingle.html\">shop detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"bloglist.html\">blog list</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"bloggrid.html\">blog grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blogdetail.html\">blog detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 error</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">comming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!--************************************
\t\t\t            Header End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Banner Start
\t\t\t    *************************************-->
\t\t\t<div class=\"tg-banner tg-haslayout\">
\t\t\t\t<div class=\"tg-imglayer\">
\t\t\t\t\t<img src=\"../images/bg-pattran.png\" alt=\"image desctription\">
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-banner-content tg-haslayout\">
\t\t\t\t\t\t\t<div class=\"tg-pagetitle\">
\t\t\t\t\t\t\t\t<h1>Pro Soccer Media</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"active\">Pro Soccer Media</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--************************************
\t\t\t            Banner End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Main Start
\t\t\t    *************************************-->
\t\t\t<main
\t\t\t\tid=\"tg-main\" class=\"tg-main tg-haslayout\">
\t\t\t\t<!--************************************
\t\t\t\t              // hedha l7achty byh :p
\t\t\t\t        *************************************-->
\t\t\t\t<h1 class=\"tg-filterbale-nav option-set\">Rating</h1>

\t\t\t\t<!--*********************************************
\t\t\t\t                 Points Table Start
\t\t\t\t         *************************************-->
\t\t\t\t<div id=\"tg-pointstable-slider\" class=\"tg-filterbale-nav option-set\">
\t\t\t\t\t";
        // line 416
        $this->displayBlock('body', $context, $blocks);
        // line 423
        echo "\t\t\t\t</div>
\t\t\t\t<!--************************************
\t\t\t\t                Points Table End
\t\t\t\t        *************************************-->

\t\t\t\t<!--************************************
\t\t\t\t              //  Lehna youfa l7achty byh :p
\t\t\t\t        *************************************-->
\t\t\t</main>
\t\t\t<!--************************************
\t\t\t            Main End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Footer Start
\t\t\t    *************************************-->
\t\t\t<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t\t\t<div class=\"tg-haslayout tg-footerinfobox\">
\t\t\t\t\t<div class=\"tg-bgboxone\"></div>
\t\t\t\t\t<div class=\"tg-bgboxtwo\"></div>
\t\t\t\t\t<div class=\"tg-footerinfo\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>signup newsletter</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t<p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si
\t\t\t\t\t\t\t\t\t\t\t\t                                        aliqua quis.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<form class=\"tg-form-newsletter\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn\" type=\"submit\">signup</button>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>popular tags</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-tags\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">fashion</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">travel</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">blog</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">sports</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">magazine</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">ui</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">tech</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">fun time</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">soccer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Top products</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-toprated\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-04.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-05.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-06.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-07.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-haslayout\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"tg-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/logo2.png\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna
\t\t\t\t\t\t\t\t\t\t\t\t                                        aliqua enim minim veniami quis nostrud.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"info%40domain.html\">info@domain.com</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>+44 123 456 788 - 9</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-haslayout\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tg-footerbar\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"tg-copyright\">
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<nav class=\"tg-footernav\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Main</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Buy Tickets</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Match Results</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Upcoming Matches</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Shop</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!--************************************
\t\t\t            Footer End
\t\t\t    *************************************-->
\t\t</div>
\t\t<!--************************************
\t\t        Wrapper End
\t\t*************************************-->
\t\t<!--************************************
\t\t        Search Start
\t\t*************************************-->
\t\t<div class=\"tg-searchbox\">
\t\t\t<a id=\"tg-close-search\" class=\"tg-close-search\" href=\"javascript:void(0)\">
\t\t\t\t<span class=\"fa fa-close\"></span>
\t\t\t</a>
\t\t\t<div class=\"tg-searcharea\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t\t\t\t<form class=\"tg-form-search\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"keyword\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-icon_search2\"></i>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<p>Start typing and press Enter to search</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t        Search End
\t\t*************************************-->
\t\t<!--************************************
\t\t    LightBoxes Start
\t\t*************************************-->
\t\t<div class=\"tg-modalbox modal fade\" id=\"tg-login\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"tg-modal-content\">
\t\t\t\t\t<div class=\"tg-formarea\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Login</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"tg-loginform\" method=\"post\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"userName/email\" class=\"form-control\" placeholder=\"username/email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<em>Remember Me</em>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<em>Forgot Password</em>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Don't have an account?
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Signup</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-logintype\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Login with</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"tg-facebook\">
\t\t\t\t\t\t\t\t<a href=\"#\">facebook</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\">
\t\t\t\t\t\t\t\t<a href=\"#\">twitter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\">
\t\t\t\t\t\t\t\t<a href=\"#\">google+</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-linkedin\">
\t\t\t\t\t\t\t\t<a href=\"#\">linkedin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tg-modalbox modal fade\" id=\"tg-register\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"tg-modal-content\">
\t\t\t\t\t<div class=\"tg-formarea\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Signup</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"tg-loginform\" method=\"post\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"userName\" class=\"form-control\" placeholder=\"username\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-note\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<span>We will email you your password.</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Already have an account?
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Login</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-logintype\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Signup with</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"tg-facebook\">
\t\t\t\t\t\t\t\t<a href=\"#\">facebook</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\">
\t\t\t\t\t\t\t\t<a href=\"#\">twitter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\">
\t\t\t\t\t\t\t\t<a href=\"#\">google+</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-linkedin\">
\t\t\t\t\t\t\t\t<a href=\"#\">linkedin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t    LightBoxes End
\t\t*************************************-->
\t\t<script src=\"../js/vendor/jquery-library.js\"></script>
\t\t<script src=\"../js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"../js/customScrollbar.min.js\"></script>
\t\t<script src=\"../js/owl.carousel.js\"></script>
\t\t<script src=\"../js/isotope.pkgd.js\"></script>
\t\t<script src=\"../js/prettyPhoto.js\"></script>
\t\t<script src=\"../js/swiper.min.js\"></script>
\t\t<script src=\"../js/jquery-ui.js\"></script>
\t\t<script src=\"../js/countTo.js\"></script>
\t\t<script src=\"../js/appear.js\"></script>
\t\t<script src=\"../js/main.js\"></script>
\t</body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 416
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 417
        echo "\t\t\t\t\t\t<h1>Create new Rate</h1>

\t\t\t\t\t\t";
        // line 419
        echo twig_include($this->env, $context, "rate/_form.html.twig");
        echo "

\t\t\t\t\t\t<a href=\"";
        // line 421
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_index");
        echo "\">back to list</a>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rate/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  861 => 421,  856 => 419,  852 => 417,  842 => 416,  481 => 423,  479 => 416,  402 => 342,  396 => 339,  390 => 336,  165 => 114,  159 => 111,  153 => 108,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zxx\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\" lang=\"zxx\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\" lang=\"zxx\"> <![endif]-->
<!--[if gt IE 8]><!-->
\t<html
\tlang=\"zxx\"> <!--<![endif]-->


\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>Soccer BootStrap HTML5 CSS3 Theme</title>
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"apple-touch-icon\" href=\"../apple-touch-icon.png\">
\t\t<link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/normalize.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/transitions.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/prettyPhoto.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/swiper.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/jquery-ui.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/animate.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/owl.theme.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/customScrollbar.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/icomoon.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/main.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/color.css\">
\t\t<link rel=\"stylesheet\" href=\"../css/responsive.css\">
\t\t<script src=\"../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
\t</head>
\t<body>
\t\t<!--[if lt IE 8]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
\t\t    your browser</a> to improve your experience.</p>
\t\t<![endif]-->
\t\t<!--************************************
\t\t        Wrapper Start
\t\t*************************************-->
\t\t\t<div
\t\t\tid=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\"> <!--************************************
\t\t\t\t            Mobile Menu Start
\t\t\t\t    *************************************-->
\t\t\t<div id=\"tg-navigationm-mobile\" class=\"tg-navigationm-mobile tg-navigation collapse navbar-collapse\">
\t\t\t\t<span id=\"tg-close\" class=\"tg-close fa fa-close\"></span>
\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Main</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">home1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">home2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">team</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v1.html\">playergrid-v1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v2.html\">playergrid-v2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"playerdetail.html\">playergrid detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"buyticket.html\">Buy Tickets</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Match Results</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"matchresult.html\">match result</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"matchresultdetail.html\">match result detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">fixtures</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"fixtures.html\">fixtures</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"fixturedetail.html\">fixture detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"{{ path('rate_index') }}\">Rating</a>
\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"  {{ path('reclamation_index') }} \">Poser Votre Réclamation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"  {{ path('rate_new') }}\">Poser Votre Avis</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\ts
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contactus.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\" fa fa-navicon\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"aboutus.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shoplist.html\">shop list</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"shopgrid.html\">shop grid</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"productsingle.html\">shop detail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"bloglist.html\">blog list</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"bloggrid.html\">blog grid</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blogdetail.html\">blog detail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 error</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">comming soon</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--************************************
\t\t\t            Mobile Menu End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Header Start
\t\t\t    *************************************-->
\t\t\t<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"tg-topbar tg-haslayout\">
\t\t\t\t\t\t\t\t<nav id=\"tg-topaddnav\" class=\"tg-topaddnav\">
\t\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-addnavigationm-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"tg-addnavigationm-mobile\" class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"tg-addnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-register\">Register</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-cartcontent dropdown-menu\" aria-labelledby=\"tg-cartdropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-01.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-02.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-03.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-product-detail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$23</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-delete\" href=\"#\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-btnbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong class=\"tg-carttotal\">Total: \$134</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>checkout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"tg-btn-search\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-socialicons\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-dribbble\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav id=\"tg-nav\" class=\"tg-nav brand-center\">
\t\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigationm-mobile\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<strong class=\"tg-logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\"><img src=\"../images/logo.png\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-navigation\" class=\"tg-navigation\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Main</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index-2.html\">home1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">home2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">team</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v1.html\">playergrid-v1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playergrid-v2.html\">playergrid-v2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"playerdetail.html\">playergrid detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"buyticket.html\">Buy Tickets</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Match Results</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"matchresult.html\">match result</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"matchresultdetail.html\">match result detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-colhalf\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">fixtures</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"fixtures.html\">fixtures</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"fixturedetail.html\">fixture detail</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('rate_index') }}\">Rating</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"  {{ path('reclamation_index') }} \">Poser Votre Réclamation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"  {{ path('rate_new') }}\">Poser Votre Avis</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contactus.html\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-navicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"aboutus.html\">about us</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoplist.html\">shop list</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopgrid.html\">shop grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"productsingle.html\">shop detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"bloglist.html\">blog list</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"bloggrid.html\">blog grid</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blogdetail.html\">blog detail</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 error</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">comming soon</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!--************************************
\t\t\t            Header End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Banner Start
\t\t\t    *************************************-->
\t\t\t<div class=\"tg-banner tg-haslayout\">
\t\t\t\t<div class=\"tg-imglayer\">
\t\t\t\t\t<img src=\"../images/bg-pattran.png\" alt=\"image desctription\">
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-banner-content tg-haslayout\">
\t\t\t\t\t\t\t<div class=\"tg-pagetitle\">
\t\t\t\t\t\t\t\t<h1>Pro Soccer Media</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ol class=\"tg-breadcrumb\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"active\">Pro Soccer Media</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--************************************
\t\t\t            Banner End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Main Start
\t\t\t    *************************************-->
\t\t\t<main
\t\t\t\tid=\"tg-main\" class=\"tg-main tg-haslayout\">
\t\t\t\t<!--************************************
\t\t\t\t              // hedha l7achty byh :p
\t\t\t\t        *************************************-->
\t\t\t\t<h1 class=\"tg-filterbale-nav option-set\">Rating</h1>

\t\t\t\t<!--*********************************************
\t\t\t\t                 Points Table Start
\t\t\t\t         *************************************-->
\t\t\t\t<div id=\"tg-pointstable-slider\" class=\"tg-filterbale-nav option-set\">
\t\t\t\t\t{% block body %}
\t\t\t\t\t\t<h1>Create new Rate</h1>

\t\t\t\t\t\t{{ include('rate/_form.html.twig') }}

\t\t\t\t\t\t<a href=\"{{ path('rate_index') }}\">back to list</a>
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t\t<!--************************************
\t\t\t\t                Points Table End
\t\t\t\t        *************************************-->

\t\t\t\t<!--************************************
\t\t\t\t              //  Lehna youfa l7achty byh :p
\t\t\t\t        *************************************-->
\t\t\t</main>
\t\t\t<!--************************************
\t\t\t            Main End
\t\t\t    *************************************-->
\t\t\t<!--************************************
\t\t\t            Footer Start
\t\t\t    *************************************-->
\t\t\t<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
\t\t\t\t<div class=\"tg-haslayout tg-footerinfobox\">
\t\t\t\t\t<div class=\"tg-bgboxone\"></div>
\t\t\t\t\t<div class=\"tg-bgboxtwo\"></div>
\t\t\t\t\t<div class=\"tg-footerinfo\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>signup newsletter</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t<p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si
\t\t\t\t\t\t\t\t\t\t\t\t                                        aliqua quis.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<form class=\"tg-form-newsletter\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"tg-btn\" type=\"submit\">signup</button>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>popular tags</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-tags\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">fashion</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">travel</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">blog</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">sports</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">magazine</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">ui</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">tech</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">fun time</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-tag\" href=\"#\">soccer</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Top products</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-toprated\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-04.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-05.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-06.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/thumbnails/img-07.jpg\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-productcontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Smooth 3-Stripes Scarf</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-stars\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-price\">Price: \$67</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-footercol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-haslayout\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"tg-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../images/logo2.png\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna
\t\t\t\t\t\t\t\t\t\t\t\t                                        aliqua enim minim veniami quis nostrud.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<address>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</address>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"info%40domain.html\">info@domain.com</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>+44 123 456 788 - 9</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-haslayout\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tg-footerbar\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<span class=\"tg-copyright\">
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<nav class=\"tg-footernav\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Main</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Buy Tickets</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Match Results</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Upcoming Matches</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Shop</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t<!--************************************
\t\t\t            Footer End
\t\t\t    *************************************-->
\t\t</div>
\t\t<!--************************************
\t\t        Wrapper End
\t\t*************************************-->
\t\t<!--************************************
\t\t        Search Start
\t\t*************************************-->
\t\t<div class=\"tg-searchbox\">
\t\t\t<a id=\"tg-close-search\" class=\"tg-close-search\" href=\"javascript:void(0)\">
\t\t\t\t<span class=\"fa fa-close\"></span>
\t\t\t</a>
\t\t\t<div class=\"tg-searcharea\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t\t\t\t<form class=\"tg-form-search\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"keyword\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-icon_search2\"></i>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<p>Start typing and press Enter to search</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t        Search End
\t\t*************************************-->
\t\t<!--************************************
\t\t    LightBoxes Start
\t\t*************************************-->
\t\t<div class=\"tg-modalbox modal fade\" id=\"tg-login\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"tg-modal-content\">
\t\t\t\t\t<div class=\"tg-formarea\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Login</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"tg-loginform\" method=\"post\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"userName/email\" class=\"form-control\" placeholder=\"username/email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"rememberme\" class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<em>Remember Me</em>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<em>Forgot Password</em>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Don't have an account?
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Signup</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-logintype\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Login with</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"tg-facebook\">
\t\t\t\t\t\t\t\t<a href=\"#\">facebook</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\">
\t\t\t\t\t\t\t\t<a href=\"#\">twitter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\">
\t\t\t\t\t\t\t\t<a href=\"#\">google+</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-linkedin\">
\t\t\t\t\t\t\t\t<a href=\"#\">linkedin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tg-modalbox modal fade\" id=\"tg-register\" tabindex=\"-1\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"tg-modal-content\">
\t\t\t\t\t<div class=\"tg-formarea\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Signup</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"tg-loginform\" method=\"post\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"userName\" class=\"form-control\" placeholder=\"username\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-note\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<span>We will email you your password.</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<button class=\"tg-btn tg-btn-lg\" type=\"submit\">Login Now</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t<p>Already have an account?
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Login</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tg-logintype\">
\t\t\t\t\t\t<div class=\"tg-border-heading\">
\t\t\t\t\t\t\t<h3>Signup with</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"tg-facebook\">
\t\t\t\t\t\t\t\t<a href=\"#\">facebook</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-twitter\">
\t\t\t\t\t\t\t\t<a href=\"#\">twitter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-googleplus\">
\t\t\t\t\t\t\t\t<a href=\"#\">google+</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tg-linkedin\">
\t\t\t\t\t\t\t\t<a href=\"#\">linkedin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t    LightBoxes End
\t\t*************************************-->
\t\t<script src=\"../js/vendor/jquery-library.js\"></script>
\t\t<script src=\"../js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"../js/customScrollbar.min.js\"></script>
\t\t<script src=\"../js/owl.carousel.js\"></script>
\t\t<script src=\"../js/isotope.pkgd.js\"></script>
\t\t<script src=\"../js/prettyPhoto.js\"></script>
\t\t<script src=\"../js/swiper.min.js\"></script>
\t\t<script src=\"../js/jquery-ui.js\"></script>
\t\t<script src=\"../js/countTo.js\"></script>
\t\t<script src=\"../js/appear.js\"></script>
\t\t<script src=\"../js/main.js\"></script>
\t</body>


</html>
", "rate/new.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\rate\\new.html.twig");
    }
}
