<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
	echo "Welcome you signed in successfully";
	
}
else {
	header("Location: first.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<table>
	

	
</table>	

	

</form>
</body>
</html>