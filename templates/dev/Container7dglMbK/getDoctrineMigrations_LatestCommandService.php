<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.latest_command' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsLatestDoctrineCommand.php';

$this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

$instance->setName('doctrine:migrations:latest');

return $instance;
