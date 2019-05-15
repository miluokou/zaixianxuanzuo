
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="container">
                <h2 class="title" id="tishititle">教室在线选座位</h2>
                <div class="demo clearfix">
                    <!---左边座位列表----->
                    <div id="seat_area">
                        <div class="front">黑板</div></div>
                    <!---右边选座信息----->
                    <div class="booking_area">
                        <p>教室名：
                            <span>
                                <?php
                                    if(!empty($_GET['classroomName'])){
                                        echo $_GET['classroomName'];
                                    }else{
                                        echo '<select class="form-control" id="classroomdetail">
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>';
                                    }

                                ?>
                                </span></p>
                        <p>当前时间：
                            <span><?php echo date("Y-m-d H:i:s",time())?></span></p>
                        <p>座位：</p>
                        <ul id="seats_chose"></ul>

                        <p style="display:none">总价：
                            <b>￥
                                <span id="total_price">0</span></b>
                        </p>
                        <input type="button" class="btn" value="确定选座"  id = 'querenxuanzuo'/>
                        <div id="legend"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>'
