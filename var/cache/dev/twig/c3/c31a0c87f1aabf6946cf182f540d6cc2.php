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

/* Block/search_product.twig */
class __TwigTemplate_32001eec243bc87e2bf76f711528b0b1 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/search_product.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/search_product.twig"));

        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 12
        echo "
<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
        echo "\">
        <div class=\"ec-headerSearch__category\">
            <div class=\"ec-select ec-select_search\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "category_id", [], "any", false, false, true, 17), 17, $this->source), 'widget', ["id" => null, "attr" => ["class" => "category_id"]]);
        echo "
            </div>
        </div>
        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, true, 22), 22, $this->source), 'widget', ["id" => null, "attr" => ["class" => "search-name", "placeholder" => "common.search_keyword"]]);
        echo "
                <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
                    <div class=\"ec-icon\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/search-dark.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Block/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  65 => 22,  57 => 17,  51 => 14,  47 => 12,  45 => 11,);
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
{% form_theme form 'Form/form_div_layout.twig' %}

<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"{{ path('product_list') }}\">
        <div class=\"ec-headerSearch__category\">
            <div class=\"ec-select ec-select_search\">
                {{ form_widget(form.category_id, {'id': null, 'attr': {'class': 'category_id'}}) }}
            </div>
        </div>
        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                {{ form_widget(form.name, {'id': null, 'attr': {'class': 'search-name', 'placeholder' : 'common.search_keyword' }} ) }}
                <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
                    <div class=\"ec-icon\">
                        <img src=\"{{ asset('assets/icon/search-dark.svg') }}\" alt=\"\">
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
", "Block/search_product.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\default\\Block\\search_product.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 11);
        static $filters = array("escape" => 25);
        static $functions = array("path" => 14, "form_widget" => 17, "asset" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme'],
                ['escape'],
                ['path', 'form_widget', 'asset'],
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
