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

/* Product/detail.twig */
class __TwigTemplate_35c979f63e19165f0466d7b6a50cabb2 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/detail.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "    <script>
        if(`";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, true, 97), "query", [], "any", false, false, true, 97), "get", [0 => "customer_email"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "` != '' || `";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, true, 97), "query", [], "any", false, false, true, 97), "get", [0 => "customer_email"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "` != null){
            \$.ajax({
              type: \"GET\",
              url: \"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("custom_login");
        echo "\",
              data: {
                    customer_email: `";
        // line 102
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "request", [], "any", false, false, true, 102), "query", [], "any", false, false, true, 102), "get", [0 => "customer_email"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "`,
              },
              success: function (response) {
                  console.log(response);
              }
          });
        }
        eccube.classCategories = ";
        // line 109
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($this->sandbox->ensureToStringAllowed((isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 109, $this->source); })()), 109, $this->source));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 120)) {
            // line 121
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 122
            echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 122), "vars", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122), 122, $this->source));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 124
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 124)) {
            // line 125
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo ", ";
            echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 125), "vars", [], "any", false, false, true, 125), "value", [], "any", false, false, true, 125), 125, $this->source));
            echo ", null);
        ";
        }
        // line 127
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            // Core Web Vital の Cumulative Layout Shift(CLS)対策のため
            // img タグに width, height が付与されている.
            // 630px 未満の画面サイズでは縦横比が壊れるための対策
            // see https://github.com/EC-CUBE/ec-cube/pull/5023
            \$('.ec-grid2__cell').hide();
            var removeSize = function () {
                \$('.slide-item').height('');
                \$('.slide-item img')
                    .removeAttr('width')
                    .removeAttr('height')
                    .removeAttr('style');
            };
            var slickInitial = function(slick) {
                \$('.ec-grid2__cell').fadeIn(1500);
                var baseHeight = \$(slick.target).height();
                var baseWidth = \$(slick.target).width();
                var rate = baseWidth / baseHeight;

                \$('.slide-item').height(baseHeight * rate); // 余白を削除する
                // transform を使用することでCLSの影響を受けないようにする
                \$('.slide-item img')
                    .css(
                        {
                            'transform-origin': 'top left',
                            'transform': 'scaleY(' + rate + ')',
                            'transition': 'transform .1s'
                        }
                    );
                // 正しいサイズに近くなったら属性を解除する
                setTimeout(removeSize, 500);
            };
            \$('.item_visual').on('init', slickInitial);
            // リサイズ時は CLS の影響を受けないため属性を解除する
            \$(window).resize(removeSize);
            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 191)) {
            // line 192
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.product_class_unselected"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 200
        echo "
                ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 201)) {
            // line 202
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.product_class_unselected"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 210
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.invalid_quantity"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
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
                        url: \"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 247
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
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org/\",
        \"@type\": \"Product\",
        \"name\": \"";
        // line 267
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 267, $this->source); })()), "name", [], "any", false, false, true, 267), 267, $this->source), "html", null, true);
        echo "\",
        \"image\": [
            ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 269, $this->source); })()), "ProductImage", [], "any", false, false, true, 269));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 270
            echo "                \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "request", [], "any", false, false, true, 270), "schemeAndHttpHost", [], "any", false, false, true, 270), 270, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["img"], 270, $this->source), "save_image"), "html", null, true);
            echo "\"";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 270)) {
                echo ",";
            }
            // line 271
            echo "
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 273
            echo "                \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "request", [], "any", false, false, true, 273), "schemeAndHttpHost", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "        ],
        \"description\": \"";
        // line 276
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, true, 276)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, true, 276), 276, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 276, $this->source); })()), "description_detail", [], "any", false, false, true, 276), 276, $this->source))) : (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 276, $this->source); })()), "description_detail", [], "any", false, false, true, 276))), ["
" => "", "" => ""]), 0, 300), "html", null, true);
        echo "\",
        ";
        // line 277
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 277, $this->source); })()), "code_min", [], "any", false, false, true, 277)) {
            // line 278
            echo "        \"sku\": \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 278, $this->source); })()), "code_min", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
            echo "\",
        ";
        }
        // line 280
        echo "        \"offers\": {
            \"@type\": \"Offer\",
            \"url\": \"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 282, $this->source); })()), "id", [], "any", false, false, true, 282)]), "html", null, true);
        echo "\",
            \"priceCurrency\": \"";
        // line 283
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 283, $this->source); })()), "currency", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
        echo "\",
            \"price\": ";
        // line 284
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 284, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 284)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 284, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 284), "html", null, true))) : (print (0)));
        echo ",
            \"availability\": \"";
        // line 285
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 285, $this->source); })()), "stock_find", [], "any", false, false, true, 285)) ? ("InStock") : ("OutOfStock"));
        echo "\"
        }
    }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 291
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 292
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 298, $this->source); })()), "ProductImage", [], "any", false, false, true, 298));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 299
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 299, $this->source), "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 299)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 299, $this->source); })()), "name", [], "any", false, false, true, 299), "html", null, true))) : (print ("")));
            echo "\" width=\"550\" height=\"550\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 299) > 1)) {
                echo " loading=\"lazy\"";
            }
            echo "></div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 301
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\" alt=\"";
            ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 301)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 301, $this->source); })()), "name", [], "any", false, false, true, 301), "html", null, true))) : (print ("")));
            echo "\" width=\"550\" height=\"550\"></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 305, $this->source); })()), "ProductImage", [], "any", false, false, true, 305));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 306
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 306), 306, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->sandbox->ensureToStringAllowed($context["ProductImage"], 306, $this->source), "save_image"), "html", null, true);
            echo "\" alt=\"\" width=\"133\" height=\"133\" loading=\"lazy\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 314
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 315
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 315, $this->source); })()), "name", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 318
        echo "                    <ul class=\"ec-productRole__tags\">
                        ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 319, $this->source); })()), "Tags", [], "any", false, false, true, 319));
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 320
            echo "                            <li class=\"ec-productRole__tag tag_";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["Tag"], 320, $this->source), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "                    </ul>
                    ";
        // line 324
        echo "                    ";
        $context["categoryFound"] = false;
        // line 325
        echo "                    ";
        $context["regular_price"] = null;
        // line 326
        echo "                    ";
        $context["discount_price"] = null;
        // line 327
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 327, $this->source); })()), "ProductCategories", [], "any", false, false, true, 327))) {
            // line 328
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 328, $this->source); })()), "ProductCategories", [], "any", false, false, true, 328));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 329
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, true, 329), "path", [], "any", false, false, true, 329));
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 330
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 330) == 1)) {
                        // line 331
                        echo "                                    ";
                        $context["categoryFound"] = true;
                        // line 332
                        echo "                                ";
                    }
                    // line 333
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "                    ";
        }
        // line 336
        echo "                    ";
        if ( !twig_test_empty((isset($context["ticket_prices"]) || array_key_exists("ticket_prices", $context) ? $context["ticket_prices"] : (function () { throw new RuntimeError('Variable "ticket_prices" does not exist.', 336, $this->source); })()))) {
            // line 337
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ticket_prices"]) || array_key_exists("ticket_prices", $context) ? $context["ticket_prices"] : (function () { throw new RuntimeError('Variable "ticket_prices" does not exist.', 337, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket_price"]) {
                // line 338
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 338, $this->source); })()), "id", [], "any", false, false, true, 338) == twig_get_attribute($this->env, $this->source, $context["ticket_price"], "shop_item_id", [], "any", false, false, true, 338))) {
                    // line 339
                    echo "                                ";
                    $context["regular_price"] = twig_get_attribute($this->env, $this->source, $context["ticket_price"], "regular_price", [], "any", false, false, true, 339);
                    // line 340
                    echo "                                ";
                    $context["discount_price"] = twig_get_attribute($this->env, $this->source, $context["ticket_price"], "discount_price", [], "any", false, false, true, 340);
                    // line 341
                    echo "                            ";
                }
                // line 342
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket_price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "                    ";
        }
        // line 344
        echo "                    ";
        if ((isset($context["categoryFound"]) || array_key_exists("categoryFound", $context) ? $context["categoryFound"] : (function () { throw new RuntimeError('Variable "categoryFound" does not exist.', 344, $this->source); })())) {
            // line 345
            echo "                        ";
            if ((isset($context["is_paid_user"]) || array_key_exists("is_paid_user", $context) ? $context["is_paid_user"] : (function () { throw new RuntimeError('Variable "is_paid_user" does not exist.', 345, $this->source); })())) {
                // line 346
                echo "                            ";
                if ((isset($context["discount_price"]) || array_key_exists("discount_price", $context) ? $context["discount_price"] : (function () { throw new RuntimeError('Variable "discount_price" does not exist.', 346, $this->source); })())) {
                    // line 347
                    echo "                                <div class=\"ec-productRole__price\">
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">
                                            ";
                    // line 350
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["discount_price"]) || array_key_exists("discount_price", $context) ? $context["discount_price"] : (function () { throw new RuntimeError('Variable "discount_price" does not exist.', 350, $this->source); })()), 350, $this->source)), "html", null, true);
                    echo "
                                        </span>
                                        <span class=\"ec-price__tax\">";
                    // line 352
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                    </div>
                                </div>
                            ";
                } else {
                    // line 356
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 356, $this->source); })()), "hasProductClass", [], "any", false, false, true, 356)) {
                        // line 357
                        echo "<div class=\"ec-productRole__priceRegular\">
                                        ";
                        // line 358
                        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 358, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 358)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 358, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 358) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 358, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 358)))) {
                            // line 359
                            echo "                                            <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：<span class=\"price01-default\">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 359, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 359), 359, $this->source)), "html", null, true);
                            echo "</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">";
                            // line 360
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                        ";
                        } elseif (( !(null === twig_get_attribute($this->env, $this->source,                         // line 361
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 361, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 361)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 361, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 361)))) {
                            // line 362
                            echo "                                            <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：<span class=\"price01-default\">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 362, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 362), 362, $this->source)), "html", null, true);
                            echo "～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 362, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 362), 362, $this->source)), "html", null, true);
                            echo "</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">";
                            // line 363
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                        ";
                        }
                        // line 365
                        echo "                                    </div>
                                ";
                    } else {
                        // line 367
                        echo "                                    ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 367, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 367))) {
                            // line 368
                            echo "                                        <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 368, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 368), 368, $this->source)), "html", null, true);
                            echo "</span>
                                        <span class=\"ec-productRole__priceRegularTax\">";
                            // line 369
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 371
                        echo "                                ";
                    }
                    // line 372
                    echo "                                ";
                    // line 373
                    echo "                                <div class=\"ec-productRole__price\">
                                    ";
                    // line 374
                    if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 374, $this->source); })()), "hasProductClass", [], "any", false, false, true, 374)) {
                        // line 375
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 375, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 375) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 375, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 375))) {
                            // line 376
                            echo "                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">";
                            // line 377
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 377, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 377), 377, $this->source)), "html", null, true);
                            echo "</span>
                                                <span class=\"ec-price__tax\">";
                            // line 378
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                            </div>
                                        ";
                        } else {
                            // line 381
                            echo "                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">";
                            // line 382
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 382, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 382), 382, $this->source)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 382, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 382), 382, $this->source)), "html", null, true);
                            echo "</span>
                                                <span class=\"ec-price__tax\">";
                            // line 383
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                            </div>
                                        ";
                        }
                        // line 386
                        echo "                                    ";
                    } else {
                        // line 387
                        echo "                                        <div class=\"ec-price\">
                                            <span class=\"ec-price__price\">";
                        // line 388
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 388, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 388), 388, $this->source)), "html", null, true);
                        echo "</span>
                                            <span class=\"ec-price__tax\">";
                        // line 389
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 392
                    echo "                                </div>
                            ";
                }
                // line 394
                echo "                        ";
            } else {
                // line 395
                echo "                            ";
                if ((isset($context["regular_price"]) || array_key_exists("regular_price", $context) ? $context["regular_price"] : (function () { throw new RuntimeError('Variable "regular_price" does not exist.', 395, $this->source); })())) {
                    // line 396
                    echo "                                <div class=\"ec-productRole__price\">
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">
                                            ";
                    // line 399
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["regular_price"]) || array_key_exists("regular_price", $context) ? $context["regular_price"] : (function () { throw new RuntimeError('Variable "regular_price" does not exist.', 399, $this->source); })()), 399, $this->source)), "html", null, true);
                    echo "
                                        </span>
                                        <span class=\"ec-price__tax\">";
                    // line 401
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                    </div>
                                </div>
                            ";
                } else {
                    // line 405
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 405, $this->source); })()), "hasProductClass", [], "any", false, false, true, 405)) {
                        // line 406
                        echo "<div class=\"ec-productRole__priceRegular\">
                                        ";
                        // line 407
                        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 407, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 407)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 407, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 407) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 407, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 407)))) {
                            // line 408
                            echo "                                            <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：<span class=\"price01-default\">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 408, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 408), 408, $this->source)), "html", null, true);
                            echo "</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">";
                            // line 409
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                        ";
                        } elseif (( !(null === twig_get_attribute($this->env, $this->source,                         // line 410
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 410, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 410)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 410, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 410)))) {
                            // line 411
                            echo "                                            <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：<span class=\"price01-default\">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 411, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 411), 411, $this->source)), "html", null, true);
                            echo "～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 411, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 411), 411, $this->source)), "html", null, true);
                            echo "</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">";
                            // line 412
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                        ";
                        }
                        // line 414
                        echo "                                    </div>
                                ";
                    } else {
                        // line 416
                        echo "                                    ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 416, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 416))) {
                            // line 417
                            echo "                                        <span class=\"ec-productRole__priceRegularPrice\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                            echo "：";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 417, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 417), 417, $this->source)), "html", null, true);
                            echo "</span>
                                        <span class=\"ec-productRole__priceRegularTax\">";
                            // line 418
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 420
                        echo "                                ";
                    }
                    // line 421
                    echo "                                ";
                    // line 422
                    echo "                                <div class=\"ec-productRole__price\">
                                    ";
                    // line 423
                    if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 423, $this->source); })()), "hasProductClass", [], "any", false, false, true, 423)) {
                        // line 424
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 424, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 424) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 424, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 424))) {
                            // line 425
                            echo "                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">";
                            // line 426
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 426, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 426), 426, $this->source)), "html", null, true);
                            echo "</span>
                                                <span class=\"ec-price__tax\">";
                            // line 427
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                            </div>
                                        ";
                        } else {
                            // line 430
                            echo "                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">";
                            // line 431
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 431, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 431), 431, $this->source)), "html", null, true);
                            echo " ～ ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 431, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 431), 431, $this->source)), "html", null, true);
                            echo "</span>
                                                <span class=\"ec-price__tax\">";
                            // line 432
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                            echo "</span>
                                            </div>
                                        ";
                        }
                        // line 435
                        echo "                                    ";
                    } else {
                        // line 436
                        echo "                                        <div class=\"ec-price\">
                                            <span class=\"ec-price__price\">";
                        // line 437
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 437, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 437), 437, $this->source)), "html", null, true);
                        echo "</span>
                                            <span class=\"ec-price__tax\">";
                        // line 438
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 441
                    echo "                                </div>
                            ";
                }
                // line 443
                echo "                        ";
            }
            // line 444
            echo "                    ";
        } else {
            // line 445
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 445, $this->source); })()), "hasProductClass", [], "any", false, false, true, 445)) {
                // line 446
                echo "<div class=\"ec-productRole__priceRegular\">
                                ";
                // line 447
                if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 447, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 447)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 447, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 447) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 447, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 447)))) {
                    // line 448
                    echo "                                    <span class=\"ec-productRole__priceRegularPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                    echo "：<span class=\"price01-default\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 448, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 448), 448, $this->source)), "html", null, true);
                    echo "</span></span>
                                    <span class=\"ec-productRole__priceRegularTax\">";
                    // line 449
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                ";
                } elseif (( !(null === twig_get_attribute($this->env, $this->source,                 // line 450
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 450, $this->source); })()), "getPrice01Min", [], "any", false, false, true, 450)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 450, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 450)))) {
                    // line 451
                    echo "                                    <span class=\"ec-productRole__priceRegularPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                    echo "：<span class=\"price01-default\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 451, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 451), 451, $this->source)), "html", null, true);
                    echo "～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 451, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, true, 451), 451, $this->source)), "html", null, true);
                    echo "</span></span>
                                    <span class=\"ec-productRole__priceRegularTax\">";
                    // line 452
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 454
                echo "                            </div>
                        ";
            } else {
                // line 456
                echo "                            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 456, $this->source); })()), "getPrice01Max", [], "any", false, false, true, 456))) {
                    // line 457
                    echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 457, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, true, 457), 457, $this->source)), "html", null, true);
                    echo "</span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                    // line 458
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 460
                echo "                        ";
            }
            // line 461
            echo "                        ";
            // line 462
            echo "                        <div class=\"ec-productRole__price\">
                            ";
            // line 463
            if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 463, $this->source); })()), "hasProductClass", [], "any", false, false, true, 463)) {
                // line 464
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 464, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 464) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 464, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 464))) {
                    // line 465
                    echo "                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">";
                    // line 466
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 466, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 466), 466, $this->source)), "html", null, true);
                    echo "</span>
                                        <span class=\"ec-price__tax\">";
                    // line 467
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                    </div>
                                ";
                } else {
                    // line 470
                    echo "                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">";
                    // line 471
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 471, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 471), 471, $this->source)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 471, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, true, 471), 471, $this->source)), "html", null, true);
                    echo "</span>
                                        <span class=\"ec-price__tax\">";
                    // line 472
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
                                    </div>
                                ";
                }
                // line 475
                echo "                            ";
            } else {
                // line 476
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price\">";
                // line 477
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 477, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, true, 477), 477, $this->source)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 478
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 481
            echo "                        </div>
                    ";
        }
        // line 483
        echo "                    ";
        // line 484
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 484, $this->source); })()), "code_min", [], "any", false, false, true, 484))) {
            // line 485
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 486
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.code"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 486, $this->source); })()), "code_min", [], "any", false, false, true, 486), 486, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 486, $this->source); })()), "code_min", [], "any", false, false, true, 486) != twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 486, $this->source); })()), "code_max", [], "any", false, false, true, 486))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 486, $this->source); })()), "code_max", [], "any", false, false, true, 486), 486, $this->source), "html", null, true);
            }
            echo "</span>
                        </div>
                    ";
        }
        // line 489
        echo "                    ";
        // line 490
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 490, $this->source); })()), "ProductCategories", [], "any", false, false, true, 490))) {
            // line 491
            echo "                        <div class=\"ec-productRole__category\">
                            <div>";
            // line 492
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.related_category"), "html", null, true);
            echo "</div>
                            ";
            // line 493
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 493, $this->source); })()), "ProductCategories", [], "any", false, false, true, 493));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 494
                echo "                                <ul>
                                    <li>
                                        ";
                // line 496
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, true, 496), "path", [], "any", false, false, true, 496));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 497
                    echo "                                            <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, true, 497), 497, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, true, 497), 497, $this->source), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 497) == false)) {
                        // line 498
                        echo "                                            <span>＞</span>";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 500
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            echo "                        </div>
                    ";
        }
        // line 505
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 505, $this->source); })()), "id", [], "any", false, false, true, 505)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 506
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 506, $this->source); })()), "stock_find", [], "any", false, false, true, 506)) {
            // line 507
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 508
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, true, 508)) {
                // line 509
                echo "                                    <div class=\"ec-select\">
                                        ";
                // line 510
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 510, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 510), 510, $this->source), 'row');
                echo "
                                        ";
                // line 511
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "classcategory_id1", [], "any", false, false, true, 511), 511, $this->source), 'errors');
                echo "
                                    </div>
                                    ";
                // line 513
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, true, 513)) {
                    // line 514
                    echo "                                        <div class=\"ec-select\">
                                            ";
                    // line 515
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 515), 515, $this->source), 'row');
                    echo "
                                            ";
                    // line 516
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 516, $this->source); })()), "classcategory_id2", [], "any", false, false, true, 516), 516, $this->source), 'errors');
                    echo "
                                        </div>
                                    ";
                }
                // line 519
                echo "                                ";
            }
            // line 520
            echo "                                <div class=\"ec-numberInput\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
            echo "</span>
                                    ";
            // line 521
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 521, $this->source); })()), "quantity", [], "any", false, false, true, 521), 521, $this->source), 'widget');
            echo "
                                    ";
            // line 522
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "quantity", [], "any", false, false, true, 522), 522, $this->source), 'errors');
            echo "
                                </div>
                            </div>
                            ";
            // line 525
            if ((isset($context["categoryFound"]) || array_key_exists("categoryFound", $context) ? $context["categoryFound"] : (function () { throw new RuntimeError('Variable "categoryFound" does not exist.', 525, $this->source); })())) {
                // line 526
                echo "                                ";
                if ((isset($context["hashgoru_user"]) || array_key_exists("hashgoru_user", $context) ? $context["hashgoru_user"] : (function () { throw new RuntimeError('Variable "hashgoru_user" does not exist.', 526, $this->source); })())) {
                    // line 527
                    echo "                                    <div class=\"ec-productRole__btn\">
                                        <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                            ";
                    // line 529
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart"), "html", null, true);
                    echo "
                                        </button>
                                    </div>
                                ";
                }
                // line 533
                echo "                            ";
            } else {
                // line 534
                echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                        ";
                // line 536
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart"), "html", null, true);
                echo "
                                    </button>
                                </div>
                            ";
            }
            // line 540
            echo "                        ";
        } else {
            // line 541
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 543
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.out_of_stock"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 547
        echo "
                        ";
        // line 548
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 548, $this->source); })()), 548, $this->source), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <div class=\"ec-modal-overlay\">
                            <div class=\"ec-modal-wrap\">
                                <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></span>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_cart_complete"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <span class=\"ec-inlineBtn--cancel\">";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.continue"), "html", null, true);
        echo "</span>
                                        <a href=\"";
        // line 558
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.go_to_cart"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 564
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 564, $this->source); })()), "option_favorite_product", [], "any", false, false, true, 564)) {
            // line 565
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 565, $this->source); })()), "id", [], "any", false, false, true, 565)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"ec-productRole__btn\">
                                ";
            // line 567
            if (((isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 567, $this->source); })()) == false)) {
                // line 568
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        ";
                // line 569
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_favorite"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 572
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">";
                // line 573
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.add_favorite_alrady"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 576
            echo "                            </div>
                        </form>
                    ";
        }
        // line 579
        echo "                    <div class=\"ec-productRole__description\">";
        echo twig_nl2br($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 579, $this->source); })()), "description_detail", [], "any", false, false, true, 579), 579, $this->source));
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 584
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 584, $this->source); })()), "freearea", [], "any", false, false, true, 584)) {
            // line 585
            echo "             <div class=\"ec-productRole__description\">
                 ";
            // line 586
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, twig_template_from_string($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 586, $this->source); })()), "freearea", [], "any", false, false, true, 586), 586, $this->source)), array(), true, false, true);
            echo "
            </div>
        ";
        }
        // line 589
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1401 => 589,  1395 => 586,  1392 => 585,  1390 => 584,  1381 => 579,  1376 => 576,  1370 => 573,  1367 => 572,  1361 => 569,  1358 => 568,  1356 => 567,  1350 => 565,  1348 => 564,  1337 => 558,  1333 => 557,  1327 => 554,  1323 => 553,  1315 => 548,  1312 => 547,  1305 => 543,  1301 => 541,  1298 => 540,  1291 => 536,  1287 => 534,  1284 => 533,  1277 => 529,  1273 => 527,  1270 => 526,  1268 => 525,  1262 => 522,  1258 => 521,  1253 => 520,  1250 => 519,  1244 => 516,  1240 => 515,  1237 => 514,  1235 => 513,  1230 => 511,  1226 => 510,  1223 => 509,  1221 => 508,  1218 => 507,  1216 => 506,  1211 => 505,  1207 => 503,  1199 => 500,  1184 => 498,  1175 => 497,  1158 => 496,  1154 => 494,  1150 => 493,  1146 => 492,  1143 => 491,  1140 => 490,  1138 => 489,  1126 => 486,  1123 => 485,  1120 => 484,  1118 => 483,  1114 => 481,  1108 => 478,  1104 => 477,  1101 => 476,  1098 => 475,  1092 => 472,  1086 => 471,  1083 => 470,  1077 => 467,  1073 => 466,  1070 => 465,  1068 => 464,  1066 => 463,  1063 => 462,  1061 => 461,  1058 => 460,  1053 => 458,  1046 => 457,  1043 => 456,  1039 => 454,  1034 => 452,  1025 => 451,  1023 => 450,  1019 => 449,  1012 => 448,  1010 => 447,  1007 => 446,  1004 => 445,  1001 => 444,  998 => 443,  994 => 441,  988 => 438,  984 => 437,  981 => 436,  978 => 435,  972 => 432,  966 => 431,  963 => 430,  957 => 427,  953 => 426,  950 => 425,  948 => 424,  946 => 423,  943 => 422,  941 => 421,  938 => 420,  933 => 418,  926 => 417,  923 => 416,  919 => 414,  914 => 412,  905 => 411,  903 => 410,  899 => 409,  892 => 408,  890 => 407,  887 => 406,  884 => 405,  877 => 401,  872 => 399,  867 => 396,  864 => 395,  861 => 394,  857 => 392,  851 => 389,  847 => 388,  844 => 387,  841 => 386,  835 => 383,  829 => 382,  826 => 381,  820 => 378,  816 => 377,  813 => 376,  811 => 375,  809 => 374,  806 => 373,  804 => 372,  801 => 371,  796 => 369,  789 => 368,  786 => 367,  782 => 365,  777 => 363,  768 => 362,  766 => 361,  762 => 360,  755 => 359,  753 => 358,  750 => 357,  747 => 356,  740 => 352,  735 => 350,  730 => 347,  727 => 346,  724 => 345,  721 => 344,  718 => 343,  712 => 342,  709 => 341,  706 => 340,  703 => 339,  700 => 338,  695 => 337,  692 => 336,  689 => 335,  683 => 334,  677 => 333,  674 => 332,  671 => 331,  668 => 330,  663 => 329,  658 => 328,  655 => 327,  652 => 326,  649 => 325,  646 => 324,  643 => 322,  632 => 320,  628 => 319,  625 => 318,  620 => 315,  617 => 314,  610 => 308,  591 => 306,  574 => 305,  570 => 303,  559 => 301,  537 => 299,  519 => 298,  511 => 292,  501 => 291,  486 => 285,  482 => 284,  478 => 283,  474 => 282,  470 => 280,  464 => 278,  462 => 277,  457 => 276,  454 => 275,  444 => 273,  430 => 271,  422 => 270,  404 => 269,  399 => 267,  376 => 247,  366 => 240,  336 => 213,  331 => 210,  322 => 204,  318 => 202,  316 => 201,  313 => 200,  304 => 194,  300 => 192,  298 => 191,  232 => 127,  224 => 125,  222 => 124,  217 => 122,  214 => 121,  212 => 120,  198 => 109,  188 => 102,  183 => 100,  175 => 97,  172 => 96,  162 => 95,  75 => 16,  65 => 15,  54 => 11,  52 => 13,  39 => 11,);
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

{% block stylesheet %}
    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
{% endblock %}

{% block javascript %}
    <script>
        if(`{{ app.request.query.get('customer_email') }}` != '' || `{{ app.request.query.get('customer_email') }}` != null){
            \$.ajax({
              type: \"GET\",
              url: \"{{ url('custom_login') }}\",
              data: {
                    customer_email: `{{ app.request.query.get('customer_email') }}`,
              },
              success: function (response) {
                  console.log(response);
              }
          });
        }
        eccube.classCategories = {{ class_categories_as_json(Product)|raw }};

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        {% if form.classcategory_id2 is defined %}
        fnSetClassCategories(
            \$('#form1'), {{ form.classcategory_id2.vars.value|json_encode|raw }}
        );
        {% elseif form.classcategory_id1 is defined %}
        eccube.checkStock(\$('#form1'), {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);
        {% endif %}
    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            // Core Web Vital の Cumulative Layout Shift(CLS)対策のため
            // img タグに width, height が付与されている.
            // 630px 未満の画面サイズでは縦横比が壊れるための対策
            // see https://github.com/EC-CUBE/ec-cube/pull/5023
            \$('.ec-grid2__cell').hide();
            var removeSize = function () {
                \$('.slide-item').height('');
                \$('.slide-item img')
                    .removeAttr('width')
                    .removeAttr('height')
                    .removeAttr('style');
            };
            var slickInitial = function(slick) {
                \$('.ec-grid2__cell').fadeIn(1500);
                var baseHeight = \$(slick.target).height();
                var baseWidth = \$(slick.target).width();
                var rate = baseWidth / baseHeight;

                \$('.slide-item').height(baseHeight * rate); // 余白を削除する
                // transform を使用することでCLSの影響を受けないようにする
                \$('.slide-item img')
                    .css(
                        {
                            'transform-origin': 'top left',
                            'transform': 'scaleY(' + rate + ')',
                            'transition': 'transform .1s'
                        }
                    );
                // 正しいサイズに近くなったら属性を解除する
                setTimeout(removeSize, 500);
            };
            \$('.item_visual').on('init', slickInitial);
            // リサイズ時は CLS の影響を受けないため属性を解除する
            \$(window).resize(removeSize);
            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                {% if form.classcategory_id1 is defined %}
                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('{{ 'front.product.product_class_unselected'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                {% endif %}

                {% if form.classcategory_id2 is defined %}
                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('{{ 'front.product.product_class_unselected'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                {% endif %}

                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('{{ 'front.product.invalid_quantity'|trans }}');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
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
                        url: \"{{ url('block_cart') }}\",
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
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org/\",
        \"@type\": \"Product\",
        \"name\": \"{{ Product.name }}\",
        \"image\": [
            {% for img in Product.ProductImage %}
                \"{{ app.request.schemeAndHttpHost }}{{ asset(img, 'save_image') }}\"{% if not loop.last %},{% endif %}

            {% else %}
                \"{{ app.request.schemeAndHttpHost }}{{ asset(''|no_image_product, 'save_image') }}\"
            {% endfor %}
        ],
        \"description\": \"{{ Product.description_list | default(Product.description_detail) | replace({'\\n': '', '\\r': ''}) | slice(0,300) }}\",
        {% if Product.code_min %}
        \"sku\": \"{{ Product.code_min }}\",
        {% endif %}
        \"offers\": {
            \"@type\": \"Offer\",
            \"url\": \"{{ url('product_detail', {'id': Product.id}) }}\",
            \"priceCurrency\": \"{{ eccube_config.currency }}\",
            \"price\": {{ Product.getPrice02IncTaxMin ? Product.getPrice02IncTaxMin : 0}},
            \"availability\": \"{{ Product.stock_find ? \"InStock\" : \"OutOfStock\" }}\"
        }
    }
    </script>
{% endblock %}

{% block main %}
    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slide-item\"><img src=\"{{ asset(ProductImage, 'save_image') }}\" alt=\"{{ loop.first ? Product.name : '' }}\" width=\"550\" height=\"550\"{% if loop.index > 1 %} loading=\"lazy\"{% endif %}></div>
                        {% else %}
                            <div class=\"slide-item\"><img src=\"{{ asset(''|no_image_product, 'save_image') }}\" alt=\"{{ loop.first ? Product.name : '' }}\" width=\"550\" height=\"550\"></div>
                        {% endfor %}
                    </div>
                    <div class=\"item_nav\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slideThumb\" data-index=\"{{ loop.index0 }}\"><img src=\"{{ asset(ProductImage, 'save_image') }}\" alt=\"\" width=\"133\" height=\"133\" loading=\"lazy\"></div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    {# 商品名 #}
                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">{{ Product.name }}</h2>
                    </div>
                    {# タグ #}
                    <ul class=\"ec-productRole__tags\">
                        {% for Tag in Product.Tags %}
                            <li class=\"ec-productRole__tag tag_{{ Tag.id }}\">{{ Tag }}</li>
                        {% endfor %}
                    </ul>
                    {# 通常価格 #}
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
                    {% if categoryFound %}
                        {% if is_paid_user %}
                            {% if discount_price %}
                                <div class=\"ec-productRole__price\">
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">
                                            {{ discount_price|price }}
                                        </span>
                                        <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                    </div>
                                </div>
                            {% else %}
                                {% if Product.hasProductClass -%}
                                    <div class=\"ec-productRole__priceRegular\">
                                        {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                                            <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                        {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                                            <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    {% if Product.getPrice01Max is not null %}
                                        <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
                                        <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                    {% endif %}
                                {% endif %}
                                {# 販売価格 #}
                                <div class=\"ec-productRole__price\">
                                    {% if Product.hasProductClass -%}
                                        {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                                <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                            </div>
                                        {% else %}
                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                                                <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                            </div>
                                        {% endif %}
                                    {% else %}
                                        <div class=\"ec-price\">
                                            <span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                            <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                        {% else %}
                            {% if regular_price %}
                                <div class=\"ec-productRole__price\">
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">
                                            {{ regular_price|price }}
                                        </span>
                                        <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                    </div>
                                </div>
                            {% else %}
                                {% if Product.hasProductClass -%}
                                    <div class=\"ec-productRole__priceRegular\">
                                        {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                                            <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                        {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                                            <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
                                            <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    {% if Product.getPrice01Max is not null %}
                                        <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
                                        <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                    {% endif %}
                                {% endif %}
                                {# 販売価格 #}
                                <div class=\"ec-productRole__price\">
                                    {% if Product.hasProductClass -%}
                                        {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                                <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                            </div>
                                        {% else %}
                                            <div class=\"ec-price\">
                                                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                                                <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                            </div>
                                        {% endif %}
                                    {% else %}
                                        <div class=\"ec-price\">
                                            <span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                            <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                        {% endif %}
                    {% else %}
                        {% if Product.hasProductClass -%}
                            <div class=\"ec-productRole__priceRegular\">
                                {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                                    <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                                    <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                                    <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
                                    <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                                {% endif %}
                            </div>
                        {% else %}
                            {% if Product.getPrice01Max is not null %}
                                <span class=\"ec-productRole__priceRegularPrice\">{{ 'front.product.normal_price'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
                                <span class=\"ec-productRole__priceRegularTax\">{{ 'common.tax_include'|trans }}</span>
                            {% endif %}
                        {% endif %}
                        {# 販売価格 #}
                        <div class=\"ec-productRole__price\">
                            {% if Product.hasProductClass -%}
                                {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                        <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                    </div>
                                {% else %}
                                    <div class=\"ec-price\">
                                        <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                                        <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                    <span class=\"ec-price__tax\">{{ 'common.tax_include'|trans }}</span>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                    {# 商品コード #}
                    {% if Product.code_min is not empty %}
                        <div class=\"ec-productRole__code\">
                            {{ 'front.product.code'|trans }}： <span class=\"product-code-default\">{{ Product.code_min }}{% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}</span>
                        </div>
                    {% endif %}
                    {# 関連カテゴリ #}
                    {% if Product.ProductCategories is not empty %}
                        <div class=\"ec-productRole__category\">
                            <div>{{ 'front.product.related_category'|trans }}</div>
                            {% for ProductCategory in Product.ProductCategories %}
                                <ul>
                                    <li>
                                        {% for Category in ProductCategory.Category.path %}
                                            <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a> {%- if loop.last == false %}
                                            <span>＞</span>{% endif -%}
                                        {% endfor %}
                                    </li>
                                </ul>
                            {% endfor %}
                        </div>
                    {% endif %}
                    <form action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\" id=\"form1\" name=\"form1\">
                        {% if Product.stock_find %}
                            <div class=\"ec-productRole__actions\">
                                {% if form.classcategory_id1 is defined %}
                                    <div class=\"ec-select\">
                                        {{ form_row(form.classcategory_id1) }}
                                        {{ form_errors(form.classcategory_id1) }}
                                    </div>
                                    {% if form.classcategory_id2 is defined %}
                                        <div class=\"ec-select\">
                                            {{ form_row(form.classcategory_id2) }}
                                            {{ form_errors(form.classcategory_id2) }}
                                        </div>
                                    {% endif %}
                                {% endif %}
                                <div class=\"ec-numberInput\"><span>{{ 'common.quantity'|trans }}</span>
                                    {{ form_widget(form.quantity) }}
                                    {{ form_errors(form.quantity) }}
                                </div>
                            </div>
                            {% if categoryFound %}
                                {% if hashgoru_user %}
                                    <div class=\"ec-productRole__btn\">
                                        <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                            {{ 'front.product.add_cart'|trans }}
                                        </button>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
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

                        {{ form_rest(form) }}
                    </form>
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
                    {% if BaseInfo.option_favorite_product %}
                        <form action=\"{{ url('product_add_favorite', {id:Product.id}) }}\" method=\"post\">
                            <div class=\"ec-productRole__btn\">
                                {% if is_favorite == false %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        {{ 'front.product.add_favorite'|trans }}
                                    </button>
                                {% else %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">{{ 'front.product.add_favorite_alrady'|trans }}
                                    </button>
                                {% endif %}
                            </div>
                        </form>
                    {% endif %}
                    <div class=\"ec-productRole__description\">{{ Product.description_detail|raw|nl2br }}
                    </div>
                </div>
            </div>
        </div>
        {% if Product.freearea %}
             <div class=\"ec-productRole__description\">
                 {{ include(template_from_string(Product.freearea), sandboxed = true) }}
            </div>
        {% endif %}
    </div>
{% endblock %}", "Product/detail.twig", "F:\\laragon\\www\\shop\\app\\template\\default\\Product\\detail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 120, "for" => 269);
        static $filters = array("escape" => 97, "raw" => 109, "json_encode" => 122, "trans" => 194, "no_image_product" => 273, "slice" => 276, "replace" => 276, "default" => 276, "price" => 350, "nl2br" => 579);
        static $functions = array("url" => 100, "class_categories_as_json" => 109, "asset" => 270, "form_row" => 510, "form_errors" => 511, "form_widget" => 521, "form_rest" => 548, "include" => 586, "template_from_string" => 586);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'raw', 'json_encode', 'trans', 'no_image_product', 'slice', 'replace', 'default', 'price', 'nl2br'],
                ['url', 'class_categories_as_json', 'asset', 'form_row', 'form_errors', 'form_widget', 'form_rest', 'include', 'template_from_string'],
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
