<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
function tse(){
	//document.getElementById('hed') .innerHTML="changer";
	 //document.getElementById("hed").innerHTML = "Paragraph changed.";
	 document.getElementById("hed").innerHTML="now i can it"
}
window.alert("wow youuuuuuuu");
document.write("oh who are you");
//console.log("dad is coming");
function setnew(){
	document.getElementById("ind").src="img2.jpg";
}
 function setold(){
	document.getElementById("ind").src="img5.jpg";
}
</script>
</head>
<body>
<h1 id="hed">hello one</h1>

<button type="button" onclick="tse()">go</button>
<br><br><br><br><br><br><h1>lets see how onmouseover  and onmouseout onclick 
they are javascript objects
works</h1>
<img id="ind"   src="back.png" width="200px" onmouseover="setnew()"onmouseout="setold()" >
</body>
</html>