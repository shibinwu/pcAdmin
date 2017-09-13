<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><!--[if IE 9]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie9.css"/>--><![endif]--><!--[if IE 8]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie8.css"/>--><![endif]--><!--[if lt IE 9]>	<!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
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
</html>  <!--包含头文件-->    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    </body><div class="header">
    <ul class="headermenu">
        <li><a href="<?php echo U('Index/index');?>"><span class="icon icon-flatscreen"></span>首页</a></li>
        <li><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>
        <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>
        <li><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>
        <li><a href="<?php echo U('Index/mall');?>"><span class="icon icon-chart"></span>商城</a></li>
        <li><a href="<?php echo U('Index/news');?>"><span class="icon icon-flatscreen"></span>咨讯</a></li>
        <li><a href="<?php echo U('Index/active');?>"><span class="icon icon-flatscreen"></span>活动管理</a></li>
        <li><a href="<?php echo U('Index/member');?>"><span class="icon icon-chart"></span>会员管理</a></li>
        <li><a href="<?php echo U('Index/task');?>"><span class="icon icon-chart"></span>任务管理</a></li>
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
 <!--包含导航文件-->    <!DOCTYPE html>
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
</div><!--任务管理左侧栏-->
</body>
</html>  <!--包含任务管理左侧栏文件-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">任务编辑</h1>            <span class="pagedesc">这是关于CSGO的世锦赛，保证以下信息的真实性</span>        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                                                    <div class="contenttitle2">                        <h3>任务详情</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="<?php echo U('editOk');?>" method="post">                    	                        <p>                        	<label>任务名称</label>                            <span class="field"><input type="text" name="task_name" value="<?php echo ($data["task_name"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">                        <p>                            <label>任务类型</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛类型" name="task_type" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["task_type"] == 1 ): ?>selected="selected"<?php endif; ?>>新手任务</option>                                    <option value="2" <?php if($data["task_type"] == 2 ): ?>selected="selected"<?php endif; ?>>活动任务</option>                                    <option value="3" <?php if($data["task_type"] == 3 ): ?>selected="selected"<?php endif; ?>>每日任务</option>                                </select>                            </span>                        </p>                        <p>                            <label>任务奖励物品</label>                            <span class="formwrapper">                                <select data-placeholder="请选择奖励物品" name="reward_type" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["reward_type"] == 1 ): ?>selected="selected"<?php endif; ?>>积分</option>                                    <option value="2" <?php if($data["reward_type"] == 2 ): ?>selected="selected"<?php endif; ?>>P豆</option>                                    <option value="3" <?php if($data["reward_type"] == 3 ): ?>selected="selected"<?php endif; ?>>V豆</option>                                </select>                            </span>                        </p>                        <p>                            <label>任务奖励数量</label>                            <span class="field"><input type="text" name="reward_num" value="<?php echo ($data["reward_num"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>任务跳转链接</label>                            <span class="field"><input type="text" name="task_url" value="<?php echo ($data["task_url"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>任务指引提示</label>                            <span class="field"><input type="text" name="task_guide" value="<?php echo ($data["task_guide"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>完成任务需要的阶段数</label>                            <span class="field"><input type="text" name="task_stage" value="<?php echo ($data["task_stage"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2" id="btnSubmit">确认提交</button>                            <input type="reset" class="reset radius2" id="btnReset" value="刷新列表" />                        </p>                                                                    </form>                 </div><!--subcontent-->                </div><!--contentwrapper-->        	</div><!-- centercontent -->        </div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){//                window.location.href = "/index.php/Admin/Race/showlist";                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(8).addClass("current").siblings().removeClass("current")        });    });</script></html>