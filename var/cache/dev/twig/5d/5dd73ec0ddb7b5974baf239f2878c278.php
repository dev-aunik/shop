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

/* Mypage/login.twig */
class __TwigTemplate_0df76e32af12c41021a28e9fd55b7f9b extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/login.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/login.twig"));

        // line 13
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/login.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.login"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off2Grid\">
            <div class=\"ec-off2Grid__cell\">
                <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
        echo "\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, true, 23), "flashBag", [], "any", false, false, true, 23), "has", [0 => "eccube.login.target.path"], "method", false, false, true, 23)) {
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "session", [], "any", false, false, true, 24), "flashBag", [], "any", false, false, true, 24), "peek", [0 => "eccube.login.target.path"], "method", false, false, true, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 25
                echo "                            <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["targetPath"], 25, $this->source), "html", null, true);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "login_email", [], "any", false, false, true, 34), 34, $this->source), 'widget', ["attr" => ["style" => "ime-mode: disabled;", "placeholder" => "common.mail_address", "autofocus" => true]]);
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "login_pass", [], "any", false, false, true, 35), 35, $this->source), 'widget', ["attr" => ["placeholder" => "common.password"]]);
        echo "
                            </div>
                            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 37, $this->source); })()), "option_remember_me", [], "any", false, false, true, 37)) {
            // line 38
            echo "                            <div class=\"ec-checkbox\">
                                <label>
                                    ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 41
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 43
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "login_memory", [], "any", false, false, true, 43), 43, $this->source), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.remember_me")]);
                echo "
                                    ";
            }
            // line 45
            echo "                                </label>
                            </div>
                            ";
        }
        // line 48
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, true, 48), "flashbag", [], "any", false, false, true, 48), "get", [0 => "password_reset_complete"], "method", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["reset_complete"]) {
            // line 49
            echo "                                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["reset_complete"], 49, $this->source)), "html", null, true);
            echo "</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reset_complete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "                                <p class=\"ec-errorMessage\">";
            echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageKey", [], "any", false, false, true, 52), 52, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "messageData", [], "any", false, false, true, 52), 52, $this->source), "validators"), "html", null, true));
            echo "</p>
                            ";
        }
        // line 54
        echo "                        </div>
                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\"
                                            class=\"ec-blockBtn--cancel\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.login"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("forgot");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.forgot_login"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.signup"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  196 => 67,  188 => 64,  180 => 59,  173 => 54,  167 => 52,  164 => 51,  155 => 49,  150 => 48,  145 => 45,  139 => 43,  135 => 41,  133 => 40,  129 => 38,  127 => 37,  122 => 35,  118 => 34,  111 => 30,  107 => 28,  104 => 27,  95 => 25,  90 => 24,  88 => 23,  84 => 22,  77 => 18,  73 => 16,  63 => 15,  52 => 11,  50 => 13,  37 => 11,);
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

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'common.login'|trans }}</h1>
        </div>
        <div class=\"ec-off2Grid\">
            <div class=\"ec-off2Grid__cell\">
                <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"{{ url('mypage_login') }}\">
                    {% if app.session.flashBag.has('eccube.login.target.path') %}
                        {% for targetPath in app.session.flashBag.peek('eccube.login.target.path') %}
                            <input type=\"hidden\" name=\"_target_path\" value=\"{{ targetPath }}\" />
                        {% endfor %}
                    {% endif %}
                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"{{ asset('assets/icon/user.svg') }}\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                {{ form_widget(form.login_email, {'attr': {'style' : 'ime-mode: disabled;', 'placeholder' : 'common.mail_address', 'autofocus': true}}) }}
                                {{ form_widget(form.login_pass,  {'attr': {'placeholder' : 'common.password' }}) }}
                            </div>
                            {% if BaseInfo.option_remember_me %}
                            <div class=\"ec-checkbox\">
                                <label>
                                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    {% else %}
                                        {{ form_widget(form.login_memory, { 'label': 'common.remember_me'|trans }) }}
                                    {% endif %}
                                </label>
                            </div>
                            {% endif %}
                            {% for reset_complete in app.session.flashbag.get('password_reset_complete') %}
                                <p>{{ reset_complete|trans }}</p>
                            {% endfor %}
                            {% if error %}
                                <p class=\"ec-errorMessage\">{{ error.messageKey|trans(error.messageData, 'validators')|nl2br }}</p>
                            {% endif %}
                        </div>
                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\"
                                            class=\"ec-blockBtn--cancel\">{{ 'common.login'|trans }}</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"{{ url('forgot') }}\">{{ 'common.forgot_login'|trans }}</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\"
                                                               href=\"{{ url('entry') }}\">{{ 'common.signup'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/login.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\default\\Mypage\\login.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 23, "for" => 24);
        static $filters = array("escape" => 18, "trans" => 18, "nl2br" => 52);
        static $functions = array("url" => 22, "asset" => 30, "form_widget" => 34, "is_granted" => 40, "csrf_token" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'nl2br'],
                ['url', 'asset', 'form_widget', 'is_granted', 'csrf_token'],
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
