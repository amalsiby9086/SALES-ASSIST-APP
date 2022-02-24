<?php

require_once("header.php");


 ?>





      <div class="content">
        <div class="container-fluid">
         
         
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Product List</h4>
                  
                </div>
                <div class="card-body table-responsive">
                <a href="add_products.php"  class="btn btn-danger float-right">Create Product</a>

                  <table class="table table-hover table-bordered">
                    <thead class="text-warning">
                      <th class="text-center">SL NO.</th>
                      <th class="text-center">PRODUCT IMAGE</th>
                      <th class="text-center">PRODUCT NAME</th>
                      <th class="text-center">BRAND</th>
                      <th class="text-center">GRADE</th>
                      <th class="text-center">PRICE</th>
                      <th class="text-center">ACTIONS</th>
                      
                    </thead>
                    <tbody>

                    <?php

require_once("../connectionclass.php");
$obj=new ConnectionClass();
 

$qry="SELECT * FROM products p join categories c on(c.cat_id = p.product_cat) join brands b on(b.brand_id=p.product_brand)  ";

$products= $obj->GetTable($qry);
 $i=0;
foreach($products as $p){
  $i++;
  ?>

<tr>
                        <td><?php echo $i  ?></td>
                        <td><img src="<?php echo $p["product_image"]  ?>" width="200"  /> </td>
                        <td><?php echo $p["product_title"]  ?> <br>
                            <small><?php echo $p["product_desc"]  ?></small><br>
                            <i>Keywords: <?php echo $p["product_keywords"]  ?></i>

                      </td>
                        <td><?php echo $p["cat_title"]  ?></td>
                        <td><?php echo $p["brand_title"]  ?></td>
                        <td><?php echo $p["product_price"]  ?></td>
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
