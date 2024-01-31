

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
$stmt = $conn->prepare("SELECT * FROM signupdetails");
$stmt->execute();
$result = $stmt->get_result();
echo "<br><br><center><h1>USERS</h1></center><br><br>";
echo "<table class='data-table' style='margin: 0 auto; border-collapse: collapse; width: 80%;'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>National ID Number</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cus_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "<td>" . $row['idnumber'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='no-data'>No data found</td></tr>";
}

echo "</tbody>";
echo "</table>";

?>
<br><br><br>
<center>
<a class='beautiful-button' href='setting.html'>Go to Setting</a>


<a class='beautiful-button' href='index.php'>USER HOME</a></center>
</body></html>