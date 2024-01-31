<html lang="en">
    <head>
        <title> travel lanka about</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="styleone.css">
    
        <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,700;1,600&display=swap');

:root{
    --orange:#ffa500;
}

*{
    font-family:'Nunito',sans-serif;
    margin:0; 
    padding:0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none;
    border: none;
    text-decoration: none;
    transition:all .2s linear;
}
*::selection{
    background:var(--orange);
    color: #fff;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}
section{
    padding:2rem 9%;
}

header{
    position:fixed;
    top:0; left:0; right:0;
    background: #333;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:2rem 9%;
}
header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color:#fff;
    text-transform: uppercase;
}
header .navbar a{
	padding:8px 17px;
	color:var(--bg-color);
	font-size:1rem;
	text-transform:uppercase;
	font-weight:500;
}
.navbar a:hover{
	background-color:var(--main-color);
	border-radius:0.2rem;
	transition:0.5s all linear;
}
header .icons i{
    font-size: 2.5rem;
    color:#fff;
    cursor:pointer;
    margin-right: 2rem;
}
header .navbar a:hover{
    color:var(--orange);
}
header .search-bar-container{
    position: absolute;
    top: 100%; left: 0; right: 0;
    padding: 1.5rem 2rem;
    background: #333;
    border-top: .1rem solid rgba(255,255,255,.2);
    display: flex;
    align-items: center;
    z-index: 1001;
    clip-path: polygon(0 0,100% 0,100 0,0 0);
}
header .search-bar-container.active{
    clip-path: polygon(0 0,100% 0,100% 100%,0 100%)
}
header .search-bar-container #search-bar{
    width:100%;
    padding:1rem;
    text-transform: none;
    color:#333;
    font-size: 1.7rem;
    border-radius: .5rem;
}
header .search-bar-container label{
    color:#fff;
    cursor: pointer;
    font-size: 3rem;
    margin-left: 1.5rem;
}
header .search-bar-container label:hover{
    color:var(--orange);
}



.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    position: relative;
    z-index: 0;
}
.home .content h3{
    font-size: 4.5rem;
    color:#fff;
    text-transform: uppercase;
    text-shadow: 0 .3rem .5rem rgba(0,0,0,.1);
}
.home .content p{
    font-size: 2.5rem;
    color:#fff;
    padding:.5rem 0;
}
.home .video-container video{
    position: absolute;
    top:0; left: 0;
    z-index: -1;
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.heading{
    text-align: center;
    padding:2.5rem 0;
}
.heading span{
    font-size:3.5rem;
    background: rgba(255,165,0,.2);
    color:var(--orange);
    border-radius:  .5rem;
    padding:.2rem 1rem;
}
.heading span.space{
    background: none;
}
/*about us start */
.details{
    font-family:'Nunito',sans-serif;
    font-size: 1.5rem;
}   

/*about us end*/

.packages .box-container{
    display:flex;
    flex-wrap: wrap;
    gap:2rem;
    

}
.packages .box-container .box{
    flex:1 1 30rem;
    border-radius: .5rem;
    overflow: hidden;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
    
}
.packages .box-container .box img{
    height:25rem;
    width:20rem;
    object-fit: cover;
}
.packages .box-container .box .content{
    padding:2rem;
}
.packages .box-container .box .content h3{
    font-size: 2rem;
    color:#333;
}
.packages .box-container .box .content h3 i{
    color:var(--orange);
}
.packages .box-container .box .content p{
    font-size: 1.7rem;
    color:#666;
    padding:1rem 0;
}
.packages .box-container .box .content .stars i{
    font-size: 1.7rem;
    color:var(--orange);
}
.services .heading{
        text-align: center;
        padding:2.5rem 0;   
}
.services .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}
.services .box-container .box{
    flex: 1 1 30rem;
    border-radius: .5rem;
    padding:2rem;
    text-align: center;
}
.services .box-container .box i{
    padding:1rem;
    font-size: 5rem;
    color:var(--orange);
}
.services .box-container .box h3{
    
    font-size: 2.5rem;
    color:#333;
}
.services .box-container .box p{
    font-size: 1.5rem;
    color:#666;
    padding: 1rem 0;
}
.review .developers-slider{
    padding-bottom: 2rem;
}
.developers-slider .box{
    padding:2rem;
    text-align: center;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
    border-radius: .5rem;
}
.developers-slider .box img{
    height: 13rem;
    width: 13rem;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 1rem;
}
.developers-slider .box h3{
    color:#333;
    font-size: 2.5rem;
}
.developers-slider .box p{
    color:#333;
    font-size: 1.5rem;
    padding:1rem o;
}
}
header{
	position:fixed;
	width:100%;
	top:0;
	right:0;
    z-index:1000;
	display:flex;
	justify-content:space-between;
	align-items:center;
    border:1px solid black;
	padding:10px 100px;
	background:var(--text-color);
	transition:0.5s linear;
}
.logo img{
	width:60px;
}


          </style>
        </style>
    
      </head>

    <body>

      <header>

        <a href="index.php" class="logo"> 
        <img src="img/stitch-stich2543-esport-vector-logo-lion-on-white-background-581e9d43-2fc9-4a8f-9e26-7c69128483e1.jpg" alt="">
        </a>
        
        <ul  class="navbar">
                          <li><a href="index.php">Home</a></li>
                          <li><a href="package.html">Package details</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="FAQ.php">FAQ'S</a></li>
                            <li><a href="aboutpage.php">About us</a></li>
                        </ul>
                
            <div class="header-icon">
                <a href="#" class="logo"> 
              
            
          <a href="signform.php"> 
        <img src="img/24795-4-sign-up-button-photos.png" alt="">
        </a>
        <a href="Signin.php"> 
        <img src="img/login-button-png-30.png" alt="">
        </a>
        </a>
             </div>
        </header>

    <!--home section starts-->
        <section class="home" id="home">
            <div class="content">
                <h3 style="color:var(--orange); font-family:serif">adventure is worthwhile</h3>
                <p>discover new places with us, adventure awaits</p>
                
            </div>

            <div class="controls">
                <span class="vid-btn" data-src="./assets/ශර ලකව_1080p.mp4"></span>
                
            </div>

            <div class="video-container">
                <video src="./assets/ශර ලකව_1080p.mp4" id="video-slider" loop autoplay muted></video>
            </div>


        </section>

    <!--home section end-->


        <!--about section start-->

    <section class="aboutus" id="aboutus">

      <h1 class="heading">
        <span>a</span>
        <span>b</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span>_</span>
        <span>u</span>
        <span>s</span>
       </h1>



        <div class="details">
            <p><b>Our Vision:</b>
              At SAFARI LANKA, we envision a world where every journey is a gateway to the extraordinary.
               Our mission is to redefine the safari experience, not merely as a destination,
                but as a transformative odyssey.
                We strive to immerse our explorers in the untamed beauty of nature,
                 fostering a deep connection between travelers and the wild.
            </p>
            <br><br>
            <p><b>Embark on a Journey of Discovery:</b>
              We believe in the power of travel to ignite the spirit of adventure
               and open minds to the wonders of the world. Our vision is to curate
                unforgettable safari experiences that go beyond the ordinary,
                 inviting you to uncover the hidden treasures of the landscapes we traverse.
            </p>
            <br><br>
            <p><b>Conservation, Community, and Culture:</b>
              At the heart of our vision is a commitment to sustainable tourism.
               We aspire to be stewards of the environments we explore,
                fostering conservation efforts and contributing to the well-being of local communities.
                 Every safari with us is an opportunity to support wildlife conservation,
                  empower local communities, and celebrate the richness of diverse cultures
            </p>
            <br><br>
            <p><b>Your Safari, Your Story:</b>
              We understand that each traveler is unique, seeking a personalized adventure
               that resonates with their spirit. Our vision is to be the catalyst for
                creating stories that last a lifetime. From the thrill of wildlife encounters
                 to the tranquility of stunning landscapes, your safari with us is more than
                  a vacation; it's a chapter in your own extraordinary narrative.
            </p>
            <br><br>
            <P><b>Join Us on the Safari of a Lifetime:</b>
              At SAFARI LANKA, our vision is to be the compass guiding you to the most enchanting
               corners of the world. Whether you're a seasoned explorer or a first-time adventurer,
                we invite you to join us on a safari of a lifetime, where every moment is a brushstroke
                 on the canvas of your wanderlust.</P>

        </div>
        
        

    </section>


<!--about section end-->



    <!--packages selection start-->

    <section class="packages" id="packages">
       <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
       </h1>
       
       <div class="box-container">
        <div class="box">
            <img src="./assets/galle.jpg" alt="galle">
            <div class="content">
              <h3><i class="fa-solid fa-location-dot"></i>galle</h3>
              <p>Galle fort,Galle,Sri Lanka</p>
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                
            </div>
        </div>


            <div class="box">
                <img src="./assets/kogg.jpg" alt="koggala">
                <div class="content">
                  <h3><i class="fa-solid fa-location-dot"></i>koggala</h3>
                  <p>koggala,Galle,Sri Lanka</p>
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  
                    
                </div>
            </div>


            <div class="box">
                <img src="./assets/miriss.jpeg" alt="mirissa">
                <div class="content">
                  <h3><i class="fa-solid fa-location-dot"></i>mirissa</h3>
                  <p>mirissa,Galle,Sri Lanka</p>
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  
                   
                </div>
            </div>


            <div class="box">
                <img src="./assets/jungleb.jpg" alt="jungle beach">
                <div class="content">
                  <h3><i class="fa-solid fa-location-dot"></i>jungle beach</h3>
                  <p>jungle beach,Sri Lanka</p>
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  
                </div>
            </div>



            <div class="box">
                <img src="./assets/Hikkaduwa.jpg" alt="hikkaduwa beach">
                <div class="content">
                  <h3><i class="fa-solid fa-location-dot"></i>hikkaduwa beach</h3>
                  <p>hikkaduwa beach,Sri Lanka</p>
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  
                </div>
            </div>


       </div>


    </section>

    <!--packages selection end-->

    
    


    <!--services section start-->

    <section class="services" id="services">

      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>

      </h1>

      <div class="box-container">
          <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Inclusive Hospitality,Modern Comfort at Affordable Prices,Community Integration,Sustainability and Eco-Friendly Practices,
              Affordable Dining Options,Flexible Accommodation Packages,Digital Convenience,Safety and Security
            </p>
          </div>

          <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Diverse Culinary Experience,Healthy and Sustainable Choices,Culinary Innovation,Interactive Dining Experiences
              ,Local Partnerships,Customization and Personalization,Inclusive Dining Atmosphere,Craft Beverages and Cocktails,Efficient and Streamlined Service
            </p>
          </div>

          <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Guest Well-Being as Top Priority,Comprehensive Safety Protocols,Professional and Trained Staff,Visible Security Measures,Collaboration with Local Authorities
              ,Technological Solutions,Educational Resources for Guests,Regular Safety Drills,Transparent Communication,Continuous Improvement
            </p>
          </div>

          <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Global Exploration and Cultural Connection,Personalized Journeys,Sustainable and Responsible Tourism,Seamless and Tech-Enabled Travel,Community Engagement and Empowerment
              ,Cultivate a Travel Community,Innovation in Travel Experiences,Exceptional Customer Service,Crisis Preparedness and Support,Inspiring Travel Stories
            </p>
          </div>

          <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventure</h3>
            <p>Empowering Exploration,Diverse and Exciting Experiences,Environmental Stewardship,Skill Development and Education,Safety First,Community Engagement
              Innovative Adventure Technology,Storytelling and Branding,Accessible Adventures,Continuous Exploration and Evolution
            </p>
          </div>

      </div>
    </section>

    <!--services section end-->


    <!--review section starts-->

    <section clss="developers" id="developers">
      <h1 class="heading">
        <span>d</span>
        <span>e</span>
        <span>v</span>
        <span>e</span>
        <span>l</span>
        <span>o</span>
        <span>p</span>
        <span>e</span>
        <span>r</span>
        <span>s</span>
      </h1>

      <div class="swiper-container developers-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slider">
            <div class="box">
              <img src="./assets/Lahiru_heshan.jpg" alt="Lahiru Heshan">
              <h3>Mr.Lahiru Heshan</h3>
              <p>Student of IUHS Nalanda Campus.
                 Best for web designing.Best for Object Oriented Programming,
                 Software Designing Concepts,Operating Systems
              </p>
            </div>
          </div>


          <div class="swiper-slider">
            <div class="box">
              <img src="./assets/dulana hansaja.jpg" alt="Dulana Hansaja">
              <h3>Mr.Dulana Hansaja</h3>
              <p>Student of IUHS Nalanda Campus.
                 Best for web designing.Best for Object Oriented Programming,
                 Software Designing Concepts,Operating Systems
              </p>
            </div>
          </div>


          <div class="swiper-slider">
            <div class="box">
              <img src="./assets/Viraj_lasantha (1).png" alt="Viraj Lasantha">
              <h3>Mr.Viraj Lasantha</h3>
              <p>Student of IUHS Nalanda Campus.
                 Best for web designing.Best for Object Oriented Programming,
                 Software Designing Concepts,Operating Systems
              </p>
            </div>
          </div>


          <div class="swiper-slider">
            <div class="box">
              <img src="./assets/Ashen_Udantha.jpg" alt="Ashen Udantha">
              <h3>Mr.Ashen Udantha</h3>
              <p>Student of IUHS Nalanda Campus.
                 Best for web designing.Best for Object Oriented Programming,
                 Software Designing Concepts,Operating Systems
              </p>
            </div>
          </div>

          <div class="swiper-slider">
            <div class="box">
              <img src="./assets/Vimukthi_viduranga.jpg" alt="Vimukthi Viduranga">
              <h3>Mr.Vimukthi Viduranga</h3>
              <p>Student of IUHS Nalanda Campus.
                 Best for web designing.Best for Object Oriented Programming,
                 Software Designing Concepts,Operating Systems
              </p>
            </div>
          </div>
      

          
        </div>
      </div>

    </section>

    <!--review section end-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    </body>
</html>