<?php
	/**
	 * 从Model类继承，可以使用父类方法或者增加自己的方法
	 */
	
	class UserModel extends Model{
		//登录功能函数 
		public function login($acc,$pass,$type){
			$stmt = $this->conn->prepare("select count(*) from user where acc=? and pass=? and type=?"); 
			$stmt->bind_param("sss", $acc, $pass, $type);
			return $this->data = $this->conn->find($stmt);
		}
	}
?>