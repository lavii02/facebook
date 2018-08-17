<?php

require("connect.php");

$em=$_REQUEST['em'];
$pass=$_REQUEST['pass'];


	if($domain = strstr($em, '@'))
	{
	$ss=mysql_query("select * from registration where (email='$em') && pass='$pass'")or die(mysql_error());
	$a=mysql_num_rows($ss);
	if($a==0)
	{
	echo "<script>alert('Email or Password not Match!')</script>";
	echo "<script type='text/javascript'>window.location.href='index.php'</script>";	
	}
	else
	{
		$rr=mysql_fetch_array($ss);
		session_start();
		$_SESSION['em']=$rr[3];
		$_SESSION['un']=$rr[2];
		$_SESSION['id']=$rr[0];
		echo "<script>window.location.href='home.php'</script>";
	}

}

else
{
	$ss=mysql_query("select * from registration where (cno='$em') && pass='$pass'")or die(mysql_error());
	$a=mysql_num_rows($ss);
	if($a==0)
	{
	echo "<script>alert('Email or Password not Match!')</script>";
	echo "<script type='text/javascript'>window.location.href='index.php'</script>";	
	}
	else
	{
	$rr=mysql_fetch_array($ss);
	session_start();
	$_SESSION['cn']=$rr[4];
	$_SESSION['un']=$rr[2];
	$_SESSION['id']=$rr[0];
	echo "<script>window.location.href='home.php'</script>";
	}
}

?>
