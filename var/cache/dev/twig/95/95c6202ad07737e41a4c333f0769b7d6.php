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

/* @admin/search_items.twig */
class __TwigTemplate_2c17f1357512a238569da15b8c0cb5e1 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/search_items.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/search_items.twig"));

        // line 11
        echo "<ul class=\"list-inline\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, true, 12), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12) != "_token") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 12), "data", [], "any", false, false, true, 12))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "        ";
            if ((false == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 13), "label", [], "any", false, false, true, 13) == "admin.list.sort.key") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 13), "label", [], "any", false, false, true, 13) == "admin.list.sort.type")))) {
                // line 14
                echo "        <li class=\"list-inline-item\"><span class=\"fw-bold\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 14), "label", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                echo ":&nbsp;</span>";
                // line 15
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 15), "data", [], "any", false, false, true, 15))) {
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 18), "choices", [], "any", false, false, true, 18));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 19
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], $context["value"])) {
                                // line 20
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 23)) ? (",&nbsp;") : (""));
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 25
$context["child"], "vars", [], "any", false, true, true, 25), "data", [], "any", false, true, true, 25), "timestamp", [], "any", true, true, true, 25)) {
                    // line 27
                    echo "                ";
                    if (twig_in_filter("datetime", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 27), "id", [], "any", false, false, true, 27))) {
                        // line 28
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 28), "data", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
                        echo "
                ";
                    } else {
                        // line 30
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 30), "data", [], "any", false, false, true, 30), 30, $this->source)), "html", null, true);
                        echo "
                ";
                    }
                } else {
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, true, 34), "choices", [], "any", true, true, true, 34) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 34), "choices", [], "any", false, false, true, 34)))) {
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 35), "choices", [], "any", false, false, true, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                            // line 36
                            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 36), "value", [], "any", false, false, true, 36))) {
                                // line 37
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    } else {
                        // line 41
                        if ($this->env->getTest('integer')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 41), "data", [], "any", false, false, true, 41))) {
                            // line 42
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 42), "data", [], "any", false, false, true, 42), 42, $this->source)), "html", null, true);
                        } else {
                            // line 44
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 44), "data", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                        }
                    }
                }
                // line 48
                echo "</li>
        ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@admin/search_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 51,  153 => 50,  149 => 48,  144 => 44,  141 => 42,  139 => 41,  131 => 37,  129 => 36,  125 => 35,  123 => 34,  116 => 30,  110 => 28,  107 => 27,  105 => 25,  91 => 23,  84 => 20,  82 => 19,  78 => 18,  61 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  45 => 11,);
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
<ul class=\"list-inline\">
    {% for child in form.children|filter(child => (child.vars.name != '_token' and child.vars.data is not empty)) %}
        {% if false == (child.vars.label == 'admin.list.sort.key' or child.vars.label == 'admin.list.sort.type') %}{# ソートの選択結果は表示しない #}
        <li class=\"list-inline-item\"><span class=\"fw-bold\">{{ child.vars.label|trans }}:&nbsp;</span>
            {%- if child.vars.data is iterable -%}
                {%- for value in child.vars.value -%}
                    {# ChoiceType -> multiple:true #}
                    {%- for choice in child.vars.choices -%}
                        {%- if choice is selectedchoice(value) -%}
                            {{ choice.label|trans }}
                        {%- endif %}
                    {%- endfor -%}
                    {{ not loop.last ? ',&nbsp;' }}
                {%- endfor -%}
            {%- elseif child.vars.data.timestamp is defined -%}
                {# DateTimeType の時は分まで表示 #}
                {% if 'datetime' in child.vars.id %}
                    {{ child.vars.data|date_sec }}
                {% else %}
                    {{ child.vars.data|date_day }}
                {% endif %}
            {%- else -%}
                {# ChoiceType -> multiple:false #}
                {%- if child.vars.choices is defined and child.vars.choices is not empty -%}
                    {%- for choice in child.vars.choices -%}
                        {%- if choice is selectedchoice(child.vars.value) -%}
                            {{ choice.label|trans }}
                        {%- endif %}
                    {%- endfor -%}
                {%- else -%}
                    {%- if child.vars.data is integer -%}
                        {{ child.vars.data|number_format }}
                    {%- else -%}
                        {{ child.vars.data }}
                    {%- endif -%}
                {%- endif-%}
            {%- endif -%}
        </li>
        {% endif %}
    {% endfor %}
</ul>
", "@admin/search_items.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\search_items.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 13);
        static $filters = array("filter" => 12, "escape" => 14, "trans" => 14, "date_sec" => 28, "date_day" => 30, "number_format" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['filter', 'escape', 'trans', 'date_sec', 'date_day', 'number_format'],
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
