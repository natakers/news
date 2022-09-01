<?php

namespace app\core;

use app\core\View;

abstract class Controller {

	public $route;
	public $view;

	public function __construct($route) {
		$this->route = $route;
		$this->model = $this->loadModel($route);
    $this->view = new View($route);
	}

	public function loadModel($name) {
		$path = 'app\models\\'.ucfirst($name).'Model';
		return new $path;
	}
}