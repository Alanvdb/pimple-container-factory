<?php declare(strict_types=1);

namespace AlanVdb\Container\Definition;

use Pimple\Container;

interface PimpleContainerFactoryInterface
{
    public function createContainer(array $config = []): Container;
}
