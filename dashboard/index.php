<?php
	$page = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="de">
  <head>
  <meta charset="iso-8859-1">
		<?php include '../imports/dashboard/header.php'; ?>
  </head>
  <body class="scroll-bar_dark_small">
	  <!-- Navbar -->
		<?php include '../imports/dashboard/navigation.php'; ?>
	  <!-- /Navbar -->
	  
	  <!-- Inhalt -->
		<div class="container main-content">
		
			<?php 			
				switch($page){
					case "home":
						include '../imports/dashboard/sites/home.php';
						break;
					case "settings_pro":
						include '../imports/dashboard/sites/settings_pro.php';
						break;
					case "settings_sys":
						include '../imports/dashboard/sites/settings_sys.php';
						break;
					case "order":
						include '../imports/dashboard/sites/order.php';
						break;
					case "scan":
						include '../imports/dashboard/sites/scan.php';
						break;
					case "pfofile":
						include '../imports/dashboard/sites/profile.php';
						break;
					case "chat":
						include '../imports/dashboard/sites/chat.php';
						break;
					case "logout":
						include '../imports/dashboard/sites/logout.php';
						break;
					case "":
						include '../imports/dashboard/sites/home.php';
						break;
					default:
						echo '<h1>Error Site not found | Error Code 605</h1>';
						break;	
				}
			?>
		  
		</div>
	  <!-- /Inhalt -->

	  <!-- Footer -->
		<?php include '../imports/dashboard/footer.php'; ?>
	  <!-- /Footer -->
  </body>
</html>