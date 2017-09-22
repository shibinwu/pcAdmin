<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>控制台页面_AmaAdmin后台管理系统模板 - 源码之家</title>
    <link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/custom/dashboard.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
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

<body class="withvernav">
<div class="bodywrapper">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--<link rel="stylesheet" href="/Public/Admin/css/style.blueline.css">-->
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
</html>   <!--包含网页头文件-->


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Admin/css/font_424100_bdb2xt0k59g4x6r/iconfont.css">
</head>
<body>

    </body><div class="header">
    <ul class="headermenu">
        <li><a href="<?php echo U('Index/index');?>"><span class="iconfont icon-xitongguanli"></span>系统管理</a></li>
        <li><a href="<?php echo U('Index/battle');?>"><span class="iconfont icon-duizhan"></span>对战中心</a></li>
        <li><a href="<?php echo U('Index/bigdata');?>"><span class="iconfont icon-dashuju"></span>大数据</a></li>
        <li><a href="<?php echo U('Index/guess');?>"><span class="iconfont icon-jingcai"></span>竞猜</a></li>
        <li><a href="<?php echo U('Index/mall');?>"><span class="iconfont icon-store"></span>商城</a></li>
        <li><a href="<?php echo U('Index/news');?>"><span class="iconfont icon-zixun"></span>咨讯</a></li>
        <li><a href="<?php echo U('Index/active');?>"><span class="iconfont icon-huodongzhongxin"></span>活动管理</a></li>
        <li><a href="<?php echo U('Index/member');?>"><span class="iconfont icon-wode"></span>会员管理</a></li>
        <!--<li><a href="<?php echo U('Index/task');?>"><span class="iconfont icon-chart"></span>任务管理</a></li>-->
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
</html>
   <!--包含导航文件-->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="vernav2 iconmenu">
    <ul>
        <li><a href="#task" class="editor">任务管理</a>
            <span class="arrow"></span>
            <ul id="task">
                <li><a href="<?php echo U('Task/showList');?>">任务列表</a></li>
                <li><a href="<?php echo U('Task/add');?>">添加任务</a></li>
            </ul>
        </li>

        <li><a href="#user" class="editor">登录信息</a>
            <span class="arrow"></span>
            <ul id="user">
                <li><a href="<?php echo U('Member/showList');?>">信息列表</a></li>
                <!--<li><a href="<?php echo U('Member/add');?>">添加信息</a></li>-->
            </ul>
        </li>

        <li><a href="#detail" class="error">会员详情</a>
            <span class="arrow"></span>
            <ul id="detail">
                <li><a href="<?php echo U('Memberdetail/showList');?>">详情列表</a></li>
                <!--<li><a href="<?php echo U('Team/add');?>">添加详情</a></li>-->
            </ul>
        </li>

        <li><a href="#team" class="error">会员评论</a>
            <span class="arrow"></span>
            <ul id="team">
                <li><a href="<?php echo U('Team/showList');?>">评论列表</a></li>
                <li><a href="<?php echo U('Team/add');?>">添加评论</a></li>
            </ul>
        </li>

        <li><a href="#team" class="error">会员资产</a>
            <span class="arrow"></span>
            <ul id="team">
                <li><a href="<?php echo U('Team/showList');?>">资产列表</a></li>
                <li><a href="<?php echo U('Team/add');?>">添加资产</a></li>
            </ul>
        </li>

        <li><a href="#friend" class="error">我的好友</a>
            <span class="arrow"></span>
            <ul id="friend">
                <li><a href="<?php echo U('Friend/showList');?>">好友列表</a></li>
                <li><a href="<?php echo U('Friend/add');?>">添加好友</a></li>
            </ul>
        </li>


    </ul>
    <a class="togglemenu"></a>
    <br /><br />
</div><!--leftmenu-->
</body>
</html>  <!--包含会员左侧栏-->


    <!DOCTYPE html>
<html lang="en">
<!--<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>-->
<!--<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>-->
<!--<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>-->
<!--<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.alerts.js"></script>-->
<!--<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.min.js"></script>-->
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.resize.min.js"></script>
<!--<script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>-->
<!--<script type="text/javascript" src="/Public/Admin/js/custom/messages.js"></script>-->
<script type="text/javascript" src="/Public/Admin/js/custom/charts.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="centercontent">

    <!--<div class="pageheader">-->
    <!--<h1 class="pagetitle">Messages</h1>-->
    <!--<span class="pagedesc">The content below are loaded using ajax</span>-->

    <!--<ul class="hornav">-->

    <!--</ul>-->
    <!--</div>&lt;!&ndash;pageheader&ndash;&gt;-->
    <!--<img src="/Public/Admin/images/bg/1.jpg"/>-->
    <!--<img src="<?php echo ($data["picurl"]); ?>" alt=""/>-->
    <div class="contentwrapper">

        <div id="charts" class="subcontent">

            <div class="one_half">
                <!--<div class="contenttitle2">-->
                    <!--<h3>Simple Chart</h3>-->
                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->
                <!--<br />-->
                <div id="realtime" style="height:300px;"></div>
            </div><!--one_half-->

            <div class="one_half last">
                <!--<div class="contenttitle2">-->
                    <!--<h3>Bar Graph</h3>-->
                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->
                <!--<br />-->
                <div id="piechart" style="height:300px;"></div>
            </div><!--one_half last-->

            <br clear="all" /><br />

            <div class="one_half">
                <!--<div class="contenttitle2">-->
                <!--<h3>Real Time Chart</h3>-->
                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->
                <!--<br />-->
                <div id="chartplace" style="height:300px;"></div>
                <br />
                <small>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</small>
            </div><!--one_half-->

            <div class="one_half last">
                <!--<div class="contenttitle2">-->
                <!--<h3>Pie Chart</h3>-->
                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->
                <!--<br />-->
                <div id="bargraph" style="height: 300px;"></div>
            </div><!--one_half last-->

            <br clear="all" />

        </div><!--#charts-->

        <div id="statistics" class="subcontent">
            &nbsp;
        </div><!--#statistics-->
    </div><!--contentwrapper-->

</div><!-- 后台默认显示主内容 -->
</body>
</html>


</div><!--bodywrapper-->

</body>
<!--js代码关于退出操作-->
<script type="text/javascript">
    jQuery(function() {
        jQuery('.exit').click(function () {
            window.location.href = "/index.php/Admin/Public/logout";
        });
        jQuery(".headermenu>li").eq(7).addClass("current").siblings().removeClass("current")
    });
</script>
</html>