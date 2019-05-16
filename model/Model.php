<?php 
	/**
	 * Model类，获取数据库连接对象
	 * 以及子类可共用的方法
	 */
	class Model{
		//数据库连接对象
		public $conn =null;
		//返回的数据
		public $data = null;
		
		public $ins=null;
		
		//构造函数
		public function __construct(){
			$this->init();
		}
		
		//获取Db类对象instance
		public function init(){
			//调用Db类的静态方法获取唯一实例对象instance
			$this->conn = Db::getInstance();     
		}
		public function dateFormate($time){
            $time = str_replace("+"," ",$time);
            return date("Y-m-d H:i:s",strtotime($time));
        }
		
		// public function login(){
		// 	$this->conn=$this->ins->test();
		// 	$stmt = $this->conn->prepare("select count(*) from user where acc=? and pass=? and type=?"); 
		// 	$stmt->bind_param("sss", $acc, $pass, $type);
		// 	$acc = "15713905085";
		// 	$pass = "tea001";
		// 	$type= "1";
		// 	//绑定结果集
		// 	$stmt->bind_result($result);
		// 	//执行
		// 	$stmt->execute();
		// 	//取出绑定的结果集
		// 	while($stmt->fetch()){
		// 		echo "$result";
		// 	}
		// 	//关闭结果集
		// 	$stmt->free_result();
		// 	$stmt->close();
		// }
		
	/*	//防止sql注入,对输入数据进行处理
		public function check_input($value)
		{			
			return $this->conn->check_input($value);
		}
		
		//查询某张表所有数据
		public function getList($table){
			$sql = "select * from '$table'";
			return $this->data = $this->conn->select($sql);
		}  */
		
		
	}
?>