<?php
namespace VBH\HelloWorldBundle;

use VBH\HelloWorldBundle\DependencyInjection\VBHHelloWorldExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class VBHHelloWorldBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new VBHHelloWorldExtension();
    }
    public function load(array $configs, ContainerBuilder $container)
    {
        // Load & validate config
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        // Truy cập các giá trị
        $loggerLevel = $config['logger_level']; // 'info', 'debug', etc.

        // Có thể dùng $container->setParameter() hoặc cấu hình service
    }
}