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

/* consulta/new.html.twig */
class __TwigTemplate_ad499a52c8a291d4011e6f67986d9e90 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consulta/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consulta/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Consulta";
        
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
        yield "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <h1>Consultanos</h1>


    ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED")) {
            // line 11
            yield "        <label for=\"email\">Introduce tu email para que te respondamos tu consulta.Tanto para dudas como para solicitar tu pedido personalizado. Te contestaremos con la mayor brevedad posible<br><br></label>
        <p></p>
        <input type=\"email\" id=\"email\" style=\"width: 1100px; border-radius: 5px;border-color:lightgrey \"
              value=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultum"]) || array_key_exists("consultum", $context) ? $context["consultum"] : (function () { throw new RuntimeError('Variable "consultum" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), "html", null, true);
            yield "\" required>
        ";
            // line 15
            yield Twig\Extension\CoreExtension::include($this->env, $context, "consulta/_form.html.twig");
            yield "
     ";
        } else {
            // line 17
            yield "          <p>
         ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "consulta/_form.html.twig");
            yield "
          <p>
     ";
        }
        // line 21
        yield "    <p>
    <p>
    <a class=\"btn btn-info w-25\"href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
        yield "\">back to list</a>
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
        return "consulta/new.html.twig";
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
        return array (  110 => 23,  106 => 21,  100 => 18,  97 => 17,  92 => 15,  88 => 14,  83 => 11,  81 => 10,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consulta{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <h1>Consultanos</h1>


    {% if is_granted('IS_AUTHENTICATED')%}
        <label for=\"email\">Introduce tu email para que te respondamos tu consulta.Tanto para dudas como para solicitar tu pedido personalizado. Te contestaremos con la mayor brevedad posible<br><br></label>
        <p></p>
        <input type=\"email\" id=\"email\" style=\"width: 1100px; border-radius: 5px;border-color:lightgrey \"
              value=\"{{ consultum.email }}\" required>
        {{ include('consulta/_form.html.twig') }}
     {% else %}
          <p>
         {{ include('consulta/_form.html.twig') }}
          <p>
     {% endif %}
    <p>
    <p>
    <a class=\"btn btn-info w-25\"href=\"{{ path('app_consulta_index') }}\">back to list</a>
    </div>
{% endblock %}
", "consulta/new.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\consulta\\new.html.twig");
    }
}
