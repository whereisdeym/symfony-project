<?php

namespace ContainerEYKBhpi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D9yy3cjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D9yy3cj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D9yy3cj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'typeBillet' => ['privates', '.errored..service_locator.D9yy3cj.App\\Entity\\TypeBillet', NULL, 'Cannot autowire service ".service_locator.D9yy3cj": it needs an instance of "App\\Entity\\TypeBillet" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'typeBillet' => 'App\\Entity\\TypeBillet',
            'entityManager' => '?',
        ]);
    }
}
