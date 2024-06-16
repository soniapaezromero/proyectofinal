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

/* producto/index.html.twig */
class __TwigTemplate_5ad07cadf69ba10f10698bd16bb836b1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Producto index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <div class=\"dropdown\" style=\"align-content: center; opacity:50%\">
        <button
                class=\"dropdown-toggle btn\"
                type=\"button\"
                id=\"user-dropdown\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
        >Elige que categoria quieres Ver

        </button>

        <div class=\"dropdown-content\" style=\"background:#dfdfdf;align-content: center; color:black;\">
            <ul>
                <li>
                    <a class=\"dropdown-item\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\" style=\"color:black\">Todos los productos</a>
                </li>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 22
            yield "                <li>
                    <a class=\"dropdown-item\" href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_categoria", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\"style=\"color: black\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoria"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </ul>
        </div>
    </div>
    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;with:1000px;margin-top: 10px;\">

    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>Producto index</h1>
         ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_new");
            yield "\">Crear</a>
         ";
        }
        // line 39
        yield "        <table class=\"table\" style=\"width: 1000px;margin-left: 20px;\">
            <thead>
            <tr >
                <th style=\"width: 5%;\">Id</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 52
            yield "                <tr>
                    <td class=\"table-info\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                    <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                    <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                    <td><img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "imageName", [], "any", false, false, false, 56), "html", null, true);
            yield "\"  height=\"50\"></td>
                    <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 57), 2, ",", "."), "html", null, true);
            yield "€ </td>
                    <td>
                        <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\">Mostrar</a>
                        ";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 61
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                yield "\">Editar</a>
                        ";
            }
            // line 63
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\">Añadir al carrito</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            yield "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "            </tbody>
        </table>
 \t\t
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
        return "producto/index.html.twig";
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
        return array (  209 => 71,  200 => 67,  190 => 63,  184 => 61,  182 => 60,  178 => 59,  173 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  153 => 52,  148 => 51,  134 => 39,  128 => 37,  126 => 36,  114 => 26,  103 => 23,  100 => 22,  96 => 21,  91 => 19,  75 => 5,  68 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto index{% endblock %}
{% block body %}
    <div class=\"dropdown\" style=\"align-content: center; opacity:50%\">
        <button
                class=\"dropdown-toggle btn\"
                type=\"button\"
                id=\"user-dropdown\"
                data-bs-toggle=\"dropdown\"
                aria-expanded=\"false\"
        >Elige que categoria quieres Ver

        </button>

        <div class=\"dropdown-content\" style=\"background:#dfdfdf;align-content: center; color:black;\">
            <ul>
                <li>
                    <a class=\"dropdown-item\" href=\"{{ path('app_producto_index') }}\" style=\"color:black\">Todos los productos</a>
                </li>
                {% for categoria in categorias %}
                <li>
                    <a class=\"dropdown-item\" href=\"{{ path('app_producto_categoria',{'id': categoria.id}) }}\"style=\"color: black\">{{ categoria.name }}</a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"container\" style=\"background: navajowhite;border: 0;margin-left: 10px;with:1000px;margin-top: 10px;\">

    <p></p>
        <p></p>
        <p></p>
        <p></p>
        <h1>Producto index</h1>
         {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_producto_new') }}\">Crear</a>
         {% endif %}
        <table class=\"table\" style=\"width: 1000px;margin-left: 20px;\">
            <thead>
            <tr >
                <th style=\"width: 5%;\">Id</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            {% for producto in productos %}
                <tr>
                    <td class=\"table-info\">{{ producto.id }}</td>
                    <td>{{ producto.name }}</td>
                    <td>{{ producto.stock }}</td>
                    <td><img src=\"{{ asset('images/products/') }}{{ producto.imageName }}\"  height=\"50\"></td>
                    <td>{{ producto.precio |number_format(2, ',', '.')}}€ </td>
                    <td>
                        <a href=\"{{ path('app_producto_show', {'id': producto.id}) }}\">Mostrar</a>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_producto_edit', {'id': producto.id}) }}\">Editar</a>
                        {% endif %}
                        <a href=\"{{ path('app_producto_detail', {'id': producto.id}) }}\">Añadir al carrito</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
 \t\t
    </div>
{% endblock %}
", "producto/index.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\producto\\index.html.twig");
    }
}
