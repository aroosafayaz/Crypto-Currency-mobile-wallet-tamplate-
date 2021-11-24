<?php


session_start();
include "db.php";

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>send</title>
	 
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="css/send.css" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
<style>

</style>

</head>
<body>
	<div class="wallet-container">
		<div class="header">
			<a href="welcome.php" class="fa fa-arrow-left" > <span style="margin-left: 10px; ">Send To</span></a>
			
			</div>
			<div class="add" ><h6 >My Address  </h6>	</div>
			<div class="coin text-center"><h5>	My LTC Deposit Address</h5></div>
		<div class="container text-center" >
		

     <div id="text">	
		<h5 >jkgkjjghfghdjhugkjgvbjgy</h5>
	
		<button onclick="Copy(document.querySelector('#text').innerText)">Copy Addres
			
		</button></div>

		<!-- qr code image -->

		<div class="qr">	

<img src= 'imgs/<?php  echo $_SESSION['adminname']?>.svg'>
<?php

include("qr/qrlib.php");
	
Qrcode::svg($_SESSION['admiID'],$_SESSION['file']);


?>

</div>


		<!-- qr code image end here-->
	<form action="sen.php" method="POST">
	
	
	<div class="new"><button class="btn">	Generate new</button > <button class="btn">	show all</button>
	</div>
		
					
			</form>
		</div>
<div class="useri">	
<h3>User ID and Web links	</h3>
</div>
<div class="userid">	
<h6>dgajkasjk	</h6>
<p>	Freewallet users can instantly send you LTC using your LTC using your user ID</p>
</div>
<div class="userid ">	
<h6>freewallet.com/idj	</h6>
<p>	Use this link to top-up your wallet to any currency</p>
</div>

	</div>

<!--copy button script-->

	<script type="text/javascript">
           function Copy(text){
           	var elem = document.createElement("textarea");
           	elem.value = text;
           	document.body.appendChild(elem);
           	elem.select();
            	document.execCommand("copy");
           	document.body.removeChild(elem);
           	alert("Text copies!");
           }

			</script>




</body>
</html>