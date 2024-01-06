<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = mysqli_connect('localhost', 'root', '', 'payment');

    
    if (isset($_POST['cardname'], $_POST['cardnumber'], $_POST['expmonth'], $_POST['expyear'], $_POST['cvv'])) {
        $name = $_POST['cardname'];
        $email = (int)$_POST['cardnumber'];
        $number = (int)$_POST['expmonth'];
        $national = (int)$_POST['expyear'];
        $f = (int)$_POST['cvv'];
        $place = (int)$_POST['place'];

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $bok = $conn->prepare("INSERT INTO paydetails (cardname, cardnumber, expmonth, expyear, cvv, place) VALUES (?, ?, ?, ?, ?, ?)");

            if (!$bok) {
                echo "Error: " . $conn->error; 
            } else {
                
                $bok->bind_param("siiiii", $name, $email, $number, $national, $f, $place);

                $bok->execute();
                if ($bok->errno) {
                    echo "MySQL error: " . $bok->error;
                } else {
                    echo "Booking Successfully ...";
                    header('location: index.php');
            exit();
                }

                $bok->close();
                $conn->close();
            }
        }
    } else {
        echo "Form fields are not set!";
    }
}
?>

  <script>
        function book() {
            alert("Booking Successful.");
        }
    </script>



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
  function calculatebill() {
             
                  alert("Booking Successfull .");
              
          }
  </script>

<body><center>
<h1 style="font-family:Sans-serif;" >Payment Option</h1></center>

<div class="row">
 <div class="col-75">
    <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="077-222-2222">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="month">

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
        <label for="expmonth">Package</label>
               <input type="text" id="place" name="place" placeholder="package-number">
        <input type="submit" value="Continue to checkout" class="btn" onclick="book()">
		
		
      </form>
    </div>
  </div>
</div>
</body>
</html>