<?php
class arrival_db
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
		
		
		public function getArrivalTimings()
		{
			$cnn=arrival_db::connect();
			$sql="select * from arrival_tbl";
			$res=$cnn->query($sql);
			return $res;
			arrival_db::disconnect();
		
		}
		
		public function getTimings($_id)
		{
			$cnn=arrival_db::connect();
			$sql="select * from arrival_tbl where arrival_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			arrival_db::disconnect();
		
		}
		
	/*	public function getFacultyEmail($_id)
		{
			$cnn=faculty_db::connect();
			$sql="select * from faculty_tbl where fk_email_id ='".$_id."' ";
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		
        }
    
        public function insertFaculty($_email,$_name,$_id,$_img,$_course,$_desig,$_degree,$_desc,$_teach_exp,$_phd,$_paper,$_specialization,$_activities)
		{
			$cnn=faculty_db::connect();
			
			$sql="INSERT INTO faculty_tbl VALUES ('".$_email."','".$_name."',".$_id.",'".$_img."','".$_course."','".$_desig."','".$_degree."','".$_desc."','".$_teach_exp."','".$_phd."','".$_paper."','".$_specialization."','".$_activities."' ) ";
			
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		
		}
		public function updateFaculty($_email,$_name,$_id,$_img,$_course,$_desig,$_degree,$_desc,$_teach_exp,$_phd,$_paper,$_specialization,$_activities)
		{
			
			$cnn=faculty_db::connect();
			$sql="update faculty_tbl set fk_email_id='".$_email."',faculty_name='".$_name."', pk_faculty_id=".$_id.",faculty_img='".$_img."',faculty_course='".$_course."',faculty_desig='".$_desig."',faculty_degree='".$_degree."',faculty_description='".$_desc."',teaching_experience='".$_teach_exp."',phd_details='".$_phd."',paper_presented='".$_paper."',specialization='".$_specialization."',activities='".$_activities."'  where pk_faculty_id=".$_id;
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		}
		
		
		

		public function updateFacultyInfo($_email,$_teach_exp,$_phd,$_paper,$_specialization,$_activities)
		{
			
			$cnn=faculty_db::connect();
			$sql="update faculty_tbl set teaching_experience='".$_teach_exp."',phd_details='".$_phd."',paper_presented='".$_paper."',specialization='".$_specialization."',activities='".$_activities."'  where fk_email_id='".$_email."' ";
			$res=$cnn->query($sql);
			return $res;
			faculty_db::disconnect();
		} */
		public function deleteArrival($arr)
		{
			$cnn=arrival_db::connect();
			$sql="delete from arrival_tbl where arrival_id in ($arr)";
			$res=$cnn->query($sql);
			return $res;
			arrival_db::disconnect();
		}
		public function deleteArrivalOne($_id)
		{
			$cnn=arrival_db::connect();
			$sql="delete from arrival_tbl where arrival_id =".$_id;
			$res=$cnn->query($sql);
			return $res;
			arrival_db::disconnect();
		} 
	
}
?>