<?php
session_start(); 
require 'connect.php';
if (isset($_POST['book'])) {
   
    if (!isset($_SESSION['cus_id'])) {
        header("Location: payforlog.php");
        exit();
    } 
    $cus_id = $_SESSION['cus_id'];
  header("Location: payment.php");
       
}

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

        function searchNumbers() {
  let filter = document.getElementById('number-search').value;
  let cards = document.querySelectorAll('table tr:not(:first-child)');

  for (let i = 0; i < cards.length; i++) {
    let cells = cards[i].getElementsByTagName('td');
    let found = false;

    for (let j = 0; j < cells.length; j++) {
      let cellText = cells[j].textContent.trim();
      if (cellText.includes(filter)) {
        found = true;
        break;
      }
    }

    cards[i].style.display = found ? '' : 'none';
  }
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
        
        background-color: white;
        background-size: cover;
            color: white;
        
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
    background-color: #f44336; 
    color: white; 
    border: none; 
    padding: 10px 15px; 
    border-radius: 5px; 
    font-size: 16px; 
    font-weight: bold; 
    font-family: Arial, sans-serif;
}

table a {
    background-color: #f44336; 
    color: white; 
    border: none; 
    padding: 10px 15px; 
    border-radius: 5px; 
    font-size: 16px; 
    font-weight: bold; 
    font-family: Arial, sans-serif;
}
          
        
        table td{
            font-size:2rem; 
            color:black;
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
  
  
  padding: 10px 20px;
  
  text-decoration: none; 
  color: #333;
  background-color: transparent;
color:blue;
  
  font-family: sans-serif;
  font-weight: bold;
  cursor: pointer; 

  &:hover {
    background-color: #ddd;
  }
}

.offers{

    border-radius: 100rem;
  padding: 1rem;
  font-family: 'Helvetica';
  letter-spacing: 0.47px;
  font-weight: bold;
  font-size: 1rem;
  padding: 1rem 3rem;
  color: #f1315a;
  box-shadow: 0 0 6px 0 rgba(157, 96, 212, 0.5);
  border: solid 3px transparent;
  background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(101deg, #ffefce, #f1315a, #56a9cc);
  background-origin: border-box;
  background-clip: content-box, border-box;
  box-shadow: 2px 1000px 1px #fff inset;
}
table td .multiline-name { 
  display: -webkit-box;
  -webkit-line-clamp: 3; 
  -webkit-box-orient: vertical;
  overflow: hidden;
  width: 350px; 
}
    
.searchbaar {
  display: flex;
  justify-content: center; 
  align-items: center;
  margin: 40px auto; 
  background-color: #f4f4f4; 
  border-radius: 10px; 
  padding: 20px; 
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.15); 
}

.searchbaar h2 {
  margin: 0 10px; 
  font-family: sans-serif; 
  font-weight: bold; 
  color: #333; 
}

.searchbaar input[type="text"] {
  width: 250px; 
  height: 40px; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
  padding: 10px; 
  font-size: 16px; 
  font-family: inherit; 
  background-color: #fff; 
}

.searchbaar input[type="text"]:focus {
  outline: none; 
  border-color: #007bff; 
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); 
}
.searchbaar::before {
    
  content: "";
  display: block;
  position: absolute; 
  top: 0;
  left: 0;
  width: 100%;
  height: 100px;
  background-color: blue; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
  z-index: -1; 
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
<div class="searchbaar">
    <h2>Search Place here -:</h2>
  <input type="text" placeholder="Search place.." id="find" name="find" onkeyup="search()">
  <h2>Search Price here -:</h2><input type="text" placeholder="Search price..." id="number-search" onkeyup="searchNumbers()">
</div>
<div class="topnav" class="sidebody">

				
<br><br>
<center><h1 style="color:red;">SAFARI PACKAGES</h1></center>
<form action="" method="post">
    <table  cellspacing="0" cellpadding="100">
        <tr>
           
            
           
        </tr>
        <?php
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM additemsdata ORDER BY item_id DESC");

        foreach ($rows as $row) :
        ?>
        <tr>
           
            <td> <img src="image/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>"> </td>
            <td> <b><span class="multiline-name"><?php echo $row["name"]; ?></span></b>
                <br> <a href="package.html" class="my-button">See More ...</a>
 
                <button  onclick="addToCart(<?php echo $row['item_id']; ?>)"><b>Add to Cart</b></button>
                <button name="book" value="book">Book</button>
            </td>
            <br>
        </tr>
        
        <?php endforeach; ?>
    </table></form>
    <br> <br> <br>
    <div id="cart-contents"></div>
    </div><br><br>
    <hr><br><br>
    <center><h1 style="font-size:3rem; color:blue;">Special Offers</h1></center>

    <br><br>

    <center>  <h3>

Embark on an Unforgettable Adventure: Unveiling the Enthralling Offers of Sri Lankan Safaris in Sigiriya
Nestled amidst the emerald embrace of Sri Lanka's Cultural Triangle, Sigiriya beckons adventure seekers with its captivating blend of ancient wonders and untamed wilderness. And what better way to explore this awe-inspiring landscape than on a thrilling safari? Sri Lankan safaris in Sigiriya offer a kaleidoscope of experiences, promising encounters with exotic wildlife, breathtaking vistas, and a glimpse into the island's rich heritage.

Unleash Your Inner Explorer:

Encounter Majestic Creatures: Embark on jeep safaris through Minneriya or Kaudulla National Parks, where herds of majestic elephants roam amidst grasslands dotted with sparkling lakes. Witness troops of playful monkeys swinging through the trees, and keep your eyes peeled for elusive leopards basking in the dappled sunlight.

Step Back in Time: Delve into the mystique of Sigiriya itself, a UNESCO World Heritage Site. Ascend the iconic Lion Rock, marveling at the ancient frescoes and panoramic views of the surrounding plains. Explore the ruins of the royal palace and imagine the grandeur of a bygone era.

Embrace Nature's Bounty: Immerse yourself in the verdant beauty of the Hurulu Eco Park, a haven for birdwatchers and nature enthusiasts. Spot vibrant birdlife flitting through the canopy, or take a boat ride on the serene Kandalama reservoir, soaking in the tranquility of the natural surroundings.

Indulge in Cultural Delights: Immerse yourself in the vibrant tapestry of Sri Lankan culture. Witness traditional Kandyan dance performances and learn the art of batik painting. Savor authentic Sri Lankan cuisine, a symphony of spices and flavors that will tantalize your taste buds.

</h3></center>

    <br><br>
<center><button name="see" class="offers" onclick="window.location.href='offers.html';">See all</button></center>
    
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
