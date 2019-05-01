
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/route_db.php';
	$_obj=new route_db();
	$res=$_obj->deleteRoute($_arr);
	
	if($res)
	{
		header('location:route.php');
	}
	else
	{
        echo 'Record not deleted';
		
	}
	
}

?>
