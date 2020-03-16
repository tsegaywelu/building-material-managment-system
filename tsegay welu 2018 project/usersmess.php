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
	<script src="vlidation.js"></script><!--we are calling java script code -->
	<title>database.com</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color:black;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		th{
			color: white;
			background-color: #588c7e;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>

<form>
	<table>
		<tr>
			<th>username</th>
			
			
			<th>email</th>
			<th>date</th>
			<th>message</th>
		</tr>
		<?php
	$conn=mysqli_connect('localhost','root','','build');
	/*we are creating connection with data base build
	*/
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cre="select username,email,date,message from usermess";
	$result=$conn->query($cre); // our reqest is excuting
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row['username'].
			"</td><td >".$row['email'].
			"</td><td>".$row['date'].
			"</td><td>".$row['message'].
			// these all will be displayed on body of page
			"</td></tr>";
			
		}
	}
	$conn->close(); //closing connection
	
?>
	</table>

</form>
<script type="text/javascript">
	
</script>
</body>
</html>