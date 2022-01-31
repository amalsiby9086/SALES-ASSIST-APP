<?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";

$_GET['fname'];
$_GET['lname'];
$email=$_GET['email'];
$_GET['mobile'];
$_GET['lisence'];
$_GET['address'];
$_GET['state'];

?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Profile</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $_GET['fname']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control" value="<?php echo $_GET['lname']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" disabled="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_GET['mobile']; ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Lisence Number</label>
                          <input type="text" id="phone" name="lisence" class="form-control" value="<?php echo $_GET['lisence']; ?>" disabled="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" id="city"  class="form-control" value="<?php echo $_GET['address']; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">State</label>
                          <input type="text" name="state" id="country" class="form-control"  value="<?php echo $_GET['state']; ?>" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Update</button>
                    <a class='btn btn-primary pull-left' href='myprofile.php'>Cancel</a>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
      if(isset($_POST['btn_save']))
{
  if(!$con)
  die ("Query 1 is inncorrect........");
//$delid=$_Get['delid'];
$f_name=$_POST['first_name'];
$l_name=$_POST['last_name'];
//$mail=$_POST['email'];
$mobile_phn=$_POST['phone'];
//$lis=$_POST['lisence'];
$address1=$_POST['address'];
$state1=$_POST['state'];

$name = "/^[a-zA-Z ]+$/";
//$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
//$lisence= "/^[A-Z](?:\d[- ]*){14}$/";
    if(!empty($f_name) || !empty($l_name) || !empty($mobile_phn)|| !empty($address1) || !empty($state1))
    {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
  
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
    
		exit();
	}	
	if(!preg_match($number,$mobile_phn)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile_phn is invalid</b>
			</div>
		";
  
		exit();
	}
	if(!(strlen($mobile_phn) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
    
		exit();
	}
	//existing email address in our database
/*	$sql = "SELECT deliboy_id FROM deliveryboy_info WHERE boy_email = '$email'  LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
                        if(mysqli_num_rows($check_query)>0)
                        {
                            while($row=mysqli_fetch_assoc($check_query))
                            {
                              $boyemail= $row["boy_email"];
                            }
                         }
	if($email!=$boyemail ){
    
    if($count_email > 0)
    {
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address or Lisence  is already available Try Another email address or lisence</b>
			</div>
		";
    echo "<script>setTimeout(function(){window.location.href = 'http://localhost/Sales-assist-app/delivery/delivery/updateprofile.php';}, 5000);
   </script>";
		exit();
    }
    exit();
	} */
  else 
  {
   
    //"UPDATE `deliveryboy_info` SET `boy_first_name`='',`boy_last_name`='',`boy_mobile`='',`boy_address1`='',`boy_address2`='$state1' WHERE 'deliboy_id'='$delid'"; 
			 
    $sql="UPDATE `deliveryboy_info` SET `boy_first_name`='$f_name',`boy_last_name`='$l_name',`boy_mobile`='$mobile_phn',`boy_address1`='$address1',`boy_address2`='$state1' WHERE `boy_email`='$email'";
		 
			
     /* echo "
			/*<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Update is Sucessfully</b>
			</div>*
		";*/
    if(mysqli_query($con,$sql)){
    echo "<script type='text/javascript'>
window.location.href = 'http://localhost/sales1/delivery/delivery/summit1.php?success=1'</script>";
    }
            mysqli_close($con);
    
        }
    }  
  
}  
?>

      <?php
include "footer.php";
?>