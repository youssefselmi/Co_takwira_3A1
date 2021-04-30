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

/* reclamation/index.html.twig */
class __TwigTemplate_6f83dbdd2e501cba5e5f05e216e12a812c139e9b7cdfe0693ba2c8450c920a14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>
<html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"zxx\"> <![endif]-->
<!--[if IE 7]>
<html class=\"no-js lt-ie9 lt-ie8\" lang=\"zxx\"> <![endif]-->
<!--[if IE 8]>
<html class=\"no-js lt-ie9\" lang=\"zxx\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html  lang=\"zxx\"> <!--<![endif]-->


<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Soccer BootStrap HTML5 CSS3 Theme</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"../apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/normalize.css\">
    <link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"../css/transitions.css\">
    <link rel=\"stylesheet\" href=\"../css/prettyPhoto.css\">
    <link rel=\"stylesheet\" href=\"../css/swiper.min.css\">
    <link rel=\"stylesheet\" href=\"../css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"../css/animate.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.theme.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"../css/customScrollbar.css\">
    <link rel=\"stylesheet\" href=\"../css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <link rel=\"stylesheet\" href=\"../css/color.css\">
    <link rel=\"stylesheet\" href=\"../css/responsive.css\">
    <script src=\"../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
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
                <li>
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"  ";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo " \">Réclamation</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"  ";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo " \">Poser Votre Réclamation</a></li>
                        <li><a href=\"  ";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_index");
        echo "\">Poser Votre Avis</a></li>
                    </ul>
                    s
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
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                        data-target=\"#tg-addnavigationm-mobile\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </button>
                            </div>
                            <div id=\"tg-addnavigationm-mobile\"
                                 class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
                                <div class=\"tg-colhalf pull-right\">
                                    <nav class=\"tg-addnav\">
                                        <ul>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a>
                                            </li>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\"
                                                   data-target=\"#tg-register\">Register</a></li>
                                            <li>
                                                <div class=\"tg-cart\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                       id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>
                                                    <div class=\"tg-cartcontent dropdown-menu\"
                                                         aria-labelledby=\"tg-cartdropdown\">
                                                        <ul>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"../images/thumbnails/img-01.jpg\"
                                                                             alt=\"image description\">
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
                                                                        <img src=\"../images/thumbnails/img-02.jpg\"
                                                                             alt=\"image description\">
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
                                                                        <img src=\"../images/thumbnails/img-03.jpg\"
                                                                             alt=\"image description\">
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
                                                <a id=\"tg-btn-search\" href=\"javascript:void(0)\"><i
                                                            class=\"fa fa-search\"></i></a>
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
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                    data-target=\"#tg-navigationm-mobile\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <strong class=\"tg-logo\">
                                <a href=\"index-2.html\"><img src=\"../images/logo.png\" alt=\"image description\"></a>
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
                                    <li class=\"active\">
                                        <a href=\"  ";
        // line 284
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo " \">Réclamation</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"  ";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo " \">Poser Votre Réclamation</a></li>
                                            <li><a href=\"  ";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rate_index");
        echo "\">Poser Votre Avis</a></li>
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
            <img src=\"../images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>Pro Soccer Media</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Pro Soccer Media</li>
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
              // hedha l7achty byh :p
        *************************************-->
        <div class=\"testboxAffichageReclam\">

        <h1 class=\"tg-filterbale-nav option-set\">Réclamation</h1>

        <div >
        <a class=\"tg-btn\" href=\"";
        // line 352
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_stat");
        echo "\"> statistique Reclamation 📈</a>
        <a class=\"tg-btn\" href=\"";
        // line 353
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf_index");
        echo "\">Create pdf 🗄️</a>
 

<div class=\"example-wrapper\">
    <a class=\"tg-btn\" href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export");
        echo "\">Exporter Excel</a>
</div>
       </div>

       <br>
        <!--************************************
                 Points Table Start
         *************************************-->
        <div class=\"testboxAffichageReclam\" id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">

        <div id=\"divs\">
          <input type=\"text\" id=\"search\" placeholder=\"recherche par sujet 🔍\">
          <input type=\"text\" id=\"search2\" placeholder=\"recherche par status 🔍\">
          <a class=\"tg-btn\" href=\"\" id=\"idup\">UP ⬆️</a>
          <a class=\"tg-btn\" href=\"\" id=\"iddown\">DOWN ⬇️</a>
        </div>
<br>
            <table id=\"t\" class=\"table\">
                <thead>
                <tr>
                    <th>Idrec</th>
                    <th>Sujetrec</th>
                    <th>Descriptionrec</th>
                    <th>Statusrec</th>
                    <th>Daterec</th>
                    ";
        // line 383
        echo "                    <th>Nomprenomcoach</th>
                    <th>Imgrec</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody id=\"all\">
                ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 389, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 390
            echo "                    <tr>
                        <td>";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idrec", [], "any", false, false, false, 391), "html", null, true);
            echo "</td>
                        <td>";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujetrec", [], "any", false, false, false, 392), "html", null, true);
            echo "</td>
                        <td>";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionrec", [], "any", false, false, false, 393), "html", null, true);
            echo "</td>
                        <td>";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "statusrec", [], "any", false, false, false, 394), "html", null, true);
            echo "</td>
                        <td>";
            // line 395
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "daterec", [], "any", false, false, false, 395)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "daterec", [], "any", false, false, false, 395), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        ";
            // line 397
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nomprenomcoach", [], "any", false, false, false, 397), "html", null, true);
            echo "</td>
                        ";
            // line 398
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "imgrec", [], "any", false, false, false, 398), null))) {
                // line 399
                echo "                           <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "imgrec", [], "any", false, false, false, 399))), "html", null, true);
                echo "\" alt=\"\" style=\"width: 50px;height: 50px\"> </td> 
                        ";
            }
            // line 401
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reclamation"], "imgrec", [], "any", false, false, false, 401), null))) {
                // line 402
                echo "                           <td>No.Image</td> 
                        ";
            }
            // line 404
            echo "                        <td>
                            <a  href=\"";
            // line 405
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["idrec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idrec", [], "any", false, false, false, 405)]), "html", null, true);
            echo "\">🖊️</a>
                               ";
            // line 406
            echo twig_include($this->env, $context, "reclamation/_delete_form.html.twig");
            echo "
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 410
            echo "                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "                </tbody>
                <tbody id=\"search\">
                </tbody>
            </table>
            <a  class=\"tg-btn tg-filterbale-nav option-set\" href=\"";
        // line 418
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\">Ajouter ✍️</a>
        </div>


</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
\$( document ).ready(function() {

/*begin rechercher avancee multicritéres selon sujet et staus*/
        \$(\"#divs\").keyup(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
if(value.length >= 2 || value.length == 0 || value2.length >= 2 || value2.length == 0  )
{

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"";
        // line 440
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_rec");
        echo "\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
       //     \$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.datetraitement+' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">🖊️</a></td>   </tr>');
});
                  }
                  else
                  {
                      
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
   
                     }
 },
        });
        return false;
        }
        });
/*end rechercher avancee multicritéres selon sujet et staus*/


/*begin trie up selon id*/
        \$(\"#idup\").click(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
          var value3 =\"ASC\";

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"";
        // line 485
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_rec");
        echo "\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2,
                        'orderid': value3 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td>  <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
});
                  }
                  else
                  {
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
                     }
 },
        });
        return false;
        
        });
/*end trie up selon id*/

/*begin trie down selon id*/
        \$(\"#iddown\").click(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
          var value3 =\"DESC\";

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"";
        // line 527
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_rec");
        echo "\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2,
                        'orderid': value3 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
});
                  }
                  else
                  {
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
                     }
 },
        });
        return false;
        
        });
/*end trie down selon id*/
    });
        </script>


        <!--************************************
                Points Table End
        *************************************-->

        <!--************************************
              //  Lehna youfa l7achty byh :p
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
                                    <p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si
                                        aliqua quis.</p>
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
                                                    <img src=\"../images/thumbnails/img-04.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-05.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-06.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-07.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
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
                                            <img src=\"../images/logo2.png\" alt=\"image description\">
                                        </a>
                                    </strong>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna
                                        aliqua enim minim veniami quis nostrud.</p>
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
                <span class=\"tg-copyright\"><a target=\"_blank\"
                                              href=\"https://www.templateshub.net\">Templates Hub</a></span>
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
<script src=\"../js/vendor/jquery-library.js\"></script>
<script src=\"../js/vendor/bootstrap.min.js\"></script>
<script src=\"../js/customScrollbar.min.js\"></script>
<script src=\"../js/owl.carousel.js\"></script>
<script src=\"../js/isotope.pkgd.js\"></script>
<script src=\"../js/prettyPhoto.js\"></script>
<script src=\"../js/swiper.min.js\"></script>
<script src=\"../js/jquery-ui.js\"></script>
<script src=\"../js/countTo.js\"></script>
<script src=\"../js/appear.js\"></script>
<script src=\"../js/main.js\"></script>
</body>


</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 527,  634 => 485,  586 => 440,  561 => 418,  555 => 414,  546 => 410,  529 => 406,  525 => 405,  522 => 404,  518 => 402,  515 => 401,  509 => 399,  507 => 398,  502 => 397,  498 => 395,  494 => 394,  490 => 393,  486 => 392,  482 => 391,  479 => 390,  461 => 389,  453 => 383,  425 => 357,  418 => 353,  414 => 352,  346 => 287,  342 => 286,  337 => 284,  140 => 90,  136 => 89,  131 => 87,  43 => 1,);
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
<html  lang=\"zxx\"> <!--<![endif]-->


<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Soccer BootStrap HTML5 CSS3 Theme</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"apple-touch-icon\" href=\"../apple-touch-icon.png\">
    <link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/normalize.css\">
    <link rel=\"stylesheet\" href=\"../css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"../css/transitions.css\">
    <link rel=\"stylesheet\" href=\"../css/prettyPhoto.css\">
    <link rel=\"stylesheet\" href=\"../css/swiper.min.css\">
    <link rel=\"stylesheet\" href=\"../css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"../css/animate.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.theme.css\">
    <link rel=\"stylesheet\" href=\"../css/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"../css/customScrollbar.css\">
    <link rel=\"stylesheet\" href=\"../css/icomoon.css\">
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <link rel=\"stylesheet\" href=\"../css/color.css\">
    <link rel=\"stylesheet\" href=\"../css/responsive.css\">
    <script src=\"../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade
    your browser</a> to improve your experience.</p>
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
                <li>
                    <a href=\"#\">fixtures</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"fixtures.html\">fixtures</a></li>
                        <li><a href=\"fixturedetail.html\">fixture detail</a></li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"  {{ path('reclamation_index') }} \">Réclamation</a>
                    <ul class=\"tg-dropdown-menu\">
                        <li><a href=\"  {{ path('reclamation_new') }} \">Poser Votre Réclamation</a></li>
                        <li><a href=\"  {{ path('rate_index') }}\">Poser Votre Avis</a></li>
                    </ul>
                    s
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
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                        data-target=\"#tg-addnavigationm-mobile\">
                                    <i class=\"fa fa-arrow-right\"></i>
                                </button>
                            </div>
                            <div id=\"tg-addnavigationm-mobile\"
                                 class=\"tg-addnavigationm-mobile collapse navbar-collapse\">
                                <div class=\"tg-colhalf pull-right\">
                                    <nav class=\"tg-addnav\">
                                        <ul>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\" data-target=\"#tg-login\">login</a>
                                            </li>
                                            <li><a href=\"javascript().html\" data-toggle=\"modal\"
                                                   data-target=\"#tg-register\">Register</a></li>
                                            <li>
                                                <div class=\"tg-cart\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle\"
                                                       id=\"tg-cartdropdown\" data-toggle=\"dropdown\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </a>
                                                    <div class=\"tg-cartcontent dropdown-menu\"
                                                         aria-labelledby=\"tg-cartdropdown\">
                                                        <ul>
                                                            <li>
                                                                <figure>
                                                                    <a href=\"#\">
                                                                        <img src=\"../images/thumbnails/img-01.jpg\"
                                                                             alt=\"image description\">
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
                                                                        <img src=\"../images/thumbnails/img-02.jpg\"
                                                                             alt=\"image description\">
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
                                                                        <img src=\"../images/thumbnails/img-03.jpg\"
                                                                             alt=\"image description\">
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
                                                <a id=\"tg-btn-search\" href=\"javascript:void(0)\"><i
                                                            class=\"fa fa-search\"></i></a>
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
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                    data-target=\"#tg-navigationm-mobile\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <strong class=\"tg-logo\">
                                <a href=\"index-2.html\"><img src=\"../images/logo.png\" alt=\"image description\"></a>
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
                                    <li class=\"active\">
                                        <a href=\"  {{ path('reclamation_index') }} \">Réclamation</a>
                                        <ul class=\"tg-dropdown-menu\">
                                            <li><a href=\"  {{ path('reclamation_new') }} \">Poser Votre Réclamation</a></li>
                                            <li><a href=\"  {{ path('rate_index') }}\">Poser Votre Avis</a></li>
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
            <img src=\"../images/bg-pattran.png\" alt=\"image desctription\">
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-banner-content tg-haslayout\">
                    <div class=\"tg-pagetitle\">
                        <h1>Pro Soccer Media</h1>
                    </div>
                    <ol class=\"tg-breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Pro Soccer Media</li>
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
              // hedha l7achty byh :p
        *************************************-->
        <div class=\"testboxAffichageReclam\">

        <h1 class=\"tg-filterbale-nav option-set\">Réclamation</h1>

        <div >
        <a class=\"tg-btn\" href=\"{{ path('reclamation_stat') }}\"> statistique Reclamation 📈</a>
        <a class=\"tg-btn\" href=\"{{ path('pdf_index') }}\">Create pdf 🗄️</a>
 

<div class=\"example-wrapper\">
    <a class=\"tg-btn\" href=\"{{ path('export') }}\">Exporter Excel</a>
</div>
       </div>

       <br>
        <!--************************************
                 Points Table Start
         *************************************-->
        <div class=\"testboxAffichageReclam\" id=\"tg-pointstable-slider\" class=\"tg-pointstable-slider\">

        <div id=\"divs\">
          <input type=\"text\" id=\"search\" placeholder=\"recherche par sujet 🔍\">
          <input type=\"text\" id=\"search2\" placeholder=\"recherche par status 🔍\">
          <a class=\"tg-btn\" href=\"\" id=\"idup\">UP ⬆️</a>
          <a class=\"tg-btn\" href=\"\" id=\"iddown\">DOWN ⬇️</a>
        </div>
<br>
            <table id=\"t\" class=\"table\">
                <thead>
                <tr>
                    <th>Idrec</th>
                    <th>Sujetrec</th>
                    <th>Descriptionrec</th>
                    <th>Statusrec</th>
                    <th>Daterec</th>
                    {# <th>Datetraitement</th> #}
                    <th>Nomprenomcoach</th>
                    <th>Imgrec</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tbody id=\"all\">
                {% for reclamation in reclamations %}
                    <tr>
                        <td>{{ reclamation.idrec }}</td>
                        <td>{{ reclamation.sujetrec }}</td>
                        <td>{{ reclamation.descriptionrec }}</td>
                        <td>{{ reclamation.statusrec }}</td>
                        <td>{{ reclamation.daterec ? reclamation.daterec|date('Y-m-d') : '' }}</td>
                        {# <td>{{ reclamation.datetraitement ? reclamation.datetraitement|date('Y-m-d') : '' }}</td> #}
                        <td>{{ reclamation.nomprenomcoach }}</td>
                        {% if reclamation.imgrec != null %}
                           <td><img src=\"{{ asset('uploads/images/' ~ reclamation.imgrec) }}\" alt=\"\" style=\"width: 50px;height: 50px\"> </td> 
                        {% endif %}
                        {% if reclamation.imgrec == null %}
                           <td>No.Image</td> 
                        {% endif %}
                        <td>
                            <a  href=\"{{ path('reclamation_edit', {'idrec': reclamation.idrec}) }}\">🖊️</a>
                               {{ include('reclamation/_delete_form.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
                <tbody id=\"search\">
                </tbody>
            </table>
            <a  class=\"tg-btn tg-filterbale-nav option-set\" href=\"{{ path('reclamation_new') }}\">Ajouter ✍️</a>
        </div>


</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>
<script>
\$( document ).ready(function() {

/*begin rechercher avancee multicritéres selon sujet et staus*/
        \$(\"#divs\").keyup(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
if(value.length >= 2 || value.length == 0 || value2.length >= 2 || value2.length == 0  )
{

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"{{ path('search_rec') }}\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
       //     \$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.datetraitement+' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">🖊️</a></td>   </tr>');
});
                  }
                  else
                  {
                      
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
   
                     }
 },
        });
        return false;
        }
        });
/*end rechercher avancee multicritéres selon sujet et staus*/


/*begin trie up selon id*/
        \$(\"#idup\").click(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
          var value3 =\"ASC\";

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"{{ path('search_rec') }}\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2,
                        'orderid': value3 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td>  <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
});
                  }
                  else
                  {
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
                     }
 },
        });
        return false;
        
        });
/*end trie up selon id*/

/*begin trie down selon id*/
        \$(\"#iddown\").click(function(e){
/* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
          var value = \$(\"#search\").val();
          var value2 = \$(\"#search2\").val();
          var value3 =\"DESC\";

      //    alert(value);
/* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
             \$.ajax({
/* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                url : \"{{ path('search_rec') }}\",
/* La méthode utilisée pour transférer les données est GET */
                type : 'GET', 
/*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */                
                data: {
                        'searchValue' : value,
                        'searchValue2': value2,
                        'orderid': value3 
                    },
/*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                success : function(retour){
                  if(retour){
  \t\t\t\$('#t tbody#search').empty();
  \t\t\t\$.each(JSON.parse(retour), function(i, obj) {
  \t\t\t\$('#t tbody#all').hide();
  \t\t\t\$('#t tbody#search').append('<tr><td> '+obj.idrec+'  </td><td>    '+obj.sujetrec+'  </td><td>'+obj.descriptionrec+' </td><td>'+obj.statusrec+' </td> <td>'+obj.daterec.substring(0,10) +' </td> <td>'+obj.nomprenomcoach+' </td> <td>'+obj.imgrec+' </td> <td> <a href=\"/reclamation/'+obj.idrec+'/edit\">edit</a></td></tr>');
});
                  }
                  else
                  {
   \$('#t tbody#all').show();
   \$('#t tbody#search').empty();
   \$('#t tbody#search').fadeIn('fast');
                     }
 },
        });
        return false;
        
        });
/*end trie down selon id*/
    });
        </script>


        <!--************************************
                Points Table End
        *************************************-->

        <!--************************************
              //  Lehna youfa l7achty byh :p
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
                                    <p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si
                                        aliqua quis.</p>
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
                                                    <img src=\"../images/thumbnails/img-04.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-05.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-06.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
                                                <span class=\"tg-price\">Price: \$67</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href=\"#\">
                                                    <img src=\"../images/thumbnails/img-07.jpg\" alt=\"image description\">
                                                </a>
                                            </figure>
                                            <div class=\"tg-productcontent\">
                                                <h4><a href=\"#\">Smooth 3-Stripes Scarf</a></h4><span
                                                        class=\"tg-stars\"><span></span></span>
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
                                            <img src=\"../images/logo2.png\" alt=\"image description\">
                                        </a>
                                    </strong>
                                </div>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna
                                        aliqua enim minim veniami quis nostrud.</p>
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
                <span class=\"tg-copyright\"><a target=\"_blank\"
                                              href=\"https://www.templateshub.net\">Templates Hub</a></span>
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
<script src=\"../js/vendor/jquery-library.js\"></script>
<script src=\"../js/vendor/bootstrap.min.js\"></script>
<script src=\"../js/customScrollbar.min.js\"></script>
<script src=\"../js/owl.carousel.js\"></script>
<script src=\"../js/isotope.pkgd.js\"></script>
<script src=\"../js/prettyPhoto.js\"></script>
<script src=\"../js/swiper.min.js\"></script>
<script src=\"../js/jquery-ui.js\"></script>
<script src=\"../js/countTo.js\"></script>
<script src=\"../js/appear.js\"></script>
<script src=\"../js/main.js\"></script>
</body>


</html>

", "reclamation/index.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\reclamation\\index.html.twig");
    }
}
