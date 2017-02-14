<?php
	include "/ticketsystem/imports/mysql.php";
	function connect(){
		$connection = mysql_connect(mysql_host, mysql_user, mysql_password)
		or die "Error while trying to log in!";
		return $connection;
	}
	
	function select(){
		mysql_select_db(mysql_database)
		or die "Error while trying to select database";
	}
	
	function insert($table, $inserts){
		mysql_query($query);
	}
?>