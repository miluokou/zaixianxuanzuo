<?php
	/**
	 * 登录处理
	 */
	//设置session,必须处于脚本最顶部
	session_start();
	require "../model/Db.php";
	require "../model/Model.php";
	require "../model/UserModel.php";
	$um=new UserModel();
	//处理输入数据,防止sql注入
	$acc=$um->check_input($_REQUEST['acc']);
	$pass=$um->check_input($_REQUEST['pass']);

	$type=$_REQUEST['type'];
	//正则表达式,匹配11位纯数字
	$preg="/^\d{11}$/";
	if(!preg_match($preg,$acc)){
		$_SESSION['accerr']="账号必须是11位数字!";
		require "../view/login.html";
	}
	else{
		//strtolower()函数把所有字符转换为小写
		if(strtolower($_REQUEST['yzm'])!== $_SESSION['authcode']){
			$_SESSION['err']="验证码输入错误!"; 
			require "../view/login.html";
		}
		else{
			$result=$um->login($acc,$pass,$type);
			if($result==0){
				$_SESSION['err']="用户名或密码错误!";
				require "../view/login.html";
			}
			else{
				//跳转页面,并将账户信息存入session
				echo "nice";
			}
	
	}
	
		
		
		
		
	}

?>