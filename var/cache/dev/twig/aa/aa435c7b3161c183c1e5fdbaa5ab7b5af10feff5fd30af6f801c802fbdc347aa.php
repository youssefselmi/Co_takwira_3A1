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

/* entrainement/statentrainement.html.twig */
class __TwigTemplate_3fdb02b1006ce97f8db99e5d3733f18ce376defd7f665213786dadc2c9f46866 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrainement/statentrainement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrainement/statentrainement.html.twig"));

        // line 1
        echo "









<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\"   href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        Co-Takwira
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\"    href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- CSS Files -->
    <link  href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/material-dashboard.css?v=2.1.2"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/demo/demo.css"), "html", null, true);
        echo "\"   rel=\"stylesheet\" />
</head>

<body class=\"\">
<div class=\"wrapper \">
    <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class=\"logo\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://www.creative-tim.com"), "html", null, true);
        echo "\"      class=\"simple-text logo-normal\">
                Co-Takwira
            </a></div>
        <div class=\"sidebar-wrapper\">
            <ul class=\"nav\">
                <li class=\"nav-item active  \">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template");
        echo "\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_match");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Coachs</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_stade");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes entrainements <Entrainements></Entrainements></p>
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Entrainements</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\">


                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"javascript:;\">
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
                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                                <h4 class=\"card-title\">Modifier Entrainement</h4>
                                <p class=\"card-category\">Compléter</p>
                            </div>
                            <div class=\"card-body\">




























                                ";
        // line 166
        $this->displayBlock('body', $context, $blocks);
        // line 195
        echo "




















                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card card-profile\">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <nav class=\"float-left\">
                        <ul>
                            <li>
                                <a href=\"https://www.creative-tim.com\">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href=\"https://creative-tim.com/presentation\">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com\">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href=\"https://www.creative-tim.com/license\">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
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

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 167
        echo "                                    <canvas id=\"monGraph\" width=\"400\" height=\"100\" style=\"max-width: 1000px;max-height:600px;margin-left: 20%;\"  ></canvas>
                                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js\" integrity=\"sha256-lISRn4x2bHaafBiAb0H5C7mqJli7N0SH+vrapxjIz3k=\" crossorigin=\"anonymous\"></script>
                                    <script>
                                        let ctx = document.querySelector(\"#monGraph\")
                                        let graph = new Chart(ctx, {
                                            type: \"pie\",
                                            data: {
                                                labels: ['Attaque','Milieu','Diffence'],
                                                datasets: [{
                                                    label: 'Nombre d entrainement selon type ',
                                                    data: ";
        // line 177
        echo (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new RuntimeError('Variable "nbr" does not exist.', 177, $this->source); })());
        echo ",
                                                    backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple', 'orange']
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: 'Répartiton entreprise par pays'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        })

                                    </script>

                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "entrainement/statentrainement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 177,  549 => 167,  539 => 166,  243 => 195,  241 => 166,  130 => 58,  121 => 52,  112 => 46,  103 => 40,  89 => 29,  84 => 27,  79 => 25,  75 => 24,  65 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("









<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\"   href=\"{{asset('assets/img/apple-icon.png')}}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/img/favicon.png')}}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>
        Co-Takwira
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\"    href=\"{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}\">
    <!-- CSS Files -->
    <link  href=\"{{asset('../assets/css/material-dashboard.css?v=2.1.2')}}\"  rel=\"stylesheet\" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=\"{{asset('../assets/demo/demo.css')}}\"   rel=\"stylesheet\" />
</head>

<body class=\"\">
<div class=\"wrapper \">
    <div class=\"sidebar\" data-color=\"purple\" data-background-color=\"white\" data-image=\"../assets/img/sidebar-1.jpg\">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class=\"logo\"><a href=\"{{asset('http://www.creative-tim.com')}}\"      class=\"simple-text logo-normal\">
                Co-Takwira
            </a></div>
        <div class=\"sidebar-wrapper\">
            <ul class=\"nav\">
                <li class=\"nav-item active  \">
                    <a class=\"nav-link\" href=\"{{ path('template') }}\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"{{ path('template_match') }}\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Coachs</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"{{ path('template_stade') }}\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes entrainements <Entrainements></Entrainements></p>
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Entrainements</a>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                    <span class=\"navbar-toggler-icon icon-bar\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\">


                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"javascript:;\">
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
                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                                <h4 class=\"card-title\">Modifier Entrainement</h4>
                                <p class=\"card-category\">Compléter</p>
                            </div>
                            <div class=\"card-body\">




























                                {% block body %}
                                    <canvas id=\"monGraph\" width=\"400\" height=\"100\" style=\"max-width: 1000px;max-height:600px;margin-left: 20%;\"  ></canvas>
                                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js\" integrity=\"sha256-lISRn4x2bHaafBiAb0H5C7mqJli7N0SH+vrapxjIz3k=\" crossorigin=\"anonymous\"></script>
                                    <script>
                                        let ctx = document.querySelector(\"#monGraph\")
                                        let graph = new Chart(ctx, {
                                            type: \"pie\",
                                            data: {
                                                labels: ['Attaque','Milieu','Diffence'],
                                                datasets: [{
                                                    label: 'Nombre d entrainement selon type ',
                                                    data: {{ nbr|raw }},
                                                    backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple', 'orange']
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: 'Répartiton entreprise par pays'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            }
                                        })

                                    </script>

                                {% endblock %}





















                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card card-profile\">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=\"footer\">
                <div class=\"container-fluid\">
                    <nav class=\"float-left\">
                        <ul>
                            <li>
                                <a href=\"https://www.creative-tim.com\">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href=\"https://creative-tim.com/presentation\">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href=\"http://blog.creative-tim.com\">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href=\"https://www.creative-tim.com/license\">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
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

</html>", "entrainement/statentrainement.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\entrainement\\statentrainement.html.twig");
    }
}
