<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="styleAdmin.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>EspaceAdmin</title>
    <?php if($_SESSION['idAdmin']==null){header("location:login.php"); }?>
    <style>
                body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        /* ********** */
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
        /* ******************** */
        #border{
            text-align:center;;
            padding:20px 0;
        }
        /* Remove extra left and right margins, due to padding */
          .rows {margin: 5px 150px 5px 150px ;}
            
        /* Clear floats after the columns */
        .rows:after {
          content: "";
          display: table;
          clear: both;
        }
        .column {
            float: left;
            width: 25%;
            padding:  5px;
            margin-bottom:10px;
        }
        /* Responsive columns */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
          }
        }
        
        /* Style the counter cards */
        .card {
          position:relative;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          padding: 16px;
          text-align: left;
          font-size:17px;
          background-color: #fff;
          outline: .1rem solid #ccc;
          outline-offset: -0.8rem;
          height:450px;
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
            bottom:55px;
        }
        .update{
            position:absolute;
            left:14px;
            bottom:14px;
            width:120px;
            padding:10px;
            color:white;
            background-color:lime;
            border:none;
            border-radius:15px;
            
        }
        .delete{
            position:absolute;
            right:14px;
            bottom:14px;
            width:120px;
            padding:10px;
            color:white;
            background-color:red;
            border:none;
            border-radius:15px;
        }
        /* ************ */
        
      /* messages */
      .cont {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px 20px;
      margin: 10px 0;
    }
    .cont::after {
      content: "";
      clear: both;
      display: table;
    }
    .time-right {
      float: right;
      color: #aaa;
    }
    .msg{
      margin:5px 150px;
    }
    /* update modle */
    .showUpdate{
      display: none;
      position: fixed;
      z-index: 1; 
      padding-top: 60px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.8);
    }
    .showUpdate form{
      position:relative;
      width:700px;
      height:600px;
      padding :10px;
      padding-left:50px;
      background-color:#fefefe;
      margin:0 auto;
    }
    .showUpdate form table tr td{
    padding:5px;
    }
    .showUpdate form img{
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
.btnupdate{
  position:absolute;
  right:10px;
  bottom:15px;
  width:100px;
  padding:10px;
  color:white;
  background-color:lime;
  border:none;
  border-radius:20px;
}
  #formd{
    position:relative;
    width:300px;
    height:150px;
    padding:20px;
    background-color:#fefefe;
    margin:200px auto;
    border-radius:20px;
  }
  #formd #btnyes{
    width:70px;
    position:absolute;
    left:50px;
    bottom:15px;
    padding:5px;
    border:2px solid red;
    background:none;
    color:red;
    border-radius:10px;
  }
  #formd #btnyes:hover{
    border:none;
    background:red;
    color:white;
  }
  #formd #btnno{
    width:70px;
    position:absolute;
    right:50px;
    bottom:15px;
    padding:5px;
    border:2px solid #2196F3;
    background:none;
    color:#2196F3;
    border-radius:10px;
  }
  #formd #btnno:hover{
    border:none;
    background:#2196F3;
    color:white;
  }
  
    </style>
    <?php
        $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());

      $offres=mysqli_query($conn,"SELECT * , `NomProduit`,`Prix`,`PrixFin`,`Categore`,`Image` FROM `offre` AS O INNER JOIN `products` AS P ON O.ID_Produit=P.ID_Produit");
      $Product=mysqli_query($conn,"SELECT * FROM `products`");
      $messages=mysqli_query($conn,"SELECT * FROM `messages`");

       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // update offre
        if(isset($_POST['UpdateOffre'])){
          if($_POST[""]!=null && $_POST[""]!=null && $_POST[""]!=null){
            $idoffre=$_POST['idO'];
            $date=$_POST['dateoffre'];
            $disc=$_POST['Description'];

            $idproduct=$_POST['idP'];
            $nom_product = $_POST[""];
            $Quantite_Stock = $_POST[""];
            $Prix = $_POST[""];
            $PrixFin = $_POST[""];
            $Categore = $_POST[""];
            $image = $_POST[""];
            $sql ="UPDATE `offre` SET `DateOffre`=$date , `Discription`=$disc WHERE ID_Offre=$idoffre";
            mysqli_query($conn,$sql);
            // product edit
            $sql ="UPDATE `products` SET `NomProduit`=$nom_product , `QuantiteStock`=$Quantite_Stock , `Prix`=$Prix ,`PrixFin`=$PrixFin , `Categore`=$Categore , `Image`=$image WHERE `ID_Produit `=$idproduct";
            mysqli_query($conn,$sql);
          }
        }
        // delete offre
        if(isset($_POST['btnYes'])){
          $idoffre=$_POST['idO'];
          $delete=mysqli_query($conn,"DELETE FROM `offre` WHERE `ID_Offre`='$idoffre'");
          if($delete){
            echo "<script>document.location.replace('EspaceAdmin.php');</script>";
          }
          else{
            echo "<script>alert('Try Again !');</script>";
          }
        }
        if(isset($_POST['btnYesp'])){
          $idP=$_POST['idP'];
          $delete=mysqli_query($conn,"DELETE FROM `products` WHERE `ID_Produit`='$idP'");
          if($delete){
            echo "<script>document.location.replace('EspaceAdmin.php');</script>";
          }
          else{
            echo "<script>alert('Try Again !');</script>";
          }
        }
      }
      
      

    ?>
</head>
<body class="bg-light">
    <header>
    <?php include 'navbarAdmin.php'?> 
    </header>
    <section>

    <div class="container" id="Products">
      <div class="row">
        <div class="column-66">
        <div class="find">
            <p>Find Great Deals Now. Great Selection, Great Prices. Shop Your Favorite Brands Now.</p>
            <form class="d-flex" method="POST">
              <input class="form-control me-2" type="search" placeholder="Products Search" aria-label="Search" name="txtSearch">
              <button class="btn btn-outline-primary" type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <div class="column-33">
        <img src="images/cd.jpg" alt="App" width="335" height="171">
        </div>
      </div>
    </div>
        <h3 id="border">Offres</h3>
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
                document.getElementById('offre').style.display ='none';
            </script>";
          }
          echo "</div>";
        }
      ?>
        <div class="rows" id="offre">
          <?php
          $i=1;
            while($row=mysqli_fetch_array($offres)){?>
              <div class="column">
                <div class="card">
                  <img src="<?php echo('images/'.$row['Image']); ?>" alt="img">
                  <h3><?php echo($row['NomProduit']); ?></h3>
                  <p><?php  echo($row['Categore']); ?></p>
                  <p><?php echo($row['Discription']); ?></p>
                  <p><?php echo($row['DateOffre']);?></p>
                  <p><?php  echo($row['Prix']." DH"); ?></p>
                  <del class="Roge" for=""><?php echo($row['PrixFin']); ?></del>
                  <button type="submit" name="update" class="update" onclick="document.getElementById('<?php echo 'Upd'.$i; ?>').style.display='block';">Update</button>
                  <button type="submit" name="delete" class="delete" onclick="document.getElementById('<?php echo 'delete'.$i; ?>').style.display='block';">Delete</button>
                </div>
              </div>

              <!-- update -->
              <div class="showUpdate" id='<?php echo 'Upd'.$i; ?>'>
                <form action="EspaceAdmin.php" method="POST">
                  <input type="hidden" name="idP" value="<?php echo $row['ID_Produit']; ?>">
                  <input type="hidden" name="idO" value="<?php echo $row['ID_Offre']; ?>">
                  <span onclick="document.getElementById('<?php echo 'Upd'.$i; ?>').style.display='none';"  class='close' title='Ferme'>&times;</span>
                  <center><img src="<?php echo('images/'.$row['Image']); ?>" alt=""><br>
                  <input type="file" name="" id=""></center>
                  <table>
                    <tr>
                      <td><h4>Nom Product : </h4></td>
                      <td><input type="text" class="form-control" name="nomProduct" id="" value="<?php echo $row['NomProduit']; ?>"></td>
                    </tr>
                    <tr>
                      <td><h4>Categore : </h4></td>
                      <td><input type="text" class="form-control" name="categore" id="" value="<?php echo $row['Categore']; ?>"></td>
                    </tr>
                    <tr>
                      <td><h4>Description : </h4></td>
                      <td><textarea id="w3review" name="Description" rows="4" cols="50" style=" width: 100%;height: 70px;
                      padding: 8px 10px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;
                      background-color: #f8f8f8;font-size: 16px;resize: none;" ><?php echo $row['Discription']; ?></textarea></td>
                    </tr>
                    <tr>
                      <td><h4>Date Offre : </h4></td>
                      <td><input type="date" style="width:100%;text-align:center;" name="dateoffre" id="" value="<?php echo $row['DateOffre']; ?>"></td>
                    </tr>
                    <tr>
                      <td><h4>Prix : </h4></td>
                      <td><input type="text" class="form-control" name="prix" id=""></td>
                    </tr>
                    <tr>
                    <td><h4>Prix fin : </h4></td>
                    <td><input type="text" class="form-control" name="prixF" id=""></td>
                    </tr>
                  </table>
                  <button type="submit" class="btnupdate" name="UpdateOffre">Update</button>
                </form>
              </div>
              <!-- delete -->
              <div class="showUpdate" id='<?php echo 'delete'.$i; ?>'>
                <form id="formd" action="EspaceAdmin.php" method="post">
                    <input type="hidden" name="idO" value="<?php echo $row['ID_Offre']; ?>">
                    <p>Are you suryou for delete this offre ?</p>
                    <input type="submit" value="Yes" name="btnYes" id='btnyes'>
                    <input type="button" value="No" onclick="document.getElementById('<?php echo 'delete'.$i; ?>').style.display='none';" id='btnno'>
                </form>
              </div>
            <?php 
           $i++; }
          ?>
        </div>

      
        <h3 id="border">Products</h3>
        <div class="rows" id="offre">
          <?php
          $i=0;
            while($row=mysqli_fetch_array($Product)){?>
              <div class="column" id="Product">
                <div class="card">
                <span class='close' title='Remove delete' onclick="document.getElementById('<?php echo 'remove'.$i; ?>').style.display='block';">&times;</span>
                  <img src="<?php echo('images/'.$row['Image']); ?>" alt="img">
                  <center><h3><?php echo($row['NomProduit']); ?></h3></center>
                  <p><?php  echo('<b>Categore : </b>'.$row['Categore']); ?></p>
                  <p><?php  echo('<b>Quantite Stock : </b>'.$row['QuantiteStock'].' Pieces'); ?></p>
                  <p><?php  echo('<b>Prix : </b>'.$row['Prix']." DH"); ?></p>
                </div>
              </div>
                <!-- delete -->
                <div class="showUpdate" id='<?php echo 'remove'.$i; ?>'>
                <form id="formd" action="EspaceAdmin.php" method="post">
                    <input type="hidden" name="idP" value="<?php echo ($row['ID_Produit']); ?>">
                    <p>Are you suryou for delete this offre ?</p>
                    <input type="submit" value="Yes" name="btnYesp" id='btnyes'>
                    <input type="button" value="No" onclick="document.getElementById('<?php echo 'remove'.$i; ?>').style.display='none';" id='btnno'>
                </form>
              </div>
            <?php 
          $i++; }
          ?>
        </div>
        <h3 id="border">Messages</h3>
        <div class="msg">
          <?php
          while($row=mysqli_fetch_array($messages)){?>
            <div class="cont">
              <p><b><?php echo($row['Email'].' : '); ?></b><?php echo($row['Message']); ?></p>
              <span class="time-right"><?php echo($row['Time']); ?></span>
            </div>
            <?php
            }?>
        </div>
    </section>x²
    <footer>
    <div class="text-center text-dark p-3">
      © <?php echo date('Y'); ?> Copyright:
      <a class="text-dark" href="#">E-commerce.Shop  by EL MEHDI MOUBACHIR</a>
    </div>
    </footer>

    <script>
       function logout(){
            document.getElementById("logout").style.display="block";
        }
        function logoutNon(){
            document.getElementById("logout").style.display="none";
        }
    </script>
</body>
</html>