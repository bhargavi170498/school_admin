
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/bus_db.php';
	$_obj=new bus_db();
	$res=$_obj->deleteBus($_arr);
	
	if($res)
	{
 		header('location:bus.php');
	}
	else
	{
        echo 'Record not deleted';
	
		
	}
	
}

?>
