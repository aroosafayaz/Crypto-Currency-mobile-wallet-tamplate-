<?php

/*swallet.php  page function*/
if(isset($_POST['send'])){

/* email variable
 $email= $_POST['email'];*/

	echo "working";
	header("location:sending.php");
}


       /*semail.php  page function*/ 
if(isset($_POST['sendE'])){
	echo "weldon working also";
}


     /*sending.php  page function*/ 
if(isset($_POST['next'])){
	echo "weldone working also";
}
?>