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

/* coach/show.html.twig */
class __TwigTemplate_919aea42e3badcc976ea9186c60b70c2631d7db0378c2e8c0477e4df330a613c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

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
        Co-Takwira
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
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template");
        echo "\">
                        <i class=\"material-icons\">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_match");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Coachs</p>
                    </a>
                </li>
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("template_stade");
        echo "\">
                        <i class=\"material-icons\">bubble_chart</i>
                        <p> Mes Entrainements</p>
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Matchs</a>
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
                                <h4 class=\"card-title\">Ajouter Un nouveau Match</h4>
                                <p class=\"card-category\">Compléter</p>
                            </div>
                            <div class=\"card-body\">

















                                ";
        // line 156
        $this->displayBlock('title', $context, $blocks);
        // line 157
        echo "
                                ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 234
        echo "




















                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card card-profile\">
                            <div class=\"card-avatar\">
                                <a href=\"javascript:;\">
                                    <img class=\"img\" src=\"../assets/img/faces/marc.jpg\" />
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"card-category text-gray\">CEO / Co-Founder</h6>
                                <h4 class=\"card-title\">Alec Thompson</h4>
                                <p class=\"card-description\">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-primary btn-round\">Follow</a>
                            </div>
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
                            <a href=\"\">
                                Co-Takwira
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

                    </ul>
                </nav>

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

    // line 156
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

    // line 158
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "                                    <h1>Coach</h1>

                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th>IdCoach</th>
                                            <td>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 165, $this->source); })()), "idCoach", [], "any", false, false, false, 165), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>NomCoach</th>
                                            <td>";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 169, $this->source); })()), "nomCoach", [], "any", false, false, false, 169), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>PrenomCoach</th>
                                            <td>";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 173, $this->source); })()), "prenomCoach", [], "any", false, false, false, 173), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>DateNaissance</th>
                                            <td>";
        // line 177
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 177, $this->source); })()), "dateNaissance", [], "any", false, false, false, 177)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 177, $this->source); })()), "dateNaissance", [], "any", false, false, false, 177), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Grade</th>
                                            <td>";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 181, $this->source); })()), "grade", [], "any", false, false, false, 181), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>DateFinContrat</th>
                                            <td>";
        // line 185
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 185, $this->source); })()), "dateFinContrat", [], "any", false, false, false, 185)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 185, $this->source); })()), "dateFinContrat", [], "any", false, false, false, 185), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>AdresseMail</th>
                                            <td>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 189, $this->source); })()), "adresseMail", [], "any", false, false, false, 189), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Salaire</th>
                                            <td>";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 193, $this->source); })()), "salaire", [], "any", false, false, false, 193), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>NbTropheLocaux</th>
                                            <td>";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 197, $this->source); })()), "nbTropheLocaux", [], "any", false, false, false, 197), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>NbTropheInternationaux</th>
                                            <td>";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 201, $this->source); })()), "nbTropheInternationaux", [], "any", false, false, false, 201), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>FormationPrefere</th>
                                            <td>";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 205, $this->source); })()), "formationPrefere", [], "any", false, false, false, 205), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>ImageFormation</th>
                                            <td>";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 209, $this->source); })()), "imageFormation", [], "any", false, false, false, 209), "html", null, true);
        echo "</td>

                                        </tr>
                                        <tr>
                                            <th>ImageCoach</th>
                                            <td>";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 214, $this->source); })()), "imageCoach", [], "any", false, false, false, 214), "html", null, true);
        echo "</td>

                                        </tr>
                                        <tr>
                                            <th>Age</th>
                                            <td>";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 219, $this->source); })()), "age", [], "any", false, false, false, 219), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>MdpCoach</th>
                                            <td>";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 223, $this->source); })()), "mdpCoach", [], "any", false, false, false, 223), "html", null, true);
        echo "</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_index");
        echo "\">back to list</a>

                                    <a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coach_edit", ["idCoach" => twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 230, $this->source); })()), "idCoach", [], "any", false, false, false, 230)]), "html", null, true);
        echo "\">edit</a>

                                    ";
        // line 232
        echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coach/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 232,  666 => 230,  661 => 228,  653 => 223,  646 => 219,  638 => 214,  630 => 209,  623 => 205,  616 => 201,  609 => 197,  602 => 193,  595 => 189,  588 => 185,  581 => 181,  574 => 177,  567 => 173,  560 => 169,  553 => 165,  545 => 159,  535 => 158,  516 => 156,  218 => 234,  216 => 158,  213 => 157,  211 => 156,  104 => 52,  95 => 46,  86 => 40,  45 => 1,);
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
        Co-Takwira
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
                        <p> Mes Entrainements</p>
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
                    <a class=\"navbar-brand\" href=\"javascript:;\">Matchs</a>
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
                                <h4 class=\"card-title\">Ajouter Un nouveau Match</h4>
                                <p class=\"card-category\">Compléter</p>
                            </div>
                            <div class=\"card-body\">

















                                {% block title %}Coach{% endblock %}

                                {% block body %}
                                    <h1>Coach</h1>

                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <th>IdCoach</th>
                                            <td>{{ coach.idCoach }}</td>
                                        </tr>
                                        <tr>
                                            <th>NomCoach</th>
                                            <td>{{ coach.nomCoach }}</td>
                                        </tr>
                                        <tr>
                                            <th>PrenomCoach</th>
                                            <td>{{ coach.prenomCoach }}</td>
                                        </tr>
                                        <tr>
                                            <th>DateNaissance</th>
                                            <td>{{ coach.dateNaissance ? coach.dateNaissance|date('Y-m-d') : '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Grade</th>
                                            <td>{{ coach.grade }}</td>
                                        </tr>
                                        <tr>
                                            <th>DateFinContrat</th>
                                            <td>{{ coach.dateFinContrat ? coach.dateFinContrat|date('Y-m-d') : '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>AdresseMail</th>
                                            <td>{{ coach.adresseMail }}</td>
                                        </tr>
                                        <tr>
                                            <th>Salaire</th>
                                            <td>{{ coach.salaire }}</td>
                                        </tr>
                                        <tr>
                                            <th>NbTropheLocaux</th>
                                            <td>{{ coach.nbTropheLocaux }}</td>
                                        </tr>
                                        <tr>
                                            <th>NbTropheInternationaux</th>
                                            <td>{{ coach.nbTropheInternationaux }}</td>
                                        </tr>
                                        <tr>
                                            <th>FormationPrefere</th>
                                            <td>{{ coach.formationPrefere }}</td>
                                        </tr>
                                        <tr>
                                            <th>ImageFormation</th>
                                            <td>{{ coach.imageFormation }}</td>

                                        </tr>
                                        <tr>
                                            <th>ImageCoach</th>
                                            <td>{{ coach.imageCoach }}</td>

                                        </tr>
                                        <tr>
                                            <th>Age</th>
                                            <td>{{ coach.age }}</td>
                                        </tr>
                                        <tr>
                                            <th>MdpCoach</th>
                                            <td>{{ coach.mdpCoach }}</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <a href=\"{{ path('coach_index') }}\">back to list</a>

                                    <a href=\"{{ path('coach_edit', {'idCoach': coach.idCoach}) }}\">edit</a>

                                    {{ include('coach/_delete_form.html.twig') }}
                                {% endblock %}





















                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card card-profile\">
                            <div class=\"card-avatar\">
                                <a href=\"javascript:;\">
                                    <img class=\"img\" src=\"../assets/img/faces/marc.jpg\" />
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h6 class=\"card-category text-gray\">CEO / Co-Founder</h6>
                                <h4 class=\"card-title\">Alec Thompson</h4>
                                <p class=\"card-description\">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href=\"javascript:;\" class=\"btn btn-primary btn-round\">Follow</a>
                            </div>
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
                            <a href=\"\">
                                Co-Takwira
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

                    </ul>
                </nav>

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

</html>", "coach/show.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\coach\\show.html.twig");
    }
}
