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

/* @admin/Setting/Shop/delivery.twig */
class __TwigTemplate_7165b86fb6165d9a1bae04ceae82c7b2 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/delivery.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script>
        \$(function() {
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 98
        echo "    <form name=\"form1\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0\">
                                <ul class=\"list-group list-group-flush sortable-container\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                            <div class=\"col-auto\"><strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-2\"><strong>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</strong></div>
                                        </div>
                                    </li>
                                    ";
        // line 116
        if ((twig_length_filter($this->env, (isset($context["Deliveries"]) || array_key_exists("Deliveries", $context) ? $context["Deliveries"] : (function () { throw new RuntimeError('Variable "Deliveries" does not exist.', 116, $this->source); })())) > 0)) {
            // line 117
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Deliveries"]) || array_key_exists("Deliveries", $context) ? $context["Deliveries"] : (function () { throw new RuntimeError('Variable "Deliveries" does not exist.', 117, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Delivery"]) {
                // line 118
                echo "                                            <li id=\"ex-delivery-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "sortNo", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                echo "\">
                                                <div class=\"row justify-content-around\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">";
                // line 121
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, true, 123)]), "html", null, true);
                echo "\">
                                                            ";
                // line 124
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "name", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Delivery"], "service_name", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "
                                                        </a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon me-2 action-up ";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 128)) {
                    echo "disabled";
                }
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon me-2 action-down ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 131)) {
                    echo "disabled";
                }
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_visibility", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "id", [], "any", false, false, true, 134)]), "html", null, true);
                echo "\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 135
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Delivery"], "visible", [], "any", false, false, true, 135)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
                echo "\"
                                                           data-confirm=\"false\" data-method=\"put\" ";
                // line 136
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " >
                                                            <i class=\"fa fa-toggle-";
                // line 137
                echo ((twig_get_attribute($this->env, $this->source, $context["Delivery"], "visible", [], "any", false, false, true, 137)) ? ("on") : ("off"));
                echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "Id", [], "any", false, false, true, 142)]), "html", null, true);
                echo "\"
                                                               data-message=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Delivery"], "name", [], "any", false, false, true, 143)]), "html", null, true);
                echo "\">
                                                                <i class=\"fa fa-close fa-lg\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Delivery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                                    ";
        }
        // line 152
        echo "                                </ul>
                                <!-- 削除モーダル -->
                                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title fw-bold\">
                                                    ";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                                </h5>
                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                </button>
                                            </div>
                                            <div class=\"modal-body text-start\">
                                                <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                    ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                                </button>
                                                <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 173
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                                   data-method=\"delete\" data-confirm=\"false\">
                                                    ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/delivery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 184,  399 => 175,  394 => 173,  389 => 171,  375 => 160,  365 => 152,  362 => 151,  340 => 143,  336 => 142,  331 => 140,  325 => 137,  321 => 136,  317 => 135,  313 => 134,  303 => 131,  293 => 128,  284 => 124,  280 => 123,  275 => 121,  264 => 118,  246 => 117,  244 => 116,  238 => 113,  234 => 112,  220 => 103,  213 => 98,  203 => 97,  134 => 37,  114 => 19,  104 => 18,  85 => 16,  66 => 15,  55 => 11,  53 => 13,  40 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_delivery'] %}

{% block title %}{{ 'admin.setting.shop.delivery_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% block javascript %}
    <script>
        \$(function() {
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '{{ url('admin_setting_shop_delivery_sort_no_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$(\".sortable-container\").sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
{% endblock %}

{% block main %}
    <form name=\"form1\" method=\"post\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"d-block mb-3\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_delivery_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"card rounded border-0\">
                                <ul class=\"list-group list-group-flush sortable-container\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                            <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                            <div class=\"col-2\"><strong>{{ 'admin.setting.shop.delivery.delivery_name'|trans }}</strong></div>
                                        </div>
                                    </li>
                                    {% if Deliveries|length > 0 %}
                                        {% for Delivery in Deliveries %}
                                            <li id=\"ex-delivery-{{ Delivery.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Delivery.id }}\" data-sort-no=\"{{ Delivery.sortNo }}\">
                                                <div class=\"row justify-content-around\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">{{ Delivery.id }}</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"{{ url('admin_setting_shop_delivery_edit', {id: Delivery.id} ) }}\">
                                                            {{ Delivery.name }} / {{ Delivery.service_name }}
                                                        </a>
                                                    </div>
                                                    <div class=\"col-auto text-end\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon me-2 action-up {% if loop.first %}disabled{% endif %}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon me-2 action-down {% if loop.last %}disabled{% endif %}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"{{ url('admin_setting_shop_delivery_visibility', {'id': Delivery.id }) }}\"
                                                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ Delivery.visible ? 'admin.common.to_hide'|trans : 'admin.common.to_show'|trans }}\"
                                                           data-confirm=\"false\" data-method=\"put\" {{ csrf_token_for_anchor() }} >
                                                            <i class=\"fa fa-toggle-{{ Delivery.visible ? 'on' : 'off' }} fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                               data-url=\"{{ url('admin_setting_shop_delivery_delete', {id: Delivery.Id} ) }}\"
                                                               data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Delivery.name }) }}\">
                                                                <i class=\"fa fa-close fa-lg\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    {% endif %}
                                </ul>
                                <!-- 削除モーダル -->
                                <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title fw-bold\">
                                                    {{ 'admin.common.delete_modal__title'|trans }}
                                                </h5>
                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                </button>
                                            </div>
                                            <div class=\"modal-body text-start\">
                                                <p class=\"text-start modal-message\"><!-- jsでメッセージを挿入 --></p>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                    {{ 'admin.common.cancel'|trans }}
                                                </button>
                                                <a class=\"btn btn-ec-delete\" href=\"#\" {{ csrf_token_for_anchor() }}
                                                   data-method=\"delete\" data-confirm=\"false\">
                                                    {{ 'admin.common.delete'|trans }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
                </div>
            </div>
        </div>
    </form>

{% endblock %}
", "@admin/Setting/Shop/delivery.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\delivery.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 116, "for" => 117);
        static $filters = array("escape" => 15, "trans" => 15, "length" => 116);
        static $functions = array("url" => 37, "csrf_token_for_anchor" => 136);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'length'],
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
