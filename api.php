
<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
//var_dump('123');die;

//ini_set('display_errors', '0');
/**
 * 
 */
//入口文件，前端请求分发器

require "model/Db.php";
require "model/Model.php";
require "model/CourseModel.php";
require "controller/UserController.php";
require 'model/ClassRoomModel.php';
/*
 * 当用户点击注册，登录或者讨论区再写这个玩意儿
 */
/*
//假设用c参数代表控制器,a参数代表方法
//isset()函数测试变量是否为null,为null则返回false
$controller = isset($_GET['c'])?$_GET['c']:"User";   
$action = isset($_GET['a'])?$_GET['a']:"getRec";

$controller .="Controller"; //控制器添加后缀

//加载控制器类
 require "controller/".$controller.".php";

//实例化控制器类
$user = new $controller();
//调用控制器方法
$user->$action();
*/
//if(!empty($_GET['column']) && $_GET['column'] =='1'&){
//
//}
if(!empty($_GET['classroom'])){
    if($_GET['classroom']=='delete' && !empty($_GET['id'])){
        $cm=new CourseModel();
        $classRom = new ClassRoomModel();
        $res  = $classRom->delete_class_room($_GET['id']);
        echo json_encode($res);
    }
    if($_GET['classroom']=='all'){
        $cm=new CourseModel();
        $classRom = new ClassRoomModel();
        $res  = $classRom->get_class_room_list();
        echo json_encode($res);
    }

}


// $data=$cm->getRec();
// echo json_encode($data);
/*foreach ($data as $value) {
    echo $value['title']."\n";
    echo $value['image']."\n";
}*/
// die;

?>