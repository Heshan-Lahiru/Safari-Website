


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project</title>
	 <link rel="stylesheet" href="stylenew.css">
	<style>
        body {
            background-image: url('img/74a73b8e6fb8a212260b9dc3db3d5f00.jpg');
            background-size: cover;
            color: white;
        }
        body {
            height: 100vh; 
            display: flex; 
            justify-content: center;
            align-items: center; 
        }

        form {
           
            padding: 20px;
            border-radius: 5px;
            text-align: center; 
        }

	</style>
	</head>
	
	<body>
	<center>  <form>
        
            <center>
                <img id="profileImage" src="img/user-profile-icon-free-vector.jpg" alt="" style="width:170px; height:170px; cursor: pointer;">
            </center>
          <h1>  Name:</h1><br>

          <?php
session_start();

if (isset($_SESSION['mail'])) {
    echo "<h1 style='color: white;'>Welcome " . $_SESSION['mail'] . "</h1>";
} else {
    echo "<h1>Please log in to view your profile</h1>";
}
?>


            <h3>click heare to go  home </h3>
            <a href="index.php" class="logo"> 
<img src="img/home-button-vector-2027008.jpg" alt="" style="width:70px; height:70px;">
</a>
<br>
<h3>click heare to log out </h3>
<br>
<a href="logout.php" class="logo">
  <img src="img/logout-special-yellow-round-button-isolated-abstract-illustration-105941119.webp" alt="" style="width:70px; height:70px;">
</a>

        <input type="file" id="fileInput" style="display: none;">
    </form></center>
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