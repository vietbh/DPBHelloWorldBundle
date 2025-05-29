<?php

namespace DBP\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class DBPHelloWorldExtension extends Extension
{
    /**
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../../Resources/config')
        );
        $loader->load('services.yaml'); // hoặc tùy tên file
        // Load & validate config
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // Truy cập các giá trị
        $loggerLevel = $config['logger_level']; // 'info', 'debug', etc.
    }
}