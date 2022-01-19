
    <?php
session_start();
include("../../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$del_id=$_GET['del_id'];
/*this is delet quer*/
mysqli_query($con,"delete from deliveryboy_info where deliboy_id='$del_id'")or die("query is incorrect...");
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Manage Delivery Agent</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>User id</th>
                        <th>Name</th>
                        <!--th>last_name</th-->
                        <th>Email</th>
                <th>mobile</th>
                <th>Driving Lisence Number</th>
                <th>Address</th>
                <th>State</th>
	<th><a href="addsuppliers.php" class="btn btn-success">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $sql="SELECT * FROM `deliveryboy_info`";
                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                        echo "<tr>
                        <td>".$row["deliboy_id"]."</td>
                         <td>".$row[ "boy_first_name"].$row["boy_last_name"]."</td>
                          
                           <td>".$row["boy_email"]."</td>
                         <td>".$row["boy_mobile"]."</td>
                         <td>".$row["boy_lisence"]."</td>
                          <td>".$row["boy_address1"]."</td>
                           <td>".$row["boy_address2"]."</td>";
                        echo"<td>
                     
                        <a class='btn btn-danger' href='manageboy.php?del_id=$row[deliboy_id]&action=delete'>Delete<div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                    }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>