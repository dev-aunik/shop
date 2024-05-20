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

/* @admin/Setting/Shop/payment.twig */
class __TwigTemplate_0dd85381799ede77ffa91435313842a2 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/payment.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/payment.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_payment"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/payment.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment_list"), "html", null, true);
        
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
        \$(function() {
            // 初期表示時のsort noを保持.
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
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment_sort_no_move");
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

            ";
        // line 103
        echo "            // 表示・非表示
            \$('.check-display').click(function(){
                var id = \$(this).attr('id');
                if(\$('.display-show-toggle-' + id).hasClass('fa-eye')){
                    \$('.display-show-toggle-' + id).addClass('fa-eye-slash');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye');
                    \$('#' + id).css('background-color','#FAF1F1');
                }else{
                    \$('.display-show-toggle-' + id).addClass('fa-eye');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye-slash');
                    \$('#' + id).css('background-color','');
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

    // line 130
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 131
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                    <div class=\"col-auto\"><strong>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.payment_id"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-2\"><strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col-1\"><strong>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</strong></div>
                                    <div class=\"col\"><strong>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.terms_of_use"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Payments"]) || array_key_exists("Payments", $context) ? $context["Payments"] : (function () { throw new RuntimeError('Variable "Payments" does not exist.', 149, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Payment"]) {
            // line 150
            echo "                                <li id=\"ex-payment-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "sortNo", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                        <div class=\"col-auto d-flex align-items-center\">";
            // line 153
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "</div>
                                        <div class=\"col-2 d-flex align-items-center\"><a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 154)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "method", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "</a></div>
                                        <div class=\"col-1 d-flex align-items-center\"><span>";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "charge", [], "any", false, false, true, 155), 155, $this->source)), "html", null, true);
            echo "</span></div>
                                        <div class=\"col d-flex align-items-center\">
                                        <span>
                                            ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", [], "any", false, false, true, 158) > 0)) {
                // line 159
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_min", [], "any", false, false, true, 159), 159, $this->source)), "html", null, true);
                echo "
                                            ";
            } else {
                // line 161
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(0), "html", null, true);
                echo "
                                            ";
            }
            // line 163
            echo "
                                            ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", [], "any", false, false, true, 164) > 0)) {
                // line 165
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Payment"], "rule_max", [], "any", false, false, true, 165), 165, $this->source)), "html", null, true);
                echo "
                                            ";
            } elseif ((null === twig_get_attribute($this->env, $this->source,             // line 166
$context["Payment"], "rule_max", [], "any", false, false, true, 166))) {
                // line 167
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.payment.unlimited"), "html", null, true);
                echo "
                                            ";
            }
            // line 169
            echo "                                        </span>
                                        </div>
                                        <div class=\"col-3 text-end\">
                                            <a class=\"btn btn-ec-actionIcon me-2 action-up";
            // line 172
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 172)) ? (" disabled") : (""));
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon me-2 action-down";
            // line 175
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 175)) ? (" disabled") : (""));
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment_visible", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 178)]), "html", null, true);
            echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 179
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [], "any", false, false, true, 179)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\"
                                               data-confirm=\"false\" data-method=\"put\" ";
            // line 180
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " >
                                                <i class=\"fa fa-toggle-";
            // line 181
            echo ((twig_get_attribute($this->env, $this->source, $context["Payment"], "visible", [], "any", false, false, true, 181)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            </a>
                                            <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                   data-url=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_payment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Payment"], "id", [], "any", false, false, true, 186)]), "html", null, true);
            echo "\"
                                                   data-message=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Payment"], "method", [], "any", false, false, true, 187)]), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                        </ul>
                        <!-- 削除モーダル -->
                        <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                             aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title fw-bold\">
                                            ";
        // line 203
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
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                        </button>
                                        <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 216
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                           data-method=\"delete\" data-confirm=\"false\">
                                            ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 226,  486 => 218,  481 => 216,  476 => 214,  462 => 203,  452 => 195,  430 => 187,  426 => 186,  421 => 184,  415 => 181,  411 => 180,  407 => 179,  403 => 178,  395 => 175,  387 => 172,  382 => 169,  374 => 167,  372 => 166,  365 => 165,  363 => 164,  360 => 163,  354 => 161,  348 => 159,  346 => 158,  340 => 155,  334 => 154,  330 => 153,  319 => 150,  302 => 149,  296 => 146,  292 => 145,  288 => 144,  284 => 143,  271 => 135,  265 => 131,  255 => 130,  220 => 103,  163 => 48,  140 => 27,  130 => 26,  115 => 19,  105 => 18,  86 => 16,  67 => 15,  56 => 11,  54 => 13,  41 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_payment'] %}

{% block title %}{{ 'admin.setting.shop.payment_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
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
                    url: '{{ url('admin_setting_shop_payment_sort_no_move') }}',
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

            {# TODO: 表示・非表示を登録できるようにする #}
            // 表示・非表示
            \$('.check-display').click(function(){
                var id = \$(this).attr('id');
                if(\$('.display-show-toggle-' + id).hasClass('fa-eye')){
                    \$('.display-show-toggle-' + id).addClass('fa-eye-slash');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye');
                    \$('#' + id).css('background-color','#FAF1F1');
                }else{
                    \$('.display-show-toggle-' + id).addClass('fa-eye');
                    \$('.display-show-toggle-' + id).removeClass('fa-eye-slash');
                    \$('#' + id).css('background-color','');
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
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_payment_new') }}\">{{ 'admin.common.create__new'|trans }}</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                    <div class=\"col-auto\"><strong>{{ 'admin.setting.shop.payment.payment_id'|trans }}</strong></div>
                                    <div class=\"col-2\"><strong>{{ 'admin.common.payment_method'|trans }}</strong></div>
                                    <div class=\"col-1\"><strong>{{ 'admin.common.charge'|trans }}</strong></div>
                                    <div class=\"col\"><strong>{{ 'admin.setting.shop.payment.terms_of_use'|trans }}</strong></div>
                                </div>
                            </li>
                            {% for Payment in Payments %}
                                <li id=\"ex-payment-{{ Payment.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Payment.id }}\" data-sort-no=\"{{ Payment.sortNo }}\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                        <div class=\"col-auto d-flex align-items-center\">{{ Payment.id }}</div>
                                        <div class=\"col-2 d-flex align-items-center\"><a href=\"{{ url('admin_setting_shop_payment_edit', { id: Payment.id}) }}\">{{ Payment.method }}</a></div>
                                        <div class=\"col-1 d-flex align-items-center\"><span>{{ Payment.charge|price }}</span></div>
                                        <div class=\"col d-flex align-items-center\">
                                        <span>
                                            {% if Payment.rule_min > 0 %}
                                                {{ Payment.rule_min|price }}
                                            {% else %}
                                                {{ 0|price }}
                                            {% endif %}

                                            {% if Payment.rule_max > 0 %}
                                                {{ 'admin.common.separator__range'|trans }} {{ Payment.rule_max|price }}
                                            {% elseif Payment.rule_max is null %}
                                                {{ 'admin.common.separator__range'|trans }} {{ 'admin.setting.shop.payment.unlimited'|trans }}
                                            {% endif %}
                                        </span>
                                        </div>
                                        <div class=\"col-3 text-end\">
                                            <a class=\"btn btn-ec-actionIcon me-2 action-up{{ loop.first ? ' disabled' }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                                                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon me-2 action-down{{ loop.last ? ' disabled' }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                                                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                            </a>
                                            <a class=\"btn btn-ec-actionIcon me-2 action-visible\" href=\"{{ url('admin_setting_shop_payment_visible', {'id': Payment.id }) }}\"
                                               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ Payment.visible ? 'admin.common.to_hide'|trans : 'admin.common.to_show'|trans }}\"
                                               data-confirm=\"false\" data-method=\"put\" {{ csrf_token_for_anchor() }} >
                                                <i class=\"fa fa-toggle-{{ Payment.visible ? 'on' : 'off' }} fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                            </a>
                                            <div class=\"d-inline-block me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                 title=\"{{ 'admin.common.delete'|trans }}\">
                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal\"
                                                   data-url=\"{{ url('admin_setting_shop_payment_delete', {'id' : Payment.id}) }}\"
                                                   data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Payment.method }) }}\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
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
                <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/payment.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\payment.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 149, "if" => 158);
        static $filters = array("escape" => 15, "trans" => 15, "price" => 155);
        static $functions = array("url" => 48, "csrf_token_for_anchor" => 180);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'price'],
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
