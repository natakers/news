
<?php

use app\controllers\ViewController;

spl_autoload_register(function($class) {
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)) {
    require $path;
  }
});

$path = 'controllers\\ViewController';
$action = 'viewAction';
$controller = new ViewController('view');
$controller->$action();