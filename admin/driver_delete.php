
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/driver_db.php';
	$_obj=new driver_db();
	$res=$_obj->deleteDriver($_arr);
	
	if($res)
	{
		
	  header('location:driver.php');
		
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}
?>