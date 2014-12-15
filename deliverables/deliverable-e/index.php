<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Serbia</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('img/belgrade/bg1.jpg');background-repeat: no-repeat;background-size: 100% 700px; background-attachment: fixed;">
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
				
				<h1>Serbia</h1>
				<h3>Land of old and new</h3>
				<p>
					Are you thinking about where to spend your holiday? Are you willing to try something new, and really not spend a lot of money? You should check out Serbia. On this website I will show you what things you should see in Serbia. You can also find here where you should stay if you are staying in the capital city Belgrade. If you are up for an adventure, you should go outside Belgrade, so here you can also see where you can stay if you are heading to the countryside <br><br> Do you like parties? Or maybe some crazy festivals? Maybe you like to enjoy a nice glass of wine inside a castle restaurant, with tasty dinner? You can have all that in Serbia. Belgrade is famous for its nightlife, full of nightclubs, Serbian 'Kafana' with Serbian music and traditional strong drink, Rakija. EXIT Festival was voted the best festival in Europe in 2014, and is always in the top, right there with Belgiums Tomorrowland. It is held every summer, early July, and is way cheaper than other festivals, with no less fun. Many famous artists were there over the past years, such as Skrillex, Prodigy, Snoop Dog, Avicii and many others. <br><br> If you enjoy being filled with adrenaline, you shouldn't miss a football match in Belgrade. With two great rivals Partizan and Red Star, and their fans always being in top 5 of the world, a match with those fans cannot be boring. Especially if you are here during the derby itself, you shouldn't miss it.
				</p>
			</article>
		</section>


		<footer>
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</div>
</body>
</html>