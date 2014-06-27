<?php
class Db_tools {
	private $link = FALSE;
	
	function __construct($server, $user, $password) {
		$this->link = mysql_connect($server, $user, $password)
			or die('Connection failed!');
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
		$ret_ary = array();
		while ($row = mysql_fetch_assoc($result))
			$ret_ary[] = $row;
		
		mysql_free_result($result);
		return $ret_ary;
	}
}
?>