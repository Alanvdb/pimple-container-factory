<?php declare(strict_types=1);

namespace AlanVdb\Container\Factory;

use AlanVdb\Container\Definition\ContainerFactoryInterface;
use Pimple\Container;
use Pimple\Psr11\Container as Psr11Container;
use Psr\Container\ContainerInterface;

class PimplePsr11ContainerFactory implements ContainerFactoryInterface
{
    public function createContainer(array $config = []): ContainerInterface
    {
        return new Psr11Container(new Container($config));
    }
}
