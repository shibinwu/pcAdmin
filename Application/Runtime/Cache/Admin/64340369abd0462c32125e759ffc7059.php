<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>数据表格页面_AmaAdmin后台管理系统模板 - 源码之家</title>
<link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/tables.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="/Public/Admin/css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="/Public/Admin/css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="/Public/Admin/js/plugins/css3-mediaqueries.js"></script>
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
                    <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatarbig.png"  width="80px" height="100px" alt="" />
                        <?php else: ?>
                        <img src="<?php echo (session('picurl')); ?>" width="80px" height="100px" alt="" /><?php endif; ?>
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
                    <li><a href="<?php echo U('Rbac/reset');?>?id=<?php echo (session('uid')); ?>">密码重置</a></li>
                    <li><a href="<?php echo U('Rbac/edit');?>?id=<?php echo (session('uid')); ?>">账号设置</a></li>
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
        <li><a href="#task" class="calendar">任务管理</a>
            <span class="arrow"></span>
            <ul id="task">
                <li><a href="<?php echo U('Task/showList');?>">任务列表</a></li>
                <li><a href="<?php echo U('Task/add');?>">添加任务</a></li>
            </ul>
        </li>

        <li><a href="#user" class="typo">登录信息</a>
            <span class="arrow"></span>
            <ul id="user">
                <li><a href="<?php echo U('Member/showList');?>">信息列表</a></li>
                <!--<li><a href="<?php echo U('Member/add');?>">添加信息</a></li>-->
            </ul>
        </li>

        <li><a href="#detail" class="elements">会员详情</a>
            <span class="arrow"></span>
            <ul id="detail">
                <li><a href="<?php echo U('Memberdetail/showList');?>">详情列表</a></li>
                <!--<li><a href="<?php echo U('Team/add');?>">添加详情</a></li>-->
            </ul>
        </li>

        <li><a href="#message" class="editor">会员评论</a>
            <span class="arrow"></span>
            <ul id="message">
                <li><a href="<?php echo U('Membermessage/showList');?>">评论列表</a></li>
                <!--<li><a href="<?php echo U('Membermessage/add');?>">添加评论</a></li>-->
            </ul>
        </li>

        <li><a href="#replay" class="editor">评论回复</a>
            <span class="arrow"></span>
            <ul id="replay">
                <li><a href="<?php echo U('Replay/showList');?>">评论回复列表</a></li>
                <!--<li><a href="<?php echo U('Replay/add');?>">添加评论</a></li>-->
            </ul>
        </li>

        <li><a href="#property" class="drafts">会员资产</a>
            <span class="arrow"></span>
            <ul id="property">
                <li><a href="<?php echo U('Memberproperty/showList');?>">资产列表</a></li>
                <!--<li><a href="<?php echo U('Team/add');?>">添加资产</a></li>-->
            </ul>
        </li>

        <li><a href="#friend" class="addons">我的好友</a>
            <span class="arrow"></span>
            <ul id="friend">
                <li><a href="<?php echo U('Friend/showList');?>">好友列表</a></li>
                <li><a href="<?php echo U('Friend/add');?>">添加好友</a></li>
            </ul>
        </li>
        <li><a href="#mytask" class="error">我的任务</a>
            <span class="arrow"></span>
            <ul id="mytask">
                <li><a href="<?php echo U('Membertask/showList');?>">任务列表</a></li>
                <!--<li><a href="<?php echo U('Membertask/add');?>">添加好友</a></li>-->
            </ul>
        </li>


    </ul>
    <a class="togglemenu"></a>
    <br /><br />
</div><!--leftmenu-->
</body>
</html>  <!--包含左侧栏文件-->

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">资产列表</h1>

        </div><!--pageheader-->

        <div id="contentwrapper" class="contentwrapper">


            <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                <colgroup>
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                </colgroup>
                <thead>
                <tr>
                    <th class="head0">MID</th>
                    <th class="head1">竞猜ID</th>
                    <th class="head0">发表评论者ID</th>
                    <th class="head0">评论内容</th>
                    <th class="head0">支持</th>
                    <th class="head0">反对</th>
                    <th class="head1">创建时间</th>
                    <th class="head0">修改时间</th>
                    <th class="head1">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vol["mid"]); ?></td>
                        <td><?php echo ($vol["g_id"]); ?></td>
                        <td><?php echo ($vol["uid"]); ?></td>
                        <td><?php echo ($vol["message"]); ?></td>
                        <td><?php echo ($vol["like"]); ?></td>
                        <td><?php echo ($vol["nolike"]); ?></td>
                        <td><?php if($vol["ctime"] == 0): ?>&nbsp
                            <?php else: ?>
                            <?php echo (date("Y-m-d H:i:s",$vol["ctime"])); endif; ?>
                        </td>
                        <td><?php if($vol["mtime"] == 0): ?>&nbsp
                            <?php else: ?>
                            <?php echo (date("Y-m-d H:i:s",$vol["mtime"])); endif; ?>
                        </td>
                        <td class="center" url="/index.php/Admin/Membermessage"><a href="javascript:;" data-id="<?php echo ($vol["mid"]); ?>" class="edit">编辑</a> &nbsp; <a href="javascript:;" data-id="<?php echo ($vol["mid"]); ?>" class="del">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

        </div><!--contentwrapper-->

	</div><!-- centercontent -->

</div><!--bodywrapper-->

</body>
<script type="text/javascript" src="/Public/Admin/js/showlist/showlist.js"></script>  <!--引入js实现编辑、删除、退出等事件-->
<script type="text/javascript">
    //解决$方法不能用的问题
    jQuery.noConflict();
    jQuery(document).ready(function($){
        //提交或清空方法
        $(function(){
            $(".headermenu>li").eq(7).addClass("current").siblings().removeClass("current")
        });
    });
</script>
</html>