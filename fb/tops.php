<?php
if(isset($_SESSION['id']))
{
	
}
else
{
echo "<script>alert('your r not login')</script>";
echo "<script>window.location.href='index.php'</script>";	
}
?>