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

/* article/index.html.twig */
class __TwigTemplate_061f40921eb6d58c1fafd1269392480bdba8ae66b7529bef2dbb0cc19faae02c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        // line 1
        echo "


    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>

            Co-Takwira Dashboard
        </title>
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <!-- CSS Files -->
        <link href=\"../assets/css/material-dashboard.css?v=2.1.2\" rel=\"stylesheet\" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"../assets/demo/demo.css\" rel=\"stylesheet\" />
    </head>

    <body class=\"\">
    <div class=\"wrapper \">
        <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

              Tip 2: you can also add an image using data-image tag
          -->
            <div class=\"logo\"><a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
                    Co-Takwira
                </a></div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"nav-item active  \">
                        <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_index");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Coachs</p>
                        </a>
                    </li>




                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrainement_index");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Entrainements</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_index");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Joueurs</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Equipes</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Articles</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templatefront");
        echo "\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> front</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
                <div class=\"container-fluid\">
                    <div class=\"navbar-wrapper\">
                        <a class=\"navbar-brand\" href=\"javascript:;\">Articles</a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\">
                        <form class=\"navbar-form\">
                            <div class=\"input-group no-border\">
                                <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                    <i class=\"material-icons\">search</i>
                                    <div class=\"ripple-container\"></div>
                                </button>
                            </div>
                        </form>
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"d-lg-none d-md-block\">
                                        Some Actions
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                                    <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                                    <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another One</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"javascript:;\" id=\"navbarDropdownProfile\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                                    <a class=\"dropdown-item\" href=\"#\">Profile</a>
                                    <a class=\"dropdown-item\" href=\"#\">Settings</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>



            <!-- End Navbar -->
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\" dropdown-menu-right\">

                                <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" data-toggle=\"dropdown-menu-right\">
                                    <i class=\"fa fa-plus-circle fa-2x\"> </i>
                                </a>
                            </div>
                            <form role=\"search\" class=\"sr-input-func\">
                                <input type=\"text\" placeholder=\"Search...\" class=\"search-int form-control\" name=\"search\">
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </form>
                            <div class=\"card\">
                                <div class=\"card-header card-header-primary\">
                                    <h4 class=\"card-title \">Mes Articles</h4>
                                    <p class=\"card-category\"> Here is a subtitle for this table</p>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Url</th>
                                            <th>IdPersonnel</th>
                                            <th>actions</th>

                                            </thead>
                                            <tbody>
                                            <tr>
                                                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 199, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 200
            echo "                                            <tr>
                                                <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
                                                <td>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "type", [], "any", false, false, false, 202), "html", null, true);
            echo "</td>
                                                <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
                                                <td>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                                                <td>";
            // line 205
            ((twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 205)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 205), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td><img src=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "url", [], "any", false, false, false, 206), "html", null, true);
            echo "\" width=\"100\" height=\"100\" /></td>
                                                <td>";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "idPersonnel", [], "any", false, false, false, 207), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 209)]), "html", null, true);
            echo "\">show</a>
                                                    <a href=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 210)]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                                    ";
            // line 211
            echo twig_include($this->env, $context, "article/_delete_form.html.twig");
            echo "
                                                    <!--<a href=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 212)]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" aria-hidden=\"true\" fa-3x></i></a>--!>
                                                </td>
                                            </tr>
                                            </tr>
                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                            </tbody>
                                        </table>
                                        <ul>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"card card-plain\">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">

                    <div class=\"copyright float-right\">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class=\"material-icons\">favorite</i> by
                        <a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src=\"../assets/js/core/jquery.min.js\"></script>
    <script src=\"../assets/js/core/popper.min.js\"></script>
    <script src=\"../assets/js/core/bootstrap-material-design.min.js\"></script>
    <script src=\"../assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
    <!-- Plugin for the momentJs  -->
    <script src=\"../assets/js/plugins/moment.min.js\"></script>
    <!--  Plugin for Sweet Alert -->
    <script src=\"../assets/js/plugins/sweetalert2.js\"></script>
    <!-- Forms Validations Plugin -->
    <script src=\"../assets/js/plugins/jquery.validate.min.js\"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src=\"../assets/js/plugins/jquery.bootstrap-wizard.js\"></script>
    <!--\tPlugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src=\"../assets/js/plugins/bootstrap-selectpicker.js\"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src=\"../assets/js/plugins/bootstrap-datetimepicker.min.js\"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src=\"../assets/js/plugins/jquery.dataTables.min.js\"></script>
    <!--\tPlugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src=\"../assets/js/plugins/bootstrap-tagsinput.js\"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src=\"../assets/js/plugins/jasny-bootstrap.min.js\"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src=\"../assets/js/plugins/fullcalendar.min.js\"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src=\"../assets/js/plugins/jquery-jvectormap.js\"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"../assets/js/plugins/nouislider.min.js\"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js\"></script>
    <!-- Library for adding dinamically elements -->
    <script src=\"../assets/js/plugins/arrive.min.js\"></script>
    <!--  Google Maps Plugin    -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
    <!-- Chartist JS -->
    <script src=\"../assets/js/plugins/chartist.min.js\"></script>
    <!--  Notifications Plugin    -->
    <script src=\"../assets/js/plugins/bootstrap-notify.js\"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"../assets/js/material-dashboard.js?v=2.1.2\" type=\"text/javascript\"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"../assets/demo/demo.js\"></script>
    <script>
        \$(document).ready(function() {
            \$().ready(function() {
                \$sidebar = \$('.sidebar');

                \$sidebar_img_container = \$sidebar.find('.sidebar-background');

                \$full_page = \$('.full-page');

                \$sidebar_responsive = \$('body > .navbar-collapse');

                window_width = \$(window).width();

                fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if (\$('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        \$('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                \$('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if (\$(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                \$('.fixed-plugin .active-color span').click(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data-color', new_color);
                    }

                    if (\$full_page.length != 0) {
                        \$full_page.attr('filter-color', new_color);
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.attr('data-color', new_color);
                    }
                });

                \$('.fixed-plugin .background-color .badge').click(function() {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('background-color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data-background-color', new_color);
                    }
                });

                \$('.fixed-plugin .img-holder').click(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$(this).parent('li').siblings().removeClass('active');
                    \$(this).parent('li').addClass('active');


                    var new_image = \$(this).find(\"img\").attr('src');

                    if (\$sidebar_img_container.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                        \$sidebar_img_container.fadeOut('fast', function() {
                            \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                            \$sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if (\$full_page_background.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                        \$full_page_background.fadeOut('fast', function() {
                            \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                            \$full_page_background.fadeIn('fast');
                        });
                    }

                    if (\$('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = \$('.fixed-plugin li.active .img-holder').find(\"img\").attr('src');
                        var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                        \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                        \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.css('background-image', 'url(\"' + new_image + '\")');
                    }
                });

                \$('.switch-sidebar-image input').change(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$input = \$(this);

                    if (\$input.is(':checked')) {
                        if (\$sidebar_img_container.length != 0) {
                            \$sidebar_img_container.fadeIn('fast');
                            \$sidebar.attr('data-image', '#');
                        }

                        if (\$full_page_background.length != 0) {
                            \$full_page_background.fadeIn('fast');
                            \$full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if (\$sidebar_img_container.length != 0) {
                            \$sidebar.removeAttr('data-image');
                            \$sidebar_img_container.fadeOut('fast');
                        }

                        if (\$full_page_background.length != 0) {
                            \$full_page.removeAttr('data-image', '#');
                            \$full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                \$('.switch-sidebar-mini input').change(function() {
                    \$body = \$('body');

                    \$input = \$(this);

                    if (md.misc.sidebar_mini_active == true) {
                        \$('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            \$('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    </body>

    </html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 217,  332 => 212,  328 => 211,  324 => 210,  320 => 209,  315 => 207,  310 => 206,  306 => 205,  302 => 204,  298 => 203,  294 => 202,  290 => 201,  287 => 200,  270 => 199,  238 => 170,  183 => 118,  145 => 83,  135 => 76,  126 => 70,  117 => 64,  107 => 57,  94 => 47,  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../assets/img/apple-icon.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"../assets/img/favicon.png\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>

            Co-Takwira Dashboard
        </title>
        </title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
        <!-- CSS Files -->
        <link href=\"../assets/css/material-dashboard.css?v=2.1.2\" rel=\"stylesheet\" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href=\"../assets/demo/demo.css\" rel=\"stylesheet\" />
    </head>

    <body class=\"\">
    <div class=\"wrapper \">
        <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

              Tip 2: you can also add an image using data-image tag
          -->
            <div class=\"logo\"><a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
                    Co-Takwira
                </a></div>
            <div class=\"sidebar-wrapper\">
                <ul class=\"nav\">
                    <li class=\"nav-item active  \">
                        <a class=\"nav-link\" href=\"{{ path('home') }}\">
                            <i class=\"material-icons\">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('coach_index') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Coachs</p>
                        </a>
                    </li>




                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('entrainement_index') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Entrainements</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('joueur_index') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Joueurs</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('equipe_index') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Equipes</p>
                        </a>
                    </li>
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('article_index') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> Mes Articles</p>
                        </a>
                    </li>

                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"{{ path('templatefront') }}\">
                            <i class=\"material-icons\">bubble_chart</i>
                            <p> front</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class=\"main-panel\">
            <!-- Navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
                <div class=\"container-fluid\">
                    <div class=\"navbar-wrapper\">
                        <a class=\"navbar-brand\" href=\"javascript:;\">Articles</a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                        <span class=\"navbar-toggler-icon icon-bar\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\">
                        <form class=\"navbar-form\">
                            <div class=\"input-group no-border\">
                                <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                                    <i class=\"material-icons\">search</i>
                                    <div class=\"ripple-container\"></div>
                                </button>
                            </div>
                        </form>
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('home') }}\">
                                    <i class=\"material-icons\">dashboard</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">notifications</i>
                                    <span class=\"notification\">5</span>
                                    <p class=\"d-lg-none d-md-block\">
                                        Some Actions
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                                    <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                                    <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                                    <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                                    <a class=\"dropdown-item\" href=\"#\">Another One</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" href=\"javascript:;\" id=\"navbarDropdownProfile\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <i class=\"material-icons\">person</i>
                                    <p class=\"d-lg-none d-md-block\">
                                        Account
                                    </p>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                                    <a class=\"dropdown-item\" href=\"#\">Profile</a>
                                    <a class=\"dropdown-item\" href=\"#\">Settings</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>



            <!-- End Navbar -->
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\" dropdown-menu-right\">

                                <a href=\"{{ path('article_new') }}\" data-toggle=\"dropdown-menu-right\">
                                    <i class=\"fa fa-plus-circle fa-2x\"> </i>
                                </a>
                            </div>
                            <form role=\"search\" class=\"sr-input-func\">
                                <input type=\"text\" placeholder=\"Search...\" class=\"search-int form-control\" name=\"search\">
                                <a href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </form>
                            <div class=\"card\">
                                <div class=\"card-header card-header-primary\">
                                    <h4 class=\"card-title \">Mes Articles</h4>
                                    <p class=\"card-category\"> Here is a subtitle for this table</p>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <thead class=\" text-primary\">
                                            <th>Id</th>
                                            <th>Type</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Url</th>
                                            <th>IdPersonnel</th>
                                            <th>actions</th>

                                            </thead>
                                            <tbody>
                                            <tr>
                                                {% for article in articles %}
                                            <tr>
                                                <td>{{ article.id }}</td>
                                                <td>{{ article.type }}</td>
                                                <td>{{ article.titre }}</td>
                                                <td>{{ article.description }}</td>
                                                <td>{{ article.date ? article.date|date('Y-m-d H:i:s') : '' }}</td>
                                                <td><img src=\"{{asset('images/articles/')}}{{article.url}}\" width=\"100\" height=\"100\" /></td>
                                                <td>{{ article.idPersonnel }}</td>
                                                <td>
                                                    <a href=\"{{ path('article_show', {'id': article.id}) }}\">show</a>
                                                    <a href=\"{{ path('article_edit',{id : article.id}) }}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>
                                                    {{ include('article/_delete_form.html.twig') }}
                                                    <!--<a href=\"{{ path('article_delete',{id : article.id}) }}\" ><i class=\"fa fa-trash\" aria-hidden=\"true\" fa-3x></i></a>--!>
                                                </td>
                                            </tr>
                                            </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                        <ul>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"card card-plain\">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">

                    <div class=\"copyright float-right\">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class=\"material-icons\">favorite</i> by
                        <a href=\"https://www.creative-tim.com\" target=\"_blank\">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src=\"../assets/js/core/jquery.min.js\"></script>
    <script src=\"../assets/js/core/popper.min.js\"></script>
    <script src=\"../assets/js/core/bootstrap-material-design.min.js\"></script>
    <script src=\"../assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
    <!-- Plugin for the momentJs  -->
    <script src=\"../assets/js/plugins/moment.min.js\"></script>
    <!--  Plugin for Sweet Alert -->
    <script src=\"../assets/js/plugins/sweetalert2.js\"></script>
    <!-- Forms Validations Plugin -->
    <script src=\"../assets/js/plugins/jquery.validate.min.js\"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src=\"../assets/js/plugins/jquery.bootstrap-wizard.js\"></script>
    <!--\tPlugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src=\"../assets/js/plugins/bootstrap-selectpicker.js\"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src=\"../assets/js/plugins/bootstrap-datetimepicker.min.js\"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src=\"../assets/js/plugins/jquery.dataTables.min.js\"></script>
    <!--\tPlugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src=\"../assets/js/plugins/bootstrap-tagsinput.js\"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src=\"../assets/js/plugins/jasny-bootstrap.min.js\"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src=\"../assets/js/plugins/fullcalendar.min.js\"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src=\"../assets/js/plugins/jquery-jvectormap.js\"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"../assets/js/plugins/nouislider.min.js\"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js\"></script>
    <!-- Library for adding dinamically elements -->
    <script src=\"../assets/js/plugins/arrive.min.js\"></script>
    <!--  Google Maps Plugin    -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
    <!-- Chartist JS -->
    <script src=\"../assets/js/plugins/chartist.min.js\"></script>
    <!--  Notifications Plugin    -->
    <script src=\"../assets/js/plugins/bootstrap-notify.js\"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"../assets/js/material-dashboard.js?v=2.1.2\" type=\"text/javascript\"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src=\"../assets/demo/demo.js\"></script>
    <script>
        \$(document).ready(function() {
            \$().ready(function() {
                \$sidebar = \$('.sidebar');

                \$sidebar_img_container = \$sidebar.find('.sidebar-background');

                \$full_page = \$('.full-page');

                \$sidebar_responsive = \$('body > .navbar-collapse');

                window_width = \$(window).width();

                fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if (\$('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        \$('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                \$('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if (\$(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                \$('.fixed-plugin .active-color span').click(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data-color', new_color);
                    }

                    if (\$full_page.length != 0) {
                        \$full_page.attr('filter-color', new_color);
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.attr('data-color', new_color);
                    }
                });

                \$('.fixed-plugin .background-color .badge').click(function() {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');

                    var new_color = \$(this).data('background-color');

                    if (\$sidebar.length != 0) {
                        \$sidebar.attr('data-background-color', new_color);
                    }
                });

                \$('.fixed-plugin .img-holder').click(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$(this).parent('li').siblings().removeClass('active');
                    \$(this).parent('li').addClass('active');


                    var new_image = \$(this).find(\"img\").attr('src');

                    if (\$sidebar_img_container.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                        \$sidebar_img_container.fadeOut('fast', function() {
                            \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                            \$sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if (\$full_page_background.length != 0 && \$('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                        \$full_page_background.fadeOut('fast', function() {
                            \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                            \$full_page_background.fadeIn('fast');
                        });
                    }

                    if (\$('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = \$('.fixed-plugin li.active .img-holder').find(\"img\").attr('src');
                        var new_image_full_page = \$('.fixed-plugin li.active .img-holder').find('img').data('src');

                        \$sidebar_img_container.css('background-image', 'url(\"' + new_image + '\")');
                        \$full_page_background.css('background-image', 'url(\"' + new_image_full_page + '\")');
                    }

                    if (\$sidebar_responsive.length != 0) {
                        \$sidebar_responsive.css('background-image', 'url(\"' + new_image + '\")');
                    }
                });

                \$('.switch-sidebar-image input').change(function() {
                    \$full_page_background = \$('.full-page-background');

                    \$input = \$(this);

                    if (\$input.is(':checked')) {
                        if (\$sidebar_img_container.length != 0) {
                            \$sidebar_img_container.fadeIn('fast');
                            \$sidebar.attr('data-image', '#');
                        }

                        if (\$full_page_background.length != 0) {
                            \$full_page_background.fadeIn('fast');
                            \$full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if (\$sidebar_img_container.length != 0) {
                            \$sidebar.removeAttr('data-image');
                            \$sidebar_img_container.fadeOut('fast');
                        }

                        if (\$full_page_background.length != 0) {
                            \$full_page.removeAttr('data-image', '#');
                            \$full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                \$('.switch-sidebar-mini input').change(function() {
                    \$body = \$('body');

                    \$input = \$(this);

                    if (md.misc.sidebar_mini_active == true) {
                        \$('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        \$('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            \$('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    </body>

    </html>

", "article/index.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\article\\index.html.twig");
    }
}
