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

/* admin/dashboard.html.twig */
class __TwigTemplate_cb5faeedd63023bcf17e136009ea68d3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div id=\"mother\">
    <div id=\"infoPedidos\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\" style=\"background: navajowhite\">
            <h1 >Pedidos Recientes</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Referencia</th>
                <th>Actualizacion</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 18
            yield "                <tr>
                    <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                    <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pedido"], "referencia", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["pedido"], "createdAt", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            yield "</td>
                    <td><a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\">Ir</a></td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            yield "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            </tbody>
        </table>
    </div>
    <div  id=\"infoStock\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\">
            <h1>Stock < 10 </h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Cantidad</th>
                 <th>Ver</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 45
            yield "                <tr>
                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "producto", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "cantidad", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                    <td><a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">Ir</a></td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "            </tbody>
        </table>
    </div>
        <div  id=\"infoConsulta\"style=\"background: navajowhite; border: 0; background-clip: content-box; justify-content: space-around; width:auto;margin-left: 10px;margin-top: 50px;padding-top:10px; align-items: center;text-align: center;\">
            <table class=\"table\">
                <h1>Consultas</h1>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody style=\"text-align: center\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["consultas"]) || array_key_exists("consultas", $context) ? $context["consultas"] : (function () { throw new RuntimeError('Variable "consultas" does not exist.', 70, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["consulta"]) {
            // line 71
            yield "                    <tr>
                        <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consulta"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                        <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consulta"], "email", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                        <td> <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["consulta"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">Ir</a></td>

                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            yield "                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consulta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                </tbody>
            </table>
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
        return "admin/dashboard.html.twig";
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
        return array (  231 => 82,  222 => 78,  213 => 74,  209 => 73,  205 => 72,  202 => 71,  197 => 70,  181 => 56,  172 => 52,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  149 => 45,  144 => 44,  127 => 29,  118 => 25,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  95 => 18,  90 => 17,  75 => 4,  68 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Admin{% endblock %}
{% block body %}
    <div id=\"mother\">
    <div id=\"infoPedidos\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\" style=\"background: navajowhite\">
            <h1 >Pedidos Recientes</h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Referencia</th>
                <th>Actualizacion</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            {% for pedido in pedidos %}
                <tr>
                    <td>{{ pedido.id }}</td>
                    <td>{{ pedido.referencia }}</td>
                    <td>{{ pedido.createdAt|date(\"d/m/Y\") }}</td>
                    <td><a href=\"{{ path('app_pedido_show', {'id': pedido.id}) }}\">Ir</a></td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div  id=\"infoStock\"style=\"background: navajowhite; border: 0;\">
        <table class=\"table\">
            <h1>Stock < 10 </h1>
            <thead>
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Cantidad</th>
                 <th>Ver</th>
            </tr>
            </thead>
            <tbody style=\"text-align: center\">
            {% for stock in stocks %}
                <tr>
                    <td>{{ stock.id }}</td>
                    <td>{{ stock.producto.name }}</td>
                    <td>{{ stock.cantidad }}</td>
                    <td><a href=\"{{ path('app_stock_show', {'id': stock.id}) }}\">Ir</a></td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
        <div  id=\"infoConsulta\"style=\"background: navajowhite; border: 0; background-clip: content-box; justify-content: space-around; width:auto;margin-left: 10px;margin-top: 50px;padding-top:10px; align-items: center;text-align: center;\">
            <table class=\"table\">
                <h1>Consultas</h1>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody style=\"text-align: center\">
                {% for consulta in consultas %}
                    <tr>
                        <td>{{ consulta.id }}</td>
                        <td>{{consulta.email}}</td>
                        <td> <a href=\"{{ path('app_consulta_show', {'id': consulta.id}) }}\">Ir</a></td>

                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

{% endblock %}

", "admin/dashboard.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\admin\\dashboard.html.twig");
    }
}
