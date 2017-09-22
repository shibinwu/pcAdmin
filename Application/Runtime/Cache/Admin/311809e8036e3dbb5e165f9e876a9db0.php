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
</html> <!--包含头文件-->

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
  <!--包含导航栏文件-->

    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <div class="vernav2 iconmenu">
	<ul>

		<li><a href="#race" class="error">赛事管理</a>
			<span class="arrow"></span>
			<ul id="race">
				<li class="arrow">
					<a href="<?php echo U('Race/showList');?>">赛事列表</a></li>
				<li><a href="<?php echo U('Race/add');?>">添加赛事</a></li>
			</ul>
		</li>

		<li><a href="#racedetail" class="error">赛事详情</a>
			<span class="arrow"></span>
			<ul id="racedetail">
				<li class="arrow">
					<a href="<?php echo U('Racedetail/showList');?>">详情列表</a></li>
				<li><a href="<?php echo U('Racedetail/add');?>">添加详情</a></li>
			</ul>
		</li>

		<li><a href="#team" class="error">战队管理</a>
			<span class="arrow"></span>
			<ul id="team">
				<li><a href="<?php echo U('Team/showList');?>">战队列表</a></li>
				<li><a href="<?php echo U('Team/add');?>">添加战队</a></li>
			</ul>
		</li>

		<li><a href="#teammember" class="tables">战队成员</a>
			<span class="arrow"></span>
			<ul id="teammember">
				<li><a href="<?php echo U('Teammember/showList');?>">成员列表</a></li>
				<li><a href="<?php echo U('Teammember/add');?>">添加成员</a></li>
			</ul>
		</li>

		<li><a href="#addons" class="addons">其他页面</a>
			<span class="arrow"></span>
			<ul id="addons">
				<li><a href="newsfeed.html">新闻订阅</a></li>
				<li><a href="profile.html">资料页面</a></li>
				<li><a href="productlist.html">产品列表</a></li>
				<li><a href="photo.html">图片视频分享</a></li>
				<li><a href="gallery.html">相册</a></li>
				<li><a href="invoice.html">购物车</a></li>
			</ul>
		</li>
	</ul>
	<a class="togglemenu"></a>
	<br /><br />
</div><!--对战中心左侧栏-->
</body>
</html>  <!--包含对战中心左侧栏文件-->

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">赛事详情</h1>
            <span class="pagedesc">This is a sample description of a page</span>

        </div><!--pageheader-->

        <div id="contentwrapper" class="contentwrapper">


            <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                <colgroup>
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                </colgroup>
                <thead>
                <tr>
                    <th class="head0">战队ID</th>
                    <th class="head1">战队成员ID</th>
                    <th class="head0">战队国家ID</th>
                    <th class="head1">did</th>
                    <th class="head0">战队名字</th>
                    <th class="head1">战队简称</th>
                    <th class="head0">战队头像</th>
                    <th class="head1">战队简介</th>
                    <th class="head1">添加时间</th>
                    <th class="head1">战队状态</th>
                    <th class="head1">修改时间</th>
                    <th class="head1">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vol["tid"]); ?></td>
                        <td><?php echo ($vol["uid"]); ?></td>
                        <td><?php echo ($vol["cid"]); ?></td>
                        <td><?php echo ($vol["did"]); ?></td>
                        <td><?php echo ($vol["team_name"]); ?></td>
                        <td><?php echo ($vol["team_shortname"]); ?></td>
                        <td><?php echo ($vol["picurl"]); ?></td>
                        <td><?php echo ($vol["team_desc"]); ?></td>
                        <!--<td><?php echo ($vol["allow_join"]); ?></td>-->
                        <td><?php echo ($vol["addtime"]); ?></td>
                        <td><?php if($vol["status"] == 1): ?>正常
                            <?php elseif($vol["status"] ==2): ?>解散
                            <?php else: ?>&nbsp<?php endif; ?>
                        </td>
                        <td><?php echo ($vol["mtime"]); ?></td>
                        <td class="center" url="/index.php/Admin/Team"><a href="javascript:;" data-id="<?php echo ($vol["tid"]); ?>" class="edit">编辑</a> &nbsp; <a href="javascript:;" data-id="<?php echo ($vol["tid"]); ?>" class="del">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <!--<?php if($vol["pid"] == 0): ?>顶级部门<?php else: echo ($vol["parentName"]); endif; ?>-->

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
            $(".headermenu>li").eq(1).addClass("current").siblings().removeClass("current")
        });
    });
</script>
</html>