<?php

use app\controllers\NewsController;

spl_autoload_register(function($class) {
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)) {
    require $path;
  }
});

$path = 'controllers\\NewsController';
$action = 'newsAction';
$controller = new NewsController('news');
$controller->$action();



