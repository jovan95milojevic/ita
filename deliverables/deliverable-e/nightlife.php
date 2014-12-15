<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nightlife</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('img/nightlife/white-sensation.jpg');background-repeat: no-repeat;background-size: 100% 700px; background-attachment: fixed;">
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
				<h2>Wanna party? Belgrade is the right place for that!!!</h2>
				<p>If you are feeling hyped up about your trip? You should see the nightlife of Belgrade, as probably the highlight of your trip. No matter what kind of nightlife you are looking for, you will find. Nightclubs, everywhere. If you like a more relaxed going out, there is very nice bars, and restaurants in the old part of the city, on the Kalemegdan castle for example. <br><br> If you like festivals more, and you hit the right timing for your visit, you can experience many different festivals, one of them being EXIT as one of the top festivals in Europe. Or Beerfest, Foamfest, White Sensation and similar. <br><br> Open up different choices in nightlife and choose Culbbing or Festivals to see more... <br><br> Here is the link of Beer Fest in Belgrade: <br><br> <a href="http://www.belgradebeerfest.com/active/en/home.html">Beer Fest</a>
			</article>
		</section>
		<footer>
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</div>	
</body>
</html>