<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery</title>
	<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="slider/css/example.css">
  	<link rel="stylesheet" href="slider/css/font-awesome.min.css">
<style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top:70px;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 900px) {
      .container {
        width: 900px
      }
    }

    footer{
	margin-top: 40px;
	background-color: white;
	opacity: 0.89;
	border: 2px solid;
    border-radius: 25px;
    text-align: center;
}
  </style>

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
            <li><a href="clubbing.php">Clubbing</a></li>
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
				<section>
			<article id="content">
				<h2>Gallery - here you can see beautiful pictures of Serbia</h2>

				 <div class="container">
    <div id="slides">
      <img src="slider/img/s0.jpg" alt="Photo 0">    
      <img src="slider/img/s1.jpg" alt="Photo 1">
      <img src="slider/img/s3.jpg" alt="Photo 3">
      <img src="slider/img/s4.jpg" alt="Photo 4">
      <img src="slider/img/s5.jpg" alt="Photo 5">
      <img src="slider/img/s6.jpg" alt="Photo 6">
      <img src="slider/img/s7.jpg" alt="Photo 7">
      <img src="slider/img/s8.jpg" alt="Photo 8">
      <img src="slider/img/s9.jpg" alt="Photo 9">
      <img src="slider/img/s10.jpg" alt="Photo 10">
      <img src="slider/img/s11.jpg" alt="Photo 11">  
      <img src="slider/img/s12.jpg" alt="Photo 12">             
    </div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="slider/js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
			</article>
		</section>
		<div>
		<footer >
			<p>Copyright 2014 - Jovan Milojevic</p>
		</footer>

</body>
</html>