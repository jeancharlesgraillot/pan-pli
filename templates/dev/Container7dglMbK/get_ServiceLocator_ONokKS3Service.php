<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.oNokKS3' shared service.

return $this->privates['.service_locator.oNokKS3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'role' => ['privates', '.errored..service_locator.oNokKS3.App\\Entity\\Role', NULL, 'Cannot autowire service ".service_locator.oNokKS3": it references class "App\\Entity\\Role" but no such service exists.'],
], [
    'manager' => '?',
    'role' => 'App\\Entity\\Role',
]);
