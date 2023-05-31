<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Create Offres</title>

    <style>
        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
      section{
        padding:65px;
      }
      .CreateO{
        position:relative;
        margin:50px auto;
        background-color:#fff;
        box-shadow: 1px 4px 8px 2px rgba(0, 0, 0, 0.2);
        padding:16px;

      }
        .Pro{
          float: left;
          width: 50%;
          padding: 0px;
        }
        .Pro table tr td{
          padding:10px;
        }
        .Offre:after {
        content: "";
        display: table;
        clear: both;
      }
      .Pro input{
        width:250px;
        padding:5px;
      }
      .btnpost{
        position:absolute;
        right:20px;
        bottom:20px;
        width:120px;
        padding:10px;
        border:none;
        border-radius:10px;
        background-color:#2196F3;
        color:white;
      }
      
    </style>

    <?php
        $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());

        // insert Product and offre
      $msg="";
      if($_SERVER['REQUEST_METHOD'] == 'POST' &&isset($_POST['post'])){
       if(!empty($_POST['categore'])&&!empty($_POST['NomProduct'])&&!empty($_POST['QuntiteS'])&&!empty($_POST['prix'])&&!empty($_POST['prixF'])){
         $target="images/".basename($_FILES['image']['name']);
         $nomprodcut=$_POST['NomProduct'];
         $categore=$_POST['categore'];
         $quantiteS=$_POST['QuntiteS'];
         $Prix=$_POST['prix'];
         $prixfin=$_POST['prixF'];
         $photo= $_FILES['image']['name'];
         $sqlInsert="INSERT INTO `products`(`NomProduit`,`QuantiteStock`,`Prix`,`PrixFin`,`Image`,`Categore`) VALUES('$nomprodcut','$quantiteS','$Prix','$prixfin','$photo','$categore')";
         $query = mysqli_query($conn,$sqlInsert);
         if($query){

         }else{

         }
         if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
           $msg="img valide";
         }else{
           $msg="img no valide";
         }
         $sqlse="SELECT * FROM `products` where `NomProduit` = '".$nomprodcut."' and `Prix` ='".$Prix."' and `QuantiteStock`='".$quantiteS."'";
         $querypp = mysqli_query($conn,$sqlse);
         $row=mysqli_fetch_array($querypp);
         $idproduit=$row['ID_Produit'];
         // insert Offre
         $date=$_POST['dateoffre'];
         $disc=$_POST['Discription'];
         $idAdmin= $_SESSION['idAdmin'];
         $time=date("H:i:sa");
         $sqlO="INSERT INTO `Offre` (`DateOffre`,`TimeOffre`,`Discription`,`ID_Produit`,`IDAdmin`) VALUES('$date','$time','$disc','$idproduit','$idAdmin')";
         $query = mysqli_query($conn,$sqlO);
         if($query){
             echo "<script>alert('Offre Valider !');
             document.location.replace('EspaceAdmin.php');</script>";
         }else{
           echo "<script>alert('Offre No Valider !!!!!');</script>";
         }
       }
     }
    
    ?>
</head>
<body onload="<?php if($_SESSION['idAdmin']==null){header("location:login.php"); }?>"  class="bg-light">
    <header>
      <?php include 'navbarAdmin.php'?> 
    </header>

    <section>
        <div class="CreateO"> 
          <h3 id="border">Create Offre</h3>
          <form action="createOffre.php" method="POST" enctype="multipart/form-data">
            <div class="Offre">
              <div class="Pro">
                <center><h4>Produit</h4></center>
                <table>
                  <tr>
                    <td><h5>Categore</h5></td>
                    <td><input type="text" class="form-control" name="categore"></td>
                  </tr>
                  <tr>
                    <td><h5>Nom Product</h5></td>
                    <td><input type="text" class="form-control" name="NomProduct" id=""></td>
                  </tr>
                  <tr>
                    <td><h5>Quantité Stock</h5></td>
                    <td><input type="number" class="form-control" name="QuntiteS" id=""></td>
                  </tr>
                  <tr>
                    <td><h5>Prix</h5></td>
                    <td><h5><input type="number" class="form-control" name="prix" id=""></h5></td>
                  </tr>
                  <tr>
                  <td><h5>Prix Fin</h5></td>
                    <td><h5><input type="number" class="form-control" name="prixF" id=""></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Image</h5></td>
                    <td><input type="file" capture="user" accept="imge/*" name="image" id=""></td>
                  </tr>
                </table>
              </div>
              <div class="Pro">
                <center><h4>Detail Offre</h4></center>
                <table>
                  <tr>
                    <td><h5>Date Offre</h5></td>
                    <td><input type="date" name="dateoffre" id=""></td>
                  </tr>
                  <tr>
                    <td><h5>Description</h5></td>
                    <td><textarea name="Discription" id="" cols="30" rows="4" style="height:170px; width:100%;"></textarea></td>
                  </tr>
                </table>
              </div>
            </div>
            <button type="submit" class="btnpost" name="post">Post</button>
          </form>
        </div>
    </section>
</body>
</html>