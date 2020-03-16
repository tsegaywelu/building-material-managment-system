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
			<th>material id</th>
			<th>material name</th>
			<th>price</th>
			<th>quality</th>
			<th>supplier name</th>
			
		</tr>
		<?php
	$conn=mysqli_connect('localhost','root','','build');
	/*we are creating connection with data base build
	*/
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cr=" select material_id,material_name,price,catagoryname,suupliername from selled_materials";
	$res=$conn->query($cr);// our reqest is excuting
	if($res->num_rows>0)
	{
		while($row=$res->fetch_assoc())
		{
			echo "<tr><td>".$row['material_id'].
			"</td><td >".$row['material_name'].
			"</td><td>".$row['price'].
			"</td><td>".$row['catagoryname'].
			"</td><td>".$row['suupliername'].
			"</td></tr>";
			// these all will be displayed on body of page
		}
	}
	$conn->close();// closing our conection
	
?>
	</table>

</form>

</body>
</html>