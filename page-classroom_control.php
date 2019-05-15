<div class="main">
    <div class="main-content">
        <div class="container" class = 'tables-controller'>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">教室管理</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>
                            <button type="button" class="btn btn-success btn6" data-context="info" data-message="This is general theme info" data-position="top-right" data-toggle="modal" data-target="#exampleModal" >新增教室</button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Steve</td>
                        <td>Jobs</td>
                        <td>@steve</td>
                        <td>
<!--                            <button>123</button>-->
                            <button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">编辑</button>
                            <button type="button" class="btn btn-danger btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">删除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Simon</td>
                        <td>Philips</td>
                        <td>@simon</td>
                        <td>
<!--                            <button>123</button>-->
                            <button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="top-right">General Info</button>
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
