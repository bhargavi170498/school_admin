<?php


class bus_db
{
	private static $con=null;
		public static function connect()
		{
			self::$con=mysqli_connect('localhost','root','','school_db');
			return self::$con;
		}
	 	
		public static function disconnect()
		{
			mysqli_close(self::$con);
			self::$con=null;
		}
		
		
		public function getBusDetails()
		{
			$cnn=bus_db::connect();
			$sql="select * from bus_tbl";
			$res=$cnn->query($sql);
			return $res;
			bus_db::disconnect();
		
		}
		public function getBus($_bid)
		{
			$cnn=bus_db::connect();
			$sql="select * from bus_tbl where bus_id='".$_bid."'";
			$res=$cnn->query($sql);
			return $res;
			bus_db::disconnect();
		
		}

		 public function insertBus($_id,$_name,$_drid,$_fees,$_route)
		{
			$cnn=bus_db::connect();
			
			$sql="INSERT INTO material_tbl VALUES (". $_id .",'" . $_name . "','" . $_drid . "','" . $_fees . "','" . $_route . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			bus_db::disconnect();
		
		}
		
	/*	public function getPendingMaterial()
		{
			$cnn=material_db::connect();
			$sql="select * from material_tbl where material_approve='pending' ";
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		
        }
    
       

		public function updateMaterial($_id,$_title,$_desc,$_url,$_email,$_year,$_address,$_approve)
		{
			
			$cnn=material_db::connect();
			$sql="update material_tbl set pk_material_id=".$_id.",material_title='".$_title."',material_url='".$_url."',fk_email_id='".$_email."',fk_student_year=".$_year.",material_address='".$_address."',material_approve='".$_approve."'  where pk_material_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		}
		
		
		
		public function updateApprove($_arr)
		{
			$cnn=material_db::connect();
			$sql="UPDATE material_tbl SET material_approve='approved' where pk_material_id in ($_arr) ";


			$res=$cnn->query($sql);
			return $res;
			material_db::disconnect();
		} */

		public function deleteBus($arr)
		{
			$cnn=bus_db::connect();
			$sql="delete from bus_tbl where bus_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			bus_db::disconnect();
		}

	 	public function deleteBusOne($_id)
		{
			$cnn=bus_db::connect();
			$sql="delete from bus_tbl where bus_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			bus_db::disconnect();
		} 
	
} 

?>