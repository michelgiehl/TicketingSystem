	  <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Navigation ein-/ausblenden</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="?page=home">Ticket Booking</a>
			</div>

			<!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li <?php if($page == 'home'){echo 'class="active"';} ?> ><a href="?page=home">Home</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Einstellungen<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="?page=settings_sys">System</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="?page=settings_pro">Projekt 1</a></li>
				  </ul>
				<li <?php if($page == 'order'){echo 'class="active"';} ?> ><a href="?page=order">Bestellungen</a></li>
				<li <?php if($page == 'scan'){echo 'class="active"';} ?> ><a href="?page=scan">Scannen</a></li>
				<li><a href="https://dd22504.kasserver.com/mysqladmin/PMA3/index.php?server=55051184&db=d0202334">MySQl</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="?page=profil">Profil</a></li>
					<li><a href="?page=chat">Chat</a></li>
					<li><a href="#">Irgendwas anderes</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="?page=logout">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>