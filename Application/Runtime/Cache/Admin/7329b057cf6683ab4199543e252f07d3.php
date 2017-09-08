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
        <li><a href="<?php echo U('Index/index');?>"><span class="icon icon-flatscreen"></span>首页</a></li>
        <li><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>
        <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>
        <li><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>
        <li><a href="<?php echo U('Index/mall');?>"><span class="icon icon-chart"></span>商城</a></li>
        <li><a href="<?php echo U('Index/news');?>"><span class="icon icon-flatscreen"></span>咨讯</a></li>
        <li><a href="<?php echo U('Index/active');?>"><span class="icon icon-flatscreen"></span>活动管理</a></li>
        <li><a href="<?php echo U('Index/member');?>"><span class="icon icon-chart"></span>会员管理</a></li>
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
        <li><a href="#guess" class="editor">竞猜比赛管理</a>
            <span class="arrow"></span>
            <ul id="guess">
                <li><a href="<?php echo U('Guess/showList');?>">竞猜比赛列表</a></li>
                <li><a href="<?php echo U('Guess/add');?>">添加竞猜比赛</a></li>
            </ul>
        </li>

        <li><a href="#guessdata" class="error">竞猜比赛数据</a>
            <span class="arrow"></span>
            <ul id="guessdata">
                <li><a href="<?php echo U('Guessdata/showList');?>">数据列表</a></li>
                <li><a href="<?php echo U('Guessdata/add');?>">添加比赛数据</a></li>
            </ul>
        </li>

        <li><a href="#guessteam" class="error">竞猜队伍管理</a>
            <span class="arrow"></span>
            <ul id="guessteam">
                <li><a href="<?php echo U('Guessteam/showList');?>">队伍列表</a></li>
                <li><a href="<?php echo U('Guessteam/add');?>">添加队伍</a></li>
            </ul>
        </li>

        <li><a href="#guessuser" class="error">竞猜用户管理</a>
            <span class="arrow"></span>
            <ul id="guessuser">
                <li><a href="<?php echo U('Guessuser/showList');?>">用户列表</a></li>
                <li><a href="<?php echo U('Guessuser/add');?>">添加用户</a></li>
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
</div><!--竞猜左侧栏-->
</body>
</html>  <!--包含左侧栏-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">添加比赛数据</h1>            <span class="pagedesc">操作后台用户的管理模块，该窗口添加新的用户</span>        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                    <div class="contenttitle2">                        <h3>竞猜数据</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="/index.php/Admin/Guessdata/addOk" method="post">                    	                        <p>                        	<label>竞赛比赛ID</label>                            <span class="field"><input type="text" name="gid" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜左边队伍ID</label>                            <span class="field"><input type="text" name="ltid" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜右边队伍ID</label>                            <span class="field"><input type="text" name="rtid" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜队伍左边支持率</label>                            <span class="field"><input type="text" name="lrate" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜队伍左边支持率</label>                            <span class="field"><input type="text" name="rrate" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>让分局中让分队伍的ID</label>                            <span class="field"><input type="text" name="gtid" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>让分局中让的分数</label>                            <span class="field"><input type="text" name="score" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>比赛机制</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛机制" name="part" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">BO1</option>                                    <option value="2">BO2</option>                                    <option value="3">BO3</option>                                    <option value="4">BO4</option>                                    <option value="5">BO5</option>                                </select>                            </span>                        </p>                        <p>                            <label>竞猜类型</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞猜类型" name="type" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">猜输赢</option>                                    <option value="2">让分局</option>                                    <option value="3">大小分</option>                                </select>                            </span>                        </p>                        <p>                            <label>比率</label>                            <span class="field"><input type="text" name="rate" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞赛状态" name="status" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">未开始</option>                                    <option value="2">进行中</option>                                    <option value="3">结束</option>                                </select>                            </span>                        </p>                            <label>创建时间</label>                            <span class="field"><input type="text" name="ctime" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>修改时间</label>                            <span class="field"><input type="text" name="mtime" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                                                <p class="stdformbutton">                        	<button class="submit radius2">确认提交</button>                            <input type="reset" class="reset radius2" value="清空列表" />                        </p>                    </form>            </div><!--subcontent--> -->                </div><!--contentwrapper-->        	</div><!-- centercontent --></div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(3).addClass("current").siblings().removeClass("current")        });    });</script></html>