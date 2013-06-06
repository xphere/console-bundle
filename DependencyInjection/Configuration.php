<?php

/**
 * This file is part of the Berny\ConsoleBundle package
 *
 * (c) Berny Cantos <be@rny.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Berny\Bundle\Console\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $builder->root('console')
            ->children()
                ->arrayNode('application')
                    ->children()
                        ->scalarNode('name')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('version')
                            ->isRequired()
                            ->cannotBeEmpty()
        ;

        return $builder;
    }
}
