
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
	echo "Welcome you signed in successfully";
	
}
else {
	header("Location: first.php");
}
?>
</body>
</html>