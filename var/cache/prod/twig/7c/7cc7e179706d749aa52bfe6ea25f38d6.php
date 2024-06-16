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

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_d52140afa4a34b2520699b0a1c0d012a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Swiftmailer/Collector/swiftmailer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (Twig\Extension\CoreExtension::default(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        yield "
    ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 6)) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                if ((($context["profiler_markup_version"] ?? null) == 1)) {
                    // line 9
                    yield "                <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-status\">";
                    // line 10
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 10), "html", null, true);
                    yield "</span>
            ";
                } else {
                    // line 12
                    yield "                ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
                    yield "
                <span class=\"sf-toolbar-value\">";
                    // line 13
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 13), "html", null, true);
                    yield "</span>
            ";
                }
                // line 15
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 16
            yield "
        ";
            // line 17
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 18
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>
            </div>

            ";
                // line 23
                if ((($context["profiler_markup_version"] ?? null) == 1)) {
                    // line 24
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 24));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                        // line 25
                        yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                        // line 26
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "</b>
                        <span>";
                        // line 27
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", false, false, false, 27), "html", null, true);
                        yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Is spooled?</b>
                        <span>";
                        // line 31
                        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", [$context["name"]], "method", false, false, false, 31)) ? ("yes") : ("no"));
                        yield "</span>
                    </div>

                    ";
                        // line 34
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34)) {
                            // line 35
                            yield "                        <hr>
                    ";
                        }
                        // line 37
                        yield "                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    yield "            ";
                } else {
                    // line 39
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                        // line 40
                        yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>";
                        // line 41
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield " mailer</b>
                        <span class=\"sf-toolbar-status\">";
                        // line 42
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", false, false, false, 42), 0)) : (0)), "html", null, true);
                        yield "</span>
                        &nbsp; (<small>";
                        // line 43
                        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", [$context["name"]], "method", false, false, false, 43)) ? ("spooled") : ("sent"));
                        yield "</small>)
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    yield "            ";
                }
                // line 47
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            yield "
        ";
            // line 49
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        return; yield '';
    }

    // line 53
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        return; yield '';
    }

    // line 90
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (Twig\Extension\CoreExtension::default(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 92
        yield "
    <span class=\"label ";
        // line 93
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 93)) ? ("") : ("disabled"));
        yield "\">
        ";
        // line 94
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 95
            yield "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Swiftmailer\" /></span>
        ";
        } else {
            // line 97
            yield "            <span class=\"icon\">";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Swiftmailer/Collector/icon.svg");
            yield "</span>
        ";
        }
        // line 99
        yield "
        <strong>E-mails</strong>
        ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 101) > 0)) {
            // line 102
            yield "            <span class=\"count\">
                <span>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [], "any", false, false, false, 103), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 106
        yield "    </span>
";
        return; yield '';
    }

    // line 109
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        yield "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (Twig\Extension\CoreExtension::default(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 111
        yield "
    ";
        // line 112
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 113
            yield "        <style>
            h3 { margin-top: 2em; }
            h3 span { color: #999; font-weight: normal; }
            h3 small { color: #999; }
            h4 { font-size: 14px; font-weight: bold; }
            .card { background: #F5F5F5; margin: .5em 0 1em; padding: .5em; }
            .card .label { display: block; font-size: 13px; font-weight: bold; margin-bottom: .5em; }
            .card .card-block { margin-bottom: 1em; }
        </style>
    ";
        }
        // line 123
        yield "
    <h2>E-mails</h2>

    ";
        // line 126
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 126)) {
            // line 127
            yield "        <div class=\"empty\">
            <p>No e-mail messages were sent.</p>
        </div>
    ";
        }
        // line 131
        yield "
    ";
        // line 132
        if (((($context["profiler_markup_version"] ?? null) == 1) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 132)) > 1))) {
            // line 133
            yield "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Mailer Name</th>
                    <th scope=\"col\">Num. of messages</th>
                    <th scope=\"col\">Messages status</th>
                    <th scope=\"col\">Notes</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 144
                yield "                    <tr>
                        <th class=\"font-normal\">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "</th>
                        <td class=\"font-normal\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", false, false, false, 146), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">";
                // line 147
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", [$context["name"]], "method", false, false, false, 147)) ? ("spooled") : ("sent"));
                yield "</td>
                        <td class=\"font-normal\">";
                // line 148
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isDefaultMailer", [$context["name"]], "method", false, false, false, 148)) ? ("This is the default mailer") : (""));
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 154
            yield "        <div class=\"metrics\">
            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 155));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 156
                yield "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", false, false, false, 157), "html", null, true);
                yield "</span>
                    <span class=\"label\">";
                // line 158
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isSpool", [$context["name"]], "method", false, false, false, 158)) ? ("spooled") : ("sent"));
                yield " ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messageCount", [$context["name"]], "method", false, false, false, 158) == 1)) ? ("message") : ("messages"));
                yield "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "        </div>
    ";
        }
        // line 163
        yield "
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 165
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mailers", [], "any", false, false, false, 165)) > 1)) {
                // line 166
                yield "            <h3>
                ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield " <span>mailer</span>
                <small>";
                // line 168
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isDefaultMailer", [$context["name"]], "method", false, false, false, 168)) ? ("(default app mailer)") : (""));
                yield "</small>
            </h3>
        ";
            }
            // line 171
            yield "
        ";
            // line 172
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["name"]], "method", false, false, false, 172)) {
                // line 173
                yield "            <div class=\"empty\">
                <p>No e-mail messages were sent.</p>
            </div>
        ";
            } else {
                // line 177
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [$context["name"]], "method", false, false, false, 177));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 178
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 178) > 1)) {
                        // line 179
                        yield "                    <h4>E-mail #";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 179), "html", null, true);
                        yield " details</h4>
                ";
                    } else {
                        // line 181
                        yield "                    <h4>E-mail details</h4>
                ";
                    }
                    // line 183
                    yield "
                <div class=\"card\">
                    <div class=\"card-block\">
                        <span class=\"label\">Subject</span>
                        <h2 class=\"m-t-10\">";
                    // line 187
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 187), "get", ["subject"], "method", false, true, false, 187), "value", [], "any", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 187), "get", ["subject"], "method", false, true, false, 187), "value", [], "any", false, false, false, 187)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 187), "get", ["subject"], "method", false, true, false, 187), "value", [], "any", false, false, false, 187), "html", null, true)) : (yield "(empty)"));
                    yield "</h2>
                    </div>
                    <div class=\"card-block\">
                        <div class=\"row\">
                            <div class=\"col col-4\">
                                <span class=\"label\">From</span>
                                <pre class=\"prewrap\">";
                    // line 193
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 193), "get", ["from"], "method", false, true, false, 193), "toString", [], "any", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 193), "get", ["from"], "method", false, true, false, 193), "toString", [], "any", false, false, false, 193)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 193), "get", ["from"], "method", false, true, false, 193), "toString", [], "any", false, false, false, 193)) : ("(empty)")), ["From:" => ""]), "html", null, true);
                    yield "</pre>

                                <span class=\"label\">To</span>
                                <pre class=\"prewrap\">";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 196), "get", ["to"], "method", false, true, false, 196), "toString", [], "any", true, true, false, 196) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 196), "get", ["to"], "method", false, true, false, 196), "toString", [], "any", false, false, false, 196)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, true, false, 196), "get", ["to"], "method", false, true, false, 196), "toString", [], "any", false, false, false, 196)) : ("(empty)")), ["To:" => ""]), "html", null, true);
                    yield "</pre>
                            </div>
                            <div class=\"col\">
                                <span class=\"label\">Headers</span>
                                <pre class=\"prewrap\">";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "headers", [], "any", false, false, false, 200), "all", [], "any", false, false, false, 200), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter((((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "fieldName", [], "any", true, true, false, 200) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "fieldName", [], "any", false, false, false, 200)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "fieldName", [], "any", false, false, false, 200)) : ("")), ["Subject", "From", "To"]); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 201
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["header"], "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    yield "</pre>
                            </div>
                        </div>
                    </div>

                    <div class=\"card-block\">
                        <div class=\"sf-tabs sf-tabs-sm\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Raw content</h3>

                                <div class=\"tab-content\">
                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 214
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "charset", [], "any", true, true, false, 214) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "charset", [], "any", false, false, false, 214))) {
                        // line 215
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 215), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, $context["message"], "charset", [], "any", false, false, false, 215)), "html", null, true);
                    } else {
                        // line 217
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 217), "html", null, true);
                    }
                    // line 219
                    yield "</pre>
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Rendered content</h3>

                                <div class=\"tab-content\">
                                    <iframe class=\"full-width\" style=\"min-height: 600px\" src=\"data:";
                    // line 227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "__contentType", [], "any", false, false, false, 227), "html", null, true);
                    yield ";base64,";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "__base64EncodedBody", [], "any", false, false, false, 227), "html", null, true);
                    yield "\"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
                    // line 233
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "children", [], "any", false, false, false, 233), function ($__messagePart__) use ($context, $macros) { $context["messagePart"] = $__messagePart__; return CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "contentType", [], "any", false, false, false, 233), ["text/plain", "text/html"]); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        // line 234
                        yield "                        <div class=\"card-block\">
                            <span class=\"label\">Alternative part (";
                        // line 235
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "contentType", [], "any", false, false, false, 235), "html", null, true);
                        yield ")</span>
                            <pre class=\"prewrap\">";
                        // line 237
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "charset", [], "any", true, true, false, 237) && CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "charset", [], "any", false, false, false, 237))) {
                            // line 238
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "body", [], "any", false, false, false, 238), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "charset", [], "any", false, false, false, 238)), "html", null, true);
                        } else {
                            // line 240
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messagePart"], "body", [], "any", false, false, false, 240), "html", null, true);
                        }
                        // line 242
                        yield "</pre>
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    yield "
                    ";
                    // line 246
                    $context["attachments"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "extractAttachments", [$context["message"]], "method", false, false, false, 246);
                    // line 247
                    yield "                    ";
                    if (($context["attachments"] ?? null)) {
                        // line 248
                        yield "                        <div class=\"card-block\">
                            <span class=\"label\">
                                ";
                        // line 250
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attachments"] ?? null)) > 1)) {
                            // line 251
                            yield "                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attachments"] ?? null)), "html", null, true);
                            yield " Attachments
                                ";
                        } else {
                            // line 253
                            yield "                                    1 Attachment
                                ";
                        }
                        // line 255
                        yield "                            </span>

                            <ol>
                                ";
                        // line 258
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["attachments"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 259
                            yield "                                    <li>
                                        Filename:
                                        ";
                            // line 261
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 261), "html", null, true);
                            yield "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 264
                        yield "                            </ol>
                        </div>
                    ";
                    }
                    // line 267
                    yield "                </div>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                yield "        ";
            }
            // line 270
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
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
        return array (  660 => 270,  657 => 269,  642 => 267,  637 => 264,  628 => 261,  624 => 259,  620 => 258,  615 => 255,  611 => 253,  605 => 251,  603 => 250,  599 => 248,  596 => 247,  594 => 246,  591 => 245,  583 => 242,  580 => 240,  577 => 238,  575 => 237,  571 => 235,  568 => 234,  564 => 233,  553 => 227,  543 => 219,  540 => 217,  537 => 215,  535 => 214,  522 => 202,  516 => 201,  512 => 200,  505 => 196,  499 => 193,  490 => 187,  484 => 183,  480 => 181,  474 => 179,  471 => 178,  453 => 177,  447 => 173,  445 => 172,  442 => 171,  436 => 168,  432 => 167,  429 => 166,  426 => 165,  422 => 164,  419 => 163,  415 => 161,  404 => 158,  400 => 157,  397 => 156,  393 => 155,  390 => 154,  385 => 151,  376 => 148,  372 => 147,  368 => 146,  364 => 145,  361 => 144,  357 => 143,  345 => 133,  343 => 132,  340 => 131,  334 => 127,  332 => 126,  327 => 123,  315 => 113,  313 => 112,  310 => 111,  307 => 110,  303 => 109,  297 => 106,  291 => 103,  288 => 102,  286 => 101,  282 => 99,  276 => 97,  272 => 95,  270 => 94,  266 => 93,  263 => 92,  260 => 91,  256 => 90,  215 => 54,  211 => 53,  203 => 49,  200 => 48,  196 => 47,  193 => 46,  184 => 43,  180 => 42,  176 => 41,  173 => 40,  168 => 39,  165 => 38,  151 => 37,  147 => 35,  145 => 34,  139 => 31,  132 => 27,  128 => 26,  125 => 25,  107 => 24,  105 => 23,  99 => 20,  95 => 18,  93 => 17,  90 => 16,  86 => 15,  81 => 13,  76 => 12,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Swiftmailer/Collector/swiftmailer.html.twig", "/var/www/soniapaezromeroproyectofinal.online/public/StoreOnlineProject-master/vendor/symfony/swiftmailer-bundle/Resources/views/Collector/swiftmailer.html.twig");
    }
}
