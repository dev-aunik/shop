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

/* Block/eyecatch.twig */
class __TwigTemplate_150a10d25a61e21cf4796afa8275ed6d extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/eyecatch.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/eyecatch.twig"));

        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/shop/html/user_data/custom_data/img/new_arrival_product_feature/eyecatch.webp"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CUBE GELATO ICE"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("日本中ではしご酒を体験しよう！"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescription\">
                ";
        // line 21
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ハシゴるは、全国の加盟飲食店ではしご酒を体験することができるサブスクリプションサービスです。
                加盟店は店ごとに設定した１，０００円の『ハシゴるメニュー』を提供します。各店の推しが詰まったメニューですので、きっとご満足いただけると思います。
                ハシゴるメニューは基本的に２０％以上お得に楽しめるものとなっており、１日でたくさんのお店をハシゴすることができます。
                "), "html", null, true));
        // line 25
        echo "
            </p>
            <a class=\"ec-blockBtn--top\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.view_list"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Block/eyecatch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  71 => 25,  66 => 21,  61 => 19,  57 => 18,  51 => 15,  45 => 11,);
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

<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"{{ asset('/shop/html/user_data/custom_data/img/new_arrival_product_feature/eyecatch.webp') }}\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            <p class=\"ec-eyecatchRole__introEnTitle\">{{ 'CUBE GELATO ICE'|trans }}</p>
            <p class=\"ec-eyecatchRole__introTitle\">{{ '日本中ではしご酒を体験しよう！'|trans }}</p>
            <p class=\"ec-eyecatchRole__introDescription\">
                {{ 'ハシゴるは、全国の加盟飲食店ではしご酒を体験することができるサブスクリプションサービスです。
                加盟店は店ごとに設定した１，０００円の『ハシゴるメニュー』を提供します。各店の推しが詰まったメニューですので、きっとご満足いただけると思います。
                ハシゴるメニューは基本的に２０％以上お得に楽しめるものとなっており、１日でたくさんのお店をハシゴすることができます。
                '|trans|nl2br 
                }}
            </p>
            <a class=\"ec-blockBtn--top\" href=\"{{ url('product_list') }}\">{{ 'front.block.eyecatch.view_list'|trans }}</a>
        </div>
    </div>
</div>", "Block/eyecatch.twig", "F:\\laragon\\www\\shop\\app\\template\\default\\Block\\eyecatch.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15, "trans" => 18, "nl2br" => 24);
        static $functions = array("asset" => 15, "url" => 27);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans', 'nl2br'],
                ['asset', 'url'],
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
