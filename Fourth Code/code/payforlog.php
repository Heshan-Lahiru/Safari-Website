<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>heshan</title>
	
    <style>
	
	body {
            background-image: url('img/9478ded2e7233981e1ec73f17095cdd2.jpg');

            background-size: cover;

            background-position: center center;

            background-attachment: fixed;

            background-color: #f0f0f0;
        }
	
  .post {
    width: 500px;
    height: 600px;
    background-color: white;
    position: absolute;
    top: 400px;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .post1 {
    width: 200px;
    height: 200px;
    background-color: white;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .post2 {
    width: 250px;
    height: 200px;
	color:#ff6347;
    background-color: FF8C00;
    position: absolute;
    top: 50.4%;
    left: 52%;
    transform: translate(-50%, -50%);
  }
  .post3 {
    width: 250px;
    height: 200px;
    background-color: white;
    position: absolute;
    top: 30%;
    left: 57%;
    transform: translate(-50%, -50%);
  }
    .post4 {
    width: 250px;
    height: 200px;
    background-color: FF8C00;
    position: absolute;
    top: 90%;
    left: 54%;
    transform: translate(-50%, -50%);
  } 

.post6 {
    width: 250px;
    height: 200px;
    background-color: FF8C00;
    position: absolute;
    top: 60%;
    left: 43.5%;
    transform: translate(-50%, -50%);
  }   
.post6 input{
		width: 450px;
			height: 30px;
		}
.post6 h3{	
		color:#ff6347;
}
  .post7 {
    width: 250px;
    height: 200px;
    color:black;
    position: absolute;
    top: 120%;
    left: 51%;
    transform: translate(-50%, -50%);
  }  
    </style>
	
</head>
<body>

    <div class="post"></div>
    <img class="post1"  src="img/stitch-stich2543-esport-vector-logo-lion-on-white-background-581e9d43-2fc9-4a8f-9e26-7c69128483e1.jpg" height="100" width="200" >
    <h1 class="post2">SAFARI SignIn .</h1>
	
		


  <form class="post6" action="payforloggincheck.php" method="POST" autocomplete="off">
  <h3 >User Name :</h3>
    <input type="text" name="mail" id="mail" placeholder="Enter Username" required><br><br>
    <h3 >Password  :</h3>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <input style="background-color: #ff6347; color:white; width:70px;" type="submit" name="submit" value="Submit">
</form>

<?php
    if (isset($error)) {
        echo '<div>' . $error . '</div>';
    }
    ?>


</body>
</html>

