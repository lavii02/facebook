<?php
session_start();

if(isset($_SESSION['id']))
{
	
}
else
{
	echo "<script>alert('your r not login')</script>";
echo "<script>window.location.href='index.php'</script>";	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php


echo $_SESSION['id'];
?>
<a href="logout.php">logout</a>

</body>
</html>