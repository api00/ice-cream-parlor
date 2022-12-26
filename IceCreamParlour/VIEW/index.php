<?php
session_start();
?>
<?php  

include ".././MODEL/dbconnect.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ice Cream Parlour</title>
  <link rel="icon" href="./images/favicon.png" type="image/gif" sizes="20x20">
  <link href="../CSS/index.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style>
     .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    border-radius: 83%;
    height: 258px;
}
  </style>
</head>

<body>
  <header>
    <div class="row" id="navbarSection">
      <ul class="nav">
        <li>
          <a href="#homeSection">HOME</a>
        </li>
        <li>
          <a href="#aboutUsSection">ABOUT US</a>
        </li>
        <li>
          <a href="#flavourSection">FLAVOURS</a>
        </li>
        <li>
          <a href="#contactSection">CONTACT</a>
        </li>
        <li>
        <?php if(($_SESSION["RULE"])=="CUSTOMER"): ?>
            <a href="../VIEW/CUSTOMER/cusDashboard.php">DASHBOARD</a>
        <?php elseif(($_SESSION["RULE"])=="ADMIN"):?>
                <a href="../VIEW/ADMIN/dashboard.php">DASHBOARD</a>
        <?php else: ?>
            <a href="../VIEW/login.php">LOGIN</a>
        <?php endif; ?>

        
       
       
          
        </li>
      </ul>
    </div>
    <div class="title" id="homeSection">
      <p>Ice cream parlour ;)</p>
      <a href="#aboutUsSection">
        <i class="fa fa-angle-double-down down-arrow"></i>
      </a>
    </div>
  </header>
  <div class="about-us-container" id="aboutUsSection">
    <div class="column">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="./images/carousel-1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="./images/carousel-2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="./images/carousel-3.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./images/carousel-4.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./images/carousel-5.jpg" style="width:100%">
        </div>
      </div>


    </div>
    <div class="column description-container">
      <div class="description">
        <p class="about-us-title">About us</p>
        <p class="about-us-content">You can't buy happiness, but you can buy ice-cream,
          <br>
          <br> that is pretty much the same thing !
          <br>
          <br>We serve happiness with pretty smiles ;)
        </p>
        <a class="button" href="#flavourSection">
          <p>Check out the flavours</p>
        </a>

      </div>


    </div>
  </div>
  <div class="flavour-section">
    <p class="flavour-header">Flavours</p>
    <div class="flavour-container" id="flavourSection">
      
      <?php 
     $conn = connect();
     $s = oci_parse($conn, "select * FROM MENUCARD");
     oci_execute($s);
       while ($value = oci_fetch_assoc($s)):
       ?>
      <div class="flavours">
        <img src="./images/<?php echo $value["IMAGE"]?>" alt="Avatar" class="image">
        <div class="middle">
        <?php if(($_SESSION["RULE"])=="CUSTOMER"): ?>
          <a href="../VIEW/CUSTOMER/showCart.php?SERIAL_NUMBER=<?php echo $value['SERIAL_NUMBER'] ?>"><div class="text"><?php echo $value["INAME"] ?></div></a>
        <?php else: ?>
          <div class="text"><?php echo $value["INAME"] ?></div>
        <?php endif; ?>
        </div>
      </div>
      <?php endwhile ?>
   
    
      
   
      
      
    
    </div>
  </div>
  <div class="contact-container" id="contactSection">
    <div class="contact-section">
      <p class="subtext">Call for orders</p>
      <div class="card phone-section">
        <div class="contactNumber">
          <i class="fa fa-phone phone-icon"></i>
          <p>CALL</p>
        </div>
      </div>
      <p class="subtext visti-text">All Credit goes to </p>
      <div class="card">
        <div class="address">
          <i class="fa fa-map-signs"></i>
          <p>Mavericks 22-23</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="up-arrow-section">
      <a href="#navbarSection">
        <i class="fa fa-angle-double-up up-arrow"></i>
      </a>
    </div>
  </footer>
</body>
<script src='../CONTROLLER/scripts/script.js'></script>

</html>