<!DOCTYPE html>
<html>
<head>
	<title>www.registration.php</title>
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
			font-size:25px ;
			margin-top: 30px;
			margin-left: 150px;
			margin-right:  150px;
			background-color: #F0FFF0;
			padding: 40px;
			border-width: 2px;
			border-style: solid black;
			}
			
	</style>
	<form method="post">
		<div class="marin">
		<span >
			<fieldset>
	      <h1 style="color:DodgerBlue;" >registration form</h1>	
                          username:
	<input type="text" name="username" placeholder="username" style="font-size: 20px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	phone: &nbsp <input type="number" name="phone" placeholder="phone" style="font-size: 20px;"style="float: right;" required><br><br>
	password:
	<input type="password" name="password" placeholder="password" style="font-size: 20px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp country: <select name="country"><option>ethiopia</option><option>eretria</option><option>sudan</option><option>libya</option><option>egpt</option><option>america</option><option>china</option><option>italy</option><option>germen</option><option>esrael</option></select> <br> <br>
	usertype:&nbsp
	<input type="text" name="usertype" placeholder="usertype" style="font-size: 20px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp email: &nbsp&nbsp
	<input type="email" name="email" placeholder="email" style="font-size: 20px;"style="float: right;" required><br> <br>
	<input type="submit" name="submit" placeholder="register" style="font-size: 20px;" value="register">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspsex:
	<input type="radio" name="sex"  value="male">male
	<input type="radio" name="sex" value="fmale" >female
	<p style="font-size: 25px">alredy you have acount?<a href="first.php"> login</a></p>
	     <?php
	     if(isset($_POST['submit'])){/*
	     	if sumit button is clicked then we are recieving the follwing variables 
	     	*/
	   $username=$_POST['username'];
       $password=$_POST['password'];
      $usertype=$_POST['usertype'];
      $phone=$_POST['phone'];
      $country= $_POST['country'];
      $email= $_POST['email'];
      if(isset($_POST['sex'])){
      	if ($_POST['sex']=='male') {
      		$sex='m';
      	}
      	if($_POST['sex']=='fmale'){
      		$sex='f';
      	}
      }
      if( empty($username) || empty($password) || empty($usertype)
|| empty($phone)||empty( $country)||empty($email)|| empty($sex)){
	echo "pleas fill all the reqired fields<br>";
/*
we are checking if all the variables are not empty
*/
      
  }
}
	?>
	<?php
	  if( !empty($username) && !empty($password) && !empty($usertype)
&& !empty($phone)  && !empty( $country) &&!empty($email) && !empty($sex)){
			$conn2=mysqli_connect('localhost','root','','build');
		//we create connection with database build
         if (mysqli_connect_error()) {
		}

		   $insi="select * from register where email='".$email."' or phone='".$phone."'";
		   /*
		   now what we are doing is we are comparing $email and $phone with   phone and email from table register  
		   */
           $red=$conn2->query($insi);
		if($red->num_rows<=0 and $usertype!='admin'){
		/*then if there are no user registerd with $email and $phone
		we will register and data will be inserted to table register */
		$well="insert into register(username,password,usertype,phone,country,email,sex) values('$username','$password','$usertype','$phone','$country','$email','$sex')";
		$conn2->query($well);
		header("location:first.php");/* then after registration go to  login page*/
	}
		
	if($red->num_rows>0){
		echo "check is it your email or phone?<br> some one registerd with this email.";
		/*
		if there is some one registerd with your inserted email or phone system will say check is it your email or phone?<br> some one registerd with this email." 
		*/
		
	}
	
	if($usertype=='admin')
	{
		echo "you do not have permission to register as admin! ";
		// because admin can not register online it is owner
		
	}
	
		

  }
	?>

		
			</fieldset>
		</span>
	</div>	

	</form>

</body>
</html>