<?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";
 if (isset($_SESSION['admin_name'])) : 
  $email=$_SESSION['admin_name'];
 endif

//mysqli_query($con,"insert into user_info(first_name, last_name,email,password,mobile,address1,address2) values ('$first_name','$last_name','$email','$user_password','$mobile','$address1','$address2')") 
			//or die ("Query 1 is inncorrect........"); 
//mysqli_close($con);



?>
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add User</h4>
                  <p class="card-category">profile</p>
                </div>
                <div class="card-body">
                  <!--form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control" required>
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
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="phone" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" id="city"  class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="country" id="country" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add</button>
                    
                  </form-->
                  <?php 
                        $sql="SELECT * FROM `deliveryboy_info` where boy_email= '$email'";
                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                             // $delid=$row["deliboy_id"];
                              $firstname=$row[ "boy_first_name"];
                              $lastname=$row["boy_last_name"];
                              $mobile=$row["boy_mobile"];
                              $address1=$row["boy_address1"];
                              $state=$row["boy_address2"];
                              $lisence=$row["boy_lisence"];
                            }
                         }?>
                 <table width="1202" >
  <tbody>
    <tr>
      <td width="489" height="61"><label style="font-weight:800;">First Name :</label></td>
		<td width="701"><label style="font-weight:800;"><?php echo $firstname; ?></label></td>
    </tr>
    <tr>
		<td height="61"><label style="font-weight:800;">Last Name :</label></td>
		<td><label style="font-weight:800;"><?php echo $lastname; ?></label></td>
    </tr>
    <tr>
		<td height="61"><label style="font-weight:800;">Email :</label></td>
      <td><label style="font-weight:800;"><?php echo $email ?></label></td>
    </tr>
    <tr>
      <td height="61"><label style="font-weight:800;">Mobile :</label></td>
      <td><label style="font-weight:800;"><?php echo $mobile; ?></td>
    </tr>
    <tr>
      <td height="61"><label style="font-weight:800;">Driving Lisence :</label></td>
		<td><label style="font-weight:800;"><?php echo $lisence; ?></label></td>
    </tr>
    <tr>
		<td height="61"><label style="font-weight:800;">Adddress :</label></td>
		<td><label style="font-weight:800;"><?php echo $address1; ?></label></td>
    </tr>
    <tr>
		<td height="61"><label style="font-weight:800;">State :</label></td>
      <td><label style="font-weight:800;"><?php echo $state; ?></label></td>
    </tr>
  </tbody>
</table>
<?php
echo "

<a class='btn btn-primary pull-right' href='updateprofile.php?fname=$firstname&lname=$lastname&email=$email&mobile=$mobile&lisence=$lisence&address=$address1&state=$state'>Update</a>" ?>

                </div>
              </div>
            </div>
        </div>
      </div>
      <?php  //success message
            if(isset($_POST['success'])) {
            $success = $_POST["success"];
            echo "<div class='col-md-12 col-xs-12' id='product_msg'>
          <div class='alert alert-success'>
            <a href='#'' class='close' data-dismiss='alert' aria-label='close'>×</a>
            <b>Update Sucessfully..!</b>
          </div>
        </div>";
            }?>
      <?php
include "footer.php";
?>