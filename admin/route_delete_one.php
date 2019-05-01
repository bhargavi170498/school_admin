<?php

	$_id=$_GET["id"];
	require '../shared/route_db.php';
	$_obj=new route_db();
	$res=$_obj->deleteRouteOne($_id);
	
	if($res)
	{
		header('location:route.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}

?>