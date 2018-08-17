<?php
session_start();
?>
<?php 
require("connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>

<div id="header">
	<div id="headmain">
    	<div id="logo"><a href="home.php"><i class="fa fa-facebook-square"></i></a></div>
    	<div id="search"><input type="search"></div>
    	
        
        <div id="ppic" style="line-height:30px;">
        <?php
		if(isset($_SESSION['em']))
		{
		$em=$_SESSION['em'];
		$sel=mysql_query("select * from registration where email='$em'")or die(mysql_error());
		$rr=mysql_fetch_array($sel);
		echo "<img src='$rr[9]' width='30'> &nbsp;&nbsp;".$rr[1];
		}
		else if(isset($_SESSION['cn']))
		{
		$cn=$_SESSION['cn'];
		$sel=mysql_query("select * from registration where cno='$cn'")or die(mysql_error());
		$rr=mysql_fetch_array($sel);
		echo "<img src='$rr[9]' width='30'> &nbsp;&nbsp;".$rr[1];
		}
		else
		{
			
		}
		?>
        </div>
        
        <div id="nav">
        	<ul>
            <li><a href="profile.php">Home</a></li>
            <li><a href="findfriend.php">Find Friends</a></li>
            <li><a href="friendrequest.php" class="active"><i class="fa fa-users"></i></a></li>
            <li><a href="message.php"><i class="fa fa-comments"></i></a></li>
            <li><a href="notification.php"><i class="fa fa-bell"></i></a></li>
        </div>
        
        <div id="logout">
            <ul>
            <li><a href="privecy.php"><i class="fa fa-user-secret"></i></a></li>
            <li><a href="#"><i class="fa fa-arrow-down"></i></a>
            	<ul>
                <li><a href="1">Create Page</a></li>
                <li><a href="1">Manage Page</a></li>
                <li><a href="1">Setting</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</div>