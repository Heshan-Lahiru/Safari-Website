<?php
require 'connect.php';

if (isset($_GET['item_id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['item_id']);
    $sql = "SELECT name FROM additemsdata WHERE item_id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $current_name = $row['name'];
    } else {
        header('Location: admindata.php'); 
    }
} else {
    header('Location: admindata.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .action-btn:hover {
    background-color: yellow; 
    cursor: pointer; 
}
.action-btn {
    background-color:red;
    font-size: 16px; 
    font-weight: bold; 
    font-family: Arial, sans-serif; 
}
        </style>
    </head>
<body><center>
    <h1>Edit data</h1>
    <form method="post" action="admindata.php">
        <input type="hidden" name="change_id" value="<?php echo $id; ?>">
        <textarea style="font-size: 28px;"  cols="50" rows="6" name="new_name" value="<?php echo $current_name; ?>"><?php echo $current_name; ?></textarea>
       <br><br> <button class="action-btn" type="submit">Change</button>
       
    </form></center>
</body>
</html>
