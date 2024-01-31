<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'payment');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['cardname'], $_POST['cardnumber'], $_POST['expmonth'], $_POST['expyear'], $_POST['cvv'], $_POST['place'], $_POST['price'], $_POST['booking-date'], $_POST['people'])) {
        $name = $_POST['cardname'];
        $email = $_POST['cardnumber']; // Assuming you want to store card number as email
        $number = (int)$_POST['expmonth'];
        $national = (int)$_POST['expyear'];
        $f = (int)$_POST['cvv'];
        $place = $_POST['place'];
        $price = (int)$_POST['price']; 
        $bookingDate = $_POST['booking-date'];
        $people = (int)$_POST['people'];

        $bok = $conn->prepare("INSERT INTO paydetails (cardname, cardnumber, expmonth, expyear, cvv, place, price, booking, people) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$bok) {
            echo "Error: " . $conn->error;
        } else {
          $bok->bind_param("siiiisisi", $name, $email, $number, $national, $f, $place, $price, $bookingDate, $people);

            $bok->execute();
            if ($bok->errno) {
                echo "MySQL error: " . $bok->error;
            } else {
                echo "Booking Successfully ...";
                header('location: index.php');
                exit();
            }
        }
        $bok->close();
    } else {
        echo "Form fields are not set!";
    }
}

$conn->close();
?>




<html>
<head>
<style>
  	body {
            background-image: url('img/4597125.webp');

            background-size: cover;

            background-position: center center;

            background-attachment: fixed;

            background-color: #f0f0f0;
        }
.row {
  display: -ms-flexbox; 
  
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}
  .col-50 {
   
  -ms-flex: 50%; 
  flex: 50%;
}
.col-75 {
  
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  
  padding: 15px 10px 15px 500px;
  border: 1px solid lightgrey;
  
}
input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=date] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
select option {
  width: 50%; /* Adjust as needed */
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
select {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  -webkit-border-radius: 5px; /* For older WebKit browsers */
  border-radius: 5px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:#FFA500;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}
label{
  color:white;
}
</style>

<script>
    function book() {
      
  placeName = document.getElementById("place").value;
  peopleNumber = parseInt(document.getElementById("people").value);
  
  let price;

  switch (placeName) {
    case "Sinharaja":
      price = 2000 * peopleNumber;
      break; 
    case "Wilpaththuwa":
      price = 3000 * peopleNumber;
      break;
    case "Namunukula":
      price = 4000 * peopleNumber;
      break;
    case "Yapanaya":
      price = 5000 * peopleNumber;
      break;
    case "Polonnaruwa":
      price = 6000 * peopleNumber;
      break;
    default: 
      alert("Invalid place name");
      return; 
  }

  document.getElementById("priceInput").value = price; 
  document.getElementById("myForm").submit();

  alert(`Successfully paid Price: Rs. ${price.toFixed(2)}`);
}


  </script>
</head>
<body><center>
<h1 style="font-family:Sans-serif;" >Payment Option</h1></center>

<div class="row">
 <div class="col-75">
    <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm">
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="077-222-2222">
            <label for="expmonth">Exp Month</label>
       <input type="text" id="expmonth" name="expmonth" placeholder="month" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="year">
              </div>
			  
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="111">
              </div>
          

        </div>
        
        <label for="place">Select Place:</label>
    <select id="place" name="place">
<option value="">Select a Place</option>
      <option value="Sinharaja">Sinharaja</option>
      <option value="Wilpaththuwa">Wilpaththuwa</option>
      <option value="Namunukula">Namunukula</option>
      <option value="Yapanaya">Yapanaya</option>
      <option value="Polonnaruwa">Polonnaruwa</option>
</select>
               <label for="expmonth">Number of people</label>
               <input type="text" id="people" name="people" placeholder="Number of people">

               <label for="booking-date">Booking Date:</label>
               <input  type="date" id="booking-date" name="booking-date">

              
  
               <input type="hidden" id="priceInput" name="price">



<input type="submit" value="Continue to checkout" class="btn" onclick="book()">
		
		
      </form>
    </div>
  </div>
</div>

