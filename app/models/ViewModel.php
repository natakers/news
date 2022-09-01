<?php

namespace app\models;

use app\core\Model;

class ViewModel extends Model {

	public function getNew($id) {
    $result = array_slice($this->db_data, $id, 1);
		return $result;
	}
}