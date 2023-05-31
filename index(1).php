<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>E-Commerce</title>
    <style>
      body {margin:0;}

      .topnav {
        margin-top:7px;
        overflow: hidden;
      }

      .topnav a { 
        display:inline-block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        border-bottom: 3px solid transparent;
      }

      .topnav a:hover {
        border-bottom: 3px solid #2196F3;
      }

      .topnav a.active {
        border-bottom: 3px solid #2196F3;
      }


    .logo{
      position: absolute;
      left: 10px;
    }
    .logo a{
        font-size:25px;
        font-weight:Bold;
        text-decoration: none;
        color:#2196F3;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .logo a:hover{
      border-bottom:none;

    }
    .btnlogin{
      float:right;
      border:2px solid #fff !important;
      background-color:#2196F3;
      padding:7px;
      color:#fff !important;
      border-radius:20px;
      font-weight:Bold;
    }
    .btnlogin:hover{
      color:#2196F3 !important;
      border:2px solid #2196F3 !important;
      background-color:#fff;
      
      
    }

    /* //////////////// */
    .container {
      padding: 64px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both
    }

    .column-66 {
      float: left;
      width: 66.66666%;
      padding: 20px;
    }

    .column-33 {
      float: left;
      width: 33.33333%;
      padding: 20px;
    }
    
    /* ICONS S0CIAL */
    .container .social{
     clear: both;
     margin-top: 200px;
     text-align: center;
     display:inline-block;
    }
    .container .social i{
     color: #fff;
     font-size: 22px;
     height: 45px;
     width: 45px;
     border-radius: 50%;
     line-height: 45px;
     text-align: center;
     background-color:#2196F3 ;
     margin: 0 15px;
    }
    .container .social i:hover{
     color: #fff;
     background-color: #E0F2F1;
     transition: 1s ease;
     transform: rotate(360deg);
    }
    /* produit */
    #border{
      text-align:center;;
      padding:20px 0;
    }
    .column {
      float: left;
      width: 25%;
      padding:  5px;
      margin-bottom:10px;
  }

/* Remove extra left and right margins, due to padding */
  .rows {margin: 5px 150px 5px 150px ;}

  /* Clear floats after the columns */
  .rows:after {
    content: "";
    display: table;
    clear: both;
  }


  /* Style the counter cards */
  #new{
width:50px;
position:absolute;
text-align:center;
left:0;
top:0;
background-color:red;
color:#fff;
font-size:20px;
border-radius:0 0 15px 0;
}
.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 16px;
height: 420px;
text-align: left;
font-size:17px;
background-color: #fff;
outline: .1rem solid #ccc;
outline-offset: -0.8rem;
}
.card:hover{
outline: .2rem solid #222;
outline-offset: 0;
}
.card img{
margin:0 45px;
height: 12rem;
margin-bottom:10px;
}
.card img:hover{
transform: scale(.9);
}
.Roge{
position:absolute;
color: red;
font-size: 20px;
right:25px;
bottom:25px;
}
  /* Brand */
  .BrandR{margin: 5px 150px 5px 150px ; display: inline;}
  .brand{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    height: 75px;
    width: 150px;
    margin-left:30%;
    background-color: #fff;
    text-align:center;
    color:#aaa;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding:15px;
    font-size:30px;
    border-radius: 50%;
  }
  /* information */
  .info{
    border-top:3px solid #2196F3;
    border-radius: 30px 30px 0 0;
    display: grid;
    margin:50px 25px 0 25px;
    grid-template-columns: 25% 25% 25% 25%;
    grid-gap: 10px;
  }
  .info div{
    width:95%;
    padding:10px;
    text-align:center;
    line-height: 1.5;
  }
  .info div i{
     color: #fff;
     font-size: 22px;
     height: 35px;
     width: 35px;
     border-radius: 50%;
     line-height: 35px;
     text-align: center;
     background-color:#2196F3 ;
     margin: 0 5px;
    }
/* button top page */
    #myBtn {
      width:50px;
      display: none;
      position: fixed;
      bottom: 50px;
      right: 20px;
      z-index: 2;
      font-size: 20px;
      border: none;
      outline: none;
      background-color: #fff;
      cursor: pointer;
      padding: 15px;
      border-radius: 50%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
      color:blue;
    }
    /* mobile and tablet */
    @media screen and (max-width: 600px) {
  .info{
  width: 100%;
  display: block;
  margin-bottom: 15px;
  }
  .info {margin:15px 0 0 0;}
  }
  @media only screen and (max-width: 992px) and (min-width: 600px){
    .info {
  width: 50%;
  display: block;
  }
  .info {margin:15px 0 0 0;}
  }
  @media screen and (max-width: 992px){
    .BrandR{ display: inline;}
   
  .brand{
    height: 50px;
    width: 100px;
    margin:10px;
    text-align:center;
    padding:10px;
    font-size:20px;
    border-radius: 50%;
  }
}
@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center; 
  }
  .column-33 img {
    width:350px;
    height:150px;
    margin:0 10px 0 5px;
  }

  #imgnone{
    display:none;
  }
  .container {
    padding: 7px;
  }
  .title p{
    line-height: 30px;
  }
  .social{
    margin-top: 30px;
  }
}
@media (max-width: 1000px){
  nav{
    padding: 0 10px 0 10px;
  }
}
@media (max-width: 920px) {
  .topnav a{
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  a.active{
    margin-top:20px;
  }

  .logo{
    position:absolute;
    right:0;
    top:5px;
    width: 100%;
    text-align:center;
  }
  .topnav{
    margin-top: 30px;
  }
  .social{
    margin-top:5px;
  }

}
@media screen and (max-width: 600px) {
.column {
width: 50%;
display: block;
margin-bottom: 20px;
}
.rows {margin: 15px;}
}

@media only screen and (max-width: 992px) and (min-width: 600px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
  .rows {margin: 45px;}
}


  </style>
  <?php
// date today
date_default_timezone_set('Africa/Casablanca');
$month =date('m');
$day =date('d');
$year =date('Y');
$today =$year . "-" . $month ."-" .$day ;
// *************
    $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());
    $newoffre =mysqli_query($conn,"SELECT * , `NomProduit`,`Prix`,`PrixFin`,`Categore`,`Image` FROM `offre` AS O INNER JOIN `products` AS P ON O.ID_Produit=P.ID_Produit LIMIT 8");
    $offre=mysqli_query($conn,"SELECT * , `NomProduit`,`Prix`,`PrixFin`,`Categore`,`Image` FROM `offre` AS O INNER JOIN `products` AS P ON O.ID_Produit=P.ID_Produit");

    // search

    // $find="";
    // if(isset($_POST['btnsearch'])){
    //     if(isset($_POST['txtSearch']) && !empty($_POST['txtSearch'])){
    //     $textfind=$_POST['txtSearch'];
    //     $find =mysqli_query($conn,"SELECT * , `NomProduit`,`Prix`,`PrixFin`,`Categore`,`Image` FROM `offre` AS O INNER JOIN `products` AS P ON O.ID_Produit=P.ID_Produit WHERE P.NomProduit like '$textfind' or P.Categore like '$textfind'");
    //     if($find){
    //       find($find);
    //     }else{
    //       echo "<h3 id='border'>Find Products</h3>";
    //     }
    //   }
    // }
  ?>
</head>
<body>
  <nav id="nav">
    <center><div class="topnav">
    <div class="logo">
      <a href="index.php"> <i class="fas fa-cart-arrow-down"></i> E-commerce.shop</a>
    </div>
      <a class="active" href="#home">Home</a>
      <a href="#Products">Products</a>
      <a href="#contact">Contact</a>
      <a href="#info">About</a>
      <a href="login.php" class="btnlogin">Log In</a>
    </div></center>
    <!-- The App Section -->
    <div class="container">
      <div class="row">
        <div class="column-66">
        <div class="title">
      <h1 class="text-primary">Welcome to E-commerce.shop</h1>
      <p class="lead">We Ship Millions of Products from the US Around the World.</p>
      <p><span style="font-size:36px">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="social">
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
        </div>
        <div class="column-33" id='imgnone'>
            <img src="images/bg.jpg" width="350" height="450">
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="fas fa-angle-double-up"></i></button>

  </nav>
  <section>
    <div>
      <div class="container" id="Products">
        <div class="row">
          <div class="column-33">
            <img src="images/cd.jpg" alt="App" width="335" height="171">
          </div>
          <div class="column-66">
            <div class="find">
              <p>Find Great Deals Now. Great Selection, Great Prices. Shop Your Favorite Brands Now.</p>
              <form class="d-flex" action="index.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Products Search" aria-label="Search" name="txtSearch">
                <button class="btn btn-outline-primary" type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
          $find="";
          if(isset($_POST['btnsearch'])){
              if(isset($_POST['txtSearch']) && !empty($_POST['txtSearch'])){
              $textfind=$_POST['txtSearch'];
              $find =mysqli_query($conn,"SELECT * , `NomProduit`,`Prix`,`PrixFin`,`Categore`,`Image` FROM `offre` AS O INNER JOIN `products` AS P ON O.ID_Produit=P.ID_Produit WHERE P.NomProduit like '$textfind' or P.Categore like '$textfind'");
              if(mysqli_num_rows($find) > 0){
                find($find);
              }else{
                echo "<h3 id='border'>can't Find Products</h3>";
              }
            }
          }
        function find($R){
          echo "<h3 id='border'>Find Products</h3>
          <div class='rows'>";
          while($row=mysqli_fetch_array($R)){
            echo "<div class='column'>
              <div class='card'>
                <img src='images/".$row['Image']."' alt='img'>
                <center><h3>".$row['NomProduit']."</h3></center>
                <p>".$row['Categore']."</p>
                <p>".$row['Discription']."</p>
                <p>".$row['DateOffre']."</p>
                <p>".$row['Prix']."DH</p>
                <del class='Roge' for=''>".$row['PrixFin']."DH</del>
              </div>
            </div>";
            echo "<script>
                document.getElementById('nav').style.display ='none';
            </script>";
          }
          echo "</div>";
        }
      ?>
      <h3 id="border">Buy Products Now</h3>
      <div class="rows">
        <?php
        $i=1;
          while($row=mysqli_fetch_array($newoffre)){?>
            <div class="column">
              <div class="card">
              <div id="new">New</div>
              <img src="<?php echo('images/'.$row['Image']); ?>" alt="img">
              <center><h3><?php echo($row['NomProduit']); ?></h3></center>
              <p><?php  echo($row['Categore']); ?></p>
              <p><?php echo($row['Discription']); ?></p>
              <p><?php echo($row['DateOffre']);?></p>
              <p><?php  echo($row['Prix']." DH"); ?></p>
              <del class="Roge" for=""><?php echo($row['PrixFin']." DH"); ?></del><br>
            </div>
          </div>
         <?php 
         $i++; }
        ?>
      </div>
      <!--  Our Brand -->
      <h3 id="border">Our Brand</h3>
      <div class="BrandR">
        <div class="column">
          <div class="brand">S O N Y</div>
        </div>
        <div class="column">
          <div class="brand">NIKE</div>
        </div>
        <div class="column">
          <div class="brand">Apple</div>
        </div>
        <div class="column">
          <div class="brand">Samsung</div>
        </div>
      </div>
      <!-- more product -->
      <h3 id="border">For You Product</h3>
      <div class="rows">
        <?php
          while($row=mysqli_fetch_array($offre)){?>
            <div class="column">
              <div class="card">
                <img src="<?php echo('images/'.$row['Image']); ?>" alt="img">
                <h3><?php echo($row['NomProduit']); ?></h3>
                <p><?php  echo($row['Categore']."<br> Date : ".$row['DateOffre']."<br>Time : ".$row['TimeOffre']); ?></p>
                <p><?php  echo($row['Prix']."DH"); ?></p>
                <del class="Roge" for=""><?php echo($row['PrixFin']."DH"); ?></del>
              </div>
            </div>
          <?php 
         }
        ?>
      </div>
    </div>
  </section>
  <article>
  <h3 id="border">Contact Us</h3>
  <div class="container" id="contact" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-33">
        <img src="images/44png.png" alt="App" width="335" height="471">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Welcome to E-commerce.shop</b></h1>
        <form action="index.php" method="post">
        <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="text">Your message</label><br>
              <textarea id="subject" name="msg" placeholder="Write something.." style="height:170px; width:100%;"></textarea><br>
            </div>
            <button type="submit" name="sent" class="btn btn-primary" style="float:right;width:150px;">Sent</button>
        </form>
      </div>
    </div>
    <?php
      if(isset($_POST['sent'])){
        if(isset($_POST['email']) && isset($_POST['msg'])){
          $myEmail ="elmehdimoubachir@gmail.com";
          $email =$_POST['email'];
          $Msg =$_POST['msg'];
          $suj="Mesage from Site web";
          $headers = "From: ".$email. "\r\n" .
          "CC: elmehdimoubachir@gmail.com";
          mail($myEmail,$suj,$Msg,$headers);
          echo('<script>alert("Message Sent !")</script>');
          header("location:index.php"); 
        }else{
          echo('<script>alert("!!!!");</script>');
        }
      }
    ?>
  </div>
  </article>
  <footer>
    <div class="info" id="info">
      <div>
        <h3> <i class="fas fa-cart-arrow-down"></i> E-commerce.shop</h3>
        <p>New Platform</p>
        <p>We Ship Millions of Products from the US Around the World.</p>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
      </div>
      <div>
        <h3>More info</h3>
        <p>Adresse : --------- <br> 
        E-commarce@gmail.com <br> 0528666666
        </p>
      </div>
      <div>
        <h3>Information Developer</h3>
        <p>EL MEHDI MOUBACHIR</p>
        <p>Full-Stack Developer Web<br>elmehdimoubachir@gmail.com <br>+212648847314</p>
      </div>  
      <div>
        <h3>City Delivery</h3>
        <p>
          Agadir <br>
          Fes <br>
          Rabat <br>
          Tanger 
        </p>
      </div>
    </div>
    <div class="text-center text-dark p-3">
    © <?php echo date('Y'); ?> Copyright:
    <a class="text-dark" href="http://elmehdiemm.eb2a.com" target="_blank">By elmehdimoubachir.EMM</a>
  </div>
  </footer>

  <script>
  var mybutton = document.getElementById("myBtn");
  window.onscroll = function() {scrollFunction()};
    
  function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
</body>
</html>