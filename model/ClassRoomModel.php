<?php
	/**
	 * 从Model类继承，可以使用父类方法或者增加自己的方法
	 */
	
	class ClassRoomModel extends Model{
		//登录功能函数 
		public function get_class_room_list(){
			$stmt = $this->conn->select("select id,name,start_at,end_at from class_room;");
//			echo '<pre>';
//            var_dump($stmt);
            foreach ($stmt as $key =>$values){
                $res[$key]['id']= $key +1;
                $res[$key]['name']= $values['name'];
                $res[$key]['valueTime']= $this->dateFormate($values['start_at']).'~'.$this->dateFormate($values['start_at']);
            }
			return $res;
//			return $this->data = $stmt;
		}
        public function class_room_name_list(){
            $stmt = $this->conn->select("select name from class_room;");
//			echo '<pre>';
//            var_dump($stmt);
//            foreach ($stmt as $key =>$values){
//                $res[$key]['id']= $key +1;
//                $res[$key]['name']= $values['name'];
//                $res[$key]['valueTime']= $this->dateFormate($values['start_at']).'~'.$this->dateFormate($values['start_at']);
//            }
            return $stmt;
//			return $this->data = $stmt;
        }
        public function delete_class_room($id){
            $stmt = $this->conn->exec("DELETE FROM class_room WHERE name = $id ");
            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt;
        }
	}
