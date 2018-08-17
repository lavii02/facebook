<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Apna facebook</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function aa()
{
var em=document.fbb.email.value;
var em1=document.fbb.em.value;
if(em==em1)
{
	
}
else
{
	alert("not match");
}

}
</script>
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
            <form method="post" action="login.php">
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


<div id="mid">
	<div id="midl">
    	<div id="midll"><img src="images/GoEiC6hjWY7.png"></div>
    </div>
    
    
    <div id="midr">
    	<div id="clr"></div>
    	<h1>Sign Up</h1>
        <p>It's free allwaye will be.</p>
        
        <form method="post" name="fbb" action="registration.php">
        <div id="midbox">
        	<div id="mml"><input type="text" name="fname" placeholder="First Name" class="aa" required></div>
            <div id="mmr"><input type="text" name="lname" placeholder="LastvName" class="aa" required></div>
        </div>
        
        <div id="clr"></div><div id="clr"></div>
        
        <div id="midbox"><input type="text" name="email" required placeholder="Email or Phone No"></div>
        
        <div id="midbox"><input type="text" name="em" required placeholder="Re-enterEmail or Phone No"></div>
        
        <div id="midbox"><input type="password" name="pass" placeholder="Password"></div>
        
        <div id="midbox">
        <select name="dd">
        <option value="0" selected="1">Day</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>
        
        <select name="mm">
        <option value="0" selected="1">Month</option>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
        <option value="6">Jun</option>
        <option value="7">Jul</option>
        <option value="8">Aug</option>
        <option value="9">Sept</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
        </select>
        
        <select name="yy" required>
        <option value="" selected="">Year</option>
        <?php
		$d=date("Y");
		$dd=$d-18;
		for($d=$dd; $d>=60; $d--)
		{
		echo "<option value='$d'>$d</option>";	
		}
		?>
        </select>
        </div>
        
        <div id="midbox">
        <input type="radio" name="gen" value="Male" checked> Male 
        <input type="radio" name="gen" value="Female"> Female
        </div>
        
        <div id="midbox"><p class="bb">By clicking Create an account, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</p></div>
        
        <div id="midbox"><input type="submit" value="Create an account" onClick="aa()"></div>
        
        <div id="midbox"><hr></div>
        
          <div id="midbox"><p class="bb"><a href="">Create a Page</a> for a celebrity, band or business.</p></div>
        </form>
        
        <div id="clr"></div>
    </div>
</div>


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