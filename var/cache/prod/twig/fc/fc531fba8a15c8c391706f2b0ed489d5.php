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
class __TwigTemplate_b36c8e4de613258b6325955f2013a63e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Admin";
        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pedidos"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stocks"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["consultas"] ?? null));
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
        return array (  216 => 82,  207 => 78,  198 => 74,  194 => 73,  190 => 72,  187 => 71,  182 => 70,  166 => 56,  157 => 52,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  134 => 45,  129 => 44,  112 => 29,  103 => 25,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  75 => 17,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/admin/dashboard.html.twig");
    }
}
