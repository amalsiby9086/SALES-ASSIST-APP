<?php
include("page_header.php");
require_once("connectionclass.php");
 
    $email=isset($_SESSION["username"])? $_SESSION["username"]  :"" ;  
    $cpassword=""; 
     
    $password = "" ; 
     
   if(isset($_POST["btn_login"])){

     
    $email=trim($_POST['email']) ;  
    $cpassword=$_POST['cpassword'] ; 
    $oldpassword=$_POST['oldpassword'] ; 
     
    $password = $_POST['password'] ; 
    

     
    $obj=new connectionclass() ;
     $checkusername="select * from user_info where email='$email' and password='$oldpassword'";
   $user=$obj->GetSingleRow($checkusername);
   if($password !=$cpassword)
     {
         $_error["error_message"]="password mismatch";
       
     }
     else if(is_array( $user))
     {
        $obj=new connectionclass() ;
        $qry="update user_info set password='$password'   where email='$email' "; 
                $data1=$obj->Manipulation($qry); 
               // var_dump( $data1);
             //    echo $obj->alert("You are successfully registered","login_register.php");
             $_error["success_message"]="Your password successfully updated";
              
            $email="" ;  
              $cpassword=""; 
             
            $password = "" ; 
        
       
     }
    else 
   {
    $_error["error_message"]="Old Password doesnot exist";
   }
 

}



 ?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Reset Passeord</li>
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
                            <form action="change_password.php" method="post" autocomplete="off">
                                <div class="login-form">
                                    <h4 class="login-title">PASSWORD RESET</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            
                                            <input class="mb-0" type="hidden" name="email" value="<?php echo $email  ?>" readonly  placeholder="Email Address">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Old Password</label>
                                            <input class="mb-0" type="password" required name="oldpassword" placeholder="Old Password">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" required name="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="col-12 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" type="password" required name="cpassword" placeholder="Confirm Password">
                                        </div>
                                        
                                        
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" name="btn_login">Reset Password</button>
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