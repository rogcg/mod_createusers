<?php

// No direct access to this file
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

// Get the message from the helper class
$message = modCreateUsersHelper::getGreetingMessage();

require JModuleHelper::getLayoutPath('mod_createusers');
