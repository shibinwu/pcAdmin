<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/WdatePicker.js"></script><!--[if IE 9]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie9.css"/>--><![endif]--><!--[if IE 8]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie8.css"/>--><![endif]--><!--[if lt IE 9]>	<!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
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
</html>   <!--包含网页头文件-->    <!DOCTYPE html>
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
   <!--包含导航文件-->    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="vernav2 iconmenu">
    <ul>
        <li class="current"><a href="#guess" class="addons">竞猜比赛管理</a>
            <span class="arrow"></span>
            <ul id="guess">
                <li class="current"><a href="<?php echo U('Guess/showList');?>">竞猜比赛列表</a></li>
                <li><a href="<?php echo U('Guess/add');?>">添加竞猜比赛</a></li>
            </ul>
        </li>

        <li><a href="#guessdata" class="trash">竞猜比赛数据</a>
            <span class="arrow"></span>
            <ul id="guessdata">
                <li><a href="<?php echo U('Guessdata/showList');?>">数据列表</a></li>
                <li><a href="<?php echo U('Guessdata/add');?>">添加比赛数据</a></li>
            </ul>
        </li>

        <li><a href="#guessteam" class="support">竞猜队伍管理</a>
            <span class="arrow"></span>
            <ul id="guessteam">
                <li><a href="<?php echo U('Guessteam/showList');?>">队伍列表</a></li>
                <li><a href="<?php echo U('Guessteam/add');?>">添加队伍</a></li>
            </ul>
        </li>

        <li><a href="#guessuser" class="drafts">竞猜用户管理</a>
            <span class="arrow"></span>
            <ul id="guessuser">
                <li><a href="<?php echo U('Guessuser/showList');?>">用户列表</a></li>
                <li><a href="<?php echo U('Guessuser/add');?>">添加用户</a></li>
            </ul>
        </li>
    </ul>
    <a class="togglemenu"></a>
    <br /><br />
</div><!--竞猜左侧栏-->
</body>
</html>  <!--包含左侧栏-->    <div class="centercontent">        <div class="pageheader">            <h1 class="pagetitle">竞猜编辑</h1>            <span class="pagedesc">修改竞猜信息</span>        </div><!--pageheader-->        <div id="contentwrapper" class="contentwrapper">        	<div id="basicform" class="subcontent">                    <div class="contenttitle2">                        <h3>编辑竞猜</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="<?php echo U('editOk');?>" method="post">                        <p>                            <label>比赛名称</label>                            <span class="field"><input type="text" name="g_name" value="<?php echo ($data["g_name"]); ?>" class="smallinput" /></span>                            <input type="hidden" name="g_id" value="<?php echo ($data["g_id"]); ?>">                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜左边队伍</label>                            <span class="formwrapper">                                <select  name="g_leftId" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value="">请选择左边队伍</option>                                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol[gtid]); ?>" <?php if($data[g_leftid] == $vol[gtid]): ?>selected="selected"<?php endif; ?>><?php echo ($vol["gtname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                                </select>                            </span>                        </p>                        <p>                            <label>竞猜右边队伍</label>                            <span class="formwrapper">                                <select  name="g_rightId" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value="">请选择右边队伍</option>                                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["gtid"]); ?>" <?php if($data[g_rightid] == $vol[gtid]): ?>selected="selected"<?php endif; ?>><?php echo ($vol["gtname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                                </select>                            </span>                        </p>                        <p>                            <label>比赛机制</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛机制" name="mechanism" value="<?php echo ($data["mechanism"]); ?>" class="chzn-select" style="width:350px;" tabindex="2">                                    <option <?php if($data["mechanism"] == 1 ): ?>selected="selected"<?php endif; ?> >BO1</option>                                    <option value="2" <?php if($data["mechanism"] == 2 ): ?>selected="selected"<?php endif; ?>>BO2</option>                                    <option value="3" <?php if($data["mechanism"] == 3 ): ?>selected="selected"<?php endif; ?>>BO3</option>                                    <option value="4" <?php if($data["mechanism"] == 4 ): ?>selected="selected"<?php endif; ?>>BO4</option>                                    <option value="5" <?php if($data["mechanism"] == 5 ): ?>selected="selected"<?php endif; ?> >BO5 </option>                                </select>                            </span>                        </p>                        <p>                            <label>比赛类型</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛类型" name="guesstype" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["guesstype"] == 1 ): ?>selected="selected"<?php endif; ?>>CSGO</option>                                    <option value="2" <?php if($data["guesstype"] == 2 ): ?>selected="selected"<?php endif; ?>>DOTA</option>                                    <option value="3" <?php if($data["guesstype"] == 3 ): ?>selected="selected"<?php endif; ?>>体育赛事</option>                                </select>                            </span>                        </p>                        <p>                            <label>竞猜类型</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞猜类型" name="type" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["type"] == 1 ): ?>selected="selected"<?php endif; ?>>猜输赢</option>                                    <option value="2" <?php if($data["type"] == 2 ): ?>selected="selected"<?php endif; ?>>让分局</option>                                </select>                            </span>                        </p>                        <p>                            <label>当局开始时间</label>                            <span class="field"><input type="text" name="starttime" value="<?php echo (date('Y-m-d H:i:s',$data[starttime] )); ?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞赛状态" name="status" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["status"] == 1 ): ?>selected="selected"<?php endif; ?>>未开始</option>                                    <option value="2" <?php if($data["status"] == 2 ): ?>selected="selected"<?php endif; ?>>进行中</option>                                    <option value="3" <?php if($data["status"] == 3 ): ?>selected="selected"<?php endif; ?>>结束</option>                                </select>                            </span>                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2" id="btnSubmit">提交</button>                            <input type="reset" class="reset radius2" id="btnReset" value="清空" />                        </p>                    </form>            </div><!--subcontent-->        </div><!--contentwrapper-->	</div><!-- centercontent --></div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(3).addClass("current").siblings().removeClass("current")        });    });</script></html>