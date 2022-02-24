<?php
include("page_header.php");
require_once("connectionclass.php");
require_once("email_helper.php");

    $email="" ;  
   
   if(isset($_POST["btn_submit"])){
 
    $email=trim($_POST['email']) ;  
      
    $obj=new connectionclass() ;
     $checkusername="select count(*)  from user_info where email='$email'";
   $resultcount=$obj->GetSingleData($checkusername);
     if($resultcount>0)
     {
        $subject="Password Recovery";
        $body ="Please click on the following link to reset your password.";
        $body.='<a href="http://localhost/sales/resetpassword.php?email='.$email.'">RESET PASSWORD </a>';
        send_mail($subject,$body,$email);
        $_error["success_message"]="Please check your email for password reset link";
         
       
     }
     
      else
    {
 
        $_error["error_message"]="Email does not exist";
     
     
    }
 

}



 ?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                <?php
if(isset($_error["error_message"])){
    ?>
<div class="alert alert-danger"><?php echo $_error["error_message"] ?></div>
    <?php
}
if(isset($_error["success_message"])){
    ?>
<div class="alert alert-success"><?php echo $_error["success_message"] ?></div>
    <?php
}
                            ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                          
                            <!-- Login Form s-->
                            <form action="forgotpassword.php" method="post" autocomplete="off">
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" name="email" required placeholder="Email Address">
                                        </div>
                                         
                                        
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" name="btn_submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                         
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            <?php
require_once("footer.php");
 ?>