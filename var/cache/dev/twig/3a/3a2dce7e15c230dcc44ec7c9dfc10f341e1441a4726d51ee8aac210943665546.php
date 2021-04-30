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

/* joueur/_form.html.twig */
class __TwigTemplate_0c1ffd90b74dcd136387917b024ef79151b3aece17e4e1214f2178a238bf87d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"card-body\">
<form>

<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nomJoueur", [], "any", false, false, false, 9), 'label');
        echo "
            </label>
            <input type=\"text\" class=\"form-control\" ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nomJoueur", [], "any", false, false, false, 11), 'widget');
        echo "

            <div class=\"form-error\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nomJoueur", [], "any", false, false, false, 14), 'errors');
        echo "
            </div>
        </div>

    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenomJoueur", [], "any", false, false, false, 21), 'label');
        echo "
            </label>
            <input type=\"text\" class=\"form-control\" ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenomJoueur", [], "any", false, false, false, 23), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenomJoueur", [], "any", false, false, false, 25), 'errors');
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "adresseMail", [], "any", false, false, false, 31), 'label');
        echo "
            </label>
            <input type=\"text\" class=\"form-control\" ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresseMail", [], "any", false, false, false, 33), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "adresseMail", [], "any", false, false, false, 35), 'errors');
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"form-group\">




                <label for=\"joueur_dateNaissance\" class=\"required\">Date naissance</label>
                <input onclick=\"displayDate()\" class=\"form-controller\" type=\"date\" id=\"dateNaissance\" name='dateNaissance' required=\"required\">

        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "ageJoueur", [], "any", false, false, false, 55), 'label');
        echo "
            </label>
            <input type=\"numero\" class=\"form-control\" ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "ageJoueur", [], "any", false, false, false, 57), 'widget');
        echo "

        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "numero", [], "any", false, false, false, 63), 'label');
        echo "
            </label>
            <input type=\"numero\" class=\"form-control\" ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "numero", [], "any", false, false, false, 65), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "numero", [], "any", false, false, false, 67), 'errors');
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"row\">

    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "position", [], "any", false, false, false, 76), 'label');
        echo "
            </label>
            <select type=\"text\" class=\"form-control\" ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "position", [], "any", false, false, false, 78), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-md-3\">

    <div class=\"form-group\">
        <label class=\"bmd-label-floating\">    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "idEquipe", [], "any", false, false, false, 84), 'label');
        echo "
        </label>
        <select type=\"text\" class=\"form-control\" ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "idEquipe", [], "any", false, false, false, 86), 'widget');
        echo "

    </div>
</div>
</div>


<div class=\"row\">
<div class=\"col-md-3\">
    <div class=\"form-group\">
        <label class=\"bmd-label-floating\">    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "ville", [], "any", false, false, false, 96), 'label');
        echo "
        </label>
        <input onkeyup=\"récupérer()\" id=\"addresse\" type=\"text\" class=\"form-control\" ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "ville", [], "any", false, false, false, 98), 'widget');
        echo "
        <div class=\"form-error\">
            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "ville", [], "any", false, false, false, 100), 'errors');
        echo "
        </div>
    </div>
</div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "password", [], "any", false, false, false, 106), 'label');
        echo "
            </label>
            <input type=\"password\" class=\"form-control\" ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "password", [], "any", false, false, false, 108), 'widget');
        echo "
            <div class=\"form-error\">
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "password", [], "any", false, false, false, 110), 'errors');
        echo "
            </div>
        </div>
    </div></div>
<div class=\"col-md-3\">


</div>

    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-primary pull-right\">";
        // line 120
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 120, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
</form>

";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
<script>
    function displayDate() {
        var date = document.getElementById(\"dateNaissance\").value;
        var a=new Date();


        var an=date.substr(0,4); // l'année (les quatre premiers caractères de la chaîne à partir de zéro)
        var age=a.getFullYear()-an;

            console.log(age);

        document.getElementById(\"joueur_ageJoueur\").value = age;

    }



    //document.getElementById(\"publication_localisation\").value = data.results[i].properties.PlaceName;




</script>


    <script src=\"http://maps.google.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&libraries=places&callback=initialize\"></script>
    <style>#mapcanvas { height: 360px; width: 100%}</style>
    <div id=\"mapcanvas\">

        <script type=\"text/javascript\">
function recuperer() {
    document.map = new google.maps.Map(document.getElementById(\"mapcanvas\"));
    var adresse = document.getElementById(\"addresse\").value;
    console.log(adresse);
    // Nous récupérons le contenu du champ adresse
    if (adresse !== \"\") { // Si l'adresse n'est pas vide
        var geocoder = new google.maps.Geocoder(); // On instancie le geocoder
        geocoder.geocode({'address': adresse}, function (results, status) {
            lat = results[0].geometry.location.lat(); // On récupère la latitude
            lon = results[0].geometry.location.lng(); // On récupère la longitude

        });
    }
    var latlng = new google.maps.LatLng(35.857908, 10.598997);
    var Options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById(\"mapcanvas\"), Options);
    //var carMarkerImage = new google.maps.MarkerImage('resources/images/car.png');
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lon),
        map: map,
        draggable: false,
//icon: carMarkerImage,
        title: \"\",
        autoPan: true

    });
    var infobulle = new google.maps.InfoWindow({
        content: \"ddddd\"
    });
    google.maps.event.addListener(marker, 'mouseover', function () {
        infobulle.open(map, marker);
    });


    document.goToLocation = function (x, y) {
        alert(\"goToLocation, x: \" + x + \", y:\" + y);
        var latLng = new google.maps.LatLng(x, y);
        marker.setPosition(latLng);
        map.setCenter(latLng);
    }
}

        </script>


</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "joueur/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 123,  240 => 120,  236 => 119,  224 => 110,  219 => 108,  214 => 106,  205 => 100,  200 => 98,  195 => 96,  182 => 86,  177 => 84,  168 => 78,  163 => 76,  151 => 67,  146 => 65,  141 => 63,  132 => 57,  127 => 55,  104 => 35,  99 => 33,  94 => 31,  85 => 25,  80 => 23,  75 => 21,  65 => 14,  59 => 11,  54 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"card-body\">
<form>

<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.nomJoueur) }}
            </label>
            <input type=\"text\" class=\"form-control\" {{ form_widget(form.nomJoueur) }}

            <div class=\"form-error\">
                {{ form_errors(form.nomJoueur) }}
            </div>
        </div>

    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.prenomJoueur) }}
            </label>
            <input type=\"text\" class=\"form-control\" {{ form_widget(form.prenomJoueur) }}
            <div class=\"form-error\">
                {{ form_errors(form.prenomJoueur) }}
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.adresseMail) }}
            </label>
            <input type=\"text\" class=\"form-control\" {{ form_widget(form.adresseMail) }}
            <div class=\"form-error\">
                {{ form_errors(form.adresseMail) }}
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-3\">
        <div class=\"form-group\">




                <label for=\"joueur_dateNaissance\" class=\"required\">Date naissance</label>
                <input onclick=\"displayDate()\" class=\"form-controller\" type=\"date\" id=\"dateNaissance\" name='dateNaissance' required=\"required\">

        </div>
    </div>

    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.ageJoueur) }}
            </label>
            <input type=\"numero\" class=\"form-control\" {{ form_widget(form.ageJoueur) }}

        </div>
    </div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.numero) }}
            </label>
            <input type=\"numero\" class=\"form-control\" {{ form_widget(form.numero) }}
            <div class=\"form-error\">
                {{ form_errors(form.numero) }}
            </div>
        </div>
    </div>
</div>
<div class=\"row\">

    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.position) }}
            </label>
            <select type=\"text\" class=\"form-control\" {{ form_widget(form.position) }}
        </div>
    </div>
    <div class=\"col-md-3\">

    <div class=\"form-group\">
        <label class=\"bmd-label-floating\">    {{ form_label(form.idEquipe) }}
        </label>
        <select type=\"text\" class=\"form-control\" {{ form_widget(form.idEquipe) }}

    </div>
</div>
</div>


<div class=\"row\">
<div class=\"col-md-3\">
    <div class=\"form-group\">
        <label class=\"bmd-label-floating\">    {{ form_label(form.ville) }}
        </label>
        <input onkeyup=\"récupérer()\" id=\"addresse\" type=\"text\" class=\"form-control\" {{ form_widget(form.ville) }}
        <div class=\"form-error\">
            {{ form_errors(form.ville) }}
        </div>
    </div>
</div>
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label class=\"bmd-label-floating\">    {{ form_label(form.password) }}
            </label>
            <input type=\"password\" class=\"form-control\" {{ form_widget(form.password) }}
            <div class=\"form-error\">
                {{ form_errors(form.password) }}
            </div>
        </div>
    </div></div>
<div class=\"col-md-3\">


</div>

    {{ form_widget(form) }}
    <button class=\"btn btn-primary pull-right\">{{ button_label|default('Save') }}</button>
</form>

{{ form_end(form) }}
<script>
    function displayDate() {
        var date = document.getElementById(\"dateNaissance\").value;
        var a=new Date();


        var an=date.substr(0,4); // l'année (les quatre premiers caractères de la chaîne à partir de zéro)
        var age=a.getFullYear()-an;

            console.log(age);

        document.getElementById(\"joueur_ageJoueur\").value = age;

    }



    //document.getElementById(\"publication_localisation\").value = data.results[i].properties.PlaceName;




</script>


    <script src=\"http://maps.google.com/maps/api/js?key=AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8&libraries=places&callback=initialize\"></script>
    <style>#mapcanvas { height: 360px; width: 100%}</style>
    <div id=\"mapcanvas\">

        <script type=\"text/javascript\">
function recuperer() {
    document.map = new google.maps.Map(document.getElementById(\"mapcanvas\"));
    var adresse = document.getElementById(\"addresse\").value;
    console.log(adresse);
    // Nous récupérons le contenu du champ adresse
    if (adresse !== \"\") { // Si l'adresse n'est pas vide
        var geocoder = new google.maps.Geocoder(); // On instancie le geocoder
        geocoder.geocode({'address': adresse}, function (results, status) {
            lat = results[0].geometry.location.lat(); // On récupère la latitude
            lon = results[0].geometry.location.lng(); // On récupère la longitude

        });
    }
    var latlng = new google.maps.LatLng(35.857908, 10.598997);
    var Options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById(\"mapcanvas\"), Options);
    //var carMarkerImage = new google.maps.MarkerImage('resources/images/car.png');
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lon),
        map: map,
        draggable: false,
//icon: carMarkerImage,
        title: \"\",
        autoPan: true

    });
    var infobulle = new google.maps.InfoWindow({
        content: \"ddddd\"
    });
    google.maps.event.addListener(marker, 'mouseover', function () {
        infobulle.open(map, marker);
    });


    document.goToLocation = function (x, y) {
        alert(\"goToLocation, x: \" + x + \", y:\" + y);
        var latLng = new google.maps.LatLng(x, y);
        marker.setPosition(latLng);
        map.setCenter(latLng);
    }
}

        </script>


</div>", "joueur/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\TemplateBack\\templates\\joueur\\_form.html.twig");
    }
}
