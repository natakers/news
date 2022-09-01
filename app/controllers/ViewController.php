<?php

namespace app\controllers;

use app\core\Controller;

class ViewController extends Controller {

	public function viewAction() {
    if (array_key_exists('id', $_GET)) {
      $id = $_GET['id'];
    } else $id = 0;
    $result = $this->model->getNew($id);
		$this->view->render($result);
	}
}