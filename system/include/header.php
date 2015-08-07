<?php
define("index", "Dit nye alternativ til hundepasning");
define("howitworks", "Hvordan virker det");
define("becomeadogsitter", "Bliv hundepasser");
define("about", "Om DinHundMinHund");
$pagename = substr(basename($_SERVER['PHP_SELF']), 0, -4);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?=constant($pagename)?> | DinHundMinHund</title>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<link href="media/css/main.css" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="popup" id="popup">
			<div class="box">
				<div class="nav_button active">Opret bruger</div>
				<div class="nav_button">Log ind</div>
				<div class="clear"></div>
				<form method="POST" id="signup" style="display: none;">
					<input type="text" name="email" placeholder="E-mail" class="nobottom">
					<input type="password" name="password" placeholder="Kodeord" class="noright half">
					<input type="password" name="retype" placeholder="Gentag kodeord" class="half">
					<div class="clear h25"></div>
					<input type="text" name="firstname" placeholder="Fornavn" class="noright half">
					<input type="text" name="lastname" placeholder="Efternavn" class="half">
					<div class="clear h5"></div>
					<input type="text" name="birthday-day" placeholder="DD" class="ctwo noright">
					<input type="text" name="birthday-day" placeholder="MM" class="ctwo noright">
					<input type="text" name="birthday-day" placeholder="YYYY" class="cfour">
					<div class="gender">
						<div class="type active"><i class="fa fa-mars"></i></div>
						<div class="type"><i class="fa fa-venus"></i></div>
					</div>
					<div class="clear h10"></div>
					<input type="submit" value="Opret dig!">
				</form>
				
				<form method="POST" id="login">
					<input type="text" name="email" placeholder="E-mail" class="nobottom">
					<input type="password" name="password" placeholder="Kodeord">
					
					<div class="clear h10"></div>
					<input type="submit" value="Log ind">
				</form>
			</div>
		</div>
		<header>
			<div class="ads_canvas">
				<a href="/annoncer" class="ads">
					Bliv set! Få din annonce her!
				</a>
			</div>
			<div class="logo">
				<a href="/"><img src="/media/images/logo.png" alt="DinHundMinHund-logo"></a>
			</div>
		</header>
		
		<div class="navigation">
			<ul>
				<a href="/"><li <?php if ($pagename == "index") { echo 'class="active"'; } ?>>Hjem</li></a>
				<a href="/søg"><li <?php if ($pagename == "search") { echo 'class="active"'; } ?>>Hundepasning</li></a>
				<a href="/hvordan"><li <?php if ($pagename == "howitworks") { echo 'class="active"'; } ?>>Hvordan virker det?</li></a>
				<a href="/hundepasser"><li <?php if ($pagename == "becomeadogsitter") { echo 'class="active"'; } ?>>Bliv hundepasser</li></a>
				<a href="/om"><li <?php if ($pagename == "about") { echo 'class="active"'; } ?>>Om os</li></a>
			</ul>
			
			<ul class="right">
				<a href="/"><li>Login</li></a>
				<a href="/"><li class="green">Tilmeld dig</li></a>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>