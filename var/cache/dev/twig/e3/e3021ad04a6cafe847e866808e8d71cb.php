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

/* @admin/Order/shipping.twig */
class __TwigTemplate_096c2f38fbd3c35cc25fd13c243bd810 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/shipping.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/shipping.twig"));

        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/shipping.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
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
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>

    <script>
        // 商品追加
        \$('.addProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // その他明細追加
        \$('.addOtherProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // 商品検索
        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: '";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_product");
        echo "',
                type: 'POST',
                dataType: 'html',
                data: {
                    'id': \$('#admin_search_product_id').val(),
                    'category_id': \$('#admin_search_product_category_id').val()
                }
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // その他明細
        \$('#addOrderItemType').on('show.bs.modal', function(e) {
            var list = \$('#searchOrderItemTypeList');
            list.children().remove();

            \$.ajax({
                url: '";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                type: 'POST',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchOrderItemTypeList').html(data);
            }).fail(function(data) {
                alert('search order item type failed.');
            });
        });

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            \$(\"#form1\").submit();

            return false;
        });

        \$(document).on('click', '.delete-shipping', function(e) {
            // お届け先削除
            \$(this).parents('div.card').remove();
            \$(\"#form1\").submit();

            return false;
        });

        ";
        // line 94
        echo "        // 計算結果の更新が押されたらページ内リンクさせる
        // \$('.btn').click(function() {
        //     var data = \$(this).data();
        //     if (data.link) {
        //         \$('#form1').attr('action', '#' + data.link).submit();
        //         return false;
        //     }
        // });

        // 配送業者選択時にお届け時間を設定
        var times = ";
        // line 104
        echo $this->sandbox->ensureToStringAllowed((isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 104, $this->source); })()), 104, $this->source);
        echo ";

        \$(\"select[id\$='_Delivery']\").on('change', function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$(this).parents('.card-body').find(\"select[id\$='_DeliveryTime']\");
            \$shippingDeliveryTime.find('option').remove();
            \$shippingDeliveryTime.append(\$('<option></option>').val('').text('";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.select__unspecified"), "html", null, true);
        echo "'));
            if (typeof(times[deliveryId]) !== 'undefined') {
                for (var timeId in times[deliveryId]) {
                    timeValue = times[deliveryId][timeId];
                    \$shippingDeliveryTime.append(\$('<option></option>')
                        .val(timeId)
                        .text(timeValue));
                }
            }
        });

        \$('#addShipping').on('click', function() {
            \$('#form_add_shipping').val(\"1\");
            \$(\"#form1\").submit();

            return false;
        })

        // 完了ボタン
        \$('#bulkChangeComplete').on('click', function() {
            location.href = '";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, true, 130)]), "html", null, true);
        echo "';
        });

        // PDF出力(単一)
        \$('.pdf-print').click(function() {
            window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
            return false;
        });

        // モーダル注意文言の削除
        \$('#bulkChange').on('click', function() {
            \$('.warning-message').css('display', 'none');
        })
    </script>

    ";
        // line 145
        echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 150
        echo "    <form name=\"form1\" id=\"form1\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, true, 150)]), "html", null, true);
        echo "\"
          method=\"post\">
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "_token", [], "any", false, false, true, 152), 152, $this->source), 'widget');
        echo "
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "add_shipping", [], "any", false, false, true, 153), 153, $this->source), 'widget');
        echo "
        <!-- 商品明細追加モーダル -->
        <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"addProduct\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
        echo "</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, true, 166), 166, $this->source), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 167, $this->source); })()), "category_id", [], "any", false, false, true, 167), 167, $this->source), 'widget');
        echo "
                        <button type=\"button\" id=\"searchProductModalButton\"
                                class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                        <div id=\"searchProductModalList\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- その他明細追加モーダル -->
        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"searchOrderItemTypeList\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 出荷済にするモーダル / 出荷メール送信モーダル -->
        <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"mb-4 modal-message\"><!--confirmationModal_js.twig--></p>
                        <p class=\"mb-4 warning-message\">";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__confirm_message"), "html", null, true);
        echo "</p>
                        <ul id=\"bulkErrors\"></ul>
                        <div id=\"bulk-options\">
                            <div class=\"fw-bold mb-2 notificationMail\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                <label class=\"form-check-label notificationMail\">
                                    ";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                </label>
                            </div>
                            <div>
                                <div class=\"d-inline-block\" data-bs-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o fw-bold me-1\"></i><span class=\"fw-bold\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール詳細"), "html", null, true);
        echo "</span></a></div>
                                <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                    <pre></pre>
                                </div>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"display: none\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                        <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                        <!--完了ボタン-->
                        <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "shippings", [], "any", false, false, true, 233));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingForm"]) {
            // line 234
            echo "                        <div class=\"card rounded border-0 mb-4 h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <!-- 出荷情報 -->
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\">
                                            <span class=\"card-title\">";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping__card_title"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
            echo ")</span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        ";
            // line 245
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "shippings", [], "any", false, false, true, 245)) > 1)) {
                // line 246
                echo "                                            <!-- 出荷が2つ以上ある場合は, 出荷の削除ボタンを表示する -->
                                            <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_shipping_";
                // line 247
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 247), "id", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                ";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping"), "html", null, true);
                echo "
                                            </a>
                                            <div class=\"modal fade\" id=\"delete_shipping_";
                // line 251
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 251), "id", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_shipping_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 251), "id", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        ";
                // line 254
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 254)) > 0)) {
                    // line 255
                    echo "                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">";
                    // line 256
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping_error__confirm_title"), "html", null, true);
                    echo "</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
                    // line 262
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping_error__confirm_message"), "html", null, true);
                    echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                    // line 265
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                            </div>
                                                        ";
                } else {
                    // line 268
                    echo "                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">";
                    // line 269
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                    echo "</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
                    // line 275
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_shipping__confirm_message", ["%num%" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 275)]), "html", null, true);
                    echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                    // line 278
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                                <a href=\"#shipping-product_";
                    // line 279
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
                    echo "\" class=\"btn delete-shipping btn-ec-delete\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "</a>
                                                            </div>
                                                        ";
                }
                // line 282
                echo "                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 286
            echo "                                        <a data-bs-toggle=\"collapse\" href=\"#shipmentOverview_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
            echo "\" aria-expanded=\"false\"
                                           aria-controls=\"shipmentOverview_";
            // line 287
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-angle-up fa-lg\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"shipmentOverview_";
            // line 293
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 297), "value", [], "any", false, false, true, 297), "id", [], "any", false, false, true, 297)) {
                // line 298
                echo "                                                ";
                // line 299
                echo "                                                <!-- 納品書を出力ボタン -->
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                // line 300
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 300), "value", [], "any", false, false, true, 300), "id", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                                <!-- 出荷メール送信ボタン -->
                                                <button type=\"button\" class=\"btn btn-ec-regular confirmationModal\"
                                                        data-type=\"mail\" data-bulk-update=\"false\"
                                                        data-preview-notify-mail-url=\"";
                // line 304
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 304), "value", [], "any", false, false, true, 304), "id", [], "any", false, false, true, 304)]), "html", null, true);
                echo "\"
                                                        data-notify-mail-url=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 305), "value", [], "any", false, false, true, 305), "id", [], "any", false, false, true, 305)]), "html", null, true);
                echo "\">
                                                    ";
                // line 306
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send"), "html", null, true);
                echo "
                                                </button>
                                            ";
            } else {
                // line 309
                echo "                                                ";
                // line 310
                echo "                                            ";
            }
            // line 311
            echo "                                        </div>
                                    </div>
                                    <!-- お届先情報 -->
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 318
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 326
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 326), "name01", [], "any", false, false, true, 326), 326, $this->source), 'widget');
            echo "
                                                            ";
            // line 327
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 327), "name01", [], "any", false, false, true, 327), 327, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 330), "name02", [], "any", false, false, true, 330), 330, $this->source), 'widget');
            echo "
                                                            ";
            // line 331
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "name", [], "any", false, false, true, 331), "name02", [], "any", false, false, true, 331), 331, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 340
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 346
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 346), "kana01", [], "any", false, false, true, 346), 346, $this->source), 'widget');
            echo "
                                                            ";
            // line 347
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 347), "kana01", [], "any", false, false, true, 347), 347, $this->source), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 350), "kana02", [], "any", false, false, true, 350), 350, $this->source), 'widget');
            echo "
                                                            ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "kana", [], "any", false, false, true, 351), "kana02", [], "any", false, false, true, 351), 351, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "</span>
                                                            <span class=\"col-auto ps-0\">";
            // line 367
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "postal_code", [], "any", false, false, true, 367), 367, $this->source), 'widget');
            echo "</span>
                                                            ";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "postal_code", [], "any", false, false, true, 368), 368, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 373), "pref", [], "any", false, false, true, 373), 373, $this->source), 'widget');
            echo "
                                                            ";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 374), "pref", [], "any", false, false, true, 374), 374, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 379
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 379), "addr01", [], "any", false, false, true, 379), 379, $this->source), 'widget');
            echo "
                                                            ";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 380), "addr01", [], "any", false, false, true, 380), 380, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 385
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 385), "addr02", [], "any", false, false, true, 385), 385, $this->source), 'widget');
            echo "
                                                            ";
            // line 386
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "address", [], "any", false, false, true, 386), "addr02", [], "any", false, false, true, 386), 386, $this->source), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 395
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">
                                                        ";
            // line 397
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 401
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "phone_number", [], "any", false, false, true, 401), 401, $this->source), 'widget');
            echo "
                                                    ";
            // line 402
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "phone_number", [], "any", false, false, true, 402), 402, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 408
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 411
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "company_name", [], "any", false, false, true, 411), 411, $this->source), 'widget');
            echo "
                                                    ";
            // line 412
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "company_name", [], "any", false, false, true, 412), 412, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 424
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 427
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "tracking_number", [], "any", false, false, true, 427), 427, $this->source), 'widget');
            echo "
                                                    ";
            // line 428
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "tracking_number", [], "any", false, false, true, 428), 428, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 433
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "
                                                    <span class=\"badge bg-primary ms-1\">";
            // line 434
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 438
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "Delivery", [], "any", false, false, true, 438), 438, $this->source), 'widget');
            echo "
                                                    ";
            // line 439
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "Delivery", [], "any", false, false, true, 439), 439, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 447
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 450
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "shipping_delivery_date", [], "any", false, false, true, 450), 450, $this->source), 'widget');
            echo "
                                                    ";
            // line 451
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "shipping_delivery_date", [], "any", false, false, true, 451), 451, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 457
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 460
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "DeliveryTime", [], "any", false, false, true, 460), 460, $this->source), 'widget');
            echo "
                                                    ";
            // line 461
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "DeliveryTime", [], "any", false, false, true, 461), 461, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 467
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 470
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 470), "value", [], "any", false, false, true, 470), "shipping_date", [], "any", false, false, true, 470)) {
                // line 471
                echo "                                                        ";
                // line 472
                echo "                                                        <span>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 472), "value", [], "any", false, false, true, 472), "shipping_date", [], "any", false, false, true, 472), 472, $this->source)), "html", null, true);
                echo "</span>
                                                    ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 473
$context["shippingForm"], "vars", [], "any", false, false, true, 473), "value", [], "any", false, false, true, 473), "id", [], "any", false, false, true, 473)) {
                // line 474
                echo "                                                        ";
                // line 475
                echo "                                                        <!-- 出荷済にするボタン -->
                                                        <button type=\"button\" class=\"btn btn-ec-regular me-2 confirmationModal\" href=\"javascript:;\"
                                                                data-id=\"";
                // line 477
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 477), "value", [], "any", false, false, true, 477), "id", [], "any", false, false, true, 477), 477, $this->source), "html", null, true);
                echo "\" data-type=\"status\" data-bulk-update=\"false\"
                                                                data-update-status-id=\"";
                // line 478
                echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderStatus::DELIVERED"), "html", null, true);
                echo "\"
                                                                data-update-status-url=\"";
                // line 479
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 479), "value", [], "any", false, false, true, 479), "id", [], "any", false, false, true, 479)]), "html", null, true);
                echo "\"
                                                                data-preview-notify-mail-url=\"";
                // line 480
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 480), "value", [], "any", false, false, true, 480), "id", [], "any", false, false, true, 480)]), "html", null, true);
                echo "\"
                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 481
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            ";
                // line 483
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                echo "
                                                        </button>
                                                    ";
            } else {
                // line 486
                echo "                                                        ";
                // line 487
                echo "                                                    ";
            }
            // line 488
            echo "                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 493
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_update_date"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    <span>";
            // line 496
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 496), "value", [], "any", false, false, true, 496), "id", [], "any", false, false, true, 496)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 496), "value", [], "any", false, false, true, 496), "update_date", [], "any", false, false, true, 496)), "html", null, true))) : (print ("")));
            echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"row mb-2 align-items-center\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-user fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    ";
            // line 502
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    <span>";
            // line 505
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 505), "value", [], "any", false, false, true, 505), "id", [], "any", false, false, true, 505)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "vars", [], "any", false, false, true, 505), "value", [], "any", false, false, true, 505), "creator", [], "any", false, false, true, 505), "html", null, true))) : (print ("")));
            echo "</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 明細追加ボタン -->
                                    <div id=\"shipping-product_";
            // line 514
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 514), 514, $this->source), "html", null, true);
            echo "\" class=\"row justify-content-between mb-2\">
                                        <div class=\"col-6\">
                                            <!-- 商品を追加 -->
                                            <button class=\"btn btn-ec-regular me-2 addProduct-button\" type=\"button\" data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#addProduct\" data-shipping-no=\"";
            // line 518
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 518), 518, $this->source), "html", null, true);
            echo "\">
                                                ";
            // line 519
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "
                                            </button>
                                            <!-- その他の明細を追加 -->
                                            <a class=\"btn btn-ec-regular me-2 addOtherProduct-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\" data-shipping-no=\"";
            // line 522
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 522), 522, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
            echo "</a>
                                            ";
            // line 524
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItemsErrors", [], "any", false, false, true, 524), 524, $this->source), 'errors');
            echo "
                                        </div>
                                    </div>
                                    <!-- 明細 -->
                                    <div class=\"row\">
                                        <table id=\"table-form-field_";
            // line 529
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 529), 529, $this->source), "html", null, true);
            echo "\" class=\"table table-striped table-sm mb-0\"
                                               data-prototype=\"";
            // line 530
            ob_start();
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 530), "vars", [], "any", false, false, true, 530), "prototype", [], "any", false, false, true, 530)]);
            $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            echo twig_escape_filter($this->env, $___internal_parse_7_);
            echo "\">
                                            <thead class=\"table-active\">
                                            <tr class=\"text-nowrap\">
                                                <th class=\"pt-2 pb-2 ps-3\">";
            // line 533
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
            echo "</th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 535
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 538
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 541
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 544
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">";
            // line 547
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
            echo "</div>
                                                </th>
                                                <th class=\"pt-2 pb-2 pe-3\"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 553
            $context["shippingNo"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 553);
            // line 554
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "OrderItems", [], "any", false, false, true, 554));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
                // line 555
                echo "                                                ";
                $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 555), "data", [], "any", false, false, true, 555);
                // line 556
                echo "                                                <tr>
                                                    ";
                // line 558
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, true, 558), 558, $this->source), 'widget');
                echo "
                                                    ";
                // line 559
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, true, 559), 559, $this->source), 'widget');
                echo "
                                                    ";
                // line 560
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "point_rate", [], "any", false, false, true, 560), 560, $this->source), 'widget');
                echo "
                                                    ";
                // line 561
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, true, 561), 561, $this->source), 'widget');
                echo "
                                                    ";
                // line 562
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, true, 562), 562, $this->source), 'widget', ["type" => "hidden"]);
                echo "
                                                    <td class=\"align-middle w-25 ps-3\">
                                                        <p class=\"mb-0 fw-bold\">
                                                            ";
                // line 565
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 565, $this->source); })()), "OrderItemType", [], "any", false, false, true, 565), "isProduct", [], "any", false, false, true, 565)) {
                    // line 566
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 566, $this->source); })()), "product_name", [], "any", false, false, true, 566), 566, $this->source), "html", null, true);
                    echo "
                                                                ";
                    // line 567
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 567), 567, $this->source), 'widget', ["type" => "hidden"]);
                    echo "
                                                            ";
                } else {
                    // line 569
                    echo "                                                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 569), 569, $this->source), 'widget');
                    echo "
                                                            ";
                }
                // line 571
                echo "                                                        </p>
                                                        <span>
                                                            ";
                // line 573
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 573, $this->source); })()), "product_code", [], "any", false, false, true, 573), 573, $this->source), "html", null, true);
                echo "
                                                            ";
                // line 574
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 574, $this->source); })()), "class_category_name1", [], "any", false, false, true, 574))) {
                    // line 575
                    echo "                                                                / (
                                                                ";
                    // line 576
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 576, $this->source); })()), "class_name1", [], "any", false, false, true, 576), 576, $this->source), "html", null, true);
                    echo "：
                                                                ";
                    // line 577
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 577, $this->source); })()), "class_category_name1", [], "any", false, false, true, 577), 577, $this->source), "html", null, true);
                    echo "
                                                                ";
                    // line 578
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 578, $this->source); })()), "class_category_name2", [], "any", false, false, true, 578))) {
                        // line 579
                        echo "                                                                    /
                                                                    ";
                        // line 580
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 580, $this->source); })()), "class_name2", [], "any", false, false, true, 580), 580, $this->source), "html", null, true);
                        echo "：
                                                                    ";
                        // line 581
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 581, $this->source); })()), "class_category_name2", [], "any", false, false, true, 581), 581, $this->source), "html", null, true);
                        echo "
                                                                ";
                    }
                    // line 583
                    echo "                                                                )
                                                            ";
                }
                // line 585
                echo "                                                        </span>
                                                        ";
                // line 586
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, true, 586), 586, $this->source), 'errors');
                echo "
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col mt-3\">
                                                            ";
                // line 590
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 590), 590, $this->source), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                            <div class=\"text-end small\">(";
                // line 591
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 591, $this->source); })()), "TaxDisplayType", [], "any", false, false, true, 591), 591, $this->source), "html", null, true);
                echo ")</div>
                                                            ";
                // line 592
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, true, 592), 592, $this->source), 'errors');
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col-12 col-xl-8\">
                                                            ";
                // line 597
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 597), 597, $this->source), 'widget');
                echo "
                                                            ";
                // line 598
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, true, 598), 598, $this->source), 'errors');
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            ";
                // line 603
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 603, $this->source); })()), "tax_rate", [], "any", false, false, true, 603), 603, $this->source), "html", null, true);
                echo "%
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            ";
                // line 608
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 608, $this->source); })()), "tax_type", [], "any", false, false, true, 608), 608, $this->source), "html", null, true);
                echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            <span>";
                // line 613
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 613, $this->source); })()), "total_price", [], "any", false, false, true, 613), 613, $this->source)), "html", null, true);
                echo "</span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-end pe-3\">
                                                        <div class=\"row justify-content-end\">
                                                            <div class=\"col-auto text-center\">
                                                                <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                     data-bs-placement=\"top\" title=\"";
                // line 620
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 621
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 621), "id", [], "any", false, false, true, 621), 621, $this->source), "html", null, true);
                echo "\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- 削除確認モーダル -->
                                                                <div class=\"modal fade\" id=\"delete_";
                // line 626
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 626), "id", [], "any", false, false, true, 626), 626, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, true, 626), "id", [], "any", false, false, true, 626), 626, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 630
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                                </button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 636
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 636, $this->source); })()), "product_name", [], "any", false, false, true, 636)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 639
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a href=\"#shipping-product_";
                // line 640
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["shippingNo"]) || array_key_exists("shippingNo", $context) ? $context["shippingNo"] : (function () { throw new RuntimeError('Variable "shippingNo" does not exist.', 640, $this->source); })()), 640, $this->source), "html", null, true);
                echo "\" class=\"btn delete btn-ec-delete\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 650
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 出荷用メモ -->
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    ";
            // line 661
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "
                                                </label>
                                                <div class=\"col\">
                                                    ";
            // line 664
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "note", [], "any", false, false, true, 664), 664, $this->source), 'widget', ["attr" => ["rows" => 8]]);
            echo "
                                                    ";
            // line 665
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shippingForm"], "note", [], "any", false, false, true, 665), 665, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 674
        echo "                    <!-- 出荷先を追加 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <button id=\"addShipping\" type=\"button\" class=\"btn btn-ec-regular\">";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <!-- 受注一覧 -->
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 689, $this->source); })()), "id", [], "any", false, false, true, 689)]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <!-- 登録 -->
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-4\" id=\"btn_save\" name=\"mode\" value=\"register\">
                                    ";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "
                                </button>
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
        return "@admin/Order/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1351 => 700,  1339 => 691,  1334 => 689,  1318 => 676,  1314 => 674,  1291 => 665,  1287 => 664,  1281 => 661,  1268 => 650,  1250 => 640,  1246 => 639,  1240 => 636,  1231 => 630,  1222 => 626,  1214 => 621,  1210 => 620,  1200 => 613,  1192 => 608,  1184 => 603,  1176 => 598,  1172 => 597,  1164 => 592,  1160 => 591,  1156 => 590,  1149 => 586,  1146 => 585,  1142 => 583,  1137 => 581,  1133 => 580,  1130 => 579,  1128 => 578,  1124 => 577,  1120 => 576,  1117 => 575,  1115 => 574,  1111 => 573,  1107 => 571,  1101 => 569,  1096 => 567,  1091 => 566,  1089 => 565,  1083 => 562,  1079 => 561,  1075 => 560,  1071 => 559,  1066 => 558,  1063 => 556,  1060 => 555,  1055 => 554,  1053 => 553,  1044 => 547,  1038 => 544,  1032 => 541,  1026 => 538,  1020 => 535,  1015 => 533,  1006 => 530,  1002 => 529,  993 => 524,  987 => 522,  981 => 519,  977 => 518,  970 => 514,  958 => 505,  952 => 502,  943 => 496,  937 => 493,  930 => 488,  927 => 487,  925 => 486,  919 => 483,  914 => 481,  910 => 480,  906 => 479,  902 => 478,  898 => 477,  894 => 475,  892 => 474,  890 => 473,  885 => 472,  883 => 471,  881 => 470,  875 => 467,  866 => 461,  862 => 460,  856 => 457,  847 => 451,  843 => 450,  837 => 447,  826 => 439,  822 => 438,  815 => 434,  811 => 433,  803 => 428,  799 => 427,  793 => 424,  778 => 412,  774 => 411,  768 => 408,  759 => 402,  755 => 401,  748 => 397,  743 => 395,  731 => 386,  727 => 385,  719 => 380,  715 => 379,  707 => 374,  703 => 373,  695 => 368,  691 => 367,  687 => 366,  678 => 360,  673 => 358,  663 => 351,  659 => 350,  653 => 347,  649 => 346,  640 => 340,  635 => 338,  625 => 331,  621 => 330,  615 => 327,  611 => 326,  602 => 320,  597 => 318,  588 => 311,  585 => 310,  583 => 309,  577 => 306,  573 => 305,  569 => 304,  558 => 300,  555 => 299,  553 => 298,  551 => 297,  544 => 293,  535 => 287,  530 => 286,  524 => 282,  516 => 279,  512 => 278,  506 => 275,  497 => 269,  494 => 268,  488 => 265,  482 => 262,  473 => 256,  470 => 255,  468 => 254,  460 => 251,  455 => 249,  448 => 247,  445 => 246,  443 => 245,  434 => 241,  425 => 234,  408 => 233,  396 => 224,  390 => 221,  376 => 210,  369 => 206,  362 => 202,  356 => 199,  334 => 180,  320 => 169,  315 => 167,  311 => 166,  302 => 160,  292 => 153,  288 => 152,  282 => 150,  272 => 149,  259 => 145,  241 => 130,  218 => 110,  209 => 104,  197 => 94,  168 => 67,  145 => 47,  118 => 22,  108 => 21,  89 => 16,  70 => 15,  59 => 11,  57 => 19,  55 => 18,  53 => 13,  40 => 11,);
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

{% set menus = ['order', 'order_edit'] %}

{% block title %}{{ 'admin.order.shipping_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchProductModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>

    <script>
        // 商品追加
        \$('.addProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // その他明細追加
        \$('.addOtherProduct-button').on('click', function() {
            var no = \$(this).data('shipping-no');
            \$collectionHolder = \$('#table-form-field_' + no);
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#form_shippings_' + no + '_OrderItems_';
        })

        // 商品検索
        \$('#searchProductModalButton').on('click', function() {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: '{{ url('admin_order_search_product') }}',
                type: 'POST',
                dataType: 'html',
                data: {
                    'id': \$('#admin_search_product_id').val(),
                    'category_id': \$('#admin_search_product_category_id').val()
                }
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        });

        // その他明細
        \$('#addOrderItemType').on('show.bs.modal', function(e) {
            var list = \$('#searchOrderItemTypeList');
            list.children().remove();

            \$.ajax({
                url: '{{ url('admin_order_search_order_item_type') }}',
                type: 'POST',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchOrderItemTypeList').html(data);
            }).fail(function(data) {
                alert('search order item type failed.');
            });
        });

        \$(document).on('click', '.delete', function(e) {
            // 商品削除
            \$(this).parents('tr').remove();
            \$(\"#form1\").submit();

            return false;
        });

        \$(document).on('click', '.delete-shipping', function(e) {
            // お届け先削除
            \$(this).parents('div.card').remove();
            \$(\"#form1\").submit();

            return false;
        });

        {# TODO: 商品削除時に更新が走って画面上に行ってしまう。 #}
        // 計算結果の更新が押されたらページ内リンクさせる
        // \$('.btn').click(function() {
        //     var data = \$(this).data();
        //     if (data.link) {
        //         \$('#form1').attr('action', '#' + data.link).submit();
        //         return false;
        //     }
        // });

        // 配送業者選択時にお届け時間を設定
        var times = {{ shippingDeliveryTimes|raw }};

        \$(\"select[id\$='_Delivery']\").on('change', function() {
            var deliveryId = \$(this).val();
            var \$shippingDeliveryTime = \$(this).parents('.card-body').find(\"select[id\$='_DeliveryTime']\");
            \$shippingDeliveryTime.find('option').remove();
            \$shippingDeliveryTime.append(\$('<option></option>').val('').text('{{ 'admin.common.select__unspecified'|trans }}'));
            if (typeof(times[deliveryId]) !== 'undefined') {
                for (var timeId in times[deliveryId]) {
                    timeValue = times[deliveryId][timeId];
                    \$shippingDeliveryTime.append(\$('<option></option>')
                        .val(timeId)
                        .text(timeValue));
                }
            }
        });

        \$('#addShipping').on('click', function() {
            \$('#form_add_shipping').val(\"1\");
            \$(\"#form1\").submit();

            return false;
        })

        // 完了ボタン
        \$('#bulkChangeComplete').on('click', function() {
            location.href = '{{ url('admin_shipping_edit', { 'id': Order.id }) }}';
        });

        // PDF出力(単一)
        \$('.pdf-print').click(function() {
            window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
            return false;
        });

        // モーダル注意文言の削除
        \$('#bulkChange').on('click', function() {
            \$('.warning-message').css('display', 'none');
        })
    </script>

    {{ include('@admin/Order/confirmationModal_js.twig') }}

{% endblock javascript %}

{% block main %}
    <form name=\"form1\" id=\"form1\" action=\"{{ url('admin_shipping_edit', {id: Order.id}) }}\"
          method=\"post\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.add_shipping) }}
        <!-- 商品明細追加モーダル -->
        <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"addProduct\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'admin.order.add_product_item'|trans }}</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                        </button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_widget(searchProductModalForm.id, { attr : {'class': 'mb-3',  placeholder : 'admin.product.multi_search_label' }}) }}
                        {{ form_widget(searchProductModalForm.category_id) }}
                        <button type=\"button\" id=\"searchProductModalButton\"
                                class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                        <div id=\"searchProductModalList\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- その他明細追加モーダル -->
        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">{{ 'admin.order.add_other_item'|trans }}</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"searchOrderItemTypeList\"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 出荷済にするモーダル / 出荷メール送信モーダル -->
        <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\"><!--confirmationModal_js.twig--></h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p class=\"mb-4 modal-message\"><!--confirmationModal_js.twig--></p>
                        <p class=\"mb-4 warning-message\">{{ 'admin.order.bulk_action__confirm_message'|trans }}</p>
                        <ul id=\"bulkErrors\"></ul>
                        <div id=\"bulk-options\">
                            <div class=\"fw-bold mb-2 notificationMail\">{{ 'admin.order.to_shipped__confirm_send_mail'|trans }}</div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                <label class=\"form-check-label notificationMail\">
                                    {{ 'admin.order.to_shipped__confirm_send_mail_in_same_time'|trans }}
                                </label>
                            </div>
                            <div>
                                <div class=\"d-inline-block\" data-bs-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o fw-bold me-1\"></i><span class=\"fw-bold\">{{ 'メール詳細'|trans }}</span></a></div>
                                <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                    <pre></pre>
                                </div>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"display: none\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                        <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                        <!--完了ボタン-->
                        <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">{{ 'admin.common.close'|trans }}</button>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    {% for shippingForm in form.shippings %}
                        <div class=\"card rounded border-0 mb-4 h-adr\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <!-- 出荷情報 -->
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\">
                                            <span class=\"card-title\">{{ 'admin.order.shipping__card_title'|trans }}({{ loop.index }})</span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        {% if form.shippings|length > 1 %}
                                            <!-- 出荷が2つ以上ある場合は, 出荷の削除ボタンを表示する -->
                                            <a class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_shipping_{{ shippingForm.vars.id }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                {{ 'admin.order.delete_shipping'|trans }}
                                            </a>
                                            <div class=\"modal fade\" id=\"delete_shipping_{{ shippingForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_shipping_{{ shippingForm.vars.id }}\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        {% if shippingForm.OrderItems|length > 0 %}
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.order.delete_shipping_error__confirm_title'|trans }}</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">{{ 'admin.order.delete_shipping_error__confirm_message'|trans }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                            </div>
                                                        {% else %}
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">{{ 'admin.order.delete_shipping__confirm_message'|trans({ \"%num%\" : loop.index }) }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                <a href=\"#shipping-product_{{ loop.index0 }}\" class=\"btn delete-shipping btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <a data-bs-toggle=\"collapse\" href=\"#shipmentOverview_{{ loop.index0 }}\" aria-expanded=\"false\"
                                           aria-controls=\"shipmentOverview_{{ loop.index0 }}\">
                                            <i class=\"fa fa-angle-up fa-lg\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"shipmentOverview_{{ loop.index0 }}\">
                                <div class=\"card-body\">
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            {% if shippingForm.vars.value.id %}
                                                {# ボタンは登録済みの出荷のみ表示する #}
                                                <!-- 納品書を出力ボタン -->
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"{{ url('admin_order_export_pdf') }}?ids[]={{ shippingForm.vars.value.id }}\">{{ 'admin.order.output_delivery_note'|trans }}</a>
                                                <!-- 出荷メール送信ボタン -->
                                                <button type=\"button\" class=\"btn btn-ec-regular confirmationModal\"
                                                        data-type=\"mail\" data-bulk-update=\"false\"
                                                        data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: shippingForm.vars.value.id}) }}\"
                                                        data-notify-mail-url=\"{{ url('admin_shipping_notify_mail', { id: shippingForm.vars.value.id}) }}\">
                                                    {{ 'admin.order.shipping_mail_send'|trans }}
                                                </button>
                                            {% else %}
                                                {# 未登録の出荷 #}
                                            {% endif %}
                                        </div>
                                    </div>
                                    <!-- お届先情報 -->
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.name'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.name.name01) }}
                                                            {{ form_errors(shippingForm.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.name.name02) }}
                                                            {{ form_errors(shippingForm.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.kana'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.kana.kana01) }}
                                                            {{ form_errors(shippingForm.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.kana.kana02) }}
                                                            {{ form_errors(shippingForm.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.address'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col row align-items-center\">
                                                            <span class=\"col-auto\">{{ 'admin.common.postal_symbol'|trans }}</span>
                                                            <span class=\"col-auto ps-0\">{{ form_widget(shippingForm.postal_code) }}</span>
                                                            {{ form_errors(shippingForm.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.pref) }}
                                                            {{ form_errors(shippingForm.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.addr01) }}
                                                            {{ form_errors(shippingForm.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(shippingForm.address.addr02) }}
                                                            {{ form_errors(shippingForm.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.phone_number'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">
                                                        {{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.phone_number) }}
                                                    {{ form_errors(shippingForm.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.common.company_name'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.company_name) }}
                                                    {{ form_errors(shippingForm.company_name) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.tracking_number'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.tracking_number) }}
                                                    {{ form_errors(shippingForm.tracking_number) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.delivery_provider'|trans }}
                                                    <span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}
                                                    </span>
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.Delivery) }}
                                                    {{ form_errors(shippingForm.Delivery) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-calendar-check-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.delivery_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.shipping_delivery_date) }}
                                                    {{ form_errors(shippingForm.shipping_delivery_date) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-clock-o fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.delivery_time'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.DeliveryTime) }}
                                                    {{ form_errors(shippingForm.DeliveryTime) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-truck fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.order.shipping_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {% if shippingForm.vars.value.shipping_date %}
                                                        {# 登録済みの出荷で出荷日が設定されている場合は出荷日を表示する #}
                                                        <span>{{ shippingForm.vars.value.shipping_date|date_min }}</span>
                                                    {% elseif shippingForm.vars.value.id %}
                                                        {# 登録済みの出荷で出荷日が設定されていない場合 #}
                                                        <!-- 出荷済にするボタン -->
                                                        <button type=\"button\" class=\"btn btn-ec-regular me-2 confirmationModal\" href=\"javascript:;\"
                                                                data-id=\"{{ shippingForm.vars.value.id }}\" data-type=\"status\" data-bulk-update=\"false\"
                                                                data-update-status-id=\"{{ constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::DELIVERED') }}\"
                                                                data-update-status-url=\"{{ url('admin_shipping_update_order_status', { id: shippingForm.vars.value.id}) }}\"
                                                                data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: shippingForm.vars.value.id}) }}\"
                                                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.order.to_shipped'|trans }}\">
                                                            <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            {{ 'admin.order.to_shipped'|trans }}
                                                        </button>
                                                    {% else %}
                                                        {# 未登録の出荷 #}
                                                    {% endif %}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-refresh fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.common.last_update_date'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    <span>{{ shippingForm.vars.value.id ? shippingForm.vars.value.update_date|date_min }}</span>
                                                </div>
                                            </div>
                                            <div class=\"row mb-2 align-items-center\">
                                                <label class=\"col-3 col-form-label\">
                                                    <i class=\"fa fa-user fa-fw me-1\" aria-hidden=\"true\"></i>
                                                    {{ 'admin.common.last_updater'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    <span>{{ shippingForm.vars.value.id ? shippingForm.vars.value.creator }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 明細追加ボタン -->
                                    <div id=\"shipping-product_{{ loop.index0 }}\" class=\"row justify-content-between mb-2\">
                                        <div class=\"col-6\">
                                            <!-- 商品を追加 -->
                                            <button class=\"btn btn-ec-regular me-2 addProduct-button\" type=\"button\" data-bs-toggle=\"modal\"
                                                    data-bs-target=\"#addProduct\" data-shipping-no=\"{{ loop.index0 }}\">
                                                {{ 'admin.order.add_product_item'|trans }}
                                            </button>
                                            <!-- その他の明細を追加 -->
                                            <a class=\"btn btn-ec-regular me-2 addOtherProduct-button\" data-bs-toggle=\"modal\" data-bs-target=\"#addOrderItemType\" data-shipping-no=\"{{ loop.index0 }}\">{{ 'admin.order.add_other_item'|trans }}</a>
                                            {# 明細行のエラー表示 #}
                                            {{ form_errors(shippingForm.OrderItemsErrors) }}
                                        </div>
                                    </div>
                                    <!-- 明細 -->
                                    <div class=\"row\">
                                        <table id=\"table-form-field_{{ loop.index0 }}\" class=\"table table-striped table-sm mb-0\"
                                               data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': shippingForm.OrderItems.vars.prototype}) }}{% endapply %}\">
                                            <thead class=\"table-active\">
                                            <tr class=\"text-nowrap\">
                                                <th class=\"pt-2 pb-2 ps-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">{{ 'admin.order.amount'|trans }}</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">{{ 'admin.order.quantity'|trans }}</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">{{ 'admin.order.tax_rate'|trans }}</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">{{ 'admin.order.tax_type'|trans }}</div>
                                                </th>
                                                <th class=\"pt-2 pb-2\">
                                                    <div class=\"col-8\">{{ 'admin.order.subtotal'|trans }}</div>
                                                </th>
                                                <th class=\"pt-2 pb-2 pe-3\"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% set shippingNo = loop.index0 %}
                                            {% for orderItemForm in shippingForm.OrderItems %}
                                                {% set OrderItem = orderItemForm.vars.data %}
                                                <tr>
                                                    {# hidden values #}
                                                    {{ form_widget(orderItemForm.ProductClass) }}
                                                    {{ form_widget(orderItemForm.order_item_type) }}
                                                    {{ form_widget(orderItemForm.point_rate) }}
                                                    {{ form_widget(orderItemForm.tax_type) }}
                                                    {{ form_widget(orderItemForm.tax_rate, {'type': 'hidden'}) }}
                                                    <td class=\"align-middle w-25 ps-3\">
                                                        <p class=\"mb-0 fw-bold\">
                                                            {% if OrderItem.OrderItemType.isProduct %}
                                                                {{ OrderItem.product_name }}
                                                                {{ form_widget(orderItemForm.product_name, { 'type': 'hidden' }) }}
                                                            {% else %}
                                                                {{ form_widget(orderItemForm.product_name) }}
                                                            {% endif %}
                                                        </p>
                                                        <span>
                                                            {{ OrderItem.product_code }}
                                                            {% if OrderItem.class_category_name1 is not empty %}
                                                                / (
                                                                {{ OrderItem.class_name1 }}：
                                                                {{ OrderItem.class_category_name1 }}
                                                                {% if OrderItem.class_category_name2 is not empty %}
                                                                    /
                                                                    {{ OrderItem.class_name2 }}：
                                                                    {{ OrderItem.class_category_name2 }}
                                                                {% endif %}
                                                                )
                                                            {% endif %}
                                                        </span>
                                                        {{ form_errors(orderItemForm.product_name) }}
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col mt-3\">
                                                            {{ form_widget(orderItemForm.price, {'attr': { 'readonly': 'readonly' } }) }}
                                                            <div class=\"text-end small\">({{ OrderItem.TaxDisplayType }})</div>
                                                            {{ form_errors(orderItemForm.price) }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col-12 col-xl-8\">
                                                            {{ form_widget(orderItemForm.quantity) }}
                                                            {{ form_errors(orderItemForm.quantity) }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            {{ OrderItem.tax_rate }}%
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            {{ OrderItem.tax_type }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"col\">
                                                            <span>{{ OrderItem.total_price|price }}</span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-end pe-3\">
                                                        <div class=\"row justify-content-end\">
                                                            <div class=\"col-auto text-center\">
                                                                <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\"
                                                                     data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_{{ orderItemForm.vars.id }}\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- 削除確認モーダル -->
                                                                <div class=\"modal fade\" id=\"delete_{{ orderItemForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_{{ orderItemForm.vars.id }}\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                                </button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">{{ 'admin.order.delete_item__confirm_message'|trans({ \"%name%\" : OrderItem.product_name }) }}</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                                <a href=\"#shipping-product_{{ shippingNo }}\" class=\"btn delete btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"col-12\">
                                        <hr>
                                    </div>
                                    <!-- 出荷用メモ -->
                                    <div class=\"row\">
                                        <div class=\"col-12\">
                                            <div class=\"row mb-3\">
                                                <label class=\"col-3 col-form-label\">
                                                    {{ 'admin.order.shop_memo_for_shipped'|trans }}
                                                </label>
                                                <div class=\"col\">
                                                    {{ form_widget(shippingForm.note, { attr: { rows: 8 }}) }}
                                                    {{ form_errors(shippingForm.note) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <!-- 出荷先を追加 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <button id=\"addShipping\" type=\"button\" class=\"btn btn-ec-regular\">{{ 'admin.order.add_shipping'|trans }}</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <!-- 受注一覧 -->
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url(\"admin_order_edit\", {id: Order.id}) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.order.order_registration'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <!-- 登録 -->
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-4\" id=\"btn_save\" name=\"mode\" value=\"register\">
                                    {{ 'admin.common.registration'|trans }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Order/shipping.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Order\\shipping.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 233, "if" => 245, "apply" => 530);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 104, "length" => 245, "date_min" => 472, "price" => 613);
        static $functions = array("url" => 47, "include" => 145, "form_widget" => 152, "form_errors" => 327, "constant" => 478);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if', 'apply'],
                ['escape', 'trans', 'raw', 'length', 'date_min', 'price'],
                ['url', 'include', 'form_widget', 'form_errors', 'constant'],
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
