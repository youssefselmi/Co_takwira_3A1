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

/* templateFront/afficher.html.twig */
class __TwigTemplate_e3ad90d47ef9523f973a38833daaabe0789ada959c9d5107bf3fe20bac3aa2cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "templateFront/afficher.html.twig"));

        // line 1
        echo "<main>
    <div class=\"static\">
        <h1 class=\"js-heading\">FOOTBALL LEAGUE</h1>
        <p class=\"js-subheading\">Experimental team line-up and football field using CSS 3D transforms.<br><span style=\"font-size: 11px\">Currently buggy in Chrome, will fix soon :)</span></p>
        <div class=\"js-switcher switcher\">
            <a href=\"#\" class=\"js-switch disabled switch-btn\">HOME</a><a href=\"#\" class=\"js-switch switch-btn\">AWAY</a>
        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Team cards / icons goes here -->
            </div>
            <div class=\"terrain js-terrain\">
                <div class=\"field field--alt\"></div>
                <div class=\"field ground\">
                    <div class=\"field__texture field__texture--gradient\"></div>
                    <div class=\"field__texture field__texture--gradient-b\"></div>
                    <div class=\"field__texture field__texture--grass\"></div>
                    <div class=\"field__line field__line--goal\"></div>
                    <div class=\"field__line field__line--goal field__line--goal--far\"></div>
                    <div class=\"field__line field__line--outline\"></div>
                    <div class=\"field__line field__line--penalty\"></div>
                    <div class=\"field__line field__line--penalty-arc\"></div>
                    <div class=\"field__line field__line--penalty-arc field__line--penalty-arc--far\"></div>
                    <div class=\"field__line field__line--mid\"></div>
                    <div class=\"field__line field__line--circle\"></div>
                    <div class=\"field__line field__line--penalty field__line--penalty--far\"></div>
                </div>
                <div class=\"field__side field__side--front\"></div>
                <div class=\"field__side field__side--left\"></div>
                <div class=\"field__side field__side--right\"></div>
                <div class=\"field__side field__side--back\"></div>
            </div>
        </div>
        <div class=\"loading js-loading\">PLEASE WAIT...</div>
    </div>
</main>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "templateFront/afficher.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
    <div class=\"static\">
        <h1 class=\"js-heading\">FOOTBALL LEAGUE</h1>
        <p class=\"js-subheading\">Experimental team line-up and football field using CSS 3D transforms.<br><span style=\"font-size: 11px\">Currently buggy in Chrome, will fix soon :)</span></p>
        <div class=\"js-switcher switcher\">
            <a href=\"#\" class=\"js-switch disabled switch-btn\">HOME</a><a href=\"#\" class=\"js-switch switch-btn\">AWAY</a>
        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Team cards / icons goes here -->
            </div>
            <div class=\"terrain js-terrain\">
                <div class=\"field field--alt\"></div>
                <div class=\"field ground\">
                    <div class=\"field__texture field__texture--gradient\"></div>
                    <div class=\"field__texture field__texture--gradient-b\"></div>
                    <div class=\"field__texture field__texture--grass\"></div>
                    <div class=\"field__line field__line--goal\"></div>
                    <div class=\"field__line field__line--goal field__line--goal--far\"></div>
                    <div class=\"field__line field__line--outline\"></div>
                    <div class=\"field__line field__line--penalty\"></div>
                    <div class=\"field__line field__line--penalty-arc\"></div>
                    <div class=\"field__line field__line--penalty-arc field__line--penalty-arc--far\"></div>
                    <div class=\"field__line field__line--mid\"></div>
                    <div class=\"field__line field__line--circle\"></div>
                    <div class=\"field__line field__line--penalty field__line--penalty--far\"></div>
                </div>
                <div class=\"field__side field__side--front\"></div>
                <div class=\"field__side field__side--left\"></div>
                <div class=\"field__side field__side--right\"></div>
                <div class=\"field__side field__side--back\"></div>
            </div>
        </div>
        <div class=\"loading js-loading\">PLEASE WAIT...</div>
    </div>
</main>", "templateFront/afficher.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\templateFront\\afficher.html.twig");
    }
}
