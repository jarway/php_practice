<?php
class Db_tools {
	private $link = FALSE;
	
	function __construct($server, $user, $password) {
		$this->link = mysql_connect($server, $user, $password)
			or die('Connection failed!');
		mysql_query('SET NAMES utf8');
		//echo 'construct<br />';
	}
	
	function __destruct() {
		if ($this->link)
			mysql_close($this->link);
		//echo 'destruct<br />';
	}
	
	function select_db($database) {
		mysql_select_db($database)
			or die('Select database failed!');
		//echo 'select database<br />';
	}
	
	function &query($sql) {
		$result = mysql_query($sql);
		$ret = false;
		
		list($cmd) = explode(' ', $sql, 2);
		switch (strtolower($cmd)) {
		case 'select':
			$ret_ary = array();
			while ($row = mysql_fetch_object($result))
				$ret_ary[] = $row;
			$ret = $ret_ary;
			mysql_free_result($result);
			break;
		case 'update':
			$ret = mysql_affected_rows();
			break;
		default:
			echo 'Invalid SQL command!';
		}
		
		return $ret;
	}
}
?>