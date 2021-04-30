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

/* entrainement/show.html.twig */
class __TwigTemplate_01f5ea26f6b650788c8afd9652409e1ec198b20885f5b0b0854acfa380b1cf52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrainement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entrainement/show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Entrainement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Entrainement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEntrainement</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 11, $this->source); })()), "idEntrainement", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 15, $this->source); })()), "duree", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateEntrainement</th>
                <td>";
        // line 19
        ((twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 19, $this->source); })()), "dateEntrainement", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 19, $this->source); })()), "dateEntrainement", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 23, $this->source); })()), "heure", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdCoach</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 27, $this->source); })()), "idCoach", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdStade</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 31, $this->source); })()), "idStade", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdEquipe</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 35, $this->source); })()), "idEquipe", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrainement_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrainement_edit", ["idEntrainement" => twig_get_attribute($this->env, $this->source, (isset($context["entrainement"]) || array_key_exists("entrainement", $context) ? $context["entrainement"] : (function () { throw new RuntimeError('Variable "entrainement" does not exist.', 46, $this->source); })()), "idEntrainement", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 48
        echo twig_include($this->env, $context, "entrainement/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "entrainement/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 48,  162 => 46,  157 => 44,  149 => 39,  142 => 35,  135 => 31,  128 => 27,  121 => 23,  114 => 19,  107 => 15,  100 => 11,  92 => 5,  82 => 4,  63 => 2,  53 => 4,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Entrainement{% endblock %}

{% block body %}
    <h1>Entrainement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdEntrainement</th>
                <td>{{ entrainement.idEntrainement }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ entrainement.duree }}</td>
            </tr>
            <tr>
                <th>DateEntrainement</th>
                <td>{{ entrainement.dateEntrainement ? entrainement.dateEntrainement|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>{{ entrainement.heure }}</td>
            </tr>
            <tr>
                <th>IdCoach</th>
                <td>{{ entrainement.idCoach }}</td>
            </tr>
            <tr>
                <th>IdStade</th>
                <td>{{ entrainement.idStade }}</td>
            </tr>
            <tr>
                <th>IdEquipe</th>
                <td>{{ entrainement.idEquipe }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ entrainement.type }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('entrainement_index') }}\">back to list</a>

    <a href=\"{{ path('entrainement_edit', {'idEntrainement': entrainement.idEntrainement}) }}\">edit</a>

    {{ include('entrainement/_delete_form.html.twig') }}
{% endblock %}
", "entrainement/show.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\entrainement\\show.html.twig");
    }
}
