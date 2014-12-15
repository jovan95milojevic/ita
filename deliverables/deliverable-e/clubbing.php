<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clubbing</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url('img/nightlife/freestyler.jpg');background-repeat: no-repeat;background-size: 100% 700px; background-attachment: fixed;">
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
					} else {
			    		header("Location: login_register.php");
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
				<h2>Clubbing in Belgrade</h2>
				<p>Nightclubs in Belgrade are easy to find. You have them all over the city basically. In the center, or a little outside. But very popular place for a night club in Serbia is on its rivers Danube and Sava. Yes, you are on a party, floating, on a raft or a big boat. Connection to solid gorund is the enterance to the club, and a way out, unless you like swimming. :) At one point, if you are walking next to the river, you will find countless different clubs next to each other. So you can change if you dont enjoy the atmosphere on one of them. One of the more popular clubs is Freestyler. With a vast area for dancing, a big bar in the middle of the club, DJ above looking at people and series of 'bridges' above the dancing area, where Go-Go dancers can do their jobs. Other clubs you should look for are Stefan Braun, Povetarac, Plastic, Sound... <br><br>
				<div id="free">
				<img width="900" height="550" src="img/nightlife/freestyle.jpg" alt="freestyler">
				</div>
				<br><br>Here you can find the link of Belgrade at night website that can show you a little bit more about clubbing in Belgrade: <br><br> <a href="http://belgradeatnight.com/belgrade">Belgrade, a city that never sleeps</a>
			</article>
		</section>
		<footer>
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</div>	
</body>
</html>