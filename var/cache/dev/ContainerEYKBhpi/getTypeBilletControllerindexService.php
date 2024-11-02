<?php

namespace ContainerEYKBhpi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeBilletControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MfWGcK3.App\Controller\TypeBilletController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MfWGcK3.App\\Controller\\TypeBilletController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'typeBilletRepository' => ['privates', 'App\\Repository\\TypeBilletRepository', 'getTypeBilletRepositoryService', true],
        ], [
            'typeBilletRepository' => 'App\\Repository\\TypeBilletRepository',
        ]))->withContext('App\\Controller\\TypeBilletController::index()', $container);
    }
}