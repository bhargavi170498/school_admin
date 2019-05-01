 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_id=$_POST["txtid"];
$_name=$_POST["txtnm"];
$_drid=$_POST["txtdrid"];
$_fees=$_POST["txtfees"];
$_route=$_POST["txtroute"];
 
require '../shared/bus_db.php';
$obj=new bus_db();
$res=$obj->insertBus($_id,$_name,$_drid,$_fees,$_route);
if($res)
{
	header('location:bus.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="bus_insert.php">Back</a></button>
	</div>
	';

}

}

?>