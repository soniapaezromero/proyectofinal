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

/* cart/index.html.twig */
class __TwigTemplate_6000f44e59e0d74849f9887b4856a9fa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Carrito";
        
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
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
            // line 10
            yield "            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    ";
            // line 12
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
            yield "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "save", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            yield "
                                ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "clear", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            yield "
         
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "items", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                yield "                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26), "product", [], "any", false, false, false, 26), "imageName", [], "any", false, false, false, 26), "html", null, true);
                yield "\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29), "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                yield "</h5>
                                        <small>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30), "product", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30), 0, 50), "html", null, true);
                yield "...</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                ";
                // line 33
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 35
$context["item"], "quantity", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "valid", [], "any", false, false, false, 35)) ? ("") : ("is-invalid")))]]);
                // line 37
                yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 39
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), 'errors');
                yield "
                                                </div>
                                            </div>
                                            ";
                // line 42
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "remove", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm"]]);
                yield "
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 46), "data", [], "any", false, false, false, 46), "product", [], "any", false, false, false, 46), "precio", [], "any", false, false, false, 46), "html", null, true);
                yield " €</b>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                        </ul>
                    </div>
                    ";
            // line 52
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end', ["render_rest" => false]);
            yield "
                </div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 61, $this->source); })()), "total", [], "any", false, false, false, 61), "html", null, true);
            yield " €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_new");
            yield "\" class=\"btn btn-warning w-100\">Confirm</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
            </div>
        ";
        } else {
            // line 72
            yield "            <div class=\"alert alert-info\">
               Tu carro esta vacio  ve a productos<a href=\"";
            // line 73
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            yield "\">productos</a>.
            </div>
        ";
        }
        // line 76
        yield "    </div>
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
        return "cart/index.html.twig";
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
        return array (  203 => 76,  197 => 73,  194 => 72,  184 => 65,  177 => 61,  165 => 52,  161 => 50,  151 => 46,  144 => 42,  138 => 39,  134 => 37,  132 => 35,  131 => 33,  125 => 30,  121 => 29,  114 => 26,  110 => 24,  106 => 23,  98 => 18,  94 => 17,  86 => 12,  82 => 10,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carrito{% endblock %}

{% block body %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        {% if cart.items.count > 0 %}
            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    {{ form_start(form) }}
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                {{ form_widget(form.save, {'attr': {'class': 'btn btn-warning'}}) }}
                                {{ form_widget(form.clear, {'attr': {'class': 'btn btn-light'}}) }}
         
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            {% for item in form.items %}
                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\">
                                        <img src=\"{{ asset('images/products/') }}{{item.vars.data.product.imageName }}\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\">
                                        <h5 class=\"mt-0 mb-0\">{{ item.vars.data.product.name }}</h5>
                                        <small>{{ item.vars.data.product.description[:50] }}...</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                {{ form_widget(item.quantity, {
                                                    'attr': {
                                                        'class': 'form-control form-control-sm ' ~ (item.quantity.vars.valid ? '' : 'is-invalid')
                                                    }
                                                }) }}
                                                <div class=\"invalid-feedback\">
                                                    {{ form_errors(item.quantity) }}
                                                </div>
                                            </div>
                                            {{ form_widget(item.remove, {'attr': {'class': 'btn btn-dark btn-sm'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>{{ item.vars.data.product.precio }} €</b>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {{ form_end(form, {'render_rest': false}) }}
                </div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>{{ cart.total }} €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"{{ path('app_pedido_new') }}\" class=\"btn btn-warning w-100\">Confirm</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
               Tu carro esta vacio  ve a productos<a href=\"{{ path('app_producto_index') }}\">productos</a>.
            </div>
        {% endif %}
    </div>
    </div>
{% endblock %}", "cart/index.html.twig", "C:\\Users\\Pc\\Desktop\\proyecto del servidor\\StoreOnlineProject-master\\templates\\cart\\index.html.twig");
    }
}
