<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\soft\laragon\www\tp5\public/../application/admin\view\login\index.html";i:1515723137;}*/ ?>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> - 后台系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="http://res.layui.com/layui/rc/css/layui.css?t=20180108" media="all">
    <link rel="stylesheet" type="text/css" href="_admin_/admin.css" />
</head>
<body class="layui-layout-body">
<div id="LAY_app">
    <link rel="stylesheet" type="text/css" href="_admin_/login.css" />
    <form action="<?php echo url('./login/login'); ?>"  method="post">
    <div class="layadmin-user-login" id="LAY-user-login" style="display: none;">

    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>Admin</h2>
            <p>后台管理模板系统</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="username"></label>
                <input type="text" name="username" id="username" lay-verify="required" placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="password"></label>
                <input type="password" name="password" id="password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>
            <!--<div class="layui-form-item">
                <input type="checkbox" name="remember" lay-skin="primary" title="记住密码"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住密码</span><i class="layui-icon"></i></div>
            </div>-->
            <div class="layui-form-item">
                <button class="layui-btn layui-btn-fluid" lay-filter="test">登 入</button>
            </div>
        </div>
    </div>

    <div class="layui-trans layadmin-user-login-footer">
        <p>© 2018 <a href="http://www.admin.com/" target="_blank">admin</a></p>
        <p><span><a href="http://www.admin.com" target="_blank">前往官网</a></span></p>
    </div>
    </form>
</div>

</div>
</body>
<!--<script type="text/javascript" src="_admin_/layui.all.js"></script>
<script type="text/javascript" src="_admin_/jquery.js"></script>
<script>
    layui.use('form', function(){
        var form = layui.form;
        form.on('submit(test)', function(obj){
            layer.msg(obj.data);
            var data = obj.data;
            $.ajax({
                type:'post',
                url:"<?php echo url('login/login'); ?>",
                data:{
                    'username':$('#username').val(),
                    'password':$('#password').val(),
                    'token':"<?php echo token(); ?>"
                },
                success:function (data) {
                    layer.msg('登入成功', {
                        offset: '15px'
                        ,icon: 1
                        ,time: 1000
                    }, function(){
                        location.hash = '/';
                    });
                },
                error:function (data) {
                    console.log(data)
                }
            })
        });
    });
</script>-->
</html>