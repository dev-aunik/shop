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

/* Product/list.twig */
class __TwigTemplate_9274ee778c873908000f535969e656ab extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/list.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        eccube.productsClassCategories = {
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 19
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 19), 19, $this->source), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed($context["Product"], 19, $this->source));
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 19) == false)) {
                echo ", ";
            }
            // line 20
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.invalid_quantity"), "html", null, true);
        echo "');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').text(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: '";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart_error"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 101
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 101, $this->source); })()), "category_id", [], "any", false, false, true, 101), "vars", [], "any", false, false, true, 101), "errors", [], "any", false, false, true, 101)) > 0)) {
            // line 102
            echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.search__category_not_found"), "html", null, true);
            echo "</p>
        </div>
    ";
        } else {
            // line 106
            echo "        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 108, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 109
                echo "                    <input type=\"hidden\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 109), "id", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "\"
                           name=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 110), "full_name", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "\"
                           ";
                // line 111
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111))) {
                    echo "value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, true, 111), "value", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo "/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.all_category"), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 118
            if ( !(null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 118, $this->source); })()))) {
                // line 119
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 119, $this->source); })()), "path", [], "any", false, false, true, 119));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                    // line 120
                    echo "                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item";
                    // line 121
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 121)) {
                        echo "--active";
                    }
                    echo "\"><a
                                        href=\"";
                    // line 122
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Path"], "id", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Path"], "name", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                    ";
            }
            // line 126
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 126, $this->source); })()), "vars", [], "any", false, false, true, 126), "value", [], "any", false, false, true, 126) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 126, $this->source); })()), "vars", [], "any", false, false, true, 126), "value", [], "any", false, false, true, 126), "name", [], "any", false, false, true, 126))) {
                // line 127
                echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.search_result__keyword", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 128, $this->source); })()), "vars", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), "name", [], "any", false, false, true, 128)]), "html", null, true);
                echo "</li>
                    ";
            }
            // line 130
            echo "                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "totalItemCount", [], "any", false, false, true, 134) > 0)) {
                // line 135
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.search_result__detail", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 135, $this->source); })()), "totalItemCount", [], "any", false, false, true, 135)]);
                echo "
                    ";
            } else {
                // line 137
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.search__product_not_found"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 139
            echo "                </div>
                ";
            // line 140
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()), "totalItemCount", [], "any", false, false, true, 140) > 0)) {
                // line 141
                echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                // line 143
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 143, $this->source); })()), "disp_number", [], "any", false, false, true, 143), 143, $this->source), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                echo "
                            ";
                // line 144
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 144, $this->source); })()), "orderby", [], "any", false, false, true, 144), 144, $this->source), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 148
            echo "            </div>
        </div>
        ";
            // line 150
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()), "totalItemCount", [], "any", false, false, true, 150) > 0)) {
                // line 151
                echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 153, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                    // line 154
                    echo "                        ";
                    $context["categoryFound"] = false;
                    // line 155
                    echo "                        ";
                    $context["regular_price"] = null;
                    // line 156
                    echo "                        ";
                    $context["discount_price"] = null;
                    // line 157
                    echo "                        ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Product"], "ProductCategories", [], "any", false, false, true, 157))) {
                        // line 158
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Product"], "ProductCategories", [], "any", false, false, true, 158));
                        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                            // line 159
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, true, 159), "path", [], "any", false, false, true, 159));
                            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                                // line 160
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 160) == 1)) {
                                    // line 161
                                    echo "                                        ";
                                    $context["categoryFound"] = true;
                                    // line 162
                                    echo "                                    ";
                                }
                                // line 163
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 164
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 165
                        echo "                        ";
                    }
                    // line 166
                    echo "                        ";
                    if ( !twig_test_empty((isset($context["ticket_prices"]) || array_key_exists("ticket_prices", $context) ? $context["ticket_prices"] : (function () { throw new RuntimeError('Variable "ticket_prices" does not exist.', 166, $this->source); })()))) {
                        // line 167
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["ticket_prices"]) || array_key_exists("ticket_prices", $context) ? $context["ticket_prices"] : (function () { throw new RuntimeError('Variable "ticket_prices" does not exist.', 167, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["ticket_price"]) {
                            // line 168
                            echo "                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 168) == twig_get_attribute($this->env, $this->source, $context["ticket_price"], "shop_item_id", [], "any", false, false, true, 168))) {
                                // line 169
                                echo "                                    ";
                                $context["regular_price"] = twig_get_attribute($this->env, $this->source, $context["ticket_price"], "regular_price", [], "any", false, false, true, 169);
                                // line 170
                                echo "                                    ";
                                $context["discount_price"] = twig_get_attribute($this->env, $this->source, $context["ticket_price"], "discount_price", [], "any", false, false, true, 170);
                                // line 171
                                echo "                                ";
                            }
                            // line 172
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket_price'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 173
                        echo "                        ";
                    }
                    // line 174
                    echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 175)]), "html", null, true);
                    echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, true, 177), 177, $this->source)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 177) > 5)) {
                        echo " loading=\"lazy\"";
                    }
                    echo ">
                                </p>
                                <p>";
                    // line 179
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                    echo "</p>
                                ";
                    // line 180
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, true, 180)) {
                        // line 181
                        echo "                                    <p>";
                        echo twig_nl2br($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, true, 181), 181, $this->source));
                        echo "</p>
                                ";
                    }
                    // line 183
                    echo "                                <p class=\"price02-default\">
                                    ";
                    // line 184
                    if ((isset($context["categoryFound"]) || array_key_exists("categoryFound", $context) ? $context["categoryFound"] : (function () { throw new RuntimeError('Variable "categoryFound" does not exist.', 184, $this->source); })())) {
                        // line 185
                        echo "                                        ";
                        if ((isset($context["is_paid_user"]) || array_key_exists("is_paid_user", $context) ? $context["is_paid_user"] : (function () { throw new RuntimeError('Variable "is_paid_user" does not exist.', 185, $this->source); })())) {
                            // line 186
                            echo "                                            ";
                            if ((isset($context["discount_price"]) || array_key_exists("discount_price", $context) ? $context["discount_price"] : (function () { throw new RuntimeError('Variable "discount_price" does not exist.', 186, $this->source); })())) {
                                // line 187
                                echo "                                                ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["discount_price"]) || array_key_exists("discount_price", $context) ? $context["discount_price"] : (function () { throw new RuntimeError('Variable "discount_price" does not exist.', 187, $this->source); })()), 187, $this->source)), "html", null, true);
                                echo "
                                            ";
                            } else {
                                // line 189
                                echo "                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 189)) {
                                    // line 190
                                    echo "                                                    ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 190) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 190))) {
                                        // line 191
                                        echo "                                                        ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 191), 191, $this->source)), "html", null, true);
                                        echo "
                                                    ";
                                    } else {
                                        // line 193
                                        echo "                                                        ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 193), 193, $this->source)), "html", null, true);
                                        echo " ～ ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 193), 193, $this->source)), "html", null, true);
                                        echo "
                                                    ";
                                    }
                                    // line 195
                                    echo "                                                ";
                                } else {
                                    // line 196
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 196), 196, $this->source)), "html", null, true);
                                    echo "
                                                ";
                                }
                                // line 198
                                echo "                                            ";
                            }
                            // line 199
                            echo "                                        ";
                        } else {
                            // line 200
                            echo "                                            ";
                            if ((isset($context["regular_price"]) || array_key_exists("regular_price", $context) ? $context["regular_price"] : (function () { throw new RuntimeError('Variable "regular_price" does not exist.', 200, $this->source); })())) {
                                // line 201
                                echo "                                                ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["regular_price"]) || array_key_exists("regular_price", $context) ? $context["regular_price"] : (function () { throw new RuntimeError('Variable "regular_price" does not exist.', 201, $this->source); })()), 201, $this->source)), "html", null, true);
                                echo "
                                            ";
                            } else {
                                // line 203
                                echo "                                                ";
                                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 203)) {
                                    // line 204
                                    echo "                                                    ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 204) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 204))) {
                                        // line 205
                                        echo "                                                        ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 205), 205, $this->source)), "html", null, true);
                                        echo "
                                                    ";
                                    } else {
                                        // line 207
                                        echo "                                                        ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 207), 207, $this->source)), "html", null, true);
                                        echo " ～ ";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 207), 207, $this->source)), "html", null, true);
                                        echo "
                                                    ";
                                    }
                                    // line 209
                                    echo "                                                ";
                                } else {
                                    // line 210
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 210), 210, $this->source)), "html", null, true);
                                    echo "
                                                ";
                                }
                                // line 212
                                echo "                                            ";
                            }
                            // line 213
                            echo "                                        ";
                        }
                        // line 214
                        echo "                                    ";
                    } else {
                        echo "    
                                        ";
                        // line 215
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, true, 215)) {
                            // line 216
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, true, 216) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, true, 216))) {
                                // line 217
                                echo "                                                ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 217), 217, $this->source)), "html", null, true);
                                echo "
                                            ";
                            } else {
                                // line 219
                                echo "                                                ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 219), 219, $this->source)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, true, 219), 219, $this->source)), "html", null, true);
                                echo "
                                            ";
                            }
                            // line 221
                            echo "                                        ";
                        } else {
                            // line 222
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, true, 222), 222, $this->source)), "html", null, true);
                            echo "
                                        ";
                        }
                        // line 224
                        echo "                                    ";
                    }
                    // line 225
                    echo "                                </p>
                            </a>

                            ";
                    // line 228
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, true, 228)) {
                        // line 229
                        echo "                                ";
                        $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 229, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 229), [], "array", false, false, true, 229);
                        // line 230
                        echo "                                <form name=\"form";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
                        echo "\" id=\"productForm";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
                        echo "\" action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 230)]), "html", null, true);
                        echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                        // line 232
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 232)) {
                            // line 233
                            echo "                                            <div class=\"ec-select\">
                                                ";
                            // line 234
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 234), 234, $this->source), 'widget');
                            echo "
                                                ";
                            // line 235
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 235), 235, $this->source), 'errors');
                            echo "
                                            </div>
                                            ";
                            // line 237
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 237)) {
                                // line 238
                                echo "                                                <div class=\"ec-select\">
                                                    ";
                                // line 239
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 239), 239, $this->source), 'widget');
                                echo "
                                                    ";
                                // line 240
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 240), 240, $this->source), 'errors');
                                echo "
                                                </div>
                                            ";
                            }
                            // line 243
                            echo "                                        ";
                        }
                        // line 244
                        echo "                                        <div class=\"ec-numberInput\"><span>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
                        echo "</span>
                                            ";
                        // line 245
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "quantity", [], "any", false, false, true, 245), 245, $this->source), 'widget', ["attr" => ["class" => "quantity"]]);
                        echo "
                                            ";
                        // line 246
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "quantity", [], "any", false, false, true, 246), 246, $this->source), 'errors');
                        echo "
                                        </div>
                                    </div>
                                    ";
                        // line 249
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), 249, $this->source), 'rest');
                        echo "
                                </form>
                                ";
                        // line 251
                        if ((isset($context["categoryFound"]) || array_key_exists("categoryFound", $context) ? $context["categoryFound"] : (function () { throw new RuntimeError('Variable "categoryFound" does not exist.', 251, $this->source); })())) {
                            // line 252
                            echo "                                    ";
                            if ((isset($context["hashgoru_user"]) || array_key_exists("hashgoru_user", $context) ? $context["hashgoru_user"] : (function () { throw new RuntimeError('Variable "hashgoru_user" does not exist.', 252, $this->source); })())) {
                                // line 253
                                echo "                                        <div class=\"ec-productRole__btn\">
                                            <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                                // line 254
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                                echo "\" form=\"productForm";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                                echo "\">
                                                ";
                                // line 255
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart"), "html", null, true);
                                echo " 
                                            </button>
                                        </div>
                                    ";
                            }
                            // line 259
                            echo "                                ";
                        } else {
                            // line 260
                            echo "                                    <div class=\"ec-productRole__btn\">
                                        <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                            // line 261
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                            echo "\" form=\"productForm";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                            echo "\">
                                            ";
                            // line 262
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart"), "html", null, true);
                            echo " 
                                        </button>
                                    </div>
                                ";
                        }
                        // line 266
                        echo "                            ";
                    } else {
                        // line 267
                        echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                        // line 269
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.out_of_stock"), "html", null, true);
                        echo "
                                    </button>
                                </div>
                            ";
                    }
                    // line 273
                    echo "                        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <div class=\"ec-modal-overlay\">
                    <div class=\"ec-modal-wrap\">
                        <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                // line 280
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                echo "\" alt=\"\"/></span></span>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart_complete"), "html", null, true);
                echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <span class=\"ec-inlineBtn--cancel\">";
                // line 284
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.continue"), "html", null, true);
                echo "</span>
                                <a href=\"";
                // line 285
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
                echo "\" class=\"ec-inlineBtn--action\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.go_to_cart"), "html", null, true);
                echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                ";
                // line 292
                $this->loadTemplate("pager.twig", "Product/list.twig", 292)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 292, $this->source); })()), "paginationData", [], "any", false, false, true, 292)]));
                // line 293
                echo "            </div>
        ";
            }
            // line 295
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Product/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  825 => 295,  821 => 293,  819 => 292,  807 => 285,  803 => 284,  797 => 281,  793 => 280,  786 => 275,  771 => 273,  764 => 269,  760 => 267,  757 => 266,  750 => 262,  744 => 261,  741 => 260,  738 => 259,  731 => 255,  725 => 254,  722 => 253,  719 => 252,  717 => 251,  712 => 249,  706 => 246,  702 => 245,  697 => 244,  694 => 243,  688 => 240,  684 => 239,  681 => 238,  679 => 237,  674 => 235,  670 => 234,  667 => 233,  665 => 232,  655 => 230,  652 => 229,  650 => 228,  645 => 225,  642 => 224,  636 => 222,  633 => 221,  625 => 219,  619 => 217,  616 => 216,  614 => 215,  609 => 214,  606 => 213,  603 => 212,  597 => 210,  594 => 209,  586 => 207,  580 => 205,  577 => 204,  574 => 203,  568 => 201,  565 => 200,  562 => 199,  559 => 198,  553 => 196,  550 => 195,  542 => 193,  536 => 191,  533 => 190,  530 => 189,  524 => 187,  521 => 186,  518 => 185,  516 => 184,  513 => 183,  507 => 181,  505 => 180,  501 => 179,  490 => 177,  485 => 175,  482 => 174,  479 => 173,  473 => 172,  470 => 171,  467 => 170,  464 => 169,  461 => 168,  456 => 167,  453 => 166,  450 => 165,  444 => 164,  438 => 163,  435 => 162,  432 => 161,  429 => 160,  424 => 159,  419 => 158,  416 => 157,  413 => 156,  410 => 155,  407 => 154,  390 => 153,  386 => 151,  384 => 150,  380 => 148,  373 => 144,  369 => 143,  365 => 141,  363 => 140,  360 => 139,  354 => 137,  348 => 135,  346 => 134,  340 => 130,  335 => 128,  332 => 127,  329 => 126,  326 => 125,  305 => 122,  299 => 121,  296 => 120,  278 => 119,  276 => 118,  269 => 116,  264 => 113,  252 => 111,  248 => 110,  243 => 109,  239 => 108,  235 => 106,  229 => 103,  226 => 102,  223 => 101,  213 => 100,  186 => 82,  176 => 75,  145 => 47,  117 => 21,  103 => 20,  95 => 19,  78 => 18,  74 => 16,  64 => 15,  53 => 11,  51 => 13,  38 => 11,);
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

{% set body_class = 'product_page' %}

{% block javascript %}
    <script>
        eccube.productsClassCategories = {
            {% for Product in pagination %}
            \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product)|raw }}{% if loop.last == false %}, {% endif %}
            {% endfor %}
        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('{{ 'front.product.invalid_quantity'|trans }}');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').text(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: '{{ url('block_cart') }}',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('{{ 'front.product.add_cart_error'|trans }}');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-wrap').on('click', function(e) {
            // モーダル内の処理は外側にバブリングさせない
            e.stopPropagation();
        });
        \$('.ec-modal-overlay, .ec-modal, .ec-modal-close, .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
{% endblock %}

{% block main %}
    {% if search_form.category_id.vars.errors|length > 0 %}
        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">{{ 'front.product.search__category_not_found'|trans }}</p>
        </div>
    {% else %}
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                {% for item in search_form %}
                    <input type=\"hidden\" id=\"{{ item.vars.id }}\"
                           name=\"{{ item.vars.full_name }}\"
                           {% if item.vars.value is not empty %}value=\"{{ item.vars.value }}\" {% endif %}/>
                {% endfor %}
            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"{{ url('product_list') }}\">{{ 'front.product.all_category'|trans }}</a>
                    </li>
                    {% if Category is not null %}
                        {% for Path in Category.path %}
                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item{% if loop.last %}--active{% endif %}\"><a
                                        href=\"{{ url('product_list') }}?category_id={{ Path.id }}\">{{ Path.name }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                    {% if search_form.vars.value and search_form.vars.value.name %}
                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">{{ 'front.product.search_result__keyword'|trans({ '%name%': search_form.vars.value.name }) }}</li>
                    {% endif %}
                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    {% if pagination.totalItemCount > 0 %}
                        {{ 'front.product.search_result__detail'|trans({ '%count%': pagination.totalItemCount })|raw }}
                    {% else %}
                        <span>{{ 'front.product.search__product_not_found'|trans }}</span>
                    {% endif %}
                </div>
                {% if pagination.totalItemCount > 0 %}
                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            {{ form_widget(search_form.disp_number, {'id': '', 'attr': {'class': 'disp-number'}}) }}
                            {{ form_widget(search_form.orderby, {'id': '', 'attr': {'class': 'order-by'}}) }}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        {% if pagination.totalItemCount > 0 %}
            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    {% for Product in pagination %}
                        {% set categoryFound = false %}
                        {% set regular_price = null %}
                        {% set discount_price = null %}
                        {% if Product.ProductCategories is not empty %}
                            {% for ProductCategory in Product.ProductCategories %}
                                {% for Category in ProductCategory.Category.path %}
                                    {% if Category.id == 1 %}
                                        {% set categoryFound = true %}
                                    {% endif %}
                                {% endfor %}
                            {% endfor %}
                        {% endif %}
                        {% if ticket_prices is not empty %}
                            {% for ticket_price in ticket_prices %}
                                {% if Product.id == ticket_price.shop_item_id %}
                                    {% set regular_price = ticket_price.regular_price %}
                                    {% set discount_price = ticket_price.discount_price %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\" {% if loop.index > 5 %} loading=\"lazy\"{% endif %}>
                                </p>
                                <p>{{ Product.name }}</p>
                                {% if Product.description_list %}
                                    <p>{{ Product.description_list|raw|nl2br }}</p>
                                {% endif %}
                                <p class=\"price02-default\">
                                    {% if categoryFound %}
                                        {% if is_paid_user %}
                                            {% if discount_price %}
                                                {{ discount_price|price }}
                                            {% else %}
                                                {% if Product.hasProductClass %}
                                                    {% if Product.getPrice02Min == Product.getPrice02Max %}
                                                        {{ Product.getPrice02IncTaxMin|price }}
                                                    {% else %}
                                                        {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                                    {% endif %}
                                                {% else %}
                                                    {{ Product.getPrice02IncTaxMin|price }}
                                                {% endif %}
                                            {% endif %}
                                        {% else %}
                                            {% if regular_price %}
                                                {{ regular_price|price }}
                                            {% else %}
                                                {% if Product.hasProductClass %}
                                                    {% if Product.getPrice02Min == Product.getPrice02Max %}
                                                        {{ Product.getPrice02IncTaxMin|price }}
                                                    {% else %}
                                                        {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                                    {% endif %}
                                                {% else %}
                                                    {{ Product.getPrice02IncTaxMin|price }}
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% else %}    
                                        {% if Product.hasProductClass %}
                                            {% if Product.getPrice02Min == Product.getPrice02Max %}
                                                {{ Product.getPrice02IncTaxMin|price }}
                                            {% else %}
                                                {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                            {% endif %}
                                        {% else %}
                                            {{ Product.getPrice02IncTaxMin|price }}
                                        {% endif %}
                                    {% endif %}
                                </p>
                            </a>

                            {% if Product.stock_find %}
                                {% set form = forms[Product.id] %}
                                <form name=\"form{{ Product.id }}\" id=\"productForm{{ Product.id }}\" action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        {% if form.classcategory_id1 is defined %}
                                            <div class=\"ec-select\">
                                                {{ form_widget(form.classcategory_id1) }}
                                                {{ form_errors(form.classcategory_id1) }}
                                            </div>
                                            {% if form.classcategory_id2 is defined %}
                                                <div class=\"ec-select\">
                                                    {{ form_widget(form.classcategory_id2) }}
                                                    {{ form_errors(form.classcategory_id2) }}
                                                </div>
                                            {% endif %}
                                        {% endif %}
                                        <div class=\"ec-numberInput\"><span>{{ 'common.quantity'|trans }}</span>
                                            {{ form_widget(form.quantity, {'attr': {'class': 'quantity'}}) }}
                                            {{ form_errors(form.quantity) }}
                                        </div>
                                    </div>
                                    {{ form_rest(form) }}
                                </form>
                                {% if categoryFound %}
                                    {% if hashgoru_user %}
                                        <div class=\"ec-productRole__btn\">
                                            <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"{{ Product.id }}\" form=\"productForm{{ Product.id }}\">
                                                {{ 'front.product.add_cart'|trans }} 
                                            </button>
                                        </div>
                                    {% endif %}
                                {% else %}
                                    <div class=\"ec-productRole__btn\">
                                        <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"{{ Product.id }}\" form=\"productForm{{ Product.id }}\">
                                            {{ 'front.product.add_cart'|trans }} 
                                        </button>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        {{ 'front.product.out_of_stock'|trans }}
                                    </button>
                                </div>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"ec-modal\">
                <div class=\"ec-modal-overlay\">
                    <div class=\"ec-modal-wrap\">
                        <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span></span>
                        <div id=\"ec-modal-header\" class=\"text-center\">{{ 'front.product.add_cart_complete'|trans }}</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <span class=\"ec-inlineBtn--cancel\">{{ 'front.product.continue'|trans }}</span>
                                <a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'common.go_to_cart'|trans }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
            </div>
        {% endif %}
    {% endif %}
{% endblock %}", "Product/list.twig", "F:\\laragon\\www\\shop\\app\\template\\default\\Product\\list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 18, "if" => 19, "include" => 292);
        static $filters = array("escape" => 19, "raw" => 19, "trans" => 47, "length" => 101, "no_image_product" => 177, "nl2br" => 181, "price" => 187);
        static $functions = array("class_categories_as_json" => 19, "url" => 75, "form_widget" => 143, "asset" => 177, "form_errors" => 235, "form_rest" => 249);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'raw', 'trans', 'length', 'no_image_product', 'nl2br', 'price'],
                ['class_categories_as_json', 'url', 'form_widget', 'asset', 'form_errors', 'form_rest'],
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
