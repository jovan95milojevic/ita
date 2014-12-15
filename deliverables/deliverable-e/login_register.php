<?php 
$validationPassed = false;
$registerFieldsNotEmpty = false;
$error = '';
$registerErrors = array();
$loginErrors = array();

$dbhost 	= "localhost";
$dbname		= "ita";
$dbuser		= "root";
$dbpass		= "";



if (!empty($_POST['register'])) {

	if (isset($_POST['conpassword'])) {
			$conpassword = $_POST['conpassword'];
			if (empty($conpassword)) {
				$error = "Confirm Password is required!";
				$registerErrors[] = $error;
			}
		}	

	if (isset($_POST['password'])) {
			$password = $_POST['password'];
			if (empty($password)) {
				$error = "Password is required!";
				$registerErrors[] = $error;
			}
		}

	if (isset($_POST['dob'])) {
			$dob = $_POST['dob'];
			if (empty($dob)) {
				$error = "Date of Birth is required!";
				$registerErrors[] = $error;
			}
		} 

	if (isset($_POST['email'])) {
			$email = $_POST['email'];
			if (empty($email)) {
				$error = "Email is required!";
				$registerErrors[] = $error;
			}
		} 

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		if (empty($name)) {
			$error = "Name is required!";
			$registerErrors[] = $error;
		}
	}

	if (empty($registerErrors)) {
		$registerFieldsNotEmpty = true;
	}


	// check if password match!!
	if ($registerFieldsNotEmpty) {
		if ($password == $conpassword) {
		$validationPassed = true;
		} else {
			$validationPassed = false;
			$error =  "Password does not match!";
		}
	}

	if ($validationPassed) {
		//save to database
		session_start();

		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
		$query = $conn->prepare("INSERT INTO users (name, dob, email, password) VALUES (:name, :dob, :email, :password);");
		$query->bindParam(':name', $name);
		$query->bindParam(':dob', $dob);
		$query->bindParam(':email', $email);
		$query->bindParam(':password', $password);

		if ($query->execute()) {
			$_SESSION['name'] = $name;
			echo 'you are logged in!!';
			header("Location: index.php");
		} else {
			$error =  "there was an error!";
			$registerErrors[] = $error;
		}
	}
	

}

if (!empty($_POST['login'])) {

	if (isset($_POST['password'])) {
			$password = $_POST['password'];
			if (empty($password)) {
				$error = "Password is required!";
				$loginErrors[] = $error;
			}
		}

	if (isset($_POST['email'])) {
			$email = $_POST['email'];
			if (empty($email)) {
				$error = "Email is required!";
				$loginErrors[] = $error;
			}
		}

		if (empty($loginErrors)) {
		$validationPassed = true;
	}

	if ($validationPassed) {
		
		session_start();

		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
		$query = $conn->prepare("SELECT name FROM users WHERE email = :email AND password = :password");
		$query->bindParam(':email', $email);
		$query->bindParam(':password', $password);
		$query->execute();

		$count = $query->rowCount();
		$row = $query->fetchAll();
		
		if ($count == 1) {
			$_SESSION['name'] = $row[0]['name'];
			header("Location: index.php");
		} else {
			 $loginErrors[] = "Login Failed!";
		}
	}
}



 ?>

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

				<li>
				   <a href="login_register.php">LogIn/Register</a>
				</li>					

				</ul>
			</nav>
		</header>
			<article id="content-register">
				
					<div class="left-form">
						<form id='register' action='' method='post'>
						<fieldset >
						<legend>Register</legend>
						<label for='name' >Name: </label>
						<input type='text' name='name' id='name' maxlength="50" /><br><br>
						<label for='email' >Email:</label>
						<input type='email' name='email' id='email' maxlength="50" /><br><br>
						 
						<label for='dob' >Date of Birth:</label>
						<input type='text' name='dob' id='dob' maxlength="50" /><br><br>
						 
						<label for='password' >Password:</label>
						<input type='password' name='password' id='password' maxlength="50" /><br><br>
						<label for='conpassword' >Confirm Password:</label>
						<input type='password' name='conpassword' id='conpassword' maxlength="50" /><br><br>

						<?php 
								foreach ($registerErrors as $error) {
									echo '<small style="color:"red";>' . $error . '</small>' . '<br>';
								}
								
							
						 ?>
						<input type='submit' name='register' value='Register' />
					 
							</fieldset>
						</form>
					</div>
				
				<div class="right-form">
				<form id='login' action='' method='post'>
					<fieldset >
						<legend>Login</legend>
						<label for='email' >E-mail:</label>
						<input type='text' name='email' id='email' maxlength="50" /><br><br>
						 
						<label for='password' >Password*:</label>
						<input type='password' name='password' id='password' maxlength="50" /><br><br>
						<?php 
								foreach ($loginErrors as $error) {
									echo '<small style="color:"red";>' . $error . '</small>' . '<br>';
								}
								
							
						 ?>
						<input type='submit' name='login' value='Login' />
					 
					</fieldset>
				</form>
				</div>


<div>

			</article>

		<footer >
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>
	</body>
</html>