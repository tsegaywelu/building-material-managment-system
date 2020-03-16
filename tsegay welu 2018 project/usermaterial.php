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
			<th>material id</th>
			<th>material name</th>
			<th>price</th>
			<th>quality</th>
			
			
		</tr>
		<?php
	$conn=mysqli_connect('localhost','root','','build');
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cr=" select material_id,material_name,price,catagoryname,suupliername from manage_material";
	$res=$conn->query($cr);
	if($res->num_rows>0)
	{
		while($row=$res->fetch_assoc())
		{
			echo "<tr><td>".$row['material_id'].
			"</td><td >".$row['material_name'].
			"</td><td>".$row['price'].
			"</td><td>".$row['catagoryname'].
			"</td></tr>";
			
		}
	}
	$conn->close();
	
?>
	</table>

</form>

</body>
</html>