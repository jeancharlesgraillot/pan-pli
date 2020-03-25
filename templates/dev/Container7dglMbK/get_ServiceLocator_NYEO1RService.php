<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.NYEO_1R' shared service.

return $this->privates['.service_locator.NYEO_1R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'article' => ['privates', '.errored..service_locator.NYEO_1R.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.NYEO_1R": it references class "App\\Entity\\Article" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'article' => 'App\\Entity\\Article',
    'manager' => '?',
    'repo' => 'App\\Repository\\UserRepository',
]);