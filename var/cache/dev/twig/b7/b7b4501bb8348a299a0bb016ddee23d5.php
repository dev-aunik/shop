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

/* QueryCustomize/Repository/AdminCustomerCustomizer.php */
class __TwigTemplate_0ee86f52a1ddf6af1dd8664cc6b29df4 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/Repository/AdminCustomerCustomizer.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/Repository/AdminCustomerCustomizer.php"));

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

namespace Plugin\\QueryCustomize\\Repository;

use Eccube\\Doctrine\\Query\\WhereClause;
use Eccube\\Doctrine\\Query\\WhereCustomizer;
use Eccube\\Repository\\QueryKey;

class AdminCustomerCustomizer extends WhereCustomizer
{
    /**
     * 1回以上購入している会員を抽出
     *
     * @param array \$params
     * @param \$queryKey
     *
     * @return WhereClause[]
     */
    protected function createStatements(\$params, \$queryKey)
    {
        // travis-ciのテストが通らないため、コメントアウト
        // 試してみるにはコメントアウトを解除してください.
        //return [WhereClause::gte('c.buy_times', ':buy_times', ['buy_times' => 1])];

        return [];
    }

    /**
     * カスタマイズ対象のキーを返します。
     *
     * @return string
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "QueryCustomize/Repository/AdminCustomerCustomizer.php";
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

namespace Plugin\\QueryCustomize\\Repository;

use Eccube\\Doctrine\\Query\\WhereClause;
use Eccube\\Doctrine\\Query\\WhereCustomizer;
use Eccube\\Repository\\QueryKey;

class AdminCustomerCustomizer extends WhereCustomizer
{
    /**
     * 1回以上購入している会員を抽出
     *
     * @param array \$params
     * @param \$queryKey
     *
     * @return WhereClause[]
     */
    protected function createStatements(\$params, \$queryKey)
    {
        // travis-ciのテストが通らないため、コメントアウト
        // 試してみるにはコメントアウトを解除してください.
        //return [WhereClause::gte('c.buy_times', ':buy_times', ['buy_times' => 1])];

        return [];
    }

    /**
     * カスタマイズ対象のキーを返します。
     *
     * @return string
     */
    public function getQueryKey()
    {
        return QueryKey::CUSTOMER_SEARCH;
    }
}
", "QueryCustomize/Repository/AdminCustomerCustomizer.php", "F:\\laragon\\www\\shop\\app\\Plugin\\QueryCustomize\\Repository\\AdminCustomerCustomizer.php");
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
