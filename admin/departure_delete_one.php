<?php

	$_id=$_GET["id"];
	require '../shared/departure_db.php';
	$_obj=new departure_db();
	$res=$_obj->deleteDepartureOne($_id);
	
	if($res)
	{
		header('location:departure.php');
	}
 	else
	{
        echo 'Record not deleted';
		
	}

?>