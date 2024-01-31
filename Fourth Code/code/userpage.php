


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project</title>
	 <link rel="stylesheet" href="stylenew.css">
	<style>
        body {
  
  background-size: cover;
  color: white;
}
        
body {
      
      display: grid; 
      grid-template-columns: 1fr 2fr; 
    }

    #customer-info {
      grid-column: 1;
      text-align: center;
      margin-bottom: 50px;
    }
       
  
        #robot-container {
  position: relative;
  width: 500px; 
  height: 200px; 
  background-position: top center; 
  position: fixed;
    top: 140px;
    right: 290px; 
}

#robot {
  position: absolute;
  left: 0;
  animation: walk 5s forwards; 
}

#robot-message {
  position: absolute;
  top: 80px;
  right: 350px;
  display: none;
  color: blue;
  border: 2px solid white; 
  background-color:white;
  padding: 10px; 
}


@keyframes walk {
  0% { left: 0%; }
  100% { left: calc(100% - 50px);  }
}
.robot-gif {
    position: relative; 
    top: 0;
}

body{
  background-image: url("img/pexels-felix-mittermeier-957024.jpg"); 
  background-repeat: no-repeat;                   
  background-size: cover;                         
  padding: 20px; 
}

  fieldset {
  background-color: rgba(255, 255, 255, 0.7); 
  border: 1px solid #ccc; 

      
}
.beautiful-button {
  display: inline-block; 
  width: 200px; 
  padding: 10px 20px; 
  background-color: #4CAF50; 
  color: white; 
  border: none; 
  border-radius: 5px; 
  text-align: center; 
  text-decoration: none; 
  font-size: 16px;
  cursor: pointer; 
  transition: all 0.3s ease; 
}

.beautiful-button:hover { 
  background-color: #3e8e41; 
}



</style>
	</head>
	
	<body>
	        
  <audio autoplay src="voice/.mp3"></audio>

    <center>  <form>
   
    <div id="robot-container">
    <img id="robot" src="img/robot.gif" alt="Walking Robot">
   
  </div>
   <p id="robot-message" style="font-size: 2em;">...</p>
   
</a>
   
  <script src="scriptuser.js"></script>
  
    
  <?php
// Start the session
session_start();

if (isset($_SESSION['cus_id'])) {
  require 'connect.php';

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $cus_id = $_SESSION['cus_id'];
    $sql = "SELECT name, mail, idnumber FROM signupdetails WHERE cus_id = $cus_id";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Fetch customer data
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $address = $row['mail'];
        $age = $row['idnumber'];
        echo "<fieldset style='height: 700px;'>";
        echo "<br><br><br><br><br><br><div class='customer-info'>";
        
        echo "<h1 style='color: black;'>User Id: " . $cus_id . "</h1>";
        echo "<h1 style='color: black;'>Name: " . $name . "</h1>";
        echo "<h1 style='color: black;'>E-mail: " . $address . "</h1>";
        echo "<h1 style='color: black;'>National ID : " . $age . "</h1>";
       
        echo "
        <br><br>
        <a 
        style='
        display: inline-block; 
      padding: 10px 20px;   
      border: none;         
      border-radius: 5px;   
      text-decoration: none; 
      font-family: sans-serif;
      font-weight: bold;   
      color: #fff;          
      background-color: #4CAF50; 
        '
        
        href='usedit.php'>edit my profile info</a>
        <br><br>";


        echo "<a class='beautiful-button' href='index.php'>Continue Safaris</a>";
        echo "</div>";
        echo "<br><br<br><a class='beautiful-button' href='logout.php'>Log out</a>";
       
        echo "
        <br><br>
        <a 
        style='
        display: inline-block; 
      padding: 10px 20px;   
      border: none;         
      border-radius: 5px;   
      text-decoration: none; 
      font-family: sans-serif;
      font-weight: bold;   
      color: #fff;          
      background-color: red; 
        '
        
        href='suddi/AIpayment.html'>Premeam</a>
        ";
        echo "</fieldset>";

    } else {
        echo "<p>Customer information not found.</p>";
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // Handle the case where the customer is not logged in
    echo "<p>Please log in to view your information.</p>";
}
?>


    </form>
  
  </center>
<script>
        const profileImage = document.getElementById("profileImage");
        const fileInput = document.getElementById("fileInput");

        profileImage.addEventListener("click", () => {
            fileInput.click();
        });

        fileInput.addEventListener("change", (event) => {
            const selectedFile = event.target.files[0];
            const reader = new FileReader();

            reader.onload = (event) => {
                profileImage.src = event.target.result;
            };

            reader.readAsDataURL(selectedFile);
        });


        
    </script>


	
	</body>
	</html>