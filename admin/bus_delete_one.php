<?php

	$_id=$_GET["id"];
	require '../shared/bus_db.php';
	$_obj=new bus_db();
	$res=$_obj->deleteBusOne($_id);
	
	if($res)
	{
		header('location:bus.php');
 	}
	else
	{
        echo 'Record not deleted';
		
	}

?>