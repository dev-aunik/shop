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

/* Mypage/favorite.twig */
class __TwigTemplate_fff0c47a394836c2e24ceb2ce21e49cf extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/favorite.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/favorite.twig"));

        // line 13
        $context["mypageno"] = "favorite";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/favorite.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__favorite"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/favorite.twig", 23)->display($context);
        // line 24
        echo "        </div>

        <div class=\"ec-mypageRole\">
            <div class=\"ec-favoriteRole\">
                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()), "totalItemCount", [], "any", false, false, true, 28) > 0)) {
            // line 29
            echo "                    <div class=\"ec-favoriteRole__header\">
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.favorite_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "totalItemCount", [], "any", false, false, true, 30)]), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-favoriteRole__detail\">
                        <ul class=\"ec-favoriteRole__itemList\">
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["FavoriteProduct"]) {
                // line 35
                echo "                                ";
                $context["Product"] = twig_get_attribute($this->env, $this->source, $context["FavoriteProduct"], "Product", [], "any", false, false, true, 35);
                // line 36
                echo "                                <li class=\"ec-favoriteRole__item\">
                                    <a class=\"ec-closeBtn--circle\"
                                       href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, true, 38)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                       data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-white.svg"), "html", null, true);
                echo "\" alt=\"close\">
                                        </div>
                                    </a>
                                    <a class=\"ec-favoriteRole__itemThumb\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, true, 44)]), "html", null, true);
                echo "\">
                                        <p class=\"ec-favoriteRole__item-image\">
                                            <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 46, $this->source); })()), "main_list_image", [], "any", false, false, true, 46), 46, $this->source)), "save_image"), "html", null, true);
                echo "\">
                                        </p>
                                    </a>
                                    <p class=\"ec-favoriteRole__itemTitle\">";
                // line 49
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "</p>
                                    <p class=\"ec-favoriteRole__itemPrice\">
                                        ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 51, $this->source); })()), "price02_inc_tax_min", [], "any", false, false, true, 51) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 51, $this->source); })()), "price02_inc_tax_max", [], "any", false, false, true, 51))) {
                    // line 52
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 52, $this->source); })()), "price02_inc_tax_min", [], "any", false, false, true, 52), 52, $this->source)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 54
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 54, $this->source); })()), "price02_inc_tax_min", [], "any", false, false, true, 54), 54, $this->source)), "html", null, true);
                    echo "～";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 54, $this->source); })()), "price02_inc_tax_max", [], "any", false, false, true, 54), 54, $this->source)), "html", null, true);
                    echo "
                                        ";
                }
                // line 56
                echo "                                    </p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FavoriteProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </ul>
                    </div>
                    <div class=\"ec-pagerRole\">
                        ";
            // line 62
            $this->loadTemplate("pager.twig", "Mypage/favorite.twig", 62)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 62, $this->source); })()), "paginationData", [], "any", false, false, true, 62)]));
            // line 63
            echo "                    </div>
                ";
        } else {
            // line 65
            echo "                    <div class=\"ec-favoriteRole__header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.favorite_not_found"), "html", null, true);
            echo "</div>
                ";
        }
        // line 67
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/favorite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 67,  183 => 65,  179 => 63,  177 => 62,  172 => 59,  164 => 56,  156 => 54,  150 => 52,  148 => 51,  143 => 49,  137 => 46,  132 => 44,  126 => 41,  118 => 38,  114 => 36,  111 => 35,  107 => 34,  100 => 30,  97 => 29,  95 => 28,  89 => 24,  87 => 23,  80 => 21,  75 => 18,  65 => 17,  54 => 11,  52 => 15,  50 => 13,  37 => 11,);
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

{% set mypageno = 'favorite' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'front.mypage.title'|trans }}/{{ 'front.mypage.nav__favorite'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>

        <div class=\"ec-mypageRole\">
            <div class=\"ec-favoriteRole\">
                {% if pagination.totalItemCount > 0 %}
                    <div class=\"ec-favoriteRole__header\">
                        <p>{{ 'front.mypage.favorite_count'|trans({'%count%':pagination.totalItemCount}) }}</p>
                    </div>
                    <div class=\"ec-favoriteRole__detail\">
                        <ul class=\"ec-favoriteRole__itemList\">
                            {% for FavoriteProduct in pagination %}
                                {% set Product = FavoriteProduct.Product %}
                                <li class=\"ec-favoriteRole__item\">
                                    <a class=\"ec-closeBtn--circle\"
                                       href=\"{{ url('mypage_favorite_delete', { id : Product.id }) }}\" {{ csrf_token_for_anchor() }}
                                       data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"{{ asset('assets/icon/cross-white.svg') }}\" alt=\"close\">
                                        </div>
                                    </a>
                                    <a class=\"ec-favoriteRole__itemThumb\" href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                        <p class=\"ec-favoriteRole__item-image\">
                                            <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\">
                                        </p>
                                    </a>
                                    <p class=\"ec-favoriteRole__itemTitle\">{{ Product.name }}</p>
                                    <p class=\"ec-favoriteRole__itemPrice\">
                                        {% if Product.price02_inc_tax_min == Product.price02_inc_tax_max %}
                                            {{ Product.price02_inc_tax_min|price }}
                                        {% else %}
                                            {{ Product.price02_inc_tax_min|price }}～{{ Product.price02_inc_tax_max|price }}
                                        {% endif %}
                                    </p>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"ec-pagerRole\">
                        {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
                    </div>
                {% else %}
                    <div class=\"ec-favoriteRole__header\">{{ 'front.mypage.favorite_not_found'|trans }}</div>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/favorite.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\default\\Mypage\\favorite.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "include" => 23, "if" => 28, "for" => 34);
        static $filters = array("escape" => 21, "trans" => 21, "no_image_product" => 46, "price" => 52);
        static $functions = array("url" => 38, "csrf_token_for_anchor" => 38, "asset" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price'],
                ['url', 'csrf_token_for_anchor', 'asset'],
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
