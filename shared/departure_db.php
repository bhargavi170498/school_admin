<?php


class departure_db
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
	 	
		
		public function getDepartureTimings()
		{
			$cnn=departure_db::connect();
			$sql="select * from departure_tbl";
			$res=$cnn->query($sql);
			return $res;
			departure_db::disconnect();
		
		}
		
	/*	public function getStaff($_id)
		{
			$cnn=staff_db::connect();
			$sql="select * from staff_tbl where pk_staff_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		
        }
    
        public function insertStaff($_id,$_email,$_name,$_date,$_designation)
		{
			$cnn=staff_db::connect();
			
			$sql="INSERT INTO staff_tbl VALUES (". $_id .",'" . $_email. "','" . $_name . "','" . $_date . "','" . $_designation. "') ";
			
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		
		}

		public function updateStaff($_id,$_email,$_name,$_date,$_designation)
		{
			
			$cnn=staff_db::connect();
			$sql="update staff_tbl set pk_staff_id=".$_id.",fk_email_id='".$_email."',staff_name='".$_name."',staff_join_date='".$_date."',staff_designation='".$_designation."' where pk_staff_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			staff_db::disconnect();
		}
		*/
		
		public function deleteDeparture($arr)
		{
			$cnn=departure_db::connect();
			$sql="delete from departure_tbl where deprture_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			departure_db::disconnect();
		}
	
		public function deleteDepartureOne($_id)
		{
			$cnn=departure_db::connect();
			$sql="delete from departure_tbl where departure_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			departure_db::disconnect();
		} 
}

?>