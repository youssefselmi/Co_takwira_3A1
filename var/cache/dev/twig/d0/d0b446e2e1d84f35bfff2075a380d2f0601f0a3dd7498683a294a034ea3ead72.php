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

/* coach/listecoachpdf.html.twig */
class __TwigTemplate_a6361c5caf51bbca3750c33245c5f25ba167ed82b4eedd34d6d55ede640014df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/listecoachpdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/listecoachpdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<h1 style=\"text-align: center\"> Liste des Coahes </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

        <th scope=\"row\">IdCoach</th>
        <th scope=\"row\">NomCoach</th>
        <th scope=\"row\">PrenomCoach</th>
        <th scope=\"row\">DateNaissance</th>
        <th scope=\"row\">Grade</th>
        <th scope=\"row\">DateFinContrat</th>
        <th scope=\"row\">AdresseMail</th>
        <th scope=\"row\">Salaire</th>
        <th scope=\"row\">NbTropheLocaux</th>
        <th scope=\"row\">NbTropheInternationaux</th>
        <th scope=\"row\">FormationPrefere</th>
        <th scope=\"row\">ImageFormation</th>
        <th scope=\"row\">ImageCoach</th>
        <th scope=\"row\">Age</th>
        <th scope=\"row\">MdpCoach</th>



    </tr>
    <tbody id=\"all\">
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coach"]) || array_key_exists("Coach", $context) ? $context["Coach"] : (function () { throw new RuntimeError('Variable "Coach" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 65
            echo "        <tr>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "idCoach", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nomCoach", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenomCoach", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
            <td>";
            // line 69
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "grade", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
            <td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "dateFinContrat", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "dateFinContrat", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "adresseMail", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "salaire", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nbTropheLocaux", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nbTropheInternationaux", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "formationPrefere", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
            <td> <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["coach"], "imageFormation", [], "any", false, false, false, 77))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            <td> <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["coach"], "imageCoach", [], "any", false, false, false, 78))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>


            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "age", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "mdpCoach", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>

        </tr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coach/listecoachpdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 88,  198 => 82,  194 => 81,  188 => 78,  184 => 77,  180 => 76,  176 => 75,  172 => 74,  168 => 73,  164 => 72,  160 => 71,  156 => 70,  152 => 69,  148 => 68,  144 => 67,  140 => 66,  137 => 65,  133 => 64,  70 => 3,  60 => 2,  49 => 93,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}


<h1 style=\"text-align: center\"> Liste des Coahes </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

        <th scope=\"row\">IdCoach</th>
        <th scope=\"row\">NomCoach</th>
        <th scope=\"row\">PrenomCoach</th>
        <th scope=\"row\">DateNaissance</th>
        <th scope=\"row\">Grade</th>
        <th scope=\"row\">DateFinContrat</th>
        <th scope=\"row\">AdresseMail</th>
        <th scope=\"row\">Salaire</th>
        <th scope=\"row\">NbTropheLocaux</th>
        <th scope=\"row\">NbTropheInternationaux</th>
        <th scope=\"row\">FormationPrefere</th>
        <th scope=\"row\">ImageFormation</th>
        <th scope=\"row\">ImageCoach</th>
        <th scope=\"row\">Age</th>
        <th scope=\"row\">MdpCoach</th>



    </tr>
    <tbody id=\"all\">
    {% for coach in Coach %}
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
            <td> <img src=\"{{ asset('uploads/images/' ~ coach.imageFormation) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            <td> <img src=\"{{ asset('uploads/images/' ~ coach.imageCoach) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>


            <td>{{ coach.age }}</td>
            <td>{{ coach.mdpCoach }}</td>

        </tr>


    {%endfor%}




    {% endblock %}

", "coach/listecoachpdf.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\coach\\listecoachpdf.html.twig");
    }
}
