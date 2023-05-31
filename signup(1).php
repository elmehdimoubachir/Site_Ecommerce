<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <style>
      body{
        background-image: linear-gradient(to right, #2196F3 , #7cc1fa,#50b4f7);
      }
        *{margin:0;}
        .signup{
        position: relative;
          width: 60%;
          height: 60vh;
          margin:7% auto;
          padding:10px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          background-color:#fff;
        }
        input[type=text], input[type=password] {
          width: 97%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for all buttons */
        button {
          background-color: #2196F3;
          color: white;
          padding: 14px 20px;
          margin: 8px auto;
          border: none;
          cursor: pointer;
          opacity: 0.9;
          border-radius:10px;
        }

        button:hover {
          opacity:1;
        }

        .signupbtn {
          float: right;
          width: 30%;
        }
        .clearfix a{
            float:left;
            width:20%;
            padding: 14px 20px;
          margin: 8px auto;
        }

        /* Add padding to container elements */
        .container {
          padding: 16px;
        }
        .CR{
            position:absolute;
            bottom:10px;
            left:35%;
        }
        .CR a{
            text-align:center;
            color:#000;
            text-decoration: none;
            font-weight:Bold;
        }
        @media screen and (max-width: 1000px) {
          body{margin:0; background:none;}
          .signup{
            position: relative;
            width: 100%;
            height: 60vh;
            padding:10px;
            margin:50px 0;
          }
          .container {
          padding:0;
        }
        input[type=text], input[type=password] {
          width: 90%;
          padding: 15px;
          margin: 20px 0;

        }
        button {
          padding: 14px 20px;
          margin: 15px;
        }
        .CR{
            position:absolute;
            bottom:10px;
            width:100%;
            text-align:center;
            left:0;
        }
        .CR a{
            text-decoration: none;
            font-weight:Bold;
        }

         }

    </style>
</head>
<body>
    <div class="signup">
    <form class="modal-content" action="signup.php" method='post'>
      <div class="container">
        <center><h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p></center>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
          <a href="login.php" style="color:dodgerblue">Login</a>
          <button type="submit" name="btnInsert" class="signupbtn">Sign Up</button>
        </div>
      </div>
  </form>
  <?php
     session_start();
    $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnInsert'])){
        if(!empty($_POST['email'])&&$_POST['psw']==$_POST['psw-repeat']){
          $email=$_POST['email'];
          $pass=$_POST['psw'];
          $querytest=mysqli_query($conn,"SELECT * FROM `client` WHERE `Email` LIKE '$email'");
          if(mysqli_num_rows($querytest)==0){
            $sqlInsert="INSERT INTO `client`(`Email`,`password`) VALUES('$email','$pass')";
            $query = mysqli_query($conn,$sqlInsert);
            if($query){
              $_SESSION['idclient'] = $conn->insert_id;
              if($_SESSION['idclient']==null){
                header("location:login.php"); 
              }else{
                header("location:Client.php");
              } 
            }else{
              header("location:login.php");
            }
          }else{
            echo "<script>alert(' This email not corect!!!');
            document.location.replace('signup.php');</script>";
          }
        }else{
          echo "<script>alert(' Try Agine Password or email !!!');
          document.location.replace('signup.php');</script>";
        }
      }

  ?>
    <div class="CR">
        <a href="http://elmehdiemm.eb2a.com" target="_blank">Copyright © <?php echo date('Y'); ?> By elmehdimoubachir.EMM</a>
    </div>
    </div>
</body>
</html>