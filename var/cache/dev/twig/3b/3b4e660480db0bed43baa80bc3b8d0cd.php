<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @toolbar/eccube.html.twig */
class __TwigTemplate_3605a27a1ea46debe4531a51e765a932 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@toolbar/eccube.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@toolbar/eccube.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@toolbar/eccube.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.45 105.65\"><defs><style>.cls-1{fill:#353a4e;}.cls-2{fill:#fc0;}.cls-3{fill:#f2b50a;}</style></defs><title>eccube_logo_basic</title><path class=\"cls-1\" d=\"M106.81,15s6.63,49.2-37.4,62.22c-4.09,0-56.94,6.54-58.6-46.42V81.11L69.4,95,110.81,77V16.58Z\"/><path class=\"cls-2\" d=\"M110.81,63.42V77L69.4,95,10.81,81.11V65C4,69.18,0,74.22,0,79.65c0,14.36,27.86,26,62.22,26s62.22-11.64,62.22-26C124.45,73.51,119.33,67.86,110.81,63.42Z\"/><path class=\"cls-2\" d=\"M69.4,0,10.81,25C9,84.13,61.55,78.42,69.4,77.21Z\"/><path class=\"cls-3\" d=\"M106.81,15,69.4,0V77.21C115.22,65.84,106.81,15,106.81,15Z\"/></svg>
    <span class=\"sf-toolbar-value\">";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "version", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "    <script>
        // Minimize to toolbar
        Sfjs.setPreference('toolbar/displayState', 'none');
    </script>
    <style>
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins .sf-toolbar-status {
            display: block !important;
            float: left;
            margin-right: 4px !important;
            margin-left: 0 !important;
            margin-top: 4px;
        }
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins > b {
            vertical-align: middle;
        }
    </style>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>EC-CUBE</b>
            <span><a href=\"https://www.ec-cube.net\">";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "version", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-plugins\">
            <b>Plugins</b>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "plugins", [], "any", false, false, true, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 43
            echo "                <div class=\"sf-toolbar-status sf-toolbar-status-";
            echo ((twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, true, 43)) ? ("green") : ("red"));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["plugin"], "code", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Currency</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "currencyCode", [], "any", false, false, true, 53) == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, true, 53))) {
            echo "and default ";
        }
        echo "currency\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", [], "any", true, true, true, 54)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "currencyCode", [], "any", false, false, true, 54), 54, $this->source), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "currencyCode", [], "any", false, false, true, 57) != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, true, 57))) {
            // line 58
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "defaultCurrencyCode", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 64
        echo "        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Locale</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "localeCode", [], "any", false, false, true, 68) == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "defaultLocaleCode", [], "any", false, false, true, 68))) {
            echo "and default ";
        }
        echo "locale\">
                    ";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", [], "any", true, true, true, 69)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "localeCode", [], "any", false, false, true, 69), 69, $this->source), "Undefined")) : ("Undefined")), "html", null, true);
        echo "
                </abbr>
            </span>
            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "localeCode", [], "any", false, false, true, 72) != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "defaultLocaleCode", [], "any", false, false, true, 72))) {
            // line 73
            echo "                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "defaultLocaleCode", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
                    </abbr>
                </span>
            ";
        }
        // line 79
        echo "        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Resources</b>
            <span><a href=\"https://doc4.ec-cube.net/\" rel=\"help\">EC-CUBE Documentation</a></span>
        </div>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "
    ";
        // line 89
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@toolbar/eccube.html.twig", 89)->display(twig_array_merge($context, ["link" => false, "additional_classes" => "sf-toolbar-block-right"]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@toolbar/eccube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 89,  207 => 88,  196 => 79,  189 => 75,  185 => 73,  183 => 72,  177 => 69,  171 => 68,  165 => 64,  158 => 60,  154 => 58,  152 => 57,  146 => 54,  140 => 53,  132 => 47,  123 => 44,  116 => 43,  112 => 42,  105 => 38,  84 => 19,  81 => 18,  76 => 16,  73 => 15,  70 => 14,  60 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 124.45 105.65\"><defs><style>.cls-1{fill:#353a4e;}.cls-2{fill:#fc0;}.cls-3{fill:#f2b50a;}</style></defs><title>eccube_logo_basic</title><path class=\"cls-1\" d=\"M106.81,15s6.63,49.2-37.4,62.22c-4.09,0-56.94,6.54-58.6-46.42V81.11L69.4,95,110.81,77V16.58Z\"/><path class=\"cls-2\" d=\"M110.81,63.42V77L69.4,95,10.81,81.11V65C4,69.18,0,74.22,0,79.65c0,14.36,27.86,26,62.22,26s62.22-11.64,62.22-26C124.45,73.51,119.33,67.86,110.81,63.42Z\"/><path class=\"cls-2\" d=\"M69.4,0,10.81,25C9,84.13,61.55,78.42,69.4,77.21Z\"/><path class=\"cls-3\" d=\"M106.81,15,69.4,0V77.21C115.22,65.84,106.81,15,106.81,15Z\"/></svg>
    <span class=\"sf-toolbar-value\">{{ collector.version }}</span>
    {% endset %}
    {% set text %}
    <script>
        // Minimize to toolbar
        Sfjs.setPreference('toolbar/displayState', 'none');
    </script>
    <style>
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins .sf-toolbar-status {
            display: block !important;
            float: left;
            margin-right: 4px !important;
            margin-left: 0 !important;
            margin-top: 4px;
        }
        .sf-toolbar-block .sf-toolbar-info-piece.sf-toolbar-plugins > b {
            vertical-align: middle;
        }
    </style>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>EC-CUBE</b>
            <span><a href=\"https://www.ec-cube.net\">{{ collector.version }}</a></span>
        </div>
        <div class=\"sf-toolbar-info-piece sf-toolbar-plugins\">
            <b>Plugins</b>
            {% for plugin in collector.plugins %}
                <div class=\"sf-toolbar-status sf-toolbar-status-{{ plugin.enabled ? 'green' : 'red' }}\" title=\"{{ plugin.name }}\">
                    {{ plugin.code }}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Currency</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current {% if collector.currencyCode == collector.defaultCurrencyCode %}and default {% endif %}currency\">
                    {{ collector.currencyCode|default('Undefined') }}
                </abbr>
            </span>
            {% if collector.currencyCode != collector.defaultCurrencyCode %}
                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        {{ collector.defaultCurrencyCode }}
                    </abbr>
                </span>
            {% endif %}
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Locale</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                <abbr title=\"Current {% if collector.localeCode == collector.defaultLocaleCode %}and default {% endif %}locale\">
                    {{ collector.localeCode|default('Undefined') }}
                </abbr>
            </span>
            {% if collector.localeCode != collector.defaultLocaleCode %}
                <span class=\"sf-toolbar-status\">
                    <abbr title=\"Default locale\">
                        {{ collector.defaultLocaleCode }}
                    </abbr>
                </span>
            {% endif %}
        </div>
    </div>
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
            <b>Resources</b>
            <span><a href=\"https://doc4.ec-cube.net/\" rel=\"help\">EC-CUBE Documentation</a></span>
        </div>
    </div>
    {% endset %}

    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with {'link': false, additional_classes: 'sf-toolbar-block-right'} %}
{% endblock %}
", "@toolbar/eccube.html.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\toolbar\\eccube.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "for" => 42, "if" => 53, "include" => 89);
        static $filters = array("escape" => 16, "default" => 54);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'default'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
