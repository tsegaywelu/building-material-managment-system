
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="vlidation.js"></script><!--we are calling java script code -->
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
	/*if user is not login  or if he was logout then 
	it will go to login page*/
}
?>
<form method="post"><!-- post is secured than get that is why we use post-->
	<fieldset class="mad">
<span >
<select name="custemer" style="background:green;"      onchange="window.location.href=this.value;" >
	<option>custemer</option>
	<option value="display.php">  custemers list</option>
	<option value="">delet custemers </option>
	<option value=""> block custemers</option><br>
</select>
<select name="message" class="sel" onchange="window.location.href=this.value;">
	<option value=""> message</option>
	<option value="usersmess.php">read message from users</option>
	<option value="suppmess.php">read message from suppliers</option>
	
</select>
<select name="material" class="sel" onchange="window.location.href=this.value;">
	<option value="">material</option>
	<option value="material.php">materials list</option>
	<option value="selledmate.php">salled material list</option>
</select >
<select name="advertise" class="sel" onchange="window.location.href=this.value;">
	<option value="">advertisment</option>
	<option value="advertise.php">post advertisment</option>
	<option value=""> delet advertisment</option>
	<option value=""> edit advertisment</option>
</select><br><br><br><br><br><br><br><br>
<a href="logout.php" class="sel">logout</a>





<?php
function selection(){/* the function selection checks and recives the following varibles*/ 
if(!empty($custemers) && !empty($message) && !empty($material) && !empty($advertis)){
$custemers=$_POST['custemer'];
$message=$_POST['message'];
$material=$_POST['material'];
$advertis=$_POST['advertis'];
}
else{
	$custemers="";// initalizing all to be empty first
$message="";
$material="";
$advertis="";
}
}
selection();// we are calling the function selection to  run
?>
</span>
</fieldset>
</form>
</body>
</html>