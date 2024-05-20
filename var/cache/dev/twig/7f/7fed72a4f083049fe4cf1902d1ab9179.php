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

/* @KnpPaginator/Pagination/materialize_pagination.html.twig */
class __TwigTemplate_0970f0d852b1ba865a688bd0a935a535 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/materialize_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/materialize_pagination.html.twig"));

        // line 13
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 13, $this->source); })()) > 1)) {
            // line 14
            echo "    <ul class=\"pagination\">
        ";
            // line 15
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 15, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 15, $this->source); })())))) {
                // line 16
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), 17, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 17, $this->source); })()), 17, $this->source), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 17, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 17, $this->source); })())])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 22
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (array_key_exists("previous", $context)) {
                // line 30
                echo "            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 31, $this->source); })()), 31, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 31, $this->source); })()), 31, $this->source), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 31, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 31, $this->source); })())])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 36
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 44, $this->source); })()))) {
                    // line 45
                    echo "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()), 46, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 46, $this->source); })()), 46, $this->source), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 46, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 46, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 49
                    echo "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 50, $this->source), "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            if (array_key_exists("next", $context)) {
                // line 56
                echo "            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 57, $this->source); })()), 57, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 57, $this->source); })()), 57, $this->source), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 57, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 57, $this->source); })())])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 62
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 68
            echo "
        ";
            // line 69
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 69, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 69, $this->source); })())))) {
                // line 70
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->sandbox->ensureToStringAllowed((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 71, $this->source); })()), 71, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 71, $this->source); })()), 71, $this->source), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 71, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 71, $this->source); })())])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 76
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 82
            echo "    </ul>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/materialize_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 82,  171 => 76,  163 => 71,  160 => 70,  158 => 69,  155 => 68,  147 => 62,  139 => 57,  136 => 56,  134 => 55,  131 => 54,  125 => 53,  119 => 50,  116 => 49,  108 => 46,  105 => 45,  102 => 44,  98 => 43,  95 => 42,  87 => 36,  79 => 31,  76 => 30,  74 => 29,  71 => 28,  63 => 22,  55 => 17,  52 => 16,  50 => 15,  47 => 14,  45 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Materialize pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Materialize CSS
 * https://materializecss.com/pagination.html
 *
 * @author Leonardo Bressan Motyczka <leomoty@gmail.com>
 */
#}
{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if first is defined and current != first %}
            <li class=\"waves-effect\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        {% endif %}

        {% if previous is defined %}
            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li class=\"waves-effect\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active\">
                    <a href=\"#!\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if next is defined %}
            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        {% endif %}

        {% if last is defined and current != last %}
            <li class=\"waves-effect\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "@KnpPaginator/Pagination/materialize_pagination.html.twig", "F:\\laragon\\www\\shop\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\materialize_pagination.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "for" => 43);
        static $filters = array("escape" => 17, "merge" => 17);
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge'],
                ['path'],
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
