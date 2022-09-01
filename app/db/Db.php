<?php

namespace app\db;

use PDO;

class Db {

	public $db;
  public $db_data;
	
	public function __construct() {
		$config = require 'db_config.php';
    $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}

	public function query() {
    $result = $this->getAllNews();
    return $result;
	}

  function getAllNews() {
    $sql = 'SELECT * from news';
    $prep = $this->db->prepare($sql);
    $prep->execute();
    $this->db_data = $prep->fetchAll(PDO::FETCH_ASSOC);
    usort($this->db_data, function($a, $b){return ($b['idate'] - $a['idate']);});
    return $this->db_data;
  }
}