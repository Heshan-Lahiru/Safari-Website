<?php
require 'connect.php';

// Choose the preferred storage method:
$storageMethod = 'session';  // Options: 'session' or 'temporary_table'

// Function to save cart data to the temporary table (if applicable):
function saveCartDataToTempTable() {
    global $conn;
    if ($storageMethod == 'temporary_table') {
        $cartData = serialize($_SESSION['cart']);
        $sql = "INSERT INTO temp_cart_data (session_id, cart_data) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", session_id(), $cartData);
        $stmt->execute();
    }
}

// Function to retrieve cart data from the temporary table (if applicable):
function retrieveCartDataFromTempTable() {
    global $conn;
    if ($storageMethod == 'temporary_table') {
        $cartDataQuery = mysqli_query($conn, "SELECT cart_data FROM temp_cart_data WHERE session_id = '" . session_id() . "'");
        if ($cartData = mysqli_fetch_assoc($cartDataQuery)) {
            $_SESSION['cart'] = unserialize($cartData['cart_data']);
        }
    }
}

if (isset($_GET['id'])) {
    // Get item details
    $itemId = $_GET['id'];
    $itemQuery = mysqli_query($conn, "SELECT * FROM additemsdata WHERE id = $itemId");
    $item = mysqli_fetch_assoc($itemQuery);

    // Add item to cart array in session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $item;

    echo "Item added to cart!";

    // Save cart data to temporary table (if applicable)
    saveCartDataToTempTable();
} elseif (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    // Remove item from cart array in session based on the index
    if (isset($_SESSION['cart'][$deleteId])) {
        unset($_SESSION['cart'][$deleteId]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array after deletion
        echo "Item deleted from cart!";
    } else {
        echo "Item not found in cart!";
    }
} else {
    retrieveCartDataFromTempTable();  // Retrieve cart data from temporary table (if applicable)

    // ... (cart display logic remains the same)
}
?>
