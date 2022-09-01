<?php

namespace app\controllers;

use app\core\Controller;

class NewsController extends Controller {

	public function newsAction() {
    if (array_key_exists('page', $_GET)) {
      $page = $_GET['page'];
    } else $page = 1;
		$result = $this->model->getNews($page);
		$this->view->render($result);
	}
}