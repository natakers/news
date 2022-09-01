<?php

namespace app\core;

use app\db\Db;

abstract class Model {

	public $db;
  public $db_data;
	
	public function __construct() {
		$this->db = new Db;
    $this->db_data = $this->db->query();
	}

}