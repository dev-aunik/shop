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

/* @admin/Setting/Shop/tax_rule.twig */
class __TwigTemplate_124564b5169e360fcba82baab47eb9ba extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/tax_rule.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/tax_rule.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_tax"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/tax_rule.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
        
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

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 37
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.tax_rule_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.tax_rule_list_item .cancel').click(function() {
                location.href = '";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax");
        echo "';
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 54
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.tax_setting"), "html", null, true);
        echo "\">
                            <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
        echo "</span>
                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"\">
                                <col width=\"15%\">
                                <col width=\"35%\">
                                <col width=\"5%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.tax_rate"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.rounding_type"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.apply_date"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\"></th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3 pe-5\"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr id=\"tax_rule_item_new\">
                                <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax_new");
        echo "\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "_token", [], "any", false, false, true, 88), 88, $this->source), 'widget');
        echo "
                                    <td class=\"align-middle ps-3\"></td>
                                    <td class=\"align-middle\" style=\"width:230px;\">
                                        <div class=\"input-group\">
                                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "tax_rate", [], "any", false, false, true, 92), 92, $this->source), 'widget', ["attr" => ["class" => "col-auto text-end"]]);
        echo "
                                            <div class=\"input-group-text\">%</div>
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "tax_rate", [], "any", false, false, true, 94), 94, $this->source), 'errors');
        echo "
                                        </div>
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "rounding_type", [], "any", false, false, true, 98), 98, $this->source), 'widget');
        echo "
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "rounding_type", [], "any", false, false, true, 99), 99, $this->source), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "apply_date", [], "any", false, false, true, 102), 102, $this->source), 'widget');
        echo "
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "apply_date", [], "any", false, false, true, 103), 103, $this->source), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\"></td>
                                    <td class=\"align-middle pe-5\">
                                        <div class=\"row justify-content-end\">
                                            <button class=\"btn btn-ec-regular px-4\" type=\"submit\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>

                            ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TaxRules"]) || array_key_exists("TaxRules", $context) ? $context["TaxRules"] : (function () { throw new RuntimeError('Variable "TaxRules" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TaxRule"]) {
            // line 115
            echo "                                <tr id=\"ex-tax_rule-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "\" class=\"tax_rule_list_item ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 115, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 115), [], "array", false, false, true, 115)) {
                echo "has-error";
            }
            echo "\">
                                    <form name=\"edit-form\" id=\"edit-form_";
            // line 116
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax");
            echo "\">
                                        ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 117, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 117), [], "array", false, false, true, 117), "_token", [], "any", false, false, true, 117), 117, $this->source), 'widget');
            echo "
                                        <input type=\"hidden\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "\" name=\"tax_rule_id\">
                                        <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                        <td class=\"align-middle ps-3\"><span>";
            // line 120
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "</span></td>
                                        <td class=\"align-middle text-end\" style=\"width:230px;\">
                                            <div class=\"edit justify-content-end\">
                                                <div class=\"input-group\">
                                                    ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 124, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 124), [], "array", false, false, true, 124), "tax_rate", [], "any", false, false, true, 124), 124, $this->source), 'widget', ["attr" => ["class" => "col-auto text-end"]]);
            echo "
                                                    <div class=\"input-group-text\">%</div>
                                                    ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 126, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 126), [], "array", false, false, true, 126), "tax_rate", [], "any", false, false, true, 126), 126, $this->source), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"list\">
                                                <span class=\"col-6 text-end pe-0\">";
            // line 130
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "tax_rate", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "</span><span class=\"col-6 ps-1\">%</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 135, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 135), [], "array", false, false, true, 135), "rounding_type", [], "any", false, false, true, 135), 135, $this->source), 'widget');
            echo "
                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 138
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "rounding_type", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 143)) {
                // line 144
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting"), "html", null, true);
                echo "
                                                ";
            } else {
                // line 146
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 146, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 146), [], "array", false, false, true, 146), "apply_date", [], "any", false, false, true, 146), 146, $this->source), 'widget');
                echo "
                                                    ";
                // line 147
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 147, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 147), [], "array", false, false, true, 147), "apply_date", [], "any", false, false, true, 147), 147, $this->source), 'errors');
                echo "
                                                ";
            }
            // line 149
            echo "                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 151
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 151)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "apply_date", [], "any", false, false, true, 151), 151, $this->source)))), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                                <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </td>
                                        <td class=\"align-middle action\">
                                            <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 float-end\">
                                                <div class=\"row pe-2\">
                                                    <div class=\"col-6 text-center pe-0\"><a class=\"btn btn-ec-actionIcon edit-button\" data-bs-toggle=\"tooltip\" data-id=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i></a></div>

                                                    <div class=\"col-6 text-center\">
                                                        ";
            // line 166
            if ( !twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, true, 166)) {
                // line 167
                echo "                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                                 title=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal_";
                // line 169
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_";
                // line 174
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_";
                // line 175
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">
                                                                                ";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "
                                                                            </h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start modal-message\">";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 185)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                                ";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, true, 191)]), "html", null, true);
                echo "\"
                                                                                ";
                // line 192
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                                ";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            // line 200
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaxRule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                            </tbody>
                        </table>
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
        return "@admin/Setting/Shop/tax_rule.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 207,  483 => 200,  473 => 193,  469 => 192,  465 => 191,  460 => 189,  453 => 185,  445 => 180,  437 => 175,  433 => 174,  425 => 169,  421 => 168,  418 => 167,  416 => 166,  408 => 163,  397 => 157,  393 => 156,  385 => 151,  381 => 149,  376 => 147,  371 => 146,  365 => 144,  363 => 143,  355 => 138,  349 => 135,  341 => 130,  334 => 126,  329 => 124,  322 => 120,  317 => 118,  313 => 117,  307 => 116,  298 => 115,  294 => 114,  285 => 108,  277 => 103,  273 => 102,  267 => 99,  263 => 98,  256 => 94,  251 => 92,  244 => 88,  240 => 87,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  198 => 60,  194 => 59,  187 => 54,  177 => 53,  162 => 47,  150 => 37,  140 => 36,  117 => 21,  107 => 20,  88 => 16,  69 => 15,  58 => 11,  56 => 18,  54 => 13,  41 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_tax'] %}

{% block title %}{{ 'admin.setting.shop.tax_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script type=\"text/javascript\">
        \$(function() {
            \$('.tax_rule_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.tax_rule_list_item .cancel').click(function() {
                location.href = '{{ url('admin_setting_shop_tax') }}';
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.tax_setting'|trans }}\">
                            <span>{{ 'admin.setting.shop.tax_setting'|trans }}</span>
                            <i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"\">
                                <col width=\"15%\">
                                <col width=\"35%\">
                                <col width=\"5%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">{{ 'admin.common.id'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">{{ 'admin.setting.shop.tax.tax_rate'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">{{ 'admin.setting.shop.tax.rounding_type'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\">{{ 'admin.setting.shop.tax.apply_date'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3\"></th>
                                <th class=\"border-top-0 pt-2 pb-2 ps-3 pe-5\"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr id=\"tax_rule_item_new\">
                                <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"{{ url('admin_setting_shop_tax_new') }}\">
                                    {{ form_widget(form._token) }}
                                    <td class=\"align-middle ps-3\"></td>
                                    <td class=\"align-middle\" style=\"width:230px;\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.tax_rate, {attr: {class: 'col-auto text-end'}}) }}
                                            <div class=\"input-group-text\">%</div>
                                            {{ form_errors(form.tax_rate) }}
                                        </div>
                                    </td>
                                    <td class=\"align-middle\">
                                        {{ form_widget(form.rounding_type) }}
                                        {{ form_errors(form.rounding_type) }}
                                    </td>
                                    <td class=\"align-middle\">
                                        {{ form_widget(form.apply_date) }}
                                        {{ form_errors(form.apply_date) }}
                                    </td>
                                    <td class=\"align-middle\"></td>
                                    <td class=\"align-middle pe-5\">
                                        <div class=\"row justify-content-end\">
                                            <button class=\"btn btn-ec-regular px-4\" type=\"submit\">{{ 'admin.common.create__new'|trans }}</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>

                            {% for TaxRule in TaxRules %}
                                <tr id=\"ex-tax_rule-{{ TaxRule.id }}\" class=\"tax_rule_list_item {% if errors[TaxRule.id] %}has-error{% endif %}\">
                                    <form name=\"edit-form\" id=\"edit-form_{{ TaxRule.id }}\" method=\"post\" action=\"{{ url('admin_setting_shop_tax') }}\">
                                        {{ form_widget(forms[TaxRule.id]._token) }}
                                        <input type=\"hidden\" value=\"{{ TaxRule.id }}\" name=\"tax_rule_id\">
                                        <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                        <td class=\"align-middle ps-3\"><span>{{ TaxRule.id }}</span></td>
                                        <td class=\"align-middle text-end\" style=\"width:230px;\">
                                            <div class=\"edit justify-content-end\">
                                                <div class=\"input-group\">
                                                    {{ form_widget(forms[TaxRule.id].tax_rate, {attr: {class: 'col-auto text-end'}}) }}
                                                    <div class=\"input-group-text\">%</div>
                                                    {{ form_errors(forms[TaxRule.id].tax_rate) }}
                                                </div>
                                            </div>
                                            <div class=\"list\">
                                                <span class=\"col-6 text-end pe-0\">{{ TaxRule.tax_rate }}</span><span class=\"col-6 ps-1\">%</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                {{ form_widget(forms[TaxRule.id].rounding_type) }}
                                            </div>
                                            <div class=\"list\">
                                                <span>{{ TaxRule.rounding_type }}</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                {% if TaxRule.default_tax_rule %}
                                                    {{ 'admin.setting.shop.tax.base_rate_setting'|trans }}
                                                {% else %}
                                                    {{ form_widget(forms[TaxRule.id].apply_date) }}
                                                    {{ form_errors(forms[TaxRule.id].apply_date) }}
                                                {% endif %}
                                            </div>
                                            <div class=\"list\">
                                                <span>{{ TaxRule.default_tax_rule  ? 'admin.setting.shop.tax.base_rate_setting'|trans : TaxRule.apply_date|date_min }}</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">{{ 'admin.common.decision'|trans }}</button>
                                                <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"{{ TaxRule.id }}\">{{ 'admin.common.cancel'|trans }}</button>
                                            </div>
                                        </td>
                                        <td class=\"align-middle action\">
                                            <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 float-end\">
                                                <div class=\"row pe-2\">
                                                    <div class=\"col-6 text-center pe-0\"><a class=\"btn btn-ec-actionIcon edit-button\" data-bs-toggle=\"tooltip\" data-id=\"{{ TaxRule.id }}\" data-bs-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\"><i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i></a></div>

                                                    <div class=\"col-6 text-center\">
                                                        {% if not TaxRule.default_tax_rule %}
                                                            <div class=\"d-inline-block me-3\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                                 title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#DeleteModal_{{ TaxRule.id }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_{{ TaxRule.id }}\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_{{ TaxRule.id }}\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title fw-bold\">
                                                                                {{ 'admin.common.delete_modal__title'|trans }}
                                                                            </h5>
                                                                            <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                        </div>
                                                                        <div class=\"modal-body text-start\">
                                                                            <p class=\"text-start modal-message\">{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : TaxRule.id }) }}</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">
                                                                                {{ 'admin.common.cancel'|trans }}
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_setting_shop_tax_delete', { id : TaxRule.id }) }}\"
                                                                                {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
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
                                        </td>
                                    </form>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/tax_rule.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\tax_rule.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 114, "if" => 115);
        static $filters = array("escape" => 15, "trans" => 15, "date_min" => 151);
        static $functions = array("url" => 47, "form_widget" => 88, "form_errors" => 94, "csrf_token_for_anchor" => 192);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'date_min'],
                ['url', 'form_widget', 'form_errors', 'csrf_token_for_anchor'],
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
