<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.schema_drop_command' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DropSchemaDoctrineCommand.php';

$this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

$instance->setName('doctrine:schema:drop');

return $instance;
