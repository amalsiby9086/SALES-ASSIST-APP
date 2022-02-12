<?php 
session_start();
include "db.php";
if(isset($_POST['update'])&&isset($_SESSION["uid"]))
{
  if(!$con)
  die ("Query 1 is inncorrect........");
//$delid=$_Get['delid'];
$uid=$_SESSION["uid"];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
//$mail=$_POST['email'];
$mobile_phn=$_POST['mobile'];
//$lis=$_POST['lisence'];
$address1=$_POST['address1'];
$city=$_POST['city'];
$name = "/^[a-zA-Z ]+$/";
//$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
//$lisence= "/^[A-Z](?:\d[- ]*){14}$/";
   
		if(!preg_match($name,$f_name)){
			echo "<script type='text/javascript'>
			window.location.href = 'http://localhost/sales1/update_profile.php?update=char'</script>";
					exit();
			
	
	}
	if(!preg_match($name,$l_name)){
		echo "<script type='text/javascript'>
window.location.href = 'http://localhost/sales1/update_profile.php?update=char1'</script>";
		exit();
    
	
	}	
    
	if(!preg_match($number,$mobile_phn)){
		echo "<script type='text/javascript'>
window.location.href = 'http://localhost/sales1/update_profile.php?update=mobnotvalid'</script>";
		exit();
	}
	if(!(strlen($mobile_phn) == 10)){
		echo "<script type='text/javascript'>
window.location.href = 'http://localhost/sales1/update_profile.php?update=mobnum'</script>";
		exit();
    
	}
	
	else
	{
		 
		 
		 
		  $sql= "UPDATE `user_info` SET `first_name`='$f_name',`last_name`='$l_name',`mobile`='$mobile_phn',`address1`='$address1',`address2`='$city' WHERE `user_id`='$uid'";
			   
				  
		  
		  if(mysqli_query($con,$sql)){
			echo "<script type='text/javascript'>
			window.location.href = 'http://localhost/sales1/update_profile.php?update=sucess'</script>";
	  
		  }
				  mysqli_close($con);
		  
	}

}  
?>