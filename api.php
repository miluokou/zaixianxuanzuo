
<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);


require "model/Db.php";
require "model/Model.php";
require "model/CourseModel.php";
require "controller/UserController.php";
require 'model/ClassRoomModel.php';
$cm=new CourseModel();
$classRom = new ClassRoomModel();

if(!empty($_GET['classroom'])){
    if($_GET['classroom']=='delete' && !empty($_GET['id'])){
        $res  = $classRom->delete_class_room($_GET['id']);
    }elseif($_GET['classroom']=='all'){

        $res  = $classRom->get_class_room_list();

    }

}

if(!empty($_GET['type'])){
    if($_GET['type']=='list'){
        $res  = $classRom->class_room_name_list();
    }
    if($_GET['type']=='diff' && !empty($_GET['pai'])&& !empty($_GET['lie'])&& !empty($_GET['start_at'])&& !empty($_GET['end_at'])&& !empty($_GET['diffList'])){

//        zuoweilist
        $ccc = str_repeat('c',$_GET['pai']);
        for($i=1;$i<=$_GET['lie'];$i++){
                $cccFormate[$i] = str_split($ccc);
        }
        foreach($_GET['diffList'] as $diffv){
            $ssss = explode('_',$diffv);
            $cccFormate[$ssss[0]-1][$ssss[1]-1]='_';

        }
        foreach ($cccFormate as $kk=>$split){
            $cccFormate2[] = implode('',$split);
        }
        $seat_formate = serialize($cccFormate2);
//        str_repeat

        $res  = $classRom->room_diff($_GET,$seat_formate);

    }

}
if(!empty($_GET['classRoomName'])){
    $res  = $classRom->index_maps($_GET['classRoomName']);
}
//class_room_name_list

echo json_encode($res);


?>