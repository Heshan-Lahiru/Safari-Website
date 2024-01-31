<?php
session_start(); 
require 'connect.php';
if (isset($_POST['user'])) {
   
    if (!isset($_SESSION['cus_id'])) {
        header("Location: Signin.php");
        exit();
    } 
    $cus_id = $_SESSION['cus_id'];
  header("Location: userpage.php");
       
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safari Trip</title>
  <link rel="stylesheet" href="styleone.css">
  <link rel="stylesheet" href="homestyle2.css">
     <!-- Google Fonts Link For Icons -->
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
	<style>
	
	
	</style>
    <script src="chatscript.js" defer></script>
  <style>

</style>
  
</head>


<body>


<div class="container">
<header>
<form action="" method="post">
  <button class="logo" name="user">
    <img src="img/stitch-stich2543-esport-vector-logo-lion-on-white-background-581e9d43-2fc9-4a8f-9e26-7c69128483e1.jpg" alt="Stitch Logo">
  </button>
</form>
<ul  class="navbar">
	                <li><a href="index.php">Home</a></li>
					<li><a href="tabledata.php">packages</a></li>
                    <li><a href="safari.php">Safari</a></li>
                    <li><a href="FAQ.php">FAQ'S</a></li>
                    <li><a href="aboutpage.php">About us</a></li>
					
                </ul>
				<br>
					
				
		<div class="header-icon">
		
        <a href="#" class="logo"> 
      
		
	<a href="signform.php"> 
<img src="img/24795-4-sign-up-button-photos.png" alt="">
</a>
<a href="Signin.php"> 
<img src="img/login-button-png-30.png" alt="">
</a>
</a>
		 </div>
</header>

<section class="home" id="home">
<div class="home-text">
  <center><h1>IN THE <span>WILD!</span><h1>
  <br>
<a href="safari.php" class="transparent-btn">Explore Safari</a></center>
</div>
</section>

<section class="about" id="about">
<div class="about img">
<img src="img/Art-Of-Safari-June-2017-Wallpaper_1440x2560.jpg" alt="" >
</div>
<center>
<div class="about-text">
<h2>Traveling Sri Lanka</h2>
 <p>Sri Lanka has the world's highest density of Asian elephants<br>
	and offers incredible viewing of wild elephants on safari, <br>
	especially in parks like Udawalwe and Minneriya.Sri Lanka has<br>
	one of Asia's highest densities and diversity of bird species,<br>
	especially for an island of its size, and<br>
	is host to 33 endemic species.The world is a book.Those<br>
	who do not travel only read one page. Suppose you read the<br>
	whole book yet skipped the chapter of Sri Lanka, dear reader<br>
	you just frigging missed the climax. If you grab an atlas, <br>
	you will almost not notice Sri Lanka, for it is a small mango<br>
	shaped dot in the South Asian region. Nevertheless, Sri Lanka<br>
	has a biodiversity that surprises the rest of the world. It is<br>
	sheer idiocy to say that being a colony of the Portuguese, the<br>
	Dutch and the British for hundreds of years ebbed the Sri<br>
	Lankan cultural glory away, or changed it. Enriched, my folks<br>
	would be a better term. The resulted diversity was overwhelming.</p>
</div>


</section>



<section class="srilanka" id="srilanka">
<center>
<div class="srilanka img">
<img src="img/map-of-sri-lanka.jpg" alt="" >
</div>
</center>

</section>

<section class="elephant" id="elephant">

<div id="parent">
<div class="elephant img">
<img src="img/99.jpg" alt="" >

 <div class="black"></div>
  <div class="a"><h1>| SAFARI</h1></div>
 <div class="b"><h1> UNCHARTED & BOUNDLESS<br> <span style="color:yellow"> EXPIREANSE</span></div>
 
  <center><div class="c"><p>Sri Lanka is Asia's foremost wildlife destination and probably
					the best outside Africa. In fact, Sri Lanka has been recognized 
					as one of the ten global bio diverse hotspots in the world. 
					Beautiful Sri Lanka, situated in the tropical waters of the Indian 
					Ocean is a relatively small island yet blessed with some of the 
					world's greatest natural treasures that are beyond comparison.
					Travel in any direction North, South, East or West and you are in 
					for some exciting wildlife moments, take our word, every corner 
					of Sri Lanka reverberates with the sounds of the natural world!</p></div></center>
					 
</div>
</div>

</section>


<section class="tiger" id="tiger">

<div  id="parentnew">
<div class="tiger img">
<img src="img/SSR0F9A8854.jpg" alt="" >

<div class="overlay-text">
        <h1>Creating <span>Unforgettable</span> & <span>Lasting</span> <br>  Safari delights.</h1>
      </div>

 <div class="white">
 <div class="four-pic">
 <center>
 <h1><b>Iconic <span>Adventure</span> Experiences!<b></h1></center></div>
 </div>
 <div class="first"></div>
 <div class="second"></div>
 <div class="third"></div>
 <div class="fourth"></div>


</div>
</div>
</section>

	<div class="footer">
	 <div class="col-1">
	 <h3>GET IN TOUCH</h3><br><br>
		 <p>Thiththagalla road,</p>
	     <p>Ahangama</p>
		 <p>+94 76 3245580</p>
		 <p>safarigalle@gmail.com</p>
		 <p>Office Hours:</p>
		 <p>Monday – Saturday, 8h-17h</p>
	 </div>
	 
	 <div class="col-2">
	 
	 <img src="img/Environment-Agency-logo.jpg" alt="" ><br><br><br>
	  <img src="img/images.jpg" alt="" >
	 </div>
	 
	<div class="col-3">
	<h3></h3>
	 <img src="img/4-AnimalLogoDesign-DeerLogoDesign.jpg" alt="" >
	 <br><br><br>
	  <img src="img/360_F_464265579_7K73JlhLt680tcYMhVIjsZJVdSlYfj6e.jpg" alt="" >
	</div>
</div>

<button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Safari Trip Managment message bot</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>

</body>
</html>

