<?php
require("top.php");
require("connect.php");
?>

<div id="clr"></div><div id="clr"></div>

<div id="mid" class="steps">
	<div class="arrow">Step 1<br>Add Friends</div>
</div>

<div id="clr"></div>

<div id="mid" class="steps">
	<div id="clr"></div>
	<h1>Add Friends</h1>
    <p>Select your friends</p>
    <div id="clr"></div>
    
    <form method="post">   
    <table width="90%">
    <?php
	$sel=mysql_query("select * from registration where cno!=".$_SESSION['email']);
	while($rr=mysql_fetch_array($sel))
	{
	?>
    <tr>
    <td width="2%"><?php echo "<img src='$rr[9]' width='50'>"; ?></td>
    <td width="78%"><?php echo $rr[1]; ?> Wont to be your frinds.</td>
    <td width="11%"><input type="submit" value="Confirm" style="width:100px; background:#CF9"></td>
    <td width="9%"><input type="submit" value="Delete Request" class="addbutton" style="width:100px; background:#CF9"></td>
    </tr>
    <?php
	}
	?>
    </table>
    </form>
    
    
</div>



<a href="editprofile.php">Edit</a>
</body>
</html>