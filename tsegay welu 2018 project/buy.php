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
		.het{
			width: 70%;
		}
		.ane{
			background-color: blue;
			width: 28%;
			float:left;
			
		}
		.grit{
			background-color: blue;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form method="post"><!--we are calling java script code -->
	<table class="ane">
		<th class="grit">
			buy material
		</th>
		
		<tr>
			<td class="grit">
				<br>
			</td>
		</tr>
		<tr>
			<td class="grit">
				
			</td>
		</tr>
		
	<tr>
		<td class="grit">
	<input type="number" name="id" placeholder="material_id" required>
       </td>
</tr>
<tr>
			<td class="grit">
				<br>
			</td>
		</tr>

<tr>
		<td class="grit">
	<input type="number" name="bank" placeholder="your bank account" required>
       </td>
</tr>
<tr>
			<td class="grit">
				<br>
			</td>
		</tr>
<tr>
	<td class="grit"><input type="submit" name="submit" value="buy"></td>
</tr>
<tr><td>
	<?php
	if (isset($_POST['submit'])) {
		////we are reciving variables when clicked submit
	$id=$_POST['id'];
	$conn=mysqli_connect('localhost','root','','build');
	/*we are creating connection with data base build
	*/
		if (mysqli_connect_error()) {
			echo"some thing wrong happened while establishing connection";
		}
		$sel="select * from manage_material where material_id='".$id."' ";
		/* we are  selecting all materials with the given id from manage_material table*/
		$result=$conn->query($sel);
		$rasult=mysqli_fetch_array($result);//feching materials detail

		if($result->num_rows>0)
		{
			/*now we are assinging the selected materials 
			to our created variables*/

		$name=$rasult['material_name'];
		$id=$rasult['material_id'];
		$price=$rasult['price'];
		$catagoryname=$rasult['catagoryname'];
		$suupliername=$rasult['suupliername'];
		$well="insert into selled_materials(material_id,material_name,price,catagoryname,suupliername) values('$id','$name','$price','$catagoryname','$suupliername')";
		/*inserting the fetched material in to table
		selled_materials because it is already selled
		*/
		$conn->query($well);
		$del="DELETE FROM `manage_material` WHERE material_id='$id';";
		//because the material is selled we are deleting it
		$conn->query($del);
			
		}
if($result->num_rows<=0){
	echo "the material with id=$id is not available";
}

}

	  ?>
</td></tr>
</table>
</form>

<form method="post">
	<table class="het">
		<tr  >

			<th >material id</th>
			<th>material name</th>
			<th>price</th>
			<th>quality</th>
			
			
		</tr>

		<?php
	$conn=mysqli_connect('localhost','root','','build');
	// creating connection with data base build
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$cr=" select material_id,material_name,price,catagoryname,suupliername from manage_material";
	// we are selecting materials to display on users home
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
			// displaying materials to see by users and then buy
			
		}
	}
	$conn->close();// we are closing our connection
	
?>
	</table>

	
</span>
</form>

</body>
</html>