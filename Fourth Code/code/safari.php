

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Packages Trip</title>
  <link rel="stylesheet" href="styleone.css">
  <script type="text/javascript" src="nameshow.js" > </script>

  <style>
  body{
  background-color:silver;
}




.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 800px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  

  

  </style>
<?php

$conn = new mysqli('localhost', 'root', '', 'payment');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as count FROM signupdetails"; 


$result = $conn->query($sql);


if ($result) {
   
    $row = $result->fetch_assoc();
    $count = $row['count'];

    
    if ($count > 0) {
        echo 'has_data';
    } else {
        echo 'no_data';
    }

    
    $result->free_result();
} else {
    
    echo "Error executing the query: " . $conn->error;
}


$conn->close();
?>
<script>
    console.log('Function a() called.');

    function a() {
      
      <?php
        
        $conn = new mysqli('localhost', 'root', '', 'payment');

       
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

       
        $sql = "SELECT COUNT(*) as count FROM signupdetails";
        $result = $conn->query($sql);

        
        if ($result) {
          $row = $result->fetch_assoc();
          $count = $row['count'];

          if ($count > 0) {
            echo "window.location.href = 'payment.php';"; 
          } else {
            echo "window.location.href = 'signform.php';"; 
          }

          $result->free_result();
        } else {
          echo "console.error('Error executing the query: " . $conn->error . "');";
        }

        $conn->close();
      ?>
    }
 
    //add item cart
    function addToCart(itemName, itemPrice) {
       
        var form = document.createElement('form');
        form.method = 'post';
        form.action = 'cart.php';

        var itemNameInput = document.createElement('input');
        itemNameInput.type = 'hidden';
        itemNameInput.name = 'item_name';
        itemNameInput.value = itemName;
        form.appendChild(itemNameInput);

        var itemPriceInput = document.createElement('input');
        itemPriceInput.type = 'hidden';
        itemPriceInput.name = 'item_price';
        itemPriceInput.value = itemPrice;
        form.appendChild(itemPriceInput);

        document.body.appendChild(form);
        form.submit();
    }

    function search() {
  let filter = document.getElementById('find').value.toUpperCase();
  let cards = document.querySelectorAll('.card');

  for (let i = 0; i < cards.length; i++) {
    let title = cards[i].querySelector('h2');
    let value = title.textContent || title.innerText;

    if (value.toUpperCase().indexOf(filter) > -1) {
      cards[i].style.display = '';
    } else {
      cards[i].style.display = 'none';
    }
  }
}

</script>


</head>
<body>

<header>

<a href="index.php" class="logo"> 
<img src="img/stitch-stich2543-esport-vector-logo-lion-on-white-background-581e9d43-2fc9-4a8f-9e26-7c69128483e1.jpg" alt="">
</a>

<ul  class="navbar">
                  
	                <li><a href="index.php">Home</a></li>
                  <li><a href="tabledata.php">packages</a></li>
                    <li><a href="safari.php">Safaris</a></li>
                    <li><a href="FAQ.php">FAQ'S</a></li>
                    <li><a href="aboutpage.php">About us</a></li>
                </ul>
				
				
				<div class="topnav" class="sidebody">

				<div class="searchbaar">
  <input type="text" placeholder="Search.." id="find" name="find" onkeyup="search()"></div>
</div>


		<div class="header-icon">
        <a href="cartnew.php" class="logo"> 
        <img src="img/478-4788427_shopping-cart-button-shopping-cart-logo-white-hd.png" alt="">
		
	<a href="signform.php"> 
<img src="img/24795-4-sign-up-button-photos.png" alt="">
</a>
<a href="Signin.php"> 
<img src="img/login-button-png-30.png" alt="">
</a>
</a>
		 </div>
</header>
<section class="safarihome" id="safarihome">

<div class="home-text">
  <center><h1>Safaris<h1>
  <br>
<a href="safari.php" class="transparent-btn">Book Now</a></center>
</div>
</section>

<section class="aboutpackage" id="aboutpackage">
<div class="about-textnew">
<center>
<h1>Safaris</h1></center>
</div>
</section>
<center>
<div class="constrainertwo">
<div class="card">
<div class="imgbx">

<a href="#">
<img src="img/2d7b9775c4a9492b0cc1067b0d7fcf8e.jpg"></a>
<h2 style="color:black;">Wildlife Tour of Yala & Udawalawe - 1 night & 2 days</h2>

				 <br><h1>Price : RS.5000/=</h1>
			<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 63px 20px;
            cursor: pointer;" type = "button" value = "Book Now" onclick="a()"">
			
						 </p>
				 </div>
		 </div>
		 
		 <div class="card">
<div class="imgbx">
<a href="#">
<img src="img/CW_Bar_Option-1.jpg"></a>
<h2 style=" color:black;">Wildlife & Bird Watching Tour in Sri Lanka in the North West - North Central & Central - 3 nights & 4 days</h2>

						<br><h1>Price : RS.3000/=</h1>
						<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 20px 20px;
            cursor: pointer;" type = "button" value = "Book Now" Onclick="a()">
					 </div>
		 </div>
		 <div class="card">
<div class="imgbx">
<a href="#">
<img src="img/Yala_1200px_22_10_24-1000x600.jpg"></a>
<h2 style=" color:black;">Wildlife Photography Tour in Sri Lanka - 20 nights & 21 days</h2>

						<br><h1>Price : RS.9000/=</h1> 
						<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 70px 20px;
            cursor: pointer;" type = "button" value = "Book Now" Onclick="a()">
				 </div>
		 </div>
		  <div class="card">
<div class="imgbx">
<a href="#">
<img src="img/Wildzyala_Restaurant_Food_Roof_Scenic Beauty-Wild_1090x610.jpg"></a>
<h2 style=" color:black;">Ultimate Wildlife Safari of Sri Lanka - 25 nights & 26 days</h2>
	<br><h1>Price : RS.4000/=</h1> 
	<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 50px 20px;
            cursor: pointer;" type = "button" value = "Book Now" Onclick="a()">
					 </div>
		 </div>
		  <div class="card">
<div class="imgbx">
<a href="#">
<img src="img/pngtree-vibrant-3d-illustration-of-a-safari-adventure-in-the-sahara-desert-picture-image_4037877.jpg"></a>
<h2 style=" color:black;">Wildlife Photography Tour in Sri Lanka - 20 nights & 21 days</h2>
						<br><h1>Price : RS.8000/=</h1>
						<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 50px 20px;
            cursor: pointer;" type = "button" value = "Book Now" Onclick="a()">
				 </div>
		 </div>
		  <div class="card">
<div class="imgbx">
<a href="#">
<img src="img/exploring-amazing-nature-jeep-safari-720169.jpg"></a>
<h2 style=" color:black;">Wildlife Photography Tour in Sri Lanka - 20 nights & 21 days</h2>
						<br><h1>Price : RS.2000/=</h1> 
						<input style="background-color: orange;
            border: none;
            text-decoration: none;
            color: black;
            padding: 10px 10px;
            margin: 28px 20px;
            cursor: pointer;" type = "button" value = "Book Now" Onclick="a()">
						 </div>
		 </div>
	 </div>
	 
	</center>
	 
	 
	 <br><br>
	 <center><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7630037440213!2d80.21412532499318!3d6.027233028731343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173a4115316af%3A0x6e9078b6e3e0a7f!2sGalle%20Dutch%20Fort%2C%20Galle%2080000!5e0!3m2!1sen!2slk!4v1702879036566!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
	 </center>
	 
	 <div class="footer2">
	 <div class="col-1">
	 <h3>GET IN TOUCH</h3><br><br>
		 <p>Thiththagalla road,</p>
	     <p>Ahangama</p>
		 <p>+94 76 3245580</p>
		 <p>safarigalle@gmail.com</p>
		 <p>Office Hours:</p>
		 <p>Monday – Saturday, 8h-17h</p>
	 </div>
	 
	 <div class="col-2">
	 
	 <img src="img/Environment-Agency-logo.jpg" alt="" ><br><br><br>
	  <img src="img/images.jpg" alt="" >
	 </div>
	 
	<div class="col-3">
	<h3></h3>
	 <img src="img/4-AnimalLogoDesign-DeerLogoDesign.jpg" alt="" >
	 <br><br><br>
	  <img src="img/360_F_464265579_7K73JlhLt680tcYMhVIjsZJVdSlYfj6e.jpg" alt="" >
	</div>
	</div>
</body>
</html>