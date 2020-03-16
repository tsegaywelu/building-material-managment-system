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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: gray;
		}
		.tse{
             margin-left: 200px;
		}
	</style>
	<form method="post">
<input type="text" name="title" class="tse"  placeholder=" write title"><br><br>

<textarea name="body" rows="20" cols="50" class="tse" placeholder="write body"></textarea>
<input type="submit" name="submit" placeholder="post" style="font-size: 20px;" value="post">
<?php
if(isset($_POST['submit'])){/*
	     	if sumit button is clicked then we are recieving the follwing variables 
	     	*/
$title=$_POST['title'];
$body=$_POST['body'];
$conn1=mysqli_connect('localhost','root','','build');
/*we are creating connection with data base build
	*/
         if (mysqli_connect_error()) {
			echo"some thing wrong happened while establishing connection";
		}
		$ins="insert into advertisment(title,body) values('$title','$body')";
		// we are inserting to table advertisment  
		$conn1->query($ins);

		
}
?>

</form>
</body>
</html>