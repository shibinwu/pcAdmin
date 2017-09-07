<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><!--[if IE 9]>    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/><![endif]--><!--[if IE 8]>    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/><![endif]--><!--[if lt IE 9]>	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="topheader">
    <div class="left">
        <h1 class="logo"><span><img src="/Public/Admin/images/logo.png" alt="" height="28px"/></span></h1>
        <span class="slogan">后台管理系统</span>

        <div class="search">
            <form action="" method="post">
                <input type="text" name="keyword" id="keyword" value="请输入" />
                <button class="submitbutton"></button>
            </form>
        </div><!--search-->

        <br clear="all" />

    </div><!--left-->

    <div class="right">
        <!--<div class="notification">
            <a class="count" href="ajax/notifications.html"><span>9</span></a>
        </div>-->
        <div class="userinfo">
            <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatar.png" alt="" />
                <?php else: ?>
                <img src="<?php echo (session('picurl')); ?>"  width="30px" alt="" /><?php endif; ?>

            <?php if($_SESSION['username']== ''): ?><span>游客</span>
                <?php else: ?>
                <span><?php echo (session('username')); ?></span><?php endif; ?>
        </div><!--userinfo-->

        <div class="userinfodrop">
            <div class="avatar">
                <a href="">
                    <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatarbig.png"  width="80px" alt="" />
                        <?php else: ?>
                        <img src="<?php echo (session('picurl')); ?>" width="80px" alt="" /><?php endif; ?>
                </a>
                <div class="changetheme">
                    切换主题: <br />
                    <a class="default"></a>
                    <a class="blueline"></a>
                    <a class="greenline"></a>
                    <a class="contrast"></a>
                    <a class="custombg"></a>
                </div>
            </div><!--avatar-->
            <div class="userdata">
                <h4><?php echo (session('nickname')); ?></h4>
                <span class="email"><?php echo (session('email')); ?></span>
                <ul>
                    <!--<li><a href="editprofile.html">编辑资料</a></li>-->
                    <li><a href="<?php echo U('User/edit');?>?id=<?php echo (session('uid')); ?>">账号设置</a></li>
                    <li><a href="help.html">帮助</a></li>
                    <li><a href="javascript:;" class="exit">退出</a></li>
                </ul>
            </div><!--userdata-->
        </div><!--userinfodrop-->
    </div><!--right-->
</div><!--topheader-->
</body>
</html>   <!--包含网页头文件-->    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    </body><div class="header">
    <ul class="headermenu">
        <li><a href="index.html"><span class="icon icon-flatscreen"></span>首页</a></li>
        <li><a href="battle.html"><span class="icon icon-speech"></span>对战中心</a></li>
        <li><a href="bigdata.html"><span class="icon icon-message"></span>大数据</a></li>
        <li><a href="guess.html"><span class="icon icon-pencil"></span>竞猜</a></li>
        <li><a href="mall.html"><span class="icon icon-chart"></span>商城</a></li>
        <li><a href="news.html"><span class="icon icon-flatscreen"></span>咨讯</a></li>
        <li><a href="active.html"><span class="icon icon-flatscreen"></span>活动管理</a></li>
        <li><a href="member.html"><span class="icon icon-chart"></span>会员管理</a></li>
    </ul>

    <!--<div class="headerwidget">-->
        <!--<div class="earnings">-->
            <!--<div class="one_half">-->
                <!--<h4>Today's Earnings</h4>-->
                <!--<h2>$640.01</h2>-->
            <!--</div>&lt;!&ndash;one_half&ndash;&gt;-->
            <!--<div class="one_half last alignright">-->
                <!--<h4>Current Rate</h4>-->
                <!--<h2>53%</h2>-->
            <!--</div>&lt;!&ndash;one_half last&ndash;&gt;-->
        <!--</div>&lt;!&ndash;earnings&ndash;&gt;-->
    <!--</div>&lt;!&ndash;headerwidget&ndash;&gt;-->

</div><!--header-->
</html>   <!--包含导航文件-->    <div class="vernav2 iconmenu">        <ul>            <li><a href="#user" class="editor">用户管理</a>                <span class="arrow"></span>                <ul id="user">                    <li><a href="<?php echo U('User/showList');?>">用户列表</a></li>                    <li><a href="<?php echo U('User/add');?>">添加用户</a></li>                </ul>            </li>            <li><a href="#index" class="editor">banner管理</a>                <span class="arrow"></span>                <ul id="index">                    <li><a href="forms.html">列表展示</a></li>                    <li><a href="wizard.html">添加banner</a></li>                </ul>            </li>            <li><a href="#addons" class="addons">其他页面</a>                <span class="arrow"></span>                <ul id="addons">                    <li><a href="newsfeed.html">新闻订阅</a></li>                    <li><a href="profile.html">资料页面</a></li>                    <li><a href="productlist.html">产品列表</a></li>                    <li><a href="photo.html">图片视频分享</a></li>                    <li><a href="gallery.html">相册</a></li>                    <li><a href="invoice.html">购物车</a></li>                </ul>            </li>        </ul>        <a class="togglemenu"></a>        <br /><br />    </div><!--左侧栏-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">添加用户</h1>            <span class="pagedesc">操作后台用户的管理模块，该窗口添加新的用户</span>        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                                                    <div class="contenttitle2">                        <h3>用户详情</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="/index.php/Admin/User/addOk" method="post" enctype="multipart/form-data">                    	                        <p>                        	<label>用户名</label>                            <span class="field"><input type="text" name="username" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>邮箱</label>                            <span class="field"><input type="text" name="email" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>手机号</label>                            <span class="field"><input type="text" name="phone" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>密码</label>                            <span class="field"><input type="text" name="password" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>头像</label>                            <span class="field">                                <input type="file" name="picurl" />                            </span>                        </p>                        <p>                            <label>昵称</label>                            <span class="field"><input type="text" name="nickname" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>注册时间</label>                            <span class="field"><input type="text" name="reg_time" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>角色ID</label>                            <span class="field"><input type="text" name="role_id" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>创建时间</label>                            <span class="field"><input type="text" name="ctime" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>修改时间</label>                            <span class="field"><input type="text" name="mtime" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                                                <p class="stdformbutton">                        	<button class="submit radius2">确认提交</button>                            <input type="reset" class="reset radius2" value="清空列表" />                        </p>                    </form>            </div><!--subcontent--> -->                </div><!--contentwrapper-->        	</div><!-- centercontent --></div><!--bodywrapper--></body><script type="text/javascript">// var um = UM.getEditor('myEditor');    jQuery.noConflict();    jQuery(document).ready(function($){        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(0).addClass("current").siblings().removeClass("current")        });    });</script></html>