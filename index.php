<?php
session_start();
include "db.php";
if(!$_SESSION['admiID']){
   header("location:login.php");
   echo "plz login first";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

 <!-- <link rel="stylesheet" href="css/styles.css" type="text/css">-->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style> 
*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   outline: none;
}

.wallet-container{
  background: #9b6e2e;
      width: 340px;
   color: #FFF;
   font-size: 15px;
   left: 50%;
   transform: translate(-50%);
   position: absolute;
   padding: 1px;
   
   }
   .wallet-container a{
text-decoration: none;
color: #724f1d;
margin-top: 40px;
}

.wallet-container a:hover{
   color: #fff;
   transition: 5s;
   animation: zoom-in;
   text-decoration: none;

}
a .fa-line-chart{
padding-right: 50px;


} .fa-cog{
   padding-left: 50px;
}
.name .user_name{
   margin-top: 10px;
   color: #9b6e2e;

}
.name .amount{
padding-bottom: 20px;
color: #38761b;
}#btn-group{
   
   background: #9b6e2e;
   
   line-height: 20px;
   margin-bottom: 0px;
   position: sticky;
   margin-top: -14px;

   
}#btn-group .btn{
    color: #000;
    background: #9b6e2e;
    font-size: 12px;
    border-radius: 12px;
    border: none;
    outline: none;


}#btn-group .fa{
   color: #efe08d;
} 
.step h5{
   text-align: left;
   font-size: 15px;
   color: #3f2603;

}.step{
   margin-top: 25px;
}.headerr{
   background: #edcb76;
}


.tex-history{
   padding: 4px 5px 0 5px;
   text-align: left;
  
   background: #9c6c28; 

}.tex-list{

   color: #fff;
   font-size: 13px;
   border-radius: 5px;

   
}.tex-history p{
   color:#efe08d ;
   text-align: left;
   font-size: 14px;
   margin-top: -5px;
   padding-bottom: 4px;

}.tex-history .float{
   float: right;
   font-size: 12px;
}.main{
   padding: 0px 20px;
 
   background: #edcb76;  
   
   padding-top: 20px;
}
html{
   scroll-behavior: smooth;
}
.gotop{
   position: fixed;
   width: 30px;
   height: 30px;
   background: #efe08d;
   bottom: 40px;
   right: 50px;
   text-decoration: none;
   text-align: center;
   line-height: 30px;
   border-radius: 30px;
  }.gotop .fa-arrow-up{
color: #9c6c28;
  } 
</style>
</head>
<body>
   <div class="wallet-container text-center">
  <div class="headerr">     
<div class="row"> 
    <a href="#"><i class="fa fa-line-chart"></i><img src="img/steve-jobs.jpg" alt="nth" class="rounded-circle">
     <i class="fa fa-cog" ></i></a>


</div>
<div class="name">   
<strong> <p class="text-center user_name"><?php echo $_SESSION['adminname']; ?> </p></strong>
<a href="#  "><h5 class="text-center balance">0 LTC</h5></a>
<p class="text-center amount">   $0.00</p></div></div>
<div class=" text-center" id="btn-group">
      <a href="receive.php"> <button class="btn btn-outline-light" type="button"><i class="fa fa-arrow-down" ></i><br>Receive</button></a>
     <a href="send.php"> <button class="btn btn-outline-light" type="button"><i class="fa fa-share-square-o" aria-hidden="true"></i><br>&nbsp; Send &nbsp; &nbsp;</button></a>
    <a href="send.php"><button class="btn btn-outline-light" type="button"><i class="fa fa-qrcode"></i><br>Scan QR</button></a>
   
   </div>
  <div class="main">  
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form<span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>Tuesday 19,oct</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div>
   </div>

   
<div class="step">
      <h5>815 USDT received form</h5>
   <div class="tex-history">
   <h6 class="tex-list">Last 24 hours update payment </h6>
   <p>815 USDT received form <span class="float"> .......read more <i class="fa fa-info-circle"></i>
</span></p>
   </div></div> 
   <div class="top"> 
   <a  class="gotop"href="#"><i class="fa fa-arrow-up">   </i></a>
   </div></div>
   </div><!--main-->
</body>
</html>