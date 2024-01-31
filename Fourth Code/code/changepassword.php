<?php
session_start();
require 'connect.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $newPassword = $_POST['newpassword'];
    $confirmPassword = $_POST['confirmpassword'];

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        
        if (strlen($newPassword) < 8) {
            $error = "Password must be at least 8 characters long.";
        } else if ($newPassword !== $confirmPassword) {
            $error = "Passwords do not match.";
        } else {
            
            $sql = "SELECT * FROM signupdetails WHERE mail = '$email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = "UPDATE signupdetails SET password = '$hashedPassword' WHERE mail = '$email'";
                if ($conn->query($sql) === TRUE) {
                   
                    header("Location: signin.php?password_changed=true");
                    exit();
                } else {
                    $error = "Error updating password.";
                }
            } else {
                $error = "Email not found.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
<style>
/* Basic styling */
body {
  font-family: sans-serif;
  background-color: #f5f5f5;
  text-align: center;
  margin: 40px auto;
  width: 400px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #ff6347; /* Green */
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.error {
  color: red;
  margin-bottom: 15px;
}

/* Additional styling for visual appeal */
form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #3e8e41; /* Darker green on hover */
}

    </style>

</head>
<body>
<?php if (isset($error)) { echo '<div class="error">' . $error . '</div>'; } ?>
<form action="" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="newpassword">New Password:</label><br>
    <input type="password" id="newpassword" name="newpassword" required><br><br>
    <label for="confirmpassword">Confirm Password:</label><br>
    <input type="password" id="confirmpassword" name="confirmpassword" required><br><br>
    <input type="submit" value="Change Password">
</form>
</body>
</html>
