
<!DOCTYPE html>
<html>
<head>
	<script src="vlidation.js"></script><!--we are calling java script code -->
	<title></title>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<style type="text/css">
body{
	background-image: url("back.png");
			background-repeat: no-repeat;
			background-size: 100% 670px;
}
.sel{
	margin-left: 100px;
	background-color: blue;
}
.mad{
	background-color: gray;
	margin-left: 200px;
	margin-right: 100px;
	margin-top:100px; 

}	

	</style>
<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
	
	/* the system is going to check if the user is correctly login*/
}
else {
	header("Location: first.php");
	/*if user is not login  or if he were log out then 
	it will go to login page*/
}
?>
<form method="post"><!-- post is secured than get that is why we use post-->
	<fieldset class="mad">
<span   >

<a href="sumessage.php">write message</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a href="usermaterial.php">view material list</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="suppmaterial.php">supply material</a><br>

<?php
$conn=mysqli_connect('localhost','root','','build');
/*we are creating connection with data base build
	*/
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cre="select title,body from advertisment";
	$result=$conn->query($cre);
/*the system selecting the advertis mant to display on body
     of supplier home*/
	while($row=$result->fetch_assoc())
		{
			echo "<tr><td><h1>".$row['title'].
			"<br></h1></td><td >".$row['body'].
			//now it is displaying
			
			"</td></tr>";

		}
	
?>
<br><br>
<a href="logout.php" class="sel">logout</a>
</span>
</fieldset>
</form>
</body>
</html>