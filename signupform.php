<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title>Online Shopping</title>

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
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
  <form action="signup.php" class="login100-form" method="post">
    <div class="billing-details jumbotron">
    <div class="section-title">
      <h2 class="login100-form-title p-b-49" >Register Here</h2>
    </div>
    
    <div class="form-group1 ">
      <input class="input form-control input-borders" type="text" name="f_name" id="f_name" style="border-radius: 40px" placeholder="First Name">
      <?php
      
      if ( strpos( $fullurl, "signup=empty" )==true ) {
        echo "
                                          <div class='alert alert-warning'>
                                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                              <b><center>All Field should required</center></b>
                                          </div>";
        
      }
      if ( strpos( $fullurl, "signup=char" )==true ) {
      echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This firstname is not valid..!</b>
			</div>
		";
      

    }?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name" style="border-radius: 40px">
      <?php
      if(strpos( $fullurl, "signup=char1" )==true){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>This lastname is not valid..!</center></b>
			</div>
		";}
    ?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="email" name="email"  placeholder="Email" style="border-radius: 40px">
      <?php 
      if(strpos($fullurl,"signup=email")==true){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>This email is not valid..!<center></b>
			</div>
		";
      

    }
    if(strpos($fullurl,"signup=exist")==true)
    {
      echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
    }
      ?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="password" style="border-radius: 40px">
      <?php
      if(strpos($fullurl,"signup=pass1")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>Password is weak</center></b>
        </div>
      ";
        
      }
      ?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password" style="border-radius: 40px">
      <?php
      if(strpos($fullurl,"signup=repass")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>password is not same</center></b>
        </div>
      ";
          
          
      }
      ?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile"style="border-radius: 40px">
      <?php
      if(strpos($fullurl,"signup=mobnotvalid")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>Mobile number  is not valid</center></b>
        </div>
      ";
          
      }
      if(strpos($fullurl,"signup=mobnum")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>Mobile number must be 10 digit</center></b>
        </div>
      ";
          
      }
      
      ?>
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="text" name="address1" id="address1" placeholder="Address" style="border-radius: 40px">
    </div>
    <div class="form-group1">
      <input class="input form-control input-borders" type="text" name="address2" id="address2" placeholder="City" style="border-radius: 40px">
    </div>
    <div class="form-group1">
      <input class="primary-btn btn-block"  value="Sign Up" type="submit" name="signup_button">
    </div>
   <div>
   </div>
    <div class="form-group1"> 
      <a href="index.php" class="text-pad" style=" padding-left: 1%;" >
                                           <i class="fa fa-arrow-left">Back to Home</i>
                                       </a>
                                       <a href="loginform.php" class="text-pad" style="padding-left: 38%;">Already have an Account ? then login</a> </div>
    
   <!--?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( strpos( $fullurl, "signup=empty" )==true ) {
      echo "
                                        <div class='alert alert-warning'>
                                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                            <b><center>All Field should required</center></b>
                                        </div>";
      exit();
    } elseif ( strpos( $fullurl, "signup=char" )==true ) {
      echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This firstname is not valid..!</b>
			</div>
		";
        exit();

    }elseif(strpos( $fullurl, "signup=char1" )==true){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>This lastname is not valid..!</center></b>
			</div>
		";
        exit();

    }elseif(strpos($fullurl,"signup=email")==true){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>This email is not valid..!<center></b>
			</div>
		";
        exit();

    }elseif(strpos($fullurl,"signup=pass1")==true)
    {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>Password is weak</center></b>
			</div>
		";
        exit();
    }
    elseif(strpos($fullurl,"signup==pass2")==true)
    {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>Password is weak<center></b>
			</div>
		";
        exit();
    }
    elseif(strpos($fullurl,"signup=repass")==true)
    {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>password is not same</center></b>
			</div>
		";
        exit();
        
    }
    elseif(strpos($fullurl,"signup=mobnotvalid")==true)
    {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>Mobile number  is not valid</center></b>
			</div>
		";
        exit();
    }
    elseif(strpos($fullurl,"signup=mobnum")==true)
    {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b><center>Mobile number must be 10 digit</center></b>
			</div>
		";
        exit();
    }
    elseif(strpos($fullurl,"signup=success")==true)
    {
        echo "<div class='alert alert-success'>
			
			<b><center>Register Success</center></b>
		</div>";
        exit();
    }
    else{
        echo "";
        exit();
    }
    ?-->

    
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