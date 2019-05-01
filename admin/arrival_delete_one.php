<?php

	$_id=$_GET["id"];
	require '../shared/arrival_db.php';
	$_obj=new arrival_db();
	$res=$_obj->deleteArrivalOne($_id);
	
	if($res)
	{
		header('location:arrival.php');
	}
 	else
	{
        echo 'Record not deleted';
		
	}

?>