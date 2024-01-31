<?php
session_start();

require 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $compassword = $_POST['compassword'];
    $idnumber = $_POST['idnumber'];

    // Check for duplicate user or email using prepared statement
    $stmt = $conn->prepare("SELECT * FROM signupdetails WHERE name=? OR mail=?");
    $stmt->bind_param('ss', $name, $mail); // Correct string for two strings
$stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('User or email already exists');</script>";
        exit;
    }

    // Check for password match
    if ($password == $compassword) {
        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert the user into the database with prepared statement
        $stmt = $conn->prepare("INSERT INTO signupdetails VALUES('', ?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $mail, $hashedPassword, $idnumber);
        $stmt->execute();

        echo "<script>alert('Registration successful');</script>";
        echo '<script>window.location.href = "Signin.php";</script>';

    } else {
        echo "<script>alert('Passwords do not match');</script>";
}
}
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Apple Online Store</title>
    <style>
	
	body {
            background-image: url('img/shutterstock_726294346.jpg');

            background-size: cover;

            background-position: center center;

            background-attachment: fixed;

            background-color: #f0f0f0;
        }
	
  .post {
    width: 500px;
    height: 1100px;
    background-color: white;
    position: absolute;
    top: 500px;
    left: 50%;
    transform: translate(-50%, -50%);
   
  }
  .post1 {
    width: 200px;
    height: 200px;
    background-color: white;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .post2 {
    width: 250px;
    height: 200px;
	color:#ff6347;
    background-color: white;
    position: absolute;
    top: 45%;
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
    background-color: white;
    position: absolute;
    top: 90%;
    left: 54%;
    transform: translate(-50%, -50%);
  } 

.post6 {
    width: 250px;
    height: 200px;
    background-color: white;
    position: absolute;
    top: 55%;
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
    top: 140%;
    left: 51%;
    transform: translate(-50%, -50%);
  }  
    </style>
	<script>
function matchpassword(){
  var Pw1= document.getElementById("pwd").value;
  
  
  if(Pw1 == "heshan"){
   alert("IUHS member ...");
  }
  else{
  
  alert("Try again ...");
  }
}
</script>
</head>
<body>

    <div class="post"></div>
    <img class="post1"  src="img/stitch-stich2543-esport-vector-logo-lion-on-white-background-581e9d43-2fc9-4a8f-9e26-7c69128483e1.jpg" height="100" width="200" >
    <h1 class="post2">SAFARI Signup .</h1>
	
		
	
<form class="post6" action="" method="POST" autocomplete="off" >
<?php
   if(isset($error)){
	   foreach($error as $error){
		   echo '<span class="error-msg">'.$error.'</span>';
	   }
   }
   ?>
   
<h3 >Your Full Name :</h3>
<input type="text" id="name" name="name" required placeholder="Enter name"><br><br>

<h3 >Your E-mail :</h3>
<input type="text" id="mail" name="mail" required  placeholder="Enter Email"><br><br>

<h3 >Password :</h3>
<input type="password" id="password" name="password" required  placeholder="Enter Password"><br><br>

<h3 >Confirm Password  :</h3>
<input  type="password" id="compassword" name="compassword" required><br><br>

<h3 >National Id Number  :</h3>
<input  type="text" id="idnumber" name="idnumber" required><br><br>

<input style="background-color: #ff6347; color:white; width:70px;" type="submit" name="submit" id="btnsubmit" value="submit" Onclick="matchpassword()">
<br><p>Alredy have an account?
<a style="border:2px solid Tomato;" href="Signin.php">Login</a></p>
<br><br>

</form>

    
	<p class="post7">organized by<b> SAFARI</b> Team </p>
</body>
</html>