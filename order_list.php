<?php

require_once("header.php");


 ?>





      <div class="content">
        <div class="container-fluid">
         
         
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">New Order List</h4>
                  
                </div>
                <div class="card-body table-responsive">
               
                  <table class="table table-hover table-bordered">
                    <thead class="text-warning">
                      <th class="text-center">SL NO.</th>
                      <th class="text-center">CUSTOMER NAME</th>
                      <th class="text-center">ADDRESS</th>
                      <th class="text-center">DATE</th>
                      <th class="text-center">AMOUNT</th>
                      
                      <th class="text-center">ACTIONS</th>
                      
                    </thead>
                    <tbody>

                    <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();
 

$qry="SELECT * FROM orders o join user_info  u on(u.user_id = o.user_id)  where p_status='paid'  ";

$orders= $obj->GetTable($qry);
 $i=0;
foreach($orders as $p){
  $i++;
  ?>

<tr>
                        <td><?php echo $i  ?></td>
                        <td><?php echo $p["first_name"]," ".$p["last_name"]  ?>  
                          

                      </td>
                      <td>   <?php echo $p["address1"]  ?> <br>
                            <i>pin: <?php echo $p["pin"]  ?></i></td>
                      <td class="text-center"><?php echo $p["order_date"]  ?></td>
                        <td  class="text-center"><?php echo $p["total_amount"]  ?></td>
                        
                        <td></td>
                         
                      </tr>



<?php

}
?>



                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
     
     
     
     
      <?php

require_once("footer.php");


 ?>
