<?php
	if($_GET['token'] != "ticketsystem"){
		echo "Falscher Token!";
	} else {
		$requested = $_GET['title'];
		if($requested != ""){
			$dashboard_login_title = "Dashboard | Login";
			$dashboard_main_title = "Dashboard | &Uuml;bersicht";
			$dashboard_settings_title = "Dashboard | Einstellungen";
			$dashboard_users_title = "Dashboard | Benutzer";
			$dashboard_personal_title = "Dashboard | Pers&ouml;hnlich";
			$dashboard_payments_title = "Dashboard | Zahlungen";
			$dashboard_orders_title = "Dashboard | Bestellungen";
			switch($requested){
				case "login":
					echo $dashboard_login_title;
					break;
				case "main":
					echo $dashboard_main_title;
					break;
				case "settings":
					echo $dashboard_settings_title;
					break;
				case "users":
					echo $dashboard_users_title;
					break;
				case "personal":
					echo $dashboard_personal_title;
					break;
				case "payments":
					echo $dashboard_payments_title;
					break;
				case "orders":
					echo $dashboard_orders_title;
					break;
				case "all":
					$arr = array(
						'login' => $dashboard_login_title,
						'main' => $dashboard_main_title,
						'settings' => $dashboard_settings_title,
						'users' => $dashboard_users_title,
						'personal' => $dashboard_personal_title,
						'payments' => $dashboard_payments_title,
						'orders' => $dashboard_orders_title
					);
					echo json_encode($arr);
					break;
				default:
					echo "404 Not found!";
					break;
			}
		} else {
			echo "<p>Only GET requests accepted</p>";
		}
	}
?>