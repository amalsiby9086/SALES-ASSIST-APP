
<?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";
//include "supplier_form.php";
 ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Delivery Agent</h4>
                  <p class="card-category">profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="f_name" class="form-control" required>

                           
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="l_name" id="l_name"  class="form-control" required>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">confirm Password</label>
                          <input type="password" id="password" name="repassword" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="mobile" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Driving Liscence Number</label>
                          <input type="text" id="phone" name="lisence" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address1</label>
                          <input type="textarea" name="address1" id="city"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" name="address2" id="country" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add</button>
                    
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
       
      <?php


if(isset($_POST['btn_save'])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
    $lis= $_POST['lisence'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
    
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
    $lisence= "/^[A-Z](?:\d[- ]*){14}$/";
    if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2))
    {
	
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
      echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	} 
    else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";   
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
    
    exit();
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
    if(!preg_match($lisence,$lis)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Lisence number $lis is not valid</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT deliboy_id FROM deliveryboy_info WHERE boy_email = '$email' OR boy_lisence = '$lis'  LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address or Lisence  is already available Try Another email address or lisence</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
		exit();
	} else {
		
		mysqli_query($con,"INSERT INTO `deliveryboy_info`(`boy_first_name`, `boy_last_name`, `boy_email`, `boy_password`, `boy_mobile`, `boy_address1`, `boy_address2`, `boy_lisence`,`status`) VALUES ('$f_name ','$l_name','$email','$password','$mobile','$address1','$address2','$lis','notassigned')") 
			or die ("Query 1 is inncorrect........"); 
      echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Data is added</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/admin/admin/addsuppliers.php';}, 5000);
   </script>";
            mysqli_close($con);
        }
    }   
}  

	 
 ?>
      <?php
      
include "footer.php";
?>