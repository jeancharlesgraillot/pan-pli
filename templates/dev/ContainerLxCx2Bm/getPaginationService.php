<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\Pagination' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Service/Pagination.php';

return $this->privates['App\\Service\\Pagination'] = new \App\Service\Pagination(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));
