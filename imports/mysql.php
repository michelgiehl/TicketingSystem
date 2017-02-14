<?php
define('mysql_host', 'localhost');
define('mysql_user', 'username');
define('mysql_password', 'password');
define('mysql_database', 'database');

//MySQL-Tables
define('mysql_table_accounts' , 'accounts');
define('mysql_table_tickets', 'tickets');
define('mysql_table_backup', 'backup');
define('mysql_table_log', 'logs');
define('mysql_table_text', 'text');
define('mysql_table_settings', 'settings');
define('mysql_table_logins', 'logins');
define('mysql_table_ips', 'ips');
define('mysql_table_temp', 'tmp');

function createTable($tableName){
	$connection = mysql_connect(mysql_host, mysql_user, mysql_password);
	mysql_select_db(mysql_database);
	switch($tableName){
		case "accounts":
			$query = "CREATE TABLE IF NOT EXISTS `accounts` (`time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `name` VARCHAR(16), `password` VARCHAR(128) , `email` VARCHAR(32));"
			mysql_query($query);
			break;
		case "tickets":
			$query = "CREATE TABLE IF NOT EXISTS `". tickets ."` (`order_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `ticket_id` VARCHAR(16), `booking_id` VARCHAR(16), `name` VARCHAR(32), `nname` VARCHAR(32), `email` VARCHAR(128), `paid` INT(1) DEFAULT '0' , `used` INT(1) DEFAULT '0', `ticket_type` VARCHAR(16));";
			mysql_query($query);
			break;
		case "backup":
			$query = "CREATE TABLE IF NOT EXISTS `". backup ."` (`accounts_time` TIMESTAMP, `accounts_name` VARCHAR(16), `accounts_password` VARCHAR(128), `accounts_email` VARCHAR(32), `tickets_order_time` TIMESTAMP, `tickets_ticket_id` VARCHAR(16), `tickets_booking_id` VARCHAR(16), `tickets_name` VARCHAR(32), `tickets_nname` VARCHAR(32), `tickets_email` VARCHAR(128), `tickets_paid` INT(1), `tickets_used` INT(1), `tickets_ticket_type` VARCHAR(16));";
			mysql_query($query);
			break;
		case "logs":
			$query = "CREATE TABLE IF NOT EXISTS `". logs ."` (`time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `log_type` TEXT, `console_msg` TEXT);";
			mysql_query($querye);
			break;
		case "text":
			$query = "CREATE TABLE IF NOT EXISTS `". text ."` (`text_type` TEXT, `msg` TEXT, `extras` TEXT);";
			mysql_query($query);
			break;
		case "settings":
			$query = "CREATE TABLE IF NOT EXISTS `". settings ."` (`setting_type` TEXT, `data` TEXT, `extra` TEXT);";
			mysql_query($query);
			break;
		case "logins":
			$query = "CREATE TABLE IF NOT EXISTS `". logins ."` (`time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `client_data` TEXT, `success_logins` INT(10), `wrong_logins` INT(10));";
			mysql_query($query);
			break;
		case "ips":
			$query = "CREATE TABLE IF NOT EXISTS `". ips ."` (`ipv4` VARCHAR(32), `ipv6` VARCHAR(32), `client_data` TEXT, `accounts` TEXT);";
			mysql_query($query);
			break;
		case "temp":
			$query = "CREATE TABLE IF NOT EXISTS `". tmp ."` (`time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, `delete` TIMESTAMP, `data` TEXT);";
			mysql_query($query);
			break;
	}
}

function setText(){
	
}
?>