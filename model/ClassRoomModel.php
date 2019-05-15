<?php
	/**
	 * 从Model类继承，可以使用父类方法或者增加自己的方法
	 */
	
	class ClassRoomModel extends Model{
		//登录功能函数 
		public function get_class_room_list(){
			$stmt = $this->conn->select("select name from class_room;");
			echo json_encode($stmt);
//			return $this->data = $stmt;
		}
	}
