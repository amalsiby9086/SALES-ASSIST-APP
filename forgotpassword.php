<!--?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<!--div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
						
                            <!--form onsubmit="return false" id="login" class="login100-form ">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Login Here</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                       <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label for="email">Password</label>
                                        <input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
                                    </div>
                                    
                                    <div class="text-pad" >
                                       <a href="#">
                                           forget password ?
                                       </a>
                                        
                                    </div>
                                    
                                        <input class="primary-btn btn-block"   type="submit"  Value="Login">
                                        
                                        <div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>
                                    
                                    	
                                        
                                    

                                </div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					<!--/div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			<!--/div-->
            <?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

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
        /*margin-top: 80px;
        padding-right: 400px;
    padding-left: 400px;
    margin-right: auto;
    margin-left: auto;
	margin-bottom: -30px;*/
    margin-top: 80px;
    padding-right: 400px;
    padding-left: 280px;
    margin-right: auto;
    margin-left: auto;
    /*margin-bottom: -30px;*/
    
    }


/*.login100-form1
    {    border: 5px outset red;
    background-color: lightblue;
    width: 50%;
    margin-left: 597px;

    }*/
    .login100-form1 {
    /*  */
    /*background-color: #9400d1e8;
    width: 44%;
    height: 491px;
    margin-left: 597px;*/
    background-color: #9400d1e8;
    width: 46%;
    height: 412px;
    margin-left: 597px;
}
    .form-group1 {
        padding-left: 3cm;
    padding-right: 3cm;
    margin-bottom: 15px;
	
}
.login100-form2{
    width: 87%;
}
.label1
{
    
   /* margin-left: 154px;*/
    font-size: 26px;
    padding-top: 210px;
}
.textalign
{
    padding-left: 41px;

}
.anchor1:hover
{
    color:#2e2d93;

}
.anchor1
{
    color:white;

}
 </style>

<div class="container1">
    
<form action="passwordrecover.php" id="login" class="login100-form2" style="float:left" method="post">
									<div class="billing-details jumbotron" style="height: 412px;">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Forgot Password</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group1">
                                      &nbsp <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required style="border-radius: 40px">
                                    </div>
                                    
                                     
                                    <div class="form-group1" >
                                    &nbsp&nbsp<a href="loginform.php" class="fa fa-arrow-left">
                                           Back to login
                                       </a>
                                       
                                        
                                    </div>
                                    <div class="form-group1">
                                        <input class="primary-btn btn-block" name="reset_button"   type="submit"  Value="Login"></div>
                                        <!--div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div-->
                                    
                                    	
                                        <?php 
                               $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                  if ( strpos( $fullurl, "reset=failure" )==true ) {

                                    echo "<span style='color:red;'><center><b>Invalid email address..!</b></center></span>'";
                                     }
                                     if ( strpos( $fullurl, "reset=notfound" )==true ) {

                                        echo "<span style='color:red;'><center><b>User Not Found..!</b></center></span>'";
                                         }
                                         if ( strpos( $fullurl, "reset=success" )==true ) {

                                            echo "<span style='color:green;'><center><b>An email has been sent</b></center></span>'";
                                             }
                                        ?>
                                    

                                </div>
                               
								</form>
                                <form class="login100-form1 ">
                                   <div class="label1"> <a href="signupform.php" class="anchor1"><span class="textalign" ><i class="fa fa-user">Create Account</i></span></a></div>
                                </form>
                                   
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