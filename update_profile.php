<style>
    .profile_div
    {
        width:75%;
        height:100%;
        background-color:#eee;
        margin-left: 12%;
        margin-top:20px;
        margin-bottom:20px;
        margin-right:12%;
    }
    .section-title1 {
    position: relative;
    padding-top: 30px;
    }
	.table_format{
		width:100%;
		position: relative;
        padding-left: 87px;
        padding-right: 87px;
        padding-top: 29px;
	}
    .p-b-48 {
    padding-bottom: 0px;
}
	.label_text
	{
		font-family: Poppins-Bold;
		font-size: 18px;
		text-align: center;
	}
	.text_align{
		margin-left: 75px;
	}
	.text_align1{
		margin-left: 150px;
	}
    .text_align2{
		margin-left: 0px;
	}
  .input_text
  {
    background-color:#eee;
    width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  
  border: none;
  border-bottom: 2px solid red;
  }
</style>
<?php
include "header.php";
?>
<div class="profile_div">
<div class="section-title1">
      <label class="login100-form-title p-b-48" >My Profile</label>
    </div>
	<div class="table_format">
    <form method="post" action="profile_update.php">
		<table width="1020" height="599" border="0">
  <tbody>
    <tr>
		<td width="357" height="48"><div class="text_align"><label class="label_text">First Name</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="611"><div class="text_align2"><label class="label_text"><input class="input_text" type="text" id="fname" name="fname" value="<?php echo $row["first_name"]; ?>"></label></div></td>
    </tr>
    <tr>
		<td width="357" height="48"><div class="text_align"><label class="label_text">Last Name</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="611"><div class="text_align2"><label class="label_text"><input class="input_text" type="text" id="fname" name="lname" value="<?php  echo $row["last_name"]; ?>"></label></div></td>
    </tr>
    <tr>
      <td width="357" height="48"><div class="text_align"><label class="label_text">E-mail</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><input class="input_text" type="text" id="fname" name="email" value="<?php echo $row["email"];?>" disabled="">
                        </div></label></div></td>
    </tr>
    <tr>
		<td width="357" height="48"><div class="text_align"><label class="label_text">Mobile Number</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><input class="input_text" type="text" id="fname" name="mobile" value="<?php echo $row["mobile"];?>"></label></div></td>
    </tr>
    <tr>
     <td width="357" height="48"><div class="text_align"><label class="label_text">Address</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><textarea style="resize: none ;" cols="22.8" class="input_text" type="text" id="fname" name="address1" value=""><?php echo $row["address1"];?></textarea></label></div></td>
    </tr>
    <tr>
      <td width="357" height="48"><div class="text_align"><label class="label_text">City</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><input class="input_text" type="text" id="fname" name="city" value="<?php echo $row["address2"];?>"></label></div></td>
    </tr>
    <tr >
		<td width="357" height="48"><div style="margin-left: 200px;"><label class="label_text"><a class="btn btn-primary pull-right" href='profile.php'>Cancel</a></label></div></td>
		<td colspan="2">
        <div style="margin-left: 200px;"><label class="label_text"><input class='btn btn-primary pull-right' type='submit' name='update' value='Update'></label></div>
        </td>
      
			
      
    </tr>
    <?php
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( strpos( $fullurl, "update=empty" )==true ) {
      echo "
                                        <div class='alert alert-warning'>
                                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                            <b><center>All Field should required</center></b>
                                        </div>";
      
    }
    if ( strpos( $fullurl, "update=char" )==true ) {
      echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This firstname is not valid..!</b>
			</div>
		";
      

    }
    if(strpos( $fullurl, "update=char1" )==true){
      echo "
    <div class='alert alert-warning'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <b><center>This lastname is not valid..!</center></b>
    </div>
  ";}
  if(strpos($fullurl,"update=mobnotvalid")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>Mobile number  is not valid</center></b>
        </div>
      ";
          
      }
      if(strpos($fullurl,"update=mobnum")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center>Mobile number must be 10 digit</center></b>
        </div>
      ";
          
      }
      if(strpos($fullurl,"update=sucess")==true)
      {
          echo "
        <div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b><center><span style='color:green;'><center><b>Congratulations! Registration is successfully done.</b></center></span></center></b>
        </div>
      ";
      }
    ?>
  </tbody>
</table>
</form>
	</div>
</div>
<?php
include "footer.php";
?>
