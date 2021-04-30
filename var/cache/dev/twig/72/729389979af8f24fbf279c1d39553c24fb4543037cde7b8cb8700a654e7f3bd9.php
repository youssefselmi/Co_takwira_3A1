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

/* joueur/index.html.twig */
class __TwigTemplate_10546f24edfb22c466b63274aca2b6aead9253fc0de7add5e1d643ecfbe82729 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template/match.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/index.html.twig"));

        $this->parent = $this->loadTemplate("template/match.html.twig", "joueur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Joueur index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\" dropdown-menu-right\">

        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_new");
        echo "\" data-toggle=\"dropdown-menu-right\">
            <i class=\"fa fa-plus-circle fa-2x\"> </i>
        </a>
    </div>
<div class=\"card\">
    <div class=\"card-header card-header-primary\">

        <h3 class=\"card-title \">Liste des joueurs </h3>
        <p class=\"card-category\"> Here is a subtitle for this table</p>
    </div>
</div>

    <div id=\"divs\">
        <input type=\"text\" id=\"search\" placeholder=\"recherche par nom\">
        <input type=\"text\" id=\"search2\" placeholder=\"recherche par age\">
    </div>

    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>


    <table id=\"t\" class=\"table\" >
        <thead>
            <tr>
                <th>IdJoueur</th>
                <th>NomJoueur</th>
                <th>PrenomJoueur</th>
                <th>DateNaissance</th>
                <th>AgeJoueur</th>
                <th>Numero</th>
                <th>AdresseMail</th>
                <th>Ville</th>
                <th>Categorie</th>
                <th>Position</th>
                <th>IdEquipe</th>
                <th>Image</th>
                <th>Password</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 50
            echo "            <tr>



                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nomJoueur", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "prenomJoueur", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "dateNaissance", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "ageJoueur", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "numero", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "adresseMail", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "ville", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "categorie", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "position", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["joueur"], "idEquipe", [], "any", false, false, false, 64), "nomEquipe", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td> <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["joueur"], "image", [], "any", false, false, false, 65))), "html", null, true);
            echo " \" alt=\"\" style=\"width: 80px; height: 80px\"> </td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "password", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["idJoueur" => twig_get_attribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">show</a>

                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_edit", ["idJoueur" => twig_get_attribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
  }

        </tbody>

        <tbody id=\"search\"></tbody>
    </table>
      <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdfyasmine");
        echo "\">new pdf</a>
    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_new");
        echo "\">Create new</a>

    ";
        // line 89
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 89, $this->source); })()));
        echo "



    <div>

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
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_joueure");
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
                                    \$('#t tbody#search').empty();
                                    \$.each(JSON.parse(retour), function(i, obj) {
                                        \$('#t tbody#all').hide();

                                        \$('#t tbody#search').append('<tr><td> '+obj.idJoueur+'  </td><td>    '+obj.nomJoueur+'  </td><td>'+obj.prenomJoueur+' </td> <td>'+obj.dateNaissance.substring(0,10)+' </td>   <td>'+obj.ageJoueur +' </td> <td>'+obj.numero+' </td>  <td>'+obj.adresseMail+' </td> <td>'+obj.ville +' </td> </td> <td>'+obj.categorie +' </td>  <td>'+obj.idEquipe +' </td> <td>'+obj.position +' </td> <td><img  src=\"/uploads/images/ '+obj.image+ '\" alt=\"\" style=\"width: 50px;height: 50px\"></td>   <td>'+obj.password +' </td>  <td> <a href=\"/joueur/'+obj.idJoueur+'/edit\">edit</a></td></tr>');
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

            });
            /*end rechercher avancee multicritéres selon sujet et staus*/
        </script>




    </div>

    ";
        // line 151
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "joueur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 151,  271 => 112,  245 => 89,  240 => 87,  236 => 86,  227 => 79,  218 => 75,  208 => 70,  203 => 68,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  144 => 50,  139 => 49,  113 => 26,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template/match.html.twig' %}

{% block title %}Joueur index{% endblock %}

{% block body %}
    <div class=\" dropdown-menu-right\">

        <a href=\"{{ path('joueur_new') }}\" data-toggle=\"dropdown-menu-right\">
            <i class=\"fa fa-plus-circle fa-2x\"> </i>
        </a>
    </div>
<div class=\"card\">
    <div class=\"card-header card-header-primary\">

        <h3 class=\"card-title \">Liste des joueurs </h3>
        <p class=\"card-category\"> Here is a subtitle for this table</p>
    </div>
</div>

    <div id=\"divs\">
        <input type=\"text\" id=\"search\" placeholder=\"recherche par nom\">
        <input type=\"text\" id=\"search2\" placeholder=\"recherche par age\">
    </div>

    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>


    <table id=\"t\" class=\"table\" >
        <thead>
            <tr>
                <th>IdJoueur</th>
                <th>NomJoueur</th>
                <th>PrenomJoueur</th>
                <th>DateNaissance</th>
                <th>AgeJoueur</th>
                <th>Numero</th>
                <th>AdresseMail</th>
                <th>Ville</th>
                <th>Categorie</th>
                <th>Position</th>
                <th>IdEquipe</th>
                <th>Image</th>
                <th>Password</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for joueur in joueurs %}
            <tr>



                <td>{{ joueur.idJoueur }}</td>
                <td>{{ joueur.nomJoueur }}</td>
                <td>{{ joueur.prenomJoueur }}</td>
                <td>{{ joueur.dateNaissance ? joueur.dateNaissance|date('Y-m-d') : '' }}</td>
                <td>{{ joueur.ageJoueur }}</td>
                <td>{{ joueur.numero }}</td>
                <td>{{ joueur.adresseMail }}</td>
                <td>{{ joueur.ville }}</td>
                <td>{{ joueur.categorie }}</td>
                <td>{{ joueur.position }}</td>
                <td>{{ joueur.idEquipe.nomEquipe }}</td>
                <td> <img src=\"{{ asset('uploads/images/' ~ joueur.image ) }} \" alt=\"\" style=\"width: 80px; height: 80px\"> </td>
                <td>{{ joueur.password }}</td>
                <td>
                    <a href=\"{{ path('joueur_show', {'idJoueur': joueur.idJoueur}) }}\">show</a>

                    <a href=\"{{ path('joueur_edit', {'idJoueur': joueur.idJoueur}) }}\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        {% endfor %}

  }

        </tbody>

        <tbody id=\"search\"></tbody>
    </table>
      <a href=\"{{ path('pdfyasmine') }}\">new pdf</a>
    <a href=\"{{ path('joueur_new') }}\">Create new</a>

    {{ knp_pagination_render(joueurs) }}



    <div>

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
                            url : \"{{ path('search_joueure') }}\",
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
                                    \$('#t tbody#search').empty();
                                    \$.each(JSON.parse(retour), function(i, obj) {
                                        \$('#t tbody#all').hide();

                                        \$('#t tbody#search').append('<tr><td> '+obj.idJoueur+'  </td><td>    '+obj.nomJoueur+'  </td><td>'+obj.prenomJoueur+' </td> <td>'+obj.dateNaissance.substring(0,10)+' </td>   <td>'+obj.ageJoueur +' </td> <td>'+obj.numero+' </td>  <td>'+obj.adresseMail+' </td> <td>'+obj.ville +' </td> </td> <td>'+obj.categorie +' </td>  <td>'+obj.idEquipe +' </td> <td>'+obj.position +' </td> <td><img  src=\"/uploads/images/ '+obj.image+ '\" alt=\"\" style=\"width: 50px;height: 50px\"></td>   <td>'+obj.password +' </td>  <td> <a href=\"/joueur/'+obj.idJoueur+'/edit\">edit</a></td></tr>');
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

            });
            /*end rechercher avancee multicritéres selon sujet et staus*/
        </script>




    </div>

    {{ include('@MercurySeriesFlashy/flashy.html.twig') }}

{% endblock %}







", "joueur/index.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\joueur\\index.html.twig");
    }
}
