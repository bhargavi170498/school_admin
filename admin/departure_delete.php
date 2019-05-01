
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/departure_db.php';
	$_obj=new departure_db();
	$res=$_obj->deleteDeparture($_arr);
	
	if($res)
	{
		header('location:departure.php');
 	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
