<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>FAQs</title>
    <link rel="stylesheet" href="styles.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #f5f8ff;
}
.container{
    margin: 0 40px;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.container h1{
    color:#333;
}
.container .tab{
    position: relative;
    background: #fff;
    padding: 0 20px 20px;
    box-shadow: 0 15px 25px rgba(0,0,0,0.05);
    border-radius: 5px;
    overflow: hidden;
}
.container .tab input{
    appearance: none;
}
.container .tab label{
    display: flex;
    align-items: center;
    cursor: pointer;
}
.container .tab label ::after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 2rem;
    color: rgba(0,0,0,0.1);
    transition: transform 1s;
}
.container .tab:hover label::after{
    color: #333;
}
.container .tab input:checked ~ label::after{
    transform: rotate(135deg);
    color: #fff;
}
.container .tab label h2{
    width: 40px;
    height: 40px;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 1.25rem;
    border-radius: 5px;
    margin-right: 10px;
}


.container .tab input:checked ~ label h2{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: rgba(255,255,255,0.2);
    font-size: 8rem;
    justify-content: flex-end;
    padding: 20px;
}

.container .tab:nth-child(2) label h2{
    background: linear-gradient(135deg,#70f570,#49c628);
}
.container .tab:nth-child(3) label h2{
    background: linear-gradient(135deg,#3c8ce7,#00eaff);
}
.container .tab:nth-child(4) label h2{
    background: linear-gradient(135deg,#ff96f9,#c32bac);
}
.container .tab:nth-child(5) label h2{
    background: linear-gradient(135deg,#fd6e6a,#ffc600);
}
.container .tab:nth-child(6) label h2{
    background: linear-gradient(135deg,#b11161,#cc9d1c);
}


.container .tab label h3{
    position: relative;
    font-weight: 500;
    color: #333;
    z-index: 10;
}
.container .tab .content{
    max-height: 0;
    transition: 1s;
    overflow: hidden;
}
.container .tab input:checked ~ .content{
    max-height: 100vh;
}
.container .tab .content p{
    position:relative;
    padding: 10px 0;
    color: #333;
    z-index: 10;
}

  </style>

  </head>

  <body>
    <div class="container">
      <h1>Frequently Asked Questions?</h1>
      <div class="tab">
        <input type="radio" name="acc" id="acc1">
        <label for="acc1">
          <h2>01</h2>
          <h3>Question 1 ?</h3>
        </label>
        <div class="content">
          <p>At [Your Safari Website], we envision a world where every journey
             is a gateway to the extraordinary. Our mission is to redefine the
              safari experience, not merely as a destination, but as a
               transformative odyssey. We strive to immerse our explorers in</p>
        </div>
      </div>



      <div class="tab">
        <input type="radio" name="acc" id="acc2">
        <label for="acc2">
          <h2>02</h2>
          <h3>Question 2 ?</h3>
        </label>
        <div class="content">
          <p>At [Your Safari Website], we envision a world where every journey
             is a gateway to the extraordinary. Our mission is to redefine the
              safari experience, not merely as a destination, but as a
               transformative odyssey. We strive to immerse our explorers in</p>
        </div>
      </div>



      <div class="tab">
        <input type="radio" name="acc" id="acc3">
        <label for="acc3">
          <h2>03</h2>
          <h3>Question 3 ?</h3>
        </label>
        <div class="content">
          <p>At [Your Safari Website], we envision a world where every journey
             is a gateway to the extraordinary. Our mission is to redefine the
              safari experience, not merely as a destination, but as a
               transformative odyssey. We strive to immerse our explorers in</p>
        </div>
      </div>



      <div class="tab">
        <input type="radio" name="acc" id="acc4">
        <label for="acc4">
          <h2>04</h2>
          <h3>Question 4 ?</h3>
        </label>
        <div class="content">
          <p>At [Your Safari Website], we envision a world where every journey
             is a gateway to the extraordinary. Our mission is to redefine the
              safari experience, not merely as a destination, but as a
               transformative odyssey. We strive to immerse our explorers in</p>
        </div>
      </div>



      <div class="tab">
        <input type="radio" name="acc" id="acc5">
        <label for="acc5">
          <h2>05</h2>
          <h3>Question 5 ?</h3>
        </label>
        <div class="content">
          <p>At [Your Safari Website], we envision a world where every journey
             is a gateway to the extraordinary. Our mission is to redefine the
              safari experience, not merely as a destination, but as a
               transformative odyssey. We strive to immerse our explorers in</p>
        </div>
      </div>



    </div>
  </body>

</html>