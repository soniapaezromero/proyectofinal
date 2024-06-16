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

/* novedades/index.html.twig */
class __TwigTemplate_6ba878a8f95fd195d67c593fae6dbf2e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "novedades/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "novedades/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Noticias";
        
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

    <h1>Novedades</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Noticias</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["novedades"]) || array_key_exists("novedades", $context) ? $context["novedades"] : (function () { throw new RuntimeError('Variable "novedades" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["novedade"]) {
            // line 20
            yield "            <tr>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["novedade"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["novedade"], "noticias", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["novedade"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Mostrar</a>
                    ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 26
                yield "                    \t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["novedade"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\">Modifcar</a>
                    ";
            }
            // line 28
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            yield "            <tr>
                <td colspan=\"3\">No  Hay novedades</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </tbody>
    </table>
\t ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            yield "   \t\t <a class=\"btn btn-info w-25\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_new");
            yield "\">Crear nueva</a>
     ";
        }
        // line 40
        yield "     
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
        return "novedades/index.html.twig";
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
        return array (  147 => 40,  141 => 38,  139 => 37,  135 => 35,  126 => 31,  119 => 28,  113 => 26,  111 => 25,  107 => 24,  102 => 22,  98 => 21,  95 => 20,  90 => 19,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Noticias{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Novedades</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Noticias</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for novedade in novedades %}
            <tr>
                <td>{{ novedade.id }}</td>
                <td>{{ novedade.noticias }}</td>
                <td>
                    <a href=\"{{ path('app_novedades_show', {'id': novedade.id}) }}\">Mostrar</a>
                    {% if is_granted('ROLE_ADMIN') %}
                    \t<a href=\"{{ path('app_novedades_edit', {'id': novedade.id}) }}\">Modifcar</a>
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">No  Hay novedades</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
\t {% if is_granted('ROLE_ADMIN') %}
   \t\t <a class=\"btn btn-info w-25\" href=\"{{ path('app_novedades_new') }}\">Crear nueva</a>
     {% endif %}
     
</div>
{% endblock %}
", "novedades/index.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\novedades\\index.html.twig");
    }
}
