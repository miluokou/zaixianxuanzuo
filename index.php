<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <!-- GOOGLE FONTS -->
<!--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">-->
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <style type="text/css">/*.front{width: 300px;margin: 5px 32px 45px 32px;background-color: #f0f0f0; color: #666;text-align: center;padding: 3px;border-radius: 5px;}*/ .booking_area {float: right;position: relative;width:200px;height: 450px; } .booking_area h3 {margin: 5px 5px 0 0;font-size: 16px;} .booking_area p{line-height:26px; font-size:16px; color:#999} .booking_area p span{color:#666} div.seatCharts-cell {color: #182C4E;height: 25px;width: 25px;line-height: 25px;margin: 3px;float: left;text-align: center;outline: none;font-size: 13px;} div.seatCharts-seat {color: #fff;cursor: pointer;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;} div.seatCharts-row {height: 35px;} div.seatCharts-seat.available {background-color: #B9DEA0;} div.seatCharts-seat.focused {background-color: #76B474;border: none;} div.seatCharts-seat.selected {background-color: #E6CAC4;} div.seatCharts-seat.unavailable {background-color: #472B34;cursor: not-allowed;} div.seatCharts-container {width: 900px;padding: 20px;float: left;} div.seatCharts-legend {padding-left: 0px;position: absolute;bottom: 16px;} ul.seatCharts-legendList {padding-left: 0px;} .seatCharts-legendItem{float:left; width:90px;margin-top: 10px;line-height: 2;} span.seatCharts-legendDescription {margin-left: 5px;line-height: 30px;} .checkout-button {display: block;width:80px; height:24px; line-height:20px;margin: 10px auto;border:1px solid #999;font-size: 14px; cursor:pointer} #seats_chose {max-height: 150px;overflow-y: auto;overflow-x: none;width: 200px;} #seats_chose li{float:left; width:72px; height:26px; line-height:26px; border:1px solid #d3d3d3; background:#f7f7f7; margin:6px; font-size:14px; font-weight:bold; text-align:center}</style></head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="index.php">
                <img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth">
                    <i class="lnr lnr-arrow-left-circle"></i>
                </button>
            </div>

            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/img/user.png" class="img-circle" alt="Avatar">
                            <span>Samuel</span>
                            <i class="icon-submenu lnr lnr-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="javascript:void(0);">
                                    <i class="lnr lnr-exit"></i>
                                    <span id="loggin">Logout</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                    <a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li>
                        <a href="/?classRoomName=0" class="<?php if(empty($_GET['column'])){echo 'active';}?>">
                            <i class="lnr lnr-home"></i>
                            <span>在线选座</span></a>
                    </li>
                    <li>
                        <a href="/?column=1" class="<?php if(!empty($_GET['column']) && $_GET['column'] =='1'){echo 'active';}?>">
                            <i class="lnr lnr-code"></i>
                            <span>教室管理</span></a>
                    </li>
<!--                    <li>-->
<!--                        <a href="/?column=2" class="--><?php //if(!empty($_GET['column']) && $_GET['column'] =='2'){echo 'active';}?><!--">-->
<!--                            <i class="lnr lnr-chart-bars"></i>-->
<!--                            <span>人员管理</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/?column=3" class="--><?php //if(!empty($_GET['column']) && $_GET['column'] =='3'){echo 'active';}?><!--">-->
<!--                            <i class="lnr lnr-chart-bars"></i>-->
<!--                            <span>预约信息</span></a>-->
<!--                    </li>-->
                    <li>
                        <a href="/?column=4" class="<?php if(!empty($_GET['column']) && $_GET['column'] =='4'){echo 'active';}?>">
                            <i class="lnr lnr-chart-bars"></i>
                            <span>课表信息</span></a>
                    </li>
                    <li>
                        <a href="/?column=5" class="<?php if(!empty($_GET['column']) && $_GET['column'] =='5'){echo 'active';}?>">
                            <i class="lnr lnr-chart-bars"></i>
                            <span>公告</span></a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <?php
    if(empty($_GET['column'])) {
       require ('page-index.php');

    }elseif(!empty($_GET['column']) && $_GET['column'] =='1'){
        if($_GET['column'] =='1' && !empty($_GET['pai']) && !empty($_GET['lie'])){
            require ('page-index.php');
        }else{
            require('page-classroom_control.php');
        }
    }elseif(!empty($_GET['column']) && $_GET['column'] =='2'){
        if($_GET['column'] =='1' && !empty($_GET['pai']) && !empty($_GET['lie'])){
            require ('page-index.php');
        }else{
            require('page-student_control.php');
        }
    }elseif(!empty($_GET['column']) && $_GET['column'] =='3'){
        if($_GET['column'] =='1' && !empty($_GET['pai']) && !empty($_GET['lie'])){
            require ('page-index.php');
        }else{
            require('page-order_control.php');
        }
    }elseif(!empty($_GET['column']) && $_GET['column'] =='4'){
        if($_GET['column'] =='1' && !empty($_GET['pai']) && !empty($_GET['lie'])){
            require ('page-index.php');
        }else{
            require('page-course_control.php');
        }
    }elseif(!empty($_GET['column']) && $_GET['column'] =='5'){
        if($_GET['column'] =='1' && !empty($_GET['pai']) && !empty($_GET['lie'])){
            require ('page-index.php');
        }else{
            require('page-notice_control.php');
        }
    }

    ?>

    <!-- END MAIN -->
    <div class="clearfix"></div>

</div>
<!-- END WRAPPER -->
<!-- Javascript -->

<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
<script type="text/javascript" src="jquery.seat-charts.min.js"></script>
<script type="text/javascript" src="public/js/xcConfirm.js"></script>
<script type="text/javascript">


    var price = 100;
    $(document).ready(function() {
        if(!window.localStorage){
            alert("浏览器不支持localstorage");
            return false;
        }
        if(!window.localStorage.loginstatus){
            window.location.href = "/page-login.html";
        }

        $('#loggin').click(function(){
            window.localStorage.removeItem('loginstatus');
            window.location.reload();
        })

        var column = getUrlParam("classRoomName");
        var TrueColumn = getUrlParam("column");
        if(TrueColumn =='3'){
            $.ajax({
                url: "/api.php",
                data: {type: 'order'},
                type: "get",
                dataType: "json",
                success: function(data) {
                    // var ata2 = data;
                    html = '';
                    for (var i=0;i<data.length;i++)
                    {
                        html = html+'<tr><td>'+data[i].id+'</td><td>'+data[i].name+'</td><td>'+data[i].valueTime+'</td><td><button type="button" class="btn btn-danger btn-toastr deletedClick" data-context="info" data-message="This is general theme info" data-position="top-right">删除</button></td></tr>';

                        // document.write(cars[i] + "<br>");valueTime


                    }
                    $('#jiaoshiguanli2').html(html);
                }

            });
        }

        if(!column){
            column = 0;
        }else{
            column = parseInt(column);
        }
        console.log(TrueColumn);
        // if(column){

        //     $('#classroomdetail').val(2);

        // }
        $.ajax({
            url: "/api.php",
            data: {classroom: 'all'},
            type: "get",
            dataType: "json",
            async: false,
            success: function(data) {
                console.log(data);
                html = '';
                for (var i=0;i<data.length;i++)
                {
                    html = html+'<option value="'+i+'">'+data[i].name+'</option>';
                    // window.localStorage.classroomlist.i = data[i].name;

                }
                window.localStorage.removeItem('danqianClassRoomName');
                window.localStorage.removeItem('spantime');
                window.localStorage.danqianClassRoomName = data[column].name;
                window.localStorage.spantime = data[column].valueTime;
                console.log(window.localStorage.spantime);
                // window.localStorage.danqianClassRoomName[column].name
                console.log('数值shijian');
                console.log(window.localStorage.spantime);
                $('#classroomdetail').html(html);
                if(column || column=='0'){
                    document.getElementById("classroomdetail")[column].selected=true;
                    $("#keyongshijian").html(window.localStorage.spantime);
                }

            }

        });

// die;
        console.log('--classroomlist--');
        console.log(window.localStorage.danqianClassRoomName);

        
        $(document).on('change',"#classroomdetail",function(){
            console.log('--classroomlist change function nei--');
            $classroomId = $('#classroomdetail').val();
            console.log("_$classroomId____");
            console.log($classroomId);

            $.ajax({
                url: "/api.php",
                data: {classroom: 'all'},
                type: "get",
                async: false,
                dataType: "json",
                success: function(data) {
                    // window.localStorage.classroomlist = data;
                    // var ata2 = data;
                    html = '';
                    console.log(data);
                    for (var i=0;i<data.length;i++)
                    {
                        html = html+'<option value="'+i+'">'+data[i].name+'</option>';
                        // window.localStorage.classroomlist[i] = data[i].name;

                    }
                    window.localStorage.removeItem('danqianClassRoomName');
                    window.localStorage.danqianClassRoomName = data[$classroomId].name;

                    // window.localStorage.danqianClassRoomName[column].name
                    $('#classroomdetail').html(html);


                        // column = getUrlParam("classRoomName");
                        if(!$classroomId){
                            $classroomId = 0;
                        }else{
                            $classroomId = parseInt($classroomId);
                        }
                        document.getElementById("classroomdetail")[$classroomId].selected=true;

                }

            });
            window.location.href = "/?classRoomName="+$classroomId;
            // window.location.reload();
        });// $(document).ready(function () {
            // $('#classroomdetail').val(column);

        // document.getElementById("classroomdetail")[column].selected=true;


        // $("#classroomdetail").val(column);
            // $("#classroomdetail option[value="+column+"]").attr("selected", "selected");
        // })
        $.ajax({
            url: "/api.php",
            data: {classroom: 'all'},
            type: "get",
            dataType: "json",
            success: function(data) {
                // var ata2 = data;
                html = '';
                for (var i=0;i<data.length;i++)
                {
                    html = html+'<tr><td>'+data[i].id+'</td><td>'+data[i].name+'</td><td>'+data[i].valueTime+'</td><td><button type="button" class="btn btn-danger btn-toastr deletedClick" data-context="info" data-message="This is general theme info" data-position="top-right">删除</button></td></tr>';

                    // document.write(cars[i] + "<br>");valueTime


                }
                $('#jiaoshiguanli').html(html);
            }

        });
        $(document).on('click','.deletedClick',function(){
            var sa = $(this).parent().parent().find("td").eq(1).html();
            console.log(sa);
            $.ajax({
                url: "/api.php",
                data: {classroom: 'delete',id:sa},
                type: "get",
                dataType: "json",
                success: function(data) {
                    if(data.name){
                        alert('删除成功');
                        window.location.reload();
                    } else{
                        alert('删除失败');
                    }
                }

            });
            // $this.parent.parent.find('')
            // alert(sa);
        })




        var $cart = $('#seats_chose'),
            //座位区
            $tickects_num = $('#tickects_num'),
            //票数
            $total_price = $('#total_price'); //票价总额
        function getQueryString(name){
            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if(r!=null)return  unescape(r[2]); return null;
        }
        function getUrlParam(key) {
            // 获取参数
            var url = window.location.search;
            // 正则筛选地址栏
            var reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)");
            // 匹配目标参数
            var result = url.substr(1).match(reg);
            //返回参数值
            return result ? decodeURIComponent(result[2]) : null;
        }
        nameVlaue = $('#classroomdetail').val();
        // $.ajax({
        //     url: "/api.php",
        //     data: {classRoomName: nameVlaue},
        //     type: "get",
        //     dataType: "json",
        //     success: function(data) {

        //        var map =data;
        //         // var ata2 = data;
        //         html = '';
        //         for (var i=0;i<data.length;i++)
        //         {
        //             html = html+'<option value="'+i+'">'+data[i].name+'</option>';

        //             // document.write(cars[i] + "<br>");valueTime

        //         }
        //         $('#classroomdetail').html(html);
        //         // document.getElementById("classroomdetail")[column].selected=true;
        //     }

        // });

        var map = [ //座位结构图 a 代表座位; 下划线 "_" 代表过道
            'cccccccccc',

            'cccccccccc',

            '__________',

            'cccccccc__',

            'cccccccccc',

            'cccccccccc',

            'cccccccccc',

            'cccccccccc',

            'cccccccccc',

            'cc__cc__cc'

        ];
        console.log(window.localStorage.danqianClassRoomName);
        $.ajax({
            url: "/api.php",
            data: {
                classroomName2: window.localStorage.danqianClassRoomName,
                index:'index',
            },
            type: "get",
            async: false,
            dataType: "json",
            success: function(data) {
                console.log(window.localStorage.danqianClassRoomName);
                console.log(data);
                window.localStorage.indexseat = data;
                // if(data.name){
                //
                //     sc.get(zuoweilist).status('unavailable');
                //     window.location.href = "/";
                // } else{
                //     alert('失败');
                // }
            }

        });
        // console.log('')
        map = eval(window.localStorage.indexseat);
        console.log(map);
        console.log('zheli');
        //
        // console.log(map2);
        var item = [

            ['c', 'available', '可选座'],

            ['c', 'unavailable', '已被选']

        ];
        // alert(getQueryString("pai1"));
        var pai = getQueryString("pai");
        var lie = getQueryString("lie");
        var classRoomNameRes = getQueryString("classRoomName");
        var liestr = 'c';
        if(pai && lie){
            var lieshu = liestr.repeat(lie);
            map = new Array();
            for (var i=0;i<pai;i++)
            {
                map[i] = lieshu;
            }
            $('#tishititle').html('请选择教室中不存在的座位');
            item = [

                ['c', 'available', '不存在'],

            ];
            // console.log(map);
            var zuoweilist = new Array();
            var i =0;
            $(document).on('click','#querenxuanzuo',function(){
                var ids = $('#seats_chose li').attr('id');
                $('#seats_chose li').each(function () {
                    var jieguo = $(this).attr('id');

                    var resss = jieguo.replace('cart-item-','');
                    // console.log(jieguo);
                    zuoweilist[i] = resss;
                    i++;
                });
                var start_at = getQueryString("start_at");
                var end_at = getQueryString("end_at");
                var  classroomName= getUrlParam("classroomName");
                // console.log(classroomName);

                $.ajax({
                    url: "/api.php",
                    data: {
                        type: 'diff',
                        start_at:start_at,
                        end_at:end_at,
                        diffList:zuoweilist,
                        pai:pai,
                        lie:lie,
                        classroomName:classroomName,
                    },
                    type: "get",
                    dataType: "json",
                    success: function(data) {
                        if(data.name){

                            sc.get(zuoweilist).status('unavailable');
                            window.location.href = "/";
                        } else{
                            alert('失败');
                        }
                    }

                });

                // console.log(sc.get(zuoweilist));
            });
        }
        console.log(classRoomNameRes);
        console.log('上面的值是0的时候怎么处理');
        if(classRoomNameRes){
            console.log('上面的值是0的时候怎么处理111');
            //学生预定
            $(document).on('click','#querenxuanzuo',function(){
                // var ids = $('#seats_chose li').attr('id');
                // console.log(ids);
                // seat_area
                var lieMax =1;
                var lieMax2=1;
                var rowleng = $('#seat_area .seatCharts-row').length;
                for(var ii=0;ii<rowleng;ii++){
                    lieMax2 = $('#seat_area .seatCharts-row:eq('+ii+') .seatCharts-seat').length;
                    console.log(lieMax);
                    if(lieMax2>lieMax){
                        lieMax = lieMax2;
                    }
                }

                console.log(lieMax);
                console.log(rowleng);
                var zuoweilist = new Array();
                var i = 0;
                $('#seats_chose li').each(function () {
                    var jieguo = $(this).attr('id');
                    // console.log(jieguo);
                    var resss = jieguo.replace('cart-item-','');
                    // console.log(jieguo);
                    zuoweilist[i] = resss;
                    i++;
                });
                var start_at = $("input[name='start_at']").val();
                var end_at = $("input[name='end_at']").val();
                // var end_at = getQueryString("end_at");
                var  classroomName= getUrlParam("classroomName");
                console.log(zuoweilist);
                // console.log('sdhuifhsidf');

                $.ajax({
                    url: "/api.php",
                    data: {
                        type: 'leisidiff',
                        start_at:start_at,
                        end_at:end_at,
                        diffList:zuoweilist,
                        lie:lieMax,
                        pai:rowleng,
                        classroomName:window.localStorage.danqianClassRoomName,
                    },
                    type: "get",
                    dataType: "json",
                    success: function(data) {
                        // alert('2321');
                        if(data.name){

                            sc.get(zuoweilist).status('unavailable');
                            // window.location.href = "/";
                        } else{
                            alert('失败');
                        }
                    }

                });

                // console.log(sc.get(zuoweilist));
            });



        }
        console.log(map);
        var sc = $('#seat_area').seatCharts({

            map: map,

            naming: { //设置行列等信息
                top: false,
                //不显示顶部横坐标（行）
                getLabel: function(character, row, column) { //返回座位信息
                    return column;

                }

            },

            legend: { //定义图例
                node: $('#legend'),

                items:item

            },

            click: function() {

                if (this.status() == 'available') { //若为可选座状态，添加座位
                    $('<li>' + (this.settings.row + 1) + '排' + this.settings.label + '座</li>')

                        .attr('id', 'cart-item-' + this.settings.id)

                        .data('seatId', this.settings.id)

                        .appendTo($cart);

                    $tickects_num.text(sc.find('selected').length + 1);
                    $total_price.text(getTotalPrice(sc) + price);

                    return 'selected';

                } else if (this.status() == 'selected') {

                    $tickects_num.text(sc.find('selected').length - 1);
                    $total_price.text(getTotalPrice(sc) - price);
                    $('#cart-item-' + this.settings.id).remove();

                    return 'available';

                } else if (this.status() == 'unavailable') {
                    return 'unavailable';

                } else {

                    return this.style();

                }

            }

        });

        //设置已售出的座位
        if(pai && lie) {

        }else{
            // sc.get(['1_3', '1_4', '4_4', '4_5', '4_6', '4_7', '4_8']).status('unavailable');

        }
        //已经预订了的座位不允许继续预定
        if(classRoomNameRes){
            $.ajax({
                url: "/api.php",
                data: {type: 'getOrdered',classroomName:window.localStorage.danqianClassRoomName},
                type: "get",
                async: false,
                dataType: "json",
                success: function(data) {
                    data2 = eval(data);
                    console.log(data2);
                    console.log(['1_3', '1_4', '4_4', '4_5', '4_6', '4_7', '4_8']);
                    // console.log('getOrdered');
                    // window.localStorage.classroomlist = data;
                    // var ata2 = data;
                    // html = '';
                    // console.log(data);
                    // for (var i=0;i<data.length;i++)
                    // {
                    //     html = html+'<option value="'+i+'">'+data[i].name+'</option>';
                    //     // window.localStorage.classroomlist[i] = data[i].name;
                    //
                    // }
                    // window.localStorage.removeItem('danqianClassRoomName');
                    // window.localStorage.danqianClassRoomName = data[$classroomId].name;
                    //
                    // // window.localStorage.danqianClassRoomName[column].name
                    // $('#classroomdetail').html(html);
                    //
                    //
                    // // column = getUrlParam("classRoomName");
                    // if(!$classroomId){
                    //     $classroomId = 0;
                    // }else{
                    //     $classroomId = parseInt($classroomId);
                    // }
                    // document.getElementById("classroomdetail")[$classroomId].selected=true;
                    sc.get(data2).status('unavailable');

                }

            });
        }
        if(window.localStorage.loginstatus ==1){
            $('#sidebar-nav ul.nav li:eq(1)').css('display',"none");
            $('#sidebar-nav ul.nav li:eq(2)').css('display',"none");
            $('#sidebar-nav ul.nav li:eq(3)').css('display',"none");
            $('#sidebar-nav ul.nav li:eq(4)').css('display',"none");
            // $('#sidebar-nav ul.nav li:eq(5)').css('display',"none");
            // alert('123');
        }
    });


    // $(document).ready(function(){
    //     $('.deletedClick').click(function(){
    //
    //     })
    // });
    function getTotalPrice(sc) { //计算票价总额
        var total = 0;

        sc.find('selected').each(function() {

            total += price;

        });

        return total;

    }
</script>
<script>
    $(function() {
        var data, options;

        // headline charts
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [[23, 29, 24, 40, 25, 24, 35], [14, 25, 18, 34, 29, 38, 44], ]
        };

        options = {
            height: 300,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            axisX: {
                showGrid: false
            },
            lineSmooth: false,
        };

        new Chartist.Line('#headline-chart', data, options);

        // visits trend charts
        data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [{
                name: 'series-real',
                data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
            },
                {
                    name: 'series-projection',
                    data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
                }]
        };

        options = {
            fullWidth: true,
            lineSmooth: false,
            height: "270px",
            low: 0,
            high: 'auto',
            series: {
                'series-projection': {
                    showArea: true,
                    showPoint: false,
                    showLine: false
                },
            },
            axisX: {
                showGrid: false,

            },
            axisY: {
                showGrid: false,
                onlyInteger: true,
                offset: 0,
            },
            chartPadding: {
                left: 20,
                right: 20
            }
        };

        new Chartist.Line('#visits-trends-chart', data, options);

        // visits chart
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [[6384, 6342, 5437, 2764, 3958, 5068, 7654]]
        };

        options = {
            height: 300,
            axisX: {
                showGrid: false
            },
        };

        new Chartist.Bar('#visits-chart', data, options);

        // real-time pie chart
        var sysLoad = $('#system-load').easyPieChart({
            size: 130,
            barColor: function(percent) {
                return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
            },
            trackColor: 'rgba(245, 245, 245, 0.8)',
            scaleColor: false,
            lineWidth: 5,
            lineCap: "square",
            animate: 800
        });

        var updateInterval = 3000; // in milliseconds
        // setInterval(function() {
        // 	var randomVal;
        // 	randomVal = getRandomInt(0, 100);
        // 	sysLoad.data('easyPieChart').update(randomVal);
        // 	sysLoad.find('.percent').text(randomVal);
        // }, updateInterval);
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }


    });

    </script>


</body>

</html>