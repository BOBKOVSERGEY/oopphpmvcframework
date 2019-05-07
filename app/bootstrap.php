<?php
  // Load Config
require_once __DIR__ . '/config/config.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
  require_once __DIR__ . '/libraries/' . $className . '.php';
});