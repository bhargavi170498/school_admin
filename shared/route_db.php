<?php


class route_db
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
	
		
		public function getAllRoutes()
		{
			$cnn=route_db::connect();
			$sql="select * from route_table";
			$res=$cnn->query($sql);
			return $res;
			route_db::disconnect();
		
		}
		
		public function getRoute($_id)
		{
			$cnn=route_db::connect();
			$sql="select * from route_table where route_id ".$_id;
			$res=$cnn->query($sql);
			return $res;
			route_db::disconnect();
		
        }

      /*  public function insertAlbum($_id,$_url)
		{
			$cnn=album_db::connect();
			
			$sql="INSERT INTO album_tbl VALUES (". $_id .",'" . $_url . "') ";
			
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		
		}

		public function updateAlbum($_id,$_url)
		{
			
			$cnn=album_db::connect();
			$sql="update album_tbl set pk_album_id=".$_id.",url='".$_url."' where pk_album_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			album_db::disconnect();
		}
*/
		public function deleteRouteOne($_id)
		{
			$cnn=route_db::connect();
			$sql="delete from route_table where route_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			route_db::disconnect();
		}
		
		
		public function deleteRoute($arr)
		{
			$cnn=route_db::connect();
			$sql="delete from route_table where route_id in ($arr)";


			$res=$cnn->query($sql);
			return $res;
			route_db::disconnect();
		} 
	
    
      
}

?>