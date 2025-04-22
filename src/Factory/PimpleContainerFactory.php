<?php declare(strict_types=1);

namespace AlanVdb\Container\Factory;

use AlanVdb\Container\Definition\PimpleContainerFactoryInterface;
use Pimple\Container;

class PimpleContainerFactory implements PimpleContainerFactoryInterface
{
    public function createContainer(array $config = []): Container
    {
        return new Container($config);
    }
}
