<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.fx3nj2M' shared service.

return $this->privates['.service_locator.fx3nj2M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'user' => ['privates', '.errored..service_locator.fx3nj2M.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.fx3nj2M": it references class "App\\Entity\\User" but no such service exists.'],
], [
    'manager' => '?',
    'user' => 'App\\Entity\\User',
]);
