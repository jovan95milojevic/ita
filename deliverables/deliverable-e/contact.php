<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('img/serbia/village.jpg');background-repeat: no-repeat;background-size: 100% 700px; background-attachment: fixed;" >
		<div class="wrapper">
		<header>
			<nav>
				<ul id="navigation">
				<li>
				   <a href="index.php">Home</a>
				</li>
		
				<li class="sub">
					<a href="where-to-stay.php">Where to stay</a>
					<ul>
						<li><a href="belgrade.php">Belgrade</a></li>
						<li><a href="rest-of-serbia.php">Rest of Serbia</a></li>
					</ul>
				</li>

				<li>
				  <a href="must-see.php">Must See</a>
				</li>

				<li class="sub">
					<a href="nightlife.php">Nightlife</a>
					<ul>
						<?php if(isset($_SESSION['name'])){
			   			 echo '<li><a href="clubbing.php">Clubbing</a></li>';
						} ?>
						<li><a href="festivals.php">Festivals</a></li>
					</ul>
				</li>

				<li>
				   <a href="sport.php">Sport</a>
				</li>
				<li>
				   <a href="contact.php">Contact</a>
				</li>

				<li>
				   <a href="gallery.php">Gallery</a>
				</li>								

				<?php 
				if(isset($_SESSION['name'])){
						    echo "<li id=\"welcome\">";
						    echo 'Welcome ' . $_SESSION['name'] . '!';
						    echo '&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logout.php">Logout</a>';
						    echo "</li>";
						} else {

						    echo '<li><a href="login_register.php">Sign In/Register</a></li>';
						}
				?>
								
				</ul>
			</nav>
		</header>
				<section>
			<article id="content">
				<h2>Contact form</h2>
				<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="50" /><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="50" /><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="50"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>					
			</article>
		</section>
		<div>
		<footer >
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</body>
</html>