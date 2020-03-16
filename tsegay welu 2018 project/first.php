<!DOCTYPE html>
<html>
<head>
	<title>www.building material.com</title>
<script src="vlidation.js"></script>
</head>
<body>
	<style type="text/css">
		body{
			background-image: url("back.png");
			background-repeat: no-repeat;
			background-size: 100% 670px;
		}
		.marin{
			font-size:35px ;
			margin-top: 10px;
			margin-left: 250px;
			margin-right:  250px;
			background-color: #F0FFF0;
			padding: 40px;
			border-width: 3px;
			border-style: solid black;
		}
		    .in{
            font-size: 35px;
		      }
		
	</style>
	<form  method="post" >
	<div class="marin">
		<span class="in" >
			<fieldset>
<p style="color:DodgerBlue;" style="font-size: 25px;">  user login form  </p>
	username:<br>
	<input type="text" name="username" placeholder="username" required><br>
	password:<br>
	<input type="password" name="password" placeholder="password" required><br>
	email:<br>
	<input type="email" name="email" placeholder="email" required><br>
	<input type="submit" name="submit" placeholder="submit">
	<p style="font-size: 25px">dont have account?<a href="register.php"> create account</a></p>
	<?php
	session_start();//we are starting session 
	if(isset($_POST['submit'])){//we are reciving variables 
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
if(empty($username) || empty($password) || empty($email) ){
	echo "pleas fill all the reqired fields<br>";
	/*
	checking  if there is empty variable

if there is it will say pleas fill all the reqired fields
	*/
}	
}

?>
<?php
if(!empty($username)  && !empty($password) && !empty($email))
	{
		// if the variables are not empty

		$conn=mysqli_connect('localhost','root','','build');
		// creating connection
		if (mysqli_connect_error()) {
			echo"some thing wrong happened while establishing connection";
		}
		$sel="select * from register where email='".$email."' and password='".$password."'";
		/*after creating connection we are going to check if there are our usrname passoword  and email in table register*/
		$result=$conn->query($sel);
		if($result->num_rows>0) {
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;// we are creating session
			$_SESSION['username']=$username;
			$user="select usertype from register where email='$email'";//check  which type of user is loged  in 
			$user = mysqli_query($conn, $user);
			$rasult=mysqli_fetch_array($user);
			$usertype= $rasult['usertype'];
			//header("Location: home.php");
			function home($usertype)
			{
				if($usertype=='admin'){
					header("Location:adhome.php");
					// if usertype is admin  then go to  admin home
				}
				if($usertype=='supplier'){
					header("Location:suhome");
					// if usertype is supplier of material then go to  supplier home

			}
			if($usertype=='user'){
					header("Location:ushome");
					//if usertype is user  then go to user home 

			}
			if($usertype=='tax preparer'){
					header("Location:tahome");
					//if usertype is  tax preparer then go to  tax preparer home

			}
		}
		home($usertype);
		
		
		
	}
	if($result->num_rows<=0){
	echo "Invalid username or password!";
	/* if there is no user registerd with the  given password and 
	username then the retrived row will be less than zero
	so the system will tell user Invalid username or password! */ 	
	}
}

?></fieldset>
</span>
	</div>
</form>
</body>
</html>