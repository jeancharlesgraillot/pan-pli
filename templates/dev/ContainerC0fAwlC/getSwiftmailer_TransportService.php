<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.transport' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\SpoolTransport.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Spool.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\MemorySpool.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventDispatcher.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SimpleEventDispatcher.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventListener.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SendListener.php';
include_once \dirname(__DIR__, 4).'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Plugins\\MessageLogger.php';

$this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());

$instance->registerPlugin(($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

return $instance;
