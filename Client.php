<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <?php if($_SESSION['idclient']==""){header("location:login.php"); }?>
    <title>E-commerce  Client</title>

    <style>
              body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .CR{
            position:absolute;
            width:100%;
            /* bottom:10px; */
            text-align:center;
        }
        .CR a{
            color:dodgerblue;
            text-decoration: none;
        }
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

        @media screen and (max-width: 1000px) {
          .column-66,
          .column-33 {
            width: 100%;
            text-align: center;
          }
          img {
            margin: auto;
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
          border-radius:25px;
          color: white;
          padding: 14px 28px;
          font-size: 16px;
          cursor: pointer;
          background-color: dodgerblue;
          text-decoration: none;
        }
        .btnSHOW:hover{
          /* background-color: rgb(80, 80, 227);
          transition: 2s cubic-bezier(1, 0, 0, 1);
          transform: rotate(360deg); */
          color:#fff !important;
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

/* R    emove extra left and right margins, due to padding */
  .rows {margin: 5px 150px 5px 150px ;}

  /*     Clear floats after the columns */
  .rows:after {
        content: "";
        display: table;
        clear: both;
  }   

  /*     Responsive columns */
  @media screen and (max-width: 600px) {
        .column {
          width: 100%;
          display: block;
          margin-bottom: 20px;
        }
  }   

  /*     Style the counter cards */
  #new{
        width:50px;
        position:absolute;
        text-align:center;
        left:0;
        top:0;
        z-index: 1;
        background-color:red;
        color:#fff;
        font-size:20px;
        border-radius:0 0 15px 0;
  }   
  #btncmd{
        position:absolute;
        right:105px;
        bottom:15px;
        border-radius:20px;
        width:100px;
        border:1px solid #2196F3;
        background-color:#2196F3;
        color:white;
        font-size:20px;
  }   
  #btncmd:hover{
background-color:white;
color:#2196F3;
border:1px solid #2196F3;
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
  /*     Brand */
  .BrandR{margin: 5px 150px 5px 150px ;}
  .BrandR:after{
/* width:100%; */
content: "";
display: table;
clear: both;
  }   
  .BrandR .column{
float: left;
width: 25%;
padding: 10px;

  }   
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
  /*     information */
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
/* *    ***************CMD***************** */
        .showcmd{
          display: none;
          position: fixed;
          z-index: 2; 
          padding-top: 60px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0,0,0); 
          background-color: rgba(0,0,0,0.8);
        }
        .showcmd form{
          position:relative;
          width:650px;
          height:400px;
          padding :10px;
          padding-left:50px;
          background-color:#fefefe;
          margin:auto;
        }
        .showcmd form table tr td{
        padding:5px;
        }
        .showcmd form img{
          width:150px;
          height:150px;
        }
        .close {
          float:right;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
      
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        .btnorder{
          position:absolute;
          right:10px;
          bottom:15px;
          width:100px;
          padding:10px;
          color:white;
          background-color:#2196F3;
          border:none;
          border-radius:20px;
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
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnorder'])){
        if($_POST['quantite']!= null && $_POST['dateCmd']!=null){

          $quantite =$_POST['quantite'];
          $datecmd=$_POST['dateCmd'];
          $client_id = $_SESSION['idclient'];
          $offre_id= $_POST['idOffre'];

          $query = mysqli_query($conn,"INSERT INTO `order` (`DateCmd`, `QuantiteCmd`, `client_id`, `offre_id`) VALUES ('$datecmd', '$quantite',1,'$offre_id')");
          if($query){
              echo "<script>alert('Sent your order  !!!!');
              document.location.replace('Client.php');</script>";
          }else{
            echo "<script>alert('Try Agin !!!!!');</script>";

          }
          
        }else{
          echo "<script>alert('Enter quantite  !!!!');
          document.location.replace('Client.php');</script>";
        }
    }

  ?>
</head>
<body class="bg-light">
    <header>
      <?php include 'Navbar.php'?> 
      </header>
      
      <section>
        <div class="container" id="Products">
          <div class="row">
            <!-- <div class="column-33"> -->
              <!-- <img src="images/cd.jpg" alt="App" width="335" height="171"> -->
            <!-- </div> -->
            <div class="col-lg-4">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-center align-items-center bg-primary text-light" >
               <strong> Products Brands</strong>
                  
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Apple
                  <span class="badge badge-secondary badge-pill">13</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Samsung
                  <span class="badge badge-secondary badge-pill">22</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Huawei
                  <span class="badge badge-secondary badge-pill">11</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Xiaomi
                  <span class="badge badge-secondary badge-pill">21</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Realme
                  <span class="badge badge-secondary badge-pill">9</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Oraimo
                  <span class="badge badge-secondary badge-pill">43</span>
                </li>
              </ul>
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
      <div>
        <h3 id="border">Buy Products Now</h3>
        <div class="rows" id="offres">
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
                <button type="submit" name="btncmd" id="btncmd" onclick="document.getElementById('<?php echo 'cmd'.$i; ?>').style.display='block';"><i class="fas fa-cart-plus"></i></button>
              </div>
            </div>
            <!-- Cmd -->
            <div class="showcmd" id='<?php echo 'cmd'.$i; ?>'>
              <form action="Client.php" method="POST" oninput="x.value=parseInt(a.value)*parseInt(b.value)">
                <input type="hidden" name="idOffre" value="<?php echo $row['ID_Offre']; ?>">
                <span onclick="document.getElementById('<?php echo 'cmd'.$i; ?>').style.display='none';"  class='close' title='close'>&times;</span>
                <center><img src="<?php echo('images/'.$row['Image']); ?>" alt=""><br>
                <h3><?php echo($row['NomProduit']); ?></h3>
                <h4>Prix : <?php  echo($row['Prix']." DH"); ?></h4></center>
                <input type="hidden" name="" id="a" value="<?php  echo($row['Prix']); ?>">
                <table>
                  <tr>
                    <td>Date Order : </td>
                    <td><input type="date" value="<?php echo $today; ?>" id="" name="dateCmd"></td>
                  </tr>
                  <tr>
                    <td>Quantite Order :</td>
                    <td><input type="text" id="b" name="quantite" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Total </td>
                    <td>=  <output id="myOutput" name="x" for="a b">0</output> DH</td>
                  </tr>
                </table>
                <button type="submit" class="btnorder" name="btnorder">Save</button>
              </form>
            </div>
           <?php 
           $i++; }
          ?>
        </div>
        <!-- more product -->
        <h3 id="border">For You Product</h3>
        <div class="rows" id="allproduct">
          <?php
          $i=1;
            while($row=mysqli_fetch_array($offre)){?>
              <div class="column">
                <div class="card">
                  <img src="<?php echo('images/'.$row['Image']); ?>" alt="img">
                  <h3><?php echo($row['NomProduit']); ?></h3>
                  <p><?php  echo($row['Categore']."<br> Date : ".$row['DateOffre']."<br>Time : ".$row['TimeOffre']); ?></p>
                  <p><?php  echo($row['Prix']."DH"); ?></p>
                  <del class="Roge" for=""><?php echo($row['PrixFin']."DH"); ?></del>
                  <button type="submit" name="btncmd" id="btncmd" onclick="document.getElementById('<?php echo 'cmd'.$i; ?>').style.display='block';"><i class="fas fa-cart-plus"></i></button>
                </div>
              </div>
            <!-- Cmd -->
            <div class="showcmd" id='<?php echo 'cmd'.$i; ?>'>
              <form action="Client.php" method="POST" oninput="x.value=parseInt(a.value)*parseInt(b.value)">
                <input type="hidden" name="idOffre" value="<?php echo $row['ID_Offre']; ?>">
                <span onclick="document.getElementById('<?php echo 'cmd'.$i; ?>').style.display='none';"  class='close' title='close'>&times;</span>
                <center><img src="<?php echo('images/'.$row['Image']); ?>" alt=""><br>
                <h3><?php echo($row['NomProduit']); ?></h3>
                <h4>Prix : <?php  echo($row['Prix']." DH"); ?></h4></center>
                <input type="hidden" name="" id="a" value="<?php  echo($row['Prix']); ?>">
                <table>
                  <tr>
                    <td>Date Order : </td>
                    <td><input type="date" value="<?php echo $today; ?>" id="" name="dateCmd"></td>
                  </tr>
                  <tr>
                    <td>Quantite Order :</td>
                    <td><input type="text" id="b" name="quantite" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Total </td>
                    <td>=  <output id="myOutput" name="x" for="a b">0</output> DH</td>
                  </tr>
                </table>
                <button type="submit" class="btnorder" name="btnorder">Save</button>
              </form>
            </div>
            <?php 
           $i++;}
          ?>
        </div>
      </div>
    </section>
    <footer>
      <div class="CR">
        © <?php echo date('Y'); ?> Copyright:
        <a class="text-dark" href="http://elmehdiemm.eb2a.com" target="_blank">By elmehdimoubachir.EMM</a>
      </div>
    </footer>


    <!-- script JS -->
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