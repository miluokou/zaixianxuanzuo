<?php
	/**
	 * 从Model类继承，可以使用父类方法或者增加自己的方法
	 */
	
	class UserModel extends Model{
		//登录功能函数 
		public function login($get){
//		    $sql = "select level from user WHERE name ='".$get['user']."' and pass = '".$get['pass']."';";
//		    var_dump($sql);die;
//			$stmt = $this->conn->prepare("select count(*) from user where name=? and pass=?");
            $stmt = $this->conn->exec("select level from user WHERE name ='".$get['user']."' and pass = '".$get['pass']."';");
//			$stmt->bind_param("sss", $get['user'], $get['pass']);
			return $stmt;
		}
	}
?>