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

/* @admin/Setting/Shop/mail.twig */
class __TwigTemplate_f77b7801b86687953a1431a90f0a9d48 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_mail"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/mail.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail_setting"), "html", null, true);
        
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
        echo "    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 30
        echo "    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#mail_template[name=\"mail[template]\"] option[selected]').val();
                \$('#mail_template[name=\"mail[template]\"]').val(tmp_select);
            });

            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail");
        echo "/' + id;
                } else {
                    location.href = '";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail");
        echo "';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "tpl_data", [], "any", false, false, true, 51), "vars", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source), "js"), "html", null, true);
        echo "\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 59), "vars", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) {
            // line 60
            echo "                var html_editor = ace.edit('html_editor');
                html_editor.session.setMode('ace/mode/twig');
                html_editor.setTheme('ace/theme/tomorrow');
                html_editor.setValue(\"";
            // line 63
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 63), "vars", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), 63, $this->source), "js"), "html", null, true);
            echo "\");
                html_editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true,
                    showInvisibles: true
                });
            ";
        }
        // line 71
        echo "
            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 86), "vars", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86)) {
            // line 87
            echo "                    \$('#mail_html_tpl_data').val(html_editor.getValue());
                ";
        }
        // line 89
        echo "            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail_preview");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 117), "vars", [], "any", false, false, true, 117), "id", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 128
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "_token", [], "any", false, false, true, 129), 129, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template_edit"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.mail.mail_template"), "html", null, true);
        echo "\">
                                        <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "template", [], "any", false, false, true, 143), 143, $this->source), 'widget');
        echo "
                                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "template", [], "any", false, false, true, 144), 144, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "mail_subject", [], "any", false, false, true, 150), 150, $this->source), 'widget');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "mail_subject", [], "any", false, false, true, 151), 151, $this->source), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_body"), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 158
        echo "                                    ";
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 158, $this->source); })()))) {
            // line 159
            echo "                                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
            // line 161
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "tpl_data", [], "any", false, false, true, 161), "vars", [], "any", false, false, true, 161), "id", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "\" href=\"#detail_box__tpl_data\" class=\"nav-link active\" data-bs-toggle=\"tab\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_text"), "html", null, true);
            echo "</span></a>
                                        </li>
                                        ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 163), "vars", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163)) {
                // line 164
                echo "                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
                // line 165
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 165), "vars", [], "any", false, false, true, 165), "id", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "\" href=\"#detail_box__html_tpl_data\" class=\"nav-link\" data-bs-toggle=\"tab\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_html"), "html", null, true);
                echo "</span></a>
                                        </li>
                                        ";
            }
            // line 168
            echo "                                        <div class=\"col-1\">
                                            <div class=\"d-inline-block\">
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\" id=\"preview_button\" class=\"btn w-100 text-nowrap btn-ec-regular\" style=\"display:none;\" data-bs-toggle=\"modal\" data-bs-target=\"#htmlPreviewModal\">
                                                        ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    ";
        }
        // line 179
        echo "                                    <div class=\"tab-content\">
                                        <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "tpl_data", [], "any", false, false, true, 181), 181, $this->source), 'label');
        echo "
                                            <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 182
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "tpl_data", [], "any", false, false, true, 182), 182, $this->source))) ? (" is-invalid") : (""));
        echo "\"></div>
                                            <div style=\"display: none\">";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "tpl_data", [], "any", false, false, true, 183), 183, $this->source), 'widget');
        echo "</div>
                                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "tpl_data", [], "any", false, false, true, 184), 184, $this->source), 'errors');
        echo "
                                        </div>
                                        ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 186), "vars", [], "any", false, false, true, 186), "value", [], "any", false, false, true, 186)) {
            // line 187
            echo "                                        <div id=\"detail_box__html_tpl_data\" class=\"mb-3 tab-pane\">
                                            ";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 188), 188, $this->source), 'label');
            echo "
                                            <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control";
            // line 189
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 189), 189, $this->source))) ? (" is-invalid") : (""));
            echo "\"></div>
                                            <div style=\"display: none\">";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 190), 190, $this->source), 'widget');
            echo "</div>
                                            ";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "html_tpl_data", [], "any", false, false, true, 191), 191, $this->source), 'errors');
            echo "
                                        </div>
                                        ";
        }
        // line 194
        echo "                                    </div>
                                </div>
                            </div>
                            ";
        // line 198
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 198), "eccube_form_options", [], "any", false, false, true, 198), "auto_render", [], "any", false, false, true, 198); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 199
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 199), "eccube_form_options", [], "any", false, false, true, 199), "form_theme", [], "any", false, false, true, 199)) {
                // line 200
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 200), "eccube_form_options", [], "any", false, false, true, 200), "form_theme", [], "any", false, false, true, 200)], true);
                // line 201
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 201, $this->source), 'row');
                echo "
                                ";
            } else {
                // line 203
                echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 204), "label", [], "any", false, false, true, 204), 204, $this->source)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
                // line 206
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 206, $this->source), 'widget');
                echo "
                                            ";
                // line 207
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 207, $this->source), 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 211
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
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
        return "@admin/Setting/Shop/mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 250,  519 => 241,  502 => 227,  485 => 212,  479 => 211,  472 => 207,  468 => 206,  463 => 204,  460 => 203,  454 => 201,  451 => 200,  448 => 199,  443 => 198,  438 => 194,  432 => 191,  428 => 190,  424 => 189,  420 => 188,  417 => 187,  415 => 186,  410 => 184,  406 => 183,  402 => 182,  398 => 181,  394 => 179,  384 => 172,  378 => 168,  370 => 165,  367 => 164,  365 => 163,  358 => 161,  354 => 159,  351 => 158,  344 => 155,  337 => 151,  333 => 150,  326 => 148,  319 => 144,  315 => 143,  308 => 139,  304 => 138,  297 => 134,  289 => 129,  286 => 128,  276 => 127,  257 => 117,  240 => 103,  224 => 89,  220 => 87,  218 => 86,  201 => 71,  190 => 63,  185 => 60,  183 => 59,  172 => 51,  161 => 43,  156 => 41,  143 => 30,  133 => 29,  117 => 21,  107 => 20,  88 => 16,  69 => 15,  58 => 11,  56 => 18,  54 => 13,  41 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_mail'] %}

{% block title %}{{ 'admin.setting.shop.mail_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script>
        \$(function() {

            \$(window).on('pageshow', function() {
                var tmp_select =  \$('#mail_template[name=\"mail[template]\"] option[selected]').val();
                \$('#mail_template[name=\"mail[template]\"]').val(tmp_select);
            });

            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '{{ url('admin_setting_shop_mail') }}/' + id;
                } else {
                    location.href = '{{ url('admin_setting_shop_mail') }}';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"{{ form.tpl_data.vars.value|escape('js') }}\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            {% if form.html_tpl_data.vars.value %}
                var html_editor = ace.edit('html_editor');
                html_editor.session.setMode('ace/mode/twig');
                html_editor.setTheme('ace/theme/tomorrow');
                html_editor.setValue(\"{{ form.html_tpl_data.vars.value|escape('js') }}\");
                html_editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true,
                    showInvisibles: true
                });
            {% endif %}

            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                {% if form.html_tpl_data.vars.value %}
                    \$('#mail_html_tpl_data').val(html_editor.getValue());
                {% endif %}
            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '{{ url('admin_setting_shop_mail_preview') }}',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-bs-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__{{ form.html_tpl_data.vars.id }}') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">{{ 'admin.setting.shop.mail.mail_template_edit'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.setting.shop.mail.mail_template'|trans }}\">
                                        <span>{{ 'admin.setting.shop.mail.mail_template'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    {{ form_widget(form.template) }}
                                    {{ form_errors(form.template) }}
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>{{ 'admin.setting.shop.mail.mail_subject'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col-10\">
                                    {{ form_widget(form.mail_subject) }}
                                    {{ form_errors(form.mail_subject) }}
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>{{ 'admin.setting.shop.mail.mail_body'|trans }}</span><span class=\"badge bg-primary ms-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col-10\">
                                    {# タブ表示 #}
                                    {% if id is not null %}
                                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__{{ form.tpl_data.vars.id }}\" href=\"#detail_box__tpl_data\" class=\"nav-link active\" data-bs-toggle=\"tab\"><span>{{ 'admin.setting.shop.mail.mail_text'|trans }}</span></a>
                                        </li>
                                        {% if form.html_tpl_data.vars.value %}
                                        <li class=\"nav-item me-2\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__{{ form.html_tpl_data.vars.id }}\" href=\"#detail_box__html_tpl_data\" class=\"nav-link\" data-bs-toggle=\"tab\"><span>{{ 'admin.setting.shop.mail.mail_html'|trans }}</span></a>
                                        </li>
                                        {% endif %}
                                        <div class=\"col-1\">
                                            <div class=\"d-inline-block\">
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\" id=\"preview_button\" class=\"btn w-100 text-nowrap btn-ec-regular\" style=\"display:none;\" data-bs-toggle=\"modal\" data-bs-target=\"#htmlPreviewModal\">
                                                        {{ 'admin.setting.shop.mail.preview'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    {% endif %}
                                    <div class=\"tab-content\">
                                        <div id=\"detail_box__tpl_data\" class=\"mb-3 tab-pane active\">
                                            {{ form_label(form.tpl_data) }}
                                            <div id=\"editor\" style=\"height: 480px\" class=\"form-control{{ has_errors(form.tpl_data) ? ' is-invalid' }}\"></div>
                                            <div style=\"display: none\">{{ form_widget(form.tpl_data) }}</div>
                                            {{ form_errors(form.tpl_data) }}
                                        </div>
                                        {% if form.html_tpl_data.vars.value %}
                                        <div id=\"detail_box__html_tpl_data\" class=\"mb-3 tab-pane\">
                                            {{ form_label(form.html_tpl_data) }}
                                            <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control{{ has_errors(form.html_tpl_data) ? ' is-invalid' }}\"></div>
                                            <div style=\"display: none\">{{ form_widget(form.html_tpl_data) }}</div>
                                            {{ form_errors(form.html_tpl_data) }}
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ f.vars.label|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">{{ 'admin.setting.shop.mail.preview'|trans }}</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/mail.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\mail.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 59, "for" => 198);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 198);
        static $functions = array("url" => 41, "form_widget" => 129, "form_errors" => 144, "form_label" => 181, "has_errors" => 182, "form_row" => 201);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'form_widget', 'form_errors', 'form_label', 'has_errors', 'form_row'],
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
