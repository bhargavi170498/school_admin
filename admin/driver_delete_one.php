 <?php
	$_id=$_GET["id"];
	require '../shared/driver_db.php';
	$_obj=new driver_db();
	$res=$_obj->deleteFacultyOne($_id);
	
	if($res)
	{
		
		header('location:driver.php');
		
	}
	else
	{
        echo 'Record not deleted';
 		
	}
?>