<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/home.html.twig */
class __TwigTemplate_000b6309fbfc9d363151809e6665377c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Artesania en madera";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\"
                 xmlns:https=\"http://www.w3.org/1999/xhtml\">
                ";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    <div class=\"container\" style=\"background: transparent;margin-right: 25%;height: auto;border: 0\">
        <h1 style=\"width: auto;color: #b88b5c;font-family: 'Brush Script MT';font-size:80pt;margin-top: 25Px;\"><b>Artesania en Madera</b> </h1>
        <h2 style=\"width: auto;color: #b88b5c;font-family: 'Brush Script MT';font-size:40pt;margin-top: 25Px;\">Artículos de madera pintados a mano</h2></div>
    </div>
    <div class=\"container\" style=\"background: transparent;margin-right: 25%;height: auto;border :0\">
        <h3 style=\"width: auto;color:#b88b5c;font-family: 'Verdana';font-size:20pt;margin-top: 30Px;\"><b>Articulos Personalizados</b></h3>
        <p style=\"width: auto;color:#b88b5c;font-family: 'Verdana';font-size:12pt;margin-top: 25Px;text-align: justify;margin-left: 10%\">Además de los artículos que aparecen en el catálogo,  queremos deciros que podéis realizar<br> cualquier otra idea que tengáis... desde un logotipo de empresa,  un club motero,.... un nombre<br> para una habitación infantil... Lo que se os ocurra !! . En nuestras redes sociales podréis ver algunos ejemplos<br> de lo que hacemos . Esperamos vuestras propuestas!!!<br>Si la pieza que queréis del catálogo está agotada, no hay problema.
            Contactad con nosotros y la<br> repondremos a la mayor brevedad.</p>
    </div>
    <div class=\"container\" style=\"background: #b88b5c;margin-left: 5%;height: 1000px;width:auto;border :0;mar\">
        <h3 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 10Px;\"><b>Conocenos</b></h3>
        <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/artesano.jpg"), "html", null, true);
        yield "\" height=\"80\">
        <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:10pt;margin-top: 25Px;text-align: justify;margin-left: 20%\"><b>Nos encanta imaginar que alguna pieza hecha por nosotros estará en algún<br>
                lugar.... No sabemos dónde....en un cuarto de una niña... en la habitación de uno<br>
                de nuestros queridos \"frikis\".....en la cocina de una mujer con personalidad.... <br>
                        Nos alucina ver las caras de nuestros clientes cuando por primera vez, ven<br>
                terminada su pieza.. Ese momento es mágico. Esa pieza que ellos imaginaban<br>
                en su cabeza como un boceto y que tras conversar, muchos diseños, muchos cortes<br>
                y lijado de madera y unas cuantas capas de pintura, todo ello hecho con un gran<br>
                amor, se convierte en algo único. Algo especial que es un pedacito de ellos y<br>
                también de nosotros. Ese momento compensa todos los inconvenientes que han<br>
                surgido en el proceso, como las máquinas que muchas veces se rebelan,... la<br>
                maderaque sorprende su comportamiento cada día,... la pintura en sitios en los<br>
                que no entra un pincel y se estropea lo ya terminado. . . Y al final ese momento<br>
                mágico que os decía, nos engancha a seguir, deseando que nos planteeis un<br> nuevo reto.</b> </p>
        <h3 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 25Px;\"><b>Contacta con Nosotros</b></h3>
        <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:10pt;margin-top: 25Px;text-align: justify;margin-left: 20%\"><img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/auricular-phone-symbol-in-a-circle_icon-icons.com_56570.png"), "html", null, true);
        yield "\"><b>+34 696 49 52 65 | </b><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/letter_icon-icons.com_67753.png"), "html", null, true);
        yield "\"> <b>macandmike.artesaniaenmadera@gmail.com</b></p>
        <div class=\"card\" style=\"background: transparent;border: 0;display:inline-block \">
            <p style=\"width: auto;color:white;font-family: 'Verdana';font-size:16pt;margin-top: 25Px;text-align: left;\"><b>Nuestras redes</b>
            <p>
            <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/3721672-instagram_108066.png"), "html", null, true);
        yield "\">
            <a class=\"btn\" href=\"https://www.instagram.com/mac_and_mike/\">Instagram</a>
            <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/facebook_icon_130940.png"), "html", null, true);
        yield "\"
            <a class=\"btn\" href=\"https://www.facebook.com/macandmikeartesaniaenmadera/\">Facebook</a>
            </p>
        </div>
       <p></p>
        <h4 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 25Px;text-align: left;\"><b></b>Localizacion</b></h4>
        <div class=\"flex\" style=\"background: transparent;border: 0;margin-top:10px;f\">
            <div style=\"float: left;\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.7663446207457!2d-4.428038524940736!3d36.72817247175776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f7bb989dcd15%3A0xd0cf189087384a43!2sC.%20Huerto%20de%20los%20Claveles%2C%2013%2C%2029013%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1686378883406!5m2!1ses!2ses\" width=\"400\" height=\"300\" style=\"border:0;margin-left: 0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
            </div>
            <div>
                <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:12pt;margin-top: 0;text-align: justify;margin-left: 40%;\">Dirección<br> C/ Huerto de los Claveles 13 Málaga España</p>
                <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:12pt;margin-top: 0;text-align: justify;margin-left: 40%;\">Horario<br> Lunes a Viernes<br> Mañana: 9:00 -13:00 h  Tardes: 17:00 - 19:00h</p>





            </div>
        </div>
        </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  158 => 50,  153 => 48,  144 => 44,  126 => 29,  113 => 18,  107 => 17,  95 => 11,  89 => 9,  84 => 8,  80 => 7,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artesania en madera{% endblock %}

{% block body %}
    {{ parent() }}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\"
                 xmlns:https=\"http://www.w3.org/1999/xhtml\">
                {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        {% endfor %}
    {% endfor %}
    <div class=\"container\" style=\"background: transparent;margin-right: 25%;height: auto;border: 0\">
        <h1 style=\"width: auto;color: #b88b5c;font-family: 'Brush Script MT';font-size:80pt;margin-top: 25Px;\"><b>Artesania en Madera</b> </h1>
        <h2 style=\"width: auto;color: #b88b5c;font-family: 'Brush Script MT';font-size:40pt;margin-top: 25Px;\">Artículos de madera pintados a mano</h2></div>
    </div>
    <div class=\"container\" style=\"background: transparent;margin-right: 25%;height: auto;border :0\">
        <h3 style=\"width: auto;color:#b88b5c;font-family: 'Verdana';font-size:20pt;margin-top: 30Px;\"><b>Articulos Personalizados</b></h3>
        <p style=\"width: auto;color:#b88b5c;font-family: 'Verdana';font-size:12pt;margin-top: 25Px;text-align: justify;margin-left: 10%\">Además de los artículos que aparecen en el catálogo,  queremos deciros que podéis realizar<br> cualquier otra idea que tengáis... desde un logotipo de empresa,  un club motero,.... un nombre<br> para una habitación infantil... Lo que se os ocurra !! . En nuestras redes sociales podréis ver algunos ejemplos<br> de lo que hacemos . Esperamos vuestras propuestas!!!<br>Si la pieza que queréis del catálogo está agotada, no hay problema.
            Contactad con nosotros y la<br> repondremos a la mayor brevedad.</p>
    </div>
    <div class=\"container\" style=\"background: #b88b5c;margin-left: 5%;height: 1000px;width:auto;border :0;mar\">
        <h3 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 10Px;\"><b>Conocenos</b></h3>
        <img src=\"{{ asset('images/artesano.jpg') }}\" height=\"80\">
        <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:10pt;margin-top: 25Px;text-align: justify;margin-left: 20%\"><b>Nos encanta imaginar que alguna pieza hecha por nosotros estará en algún<br>
                lugar.... No sabemos dónde....en un cuarto de una niña... en la habitación de uno<br>
                de nuestros queridos \"frikis\".....en la cocina de una mujer con personalidad.... <br>
                        Nos alucina ver las caras de nuestros clientes cuando por primera vez, ven<br>
                terminada su pieza.. Ese momento es mágico. Esa pieza que ellos imaginaban<br>
                en su cabeza como un boceto y que tras conversar, muchos diseños, muchos cortes<br>
                y lijado de madera y unas cuantas capas de pintura, todo ello hecho con un gran<br>
                amor, se convierte en algo único. Algo especial que es un pedacito de ellos y<br>
                también de nosotros. Ese momento compensa todos los inconvenientes que han<br>
                surgido en el proceso, como las máquinas que muchas veces se rebelan,... la<br>
                maderaque sorprende su comportamiento cada día,... la pintura en sitios en los<br>
                que no entra un pincel y se estropea lo ya terminado. . . Y al final ese momento<br>
                mágico que os decía, nos engancha a seguir, deseando que nos planteeis un<br> nuevo reto.</b> </p>
        <h3 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 25Px;\"><b>Contacta con Nosotros</b></h3>
        <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:10pt;margin-top: 25Px;text-align: justify;margin-left: 20%\"><img src=\"{{ asset('images/icons/auricular-phone-symbol-in-a-circle_icon-icons.com_56570.png') }}\"><b>+34 696 49 52 65 | </b><img src=\"{{ asset('images/icons/letter_icon-icons.com_67753.png') }}\"> <b>macandmike.artesaniaenmadera@gmail.com</b></p>
        <div class=\"card\" style=\"background: transparent;border: 0;display:inline-block \">
            <p style=\"width: auto;color:white;font-family: 'Verdana';font-size:16pt;margin-top: 25Px;text-align: left;\"><b>Nuestras redes</b>
            <p>
            <img src=\"{{ asset('images/icons/3721672-instagram_108066.png') }}\">
            <a class=\"btn\" href=\"https://www.instagram.com/mac_and_mike/\">Instagram</a>
            <img src=\"{{ asset('images/icons/facebook_icon_130940.png') }}\"
            <a class=\"btn\" href=\"https://www.facebook.com/macandmikeartesaniaenmadera/\">Facebook</a>
            </p>
        </div>
       <p></p>
        <h4 style=\"width: auto;color:white;font-family: 'Verdana';font-size:20pt;margin-top: 25Px;text-align: left;\"><b></b>Localizacion</b></h4>
        <div class=\"flex\" style=\"background: transparent;border: 0;margin-top:10px;f\">
            <div style=\"float: left;\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.7663446207457!2d-4.428038524940736!3d36.72817247175776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f7bb989dcd15%3A0xd0cf189087384a43!2sC.%20Huerto%20de%20los%20Claveles%2C%2013%2C%2029013%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1686378883406!5m2!1ses!2ses\" width=\"400\" height=\"300\" style=\"border:0;margin-left: 0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
            </div>
            <div>
                <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:12pt;margin-top: 0;text-align: justify;margin-left: 40%;\">Dirección<br> C/ Huerto de los Claveles 13 Málaga España</p>
                <p style=\"width: auto;color:navajowhite;font-family: 'Verdana';font-size:12pt;margin-top: 0;text-align: justify;margin-left: 40%;\">Horario<br> Lunes a Viernes<br> Mañana: 9:00 -13:00 h  Tardes: 17:00 - 19:00h</p>





            </div>
        </div>
        </div>


{% endblock %}

", "default/home.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\default\\home.html.twig");
    }
}
