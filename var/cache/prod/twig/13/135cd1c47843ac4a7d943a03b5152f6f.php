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

/* producto/show.html.twig */
class __TwigTemplate_126e591c5fc0309f44f5e1365c4a689d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Producto";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container\" style=\"background: navajowhite;border: 0;\">



    <h1 style=\"text-align: center;margin-left: 10px;\">Producto</h1>
    <table class=\"table\" style=\"width: 750px;margin-right: 0px;\">
        <tbody>
        <tr>

            <td style=\"align-items: center;\"><img  src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/products/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["producto"] ?? null), "imageName", [], "any", false, false, false, 15), "html", null, true);
        yield "\" style=\"align-items: center;\"></td>

        </tr>
            <tr style=\"text-align: left;\">
                <th>Id</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["producto"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Name</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["producto"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr style=\"text-align: left;\">
                <th>Precio</th>
                <th>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["producto"] ?? null), "precio", [], "any", false, false, false, 28), 2, ",", "."), "html", null, true);
        yield "€ </td></th>
            </tr>
        </tbody>
    </table>
    <a class=\"btn btn-info w-25\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\">back to list</a>
  \t<p>
    <p>
    ";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            yield "    <a class=\"btn btn-info w-25\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["producto"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\">Guardar</a>
 \t<p>
    ";
            // line 38
            yield Twig\Extension\CoreExtension::include($this->env, $context, "producto/_delete_form.html.twig");
            yield "
    ";
        }
        // line 40
        yield "    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "producto/show.html.twig";
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
        return array (  120 => 40,  115 => 38,  109 => 36,  107 => 35,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  71 => 15,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "producto/show.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/producto/show.html.twig");
    }
}
