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
class __TwigTemplate_596d16af785a6ce0ddb2c69098e46e1f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Carrito";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">
    <div class=\"container mt-4\" style=\"background: navajowhite;border: 0;\">
        <h1>Your Cart</h1>
        ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9) > 0)) {
            // line 10
            yield "            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
                    ";
            // line 12
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            yield "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-auto\">
                                ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            yield "
                                ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "clear", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            yield "
         
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "items", [], "any", false, false, false, 23));
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
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 61), "html", null, true);
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
        return array (  188 => 76,  182 => 73,  179 => 72,  169 => 65,  162 => 61,  150 => 52,  146 => 50,  136 => 46,  129 => 42,  123 => 39,  119 => 37,  117 => 35,  116 => 33,  110 => 30,  106 => 29,  99 => 26,  95 => 24,  91 => 23,  83 => 18,  79 => 17,  71 => 12,  67 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/cart/index.html.twig");
    }
}
