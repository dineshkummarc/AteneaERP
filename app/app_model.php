<?php

class AppModel extends Model {
	function __construct()
	{
		parent::__construct();
		$this->query("SET NAMES 'utf8'");
	}
}

?>
