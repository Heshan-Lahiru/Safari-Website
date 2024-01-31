<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['cus_id'])) {
    header("location: Signin.php");
    exit();
}

$cus_id = $_SESSION['cus_id'];
if (isset($_GET['item_id'])) {
    $itemId = $_GET['item_id'];
   
    // Get item details
    $query = "SELECT * FROM additemsdata WHERE item_id = $itemId";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $item = mysqli_fetch_assoc($result);

        
        
            $cartQuery = "SELECT * FROM shopping_cart WHERE cus_id = $cus_id AND item_id = $itemId";
            $cartResult = mysqli_query($conn, $cartQuery);

            if ($cartResult && mysqli_num_rows($cartResult) > 0) {
        
                $cartItem = mysqli_fetch_assoc($cartResult);
               
            }
            else {
    $stmt=$conn->prepare( "INSERT INTO cart_items VALUES ('',?,?)");
    $stmt->bind_param("ss",$cus_id, $itemId);
    $stmt->execute();
    
            }
            echo "Item added to cart!";
        } 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<style>

body { 
    background-image: url('img/istockphoto-1187634242-170667a.jpg');
     background-size: cover;
      color: white; 
      }
      .action-btn {
    background-color: #f44336; 
    color: white; 
    border: none; 
    padding: 10px 15px; 
    border-radius: 5px; 
    
}
.action-btn:hover {
    background-color: yellow; 
    cursor: pointer; 
}
.action-btn {
    font-size: 16px; 
    font-weight: bold; 
    font-family: Arial, sans-serif; 
}

      
      </style>
</head>
<body>

<h2>Shopping Cart</h2>


<table border='1' cellspacing='0' cellpadding='30' style='border-color: white;'>
    
    
   
   <tr>
    

    <?php
// ... previous code

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable error reporting

$cartQuery = "SELECT c.cart_id, c.item_id, a.name, a.image
                FROM cart_items c
                JOIN additemsdata a ON c.item_id = a.item_id
                WHERE c.cus_id = $cus_id";
$cartResult = mysqli_query($conn, $cartQuery);

if (!$cartResult) {
    echo "Query failed: " . mysqli_error($conn); // Display error message
} else {
    while ($cartItem = mysqli_fetch_assoc($cartResult)) {
        echo "<tr>";
        echo "<td>{$cartItem['item_id']}</td>";


        echo "<td><img src='image/{$cartItem['image']}' alt='{$cartItem['image']}' style='max-width: 200px; max-height: 200px;'></td>";
        echo "<td>{$cartItem['name']}</td>";
        echo "<td><a href='?remove=" . $cartItem['cart_id'] . "' class='action-btn'>Remove</a></td>"; // Add header for this column
        echo "<td><a href='payment.php' ' class='action-btn'>Book Now</a></td>"; // Delete link/button
        echo "</tr>";
    }
    mysqli_free_result($cartResult); // Free the result set
}

// ... remaining code
?>

</tr>
</table><br><br><br><center>
<button class='action-btn' style="background-color:green" onclick="window.location.href='tabledata.php';">Add another Safari</button></center>
</body>
</html>


<?php

if (isset($_GET['remove'])) {
    $removeCartId = $_GET['remove'];

    $query = "DELETE FROM cart_items WHERE cart_id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $removeCartId);
    $result = mysqli_stmt_execute($stmt);

    

    mysqli_stmt_close($stmt);
}
?>