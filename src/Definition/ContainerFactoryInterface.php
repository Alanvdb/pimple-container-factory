<?php declare(strict_types=1);

namespace AlanVdb\Container\Definition;

use Psr\Container\ContainerInterface;

interface ContainerFactoryInterface
{
    /**
     * Creates a container instance.
     *
     * @param array $config Configuration array for the container.
     * @return ContainerInterface The created container instance.
     */
    public function createContainer(array $config = []): ContainerInterface;
}