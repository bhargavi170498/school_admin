<?php


class driver_db
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
		
		
		public function getDriver()
		{
			$cnn=driver_db::connect();
			$sql="select * from driver_tbl";
			$res=$cnn->query($sql);
			return $res;
			driver_db::disconnect();
		
		}
		
	/*	public function getVideo($_id)
		{
			$cnn=video_db::connect();
			$sql="select * from video_tbl where pk_video_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			video_db::disconnect();
		
        }
    
        public function insertVideo($_id,$_title,$_desc,$_url)
		{
			$cnn=video_db::connect();
			
			$sql="INSERT INTO video_tbl VALUES (". $_id .",'" . $_title. "','" . $_desc . "','" . $_url . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			video_db::disconnect();
		
		}

		public function updateVideo($_id,$_title,$_desc,$_url)
		{
			
			$cnn=video_db::connect();
			$sql="update video_tbl set pk_video_id=".$_id.",video_title='".$_title."',video_desc='".$_desc."',url='".$_url."' where pk_video_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			video_db::disconnect();
		}
		*/
		
		public function deleteDriver($arr)
		{
			$cnn=driver_db::connect();
			$sql="delete from driver_tbl where driver_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			driver_db::disconnect();
		}

		public function deleteDriverOne($_id)
		{
			$cnn=driver_db::connect();
			$sql="delete from driver_tbl where driver_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			driver_db::disconnect();
		} 
	
} 

?>