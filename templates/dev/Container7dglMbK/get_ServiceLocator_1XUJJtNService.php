<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.1XUJJtN' shared service.

return $this->privates['.service_locator.1XUJJtN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pagination' => ['privates', 'App\\Service\\Pagination', 'getPaginationService.php', true],
    'repo' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService.php', true],
], [
    'pagination' => 'App\\Service\\Pagination',
    'repo' => 'App\\Repository\\RoleRepository',
]);
