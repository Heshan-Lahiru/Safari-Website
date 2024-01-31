<?php
session_start();

require 'connect.php';

if (isset($_GET['delete_id'])) {
    $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);

    
    $sql = "DELETE FROM cart_items WHERE item_id = $delete_id";

    if (mysqli_query($conn, $sql)) {
       
        $sql = "DELETE FROM additemsdata WHERE item_id = $delete_id";

        if (mysqli_query($conn, $sql)) {
            header('Location: admindata.php'); 
        } else {
            echo "Error deleting record from additemsdata: " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting record from cart_items: " . mysqli_error($conn);
    }
}


// Check for change request
if (isset($_POST['change_id']) && isset($_POST['new_name'])) {
    $change_id = mysqli_real_escape_string($conn, $_POST['change_id']);
    $new_name = mysqli_real_escape_string($conn, $_POST['new_name']);

    $sql = "UPDATE additemsdata SET name = '$new_name' WHERE item_id = $change_id";

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

<script>
     function search() {
    let filter = document.getElementById('find').value.toUpperCase();
    let cards = document.querySelectorAll('table tr:not(:first-child)'); 

    for (let i = 0; i < cards.length; i++) {
        let columns = cards[i].getElementsByTagName('td'); 

        let found = false; 

        for (let j = 0; j < columns.length; j++) {
            let cellValue = columns[j].textContent || columns[j].innerText;

            if (cellValue.toUpperCase().indexOf(filter) > -1) {
                found = true;
                break; 
            }
        }

        // Display or hide the row based on the search result
        if (found) {
            cards[i].style.display = '';
        } else {
            cards[i].style.display = 'none';
        }
    }
}

    </script>

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
        input[type=text] {
  padding: 6px;
  margin-top: 28px;
  margin-left: 1096px;
  border: 3px solid black; 
  font-size: 17px;
  color: black;
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

<div class="searchbaar">
  <input type="text" placeholder="Search.." id="find" name="find" onkeyup="search()"></div>
</div>

    <center><h1>WELCOME ADMIN</h1></center>
    <center><a class='beautiful-button' href="itempackage.php"> click hear to Add packages</a></center>

    <table border="1" cellspacing="0" cellpadding="50">
        <tr>
            <td>#</td>
            <td>Place</td>
            <td>Details</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM additemsdata ORDER BY item_id DESC");

        foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="image/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>"></td>
                <td width="400px"><?php echo $row["name"]; ?></td>
                <td><a href="?delete_id=<?php echo $row['item_id']; ?>">Delete</a></td>
                <td><a href="changedata.php?item_id=<?php echo $row['item_id']; ?>">Change</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>