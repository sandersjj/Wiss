<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
        'router' => array(
                'routes' => array(
                        'page-wildcard' => array(
                                'type'    => 'Wildcard',
                                'options' => array(
                                        'route'    => '*',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller'    => 'pageContent',
                                                'action'        => 'route',
                                        ),
                                ),
                        ),
                        'page' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/pages',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller' => 'page',
                                                'action' => 'index',
                                        ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                        'properties' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/properties/[:id]',
                                                        'constraints' => array(
                                                                'id' => '[0-9-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'properties',
                                                        ),
                                                ),
                                        ),
                                        'content' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/content/[:id]',
                                                        'constraints' => array(
                                                                'id' => '[0-9-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'content',
                                                        ),
                                                ),
                                        ),
                                )
                        ),
                        'navigation' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/navigation',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller' => 'navigation',
                                                'action' => 'index',
                                        ),
                                )
                        ),
                        'model' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/models',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller' => 'model',
                                                'action' => 'index',
                                        ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                        'default' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/[:action]',
                                                        'constraints' => array(
                                                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                        ),
                                                ),
                                        ),
                                        'install' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/install/[:class]',
                                                        'constraints' => array(
                                                                'class'     => '[A-Z][a-zA-Z0-9_-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'install',
                                                        ),
                                                ),
                                        ),
                                        'export' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/export/[:name]',
                                                        'constraints' => array(
                                                                'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'export',
                                                        ),
                                                ),
                                        ),
                                        'edit' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/edit/[:id]',
                                                        'constraints' => array(
                                                                'id' => '[0-9-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'edit',
                                                        ),
                                                ),
                                        ),
                                )
                        ),
                        'module' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/modules',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller'    => 'module',
                                                'action'        => 'index',
                                        ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                        'default' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/[:action]',
                                                        'constraints' => array(
                                                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                        ),
                                                        'defaults' => array(
                                                        ),
                                                ),
                                        ),
                                        'install' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                        'route'    => '/install/[:name]',
                                                        'constraints' => array(
                                                                'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                        ),
                                                        'defaults' => array(
                                                                'action' => 'install'
                                                        ),
                                                ),
                                        ),
                                        'export' => array(
                                                'type'    => 'Literal',
                                                'options' => array(
                                                        'route'    => '/export',
                                                        'defaults' => array(
                                                                'action' => 'export'
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                        'install' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/install',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller'    => 'index',
                                                'action'        => 'install',
                                        ),
                                ),
                        ),
                        'install-models' => array(
                                'type'    => 'Literal',
                                'options' => array(
                                        'route'    => '/install-models',
                                        'defaults' => array(
                                                '__NAMESPACE__' => 'Wiss\Controller',
                                                'controller'    => 'index',
                                                'action'        => 'install-models',
                                        ),
                                ),
                        ),
                )
        ),
        'navigation' => array(
                'cms' => array(
                        'navigation' => array(
                                'label' => 'Navigation',
                                'route' => 'navigation',
                        ),
                        'content' => array(
                                'label' => 'Content',
                                'route' => 'page',
                                'pages' => array(
                                        'page' => array(
                                                'label' => 'Pages',
                                                'route' => 'page',
                                                'pages' => array(
                                                        'properties' => array(
                                                                'label' => 'Properties',
                                                                'route' => 'page/properties'
                                                        ),
                                                        'content' => array(
                                                                'label' => 'Content',
                                                                'route' => 'page/content'
                                                        ),
                                                )
                                        )
                                )
                        ),
                        'administration' => array(
                                'label' => 'Administration',
                                'route' => 'module',
                                'pages' => array(
                                        'module' => array(
                                                'label' => 'Modules',
                                                'route' => 'module',
                                                'pages' => array(
                                                        'installed' => array(
                                                                'label' => 'Installed',
                                                                'route' => 'module',
                                                        ),
                                                        'uninstalled' => array(
                                                                'label' => 'Uninstalled',
                                                                'route' => 'module/default',
                                                                'params' => array(
                                                                        'action' => 'uninstalled'
                                                                )
                                                        ),
                                                )
                                        ),
                                        'models' => array(
                                                'label' => 'Models',
                                                'route' => 'model',
                                                'pages' => array(
                                                        'installed' => array(
                                                                'label' => 'Installed',
                                                                'route' => 'model',
                                                        ),
                                                        'uninstalled' => array(
                                                                'label' => 'Uninstalled',
                                                                'route' => 'model/default',
                                                                'params' => array(
                                                                        'action' => 'uninstalled'
                                                                ),
                                                                'pages' => array(
                                                                        'install' => array(
                                                                                'label' => 'Install',
                                                                                'route' => 'model/install'
                                                                        ),
                                                                )
                                                        ),
                                                )
                                        ),
                                )
                        ),
                        'install' => array(
                                'label' => 'Install',
                                'route' => 'install',
                        )
                )
        ),
        'service_manager' => array(
                'factories' => array(
                        'default' => 'Zend\Navigation\Service\DefaultNavigationFactory',
                        'cms' => 'Wiss\Navigation\Service\CmsNavigationFactory'
                ),
        ),
        'controllers' => array(
                'invokables' => array(
                        'Wiss\Controller\Index'			=> 'Wiss\Controller\IndexController',
                        'Wiss\Controller\Module'		=> 'Wiss\Controller\ModuleController',
                        'Wiss\Controller\Page'			=> 'Wiss\Controller\PageController',
                        'Wiss\Controller\PageContent'	=> 'Wiss\Controller\PageContentController',
                        'Wiss\Controller\Model'			=> 'Wiss\Controller\ModelController',
                        'Wiss\Controller\Navigation'	=> 'Wiss\Controller\NavigationController',
                        'Wiss\Controller\Crud'			=> 'Wiss\Controller\CrudController',
                ),
        ),
        'view_manager' => array(
                'template_path_stack' => array(
                        __DIR__ . '/../view',
                ),
        ),
        'doctrine' => array(
                'driver' => array(
                        'orm_default' => array(
                                'drivers' => array(
                                        'Wiss' => 'wiss_driver'
                                )
                        ),
                        'wiss_driver' => array(
                                'paths' => array(__NAMESPACE__ . '/Entity'),
                        ),
                ),
        ),
        'asset_manager' => array(
                'resolver_configs' => array(
                        'paths' => array(
                                'Wiss' => __DIR__ . '/../assets',
                        ),
                        'collections' => array(
                                'js/compiled.js' => array(
                                        'js/jquery-1.7.2.min.js',
                                        'js/bootstrap.min.js',
                                        'js/jstree/jquery.jstree.js',
                                        'js/site.js',
                                ),
                                'css/compiled.css' => array(
                                        'css/bootstrap.min.css',
                                        'js/jstree/themes/default/style.css',
                                        'css/style.css',
                                )
                        )
                )
        ),
);
