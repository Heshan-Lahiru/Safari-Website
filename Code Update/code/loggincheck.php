<?php
session_start();

require 'connect.php';

$mail = $_POST["mail"];
$password = $_POST["password"];

$sql = "SELECT password, cus_id FROM signupdetails WHERE mail = '$mail'"; // Select cus_id as well
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row["password"];

    if (password_verify($password, $hashedPassword)) {

        // Extract the username part of the email address
        $mail = strstr($mail, '@', true);

        // Store cus_id in the session
        $_SESSION['cus_id'] = $row['cus_id'];

        switch ($mail) {
            case 'Admin':
                header("Location: setting.html");
                exit();
            default:
                $_SESSION['mail'] = $mail;
                header("Location: userpage.php");
                exit();
        }
		

    } else {
        echo '<script>alert("Incorrect password. Please try again.");</script>';
        echo '<script>window.location.href = "signin.php";</script>';
        exit();

    }
} else {

    echo '<script>alert("Wrong");</script>';
  
    exit();


}

?>
