<?php
class Db_tools {
	private $link = FALSE;
	
	function __construct($server, $user, $password) {
		$this->link = mysql_connect($server, $user, $password)
			or die('Connection failed!');
		echo 'construct<br />';
	}
	
	function __destruct() {
		if ($this->link)
			mysql_close($this->link);
		echo 'destruct<br />';
	}
	
	function select_db($database) {
		mysql_select_db($database)
			or die('Select database failed!');
		echo 'select database<br />';
	}
}
?>