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
class __TwigTemplate_5440bcf0ebdd71a8c627e8236ba075f8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "consulta/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Consulta";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["consultum"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
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
        return array (  95 => 23,  91 => 21,  85 => 18,  82 => 17,  77 => 15,  73 => 14,  68 => 11,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "consulta/new.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/consulta/new.html.twig");
    }
}
