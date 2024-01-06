<?php
require 'connect.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT name FROM additemsdata WHERE id = $id";
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
    </head>
<body>
    <h1>Change Name</h1>
    <form method="post" action="admindata.php">
        <input type="hidden" name="change_id" value="<?php echo $id; ?>">
        New Name: <input type="text" name="new_name" value="<?php echo $current_name; ?>">
        <button type="submit">Change</button>
    </form>
</body>
</html>
