<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laoshe Tea House</title>
    <link rel="stylesheet" type="text/css" href="exercise6.css"/>
    <link rel="stylesheet" type="text/css" href="register.css"/>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style type="text/css">
        fieldset{width:520px; margin: 0 auto;}
        legend{font-weight:bold; font-size:14px;}
        label{float:left;
            width:70px;
            margin-left:10px;}
        .left{margin-left:80px;}
        .input{width:150px;}
        span{color: #666666;}
    </style>

</head>
<body>
<?php
?>
<div id="box">
    <div id="side">
        <ul>
            <li><a href="exercise6.html"><img src="12.png" alt="Home Page"></a></li>
            <li><a href="exercise6.html"><p>Products & &nbsp;&nbsp;Services</p></a></li>
            <li><a href="exercise6.html"><p>Register</p></a></li>
            <li><a href="exercise6.html"><p>Login</p></a></li>
            <li><a href="exercise6.html"><p>My Cart</p></a></li>
            <li><a href="exercise6.html"><p>Check Out</p></a></li>
        </ul>
    </div>
    <div id="header">
        <span id="sp_time" style="position: absolute;z-index: 2;margin-left: 650px"></span>
        <a href="#"><img src="titleimg.png" alt=""></a>
        <p>Making your life more healthy, and enjoying it......</p>

    </div>

    <div id="content">
        <p>
            <img src="dctp.png" alt="tea">
        </p>
        <div id="side">
            <ul>
                <li class="sel"><a href="E-STORE.php">Home</a></li>
                <li><a href="register.php">Register</a></li>

                <?php if(!isset($_SESSION["loggedin"])) {?>
                    <li><a href="login.php">Login</a></li>
                <?php }else{?>
                    <li><a href="logout.php">Logout</a></li>
                <?php }?>

                <li><a href="cart.php">My Cart</a></li>

                <?php if(isset($_SESSION["loggedin"])) {?>

                    <li><a href="">Checkout</a></li>
                <?php }?>

            </ul>
        </div>
    </div>

    <div id="inside">
        <h2>Login</h2>
        <form method="post" action="login.php" id = "fields" >
            Email address:<br />
            <input type="text" name = 'email' placeholder="Eg：abc@gmail.com" onkeypress="myClear3()"/>
            <span id ="t3" class="usersInfo"></span><br />

            Password:<br />
            <input type="password" name="pass1" placeholder="At least 8 characters" onkeypress="myClear5()"/>
            <span id ="t5" class="usersInfo"></span><br />
            <br />
            <input type="reset" value="Reset" onclick ="resetForm()">
            <input type="submit" value="Submit" onclick ="validate()">
        </form>
    </div>

    
    <footer>
        <div class="dibulogo flo">
            <img src="footerimg.png" height="35" alt="Laoshe Teahouse">
        </div>
        <div class="tel flo">
            <p>514 888-6666</p>
            <p>ludovic02@gmail.com</p>
        </div>
        <div class="copy flo">
            <p>Copyright&copy;2017 Laoshe Teahouse Ltd. Montreal</p>
            <p>Xin Sun_40038821_SOEN 287 </p>
        </div>
    </footer>

</div>
<script type="text/javascript" src="register.js"></script>
</body>
</html>

