 <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_rno=$_POST["txtrno"];
$_name=$_POST["txtnm"];
$_add=$_POST["txtadd"];
$_parent_nm=$_POST["txtpnm"];
$_p_email=$_POST["txtpemail"];
$_p_mno=$_POST["txtpmno"];
$_gen=$_POST["selgen"];
$_std=$_POST["txtstd"];
$_class=$_POST["selclass"];
$_dob=$_POST["txtdob"];
$_type=$_POST["seltype"];
$_busid=$_POST["txtbid"];
$_arrival=$_POST["txtarr"];
$_password=rand(1000,9999);
//$_pic=$_POST["txtpic"];
$_pic="../resources/student/".basename($_FILES["txtpic"]["name"]);
if(move_uploaded_file($_FILES["txtpic"]["tmp_name"] , $_pic ))
{
require '../shared/student_db.php';
$obj=new student_db();
$res=$obj->insertStudent($_rno,$_name,$_password,$_add,$_parent_nm,$_p_email,$_p_mno,$_gen,$_std,$_class,$_dob,$_pic,$_type,$_busid,$_arrival); 
if($res)
{
	header('location:student.php');
}
else
{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Some Error Occured !!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_insert.php">Back</a></button>
	</div>
	';
}
}
else{
	echo '<br><br><br><br><br><br>
	<div align="center"  class="container jumbotron alert-danger "><h1><span class="glyphicon glyphicon-alert"></h1>
	<h2> Please Select Image!!!<br>Try Again</h2>
	<br><button class="btn btn-default btn-lg"><a href="student_insert.php">Back</a></button>
	</div>
	';
	echo "INSERT INTO student_tbl VALUES (".$_rno.",'".$_name."','".$_password."','".$_add."','".$_parent_nm."','".$_p_email."','".$_p_mno."',".$_gen.",".$_std.",'".$_class."','".$_dob."','".$_pic."','".$_type."','".$_busid."','".$_arrival."')";

	
}

	
}

?>


