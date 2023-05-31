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
    <title>E-commerce</title>

    <style>
      body {margin:0;}

.topnav {
  margin-top:7px;
  overflow: hidden;
}

.topnav a {
  /* float: left; */
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
@media (max-width: 1000px){
  nav{
    padding: 0 10px 0 10px;
  }
}
@media (max-width: 920px) {
  .search{
    display:none;
  }
  .topnav a{
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }

  .logo p{
    position:absolute;
    left:0;
    top:5px;
  }
  .topnav{
    margin-top: 30px;
  }

}
.search {
  position:absolute;
  /* float: right; */
  top:8px;
  right:20px;
}

.search input[type=search] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search button {
  float: right;
  padding: 6px 10px;
  margin-top: 5px;
  margin-right: 16px;
  background-color: #2196F3;
  font-size: 20px;
  border: none;
  border-radius:10px;
  color:white;
  cursor: pointer;
}
.logo p{
    position: absolute;
    left: 10px;
    font-size:25px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color:#2196F3;
}
.logo i{
  margin:15px;
  color:#2196F3;
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
.column-66 p{
  line-height: 35px;
}

.column-33 {
    float: left;
    width: 33.33333%;
    padding: 20px;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center; 
  }
  .column-33 img {
    width:400px;
    height:150px;
    margin: auto;
  }
  #imgnone{
    display:none;
  }
  .container {
    padding: 7px;
  }


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
.btnSHOW{
margin:15px;
border: none;
background:none;
}
.btnSHOW a{
  margin:15px;
  border-radius:25px;
  text-decoration: none;
  color: white;
  font-size: 16px;
  padding: 14px 28px;
  cursor: pointer;
  background-color: #4741A6;
}
.btnSHOW a:hover{
background-color: rgb(80, 80, 227);

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

/* Responsive columns */
@media screen and (max-width: 600px) {
.column {
width: 100%;
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
.BrandR{margin: 5px 150px 5px 150px ;}
.BrandR:after{
content: "";
display: table;
clear: both;
}
.BrandR .columnR{
float: left;
width: 25%;
padding: 10px;

}
.brand{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 75px;
  width: 150px;
  background-color: #fff;
  text-align:center;
  color:#aaa;
  font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  padding:15px;
  font-size:30px;
  border-radius: 50%;
}
@media screen and (max-width: 600px) {
  .BrandR{margin: 5px ;}
  .BrandR .columnR{
    width: 50%;
    display: block;
    margin-bottom: 10px;
  }
}
/* information */
.info {
border-top:3px solid #2196F3;
border-radius: 30px 30px 0 0;
margin:50px 25px 0 25px;

}
.info .infoC{
  float: left;
  width: 25%;
padding:10px;
text-align:center;
line-height: 1.5;
}
.info .infoC i{
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
.CR2022{
float:left;
text-align: center;
  width:100%;
  margin-bottom: 5px;
}
@media screen and (max-width: 600px) {
  .info .infoC {
  width: 100%;
  display: block;
  margin-bottom: 15px;
  }
  .info {margin:15px 0 0 0;}
  }
/* button top page */
#myBtn {
  width:50px;
  display: none;
  position: fixed;
  bottom: 50px;
  right: 20px;
  z-index: 2;
  font-size: 35px;
  border: none;
  outline: none;
  background-color: #fff;
  cursor: pointer;
  padding: 10px;
  border-radius: 50%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
  color:blue;
}

@media screen and (max-width: 600px) {
  #contact img {
  width: 50%;
  height: 12rem;;
  }
}
    </style>
</head>
<body>
<?php //include 'SidebarHedear.php' ?>
  <nav id="nav">
    <center><div class="topnav">
    <div class="logo">
      <p> <i class="fas fa-cart-arrow-down"></i> E-commerce.shop</p>
    </div>
    
      <a class="active" href="#home">Home</a>
      <a href="#Products">Products</a>
      <a href="#contact">Contact</a>
      <a href="#info">About</a>
      <div class="search">
        <form action="index.php">
          <input type="search" placeholder="Products Search" name="txtSearch"/>
          <button type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div></center>
    <!-- The App Section -->
    <div class="container">
      <div class="row">
        <div class="column-66">
        <div class="title">
      <h1 class="text-primary">Welcome to E-commerce.shop</h1>
      <p class="lead">We Ship Millions of Products from the US Around the World.</p>
      <p><span style="font-size:36px;">Your Favorite Brands Here.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <button type="submit" class="btnSHOW"><a href="#Products">Show Products</a></button>
      <center><div class="social">
                  <a href=""><i class="fab fa-facebook-f"></i></a>
                  <a href=""><i class="fab fa-twitter"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
      </div></center>
    </div>
        </div>
        <div class="column-33" id="imgnone">
            <img src="images/bg.jpg" width="350" height="450">
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="fas fa-angle-double-up"></i></button>

  </nav>
  <section>
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
    
    
    <h3 id="border">Buy Products Now</h3>
    <div class="rows">
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/1.jpg" alt="img">
          <center><h3></h3></center>
          <p>Swatch</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>300 DH</p>
          <del class="Roge" for="">449 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/21.jpg" alt="img">
          <center><h3></h3></center>
          <p>Xiaomi Bluetooth Speaker</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>99 DH</p>
          <del class="Roge" for="">159 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/3.jpg" alt="img">
          <center><h3></h3></center>
          <p>Oraimo Fast USB Charger</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>129 DH</p>
          <del class="Roge" for="">150 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/10.webp" alt="img">
          <center><h3></h3></center>
          <p>W Headphones Oraimo</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>80 DH</p>
          <del class="Roge" for="">99 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/13.webp" alt="img">
          <center><h3></h3></center>
          <p>Galaxy a72 5G</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>1500 DH</p>
          <del class="Roge" for="">1999 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/23.jpg" alt="img">
          <center><h3></h3></center>
          <p>Hp Elitbook 840 i7th</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>4500 DH</p>
          <del class="Roge" for="">5200 DH</del>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div id="new">New</div>
          <img src="images/20.jpg" alt="img">
          <center><h3></h3></center>
          <p>Oraimo Fast USB Charger</p>
          <p>Good Product</p>
          <p>12/10/2022</p>
          <p>100 DH</p>
          <del class="Roge" for="">159 DH</del>
        </div>
      </div>
    </div>
    <!--  Our Brand -->
    <h3 id="border">Our Brand</h3>
    <div class="BrandR">
      <div class="columnR">
        <p class="brand">S O N Y</p>
      </div>
      <div class="columnR">
        <p class="brand">NIKE</p>
      </div>
      <div class="columnR">
        <p class="brand">Apple</p>
      </div>
      <div class="columnR">
        <p class="brand">Samsung</p>
      </div>
    </div>
    <!-- more product -->
    <h3 id="border">For You Product</h3>
    <div class="rows">
          <div class="column">
            <div class="card">
              <img src="images/15.webp" alt="img">
              <h3>Smart Watch Apple</h3>
              <p>info<br>22/10/2022<br>12:32</p>
              <p>450 DH</p>
              <del class="Roge" for="">500 DH</del>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="images/11.webp" alt="img">
              <h3>Realme Smart TV</h3>
              <p>info<br>22/10/2022<br>12:32</p>
              <p>3600 DH</p>
              <del class="Roge" for="">4000 DH</del>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="images/54.jpg" alt="img">
              <h3>PowerBank 1000 mAh</h3>
              <p>info<br>22/10/2022<br>12:32</p>
              <p>199 DH</p>
              <del class="Roge" for="">249 DH</del>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="images/i.webp" alt="img">
              <h3>Iphone 13 Pro Max</h3>
              <p>info<br>22/10/2022<br>12:32</p>
              <p>8000 DH</p>
              <del class="Roge" for="">8999 DH</del>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <img src="images/12.webp" alt="img">
              <h3>Macbook Pro i9 th</h3>
              <p>info<br>22/10/2022<br>12:32</p>
              <p>15999 DH</p>
              <del class="Roge" for="">17000 DH</del>
            </div>
          </div>
    </div>
  </section>
  <article>
    
    
  <h3 id="border">Contact Us</h3>
  <div id="contact" class="container" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-33">
        <img src="images/44png.png" alt="App" width="335" height="471">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Welcome to E-commerce.shop</b></h1>
        <form action="index.php">
        <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="text">Your message</label><br>
              <textarea id="subject" name="msg" placeholder="Write something.." style="height:170px; width:100%;"></textarea><br>
            </div>
            <button type="submit" class="btn btn-primary" name="sent" style="float:right;width:150px;">Sent</button>
        </form>
        <?php
          if(isset($_POST['sent'])){
              if(isset($_POST['email'])&&isset($_POST['msg'])&&!empty($_POST['email']) && !empty($_POST['msg'])){
                  $myEmail ="elmehdimoubachir@gmail.com";
                  $email =$_POST['email'];
                  $Msg =$_POST['msg'];
                  $suj="Mesage from Site web E-commercer";
                  $headers = "From: ".$email. "\r\n" .
                  "CC: elmehdimoubachir@gmail.com";
                  mail($myEmail,$suj,$Msg,$headers);
                  echo('<script>alert("Message Sent !");
                  document.location.replace("eCommercer.php");</script>');
              }
          }
        ?>
      </div>
    </div>
  </div>
  </article>
  <footer>
    <div class="info" id="info">
      <div class="infoC">
        <h3> <i class="fas fa-cart-arrow-down"></i> E-commerce.shop</h3>
        <p>New Platform</p>
        <p>We Ship Millions of Products from the US Around the World.</p>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
      </div>
      <div class="infoC">
        <h3>More info</h3>
        <p>Adresse : -------------- <br> 
        E-commarce@gmail.com <br> +212528-----6
        </p>
      </div>
      <div class="infoC">
        <h3>Information Developer</h3>
        <p>EL MEHDI MOUBACHIR</p>
        <p>Full-Stack Developer <br>elmehdimoubachir@gmail.com <br>+212648847314</p>
      </div>  
      <div class="infoC">
        <h3>City Delivery</h3>
        <p>
          Agadir <br>
          Ait Meloul <br>
          Fes <br>
          Laayoune <br>
          Rabat <br>
          Tanger 
        </p>
      </div>
    </div>
    <center><div class="CR2022">
    © 2022 Copyright:<a class="text-dark" href="#">E-commerce.Shop  by EL MEHDI MOUBACHIR</a>
    </div></center>
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