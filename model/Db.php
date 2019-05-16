<?php
	/**
	 * 单例模式创建数据库封装类
	 * 此类中包含连接,及执行sql语句
	 * 创建的数据库连接为短连接,不是持久连接,脚本会自动关闭
	 * 存在疑问，由单实例生成的对象无法在其他地方访问原库函数
	 */
	class Db 
	{
		//单例模式,保存类实例对象的静态成员
		private static $instance = null;
		
		//数据库连接对象
		private $conn = null;
		       
        //构造函数私有,防止外部实例化
        private	function __construct(){
        	$this->connect(); 
        }
        
        //私有的克隆方法,为了防止在类外通过clone生成另一个对象
        private function __clone(){
        	
        }
        
        //公有的静态方法,为了让用户获取唯一可用的实例化对象instance
        public static function getInstance(){
        	//!self::$instance用于检测是否有实例对象
        	if(!self::$instance){    
        		self::$instance = new self();
        	}
        	return self::$instance;
        }
        
        
        //数据库连接
        public  function  connect(){
        	//配置连接数据,面向对象写法的连接
        	$this->conn = new mysqli('localhost','root','','test');
        	//设置编码
        	$this->conn->query("SET NAMES UTF8");
        	if($this->conn->connect_error){
        		die("连接失败: " . $this->conn->connect_error);
        	}
        	return $this->conn;
        }
        
        //完成数据表的写操作:新增,更新,删除
        public function exec($sql){
            $this->conn->query("SET NAMES UTF8");
//            var_dump($sql);die;
            return $this->conn->query($sql);

        }
        	
        	//执行一条sql查询出单条数据
        	public function find($sql){

        		$result = $this->conn->query($sql);

        		return $result;
        	}
        	
        	//执行一条sql查询出多条数据
        	public function select($sql){
        		$result = $this->conn->query($sql);
//                $row= $result->fetch_array(1);
//        		fetch_array函数:把查询结果的一行作为一个关联数组
        		 while($row= $result->fetch_array(1)){
        		 	$data[] = $row;
        		 }
        		return $data;
        	}
        	
        	//防止sql注入,对输入数据进行处理
        	public function check_input($value)
        	{
        		//mysqli_real_escape_string() 函数转义在 SQL 语句中使用的字符串中的特殊字符。
        		//会被进行转义的字符包括： NUL （ASCII 0），\n，\r，\，'，" 和 Control-Z. 
        		$value = $this->conn->real_escape_string($value);      		
        		return $value;
        	}

   
    }
?>