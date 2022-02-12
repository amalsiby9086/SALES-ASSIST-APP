<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- font-awesome -->
      <link rel="stylesheet" href="src/css/font-awesome-4.6.3/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
      <!-- animate css -->
      <link rel="stylesheet" href="src/css/animate.css-master/animate.min.css">
      <!-- My own style -->
      <link rel="stylesheet" href="src/css/style.css">
      <!-- Progress bar -->
      <link rel='stylesheet' href='src/css/nprogress.css'/>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>
#navigation {
    background: #FF4E50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
#header {
    background: #780206;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
#top-header {
    background: #870000;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
#footer {
    background: #7474BF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #1E1F29;
}
#bottom-footer {
    background: #7474BF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.footer-links li a {
    color: #1E1F29;
}
.mainn-raised {
    margin: -7px 0px 0px;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.glyphicon {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon-chevron-left:before {
    content: "\f053"
}
.glyphicon-chevron-right:before {
    content: "\f054"
}
</style>
</head>

<style>
    .container1 {
        padding-right: 300px;
    padding-left: 300px;
    margin-right: auto;
    margin-left: auto;
    /*margin-bottom: -30px;*/
    margin-top: 20px;
    
    }
    .form-group1 {
    padding-left: 4cm;
    padding-right: 4cm;
    margin-bottom: 15px;
	
}
 </style>
<div class="container1">
    
<?php
  include "db.php";
  if(isset($_SESSION["uid"])){
      $sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
      $query = mysqli_query($con,$sql);
      $row=mysqli_fetch_array($query);
  

    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo ' <form action="signup.php" class="login100-form" method="post">
    <div class="billing-details jumbotron">
    <div class="container thanks">
  <div class="row">
    <div class="col s12 m3">

    </div>

  <div class="col s12 m6">
  <div class="card center-align">
     <div class="card-image">
       <img src="img/thanks.png" class="responsive-img" alt="">
     </div>
     <div class="card-content center-align">
       <h5>Thank you for your purchase</h5>
       <p style="margin-left: 40px;" >Your order is on its way Dear :
     <h5 class="green-text">'.$row["first_name"].' &nbsp'.$row["last_name"].'</h5></p>
     </div>
   </div>

   <div class="center-align">
     <a href="details.php" class="button-rounded blue btn waves-effects waves-light">Details</a>
     <a href="index.php" class="button-rounded btn waves-effects waves-light">Home</a>
   </div>
  </div>
  <div class="col s12 m3">

  </div>
 </div>
</div>';
   
  
}
?>
    
  </form>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="signup_msg"> </div>
    <!--Alert from signup form--> 
  </div>
  <div class="col-md-2"></div>
</div>
</div>
</div>
</html>