<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
	
	
}
else {
	header("Location: first.php");
}
?>
<!DOCTYPE html>
<html>
<head>
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
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cre="select username,email,date,message from sumess";
	$result=$conn->query($cre);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row['username'].
			"</td><td >".$row['email'].
			"</td><td>".$row['date'].
			"</td><td>".$row['message'].
			
			"</td></tr>";
			
		}
	}
	$conn->close();
	
?>
	</table>

</form>
<script type="text/javascript">
	
</script>
</body>
</html>