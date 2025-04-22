# Pimple Container Factory

A lightweight factory for creating [Pimple](https://github.com/silexphp/Pimple) containers, including support for PSR-11 compliant containers.


## Features

- Simple container factory based on Pimple
- PSR-11 container wrapper using `Pimple\Psr11\Container`
- Designed with interface abstraction for testability and extensibility


## Installation

You can install this package via [Composer](https://getcomposer.org/):

```bash
composer require alanvdb/pimple-container-factory
```


## Usage


### Basic Pimple Container

To create a raw Pimple container:

```php
use AlanVdb\Container\Factory\PimpleContainerFactory;

$factory = new PimpleContainerFactory();
$container = $factory->createContainer([
    'service' => function () {
        return new \Some\Service();
    },
]);

$service = $container['service'];
```


### PSR-11 Compatible Container

To create a container compatible with Psr\Container\ContainerInterface:

```php
use AlanVdb\Container\Factory\PimplePsr11ContainerFactory;

$factory = new PimplePsr11ContainerFactory();
$container = $factory->createContainer([
    'service' => function () {
        return new \Some\Service();
    },
]);

$service = $container->get('service');
```
## Interfaces
This package uses interfaces for container factories, located under:

- AlanVdb\Container\Definition\PimpleContainerFactoryInterface
- AlanVdb\Container\Definition\ContainerFactoryInterface

You can rely on these interfaces for dependency injection or testing purposes.

## Requirements
PHP 8.2 or higher

## License
This package is open-source and licensed under the MIT License.

Made with ❤️ by AlanVdb
