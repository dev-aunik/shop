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

/* Shopping/confirm.twig */
class __TwigTemplate_3f3d2761ed3f575c6df149f18a6ff78b extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "    <script type=\"text/javascript\" src=\"https://credit.j-payment.co.jp/gateway/js/CPToken.js\"></script>
    <script>
    function execPurchase(resultCode, errMsg) {
      \$('#js_check_msg_area').hide();
      if (resultCode != \"Success\") {
        window.alert(errMsg);
      } else {
          \$.ajax({
              type: \"POST\",
              url: \"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("robotpayment_excute");
        echo "\",
              data: {
                    tkn: \$('#tkn').val(),
                    total_amount: `";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 27, $this->source); })()), "payment_total", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "`,
              },
              success: function (response) {
                  console.log(response);
                  if(response.success){
                      if(response.response[2]){
                        \$('#payment_status').val('paid');
                        \$('#shopping-form').submit();
                      }
                      else{
                          \$('#js_check_msg_area').html(`Some thing went wrong from api gateway`);
                          \$('#js_check_msg_area').show();
                      }
                  }
                  else{
                    \$('#js_check_msg_area').html(response.message);
                      \$('#js_check_msg_area').show();
                  }
              },
              error: function (response) {
                \$('#js_check_msg_area').html(`Backend not returning values`);
                \$('#js_check_msg_area').show();
              }
          });
      }
    }
    function doPurchase() {
      CPToken.CardInfo(
          {
            aid: '127655',
          },
          execPurchase
       );
    }
    </script>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 65
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.confirm_title"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 75
        $context["step"] = 1;
        // line 76
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 77
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 77, $this->source); })()), 77, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 77, $this->source); })()) + 1);
        // line 78
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__cart_items"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 82
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 83
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 84
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 84, $this->source); })()), 84, $this->source), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 84, $this->source); })()) + 1);
            // line 85
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__customer_info"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 90
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 91, $this->source); })()), 91, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 91, $this->source); })()) + 1);
        // line 92
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__order"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 97, $this->source); })()), 97, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 97, $this->source); })()) + 1);
        // line 98
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__confirm"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 103
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 103, $this->source); })()), 103, $this->source), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 103, $this->source); })()) + 1);
        // line 104
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__complete"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_checkout");
        echo "\">
    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "_token", [], "any", false, false, true, 113), 113, $this->source), 'widget');
        echo "
    <input type=\"hidden\" id=\"payment_status\" name=\"payment_status\"></input>
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.customer_info"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.name.prefix"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 122, $this->source); })()), "name01", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 122, $this->source); })()), "name02", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.name.suffix"), "html", null, true);
        echo "</p>
                    <p class=\"ec-halfInput\">";
        // line 123
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 123, $this->source); })()), "kana01", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 123, $this->source); })()), "kana02", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 124
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 124, $this->source); })()), "companyName", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-zipInput\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 125, $this->source); })()), "postal_code", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 126
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 126, $this->source); })()), "pref", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 126, $this->source); })()), "addr01", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 126, $this->source); })()), "addr02", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">";
        // line 127
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 127, $this->source); })()), "phone_number", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 128
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 128, $this->source); })()), "email", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.delivery_info"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 135, $this->source); })()), "shippings", [], "any", false, false, true, 135));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 136
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 136);
            // line 137
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 138
            echo "                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, true, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 141
                echo "                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 143))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, true, 143), "MainListImage", [], "any", false, false, true, 143)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                echo "\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>";
                // line 145
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.reduced_tax_rate_symbol"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                        ";
                // line 146
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 146)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 146), "classCategory1", [], "any", false, false, true, 146))) {
                    // line 147
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 147), "classCategory1", [], "any", false, false, true, 147), "className", [], "any", false, false, true, 147), "name", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 147), "classCategory1", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 149
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 149)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 149), "classCategory2", [], "any", false, false, true, 149))) {
                    // line 150
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 150), "classCategory2", [], "any", false, false, true, 150), "className", [], "any", false, false, true, 150), "name", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, true, 150), "classCategory2", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 152
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, true, 152), 152, $this->source)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, true, 152), 152, $this->source)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal__with_separator"), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, true, 152), 152, $this->source)), "html", null, true);
                echo "</span></p>
                                    </div>
                                </div>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        </ul>
                        <p>";
            // line 158
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 158, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.reduced_tax_rate_messeage"), "html", null, true))) : (print ("")));
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.name.prefix"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.name.suffix"), "html", null, true);
            echo "</p>
                        <p>";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "</p>
                        <p>";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.delivery_provider"), "html", null, true);
            echo "</label>
                                ";
            // line 169
            $context["delivery_fee"] = 0;
            // line 170
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "order_items", [], "any", false, false, true, 170), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isDeliveryFee", [], "any", false, false, true, 170); }));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 171
                echo "                                    ";
                $context["delivery_fee"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 171);
                // line 172
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 173, $this->source); })()), "Shippings", [], "any", false, false, true, 173), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 173, $this->source); })()), [], "array", false, false, true, 173), "Delivery", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed((isset($context["delivery_fee"]) || array_key_exists("delivery_fee", $context) ? $context["delivery_fee"] : (function () { throw new RuntimeError('Variable "delivery_fee" does not exist.', 173, $this->source); })()), 173, $this->source)), "html", null, true);
            echo ")
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.delivery_date"), "html", null, true);
            echo "</label>
                                ";
            // line 177
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 177, $this->source); })()), "Shippings", [], "any", false, false, true, 177), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 177, $this->source); })()), [], "array", false, false, true, 177), "shipping_delivery_date", [], "any", false, false, true, 177)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 177, $this->source); })()), "Shippings", [], "any", false, false, true, 177), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 177, $this->source); })()), [], "array", false, false, true, 177), "shipping_delivery_date", [], "any", false, false, true, 177), 177, $this->source))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.delivery_time"), "html", null, true);
            echo "</label>
                                ";
            // line 181
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 181, $this->source); })()), "Shippings", [], "any", false, false, true, 181), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 181, $this->source); })()), [], "array", false, false, true, 181), "shipping_delivery_time", [], "any", false, false, true, 181)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 181, $this->source); })()), "Shippings", [], "any", false, false, true, 181), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 181, $this->source); })()), [], "array", false, false, true, 181), "shipping_delivery_time", [], "any", false, false, true, 181)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.payment_info"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
        // line 192
        $context["charge"] = 0;
        // line 193
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 193, $this->source); })()), "order_items", [], "any", false, false, true, 193), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, true, 193); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 194
            echo "                        ";
            $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 194);
            // line 195
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                    ";
        // line 197
        echo "                    ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 197, $this->source); })()), "Payment", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 200, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 200) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 200, $this->source); })()), "Customer", [], "any", false, false, true, 200)))) {
            // line 201
            echo "            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.point_info"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
            // line 206
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 206, $this->source); })()), "use_point", [], "any", false, false, true, 206), 206, $this->source)), "html", null, true);
            echo " pt
                </div>
            </div>
            ";
        }
        // line 210
        echo "            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.message_info"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-input\">
                    ";
        // line 215
        echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 215, $this->source); })()), "message", [], "any", false, false, true, 215), 215, $this->source), "html", null, true));
        echo "
                </div>
            </div>
            ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["activeTradeLaws"]) || array_key_exists("activeTradeLaws", $context) ? $context["activeTradeLaws"] : (function () { throw new RuntimeError('Variable "activeTradeLaws" does not exist.', 218, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (twig_get_attribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 218, $this->source); })()), "name", [], "any", false, false, true, 218) && twig_get_attribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 218, $this->source); })()), "description", [], "any", false, false, true, 218)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["activeTradeLaw"]) {
            // line 219
            echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
            // line 221
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "name", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
            echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
            // line 224
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["activeTradeLaw"], "description", [], "any", false, false, true, 224), 224, $this->source);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activeTradeLaw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 233, $this->source); })()), "subtotal", [], "any", false, false, true, 233), 233, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.charge"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 237, $this->source); })()), "charge", [], "any", false, false, true, 237), 237, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delivery_fee"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 241, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, true, 241), 241, $this->source)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 243
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 243, $this->source); })()), "taxable_discount", [], "any", false, false, true, 243) < 0)) {
            // line 244
            echo "                <dl class=\"ec-totalBox__spec\">
                    <dt>";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.discount"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 246, $this->source); })()), "taxable_discount", [], "any", false, false, true, 246), 246, $this->source)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 249
        echo "                <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 249, $this->source); })()), "taxable_total", [], "any", false, false, true, 249), 249, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 250, $this->source); })()), "tax_free_discount_items", [], "any", false, false, true, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 251
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 252
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, true, 253), 253, $this->source)), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.payment_total"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 256, $this->source); })()), "payment_total", [], "any", false, false, true, 256), 256, $this->source)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 257, $this->source); })()), "total_by_tax_rate", [], "any", false, false, true, 257));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 258
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed($context["total"], 260, $this->source)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_amount"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 260, $this->source); })()), "tax_by_tax_rate", [], "any", false, false, true, 260), $context["rate"], [], "array", false, false, true, 260), 260, $this->source)), "html", null, true);
            echo ")</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 263, $this->source); })()), "isOptionPoint", [], "any", false, false, true, 263) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 263, $this->source); })()), "Customer", [], "any", false, false, true, 263)))) {
            // line 264
            echo "                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.use_point"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 267
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 267, $this->source); })()), "UsePoint", [], "any", false, false, true, 267), 267, $this->source)), "html", null, true);
            echo " pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">";
            // line 270
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.add_point"), "html", null, true);
            echo "</span></dt>
                        <dd><span class=\"ec-font-bold\">";
            // line 271
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 271, $this->source); })()), "AddPoint", [], "any", false, false, true, 271), 271, $this->source)), "html", null, true);
            echo " pt</span></dd>
                    </dl>
                </div>
                ";
        }
        // line 275
        echo "                <div class=\"ec-totalBox__btn\">
                    ";
        // line 276
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 276, $this->source); })()), "Payment", [], "any", false, false, true, 276) == "オンライン決済")) {
            // line 277
            echo "                  \t\t<button class=\"ec-blockBtn--action\" type=\"button\" onclick=\"doPurchase()\" />購入する</button>
                    ";
        } else {
            // line 279
            echo "                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.checkout"), "html", null, true);
            echo "</button>
                    ";
        }
        // line 281
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.back_to_order"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</form>
<form id=\"mainform\">
  \t<input id=\"tkn\" name=\"tkn\" type=\"hidden\" value=\"\">
</form>
<div id=\"CARD_INPUT_FORM\" class=\"text-dark\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 281,  741 => 279,  737 => 277,  735 => 276,  732 => 275,  725 => 271,  721 => 270,  715 => 267,  711 => 266,  707 => 264,  704 => 263,  691 => 260,  687 => 259,  684 => 258,  680 => 257,  671 => 256,  662 => 253,  658 => 252,  655 => 251,  651 => 250,  642 => 249,  636 => 246,  632 => 245,  629 => 244,  627 => 243,  622 => 241,  618 => 240,  612 => 237,  608 => 236,  602 => 233,  598 => 232,  592 => 228,  582 => 224,  576 => 221,  572 => 219,  568 => 218,  562 => 215,  556 => 212,  552 => 210,  545 => 206,  539 => 203,  535 => 201,  533 => 200,  526 => 197,  524 => 196,  518 => 195,  515 => 194,  510 => 193,  508 => 192,  502 => 189,  497 => 186,  478 => 181,  474 => 180,  468 => 177,  464 => 176,  455 => 173,  449 => 172,  446 => 171,  441 => 170,  439 => 169,  435 => 168,  427 => 163,  418 => 162,  405 => 161,  399 => 158,  396 => 157,  379 => 152,  371 => 150,  368 => 149,  360 => 147,  358 => 146,  350 => 145,  343 => 143,  339 => 141,  335 => 140,  331 => 138,  328 => 137,  325 => 136,  308 => 135,  303 => 133,  295 => 128,  291 => 127,  285 => 126,  280 => 125,  276 => 124,  270 => 123,  262 => 122,  256 => 119,  247 => 113,  243 => 112,  233 => 105,  230 => 104,  227 => 103,  220 => 99,  217 => 98,  214 => 97,  207 => 93,  204 => 92,  201 => 91,  198 => 90,  191 => 86,  188 => 85,  185 => 84,  182 => 83,  180 => 82,  174 => 79,  171 => 78,  168 => 77,  165 => 76,  163 => 75,  153 => 68,  148 => 65,  138 => 64,  91 => 27,  85 => 24,  74 => 15,  64 => 14,  53 => 11,  51 => 13,  38 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}
{% block javascript %}
    <script type=\"text/javascript\" src=\"https://credit.j-payment.co.jp/gateway/js/CPToken.js\"></script>
    <script>
    function execPurchase(resultCode, errMsg) {
      \$('#js_check_msg_area').hide();
      if (resultCode != \"Success\") {
        window.alert(errMsg);
      } else {
          \$.ajax({
              type: \"POST\",
              url: \"{{ url('robotpayment_excute') }}\",
              data: {
                    tkn: \$('#tkn').val(),
                    total_amount: `{{ Order.payment_total }}`,
              },
              success: function (response) {
                  console.log(response);
                  if(response.success){
                      if(response.response[2]){
                        \$('#payment_status').val('paid');
                        \$('#shopping-form').submit();
                      }
                      else{
                          \$('#js_check_msg_area').html(`Some thing went wrong from api gateway`);
                          \$('#js_check_msg_area').show();
                      }
                  }
                  else{
                    \$('#js_check_msg_area').html(response.message);
                      \$('#js_check_msg_area').show();
                  }
              },
              error: function (response) {
                \$('#js_check_msg_area').html(`Backend not returning values`);
                \$('#js_check_msg_area').show();
              }
          });
      }
    }
    function doPurchase() {
      CPToken.CardInfo(
          {
            aid: '127655',
          },
          execPurchase
       );
    }
    </script>
    
{% endblock %}
{% block main %}

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'front.shopping.confirm_title'|trans }}</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            {% set step = 1 %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'front.cart.nav__cart_items'|trans }}
                </div>
            </li>
            {% if is_granted('ROLE_USER') == false %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'front.cart.nav__customer_info'|trans }}
                    </div>
                </li>
            {% endif %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'front.cart.nav__order'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'front.cart.nav__confirm'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'front.cart.nav__complete'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_checkout') }}\">
    {{ form_widget(form._token) }}
    <input type=\"hidden\" id=\"payment_status\" name=\"payment_status\"></input>
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.shopping.customer_info'|trans }}</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">{{ 'common.name.prefix'|trans }}{{ Order.name01 }} {{ Order.name02 }}{{ 'common.name.suffix'|trans }}</p>
                    <p class=\"ec-halfInput\">{{ Order.kana01 }} {{ Order.kana02 }}</p>
                    <p class=\"ec-input\">{{ Order.companyName }}</p>
                    <p class=\"ec-zipInput\">{{ 'common.postal_symbol'|trans }}{{ Order.postal_code }}</p>
                    <p class=\"ec-input\">{{ Order.pref }}{{ Order.addr01 }}{{ Order.addr02 }}</p>
                    <p class=\"ec-telInput\">{{ Order.phone_number }}</p>
                    <p class=\"ec-input\">{{ Order.email }}</p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.shopping.delivery_info'|trans }}</h2>
                </div>
                {% for shipping in Order.shippings %}
                    {% set idx = loop.index0 %}
                    {% set isShowReducedTaxMess = false %}
                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            {% for orderItem in shipping.productOrderItems %}
                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ 'common.reduced_tax_rate_symbol'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                            <p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
                                        {% endif %}
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                            <p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                        {% endif %}
                                        <p>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ 'common.subtotal__with_separator'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                    </div>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                        <p>{{ isShowReducedTaxMess ? 'common.reduced_tax_rate_messeage'|trans }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>{{ 'common.name.prefix'|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ 'common.name.suffix'|trans }}</p>
                        <p>{{ 'common.postal_symbol'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                        <p>{{ shipping.phone_number }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>{{ 'front.shopping.delivery_provider'|trans }}</label>
                                {% set delivery_fee = 0 %}
                                {% for item in shipping.order_items|filter(item => item.isDeliveryFee) %}
                                    {% set delivery_fee = item.total_price %}
                                {% endfor %}
                                {{ Order.Shippings[idx].Delivery }}({{ delivery_fee|price }})
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>{{ 'front.shopping.delivery_date'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_date? Order.Shippings[idx].shipping_delivery_date|date_day_with_weekday : 'common.select__unspecified'|trans }}
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>{{ 'front.shopping.delivery_time'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_time?: 'common.select__unspecified'|trans }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.shopping.payment_info'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {% set charge = 0 %}
                    {% for item in Order.order_items|filter(item => item.isCharge) %}
                        {% set charge = item.total_price %}
                    {% endfor %}
                    {#{{ Order.Payment }}({{ charge|price }}) for modification remove charge#}
                    {{ Order.Payment }}
                </div>
            </div>
            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.shopping.point_info'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {{ Order.use_point|number_format }} pt
                </div>
            </div>
            {% endif %}
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'front.shopping.message_info'|trans }}</h2>
                </div>
                <div class=\"ec-input\">
                    {{ Order.message|nl2br }}
                </div>
            </div>
            {% for activeTradeLaw in activeTradeLaws|filter(t => t.name and t.description) %}
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ activeTradeLaw.name }}</h2>
                    </div>
                    <div class=\"ec-input\">
                        {{ activeTradeLaw.description|raw }}
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.subtotal'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.charge'|trans }}</dt>
                    <dd>{{ Order.charge|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.delivery_fee'|trans }}</dt>
                    <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                </dl>
                {% if Order.taxable_discount < 0 %}
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ 'common.discount'|trans }}</dt>
                    <dd>{{ Order.taxable_discount|price }}</dd>
                </dl>
                {% endif %}
                <div class=\"ec-totalBox__total\">{{ 'common.total'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
                {% for item in Order.tax_free_discount_items %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ item.product_name }}</dt>
                        <dd>{{ item.total_price|price }}</dd>
                    </dl>
                {% endfor %}
                <div class=\"ec-totalBox__paymentTotal\">{{ 'common.payment_total'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
                {% for rate, total in Order.total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }} ({{ 'common.tax_amount'|trans }} {{ Order.tax_by_tax_rate[rate]|price }})</dd>
                    </dl>
                {% endfor %}
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'front.shopping.use_point'|trans }}</dt>
                        <dd>{{ Order.UsePoint|number_format }} pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">{{ 'front.shopping.add_point'|trans }}</span></dt>
                        <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                    </dl>
                </div>
                {% endif %}
                <div class=\"ec-totalBox__btn\">
                    {% if Order.Payment == 'オンライン決済' %}
                  \t\t<button class=\"ec-blockBtn--action\" type=\"button\" onclick=\"doPurchase()\" />購入する</button>
                    {% else %}
                        <button type=\"submit\" class=\"ec-blockBtn--action\">{{ 'front.shopping.checkout'|trans }}</button>
                    {% endif %}
                    <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'front.shopping.back_to_order'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</form>
<form id=\"mainform\">
  \t<input id=\"tkn\" name=\"tkn\" type=\"hidden\" value=\"\">
</form>
<div id=\"CARD_INPUT_FORM\" class=\"text-dark\"></div>
{% endblock %}", "Shopping/confirm.twig", "F:\\laragon\\www\\shop\\app\\template\\default\\Shopping\\confirm.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("form_theme" => 13, "set" => 75, "if" => 82, "for" => 135);
        static $filters = array("escape" => 27, "trans" => 68, "no_image_product" => 143, "price" => 152, "number_format" => 152, "filter" => 170, "date_day_with_weekday" => 177, "nl2br" => 215, "raw" => 224);
        static $functions = array("url" => 24, "is_granted" => 82, "form_widget" => 113, "asset" => 143, "is_reduced_tax_rate" => 145);

        try {
            $this->sandbox->checkSecurity(
                ['form_theme', 'set', 'if', 'for'],
                ['escape', 'trans', 'no_image_product', 'price', 'number_format', 'filter', 'date_day_with_weekday', 'nl2br', 'raw'],
                ['url', 'is_granted', 'form_widget', 'asset', 'is_reduced_tax_rate'],
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
