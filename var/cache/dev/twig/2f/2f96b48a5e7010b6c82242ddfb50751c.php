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

/* Block/new_item.twig */
class __TwigTemplate_4a9ed1fd2f8ed52a17b7bdaca635e6af extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/new_item.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/new_item.twig"));

        // line 11
        echo "
<div class=\"ec-newItemRole\">
    <div class=\"ec-role mx-0 px-0\">
        <div class=\"ec-newItemRole__list\">
        <div class=\"ec-newItemRole__listItem bg-light-custom\">
            <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                <span class=\"ec-secHeading__en\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.title__en"), "html", null, true);
        echo "</span>
                <span class=\"ec-secHeading__line\"></span>
                <span class=\"ec-secHeading__ja\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.title__ja"), "html", null, true);
        echo "</span>
                <a class=\"ec-inlineBtn--top\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.more"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newArrivalProducts"]) || array_key_exists("newArrivalProducts", $context) ? $context["newArrivalProducts"] : (function () { throw new RuntimeError('Variable "newArrivalProducts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 24
            echo "            ";
            if ($context["Product"]) {
                // line 25
                echo "            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 26)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, true, 27), 27, $this->source)), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">
                    <p class=\"ec-newItemRole__listItemTitle line-clamp-1\">";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">
                        ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 30)) {
                    // line 31
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 31) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 31))) {
                        // line 32
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 32), 32, $this->source)), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 34
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                        echo " ～ ";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                        echo "
                            ";
                    }
                    // line 36
                    echo "                        ";
                } else {
                    // line 37
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                    echo "
                        ";
                }
                // line 39
                echo "                    </p>
                </a>
            </div>
            ";
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  129 => 43,  123 => 39,  117 => 37,  114 => 36,  106 => 34,  100 => 32,  97 => 31,  95 => 30,  90 => 28,  84 => 27,  80 => 26,  77 => 25,  74 => 24,  70 => 23,  62 => 20,  58 => 19,  53 => 17,  45 => 11,);
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

<div class=\"ec-newItemRole\">
    <div class=\"ec-role mx-0 px-0\">
        <div class=\"ec-newItemRole__list\">
        <div class=\"ec-newItemRole__listItem bg-light-custom\">
            <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                <span class=\"ec-secHeading__en\">{{ 'front.block.new_item.title__en'|trans }}</span>
                <span class=\"ec-secHeading__line\"></span>
                <span class=\"ec-secHeading__ja\">{{ 'front.block.new_item.title__ja'|trans }}</span>
                <a class=\"ec-inlineBtn--top\" href=\"{{ url('product_list') }}\">{{ 'front.block.new_item.more'|trans }}</a>
            </div>
        </div>
        {% for Product in newArrivalProducts %}
            {% if Product %}
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\">
                    <p class=\"ec-newItemRole__listItemTitle line-clamp-1\">{{ Product.name }}</p>
                    <p class=\"ec-newItemRole__listItemPrice\">
                        {% if Product.hasProductClass %}
                            {% if Product.getPrice02Min == Product.getPrice02Max %}
                                {{ Product.getPrice02IncTaxMin|price }}
                            {% else %}
                                {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                            {% endif %}
                        {% else %}
                            {{ Product.getPrice02IncTaxMin|price }}
                        {% endif %}
                    </p>
                </a>
            </div>
            {% endif %}
        {% endfor %}
    </div>
    </div>
</div>", "Block/new_item.twig", "F:\\laragon\\www\\shop\\app\\template\\default\\Block\\new_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 24);
        static $filters = array("escape" => 17, "trans" => 17, "no_image_product" => 27, "price" => 32);
        static $functions = array("url" => 20, "asset" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'asset'],
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
