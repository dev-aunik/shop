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

/* Shopping/shipping.twig */
class __TwigTemplate_fce515f3ee0c629a6660de8bff8db41c extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping.twig"));

        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_title"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 24, $this->source); })()), "CustomerAddresses", [], "any", false, false, true, 24)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 24, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 24))) {
            // line 25
            echo "                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_edit", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 25, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_add_new_shipping"), "html", null, true);
            echo "</a></div>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.customer_address_count_is_over", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 30, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, true, 30)]), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        if ($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "addresses", [], "any", false, false, true, 34))) {
            // line 35
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_unselected"), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 42
        echo "                </div>

                <form method=\"post\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 44, $this->source); })())]), "html", null, true);
        echo "\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "_token", [], "any", false, false, true, 45), 45, $this->source), 'widget');
        echo "
                    <div class=\"ec-addressList\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "addresses", [], "any", false, false, true, 47), "vars", [], "any", false, false, true, 47), "choices", [], "any", false, false, true, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 48
            echo "                            ";
            $context["Address"] = twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, true, 48);
            // line 49
            echo "                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                ";
            // line 51
            $context["checked"] = ((Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "addresses", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51))) ? ("checked=\"checked\"") : (""));
            // line 52
            echo "                                <input type=\"radio\" id=\"address";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "addresses", [], "any", false, false, true, 52), "vars", [], "any", false, false, true, 52), "full_name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
            echo " />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 55, $this->source); })()), "name01", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 55, $this->source); })()), "name02", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</div>
                                <div>〒";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "postal_code", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "Pref", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "addr01", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "addr02", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</div>
                                <div>";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 57, $this->source); })()), "phone_number", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_send_selected_shipping"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 67,  198 => 66,  191 => 61,  181 => 57,  173 => 56,  167 => 55,  154 => 52,  152 => 51,  148 => 49,  145 => 48,  141 => 47,  136 => 45,  132 => 44,  128 => 42,  121 => 38,  117 => 37,  113 => 35,  110 => 34,  103 => 30,  99 => 29,  95 => 27,  87 => 25,  85 => 24,  74 => 16,  70 => 14,  60 => 13,  37 => 11,);
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
{% extends 'default_frame.twig' %}

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.shopping.shipping_title'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"{{ url('shopping_shipping_edit', {'id': shippingId}) }}\">{{ 'front.shopping.shipping_add_new_shipping'|trans }}</a></div>
                    {% else %}
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"/></div>
                                {{ 'common.customer_address_count_is_over'|trans({ '%count%': eccube_config.eccube_deliv_addr_max }) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if has_errors(form.addresses) %}
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"/></div>
                                {{ 'front.shopping.shipping_unselected'|trans }}
                            </div>
                        </div>
                    {% endif %}
                </div>

                <form method=\"post\" action=\"{{ url('shopping_shipping', {'id': shippingId}) }}\">
                    {{ form_widget(form._token) }}
                    <div class=\"ec-addressList\">
                        {% for choice in form.addresses.vars.choices %}
                            {% set Address = choice.data %}
                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                {% set checked = choice is selectedchoice(form.addresses.vars.value) ? 'checked=\"checked\"' : '' %}
                                <input type=\"radio\" id=\"address{{ choice.value }}\" name=\"{{ form.addresses.vars.full_name }}\" value=\"{{ choice.value }}\" {{ checked }} />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>{{ Address.name01 }}&nbsp;{{ Address.name02 }}</div>
                                <div>〒{{ Address.postal_code }} {{ Address.Pref }}{{ Address.addr01 }}{{ Address.addr02 }}</div>
                                <div>{{ Address.phone_number }}</div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">{{ 'front.shopping.shipping_send_selected_shipping'|trans }}</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"{{ url('shopping') }}\">{{ 'common.back'|trans }}</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
{% endblock %}
", "Shopping/shipping.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\default\\Shopping\\shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "for" => 47, "set" => 48);
        static $filters = array("escape" => 16, "trans" => 16, "length" => 24);
        static $functions = array("url" => 25, "asset" => 29, "has_errors" => 34, "form_widget" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trans', 'length'],
                ['url', 'asset', 'has_errors', 'form_widget'],
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
