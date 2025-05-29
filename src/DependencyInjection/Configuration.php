<?php

namespace VBH\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('vbh_hello_world_bundle');

        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->booleanNode('enable_feature')->defaultTrue()->end()
            ->scalarNode('logger_level')->defaultValue('info')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}