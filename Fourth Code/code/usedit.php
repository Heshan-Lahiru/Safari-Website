<?php

session_start();

if (isset($_SESSION['cus_id'])) {
    require 'connect.php';

    
    $cus_id = $_SESSION['cus_id'];

  
    if (isset($_POST['update'])) {
        
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $idnumber = $_POST['idnumber'];
        $cus_id = $_SESSION['cus_id'];

       
        $sql = "UPDATE signupdetails SET name=?, mail=?, idnumber=? WHERE cus_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $name, $mail, $idnumber, $cus_id);
        if (mysqli_stmt_execute($stmt)) {
            
            header("Location: userpage.php");
            exit();
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
       
        $sql = "SELECT name, mail, idnumber FROM signupdetails WHERE cus_id = $cus_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $mail = $row['mail'];
        $idnumber = $row['idnumber'];
    }

  
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <style>

body {
  font-family: sans-serif;
  background-color: #f5f5f5;
  margin: 40px;
}

form {
  border: 2px solid #ccc;
  padding: 30px;
  border-radius: 10px;
  background-color: #fff;
}


label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}


input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  box-sizing: border-box; 
}


button[type="submit"] {
  background-color: #4CAF50; 
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}


p.error {
  color: red;
  margin-bottom: 20px;
}

        </style>
    </head>
<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" value="<?php echo $mail; ?>"><br><br>
        <label for="idnumber">National ID:</label>
        <input type="text" id="idnumber" name="idnumber" value="<?php echo $idnumber; ?>"><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>

<?php
} else {
    // Handle the case where the user is not logged in
    echo "<p>Please log in to edit your information.</p>";
}
?>
