<?php
require 'connect.php';

// Check for delete request
if (isset($_GET['delete_id'])) {
    $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
    $sql = "DELETE FROM additemsdata WHERE id = $delete_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: admindata.php'); // Redirect to the same page
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Check for change request
if (isset($_POST['change_id']) && isset($_POST['new_name'])) {
    $change_id = mysqli_real_escape_string($conn, $_POST['change_id']);
    $new_name = mysqli_real_escape_string($conn, $_POST['new_name']);

    $sql = "UPDATE additemsdata SET name = '$new_name' WHERE id = $change_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: admindata.php'); 
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Page</title>
    <style>
        body {
            background-image: url('img/High_resolution_wallpaper_background_ID_77701419320.webp');
            background-size: cover;
            color: white;
        }
        table {
            border: 1px solid white;
            color: white;
            margin: 20px auto; 
        }
        th, td {
            border: 1px solid white;
            padding: 10px;
        }
        a {
            color: white;
            text-decoration: none;
        }
        a:hover {
            color: red; 
        }
    </style>
</head>
<body>
    <center><h1>WELCOME ADMIN</h1></center>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>#</td>
            <td>Place</td>
            <td>Details</td>
            <td>Action</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM additemsdata ORDER BY id DESC");

        foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="image/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>"></td>
                <td><?php echo $row["name"]; ?></td>
                <td><a href="?delete_id=<?php echo $row['id']; ?>">Delete</a></td>
                <td><a href="changedata.php?id=<?php echo $row['id']; ?>">Change</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
   <center><a href="itempackage.php"> click hear to Add packages</a></center>
</body>
</html>