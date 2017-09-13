<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>登录页面_AmaAdmin后台管理系统模板 - 源码之家</title>
<link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/index.js"></script>
    <!-- <script src="/Public/Admin/js/plugins/login.js"></script> -->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
    <script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loginpage">
    <div class="loginbox">
        <div class="loginboxinner">
            
            <div class="logo">
                <h1 class="logo">Wnv.<span>Admin</span></h1>
                <span class="slogan">后台管理系统</span>
            </div><!--logo-->
            
            <br clear="all" /><br />
            
            <div class="nousername">
                <div class="loginmsg">密码不正确.</div>
            </div><!--nousername-->
            
            <div class="nopassword">
                <div class="loginmsg">密码不正确.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="/Public/Admin/images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            <!-- 表单信息 -->
            <form id="login" action="<?php echo U('check');?>" method="post">
                
                <div class="username">
                    <div class="usernameinner">
                        <input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                    <div class="passwordinner">
                        <input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <!-- 修改登录按钮的默认行为，取消跳转 -->
                <!--<a href="javascript:;" class="btn">登录</a>-->
                <button class="btn">登录</button>
                <div class="keep"><input type="checkbox" /> 记住密码</div>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
 <!-- <script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script> -->
<!-- <script type="text/javascript" src="/Public/Admin/js/common.js"></script> -->
<script type="text/javascript">
    //jQuery代码实现表单的提交
    jQuery(function(){
   //    给登录按钮绑定点击事件
        jQuery('.btn').on('click',function(){
            //事件的处理程序
            jQuery('form').submit();
            // alert(1);
      });
    });

</script>
</html>