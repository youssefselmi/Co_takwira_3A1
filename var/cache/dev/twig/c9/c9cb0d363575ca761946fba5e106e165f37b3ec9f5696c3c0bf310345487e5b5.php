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

/* joueur/pdf.html.twig */
class __TwigTemplate_d1bfd8225cf4c2c400bf3cd8d953153db5330b12b4d2ac4f533c041e80f3986b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/pdf.html.twig"));

        // line 1
        echo "

";
        // line 3
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

        // line 4
        echo "

    <h1 style=\"text-align: center\"> Liste des joueurs </h1>
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

            #customers tr:nth-child(even){background-color: #FFC0CB\t;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #87CEEB;
                color: white;
            }
        </style>
    </head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

        <th scope=\"row\">IdJoueur</th>
        <th scope=\"row\">NomJoueur</th>
        <th scope=\"row\">PrenomJoueur</th>
        <th scope=\"row\">DateNaissance</th>
        <th scope=\"row\">Age</th>
        <th scope=\"row\">numero</th>
        <th scope=\"row\">AdresseMail</th>
        <th scope=\"row\">ville</th>

        <th scope=\"row\">categorie</th>
        <th scope=\"row\">position</th>
        <th scope=\"row\">Nom Equipe</th>
        <th scope=\"row\">image</th>
        <th scope=\"row\">password</th>




    </tr>
    <tbody id=\"all\">
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["joueur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 66
            echo "        <tr>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nomJoueur", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "prenomJoueur", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            ((twig_get_attribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "ageJoueur", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "numero", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "adresseMail", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "ville", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>

            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "categorie", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\$            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "position", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "idEquipe", [], "any", false, false, false, 78), "nomEquipe", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
            <td> <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["joueur"], "image", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "password", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>

        </tr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "joueur/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 86,  186 => 80,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  165 => 74,  161 => 73,  157 => 72,  153 => 71,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  134 => 66,  130 => 65,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}


    <h1 style=\"text-align: center\"> Liste des joueurs </h1>
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

            #customers tr:nth-child(even){background-color: #FFC0CB\t;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #87CEEB;
                color: white;
            }
        </style>
    </head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>

        <th scope=\"row\">IdJoueur</th>
        <th scope=\"row\">NomJoueur</th>
        <th scope=\"row\">PrenomJoueur</th>
        <th scope=\"row\">DateNaissance</th>
        <th scope=\"row\">Age</th>
        <th scope=\"row\">numero</th>
        <th scope=\"row\">AdresseMail</th>
        <th scope=\"row\">ville</th>

        <th scope=\"row\">categorie</th>
        <th scope=\"row\">position</th>
        <th scope=\"row\">Nom Equipe</th>
        <th scope=\"row\">image</th>
        <th scope=\"row\">password</th>




    </tr>
    <tbody id=\"all\">
    {% for joueur in joueur %}
        <tr>
            <td>{{ joueur.idJoueur }}</td>
            <td>{{ joueur.nomJoueur }}</td>
            <td>{{ joueur.prenomJoueur }}</td>
            <td>{{ joueur.dateNaissance ? joueur.dateNaissance|date('Y-m-d') : '' }}</td>
            <td>{{ joueur.ageJoueur }}</td>
            <td>{{ joueur.numero  }}</td>
            <td>{{ joueur.adresseMail }}</td>
            <td>{{ joueur.ville }}</td>

            <td>{{ joueur.categorie }}</td>
\$            <td>{{ joueur.position }}</td>
            <td>{{ joueur.idEquipe.nomEquipe }}</td>
            <td> <img src=\"{{  asset('uploads/images/' ~ joueur.image)}}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            <td>{{ joueur.password }}</td>

        </tr>


    {%endfor%}




{% endblock %}", "joueur/pdf.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\joueur\\pdf.html.twig");
    }
}
