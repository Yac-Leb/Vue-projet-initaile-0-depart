<?php

namespace ContainerPB9wUxN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_State_CollectionProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.state.collection_provider' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\State\CollectionProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-common'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'LinksHandlerLocatorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-common'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'LinksHandlerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-orm'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'LinksHandlerTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'doctrine-orm'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'CollectionProvider.php';

        return $container->privates['api_platform.doctrine.orm.state.collection_provider'] = new \ApiPlatform\Doctrine\Orm\State\CollectionProvider(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->services['doctrine'] ?? self::getDoctrineService($container)), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterService'));
            yield 1 => ($container->privates['api_platform.doctrine.orm.extension.parameter_extension'] ?? $container->load('getApiPlatform_Doctrine_Orm_Extension_ParameterExtensionService'));
            yield 2 => ($container->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService'));
            yield 3 => ($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService'));
            yield 4 => ($container->privates['api_platform.doctrine.orm.query_extension.order'] ??= new \ApiPlatform\Doctrine\Orm\Extension\OrderExtension('ASC'));
            yield 5 => ($container->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService'));
        }, 6), ($container->privates['.service_locator.aVKDDNU'] ?? $container->load('get_ServiceLocator_AVKDDNUService')));
    }
}
