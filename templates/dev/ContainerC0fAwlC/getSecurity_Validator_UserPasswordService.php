<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.validator.user_password' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Validator\\Constraints\\UserPasswordValidator.php';

return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')));