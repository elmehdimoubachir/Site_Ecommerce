<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>

    <style>
                *{margin:0;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
        .rows:after {
            content: "";
            display: table;
            clear: both
        }
        .rows{margin:0;}
        .column1{
            float:right;
            width: 60%;
            height: 100vh;
            /* background-image: url("images/eco.jpg"); */
            background-image: linear-gradient(to bottom, #2196F3 ,#50b4f7,dodgerblue);
            background-size: cover;
            background-repeat: no-repeat;
            color:#fff;
            text-align:center;
        }
        .column2{
            float: left;
            width: 40%;
            height: 100vh !important;
            text-align: left;
            background-color: #fff;

        }
        .CR{
            position:absolute;
            bottom:10px;
            left:10%;
        }
        .CR a{
            color:dodgerblue;
            text-decoration: none;
            font-weight:Bold;
        }
        
        input{
            width:90%;
            padding:15px;
            border:none;
            border-bottom:2px solid #00f;
            margin:10px 0;
            background:none;
            outline: none !important;

        }
        input :focus{
            border-bottom:2px solid #bbb;
        }
        .btnlogin{
            border:none;
            width:130px;
            padding:10px;
            background-color: #2196F3;
            border-radius:10px;
            margin:15px;
            float:right;
            color:#fff;
            font-size:20px;

        }
        .btnlogin:hover{
            box-shadow: 0 0 1px 2px #6fb9f5;

        }
        .groupinput{
                padding-left:20px;
        }
        #title{
            padding:100px 0 20px 0;
            text-align:center;
        }
        .cont{
            width:auto;
            height:70vh;
            position: relative;
            padding:20px;
        }
        .linkcode{
            margin:30px;
        }
        .text-primary{
            padding-top:30%;
            font-size:60px;
            font-weight: bold;
        }
        .lead{
            font-size:25px;
            font-weight:lighter;
        }
        label{font-weight: bold;margin-top:10px;}
        .logo{
            width:270px;
            padding:5px;
            background-color:#2196F3;
            box-shadow: 0 4px 8px 2px rgba(0, 0, 220, 0.5);
            border-radius:10px 3px 10px 3px;
        }
        .logo a{
            font-size:30px;
            font-weight:Bold;
            text-decoration: none;
            color:#fff;
        }
        @media screen and (max-width: 1000px) {
            .column2{
                width: 100%;
                float:none;
            }
            .column1{
                display:none;
            }
            .btnlogin{
                border:none;
                width:90%;
                padding:10px;
                margin:20px;
                float:none;
                font-size:20px;

            }
            .linkcode{
                width:90%;
                position: absolute;
                bottom:10%;
                padding-left:10px;
            }
            .linkcode .forgotP{
                float:right;
            }
         }
    </style>
</head>
<body>
<div class="rows">
        <div class="column1">
        <h1 class="text-primary">Welcome to E-commerce.shop</h1>
        <p class="lead">We Ship Millions of Products from the US Around the World.</p>
        </div>
        <div class="column2">
            <div class="cont">
            <center>
                <div class="logo">
                  <a href="index.php"> <i class="fas fa-cart-arrow-down"></i> E-commerce.shop</a>
                </div>
                </center>
                <h1 id="title">Forgot Password</h1>
                <form action="login.php" method="POST">
                    <div class="groupinput">
                        <label for="">UserName</label>
                        <input type="text" name="username" class="">
                        <span class="msgErroru"></span>
                    </div>
                    <button type="submit" class="btnlogin" name="btnLogin">send</button>
                </form>
                <div class="linkcode">
                    <a href="login.php" class="login">Login</a>
                </div>
            </div>
            <center><div class="CR">
                    <a href="http://elmehdiemm.eb2a.com" target="_blank">Copyright © <?php echo date('Y'); ?> By elmehdimoubachir.EMM</a>
            </div></center>
        </div>
    </div>
</body>
</html>