<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .header {
          /* overflow: hidden; */
          height:60px;
          box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
          padding: 10px 10px;
          background-color: #2196F3;
          
        }

        .header a {
          float: left;
          color:#fff;
          text-align: center;
          padding: 8px;
          text-decoration: none;
          font-size: 18px; 
          line-height: 20px;
        }

        .header a.logo {
          font-size: 25px;
          font-weight: bold;
        }
        #LL:hover{
          color:red;
          border-bottom-color:red;
        }

        .header a:hover {
          color: #eee;
          border-bottom:2px solid dodgerblue;
        }

        .header a.active {
          border-bottom:2px solid dodgerblue;
        }
        .topnav-centered {
          float: none;
          position: absolute;
          top: 30px;
          left: 50%;
          transform: translate(-50%, -50%);
        }

        .header-right {
          float: right;
        }
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 60px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
          margin:34px 5px 0 0;
          right:0px;
        }
        .dropbtn img{
          position: absolute;
          top:8px;
          right:8px;
          width:35px;
          height:35px;
          border-radius: 50%;
          vertical-align: middle;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
          color:#000;
          border-bottom:none !important;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }

        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }

          .header-right {
            float: none;
          }
        }
        .logout{
          display: none;
          position: fixed;
          z-index: 99; 
          padding-top: 100px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0,0,0); 
          background-color: rgba(0,0,0,0.8);
        }
        .logout form{
    position:relative;
    width:300px;
    height:150px;
    padding:20px;
    background-color:#fefefe;
    margin:200px auto;
    border-radius:20px;
  }
  #btnoui{
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
  #btnoui:hover{
    border:none;
    background:red;
    color:white;
  }
  #btnnon{
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
  #btnnon:hover{
    border:none;
    background:#2196F3;
    color:white;
  }
    </style>
</head>
<body>
<nav>
      <div class="header">
          <a href="index.php" class="logo"><i class="fas fa-cart-arrow-down"></i> E-commerce.shop</a>
          <center><div class="topnav-centered">
          <a href="Client.php">Home</a>
          <a href="Client.php #offres">Offres</a>
          <a href="Client.php #allproduct">All Products</a>
          <a href="orders.php">Orders</a>
          </div></center>
          <div class="dropdown header-right">
            <a class="dropbtn"><img src="images/img_avatar1.png" alt="" srcset=""> 
              <!-- <i class="fa fa-caret-down"></i> -->
            </a>
            <div class="dropdown-content">
              <a href="Account.php">Acounte</a>
             <a href="javascript:void(0)" id="LL" onclick="logout();">Log out</a>
            </div>
          </div> 
      </div>
      <div class="logout" id="logout">
        <form action="Client.php" method="post">
            <p>Souaitez-vous vraiment vou déconnecter ?</p>
            <input type="submit" value="Oui" name="btnOui" id='btnoui'>
            <input type="submit" value="Non" onclick="logoutNon();" id='btnnon'>
        </form>
        <?php
        session_start();
          if(isset($_POST['btnOui'])){
              session_unset();
              echo "<script>document.location.replace('login.php');</script>";
          }
        ?>
      </div>
  </nav>

  <SCRipt>
            function logout(){
            document.getElementById("logout").style.display="block";
        }
        function logoutNon(){
            document.getElementById("logout").style.display="none";
        }
  </SCRipt>
</body>
</html>