<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\PasswordUpdateType' shared autowired service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
include_once \dirname(__DIR__, 4).'\\src\\Form\\ApplicationType.php';
include_once \dirname(__DIR__, 4).'\\src\\Form\\PasswordUpdateType.php';

return $this->privates['App\\Form\\PasswordUpdateType'] = new \App\Form\PasswordUpdateType();
