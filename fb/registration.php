<?php
require("connect.php");

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$name=$fname." ".$lname;

$email=$_REQUEST['email'];

$pass=$_REQUEST['pass'];


$dd=$_REQUEST['dd'];
$mm=$_REQUEST['mm'];
$yy=$_REQUEST['yy'];
$date=$dd."/".$mm."/".$yy;
$gen=$_REQUEST['gen'];

$code=rand(10000, 5);
$pic="userimg/png.png";


if($domain = strstr($email, '@'))
{
$em=$email;
		$sel=mysql_query("select * from registration where email='$em'");
		$aa=mysql_fetch_array($sel);
		if($aa[3]==$em)
		{
		echo "<script type='text/javascript'>alert('email already exist')</script>";
		echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
		else
		{
$ii=mysql_query("insert into registration(name, email, pass, dob, gen, code, pic) values('$name', '$em', '$pass', '$date', '$gen', '$code', '$pic')")or die(mysql_error());
header("location:code.php");
		}
}
else
{
$cno=$email;
session_start();
$_SESSION['id']=$code;
$_SESSION['email']=$email;
	
$ii=mysql_query("insert into registration(name, cno, pass, dob, gen, code, pic) values('$name', '$cno', '$pass', '$date', '$gen', '$code', '$pic')")or die(mysql_error());
header("location:sms.php");
}




?>