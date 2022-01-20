
  <?php
 session_start();
include("./includes/db.php");
if (isset($_POST['re_password']))
  {
   // $email=$_SESSION['admin_email'];
    if (isset($_SESSION['admin_name']))
    {
    $email=$_SESSION['admin_name'];
    }
  $old_pass = $_POST['old_pass'];
  $new_pass = $_POST['new_pass'];
  $re_pass = $_POST['re_pass'];
  $sql = "select * from `deliveryboy_info` where boy_password='$old_pass' and boy_email='$email'" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){

    if ($new_pass == $re_pass)
      {
        $pass = $re_pass;
      $update_pwd = mysqli_query($con,"UPDATE deliveryboy_info set boy_password='$pass' where boy_email='$email'");
      echo "<script>alert('Update Sucessfully'); </script>";
      }
      else
      {
      echo "<script>alert('Your new and Retype Password is not match'); </script>";
      }
    }
    else
    {
    echo "<script>alert('Your old password is wrong'); </script>";
    }
  }
 
include "sidenav.php";
include "topheader.php";

?>
      <!-- End Navbar -->
   <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Change Password</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form method="post" action="profile.php">
                    <div class="row">
                      <div class="col-md-5">
                        <!--div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">
                            <?php  if (isset($_SESSION['admin_name'])) : ?><?php echo $_SESSION['admin_name']; ?>
             <?php endif ?>
                          
                        </label>
                          <input type="text" class="form-control" disabled="">
                        </div-->
                      </div>
                     <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">enter old password</label>
                          <input type="text" class="form-control" name="old_pass" id="npwd">
                        </div>
                      </div>
                    
                  
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Change Password Here</label>
                          <input type="text" class="form-control" name="new_pass" id="npwd">
                        </div>
                      </div>
                     
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">confirm Password Here</label>
                          <input type="text" class="form-control" name="re_pass" id="npwd">
                        </div>
                      </div>
               
                    <button class="btn btn-primary pull-right" type="submit" name="re_password">Update Profile</button>
                   
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
      <?php
include "footer.php";
?>