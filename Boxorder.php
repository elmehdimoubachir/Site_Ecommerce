<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders</title>
    <?php if($_SESSION['idAdmin']==null){header("location:login.php"); }

        $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());
        $sql="SELECT *,products.NomProduit FROM `order` INNER JOIN offre ON `order`.offre_id = offre.ID_Offre INNER JOIN products ON products.ID_Produit=offre.ID_Produit";
        $orders = mysqli_query($conn,$sql);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $id=$_POST["id"];
            if(isset($_POST['btnyes'])){
                $sql="UPDATE `order` SET `Stutat` = 1 WHERE `order`.`id` =".$id;
                mysqli_query($conn,$sql);
            }elseif(isset($_POST['btnNo'])){
              $sql="UPDATE `order` SET `Stutat` = 0 WHERE `order`.`id` =".$id;
              mysqli_query($conn,$sql);
            }
        }
    ?>

    <style>
        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        /* ********** */
        .container {
            padding: 64px;
        }

        table {
          border-collapse: collapse;
          width: 100%;
          border: 1px solid #ddd;
          font-size: 18px;
        }

        table th, table td {
          text-align: left;
          padding: 12px;
          border: 1px solid #000;
          border-bottom: none !important;
        }

        table tr {
          border-bottom: 1px solid #ddd;
        }

        table th, table tr:hover {
          background-color: #f1f1f1;
        }
        .CR{
            position:absolute;
            width:100%;
            bottom:10px;
            text-align:center;
        }
        .CR a{
            color:dodgerblue;
            text-decoration: none;
        }
    </style>

</head>
<body class="bg-light">
    <header>
        <?php include 'navbarAdmin.php'?> 
    </header>

    <article>
        <div class="container">
            <center><h1>Orders</h1></center>
            <table>
                <thead>
                    <th>N°order</th>
                    <th>Name Product</th>
                    <th>Quantite</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Date Order</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_array($orders)){?>
                  <form action="Boxorder.php" method="post">
                    <tr>
                      <td><?php echo "N° ".date('y').date('m').$row["id"]."00"; ?></td>
                      <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                      <td><?php echo $row["NomProduit"]; ?></td>
                      <td><?php echo $row["QuantiteCmd"]; ?></td>
                      <td><?php echo $row["Prix"].' DH'; ?></td>
                      <td><?php echo $row["Prix"]*$row["QuantiteCmd"].' DH'; ?></td>
                      <td><?php echo $row["DateCmd"]; ?></td>
                      <td>
                        <?php if($row["Stutat"]==0){ ?>
                        <button type='submit' class='btn btn-primary' name='btnyes'>Accepter</button>
                        <?php }else{ ?>
                        <button type='submit' name='btnNo' class='btn btn-danger'>Refuser</button>
                        <?php } ?>
                      </td>
                    </tr>
                  </form>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </article>
    <footer>
      <div class="CR">
        © <?php echo date('Y'); ?> Copyright:
        <a class="text-dark" href="http://elmehdiemm.eb2a.com" target="_blank">By elmehdimoubachir.EMM</a>
      </div>
    </footer>
</body>
</html>