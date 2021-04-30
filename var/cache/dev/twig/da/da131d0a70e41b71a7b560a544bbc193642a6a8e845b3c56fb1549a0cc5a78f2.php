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

/* reclamation/_form.html.twig */
class __TwigTemplate_fe827b9e96e061e77ae0d63026e1822dab4559eaa84876ac511b695bc6572b28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo "<!--************************************
              // hedha l7achty byh :p
        *************************************-->

";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<div class=\"tg-filterbale-nav option-set\">
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<div class=\"testbox2\">
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"idjoueur #️⃣\" disabled required/>
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "idjoueur", [], "any", false, false, false, 15), 'widget', ["attr" => ["readonly" => "true"]]);
        echo "
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom 👱\" disabled required/>
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nomjoueur", [], "any", false, false, false, 21), 'widget', ["attr" => ["readonly" => "true"]]);
        echo "
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Prenom 👪\" disabled required/>
\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prenomjoueur", [], "any", false, false, false, 26), 'widget', ["attr" => ["readonly" => "true"]]);
        echo "
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-shield\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Email 📧\" disabled required/>
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "emailjoueur", [], "any", false, false, false, 32), 'widget', ["attr" => ["readonly" => "true"]]);
        echo "
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input  type=\"text\" name=\"name\" id=\"name\" placeholder=\"Numero ☎️\" disabled required/>
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tljoueur", [], "any", false, false, false, 37), 'widget', ["attr" => ["readonly" => "true"]]);
        echo "
\t\t\t<br>
          <a style=\"color:black\">Sujet Reclamation 🤔❓</a>
           <br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "sujetrec", [], "any", false, false, false, 44), 'widget');
        echo "
\t\t\t<br>

\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nomprenomcoach", [], "any", false, false, false, 50), 'widget');
        echo " 
\t\t\t<br>
\t\t\t<a style=\"color:black\">Description Reclamation 📝</a>
\t\t\t<br>
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "descriptionrec", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t<br>
\t\t\t<br>

\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "imgrec", [], "any", false, false, false, 58), 'widget');
        echo "
\t\t\t<br>

\t\t\t<button class=\"tg-btn \">";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 61, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
\t\t</div>
</div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 64,  135 => 61,  129 => 58,  122 => 54,  115 => 50,  106 => 44,  96 => 37,  88 => 32,  79 => 26,  71 => 21,  62 => 15,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
              // hedha l7achty byh :p
        *************************************-->

{{ form_start(form) }}
<div class=\"tg-filterbale-nav option-set\">
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<div class=\"testbox2\">
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"idjoueur #️⃣\" disabled required/>
\t\t\t{{ form_widget(form.idjoueur, { 'attr':{ 'readonly': 'true'} })}}
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Nom 👱\" disabled required/>
\t\t\t{{ form_widget(form.nomjoueur, { 'attr':{ 'readonly': 'true'} })}}
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Prenom 👪\" disabled required/>
\t\t\t{{ form_widget(form.prenomjoueur, { 'attr':{ 'readonly': 'true'} })}}
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-shield\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Email 📧\" disabled required/>
\t\t\t{{ form_widget(form.emailjoueur, { 'attr':{ 'readonly': 'true'} })}}
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t<input  type=\"text\" name=\"name\" id=\"name\" placeholder=\"Numero ☎️\" disabled required/>
\t\t\t{{ form_widget(form.tljoueur, { 'attr':{ 'readonly': 'true'} })}}
\t\t\t<br>
          <a style=\"color:black\">Sujet Reclamation 🤔❓</a>
           <br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t{{ form_widget(form.sujetrec)}}
\t\t\t<br>

\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-envelope \"></i>
\t\t\t</label>
\t\t\t {{ form_widget(form.nomprenomcoach)}} 
\t\t\t<br>
\t\t\t<a style=\"color:black\">Description Reclamation 📝</a>
\t\t\t<br>
\t\t\t{{ form_widget(form.descriptionrec)}}
\t\t\t<br>
\t\t\t<br>

\t\t\t{{ form_widget(form.imgrec) }}
\t\t\t<br>

\t\t\t<button class=\"tg-btn \">{{ button_label|default('Ajouter') }}</button>
\t\t</div>
</div>
{{ form_end(form) }}
", "reclamation/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\reclamation\\_form.html.twig");
    }
}
