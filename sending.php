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
  


</head>
<body>
	<div class="wallet-container" style="height: 100vh;">
		<div class="header">
			<a href="welcome.php" class="fa fa-arrow-left" > <span style="margin-left: 10px; ">Send To</span></a>
			
			</div>
			<div class="draw" ><h6 style="margin-left: 120px;">Amount</h6>	</div>
			<form action="sen.php" method="POST">
	<div class="coin">	<input type="number" name="num" placeholder="0LTC"></div>
		<div class="blnce text-center">
			<h3>$0.00</h3>
			<p>	My Balance</p>
			</div>
			<div class="fee text-danger" style="padding-left: 20px;">
			<h3>Network Fee</h3>
			<p>+=0.015LTC</p>
		
		
			<h6>Total Amount :0LTC</h6>
			<h6>Est.arrival amount &nbsp =0 &nbsp DGB</h6>
			</div>
		<div class=" contianer text-center">	
<button class="btn btn-lg btn-block" type="submit" name="next">Next</button>
</div>

			</form>

	</div>
</body>
</html>