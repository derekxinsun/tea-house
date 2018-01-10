<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A2 Exercise6_register_40038821</title>
    <link rel="stylesheet" type="text/css" href="exercise6.css"/>
    <link rel="stylesheet" type="text/css" href="register.css"/>

</head>
<body>
<div id="box">
    <div id="side">
        <ul>
            <li><a href="exercise6.html"><img src="image/12.png" alt="Home Page"></a></li>
            <li><a href="exercise6.html"><p>Products &&nbsp; &nbsp; Services</p></a></li>
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
            <img src="image/dctp.png" alt="tea">
        </p>
        <div class="context">
            <p style="text-align: center;">Discover our latest news: from exciting new product launches
                and limited edition collections, to inspired gift ideas.
            </p>
        </div>
        <div class="signup" id="signupForm">
            <form name="my_form" method="post" action="savingmembers.php" onsubmit="return checkPsw()">
                <div class="container">
                    <div class="reg">
                        <div class="colleft">
                            <label><b>First Name</b><span style="color:red;">*</span></label>
                            <input type="text" placeholder="First Name" name="firstname"/>
                        </div>
                        <div class="colright">
                            <label><b>Last Name</b><span style="color:red;">*</span></label>
                            <input type="text" placeholder="Last Name" name="lastname"/>
                        </div>
                    </div>
                    <div class="reg">
                        <div class="colleft">
                            <label><b>Email Address</b><span style="color:red;">*</span></label>
                            <input type="text" placeholder="eg: abc@gmail.com" name="username"/>
                        </div>
                        <div class="colright">
                            <label><b>Phone Number</b><span style="color:red;">*</span></label>
                            <input type="text" placeholder="eg: 514-000-000" name="phone"/>
                        </div>
                    </div>
                    <div class="reg">
                        <div class="colleft" id="psd1">
                            <label><b>Password</b><span style="color:red;">*</span></label>
                            <p><input type="password" placeholder="Enter Password" id="psw1"/></p>
                        </div>
                        <div class="colright" id="psd2">
                            <label><b>Confirm Password</b><span style="color:red;">*</span></label>
                            <p><input type="password" placeholder="Confirm Password" id="psw2"/>
                                <span id="tishi"></span></p>
                        </div>
                    </div>
                    <div class="reg">
                        <input type="checkbox" checked="checked"> Remember me
                        <div class="clearfix">
                            <input type="button" value="Cancel">
                            <input type="submit" value="SignUp">
                        </div>
                    </div>
                </div>
            </form>
        </div>
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
<script type="text/javascript" src="exercise6_register.js"></script>
</body>
</html>
