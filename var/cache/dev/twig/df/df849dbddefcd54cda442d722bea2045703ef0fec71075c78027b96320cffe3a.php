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

/* reclamation/pdf.html.twig */
class __TwigTemplate_7dce8a698f349756ec0fb855bc0ff92d5cac3cc59cc497694e18e0e205c66912 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<div class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header card-header-primary\">
    <h1 align=\"center\" style=\"color:blue;\">Reclamations</h1>
    <h2  align=\"center\"style=\"color:orange;\" > List of Reclamations </h2>
</div>
<!DOCTYPE html>
<html>
<head>
    <style>
        #reclamations {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #reclamations td, #reclamations th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #reclamations tr:nth-child(even){background-color: #f2f2f2;}

        #reclamations tr:hover {background-color: #ddd;}

        #reclamations th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: royalblue;
            color: white;
        }
    </style>
</head>
<body>

<table id=\"reclamations\">

    <tr>

        <th>idrec</th>
        <th>sujetrec</th>
        <th>descriptionrec</th>
        <th>statusrec</th>
        <th>daterec</th>
        ";
        // line 52
        echo "        <th>nomprenomcoach</th>
        ";
        // line 54
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reclamation"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 58
            echo "    <tr>

                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idrec", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujetrec", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionrec", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "statusrec", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "daterec", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "daterec", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        ";
            // line 66
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nomprenomcoach", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                        ";
            // line 73
            echo "                        <script>


    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 78,  155 => 73,  150 => 66,  146 => 64,  142 => 63,  138 => 62,  134 => 61,  130 => 60,  126 => 58,  122 => 57,  117 => 54,  114 => 52,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<div class=\"content\">
<div class=\"container-fluid\">
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"card\">
<div class=\"card-header card-header-primary\">
    <h1 align=\"center\" style=\"color:blue;\">Reclamations</h1>
    <h2  align=\"center\"style=\"color:orange;\" > List of Reclamations </h2>
</div>
<!DOCTYPE html>
<html>
<head>
    <style>
        #reclamations {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #reclamations td, #reclamations th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #reclamations tr:nth-child(even){background-color: #f2f2f2;}

        #reclamations tr:hover {background-color: #ddd;}

        #reclamations th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: royalblue;
            color: white;
        }
    </style>
</head>
<body>

<table id=\"reclamations\">

    <tr>

        <th>idrec</th>
        <th>sujetrec</th>
        <th>descriptionrec</th>
        <th>statusrec</th>
        <th>daterec</th>
        {# <th>datetraitement</th> #}
        <th>nomprenomcoach</th>
        {# <th>imgrec</th> #}
    </tr>
    </thead>
    <tbody>
    {% for reclamation in reclamation %}
    <tr>

                        <td>{{ reclamation.idrec }}</td>
                        <td>{{ reclamation.sujetrec }}</td>
                        <td>{{ reclamation.descriptionrec }}</td>
                        <td>{{ reclamation.statusrec }}</td>
                        <td>{{ reclamation.daterec ? reclamation.daterec|date('Y-m-d') : '' }}</td>
                        {# <td>{{ reclamation.datetraitement ? reclamation.datetraitement|date('Y-m-d') : '' }}</td> #}
                        <td>{{ reclamation.nomprenomcoach }}</td>
                        {# {% if reclamation.imgrec != null %}
                            <td><img src=\"{{ asset('uploads/images/' ~ reclamation.imgrec) }}\" alt=\"\" style=\"width: 50px;height: 50px\"> </td> 
                        {% endif %}
                        {% if reclamation.imgrec == null %}
                           <td>No.Image</td> 
                        {% endif %} #}
                        <script>


    </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}", "reclamation/pdf.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\reclamation\\pdf.html.twig");
    }
}
