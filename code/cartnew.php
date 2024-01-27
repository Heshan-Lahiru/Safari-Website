<?php
require 'connect.php';

if (isset($_GET['item_id'])) {
    $itemId = $_GET['item_id'];
        
    // Get item details
    $itemQuery = mysqli_query($conn, "SELECT * FROM additemsdata WHERE item_id = $itemId");
    $item = mysqli_fetch_assoc($itemQuery);

    // Add item to cart array in session
    if (!isset($_SESSION['cart'])) {
        
        $_SESSION['cart'] = [];
        
    }
     
    $_SESSION['cart'][] = $item;

    echo "Item added to cart!";
} elseif (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    // Remove item from cart array in session based on the index
    if (isset($_SESSION['cart'][$deleteId])) {
        unset($_SESSION['cart'][$deleteId]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array after deletion
        echo '<script>window.location.href = "cartnew.php";</script>';
    } else {
        echo "Item not found in cart!";
    }
} else {
    
    if (isset($_SESSION['cart'])) {
        echo "<style>body { background-image: url('img/istockphoto-1187634242-170667a.jpg'); background-size: cover; color: white; }</style>";
        echo "<h2>Your Cart</h2>";
        echo "<table border='1' cellspacing='0' cellpadding='50' style='border-color: white;'>";
        echo "<tr><th>location</th><th>Name</th><th></th></tr>";
        foreach ($_SESSION['cart'] as $index => $item) {
            echo "<tr>";
            echo "<td><img src='image/{$item['image']}' width='100'></td>";
            echo "<td>{$item['name']}</td>";
            echo "<td><a href='?delete=$index' style='border: 1px solid red; padding: 5px; color: white;'>Delete</a></td>"; // Delete link/button
            echo "<td><a href='payforlog.php' style='border: 1px solid red; padding: 5px; color: white;'>Book Now</a></td>"; // Delete link/button
         echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Your cart is empty.";
    }
}
?>
