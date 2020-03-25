<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.nCU.jTK' shared service.

return $this->privates['.service_locator.nCU.jTK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pagination' => ['privates', 'App\\Service\\Pagination', 'getPaginationService.php', true],
    'repo' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService.php', true],
], [
    'pagination' => 'App\\Service\\Pagination',
    'repo' => 'App\\Repository\\CommentRepository',
]);
