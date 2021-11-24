 <?php


session_start();
include "db.php";

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Login form</title>
	<!--<link rel="stylesheet" href="css/styl.css" type="text/css">-->
 	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

 
 <style> 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border-color: black;
}body{
    background-color: gray;
}

.wallet-container{
  /*background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(../img/coin1.jpg) no-repeat;
  background: cover;*/
  height: 100vh;
  width: 340px;
    font-size: 15px;
  height: 100vh;
  left: 50%;
  transform: translate(-50%);
  position: absolute;
  background: #edcb76;

  
  }.head{
    
    display: flex;
    justify-content: center;
    padding-top: 25px;
    
    width: 300px;
    margin: 20px;
    font-size: 25px;
    }.head h3{

      line-height: 50px;
      border-bottom: 1px solid #6d4813;
      font: bold;
     color: #6d4813;

      
    }
  
  .form-group{
  position: relative;
  
    color: #fff;

  
  margin: 40px 20px 20px 20px;

}.form-control{

 border: none;
   border-radius: 5px; 
  background: #9b6e2e;
   
  padding: 10px;
color: #3f2603;
  
} 

.form-label{
  background-color: transparent;
  position: absolute;
  top: 10px;
  left: 20px;
  cursor: text;
 color: #efe08d;
  font-size: 14px;
  transition: top 200ms ease-in,
   left 200ms ease-in, 
  font-size 200ms ease-in;
}.form-control:focus ~ .form-label,
.form-control:not(:placeholder-shown).form-control:not(:focus)
~.form-label{
  top: -21px;
  left: 20px;
  font-size: 18px;
  background-color:transparent;
  cursor: text;
  z-index: 10;
  color: #9c6c28; 


}.form-control:focus{
  border-bottom: 1px solid black;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none;
  color: #3f2603;
 background-color: #9b6e2e;
   }input{
   background: #9b6e2e;
   }input:focus{
    outline-offset: unset;
    outline: none;
      background: #9b6e2e;
 
   }
.conter .text{
  color: #9c6c28;
  padding: 10px 20px;

}

.lbutton
 {
  position: relative;
  padding: 20px 20px;
  display: flex;
  justify-content: center;

}

.lbutton .lbtn{
  width: 150px;
  color:#000;
  border-radius: 5px;
  outline: none;
  
  border: 2px solid #edcb76;
  background: #9c6c28; 

 color: #efe08d;
}.form2 .form-group{
  margin-top: 20px;
}
.drop{
  margin-top: 40px;
} 
.show-btn{
  background:transparent;
  padding: 10px 0px;
  font-size: 20px;
  font-weight: 10px;
  color: #000;
  cursor: pointer;
  border: none;
  border-bottom: 2px solid #000;
  margin-top: -40px;
  text-align: center;
  margin-left: 90px;
  

}


input[type="checkbox"]{
  display: none;
}.conter{
  display: none;
  background: #fff;
  width: 300px;
  border-radius: 10px;
  border: 2px solid black;
  padding: 20px;
  margin-left: 20px;
  margin-top: -40px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
}.show-btn, .conter{
  position: absolute;
  
}
#show:checked ~ .conter{
  display: block;

  
}
.conter .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
  color: #000;
}

.conter .close-btn:hover{
  color: red;
}.lbutton .btn-block{
 background: #9c6c28; 
     color: #efe08d;
 width: 100%;
  font-size: 25px;
}.lbutton .sbtn{
  width: 300px;
  padding: 10px;
  background-color: #FF9C2A;
  color: #000;
}
</style>
</head>
 <body>
<?php

include("qr/qrlib.php");
if(isset($_POST['button'])){
      $Email = $_POST['email'];
    $password = $_POST['password'];

  
 $query = mysqli_query($db_connect, "select * FROM  sign_up where EMAIL='$Email' ");
 $check= mysqli_num_rows($query);

 if($check ==1){
   $row=mysqli_fetch_assoc($query);
   $verify=password_verify($password, $row['PASSWORD']);

   
    
   if($verify==1){
 
          
 $_SESSION['adminname']= $row['NAME'];
         
 $_SESSION['admiID']= $row['ID'];
 $path = 'imgs/';
$file = $path.$_SESSION['adminname'].'.svg';

$_SESSION['file'] = $file;


   header("location:index.php");
      }else{
echo "not matched";
}
 } 
}

?>
 	<div class="wallet-container">
    <div class="head">  
 		<h3>	Login Form</h3>
    </div>
 		<form action="" method="POST">
 			<div class="form-group ">
        <input type="email" class="form-control" name="email" placeholder=" " required>

    <label for="email" class="form-label">Email</label>

          
   </div>
  <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder=" " required>
      <label for="password" class="form-label">Password</label>

   </div>
       <div class="lbutton">
	<button type="submit" class="lbtn btn" name="button">login</button>
   <a href="sign_up.php" class="lbtn btn" name="sign">sign up</button>
   </a></div>

    </form>
  
   <div class="drop"> 
     
   
      <input type="checkbox" id="show">
         <label for="show" class="show-btn">Password Change</label>
     
    <div class="conter">
            <label for="show" class="close-btn fa fa-times" title="close"></label>
            <div class="text">
               Change Your Password
            </div>
            <form action="#" class="form2">
            <div class="form-group" >
      <input type="password" class="form-control" name="password" placeholder=" " required>
      <label for="password" class="form-label">New_Password</label>

   </div>
   <div class="form-group ">
      <input type="password" class="form-control" name="password" placeholder=" " required>
      <label for="password" class="form-label">C_Password</label>

   </div>
   <div class="lbutton">
  
   <a href="#" class=" btn-block btn">done</a>
 </div>
           </form>
       </div>
   </div>
    
 	</div>
 </body>
 </html>