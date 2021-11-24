<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">

	<title>Document</title>
</head>
<body>
	<form action="	#" method="POST">
	<input type="text" name="name" ><br>
	<input type="text" name="text" ><br>
	<button type="submit" name="sub">submit</button>
	</form>
<?php

include("qr/qrlib.php");
if(isset($_POST['sub'])){
$path = 'imgs/';
$_SESSION["files"]= "green";
$file = $path.$_POST['name'].'.svg';
$text= $_POST['text'];
echo   "your text are here";
?>
<img src= 'imgs/<?php  echo $_POST['name']?>.svg'>
<?php
Qrcode::svg($text,$file);

}
?>


</body>
</html>