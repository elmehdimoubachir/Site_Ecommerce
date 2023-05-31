<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <?php if($_SESSION['idclient']==""){header("location:login.php"); }?>

    <style>
        section{
            margin:40px;
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
            /* bottom:10px; */
            text-align:center;
        }
        .CR a{
            color:dodgerblue;
            text-decoration: none;
        }
    </style>
    <?php
    $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());
        $sql="SELECT *,products.NomProduit FROM `order` INNER JOIN offre ON `order`.offre_id = offre.ID_Offre INNER JOIN products ON products.ID_Produit=offre.ID_Produit WHERE order.client_id=".$_SESSION['idclient'];
        $orders = mysqli_query($conn,$sql);

    ?>
</head>
<body class="bg-light">
    <?php include 'Navbar.php'?> 

    <section>
        <center><h1>Your Orders</h1></center>
        <table>
            <thead>
                <th>N°order</th>
                <th>Name Product</th>
                <th>Quantite</th>
                <th>Price</th>
                <th>Total</th>
                <th>Date Order</th>
                <th>Statut</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($orders)){?>
                <tr>
                  <td><?php echo "N° ".date('y').date('m').$row["id"]."00"; ?></td>
                  <td><?php echo $row["NomProduit"]; ?></td>
                  <td><?php echo $row["QuantiteCmd"]; ?></td>
                  <td><?php echo $row["Prix"].' DH'; ?></td>
                  <td><?php echo $row["Prix"]*$row["QuantiteCmd"].' DH'; ?></td>
                  <td><?php echo $row["DateCmd"]; ?></td>
                  <td><?php echo "statut"; ?></td>
                  <td><button type="submit" style="background-color:red;color:#fff;border:none;">X</button></td>
                </tr>
            <?php } ?>
                
            </tbody>
        </table>

    </section>
    <footer>
      <div class="CR">
        © <?php echo date('Y'); ?> Copyright:
        <a class="text-dark" href="http://elmehdiemm.eb2a.com" target="_blank">By elmehdimoubachir.EMM</a>
      </div>
    </footer>
</body>
</html>