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
	<title></title>
</head>
<body>

<style type="text/css">
		
		
.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>
<form class="form-style-9" method="post">
	
<ul>
<li>
    <input type="number" name="id" class="field-style field-split align-left" placeholder=" material id" required>
    <input type="number" name="price" class="field-style field-split align-right" placeholder="price" required>

</li>
<li>
    <input type="text" name="materialname" class="field-style field-split align-left" placeholder="material name" required>
    <select name="quality" class="field-style field-split align-right">
    	<option>high quality</option>
    	<option>midum quality</option>
    	<option>low quality</option>
    </select>
    
    
</li>


<li>
<input type="submit" value="supply material" name="submit">
</li>
</ul>


<?php
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['materialname'];
$price=$_POST['price'];
$catagoryname=$_POST['quality'];
$suupliername=$_SESSION['username'];
$conn=mysqli_connect('localhost','root','','build');
	if(mysqli_connect_error())
	{
		echo "there is an error";
	}
	$well="insert into manage_material(material_id,material_name,price,catagoryname,suupliername) values('$id','$name','$price','$catagoryname','$suupliername')";
		$conn->query($well);
	}
	?>
	</form>
	</body>
</html>