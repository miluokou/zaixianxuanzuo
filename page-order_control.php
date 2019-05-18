<div class="main">
    <div class="main-content">
        <div class="container" class = 'tables-controller'>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">预约信息</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>教室名字</th>
                        <th>可用时间段</th>
                        <th>预定人</th>
                        <th>
<!--                         <button type="button" class="btn btn-success btn6" data-context="info" data-message="This is general theme info" data-position="top-right" data-toggle="modal" data-target="#exampleModal" >新增教室</button>-->

                        </th>
<!--                        <th>-->
<!--                        </th>-->
                    </tr>
                    </thead>
                    <tbody id ="jiaoshiguanli2">

                    <tr>
                        <td>2</td>
                        <td>Simon</td>
                        <td>Philips</td>
                        <td>@simon</td>
                        <td>
<!--                            删除-->
<!--                            <button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">General Info</button>-->
                        </td>
                    </tr>
                    <tr>
<!--                        <td>3</td>-->
<!--                        <td>Jane</td>-->
<!--                        <td>Doe</td>-->
<!--                        <td>@jane</td>-->
<!--                    </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">填入信息</h4>
            </div>
            <form action = '/' method="get">
            <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">教室名字:</label>
                        <input type="text" class="form-control" id="recipient-name" name = 'classroomName'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">一共几排:</label>
                        <input type="text" class="form-control" id="recipient-name" name = 'pai'>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">一共几列:</label>
                        <input type="text" class="form-control" id="recipient-name" name = 'lie'>
                    </div>
                    <div class="form-group c-datepicker-date-editor J-datepicker-range mt10">
                        <label for="recipient-name" class="control-label">可用时间:</label>
                        <i class="c-datepicker-range__icon kxiconfont icon-clock"></i>
                        <input placeholder="开始日期" name="start_at" class="c-datepicker-data-input" value="2018-01-01 04:00:00">
                        <span class="c-datepicker-range-separator">-</span>
                        <input placeholder="结束日期" name="end_at" class="c-datepicker-data-input" value="2018-03-01 04:00:00">
                    </div>
                    <input type="hidden" name = 'column' value ='1' >
<!--                    <div class="form-group">-->
<!--                        <label for="message-text" class="control-label">Message:</label>-->
<!--                        <textarea class="form-control" id="message-text"></textarea>-->
<!--                    </div>-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary" id ='jiaoshi_submit'>确认</button>
            </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="public/date/css/datepicker.css">
<style>
    .p20{
        padding:20px;
    }
    .mt20{
        margin-top:20px;
    }
    .mt40{
        margin-top:40px;
    }
    .mt10{
        margin-top:10px;
    }
    .hide{
        display: none;
    }
    body{
        height:1000px;
    }
    .c999{
        color:#999;
        font-size:12px;
    }

</style>
<script src="public/date/js/plugins/moment.min.js"></script>
<script src="public/date/js/datepicker.all.js"></script>
<!-- <script src="js/datepicker.all.min.js"></script> -->

<script src="public/date/js/datepicker.en.js"></script>
<script type="text/javascript">

    $(function(){
        //选择时分秒
        $('.J-datepicker-time').datePicker({
            format: 'HH:mm:ss',
            min: '04:23:11'
        });
        $('.J-datepicker-time-range').datePicker({
            format: 'HH:mm:ss',
            isRange: true,
            min: '04:23:11',
            max: '20:59:59'
        });
        //时分秒年月日单个
        $('.J-datepicker-en').datePicker({
            hasShortcut: true,
            min: '2018-01-01 04:00:00',
            max: '2019-04-29 20:59:59',
            language: 'en',
            shortcutOptions: [{
                name: 'today',
                day: '0'
            }, {
                name: 'yesterday',
                day: '-1',
                time: '00:00:00'
            }, {
                name: 'last week',
                day: '-7'
            }],
            hide: function () {
                console.info(this)
            }
        });
        var DATAPICKERAPI = {
            // 默认input显示当前月,自己获取后填充
            activeMonthRange: function () {
                return {
                    begin: moment().set({ 'date': 1, 'hour': 0, 'minute': 0, 'second': 0 }).format('YYYY-MM-DD HH:mm:ss'),
                    end: moment().set({ 'hour': 23, 'minute': 59, 'second': 59 }).format('YYYY-MM-DD HH:mm:ss')
                }
            },
            shortcutMonth: function () {
                // 当月
                var nowDay = moment().get('date');
                var prevMonthFirstDay = moment().subtract(1, 'months').set({ 'date': 1 });
                var prevMonthDay = moment().diff(prevMonthFirstDay, 'days');
                return {
                    now: '-' + nowDay + ',0',
                    prev: '-' + prevMonthDay + ',-' + nowDay
                }
            },
            // 近n小时计算返回
            shortcutPrevHours: function (hour) {
                var nowDay = moment().get('date');
                var prevHours = moment().subtract(hour, 'hours');
                var prevDate=prevHours.get('date')- nowDay;
                var nowTime=moment().format('HH:mm:ss');
                var prevTime = prevHours.format('HH:mm:ss');
                return {
                    day: prevDate + ',0',
                    time: prevTime+',' + nowTime,
                    name: '近'+ hour+'小时'
                }
            },
            // 注意为函数：快捷选项option:只能同一个月份内的
            rangeMonthShortcutOption1: function () {
                var result = DATAPICKERAPI.shortcutMonth();
                // 近18小时
                var resultTime= DATAPICKERAPI.shortcutPrevHours(18);
                return [{
                    name: '昨天',
                    day: '-1,-1',
                    time: '00:00:00,23:59:59'
                }, {
                    name: '这一月',
                    day: result.now,
                    time: '00:00:00,'
                }, {
                    name: '上一月',
                    day: result.prev,
                    time: '00:00:00,23:59:59'
                }, {
                    name: resultTime.name,
                    day: resultTime.day,
                    time: resultTime.time
                }];
            },
            // 快捷选项option
            rangeShortcutOption1: [{
                name: '最近一周',
                day: '-7,0'
            }, {
                name: '最近一个月',
                day: '-30,0'
            }, {
                name: '最近三个月',
                day: '-90, 0'
            }],
            singleShortcutOptions1: [{
                name: '今天',
                day: '0',
                time: '00:00:00'
            }, {
                name: '昨天',
                day: '-1',
                time: '00:00:00'
            }, {
                name: '一周前',
                day: '-7'
            }]
        };
        //时分秒年月日单个
        $('.J-datepicker').datePicker({
            hasShortcut:true,
            min:'2018-01-01 04:00:00',
            max:'2019-04-29 20:59:59',
            shortcutOptions:[{
                name: '今天',
                day: '0'
            }, {
                name: '昨天',
                day: '-1',
                time: '00:00:00'
            }, {
                name: '一周前',
                day: '-7'
            }],
            hide:function(){
                console.info(this)
            }
        });

        //年月日单个
        $('.J-datepicker-day').datePicker({
            hasShortcut: true,
            format:'YYYY-MM-DD',
            shortcutOptions: [{
                name: '今天',
                day: '0'
            }, {
                name: '昨天',
                day: '-1'
            }, {
                name: '一周前',
                day: '-7'
            }]
        });

        //年月日范围
        $('.J-datepicker-range-day').datePicker({
            hasShortcut: true,
            format: 'YYYY-MM-DD',
            isRange: true,
            shortcutOptions: DATAPICKERAPI.rangeShortcutOption1
        });

        //十分年月日单个
        $('.J-datepickerTime-single').datePicker({
            format: 'YYYY-MM-DD HH:mm'
        });

        //十分年月日范围
        $('.J-datepickerTime-range').datePicker({
            format: 'YYYY-MM-DD HH:mm',
            isRange: true
        });

        //时分秒年月日范围，包含最大最小值
        $('.J-datepicker-range').datePicker({
            hasShortcut: true,
            min: '2018-01-01 06:00:00',
            max: '2019-04-29 20:59:59',
            isRange: true,
            shortcutOptions: [{
                name: '昨天',
                day: '-1,-1',
                time: '00:00:00,23:59:59'
            },{
                name: '最近一周',
                day: '-7,0',
                time:'00:00:00,'
            }, {
                name: '最近一个月',
                day: '-30,0',
                time: '00:00:00,'
            }, {
                name: '最近三个月',
                day: '-90, 0',
                time: '00:00:00,'
            }],
            hide: function (type) {
                console.info(this.$input.eq(0).val(), this.$input.eq(1).val());
                console.info('类型：',type)
            }
        });
        //时分秒年月日范围，限制只能选择同一月，比如2018-10-01到2018-10-30
        $('.J-datepicker-range-betweenMonth').datePicker({
            isRange: true,
            between:'month',
            hasShortcut: true,
            shortcutOptions: DATAPICKERAPI.rangeMonthShortcutOption1()
        });

        //时分秒年月日范围，限制开始结束相隔天数小于30天
        $('.J-datepicker-range-between30').datePicker({
            isRange: true,
            between: 30
        });

        //年月单个
        $('.J-yearMonthPicker-single').datePicker({
            format: 'YYYY-MM',
            min: '2018-01',
            max: '2019-04',
            hide: function (type) {
                console.info(this.$input.eq(0).val());
            }
        });

        //选择年
        $('.J-yearPicker-single').datePicker({
            format: 'YYYY',
            min: '2018',
            max: '2020'
        });


    });
</script>