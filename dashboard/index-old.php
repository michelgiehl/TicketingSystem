<?php
	session_start();
	if(isset($_SESSION["user"])) {
?>
<h <!DOCTYPE html>
	<html lang="de">
	<head>
		<meta charset="ISO-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php include("https://booking.ereboss.net/ticketsystem/imports/text/dashboard_titles.php?token=91f1d5329980ce27661fb2ed3f5a20b0&title=main"); ?></title>
		</head>
		
<?php
	} else {
		include "../imports/not_login.html";
	}
?>