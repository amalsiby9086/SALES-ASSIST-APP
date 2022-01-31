<?php
session_start();
include("../../db.php");




include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title"><i class="fa fa-truck"></i>&nbsp Add Truck</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Truck Number</label>
                        <input type="text" id="product_name" required name="truck_no" class="form-control">
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Truck Name</label>
                        <input type="text" id="product_name" required name="truck_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Truck Capacity</label>
                        <input type="text" id="price" name="capacity" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title"><i class="fa fa-male"></i>&nbspAssign Driver</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Driver Name</label>
                         <select class="form-control" id="product_type" name="driver_name">
							 <option style="background-color: #202940">Driver Name</option> 
                        <?php 
                            $sql="SELECT * FROM `deliveryboy_info` WHERE `status`='notassigned'";
                            $result=mysqli_query($con,$sql);
                            while ($row = mysqli_fetch_array(
                                $result,MYSQLI_ASSOC)):; 
                               
                    ?>
                        <option value="<?php echo $row["deliboy_id"];?>" style="background-color: #202940">
                            <?php echo $row["boy_first_name"].$row["boy_last_name"];?></option>
                    <?php 
                        endwhile; 
                        // While loop must be terminated
                    ?>
                </select>

                             
                        <!--input type="number" id="product_type" name="product_type" required="[1-6]" class="form-control"-->
                      </div>
                    </div>
                 
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Add Truck</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
      
if(isset($_POST['btn_save']))
{
$truck_no=$_POST['truck_no'];
$truck_name=$_POST['truck_name'];
$capacity=$_POST['capacity'];
$driver_name=$_POST['driver_name'];

$number="/^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$/";
      if(empty($truck_no) || empty($truck_name) || empty($capacity) || empty($driver_name))
        {
      
          echo "
              <div class='alert alert-warning'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
              </div>
          ";
        echo "<script>setTimeout(function(){window.location.href = 'http://localhost/sales1/admin/admin/addtruck.php';}, 2500);
     </script>";
          exit();
      } 
      else
    {
          if(!preg_match($number,$truck_no))
          {
          echo "
              <div class='alert alert-warning'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <b>this $truck_no is not valid..!</b>
              </div>
          ";
      echo "<script>setTimeout(function(){window.location.href = 'http://localhost/sales1/admin/admin/addtruck.php';}, 2500);
      </script>";
          exit();
      }
          //existing email address in our database
      $sql = "SELECT truck_id FROM truck_info WHERE truck_no = '$truck_no' LIMIT 1" ;
      $sq = "SELECT `truckdriv_id` FROM `truvkdrier_info` WHERE `driver_id`='$driver_name'  LIMIT 1" ;
      $check_query = mysqli_query($con,$sql);
      $check_query1 = mysqli_query($con,$sq);
      $count_no = mysqli_num_rows($check_query);
      $count_name = mysqli_num_rows($check_query1);
      if($count_no > 0)
      {
          echo "
              <div class='alert alert-danger'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <b>Truck is already inserted. Try to insert another truck.</b>
              </div>
          ";
      echo "<script>setTimeout(function(){window.location.href = 'http://localhost/sales1/admin/admin/addtruck.php';}, 2500);
     </script>";
          exit();
      }
      elseif($count_name>0)
      {
          echo "
              <div class='alert alert-danger'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <b>The Driver is already assigned to another truck</b>
              </div>
          ";
     echo "<script>setTimeout(function(){window.location.href = 'http://localhost/sales1/admin/admin/addtruck.php';}, 2500);
     </script>";
  
      }
      else
      {
          mysqli_query($con,"INSERT INTO `truck_info`(`truck_no`, `truckbrand_name`, `truck_capacity`) VALUES ('$truck_no','$truck_name','$capacity')") 
              or die ("Query 1 is inncorrect........");
        
                      $sql1="SELECT truck_id FROM truck_info WHERE truck_no = '$truck_no'" ;
                      $results=mysqli_query($con,$sql1);
                        if(mysqli_num_rows($results)>0)
                        {
                            while($rows=mysqli_fetch_assoc($results))
                            {
                               $truck_id=$rows["truck_id"];
                            }
                        }
            mysqli_query($con,"INSERT INTO `truvkdrier_info`(`trucker_id`, `driver_id`) VALUES ('$truck_id','$driver_name')") or die ("Query 1 is inncorrect........");
            mysqli_query($con,"UPDATE `deliveryboy_info` SET `status`='assigned' WHERE deliboy_id='$driver_name'") or die ("Query 2 is inncorrect........"); 
        echo "
              <div class='alert alert-warning'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <b>Truck is added</b>
              </div>
          ";
      echo "<script>setTimeout(function(){window.location.href = 'http://localhost/sales1/admin/admin/addtruck.php';}, 2500);
     </script>";
              mysqli_close($con);
      }
  
    }
}
  ?>
  <?php
include "footer.php";
?>