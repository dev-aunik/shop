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

/* @admin/Content/file.twig */
class __TwigTemplate_e893da55051394dac894d64013211bc5 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/file.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/file.twig"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "file"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/file.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file_management"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
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
        .copy-file-path {
            display: none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 29
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/file_manager.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        arrTree = ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed((isset($context["tpl_javascript"]) || array_key_exists("tpl_javascript", $context) ? $context["tpl_javascript"] : (function () { throw new RuntimeError('Variable "tpl_javascript" does not exist.', 31, $this->source); })()), 31, $this->source);
        echo ";
        var paths = ";
        // line 32
        echo $this->sandbox->ensureToStringAllowed((isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 32, $this->source); })()), 32, $this->source);
        echo "; // TODO 仮実装
        \$(function() {
            var bread_crumbs = ";
        // line 34
        echo $this->sandbox->ensureToStringAllowed((isset($context["now_dir_list"]) || array_key_exists("now_dir_list", $context) ? $context["now_dir_list"] : (function () { throw new RuntimeError('Variable "now_dir_list" does not exist.', 34, $this->source); })()), 34, $this->source);
        echo ";
            var file_path = '';
            var \$delimiter = '<span>&nbsp;/&nbsp;</span>';
            var \$node = \$('#bread');
            var total = bread_crumbs.length;
            for (var i in bread_crumbs) {
                file_path += '/' + bread_crumbs[i];
                if (i == total - 1) {
                    \$li = \$('<li class=\"breadcrumb-item active\" />').text(bread_crumbs[i]);
                } else {
                    \$a = \$('<a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder(\\'' + file_path.replace(/user_data/, '') + '\\'); return false;\" />')
                        .text(bread_crumbs[i]);
                    \$li = \$('<li class=\"breadcrumb-item\" />').append(\$a);
                }
                \$li.appendTo(\$node);
                if (i < total - 1) \$node.append(\$delimiter);
            }


            \$('.action-copy').on('click',function(){
            \tvar updated = \$(this).parents('tr').find('.updated');
            \tvar copy_file_path = \$(this).parents('tr').find('.copy-file-path');
            \tif (\$(updated).is(':visible')) {
            \t    \$('.updated').each(function() {
            \t        \$(this).show();
            \t    });
            \t    \$('.copy-file-path').each(function() {
            \t        \$(this).hide();
            \t    });
            \t    \$('.action-copy').each(function() {
            \t        \$(this).attr('title', '";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path"), "html", null, true);
        echo "');
            \t        \$(this).tooltip('_fixTitle');
            \t    });

               \t    \$(updated).hide();
            \t    \$(copy_file_path).show();
            \t    \$(copy_file_path).find('input:first').focus();
            \t} else {
            \t    \$(updated).show();
            \t    \$(copy_file_path).hide();
            \t}

            });

            \$('.copy-file-path input').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this).parents('tr').find('.action-copy');
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path_complete"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                }
            });
        });


        eccube.fileManager.viewFileTree('directory_userdata', arrTree, '";
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tpl_now_dir"]) || array_key_exists("tpl_now_dir", $context) ? $context["tpl_now_dir"] : (function () { throw new RuntimeError('Variable "tpl_now_dir" does not exist.', 92, $this->source); })()), 92, $this->source), "html", null, true);
        echo "', 'tree_select_file', 'tree_status', 'move');


    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 98
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"mode\" value=\"\"/>
        <input type=\"hidden\" name=\"now_file\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tpl_now_dir"]) || array_key_exists("tpl_now_dir", $context) ? $context["tpl_now_dir"] : (function () { throw new RuntimeError('Variable "tpl_now_dir" does not exist.', 100, $this->source); })()), 100, $this->source), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"now_dir\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tpl_now_dir"]) || array_key_exists("tpl_now_dir", $context) ? $context["tpl_now_dir"] : (function () { throw new RuntimeError('Variable "tpl_now_dir" does not exist.', 101, $this->source); })()), 101, $this->source), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"tree_select_file\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tpl_now_dir"]) || array_key_exists("tpl_now_dir", $context) ? $context["tpl_now_dir"] : (function () { throw new RuntimeError('Variable "tpl_now_dir" does not exist.', 102, $this->source); })()), 102, $this->source), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"tree_status\" value=\"\"/>
        <input type=\"hidden\" name=\"select_file\" value=\"\"/>
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "_token", [], "any", false, false, true, 105), 105, $this->source), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <nav aria-label=\"breadcrumb\" role=\"navigation\">
                    <ol class=\"breadcrumb mb-2 p-0\" id=\"bread\"></ol>
                </nav>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_file__card_title"), "html", null, true);
        echo "</span></div>
                    <div class=\"card-body\">
                        <div id=\"upload_box__file\" class=\"row mb-2\">
                            <div class=\"col-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.file.upload_file"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_file"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                            <div class=\"col mb-3\">
                                <div class=\"mb-2\">
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "file", [], "any", false, false, true, 118), 118, $this->source), 'widget');
        // line 119
        echo "                                </div>
                                <div class=\"mb-2\">
                                    <a class=\"btn btn-ec-conversion action-upload\" href=\"javascript:;\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('upload','',''); return false;\">";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_directory"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "create_file", [], "any", false, false, true, 130), 130, $this->source), 'widget', ["attr" => ["placeholder" => "admin.content.file.directory_name"]]);
        echo "
                                    </div>
                                    <div class=\"col-auto\">
                                        <a class=\"btn btn-ec-regular action-create\" href=\"javascript:\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('create','',''); return false;\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 139
            echo "                            <p class=\"text-danger errormsg\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 139), 139, $this->source)), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__cols\">
                <div class=\"c-contentsArea__primaryCol\">
                    <div class=\"c-primaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.file_list__card_title"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#fileList\" aria-expanded=\"false\" aria-controls=\"fileList\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"fileList\">
                                <div class=\"card-body p-0\">

                                    <table class=\"table\">
                                        <tbody>
                                        ";
        // line 159
        if (((isset($context["tpl_is_top_dir"]) || array_key_exists("tpl_is_top_dir", $context) ? $context["tpl_is_top_dir"] : (function () { throw new RuntimeError('Variable "tpl_is_top_dir" does not exist.', 159, $this->source); })()) != false)) {
            // line 160
            echo "                                            <tr>
                                                <td class=\"align-middle text-center\" style=\"width: 10%\"><i class=\"fa fa-folder-o fa-2x\"></i></td>
                                                <td class=\"align-middle\"><a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder('";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["tpl_parent_dir"]) || array_key_exists("tpl_parent_dir", $context) ? $context["tpl_parent_dir"] : (function () { throw new RuntimeError('Variable "tpl_parent_dir" does not exist.', 162, $this->source); })()), 162, $this->source), "html", null, true);
            echo "')\"><i class=\"fa fa-reply\"></i></a></td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                            </tr>
                                        ";
        }
        // line 168
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrFileList"]) || array_key_exists("arrFileList", $context) ? $context["arrFileList"] : (function () { throw new RuntimeError('Variable "arrFileList" does not exist.', 168, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 169
            echo "                                            <tr id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "\">
                                                <td class=\"align-middle text-center\">
                                                    ";
            // line 171
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, true, 171)) {
                // line 172
                echo "                                                        <i class=\"fa fa-folder-o fa-2x\"></i>
                                                    ";
            } else {
                // line 174
                echo "                                                        ";
                if (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getExtensionIcon(twig_get_attribute($this->env, $this->source, $context["file"], "extension", [], "any", false, false, true, 174), [], true) == "fa-file-image-o")) {
                    // line 175
                    echo "                                                            <div class=\"d-inline-block p-3 bg-light\"
                                                                 style=\"background: no-repeat center center;
                                                                    background-image: url('";
                    // line 177
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 177), 177, $this->source), 1), "css"), "user_data"), "html", null, true);
                    echo "');
                                                                    background-size: contain; width: 49px; height: 57px;\">
                                                            </div>
                                                        ";
                } else {
                    // line 181
                    echo "                                                            <div class=\"d-inline-block p-3 bg-light\">
                                                                ";
                    // line 182
                    echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getExtensionIcon($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "extension", [], "any", false, false, true, 182), 182, $this->source), ["class" => "fa-2x"]);
                    echo "
                                                            </div>
                                                        ";
                }
                // line 185
                echo "                                                    ";
            }
            // line 186
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    ";
            // line 188
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, true, 188)) {
                // line 189
                echo "                                                        <a href=\"javascript:;\" onclick=\"eccube.setValue('tree_select_file', '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "', 'form1'); eccube.fileManager.selectFile('";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "', '#808080');eccube.setModeAndSubmit('move','',''); return false;\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "</a>
                                                    ";
            } else {
                // line 191
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
                echo "
                                                    ";
            }
            // line 193
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    ";
            // line 195
            if ( !twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, true, 195)) {
                // line 196
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_size", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                echo "
                                                    ";
            }
            // line 198
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    <span class=\"updated\">";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_time", [], "any", false, false, true, 200), 200, $this->source)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.updated"), "html", null, true);
            echo "</span>
                                                    ";
            // line 201
            if ((twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, true, 201) == false)) {
                // line 202
                echo "                                                        <span class=\"copy-file-path\"><input type=\"text\"  class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "user_data"), "html", null, true);
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 202), 202, $this->source), 1), "html", null, true);
                echo "\"></span>
                                                    ";
            }
            // line 204
            echo "                                                </td>
                                                ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, true, 205)) {
                // line 206
                echo "                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete ";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, $context["file"], "is_empty", [], "any", false, false, true, 210) == false)) {
                    echo "disabled";
                }
                echo "\"
                                                                   data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
                // line 211
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i></a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-";
                // line 214
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 218
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 222
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, true, 222)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 225
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_file_delete", ["select_file" => twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 227)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                                    ";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                ";
            } else {
                // line 238
                echo "                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a class=\"btn btn-ec-actionIcon action-copy\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path"), "html", null, true);
                echo "\">
                                                                    <i class=\"fas fa-copy fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"";
                // line 246
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_file_view");
                echo "?file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 246), 246, $this->source), "url"), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-ec-actionIcon action-view\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-eye fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"";
                // line 251
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_file_download");
                echo "?select_file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 251), 251, $this->source), "url"), "html", null, true);
                echo "\" class=\"btn btn-ec-actionIcon action-download\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.download"), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-cloud-download fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
                // line 257
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 257), 257, $this->source), "html", null, true);
                echo "\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-";
                // line 261
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 265
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 269
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, true, 269)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 272
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_file_delete", ["select_file" => twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, true, 274)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                                    ";
                // line 275
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                ";
            }
            // line 285
            echo "                                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-contentsArea__secondaryCol\">
                    <div class=\"c-secondaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.directory_tree"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#folderDirectory\" aria-expanded=\"false\" aria-controls=\"folderDirectory\"><i class=\"fa fa-lg fa-angle-down\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"folderDirectory\">
                                <div class=\"card-body\">
                                    <div class=\"c-directoryTree--folder mb-3\">
                                        <ul id=\"directory_userdata\" class=\"list-unstyled\">
                                            <li>
                                                <label class=\"collapsed\" data-bs-toggle=\"collapse\" href=\"#directory_userdata\" aria-expanded=\"false\" aria-controls=\"directory_userdata\">user_data</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
        return "@admin/Content/file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 299,  667 => 287,  652 => 285,  639 => 275,  633 => 274,  628 => 272,  622 => 269,  615 => 265,  606 => 261,  599 => 257,  595 => 256,  583 => 251,  571 => 246,  563 => 241,  558 => 238,  545 => 228,  539 => 227,  534 => 225,  528 => 222,  521 => 218,  512 => 214,  506 => 211,  500 => 210,  496 => 209,  491 => 206,  489 => 205,  486 => 204,  479 => 202,  477 => 201,  471 => 200,  467 => 198,  461 => 196,  459 => 195,  455 => 193,  449 => 191,  439 => 189,  437 => 188,  433 => 186,  430 => 185,  424 => 182,  421 => 181,  414 => 177,  410 => 175,  407 => 174,  403 => 172,  401 => 171,  395 => 169,  377 => 168,  368 => 162,  364 => 160,  362 => 159,  350 => 150,  339 => 141,  330 => 139,  326 => 138,  318 => 133,  312 => 130,  305 => 126,  297 => 121,  293 => 119,  291 => 118,  283 => 115,  277 => 112,  267 => 105,  261 => 102,  257 => 101,  253 => 100,  249 => 98,  239 => 97,  224 => 92,  212 => 83,  190 => 64,  157 => 34,  152 => 32,  148 => 31,  142 => 29,  132 => 28,  117 => 21,  107 => 20,  88 => 16,  69 => 15,  58 => 11,  56 => 18,  54 => 13,  41 => 11,);
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

{% set menus = ['content', 'file'] %}

{% block title %}{{ 'admin.content.file_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style>
        .copy-file-path {
            display: none;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/file_manager.js', 'admin') }}\"></script>
    <script>
        arrTree = {{ tpl_javascript|raw }};
        var paths = {{ paths|raw }}; // TODO 仮実装
        \$(function() {
            var bread_crumbs = {{ now_dir_list|raw }};
            var file_path = '';
            var \$delimiter = '<span>&nbsp;/&nbsp;</span>';
            var \$node = \$('#bread');
            var total = bread_crumbs.length;
            for (var i in bread_crumbs) {
                file_path += '/' + bread_crumbs[i];
                if (i == total - 1) {
                    \$li = \$('<li class=\"breadcrumb-item active\" />').text(bread_crumbs[i]);
                } else {
                    \$a = \$('<a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder(\\'' + file_path.replace(/user_data/, '') + '\\'); return false;\" />')
                        .text(bread_crumbs[i]);
                    \$li = \$('<li class=\"breadcrumb-item\" />').append(\$a);
                }
                \$li.appendTo(\$node);
                if (i < total - 1) \$node.append(\$delimiter);
            }


            \$('.action-copy').on('click',function(){
            \tvar updated = \$(this).parents('tr').find('.updated');
            \tvar copy_file_path = \$(this).parents('tr').find('.copy-file-path');
            \tif (\$(updated).is(':visible')) {
            \t    \$('.updated').each(function() {
            \t        \$(this).show();
            \t    });
            \t    \$('.copy-file-path').each(function() {
            \t        \$(this).hide();
            \t    });
            \t    \$('.action-copy').each(function() {
            \t        \$(this).attr('title', '{{ 'admin.common.copy_path'|trans }}');
            \t        \$(this).tooltip('_fixTitle');
            \t    });

               \t    \$(updated).hide();
            \t    \$(copy_file_path).show();
            \t    \$(copy_file_path).find('input:first').focus();
            \t} else {
            \t    \$(updated).show();
            \t    \$(copy_file_path).hide();
            \t}

            });

            \$('.copy-file-path input').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this).parents('tr').find('.action-copy');
                    setTimeout(function() {
                        action_copy.attr('title', '{{ 'admin.common.copy_path_complete'|trans }}');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                }
            });
        });


        eccube.fileManager.viewFileTree('directory_userdata', arrTree, '{{ tpl_now_dir }}', 'tree_select_file', 'tree_status', 'move');


    </script>
{% endblock javascript %}
{% block main %}
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"mode\" value=\"\"/>
        <input type=\"hidden\" name=\"now_file\" value=\"{{ tpl_now_dir }}\"/>
        <input type=\"hidden\" name=\"now_dir\" value=\"{{ tpl_now_dir }}\"/>
        <input type=\"hidden\" name=\"tree_select_file\" value=\"{{ tpl_now_dir }}\"/>
        <input type=\"hidden\" name=\"tree_status\" value=\"\"/>
        <input type=\"hidden\" name=\"select_file\" value=\"\"/>
        {{ form_widget(form._token) }}
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <nav aria-label=\"breadcrumb\" role=\"navigation\">
                    <ol class=\"breadcrumb mb-2 p-0\" id=\"bread\"></ol>
                </nav>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">{{ 'admin.content.file.add_file__card_title'|trans }}</span></div>
                    <div class=\"card-body\">
                        <div id=\"upload_box__file\" class=\"row mb-2\">
                            <div class=\"col-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'tooltip.content.file.upload_file'|trans }}\"><span>{{ 'admin.content.file.add_file'|trans }}</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                            <div class=\"col mb-3\">
                                <div class=\"mb-2\">
                                    {{ form_widget(form.file) }}{# TODO input type=\"file\" の装飾 #}
                                </div>
                                <div class=\"mb-2\">
                                    <a class=\"btn btn-ec-conversion action-upload\" href=\"javascript:;\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('upload','',''); return false;\">{{ 'admin.common.upload'|trans }}</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>{{ 'admin.content.file.add_directory'|trans }}</span></div>
                            <div class=\"col\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        {{ form_widget(form.create_file, {attr: {placeholder: 'admin.content.file.directory_name'}}) }}
                                    </div>
                                    <div class=\"col-auto\">
                                        <a class=\"btn btn-ec-regular action-create\" href=\"javascript:\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('create','',''); return false;\">{{ 'admin.common.create__new'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% for error in errors %}
                            <p class=\"text-danger errormsg\">{{ error.message|trans }}</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__cols\">
                <div class=\"c-contentsArea__primaryCol\">
                    <div class=\"c-primaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.content.file.file_list__card_title'|trans }}</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#fileList\" aria-expanded=\"false\" aria-controls=\"fileList\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"fileList\">
                                <div class=\"card-body p-0\">

                                    <table class=\"table\">
                                        <tbody>
                                        {% if tpl_is_top_dir != false %}
                                            <tr>
                                                <td class=\"align-middle text-center\" style=\"width: 10%\"><i class=\"fa fa-folder-o fa-2x\"></i></td>
                                                <td class=\"align-middle\"><a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder('{{ tpl_parent_dir }}')\"><i class=\"fa fa-reply\"></i></a></td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                            </tr>
                                        {% endif %}
                                        {% for file in arrFileList %}
                                            <tr id=\"{{ loop.index }}\">
                                                <td class=\"align-middle text-center\">
                                                    {% if file.is_dir %}
                                                        <i class=\"fa fa-folder-o fa-2x\"></i>
                                                    {% else %}
                                                        {% if file.extension|file_ext_icon({}, true) == 'fa-file-image-o' %}
                                                            <div class=\"d-inline-block p-3 bg-light\"
                                                                 style=\"background: no-repeat center center;
                                                                    background-image: url('{{ asset(file.file_path|slice(1)|escape('css'), 'user_data') }}');
                                                                    background-size: contain; width: 49px; height: 57px;\">
                                                            </div>
                                                        {% else %}
                                                            <div class=\"d-inline-block p-3 bg-light\">
                                                                {{ file.extension|file_ext_icon({class: \"fa-2x\"}) }}
                                                            </div>
                                                        {% endif %}
                                                    {% endif %}
                                                </td>
                                                <td class=\"align-middle\">
                                                    {% if file.is_dir %}
                                                        <a href=\"javascript:;\" onclick=\"eccube.setValue('tree_select_file', '{{ file.file_path }}', 'form1'); eccube.fileManager.selectFile('{{ loop.index }}', '#808080');eccube.setModeAndSubmit('move','',''); return false;\">{{ file.file_name }}</a>
                                                    {% else %}
                                                        {{ file.file_name }}
                                                    {% endif %}
                                                </td>
                                                <td class=\"align-middle\">
                                                    {% if not file.is_dir %}
                                                        {{ file.file_size }}
                                                    {% endif %}
                                                </td>
                                                <td class=\"align-middle\">
                                                    <span class=\"updated\">{{ file.file_time|date_sec }} {{ 'admin.content.file.updated'|trans }}</span>
                                                    {% if file.is_dir == false %}
                                                        <span class=\"copy-file-path\"><input type=\"text\"  class=\"form-control\" value=\"{{asset('', 'user_data')}}{{ file.file_path|slice(1) }}\"></span>
                                                    {% endif %}
                                                </td>
                                                {% if file.is_dir %}
                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete {% if file.is_empty == false %}disabled{% endif %}\"
                                                                   data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-{{ loop.index }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i></a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-{{ loop.index }}\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">{{ 'admin.common.delete_modal__message'|trans({ '%name%': file.file_name }) }}</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"{{ url('admin_content_file_delete', { 'select_file': file.file_path}) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                                                    {{ 'admin.common.delete'|trans }}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                {% else %}
                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a class=\"btn btn-ec-actionIcon action-copy\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.copy_path'|trans }}\">
                                                                    <i class=\"fas fa-copy fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"{{ url('admin_content_file_view') }}?file={{ file.file_path|e('url') }}\" target=\"_blank\" class=\"btn btn-ec-actionIcon action-view\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.display'|trans }}\">
                                                                    <i class=\"fa fa-eye fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"{{ url('admin_content_file_download') }}?select_file={{ file.file_path|e('url') }}\" class=\"btn btn-ec-actionIcon action-download\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.download'|trans }}\">
                                                                    <i class=\"fa fa-cloud-download fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-{{ loop.index }}\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-{{ loop.index }}\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">{{ 'admin.common.delete_modal__message'|trans({ '%name%': file.file_name }) }}</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"{{ url('admin_content_file_delete', { 'select_file': file.file_path}) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                                                                    {{ 'admin.common.delete'|trans }}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                {% endif %}
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-contentsArea__secondaryCol\">
                    <div class=\"c-secondaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.content.file.directory_tree'|trans }}</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#folderDirectory\" aria-expanded=\"false\" aria-controls=\"folderDirectory\"><i class=\"fa fa-lg fa-angle-down\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"folderDirectory\">
                                <div class=\"card-body\">
                                    <div class=\"c-directoryTree--folder mb-3\">
                                        <ul id=\"directory_userdata\" class=\"list-unstyled\">
                                            <li>
                                                <label class=\"collapsed\" data-bs-toggle=\"collapse\" href=\"#directory_userdata\" aria-expanded=\"false\" aria-controls=\"directory_userdata\">user_data</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Content/file.twig", "F:\\laragon\\www\\shop\\src\\Eccube\\Resource\\template\\admin\\Content\\file.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "for" => 138, "if" => 159);
        static $filters = array("escape" => 15, "trans" => 15, "raw" => 31, "file_ext_icon" => 174, "slice" => 177, "date_sec" => 200, "e" => 246);
        static $functions = array("asset" => 29, "form_widget" => 105, "url" => 227, "csrf_token_for_anchor" => 227);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'for', 'if'],
                ['escape', 'trans', 'raw', 'file_ext_icon', 'slice', 'date_sec', 'e'],
                ['asset', 'form_widget', 'url', 'csrf_token_for_anchor'],
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
