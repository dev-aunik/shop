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

/* @admin/Store/authentication_setting.twig */
class __TwigTemplate_fb13eec473fafcd45f426aef3bfddfb1 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/authentication_setting.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/authentication_setting.twig"));

        // line 13
        $context["menus"] = [0 => "store", 1 => "authentication_setting"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/authentication_setting.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store"), "html", null, true);
        
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
        .modal #captcha_image {
            max-width: 400px;
            max-height: 50px;
            border: 1px #b9b9ba solid;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "<script>

    function refreshCaptchaImage() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var captcha = document.getElementById(\"captcha_image\");
                var url = window.URL || window.webkitURL;
                captcha.src = url.createObjectURL(this.response);

                var captcha_id = document.getElementById(\"captcha_id\");
                captcha_id.value = this.getResponseHeader('x-eccube-captcha-id');
            }
        }

        xhr.open('GET', '";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 46, $this->source); })()), "eccube_package_api_url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "/captcha' + '?' + new Date().getTime());
        xhr.responseType = 'blob';
        xhr.send();
    }

    \$('#captcha').on('show.bs.modal', function() {
        refreshCaptchaImage();
    });

    function tryGenerateApiKey(){
        \$.ajax({
            type: 'POST',
            url: \"";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 58, $this->source); })()), "eccube_package_api_url", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "/api_key\",
            dataType: 'json',
            cache: false,
            data: {
                \"captcha_id\": \$('#captcha_id').val(),
                \"captcha\": \$('#captcha_text').val(),
                \"eccube_url\": '";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["eccubeUrl"]) || array_key_exists("eccubeUrl", $context) ? $context["eccubeUrl"] : (function () { throw new RuntimeError('Variable "eccubeUrl" does not exist.', 64, $this->source); })()), 64, $this->source), "html", null, true);
        echo "',
                \"eccube_version\": \"";
        // line 65
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\",
                \"eccube_shop_name\": \"";
        // line 66
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["eccubeShopName"]) || array_key_exists("eccubeShopName", $context) ? $context["eccubeShopName"] : (function () { throw new RuntimeError('Variable "eccubeShopName" does not exist.', 66, $this->source); })()), 66, $this->source), "js"), "html", null, true);
        echo "\"
            }
        }).done(function(data) {
            \$('#captcha').modal('hide');
            \$('#admin_authentication_authentication_key').val(data.api_key);
            \$('#form').submit();
        }).fail(function(res) {
            if (res.status == 400) {
                \$('#captcha_error').show();
                refreshCaptchaImage();
            } else {
                alert('";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.system_error"), "html", null, true);
        echo "');
            }
        });
    }

    \$(\"#captcha_text\").on(\"keydown\", function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            tryGenerateApiKey();
            \$(this).val('');
            return false;
        }
    });

    \$('#generate_key').on('click', function() {
        tryGenerateApiKey();
        \$(\"#captcha_text\").val('');
        return false;
    });
    \$('#captcha-refresh').on('click', refreshCaptchaImage);
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
        echo "    <form id=\"form\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_authentication_setting");
        echo "\">
    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "_token", [], "any", false, false, true, 102), 102, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#captcha\" type=\"button\">
                                        ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_tooltip"), "html", null, true);
        echo ">
                                        <span>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "authentication_key", [], "any", false, false, true, 143), "vars", [], "any", false, false, true, 143), "label", [], "any", false, false, true, 143), 143, $this->source)), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "authentication_key", [], "any", false, false, true, 148), 148, $this->source), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.plugin_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"modal fade\" id=\"captcha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"captcha\" aria-hidden=\"true\">
        <form id=\"captcha-form\" method=\"post\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <p>新しい認証キーを発行します。既に認証キーがある場合は、発行せずに既存のキーを設定してください。</p>
                        <img id=\"captcha_image\" class=\"mb-2\" src=\"#\">
                        <button id=\"captcha-refresh\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
                        <input type=\"text\" id=\"captcha_text\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_message"), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" id=\"captcha_id\" value=\"\"/>
                        <span id=\"captcha_error\" class=\"invalid-feedback\" style=\"display: none\">
                            <span class=\"mb-0 d-block\">
                                <span class=\"initialism form-error-icon badge bg-danger\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_error"), "html", null, true);
        echo "</span> <span class=\"form-error-message\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.invalid_captcha"), "html", null, true);
        echo "</span>
                            </span>
                        </span>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
        echo "</button>
                        <button id=\"generate_key\" class=\"btn btn-ec-conversion\" type=\"button\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/authentication_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 201,  398 => 200,  388 => 195,  381 => 191,  371 => 184,  354 => 170,  345 => 164,  340 => 162,  323 => 148,  315 => 143,  311 => 142,  303 => 137,  294 => 131,  280 => 120,  271 => 114,  262 => 108,  253 => 102,  248 => 101,  238 => 100,  207 => 77,  193 => 66,  189 => 65,  185 => 64,  176 => 58,  161 => 46,  144 => 31,  134 => 30,  117 => 21,  107 => 20,  88 => 16,  69 => 15,  58 => 11,  56 => 18,  54 => 13,  41 => 11,);
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

{% set menus = ['store', 'authentication_setting'] %}

{% block title %}{{ 'admin.store.setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.store'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style>
        .modal #captcha_image {
            max-width: 400px;
            max-height: 50px;
            border: 1px #b9b9ba solid;
        }
    </style>
{% endblock %}

{% block javascript %}
<script>

    function refreshCaptchaImage() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var captcha = document.getElementById(\"captcha_image\");
                var url = window.URL || window.webkitURL;
                captcha.src = url.createObjectURL(this.response);

                var captcha_id = document.getElementById(\"captcha_id\");
                captcha_id.value = this.getResponseHeader('x-eccube-captcha-id');
            }
        }

        xhr.open('GET', '{{ eccube_config.eccube_package_api_url }}/captcha' + '?' + new Date().getTime());
        xhr.responseType = 'blob';
        xhr.send();
    }

    \$('#captcha').on('show.bs.modal', function() {
        refreshCaptchaImage();
    });

    function tryGenerateApiKey(){
        \$.ajax({
            type: 'POST',
            url: \"{{ eccube_config.eccube_package_api_url }}/api_key\",
            dataType: 'json',
            cache: false,
            data: {
                \"captcha_id\": \$('#captcha_id').val(),
                \"captcha\": \$('#captcha_text').val(),
                \"eccube_url\": '{{ eccubeUrl }}',
                \"eccube_version\": \"{{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\",
                \"eccube_shop_name\": \"{{ eccubeShopName|escape('js') }}\"
            }
        }).done(function(data) {
            \$('#captcha').modal('hide');
            \$('#admin_authentication_authentication_key').val(data.api_key);
            \$('#form').submit();
        }).fail(function(res) {
            if (res.status == 400) {
                \$('#captcha_error').show();
                refreshCaptchaImage();
            } else {
                alert('{{ 'admin.common.system_error'|trans }}');
            }
        });
    }

    \$(\"#captcha_text\").on(\"keydown\", function(e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            tryGenerateApiKey();
            \$(this).val('');
            return false;
        }
    });

    \$('#generate_key').on('click', function() {
        tryGenerateApiKey();
        \$(\"#captcha_text\").val('');
        return false;
    });
    \$('#captcha-refresh').on('click', refreshCaptchaImage);
</script>
{% endblock %}


{% block main %}
    <form id=\"form\" method=\"post\" action=\"{{ url('admin_store_authentication_setting') }}\">
    {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>{{'admin.store.setting.get_api_key'|trans}}</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>{{'admin.store.setting.get_api_key_info'|trans}}</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#captcha\" type=\"button\">
                                        {{ 'admin.store.setting.get_api_key'|trans }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>{{'admin.store.setting.api_key_setting'|trans}}</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>{{'admin.store.setting.api_key_setting_info'|trans}}</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title={{'admin.store.setting.api_key_tooltip'|trans}}>
                                        <span>{{ form.authentication_key.vars.label|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    {{ form_widget(form.authentication_key) }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_store_plugin') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.store.plugin.plugin_list'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{'admin.common.registration'|trans}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"modal fade\" id=\"captcha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"captcha\" aria-hidden=\"true\">
        <form id=\"captcha-form\" method=\"post\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title fw-bold\">{{ 'admin.store.setting.get_api_key'|trans }}</h5>
                        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <p>新しい認証キーを発行します。既に認証キーがある場合は、発行せずに既存のキーを設定してください。</p>
                        <img id=\"captcha_image\" class=\"mb-2\" src=\"#\">
                        <button id=\"captcha-refresh\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
                        <input type=\"text\" id=\"captcha_text\" value=\"\" class=\"form-control\" placeholder=\"{{ 'admin.store.setting.captcha_message'|trans }}\"/>
                        <input type=\"hidden\" id=\"captcha_id\" value=\"\"/>
                        <span id=\"captcha_error\" class=\"invalid-feedback\" style=\"display: none\">
                            <span class=\"mb-0 d-block\">
                                <span class=\"initialism form-error-icon badge bg-danger\">{{ 'admin.store.setting.captcha_error'|trans }}</span> <span class=\"form-error-message\">{{ 'admin.store.setting.invalid_captcha'|trans }}</span>
                            </span>
                        </span>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'common.cancel'|trans }}</button>
                        <button id=\"generate_key\" class=\"btn btn-ec-conversion\" type=\"button\">{{ 'admin.store.setting.get_api_key'|trans }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
{% endblock %}
", "@admin/Store/authentication_setting.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Store\\authentication_setting.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("constant" => 65, "url" => 101, "form_widget" => 102);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['constant', 'url', 'form_widget'],
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
