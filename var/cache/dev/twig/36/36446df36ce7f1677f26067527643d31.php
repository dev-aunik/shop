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

/* PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php */
class __TwigTemplate_ae0fad7474dd3b4d3d48fc1fc0c91d36 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\PurchaseProcessors\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\CartFlow;
use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;

/**
 * 商品を１個のみしか購入できないようにするサンプル
 *
 * # 使い方
 * PurchaseFlowに新しいProcessorを追加する
 *
 * ## 追加できるプロセッサ
 * 以下のクラスまたはインタフェースを継承または実装している必要がある
 * * ItemPreprocessor
 * * ItemValidator
 * * ItemHolderPreprocessor
 * * ItemHolderValidator
 * * PurchaseProcessor
 *
 * ## 追加対象のフローの指定方法
 * * カートのPurchaseFlowにProcessorを追加する場合はCartFlowアノテーションを追加
 * * 購入フローのPurchaseFlowにProcessorを追加する場合はShoppingFlowアノテーションを追加
 * * 管理画面でのPurchaseFlowにProcessorを追加する場合はOrderFlowアノテーションを追加
 *
 * @CartFlow
 * @ShoppingFlow
 * @OrderFlow
 */
class SaleLimitOneValidator extends ItemValidator
{
    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     *
     * @throws InvalidItemException
     */
    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$quantity = \$item->getQuantity();
        if (1 < \$quantity) {
            \$this->throwInvalidItemException('商品は１個しか購入できません。');
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$item->setQuantity(1);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\PurchaseProcessors\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\CartFlow;
use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;

/**
 * 商品を１個のみしか購入できないようにするサンプル
 *
 * # 使い方
 * PurchaseFlowに新しいProcessorを追加する
 *
 * ## 追加できるプロセッサ
 * 以下のクラスまたはインタフェースを継承または実装している必要がある
 * * ItemPreprocessor
 * * ItemValidator
 * * ItemHolderPreprocessor
 * * ItemHolderValidator
 * * PurchaseProcessor
 *
 * ## 追加対象のフローの指定方法
 * * カートのPurchaseFlowにProcessorを追加する場合はCartFlowアノテーションを追加
 * * 購入フローのPurchaseFlowにProcessorを追加する場合はShoppingFlowアノテーションを追加
 * * 管理画面でのPurchaseFlowにProcessorを追加する場合はOrderFlowアノテーションを追加
 *
 * @CartFlow
 * @ShoppingFlow
 * @OrderFlow
 */
class SaleLimitOneValidator extends ItemValidator
{
    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     *
     * @throws InvalidItemException
     */
    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$quantity = \$item->getQuantity();
        if (1 < \$quantity) {
            \$this->throwInvalidItemException('商品は１個しか購入できません。');
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$item->setQuantity(1);
    }
}
", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php", "F:\\laragon\\www\\shop\\app\\Plugin\\PurchaseProcessors\\Service\\PurchaseFlow\\Processor\\SaleLimitOneValidator.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
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
