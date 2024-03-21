<?php


declare(strict_types=1);

namespace SamplePageBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class PcmtSamplePageExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        //load and merge configuration
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('controllers.yml');
        $loader->load('normalizers.yml');
        $loader->load('services.yml');
        $loader->load('entities.yml');
    }

    public function getAlias(): string
    {
        return 'pcmt_fhir';
    }
}