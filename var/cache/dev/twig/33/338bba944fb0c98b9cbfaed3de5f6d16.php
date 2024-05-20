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

/* MigrationSample/PluginManager.php */
class __TwigTemplate_81b926f45e60c181d6b7128873597945 extends \Eccube\Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/PluginManager.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/PluginManager.php"));

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

namespace Plugin\\MigrationSample;

use Eccube\\Plugin\\AbstractPluginManager;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    const VERSION = '1.0.0';

    /**
     * Install the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function install(array \$meta, ContainerInterface \$container)
    {
        dump('install '.self::VERSION);
    }

    /**
     * Update the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('update '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code']);
    }

    /**
     * Enable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        dump('enable '.self::VERSION);
    }

    /**
     * Disable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('disable '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code'], '0');
    }

    /**
     * Uninstall the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function uninstall(array \$meta, ContainerInterface \$container)
    {
        dump('uninstall '.self::VERSION);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "MigrationSample/PluginManager.php";
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

namespace Plugin\\MigrationSample;

use Eccube\\Plugin\\AbstractPluginManager;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    const VERSION = '1.0.0';

    /**
     * Install the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function install(array \$meta, ContainerInterface \$container)
    {
        dump('install '.self::VERSION);
    }

    /**
     * Update the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('update '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code']);
    }

    /**
     * Enable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        dump('enable '.self::VERSION);
    }

    /**
     * Disable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('disable '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code'], '0');
    }

    /**
     * Uninstall the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function uninstall(array \$meta, ContainerInterface \$container)
    {
        dump('uninstall '.self::VERSION);
    }
}
", "MigrationSample/PluginManager.php", "F:\\laragon\\www\\shop\\app\\Plugin\\MigrationSample\\PluginManager.php");
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
