
<html>
    <head>
  <style>
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
<?php
require 'connect.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $conn->prepare("DELETE FROM paydetails WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('location: bookpeople.php'); // Redirect back to payment page
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} 

$conn->close();

?>


<html>
    <head>
<style>

.data-table {
    font-family: sans-serif;
    border: 1px solid #ddd;
    text-align: center; 
}

.data-table th,
.data-table td {
    padding: 10px;
    border: 1px solid #ddd;
}


.data-table th {
    background-color: #f2f2f2;
    font-weight: bold;
}


.data-table .no-data {
    text-align: center;
    font-style: italic;
    color: #aaa;
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
<?php
session_start();
require 'connect.php';


// ... your existing code remains the same ...

// Display a table of payment details below the form
echo "<center><h2 style='font-family:Sans-serif;'>Payment People history</h2></center>";
echo "<table class='data-table' style='margin: 0 auto; border-collapse: collapse; width: 80%;'>";
echo "<thead>";
echo "<tr>";
echo "<th>Card Name</th>";
echo "<th>Place</th>";
echo "<th>Price</th>";
echo "<th>Booking Date</th>";
echo "<th>People</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Get payment details from the database
$stmt = $conn->prepare("SELECT id, cardname, place, price, booking, people FROM paydetails");
$stmt->execute();
$result = $stmt->get_result();

// Iterate through the results and display them in the table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cardname'] . "</td>";
        echo "<td>" . $row['place'] . "</td>";
        echo "<td>Rs. " . number_format($row['price'], 2) . "</td>";
        echo "<td>" . $row['booking'] . "</td>";
        echo "<td>" . $row['people'] . "</td>";
        echo "<td><a href='?id=" . $row['id'] . "' class='beautiful-button'>Delete</a></td>";
        
  
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' class='no-data'>No payments found</td></tr>";
}

echo "</tbody>";
echo "</table>";

?><br><br><br>
<center>
<a class='beautiful-button' href='setting.html'>Go to Setting</a></center>


</body>

</html>