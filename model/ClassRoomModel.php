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
                $res[$key]['valueTime']= $this->dateFormate($values['start_at']).'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~~&nbsp;&nbsp;<br>'.$this->dateFormate($values['end_at']);
            }
            return $res;
    //			return $this->data = $stmt;
        }
        public function get_ordered($classroomName){
//		    var_dump($classroomName);die;
            $stmt = $this->conn->select("select order_arr from class_room WHERE name ='".$classroomName."';");
//			echo '<pre>';
//            var_dump($stmt);
//            foreach ($stmt as $key =>$values){
//                $res[$key]['order_arr']= $values['order_arr'];
////                $res[$key]['name']= $values['name'];
////                $res[$key]['valueTime']= $this->dateFormate($values['start_at']).'~'.$this->dateFormate($values['start_at']);
//            }
//            var_dump($stmt);die;
            return $stmt[0]['order_arr'];
//			return $this->data = $stmt;
        }

        public function room_diff($get,$cccFormate2){

            $classRoomName =$get['classroomName'];
//            var_dump($cccFormate2);die;
            $start_at = $this->dateFormate($get['start_at']);

            $end_at = $this->dateFormate($get['end_at']);
            $seat_formate = $cccFormate2;

            $sql = "INSERT INTO class_room (name,seat_formate,start_at,end_at) VALUES ('".$classRoomName."','".$seat_formate."','".$start_at."','".$end_at."');";
            $stmt = $this->conn->exec($sql);
            $data['name'] = $stmt;
            return $data;
        }
        public function room_leisidiff($get,$cccFormate2){
            $classRoomName =$get['classroomName'];
            $seat_formate = $cccFormate2;
            $res = json_decode($seat_formate,true);
            $indexOrderedShow = $this->indexOrderedShow($classRoomName);
            if(!empty($indexOrderedShow['name'][0]['order_arr']) && $indexOrderedShow['name'][0]['order_arr']!='null'){
                $originOrdered = json_decode($indexOrderedShow['name'][0]['order_arr']);
            }else{
                $originOrdered = array();
            }
            $appendOrdered = array_merge($res,$originOrdered);
            $quchongzuowei = array_unique($appendOrdered);
            $bianchengzifuchuan = json_encode($quchongzuowei);
            $sql = "UPDATE class_room SET order_arr ='".$bianchengzifuchuan."' WHERE name = '".$classRoomName."'";
            $stmt = $this->conn->exec($sql);
            $data['name'] = $stmt;
            return $data;
        }
        public function class_room_name_list(){
            $stmt = $this->conn->select("select name from class_room;");
            return $stmt;
        }
        public function delete_class_room($id){
//		    var_dump("DELETE FROM class_room WHERE name = $id ");
//		    die;
            $stmt = $this->conn->exec("DELETE FROM class_room WHERE name ='".$id."'");
            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt;
        }


        public function index_maps($classRoomName){
//		    var_dump("DELETE FROM class_room WHERE name = $id ");
//		    die;
            $stmt = $this->conn->exec("select name from class_room where name = '".$classRoomName."';");
            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt;
        }
        public function indexSeatShow($classRoomName){
//		    var_dump("select seat_formate from class_room where name = '".$classRoomName."';");
//		    die;
            $stmt = $this->conn->select("select seat_formate from class_room where name = '".$classRoomName."';");

            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt; login
        }
        public function indexOrderedShow($classRoomName){
//		    var_dump("select seat_formate from class_room where name = '".$classRoomName."';");
//		    die;
            $stmt = $this->conn->select("select order_arr from class_room where name = '".$classRoomName."';");

            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt; login
        }
        public function login($get){
//		    var_dump("DELETE FROM class_room WHERE name = $id ");
//		    die;
            $stmt = $this->conn->exec("select * from user");
            $data['name'] = $stmt;
            return $data;
//			return $this->data = $stmt;
        }
	}
