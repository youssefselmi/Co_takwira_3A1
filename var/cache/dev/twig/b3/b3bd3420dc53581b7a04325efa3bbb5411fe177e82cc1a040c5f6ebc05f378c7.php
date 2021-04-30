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

/* coach/index.html.twig */
class __TwigTemplate_3b7e69b09f7ca82a8c6b83ab49a22426bac0c8ccc17e31cfcac4a0320c7d1f73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
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

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">






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
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template");
        echo "\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_index");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Coachs</p>
                    </a>
                </li>




                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrainement_index");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Entrainements</p>
                    </a>
                </li>

                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_index");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Joueurs</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Equipes</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Articles</p>
                    </a>
                </li>

                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 90
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Coachs</a>
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
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template");
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
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addMatch");
        echo "\" data-toggle=\"dropdown-menu-right\">
                                <i class=\"fa fa-plus-circle fa-2x\"> </i>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                                <h4 class=\"card-title \">Mes Coachs</h4>
                                <p class=\"card-category\"> Here is a subtitle for this table</p>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">








                                    ";
        // line 197
        $this->displayBlock('body', $context, $blocks);
        // line 285
        echo "


















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

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coach";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 198
        echo "

                                        <script src=\"//code.jquery.com/jquery.js\"></script>
                                        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>





                                        <table class=\"table\" id=\"mydatatable\">
                                            <thead>
                                            <tr>
                                                <th>IdCoach</th>
                                                <th>NomCoach</th>
                                                <th>PrenomCoach</th>
                                                <th>DateNaissance</th>
                                                <th>Grade</th>
                                                <th>DateFinContrat</th>
                                                <th>AdresseMail</th>
                                                <th>Salaire</th>
                                                <th>NbTropheLocaux</th>
                                                <th>NbTropheInternationaux</th>
                                                <th>FormationPrefere</th>
                                                <th>ImageFormation</th>
                                                <th>ImageCoach</th>
                                                <th>Age</th>
                                                <th>MdpCoach</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 229, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 230
            echo "                                                <tr>
                                                    <td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "idCoach", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nomCoach", [], "any", false, false, false, 232), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenomCoach", [], "any", false, false, false, 233), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 234
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 234)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 234), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                    <td>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "grade", [], "any", false, false, false, 235), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 236
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "dateFinContrat", [], "any", false, false, false, 236)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "dateFinContrat", [], "any", false, false, false, 236), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                    <td>";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "adresseMail", [], "any", false, false, false, 237), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "salaire", [], "any", false, false, false, 238), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nbTropheLocaux", [], "any", false, false, false, 239), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nbTropheInternationaux", [], "any", false, false, false, 240), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "formationPrefere", [], "any", false, false, false, 241), "html", null, true);
            echo "</td>
                                                    <td> <img src=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["coach"], "imageFormation", [], "any", false, false, false, 242)), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                                                    <td> <img src=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["coach"], "imageCoach", [], "any", false, false, false, 243)), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                                                    <td>";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "age", [], "any", false, false, false, 244), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "mdpCoach", [], "any", false, false, false, 245), "html", null, true);
            echo "</td>
                                                    <td>

                                                        <a href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_edit", ["idCoach" => twig_get_attribute($this->env, $this->source, $context["coach"], "idCoach", [], "any", false, false, false, 248)]), "html", null, true);
            echo "\">edit</a>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 252
            echo "                                                <tr>
                                                    <td colspan=\"16\">no records found</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                                            </tbody>
                                        </table>



                                        <a class=\"btn\" href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_new");
        echo "\">Ajouter Coach</a>

                                        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
                                        <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>
                                        <script src=\"https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js\"></script>
                                        <script>
                                            \$(document).ready(function ()
                                            {

                                                \$('#mydatatable').DataTable();
                                            });
                                        </script>



                                        <br>

                                        <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf0");
        echo "\"><button class=\"btn\"><i class=\"fa fa-folder\"></i>IMPRIMER</button></a>


                                        ";
        // line 281
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "


                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coach/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 281,  731 => 278,  711 => 261,  704 => 256,  695 => 252,  686 => 248,  680 => 245,  676 => 244,  672 => 243,  668 => 242,  664 => 241,  660 => 240,  656 => 239,  652 => 238,  648 => 237,  644 => 236,  640 => 235,  636 => 234,  632 => 233,  628 => 232,  624 => 231,  621 => 230,  616 => 229,  585 => 201,  580 => 198,  570 => 197,  551 => 4,  278 => 285,  276 => 197,  253 => 177,  198 => 125,  160 => 90,  150 => 83,  141 => 77,  132 => 71,  122 => 64,  109 => 54,  101 => 49,  75 => 26,  52 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
{% block title %}Coach{% endblock %}

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

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">






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
                    <a class=\"nav-link\" href=\"{{ path('template') }}\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Coachs</a>
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
                            <a class=\"nav-link\" href=\"{{ path('template') }}\">
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

                            <a href=\"{{ path('addMatch') }}\" data-toggle=\"dropdown-menu-right\">
                                <i class=\"fa fa-plus-circle fa-2x\"> </i>
                            </a>
                        </div>

                        <div class=\"card\">
                            <div class=\"card-header card-header-primary\">
                                <h4 class=\"card-title \">Mes Coachs</h4>
                                <p class=\"card-category\"> Here is a subtitle for this table</p>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">








                                    {% block body %}


                                        <script src=\"//code.jquery.com/jquery.js\"></script>
                                        <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>





                                        <table class=\"table\" id=\"mydatatable\">
                                            <thead>
                                            <tr>
                                                <th>IdCoach</th>
                                                <th>NomCoach</th>
                                                <th>PrenomCoach</th>
                                                <th>DateNaissance</th>
                                                <th>Grade</th>
                                                <th>DateFinContrat</th>
                                                <th>AdresseMail</th>
                                                <th>Salaire</th>
                                                <th>NbTropheLocaux</th>
                                                <th>NbTropheInternationaux</th>
                                                <th>FormationPrefere</th>
                                                <th>ImageFormation</th>
                                                <th>ImageCoach</th>
                                                <th>Age</th>
                                                <th>MdpCoach</th>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for coach in coaches %}
                                                <tr>
                                                    <td>{{ coach.idCoach }}</td>
                                                    <td>{{ coach.nomCoach }}</td>
                                                    <td>{{ coach.prenomCoach }}</td>
                                                    <td>{{ coach.dateNaissance ? coach.dateNaissance|date('Y-m-d') : '' }}</td>
                                                    <td>{{ coach.grade }}</td>
                                                    <td>{{ coach.dateFinContrat ? coach.dateFinContrat|date('Y-m-d') : '' }}</td>
                                                    <td>{{ coach.adresseMail }}</td>
                                                    <td>{{ coach.salaire }}</td>
                                                    <td>{{ coach.nbTropheLocaux }}</td>
                                                    <td>{{ coach.nbTropheInternationaux }}</td>
                                                    <td>{{ coach.formationPrefere }}</td>
                                                    <td> <img src=\"{{ asset(coach.imageFormation) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                                                    <td> <img src=\"{{ asset(coach.imageCoach) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                                                    <td>{{ coach.age }}</td>
                                                    <td>{{ coach.mdpCoach }}</td>
                                                    <td>

                                                        <a href=\"{{ path('coach_edit', {'idCoach': coach.idCoach}) }}\">edit</a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"16\">no records found</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>



                                        <a class=\"btn\" href=\"{{ path('coach_new') }}\">Ajouter Coach</a>

                                        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"></script>
                                        <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>
                                        <script src=\"https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js\"></script>
                                        <script>
                                            \$(document).ready(function ()
                                            {

                                                \$('#mydatatable').DataTable();
                                            });
                                        </script>



                                        <br>

                                        <a href=\"{{ path('pdf0') }}\"><button class=\"btn\"><i class=\"fa fa-folder\"></i>IMPRIMER</button></a>


                                        {{ include('@MercurySeriesFlashy/flashy.html.twig') }}


                                    {% endblock %}



















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

</html>", "coach/index.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\coach\\index.html.twig");
    }
}
