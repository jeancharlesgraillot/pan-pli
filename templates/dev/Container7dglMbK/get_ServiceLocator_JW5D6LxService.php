<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.JW5D6Lx' shared service.

return $this->privates['.service_locator.JW5D6Lx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'product' => ['privates', '.errored..service_locator.JW5D6Lx.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.JW5D6Lx": it references class "App\\Entity\\Product" but no such service exists.'],
], [
    'product' => 'App\\Entity\\Product',
]);
