<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
    <style>
        /* Style tab links */
        *{color:#000;}
        .tablink {
          background:none;
          color: #2196F3;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          font-size: 17px;
          width: 25%;
        }

        .tablink:hover {
          background-color: dodgerblue;
          color:#fff; 
          
        }
        .action{
            background-color:#2196F3;
            color:#fff; 
        }

        /* Style the tab content (and add height:100% for full page content) */
        .tabcontent {
          color: white;
          display: none;
          padding: 100px 20px;
          height: 100%;
        }
        p{color:#000;}
        section{
            padding: 64px;
        }
        /* ************************************************************ */
        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }

        .col-25 {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;

        }

        .col-50 {
          -ms-flex: 50%; /* IE10 */
          flex: 50%;
        }

        .col-75 {
          -ms-flex: 75%; /* IE10 */
          flex: 75%;
        }

        label {
          padding: 14px;
          display: inline-block;
        }

        .container {
          border-radius: 5px;
          background-color: #fff;
          box-shadow: 2px 0 1px 4px rgba(0,0,0,0.2);
          padding: 20px;
          height:400px;
          position:relative;
        }
        input[type=text] {
          width: 80%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }
        .update{
            background-color:rgb(3, 211, 48);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            position:absolute;
            right:90px;
            bottom:40px;

        }
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
          .row {
            flex-direction: column-reverse;
          }
          .col-25 {
            margin-bottom: 20px;
            
          }
        }
    </style>
    <?php 
    session_start();
        $conn= mysqli_connect('sql201.eb2a.com','eb2a_33645591','EMM@9966@','eb2a_33645591_ecom') or die("Connection Failed:" .mysqli_connect_error());
     $profil="";
     if(@@$_SESSION['idclient']!=""){
        $profil =mysqli_query($conn,"SELECT *  FROM `client` WHERE `IDClient`= ".$_SESSION['idclient']." LIMIT 1");
     }elseif(@@$_SESSION['idAdmin']!=""){
        $profil =mysqli_query($conn,"SELECT *  FROM `admin` WHERE `id`= ".$_SESSION['idAdmin']." LIMIT 1");
     }else{
      header("location:login.php"); 
     }
    
    ?>
</head>
<body>
    <header>
        <?php
        if(@@$_SESSION['idAdmin']!=""){
          include 'navbarAdmin.php';
        }else{
          include 'Navbar.php' ;
        }
         ?> 
    </header>
    <section>
        <button class="tablink action" onclick="openPage('Home', this, 'red')" id="defaultOpen">Profil</button>
        <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Change Password</button>
        <?php while ($row=mysqli_fetch_array($profil)) { ?>
        <div id="Home" class="tabcontent">
          
            <div class="row">
                <div class="col-25">
                  <img src="images/img_avatar1.png" alt="" srcset="" style="width:300px;border-radius: 50%;">
                </div>
                <div class="col-75">
                    <div class="container">
                        <form action="Account.php" method='post'>
                        <div class="row">
                          <div class="col-25">
                            <label for="fname">First Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="fname" value="<?php echo $row["Nom"]; ?>" name="firstname" placeholder="Your name..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Last Name</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" value="<?php echo $row["Prenom"]; ?>" placeholder="Your last name..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Telephone</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                            <label for="lname">Email</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" value="<?php echo $row["Email"]; ?>" placeholder="Your last name..">
                          </div>
                        </div>
                        <div class="row">
                            <button type="submit" name="update" class="update">Update</button>
                        </div>  
                        </form>
              </div>
            </div>
    </div>
        </div>

        <div id="News" class="tabcontent">
        <div class="container">
                        <form action="Account.php" method='post'>
                        <div class="row" style="margin:20px">
                          <div class="col-25">
                            <label for="fname">Email</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                          </div>
                        </div>
                        <div class="row" style="margin:20px">
                          <div class="col-25">
                            <label for="lname">Passsword</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                          </div>
                        </div>
                        <div class="row" style="margin:20px">
                          <div class="col-25">
                            <label for="lname">Repeat Password</label>
                          </div>
                          <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                          </div>
                        </div>
                        </form>
                        <div class="row">
                            <button type="submit" name="changepassword" class="update">Update</button>
                        </div>  
              </div>
        </div>
<?php } ?>
    </section>

    <script>
        function openPage(pageName,elmnt) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>