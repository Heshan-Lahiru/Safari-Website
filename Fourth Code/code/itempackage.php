<?php
require 'connect.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($_FILES["image"]["error"] === 4){
        echo "<script>alert('Image doesn't exist')</script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if(!in_array($imageExtension, $validImageExtensions)){
            echo "<script>alert('Invalid image format')</script>";
        } else if($fileSize > 1000000){
            echo "<script>alert('Image size is too large')</script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;

            move_uploaded_file($tmpName, 'image/' . $newImageName);
            $query = "INSERT INTO additemsdata VALUES('', '$newImageName', '$name')";
            mysqli_query($conn, $query);
            echo "<script>alert('Successfully added'); document.location.href = 'admindata.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body {
            background-image: url('img/High_resolution_wallpaper_background_ID_77701419320.webp');
            background-size: cover;
            color: white;
            margin: 200px; /
        }
        a {
            color: white;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data"><br><br>
        <label for="name">Details : </label><br>
        <textarea name="name" id="name" required rows="4" cols="50"></textarea> <br><br><br>

        <label for="image">Image : </label><br>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br><br><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="admindata.php">click hear to go AdminData</a>
</body>
</html>
