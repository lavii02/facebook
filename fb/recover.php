<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apna facebook</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>

<body>

<div id="top">
	<div id="topc">
		<div id="topl"><h1>Facebook</h1></div>
        <div id="clr"></div>
            <div id="topr">
                <div id="toptl">Email or Phone No</div>
                <div id="toptc">Password</div>
                <div id="toptr"></div>
            </div>
            <div id="topr">
            <form method="post">
                <div id="toptl"><input type="text" name="em"></div>
                <div id="toptc"><input type="password" name="pass"></div>
                <div id="toptr"><input type="submit" value="Log In"></div>
                </form>
            </div>
            <div id="topr">
                <div id="toptl"></div>
                <div id="toptc"><a href="forgetpass.php">Forgotten account?</a></div>
                <div id="toptr"></div>
            </div>
    </div>
</div>
<?php
require("connect.php");
$femail=$_REQUEST['femail'];
$ss=mysql_query("select * from registration where uname='$femail' ||  email='$femail' || cno='$femail'");
$aa=mysql_fetch_array($ss);
?>

<form method="post" action="mail.php">
<div id="mids">
	<div id="midd">
    	<div id="middtt">
            <div id="clr"></div>
            Reset Your Password
            <hr>
                <div id="middt2">
                    <p style="line-height:30px;"><b>How would you like to reset your password?</b></p>
                    
            		<div id="middt2l">
                    <input type="radio" name="pp" value="<?php echo $aa[3]; ?>" checked> Email me a link to reset password<br>******@*******
                    </div>
                    <div id="middt2r">
                    <input type="radio" name="pp" value="<?php echo $aa[4]; ?>"> Text me a code to reset my password <br> +**********77
                    </div>
              
                </div>
        
        </div>
        <div id="middb">
        	<div id="middbl" style="line-height:50px;"><a href="">I can't identify my account</a></div>
            <div id="middbr"><input type="submit" value="Continue"> <input type="reset" value="Cancel"></div>
        </div>
    </div>
</div>
</form>

<div id="footer">
	<div id="foot">
    <ul>
    <li><a href="#">English (UK)</a></li>
    <li><a href="#">मराठी</a></li>
    <li><a href="#">हिन्दीا</a></li>
    <li><a href="#">ردوગુ</a></li>
    <li><a href="#">જરાતીಕ</a></li>
    <li><a href="#">ನ್ನಡਪੰਜਾਬੀ</a></li>
    <li><a href="#">தமிழ்</a></li>
    <li><a href="#">বাংলাత</a></li>
    <li><a href="#">ెలుగుമലയാളം</a></li>
    </ul>
    <hr>
    
    <ul>
    <li><a href="#">Sign Up</a></li>
    <li><a href="#">Log In</a></li>
    <li><a href="#">Messenger</a></li>
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Lite</a></li>
    <li><a href="#">Mobile</a></li>
    <li><a href="#">Find Friends</a></li>
    <li><a href="#">Badges</a></li>
    <li><a href="#">People</a></li>
    <li><a href="#">Pages</a></li>
    <li><a href="#">Places</a></li>
    <li><a href="#">Games</a></li>
	<li><a href="#">Locations</a></li>
    <li><a href="#">Celebrities</a></li>
    <li><a href="#">Groups</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Create Advert</a></li>	
    <li><a href="#">Create Page</a></li>
    <li><a href="#">Developers</a></li>
    <li><a href="#">Careers</a></li>
    <li><a href="#">Privacy</a></li>
    <li><a href="#">Cookies</a></li>
    <li><a href="#">AdChoices</a></li>
	<li><a href="#">Terms</a></li>
    <li><a href="#">Help</a></li>
    </ul>
    </div>
</div>

</body>
</html>