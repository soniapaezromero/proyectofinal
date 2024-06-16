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
class __TwigTemplate_12f1b73119f028a834d1cd1f057fd790 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Producto index";
        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categorias"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["productos"] ?? null));
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
        return array (  194 => 71,  185 => 67,  175 => 63,  169 => 61,  167 => 60,  163 => 59,  158 => 57,  153 => 56,  149 => 55,  145 => 54,  141 => 53,  138 => 52,  133 => 51,  119 => 39,  113 => 37,  111 => 36,  99 => 26,  88 => 23,  85 => 22,  81 => 21,  76 => 19,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/index.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/producto/index.html.twig");
    }
}
