<html>
<head><title></title> 
<link href="style.css" rel="stylesheet" type="text/css">
	
</head> 
<!-- <body style="background-color:#9661e7;"> -->
	<body>
<div class="Hero">
<?php
session_start();
if(isset($_SESSION["username"]))
{
 
 
$_SESSION = array();
 
  

session_destroy();
 
echo "<h1 id='exit_title'>Thanks For Coming! See you!</h1>";

 
}
else
{
header("Location:login.php");
}
?>
</div>

</body>
<!-- </body> -->
</html>