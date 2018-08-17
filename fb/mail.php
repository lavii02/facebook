<?php
require("connect.php");

$a=$_REQUEST['pp'];

$ss=mysql_query("select * from registration where email='$a'");

$ab=mysql_fetch_array($ss);

$email=$ab[3];
$pass=$ab[5];

$to=$email;
$subject="Recovery Password";
//$message="<h1>Dear sir/mam,<br> ---- ---- ---- --- --- </h1>".$pass;
$message="<html>
<head></head>
<body>
<table width='80%'>
<tr>
<th>Recovery Password</th>
</tr>

<tr>
<td><img src='http://www.bbvk.org/images/bbvk_title1.png'></td>
</tr>
<tr>
<td><a href='http://www.bbvk.org/cmail.php'>Click</a></td>
</tr>
</table>
</body>
</html>";
$header="info@apnafb.com";




//mail($to, $subject, $message, $header);
session_start();
$_SESSION['id']=$ab[0];
header("location:password.php");
//echo "<script type='text/javascript'>window.location.href='pagename'</script>";

?>