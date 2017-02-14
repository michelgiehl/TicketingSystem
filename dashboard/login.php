<?php
session_start();
if(isset($_SESSION["user"])){
	include "../imports/loading.html";
	?><meta http-equiv="refresh" content="0; URL=dashboard.php"><?php
}
?>