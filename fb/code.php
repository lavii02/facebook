<?php
require("top.php");
?>


<?php
echo $_SESSION['id'];
?>




<form method="post">
<div id="mids">
	<div id="midd">
    	<div id="middt">
            <div id="clr"></div>
           Enter the code from the SMS message
            <hr>
                <div id="middt1">
                    <p align="center" style="line-height:30px;">SMS Message</p>
                    
                    <div id="middtl" style="font-size:25px; line-height:35px;"><i class="fa fa-phone"></i></div>
                    <div id="middtr"><input type="text" name="no" style="margin-top:7px;"></div>
                    
                    
                </div>
        </div>
        <div id="middb">
        	<div id="middbl" style="line-height:50px;"><a href="">I can't identify my account</a></div>
            <div id="middbr"><input type="submit" value="Submit" name="byt"> </div>
        </div>
    </div>
</div>
</form>


<?php
if(isset($_REQUEST['byt']))
{
$aa=$_REQUEST['no'];

$bb=$_SESSION['id'];

if($aa==$bb)
{
header("location:searchfri.php");	
}
else
{
echo "not matech";	
}

}
?>
</body>
</html>