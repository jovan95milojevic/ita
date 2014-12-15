<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>must-see</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('img/serbia/nice.jpg');background-repeat: no-repeat;background-size: 100% 700px;background-attachment: fixed;">
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
				<h2>What you must see if you visit Serbia</h2>
				<p>One of the most interesting touristic places in Serbia is as already mentioned Canyon of the river Uvac,  that you can see on the background here, with the rafting and similar activities. Other good touristic places would be mountain Zlatibor with a town on it really touristically developed with several hotels, with variety of prices. It has a nice lake, where you can swim, ride a canoe, or walk on water in a pumped up ball. You can rent 4x4 or a mountain bike, or even a horse and ride around on the mountain to reach beautiful views. <br> I can suggest a rarity in the world, one of the candidates for world's 7 wonders. It is called Djavolja Varos, or the Devils Town. (on the picture) . Those 'natural towers' were formed from a river once, with a lot of water flowing through fast, carrying particles with it, creating paths first, then 'digging' deeper and ending up like this.
				</p>
			 		<img width="400" height="225" src="img/serbia/djavolja.jpg" alt="Devil's Town">
			 		<div id="selo">
			 		<img width="400" height="225" src="img/serbia/selo.jpg" alt="Countryside">
			 		</div>
			</article>
		</section>
		<footer>
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</div>
	
</body>
</html>