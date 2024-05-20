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

/* @admin/Content/block.twig */
class __TwigTemplate_e1fc68f60eb81f714bb33694e1d54556 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/block.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/block.twig"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "block"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/block.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.block_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 19
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "    <script>
        // searchWordの実行
        \$('#search-block').on('input', function() {
            searchWord(\$(this).val(), \$(\".list-group li\"));
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_block_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-text\">
                                        <span id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li>
                                    <div class=\"row p-3 fw-bold\">
                                        <div class=\"col-4 col-md-6\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.block_name"), "html", null, true);
        echo "</div>
                                        <div class=\"col-3 col-md-4\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.block_file_name"), "html", null, true);
        echo "</div>
                                        <div class=\"col-5 col-md-2\"></div>
                                    </div>
                                </li>
                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blocks"]) || array_key_exists("Blocks", $context) ? $context["Blocks"] : (function () { throw new RuntimeError('Variable "Blocks" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 68
            echo "                                    <li id=\"ex-block-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\" class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-4 col-md-6 d-flex align-items-center\">
                                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 71)]), "html", null, true);
            echo "\">
                                                    ";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                            <div class=\"col-3 col-md-4 d-flex align-items-center\">
                                                ";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ".twig
                                            </div>
                                            <div class=\"col-5 col-md-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-6 text-end\">
                                                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_block_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 81)]), "html", null, true);
            echo "\"
                                                           class=\"btn btn-ec-actionIcon me-3\" data-bs-toggle=\"tooltip\"
                                                           data-bs-placement=\"top\" title=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                    ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "deletable", [], "any", false, false, true, 87)) {
                // line 88
                echo "                                                        <div class=\"col-6\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
                // line 90
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                echo "\" class=\"btn btn-ec-actionIcon\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 95
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 96
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Block"], "id", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Block"], "name", [], "any", false, false, true, 106)]), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                        <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_block_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Block"], "Id", [], "any", false, false, true, 110)]), "html", null, true);
                echo "\"
                                                                           class=\"btn btn-ec-delete\" data-confirm=\"false\" ";
                // line 111
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                            ";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 119
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Content/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 124,  317 => 119,  307 => 112,  303 => 111,  299 => 110,  295 => 109,  289 => 106,  280 => 100,  273 => 96,  269 => 95,  261 => 90,  257 => 89,  254 => 88,  252 => 87,  245 => 83,  240 => 81,  232 => 76,  225 => 72,  221 => 71,  214 => 68,  210 => 67,  203 => 63,  199 => 62,  173 => 41,  166 => 36,  156 => 35,  140 => 27,  130 => 26,  115 => 19,  105 => 18,  86 => 16,  67 => 15,  56 => 11,  54 => 13,  41 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['content', 'block'] %}

{% block title %}{{ 'admin.content.block_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script>
        // searchWordの実行
        \$('#search-block').on('input', function() {
            searchWord(\$(this).val(), \$(\".list-group li\"));
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_content_block_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-text\">
                                        <span id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-block\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li>
                                    <div class=\"row p-3 fw-bold\">
                                        <div class=\"col-4 col-md-6\">{{ 'admin.content.block_name'|trans }}</div>
                                        <div class=\"col-3 col-md-4\">{{ 'admin.content.block_file_name'|trans }}</div>
                                        <div class=\"col-5 col-md-2\"></div>
                                    </div>
                                </li>
                                {% for Block in Blocks %}
                                    <li id=\"ex-block-{{ Block.id }}\" class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-4 col-md-6 d-flex align-items-center\">
                                                <a href=\"{{ url('admin_content_block_edit', {id: Block.id}) }}\">
                                                    {{ Block.name }}
                                                </a>
                                            </div>
                                            <div class=\"col-3 col-md-4 d-flex align-items-center\">
                                                {{ Block.file_name }}.twig
                                            </div>
                                            <div class=\"col-5 col-md-2\">
                                                <div class=\"row\">
                                                    <div class=\"col-6 text-end\">
                                                        <a href=\"{{ url('admin_content_block_edit', {id: Block.id}) }}\"
                                                           class=\"btn btn-ec-actionIcon me-3\" data-bs-toggle=\"tooltip\"
                                                           data-bs-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                    </div>
                                                    {% if Block.deletable %}
                                                        <div class=\"col-6\">
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-{{ Block.id }}\" class=\"btn btn-ec-actionIcon\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"confirmModal-{{ Block.id }}\" tabindex=\"-1\" role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-{{ Block.id }}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-start\">
                                                                        <p class=\"text-start\">{{ 'admin.common.delete_modal__message'|trans({ '%name%' : Block.name }) }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                        <a href=\"{{ url('admin_content_block_delete', {id: Block.Id} ) }}\"
                                                                           class=\"btn btn-ec-delete\" data-confirm=\"false\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                                            {{ 'admin.common.delete'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Content/block.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Content\\block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 67, "if" => 87);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("url" => 41, "csrf_token_for_anchor" => 111);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans'],
                ['url', 'csrf_token_for_anchor'],
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
