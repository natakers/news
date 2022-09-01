<?php

namespace app\core;

class View {

	public $route;

	public function __construct($route) {
		$this->route = $route;
	}

	public function render($vars) {
		require 'app/views/'.ucfirst($this->route).'View.php';
	}

}	