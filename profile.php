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
</style>
<?php
include "header.php";
?>
<div class="profile_div">
<div class="section-title1">
      <label class="login100-form-title p-b-48" >My Profile</label>
    </div>
	<div class="table_format">
		<table width="1020" height="599" border="0">
  <tbody>
    <tr>
		<td width="357" height="48"><div class="text_align"><label class="label_text">Name</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="611"><div class="text_align2"><label class="label_text"><?php echo $row["first_name"];echo '&nbsp'; echo $row["last_name"]; ?></label></div></td>
    </tr>
    <tr>
      <td width="357" height="48"><div class="text_align"><label class="label_text">E-mail</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><?php echo $row["email"];?></label></div></td>
    </tr>
    <tr>
		<td width="357" height="48"><div class="text_align"><label class="label_text">Mobile Number</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><?php echo $row["mobile"]; ?></label></div></td>
    </tr>
    <tr>
     <td width="357" height="48"><div class="text_align"><label class="label_text">Address</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><?php echo $row["address1"]; ?></label></div></td>
    </tr>
    <tr>
      <td width="357" height="48"><div class="text_align"><label class="label_text">City</label></div></td>
		<td><label class="label_text">:</label></td>
      <td width="30"><div class="text_align2"><label class="label_text"><?php echo $row["address2"]; ?></label></div></td>
    </tr>
    <tr >
		<td width="357" height="48">&nbsp</td>
		<td ><div class="text_align1"><label class="label_text"><a class="btn btn-primary pull-right" href='update_profile.php'>Update</a></label></div></td>
      <td width="30">&nbsp</td>
			
      
    </tr>
    
  </tbody>
</table>

	</div>
</div>
<?php
include "footer.php";
?>
