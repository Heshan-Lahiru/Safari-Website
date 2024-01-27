<?php
require 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleone.css">
    <title>Data Page</title>
    <script>
        function addToCart(itemId) {
            fetch('cartnew.php?action=add&item_id=' + itemId)
                .then(response => response.text())
                .then(data => {
                    console.log(data); 
                    window.location.href = "cartnew.php";
    exit();
                });
        }

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
     table {
        
        background-image: url('img/wood-ivy-green-leaves.jpg');
        background-size: cover;
            color: white;
        background-color:#EDEADE;
            width: 90%;
            margin: auto; 
      
      
        }
        table td img{
width:400px;

        }
        .safarihomeone{
	width:100%;
	min-height:100vh;
	top:0;
	left:0;
	background:url(img/83.jpg);
	background-repeat:no-repeat;
	background-position:center;
	display:grid;
	grid-template-columns:repeat(auto-fit,minmax(17rem,auto));
	align-items:center;
	gap:1.5rem;
	
}
table button{
     /* Basic styling */
  display: inline-block;
  padding: 10px 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-decoration: none; /* Remove underline from link */
  color: #333;
  background-color: #f2f2f2;

  /* Customize to your preferences */
  font-family: sans-serif;
  font-weight: bold;
  cursor: pointer; /* Change cursor to a pointer */

  /* Hover effect */
  &:hover {
    background-color: #ddd;
}
}
table a {
    /* Basic styling */
  display: inline-block;
  padding: 8px 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-decoration: none; /* Remove underline from link */
  color: #333;
  background-color: #f2f2f2;

  /* Customize to your preferences */
  font-family:Monospace;
  font-size:1.2rem;
  
  cursor: pointer; /* Change cursor to a pointer */

  /* Hover effect */
  &:hover {
    background-color: #ddd;
}
          
        }
        table td{
            font-size:2rem; 
        }

        .topnav input[type=text] {
  padding: 6px;
  margin-top: 28px;
  margin-left: 1096px;
  border: 3px solid black; 
  font-size: 17px;
  color: black;
}

@media screen and (max-width: 800px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
    border: 3px solid black;
  }
}
.my-button {
  /* Basic styling */
  
  padding: 10px 20px;
  
  text-decoration: none; /* Remove underline from link */
  color: #333;
  background-color: transparent;
color:blue;
  /* Customize to your preferences */
  font-family: sans-serif;
  font-weight: bold;
  cursor: pointer; /* Change cursor to a pointer */

  /* Hover effect */
  &:hover {
    background-color: #ddd;
  }
}


        
    </style>



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
<section class="safarihomeone" id="safarihome">

<div class="home-text">
  <center><h1>Safaris<h1></center>
  <br>

</div>
</section>

<div class="topnav" class="sidebody">

				<div class="searchbaar">
  <input type="text" placeholder="Search.." id="find" name="find" onkeyup="search()"></div>
</div>

<center><h1 style="color:red;">SAFARI PACKAGES</h1></center>
    <table border="1" cellspacing="0" cellpadding="100">
        <tr>
           
            <td><b>Place</b></td>
            <td><b>Details</b></td>
            <td><b>Action</b></td>
            <td><b>Payment</b></td> <!-- New column for payment button -->
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM additemsdata ORDER BY item_id DESC");

        foreach ($rows as $row) :
        ?>
        <tr>
           
            <td> <img src="image/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>"> </td>
            <td><b><?php echo $row["name"]; ?> <b><br><br> <a href="package.html" class="my-button">See More ...</a>
 </td>
            <td>
                <button  onclick="addToCart(<?php echo $row['item_id']; ?>)"><b>Add to Cart</b></button>
            </td>
            <td>
                <a  href="payforlog.php?package_id=<?php echo $row['item_id']; ?>"> Book Now</a> <!-- Payment button -->
            </td>
            <br>
        </tr>
        <?php endforeach; ?>
    </table>
    <br> <br> <br>
    <div id="cart-contents"></div>
    </div>

    
	 <div class="footer2">
	 <div class="col-1">
	 <h3>GET IN TOUCH</h3><br><br>
		 <p>Thiththagalla road,</p>
	     <p>Ahangama</p>
		 <p>+94 76 3245580</p>
		 <p>safarigalle@gmail.com</p>
		 <p>Office Hours:</p>
		 <p>Monday  Saturday, 8h-17h</p>
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
