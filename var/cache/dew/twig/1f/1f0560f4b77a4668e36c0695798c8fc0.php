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

/* pedido/new.html.twig */
class __TwigTemplate_e2488c3dbec29a57a023a88b6d669518 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Pedidos";
        
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 6
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 8
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
            // line 14
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Create new Pedido</h1>
    <p></p>
    <label><h2>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 19, $this->source); })()), "referencia", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2></label>
        <p></p>
        <p></p>
        <label><h4>Cliente</h4></label>
        <p></p>
        <label><h5>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 24, $this->source); })()), "clientePedido", [], "any", false, false, false, 24), "html", null, true);
        yield "</h5></label>
        <p></p>
        ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            <h4 style=\"text-align: center;\">Productos</h4>
            <table   name=\"itemspedido[]\"id=\"itemspedido\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody name=\"body\" id=\"body\" onchange=\"total()\" >
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            yield "                    <tr>
                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            yield "</td><td><img height=\"50\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "imageName", [], "any", false, false, false, 42), "html", null, true);
            yield "\"></td>
                        <td><input name=\"precio[]\"  id=\"precio[]\" type=\"number\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "precio", [], "any", false, false, false, 43), "html", null, true);
            yield "\"  min=\"1\" max=\"100\"></td>
                        <td><input  name=\"cantidad[]\" id=\"cantidad[]\" type=\"number\"  min=\"0\" max=\"10\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            yield "\"  onchange=\"multi()\"></td>
                        <td> <input name=\"totalproducto[]\"id=\"totalproducto[]\"type=\"text\" value=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 45), "html", null, true);
            yield "\"></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </tbody>
            </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input id =\"pedidototal\" name=\"pedidototal\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "total", [], "any", false, false, false, 53), "html", null, true);
        yield "€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\"/>
        </div>
         ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "add", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "btn btn-info w-25"]]);
        yield "
         <p>
         <a  class=\"btn btn-info w-25\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        yield "\">back to list</a> 
    </div>
    ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        yield "
     ";
        // line 60
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        yield "         <script>
             function multi() {
                     m1 = document.getElementById(\"precio[]\").value;
                     m2 = document.getElementById(\"cantidad[]\").value;
                     r=m1*m2
                     coste = document.getElementById(\"totalproducto[]\").value=r+\"€\";

             }

             function total(){
                 var totprice=[];
                 var table=document.getElementById(\"itemspedido\");
                 let precios=document.getElementsByName(\"totalproducto[]\");
                 precios.forEach((pr)=>{
                     pru=pr.value;
                     num=pru.replace(/[^0-9]+/g, \"\");
                     precio=parseInt(num);
                     totprice.push(precio);
                 });
                 totalItem=totprice.reduce((a, b) => a + b, 0);
                 document.getElementById(\"pedidototal\").value = totalItem+\"€\";
                 totprice.length=0;
             }

         </script>
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pedido/new.html.twig";
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
        return array (  216 => 61,  202 => 60,  198 => 59,  193 => 57,  188 => 55,  183 => 53,  176 => 48,  167 => 45,  163 => 44,  159 => 43,  152 => 42,  149 => 41,  145 => 40,  128 => 26,  123 => 24,  115 => 19,  109 => 15,  103 => 14,  91 => 8,  86 => 7,  81 => 6,  76 => 5,  69 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pedidos{% endblock %}
{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
        {% endfor %}
    {% endfor %}
    <div class=\"container\" style=\"background: navajowhite;border: 0;\">

    <h1>Create new Pedido</h1>
    <p></p>
    <label><h2>{{ pedido.referencia }}</h2></label>
        <p></p>
        <p></p>
        <label><h4>Cliente</h4></label>
        <p></p>
        <label><h5>{{ pedido.clientePedido }}</h5></label>
        <p></p>
        {{ form_start(form) }}
        <div class=\"form-group\">
            <h4 style=\"text-align: center;\">Productos</h4>
            <table   name=\"itemspedido[]\"id=\"itemspedido\" class=\"table\" style=\"width: 300px;margin:0 auto;align-content: center;\">
                <thead>
                <tr>
                    <th style=\"width: 5%;\">Producto</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody name=\"body\" id=\"body\" onchange=\"total()\" >
                {% for item in items %}
                    <tr>
                        <td>{{item.product.name }}</td><td><img height=\"50\" src=\"{{ asset('images/products/') }}{{ item.product.imageName }}\"></td>
                        <td><input name=\"precio[]\"  id=\"precio[]\" type=\"number\" value=\"{{ item.product.precio }}\"  min=\"1\" max=\"100\"></td>
                        <td><input  name=\"cantidad[]\" id=\"cantidad[]\" type=\"number\"  min=\"0\" max=\"10\" value=\"{{item.quantity}}\"  onchange=\"multi()\"></td>
                        <td> <input name=\"totalproducto[]\"id=\"totalproducto[]\"type=\"text\" value=\"{{ item.total }}\"></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <p></p>
            <p></p>
            <label><h4>Total del pedido</h4></label><p></p>
            <input id =\"pedidototal\" name=\"pedidototal\" value=\"{{order.total }}€\" type=\"text\" class=\"form-control\" style =\"width: 300px;margin:0 auto;\"/>
        </div>
         {{ form_widget(form.add, {'attr': {'class': 'btn btn-info w-25'}}) }}
         <p>
         <a  class=\"btn btn-info w-25\" href=\"{{ path('app_pedido_index') }}\">back to list</a> 
    </div>
    {{ form_end(form) }}
     {% block javascripts %}
         <script>
             function multi() {
                     m1 = document.getElementById(\"precio[]\").value;
                     m2 = document.getElementById(\"cantidad[]\").value;
                     r=m1*m2
                     coste = document.getElementById(\"totalproducto[]\").value=r+\"€\";

             }

             function total(){
                 var totprice=[];
                 var table=document.getElementById(\"itemspedido\");
                 let precios=document.getElementsByName(\"totalproducto[]\");
                 precios.forEach((pr)=>{
                     pru=pr.value;
                     num=pru.replace(/[^0-9]+/g, \"\");
                     precio=parseInt(num);
                     totprice.push(precio);
                 });
                 totalItem=totprice.reduce((a, b) => a + b, 0);
                 document.getElementById(\"pedidototal\").value = totalItem+\"€\";
                 totprice.length=0;
             }

         </script>
     {% endblock %}
{% endblock %}

", "pedido/new.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/pedido/new.html.twig");
    }
}
