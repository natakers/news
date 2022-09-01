<?php

namespace app\models;

use app\core\Model;

class NewsModel extends Model {

	public function getNews($page) {
    $per_pege = 5;
    $pages = ceil(count($this->db_data)/$per_pege);
    $result = array_slice($this->db_data, ($per_pege*(+$page-1)), 5);
		return [$pages, $per_pege, $page, $result];
	}
}