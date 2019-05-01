
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$_arr=implode(",",$_POST["chkdel"]);
	require '../shared/arrival_db.php';
	$_obj=new arrival_db();
	$res=$_obj->deleteArrival($_arr);
	
	if($res)
	 {
 		header('location:arrival.php');
	}
	else
	{
        echo 'Record not deleted';
		
		
	}
	
}

?>
