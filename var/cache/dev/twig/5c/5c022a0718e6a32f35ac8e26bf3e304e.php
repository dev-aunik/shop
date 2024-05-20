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

/* @admin/Setting/Shop/delivery_edit.twig */
class __TwigTemplate_026699d55d53cbbe5c744c3bef437338 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_edit.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_edit.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/delivery_edit.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_setting"), "html", null, true);
        
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

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "free_all", [], "any", false, false, true, 25), "vars", [], "any", false, false, true, 25), "id", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.fee.invalid"), "html", null, true);
        echo "\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = \$(prototype.replace(/__name__/g, index));
                newForm.find('.display-label').text(deliveryTimeName)

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('title', '";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.attr('data-bs-original-title', '";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('title', '";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.attr('data-bs-original-title', '";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                tooltip = bootstrap.Tooltip.getInstance(\$(this).get(0));
                tooltip.show();
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 216
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 217
        echo "    <form method=\"post\" action=\"";
        (((isset($context["delivery_id"]) || array_key_exists("delivery_id", $context) ? $context["delivery_id"] : (function () { throw new RuntimeError('Variable "delivery_id" does not exist.', 217, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => (isset($context["delivery_id"]) || array_key_exists("delivery_id", $context) ? $context["delivery_id"] : (function () { throw new RuntimeError('Variable "delivery_id" does not exist.', 217, $this->source); })())]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_new"))));
        echo "\">
        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "_token", [], "any", false, false, true, 218), 218, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, true, 228), 228, $this->source), 'widget');
        echo "
                                    ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "name", [], "any", false, false, true, 229), 229, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_sevice_name"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "service_name", [], "any", false, false, true, 235), 235, $this->source), 'widget');
        echo "
                                    ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "service_name", [], "any", false, false, true, 236), 236, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "\">
                                        <span>";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "confirm_url", [], "any", false, false, true, 247), 247, $this->source), 'widget');
        echo "
                                    ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "confirm_url", [], "any", false, false, true, 248), 248, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.sale_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.sale_type"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "sale_type", [], "any", false, false, true, 260), 260, $this->source), 'widget');
        echo "
                                    ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "sale_type", [], "any", false, false, true, 261), 261, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 265
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 265), "eccube_form_options", [], "any", false, false, true, 265), "auto_render", [], "any", false, false, true, 265); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 266
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 266), "eccube_form_options", [], "any", false, false, true, 266), "form_theme", [], "any", false, false, true, 266)) {
                // line 267
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 267), "eccube_form_options", [], "any", false, false, true, 267), "form_theme", [], "any", false, false, true, 267)], true);
                // line 268
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 268, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 270
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 271
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 271), "label", [], "any", false, false, true, 271), 271, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 273
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 273, $this->source), 'widget');
                echo "
                                            ";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 274, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 278
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.payment_method"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "payments", [], "any", false, false, true, 285), 285, $this->source), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "payments", [], "any", false, false, true, 286), 286, $this->source), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_time_setting"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"";
        // line 295
        ob_start();
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "delivery_times", [], "any", false, false, true, 295), "vars", [], "any", false, false, true, 295), "prototype", [], "any", false, false, true, 295)]);
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_8_);
        echo "\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "delivery_times", [], "any", false, false, true, 306));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 307
            echo "                                        ";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => $context["child"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_fee_by_pref"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-bs-toggle=\"tooltip\"
                                                 data-bs-placement=\"top\" title=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.apply_to_pref"), "html", null, true);
        echo "\"><span
                                                        class=\"card-title\">";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__title"), "html", null, true);
        echo "</span><i
                                                        class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "free_all", [], "any", false, false, true, 327), 327, $this->source), 'widget');
        echo "
                                            ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "free_all", [], "any", false, false, true, 328), 328, $this->source), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__button"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "delivery_fees", [], "any", false, false, true, 336));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 337
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 337) % 2) != 0)) {
                echo "<div class=\"row mb-2\">";
            }
            // line 338
            echo "                                        <div class=\"col";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 338)) ? ("-6") : (""));
            echo "\">
                                            <div class=\"row\">
                                                <div class=\"col-2\">
                                                    <label>";
            // line 341
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, true, 341), "data", [], "any", false, false, true, 341), "pref", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
            echo "</label>
                                                </div>
                                                <div class=\"col ps-0\">
                                                    ";
            // line 344
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, true, 344), 344, $this->source), 'widget');
            echo "
                                                    ";
            // line 345
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, true, 345), 345, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 349
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 349) % 2) == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 349))) {
                echo "</div>";
            }
            // line 350
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.shop_memo"), "html", null, true);
        echo "\">
                                    <span class=\"card-title\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i
                                                class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "description", [], "any", false, false, true, 372), 372, $this->source), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                    ";
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "description", [], "any", false, false, true, 373), 373, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 386
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "visible", [], "any", false, false, true, 394), 394, $this->source), 'widget');
        echo "
                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "visible", [], "any", false, false, true, 395), 395, $this->source), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
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
        return "@admin/Setting/Shop/delivery_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 398,  762 => 395,  758 => 394,  748 => 387,  744 => 386,  728 => 373,  724 => 372,  710 => 361,  706 => 360,  695 => 351,  681 => 350,  677 => 349,  670 => 345,  666 => 344,  660 => 341,  653 => 338,  648 => 337,  631 => 336,  623 => 331,  617 => 328,  613 => 327,  606 => 323,  602 => 322,  590 => 315,  585 => 313,  579 => 309,  562 => 307,  545 => 306,  538 => 302,  525 => 295,  518 => 291,  510 => 286,  506 => 285,  498 => 282,  493 => 279,  487 => 278,  480 => 274,  476 => 273,  471 => 271,  468 => 270,  462 => 268,  459 => 267,  456 => 266,  451 => 265,  445 => 261,  441 => 260,  431 => 255,  427 => 254,  418 => 248,  414 => 247,  407 => 243,  403 => 242,  394 => 236,  390 => 235,  383 => 233,  376 => 229,  372 => 228,  365 => 226,  359 => 223,  351 => 218,  346 => 217,  336 => 216,  316 => 205,  312 => 204,  304 => 199,  300 => 198,  129 => 30,  121 => 25,  116 => 22,  106 => 21,  87 => 16,  68 => 15,  57 => 11,  55 => 18,  53 => 13,  40 => 11,);
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

{% block title %}{{ 'admin.setting.shop.delivery_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}


{% block javascript %}
    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#{{ form.free_all.vars.id }}').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"{{ 'admin.setting.shop.delivery.fee.invalid'|trans }}\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = \$(prototype.replace(/__name__/g, index));
                newForm.find('.display-label').text(deliveryTimeName)

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('title', '{{ 'admin.common.to_show'|trans }}');
                    \$this.attr('data-bs-original-title', '{{ 'admin.common.to_show'|trans }}');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('title', '{{ 'admin.common.to_hide'|trans }}');
                    \$this.attr('data-bs-original-title', '{{ 'admin.common.to_hide'|trans }}');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                tooltip = bootstrap.Tooltip.getInstance(\$(this).get(0));
                tooltip.show();
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form method=\"post\" action=\"{{ delivery_id ? url('admin_setting_shop_delivery_edit', {'id': delivery_id}) : url('admin_setting_shop_delivery_new') }}\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.base_info'|trans }}</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.delivery.delivery_name'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.name) }}
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.delivery.delivery_sevice_name'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.service_name) }}
                                    {{ form_errors(form.service_name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.tracking_number_url'|trans }}\">
                                        <span>{{ 'admin.setting.shop.delivery.tracking_number_url'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.confirm_url) }}
                                    {{ form_errors(form.confirm_url) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.sale_type'|trans }}\">
                                        <span>{{ 'admin.setting.shop.delivery.sale_type'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.sale_type) }}
                                    {{ form_errors(form.sale_type) }}
                                </div>
                            </div>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>{{ f.vars.label|trans }}</span></div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.payment_method'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                {{ form_widget(form.payments, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(form.payments) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.delivery_time_setting'|trans }}</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"{% apply escape %}{{ include('@admin/Setting/Shop/delivery_time_prototype.twig', {'form': form.delivery_times.vars.prototype}) }}{% endapply %}\">
                                    <li class=\"list-group-item\">
                                        <div class=\"row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">{{ 'admin.common.create__new'|trans }}</button>
                                            </div>
                                        </div>
                                    </li>
                                    {% for child in form.delivery_times %}
                                        {{ include('@admin/Setting/Shop/delivery_time_prototype.twig', {'form': child}) }}
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">{{ 'admin.common.drag_and_drop_description'|trans }}</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.delivery_fee_by_pref'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-bs-toggle=\"tooltip\"
                                                 data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.delivery.apply_to_pref'|trans }}\"><span
                                                        class=\"card-title\">{{ 'admin.setting.shop.delivery.apply_to_pref__title'|trans }}</span><i
                                                        class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            {{ form_widget(form.free_all) }}
                                            {{ form_errors(form.free_all) }}
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">{{ 'admin.setting.shop.delivery.apply_to_pref__button'|trans }}</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    {% for child in form.delivery_fees %}
                                        {% if loop.index % 2 != 0 %}<div class=\"row mb-2\">{% endif %}
                                        <div class=\"col{{ loop.last ? '-6' }}\">
                                            <div class=\"row\">
                                                <div class=\"col-2\">
                                                    <label>{{ child.vars.data.pref }}</label>
                                                </div>
                                                <div class=\"col ps-0\">
                                                    {{ form_widget(child.fee) }}
                                                    {{ form_errors(child.fee) }}
                                                </div>
                                            </div>
                                        </div>
                                        {% if loop.index % 2 == 0 or loop.last %}</div>{% endif %}
                                    {% endfor %}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.shop_memo'|trans }}\">
                                    <span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i
                                                class=\"fa fa-question-circle fa-lg ms-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    {{ form_widget(form.description, {'attr': {'rows': 8}}) }}
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_setting_shop_delivery') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.setting.shop.delivery_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.visible) }}
                                {{ form_errors(form.visible) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Setting/Shop/delivery_edit.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\delivery_edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 265, "if" => 266, "apply" => 295);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 265);
        static $functions = array("url" => 217, "form_widget" => 218, "form_errors" => 229, "form_row" => 268, "include" => 295);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'apply'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_row', 'include'],
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
