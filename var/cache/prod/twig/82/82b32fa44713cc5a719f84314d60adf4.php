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

/* base.html.twig */
class __TwigTemplate_6b074e5ca3bc4279de91f9ca87ba22b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 20
        yield "
</head>
<body  style=\"background-color: navajowhite\";height:auto;\">

<nav class=\"navbar navbar-expand navbar-dark bg-primary\"   style=\"background-color: black\"> <a href=\"#menu-toggle\" id=\"menu-toggle\" class=\"navbar-brand\"><span class=\"navbar-toggler-icon\"></span></a> <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample02\" aria-controls=\"navbarsExample02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" > <span class=\"navbar-toggler-icon\"></span> </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarsExample02\" >
        <ul class=\"navbar-nav mr-auto\" >
            <li class=\"nav-item active\" > <a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        yield "\">Productos <span class=\"sr-only\">(current)</span></a> </li>
            <li><a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        yield "\" class=\"btn btn-primary\"style=\"color: white;with: 25px;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
                        <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
                        <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
                    </svg>                    Cart
                </a></li>
            <li class=\"nav-item active\"> <a class=\"nav-link\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Log Out <span class=\"sr-only\">(current)</span></a> </li>
        <form class=\"form-inline my-2 my-md-0\"> </form>

                ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 38
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Admin</a>
                    </li>
                ";
        }
        // line 42
        yield "            </ul>
            ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            yield "                <div class=\"dropdown\" style=\"align-content: center; color: #dfdfdf\">
                    <button
                            class=\"dropdown-toggle btn\"
                            type=\"button\"
                            id=\"user-dropdown\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                    >
                       <img
                               src=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "avatarUri", [], "any", false, false, false, 53), "html", null, true);
            yield "\"
                               alt=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            yield " Avatar\">
                       ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            yield "

                   </button>

                    <div class=\"dropdown-content\">
                        <ul>
                            <li>
                            <a class=\"dropdown-item\" href=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">My profile</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            ";
        } else {
            // line 71
            yield "                <a class=\"btn btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" style=\"color: white;with: 25px;margin-right: 25px;margin-left: 100px\">Log In</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" style=\"color: white;with: 25px;margin-right: 25px;\">Registrate</a>
            ";
        }
        // line 74
        yield "        </div>
    </ul>
    </div>
</nav>
    ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 79
            yield "        <div id=\"wrapper\" class=\"toggled\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\"style=\"background:  #007bff\">
                <ul class=\"sidebar-nav\" >
                    <li class=\"sidebar-brand\" style=\"color: #dfdfdf\"> <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">Home</a></li>
                    <li> <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            yield "\">Usuarios</a> </li>
                    <li> <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categoria_index");
            yield "\">Categorias</a> </li>
                    <li> <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            yield "\">Clientes</a> </li>
                    <li> <a href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            yield "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            yield "\">Pedidos</a> </li>
                    <li> <a href=\"";
            // line 89
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_index");
            yield "\">Stocks</a> </li>
                    <li> <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_index");
            yield "\">Consultas</a> </li>
                    <li> <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            yield "\">Novedades</a> </li>


                </ul>
            </div> <!-- /#sidebar-wrapper -->

        </div>
    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 99
            yield "    <div id=\"wrapper\" class=\"toggled\" >
        <!-- Sidebar -->
        <div id=\"sidebar-wrapper\"style=\"background: #007bff\">
            <ul class=\"sidebar-nav\" style=\"color: #dfdfdf\">
                <li class=\"sidebar-brand\"> <a href=\"";
            // line 103
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">Mi perfil</a></li>
                <li> <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
            yield "\">Mis datos</a> </li>
                <li> <a href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
            yield "\">Mis pedidos</a> </li>
                <li> <a href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            yield "\">Consultanos</a> </li>
                <li> <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            yield "\">Novedades</a> </li>



            </ul>
        </div> <!-- /#sidebar-wrapper -->
    </div>
    ";
        } else {
            // line 115
            yield "        <div id=\"wrapper\" class=\"toggled\" style=\"background-image:url('../public/images/fondo.jpg')\">
            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\" style=\"background: #007bff\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\"> <a href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\">Home</a></li>
                    <li> <a href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
            yield "\">Productos</a> </li>
                    <li> <a href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulta_new");
            yield "\">Consultanos</a> </li>
                    <li> <a href=\"";
            // line 122
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_novedades_index");
            yield "\">Novedades</a> </li>
                    <li> <a href=\"";
            // line 123
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Registrate</a> </li>

                </ul>
            </div> <!-- /#sidebar-wrapper -->
        </div>

";
        }
        // line 130
        yield "
";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 133
                yield "    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
        ";
                // line 134
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
";
        // line 142
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 146
        yield "<footer class=\"mt-5 p-3 text-center\">
    Derechos de autor<i style=\"color: red;\" class=\"fa fa-heart\"></i>Sonia Paez <a style=\"color: #444; text-decoration: underline;\" href=\"https://symfonycasts.com\"></a>
</footer>
";
        // line 149
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 173
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome!";
        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Spartan&display=swap\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css")), "html", null, true);
        yield "\">
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!------ Include the above in your HEAD tag ---------->
        ";
        // line 18
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        return; yield '';
    }

    // line 142
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "

";
        return; yield '';
    }

    // line 149
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script>
        \$(function(){
            \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
            });

            \$(window).resize(function(e) {
                if(\$(window).width()<=768){
                    \$(\"#wrapper\").removeClass(\"toggled\");
                }else{
                    \$(\"#wrapper\").addClass(\"toggled\");
                }
            });
        });

    </script>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  377 => 150,  373 => 149,  363 => 142,  356 => 18,  348 => 13,  343 => 11,  337 => 7,  333 => 6,  325 => 5,  318 => 173,  316 => 149,  311 => 146,  309 => 142,  306 => 141,  290 => 134,  285 => 133,  281 => 132,  277 => 131,  274 => 130,  264 => 123,  260 => 122,  256 => 121,  252 => 120,  248 => 119,  242 => 115,  231 => 107,  227 => 106,  223 => 105,  219 => 104,  215 => 103,  209 => 99,  198 => 91,  194 => 90,  190 => 89,  186 => 88,  182 => 87,  178 => 86,  174 => 85,  170 => 84,  166 => 83,  160 => 79,  158 => 78,  152 => 74,  147 => 72,  142 => 71,  133 => 65,  127 => 62,  117 => 55,  113 => 54,  109 => 53,  98 => 44,  96 => 43,  93 => 42,  87 => 39,  84 => 38,  82 => 37,  76 => 34,  67 => 28,  63 => 27,  54 => 20,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/templates/base.html.twig");
    }
}
