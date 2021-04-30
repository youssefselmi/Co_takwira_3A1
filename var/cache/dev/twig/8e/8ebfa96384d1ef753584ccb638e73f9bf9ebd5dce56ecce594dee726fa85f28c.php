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

/* rate/_form.html.twig */
class __TwigTemplate_94d98a3d433844d803f302d5c07ea44591a8119e58e703108e7bf33bf7cdc404 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rate/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
<div class=\"tg-filterbale-nav option-set\">
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<div class=\"testboxRating\">
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"nomequipe ⚽\" disabled required/>
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nomequipe", [], "any", false, false, false, 13), 'widget');
        echo "
\t\t\t<br>
\t\t\t<h4>Rating </h4>
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "rate", [], "any", false, false, false, 16), 'widget', ["attr" => ["style" => "height:60pt"]]);
        echo "
\t\t
\t\t\t<br>
<br>
\t\t\t<button class=\"tg-btn \">";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 20, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
\t\t</div>
</div>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rate/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 20,  66 => 16,  60 => 13,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{{ form_start(form) }}
<div class=\"tg-filterbale-nav option-set\">
\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\" rel=\"stylesheet\">
\t\t<div class=\"testboxRating\">
\t\t\t<br>
\t\t\t<label id=\"icon\" for=\"name\">
\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t</label>
\t\t\t<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"nomequipe ⚽\" disabled required/>
\t\t\t{{ form_widget(form.nomequipe)}}
\t\t\t<br>
\t\t\t<h4>Rating </h4>
\t\t\t{{ form_widget(form.rate, { 'attr':{ 'style': 'height:60pt'} })}}
\t\t
\t\t\t<br>
<br>
\t\t\t<button class=\"tg-btn \">{{ button_label|default('Save') }}</button>
\t\t</div>
</div>
{{ form_end(form) }}
", "rate/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\rate\\_form.html.twig");
    }
}
