<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/WdatePicker.js"></script><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/ueditor.all.min.js"> </script><!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败--><!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文--><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/lang/zh-cn/zh-cn.js"></script>    <!--[if IE 9]>    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/><![endif]--><!--[if IE 8]>    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/><![endif]--><!--[if lt IE 9]>	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
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
</html>  <!--包含头文件-->    <!DOCTYPE html>
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
	<title>Document</title>
</head>
<body>
    <div class="vernav2 iconmenu">
	<ul>

		<li><a href="#race" class="addons">赛事管理</a>
			<span class="arrow"></span>
			<ul id="race">
				<li class="arrow">
					<a href="<?php echo U('Race/showList');?>">赛事列表</a></li>
				<li><a href="<?php echo U('Race/add');?>">添加赛事</a></li>
			</ul>
		</li>

		<li><a href="#racedetail" class="elements">赛事详情</a>
			<span class="arrow"></span>
			<ul id="racedetail">
				<li class="arrow">
					<a href="<?php echo U('Racedetail/showList');?>">详情列表</a></li>
				<li><a href="<?php echo U('Racedetail/add');?>">添加详情</a></li>
			</ul>
		</li>

		<li><a href="#team" class="typo">战队管理</a>
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

	</ul>
	<a class="togglemenu"></a>
	<br /><br />
</div><!--对战中心左侧栏-->
</body>
</html>  <!--包含对战中心左侧栏文件-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">添加赛事</h1>            <span class="pagedesc">这是关于CSGO的世锦赛，保证以下信息的真实性</span>        </div><!--pageheader-->        <ul class="hornav">            <li class="current"><a href="#league">联赛</a></li>            <li><a href="#cup">杯赛</a></li>            <li><a href="#cages">铁笼赛</a></li>        </ul>                <div id="contentwrapper" class="contentwrapper">        	        	<div id="league" class="subcontent">                                                    <!--<div class="contenttitle2">-->                        <!--<h3>赛事详情</h3>-->                    <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->                    <form class="stdform" action="/index.php/Admin/Race/addOk" method="post" enctype="multipart/form-data">                    	                        <p>                        	<label>联赛名称</label>                            <span class="field"><input type="text" name="rname" class="smallinput" /></span>                        </p>                        <p>                            <label>主办方姓名</label>                            <span class="field"><input type="text" name="sponsor_name" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方电话</label>                            <span class="field"><input type="text" name="sponsor_phone" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方QQ</label>                            <span class="field"><input type="text" name="sponsor_qq" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <input type="hidden" name="types" value="0" ><!--"0"代表联赛（个人赛）-->                        <p>                            <label>联赛类型</label>                            <span class="formwrapper">                                <input type="radio" name="game_type" value="1" checked="checked"/> 快速比赛 &nbsp; &nbsp;                                <input type="radio" name="game_type" value="2"/> 专业比赛 &nbsp; &nbsp;                            </span>                        </p>                        <p>                            <label>赛事LOGO</label>                            <span class="field">                                <input type="file" name="picurl" />                                <small class="desc">“上传图片仅支持jpg、jpeg、png格式的图片；LOGO大小为250*132像素”</small>                            </span>                        </p>                        <p>                            <label>赛事开始时间</label>                            <span class="field"><input type="text" name="race_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>奖金</label>                            <span class="field"><input type="text" name="bonus" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名人数</label>                            <span class="field"><input type="text" name="signed_num" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名费</label>                            <span class="field"><input type="text" name="join_cost" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="race_stage" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="1">海选赛</option>                                  <option value="2">小组赛</option>                                  <option value="3">淘汰赛</option>                                  <option value="4">一连坐</option>                                </select>                            </span>                        </p>                        <p>                            <label>主办方</label>                            <span class="field"><input type="text" name="rice_sponsor" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名流程：</label>                            <span class="field"><script name='raceprocess' cols="80" rows="5" class="longinput" type="text/plain" id="myEditor" style="width:666px;height:240px;">                            </script></span>                        </p>                        <p>                            <label>联赛规则：</label>                            <span class="field"><script name='racerule' cols="80" rows="5" class="longinput" type="text/plain" id="myEditor1" style="width:666px;height:240px;">                            </script></span>                        </p>                        <p>                            <label>联系方式</label>                            <span class="formwrapper">                            	<input type="checkbox" value="1" name="contact" /> 电话 &nbsp; &nbsp;                            	<input type="checkbox" value="2" name="contact"  /> 微信 &nbsp; &nbsp;                                <input type="checkbox" value="3" name="contact"  /> QQ &nbsp; &nbsp;                            </span>                        </p>                        <p>                            <label>赛程介绍</label>                            <span class="field"><textarea name="desc" cols="80" rows="5" class="longinput"></textarea></span>                        </p>                        <p>                            <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择审核状态" class="chzn-select" name="checkStatus" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="1">通过</option>                                  <option value="2">审核中</option>                                  <option value="3">未通过</option>                                                           </select>                            </span>                        </p>                        <p>                            <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛事状态" class="chzn-select" name="status" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="0">未开始</option>                                  <option value="1">进行中</option>                                  <option value="2">结束</option>                                                           </select>                            </span>                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2">确认提交</button>                            <input type="reset" class="reset radius2" value="清空列表" />                        </p>                                                                    </form>                 </div><!--联赛表单-->            <div id="cup" class="subcontent" style="display: none">                <!--<div class="contenttitle2">-->                <!--<h3>赛事详情</h3>-->                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->                <form class="stdform" action="/index.php/Admin/Race/addOk" method="post" enctype="multipart/form-data">                    <p>                        <label>杯赛名称</label>                        <span class="field"><input type="text" name="rname" class="smallinput" /></span>                    </p>                    <p>                        <label>主办方姓名</label>                        <span class="field"><input type="text" name="sponsor_name" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>主办方电话</label>                        <span class="field"><input type="text" name="sponsor_phone" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>主办方QQ</label>                        <span class="field"><input type="text" name="sponsor_qq" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <input type="hidden" name="types" value="1"><!--联赛的类型“1”代表杯赛（战队赛）-->                    <!--<p>-->                        <!--<label>联赛类型</label>-->                            <!--<span class="formwrapper">-->                                <!--<input type="radio" name="types" value="0" checked="checked"/> 联赛 &nbsp; &nbsp;-->                                <!--<input type="radio" name="types" value="1"/> 杯赛 &nbsp; &nbsp;-->                                <!--<input type="radio" name="types" value="2"/> 铁笼赛 &nbsp; &nbsp;-->                            <!--</span>-->                    <!--</p>-->                    <p>                        <label>赛事LOGO</label>                            <span class="field">                                <input type="file" name="picurl" />                                <small class="desc">“上传图片仅支持jpg、jpeg、png格式的图片；LOGO大小为250*132像素”</small>                            </span>                    </p>                    <p>                        <label>奖金</label>                        <span class="field"><input type="text" name="bonus" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>游戏模式</label>                            <span class="formwrapper">                                <select data-placeholder="选择一个模式" name="race_mode" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="AP">全阵营选择</option>                                    <option value="CM">队长模式</option>                                    <option value="SD">个别征召</option>                                    <option value="AR">全阵营随机</option>                                    <option value="RD">随机征召</option>                                    <option value="RCM">反队长模式</option>                                    <option value="MO">单中模式</option>                                    <option value="LP">生疏模式</option>                                    <option value="CD">队长征召</option>                                    <option value="OMG">技能征召</option>                                    <option value="ARD">全阵营随机死亡竞赛</option>                                    <option value="SM">中路对单</option>                                </select>                            </span>                    </p>                    <p>                        <label>报名方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择报名方式" name="join_mode" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">自由模式</option>                                    <option value="2">密码模式</option>                                    <option value="3">申请模式</option>                                    <option value="4">邀请码模式</option>                                </select>                            </span>                    </p>                    <p>                        <label>比赛区域</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" name="game_area" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">中国区</option>                                    <option value="2">东南亚区</option>                                    <option value="3">美洲区</option>                                    <option value="4">欧洲区</option>                                    <option value="5">全球性</option>                                </select>                            </span>                    </p>                    <p>                    <label>参赛队伍数</label>                    <span class="field"><input type="text" name="signed_num" class="smallinput" /></span>                    <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>报名费</label>                        <span class="field"><input type="text" name="join_cost" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="race_stage" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">海选赛</option>                                    <option value="2">小组赛</option>                                    <option value="3">淘汰赛</option>                                    <option value="4">一连坐</option>                                </select>                            </span>                    </p>                    <p>                        <label>报名流程：</label>                            <span class="field"><script name='raceprocess' cols="80" rows="5" class="longinput" type="text/plain" id="myEditor2" style="width:666px;height:240px;">                            </script></span>                    </p>                    <p>                        <label>联赛规则：</label>                            <span class="field"><script name='racerule' cols="80" rows="5" class="longinput" type="text/plain" id="myEditor3" style="width:666px;height:240px;">                            </script></span>                    </p>                    <p>                        <label>联系方式</label>                            <span class="formwrapper">                            	<input type="checkbox" value="1" name="contact" /> 电话 &nbsp; &nbsp;                            	<input type="checkbox" value="2" name="contact"  /> 微信 &nbsp; &nbsp;                                <input type="checkbox" value="3" name="contact"  /> QQ &nbsp; &nbsp;                            </span>                    </p>                    <p>                        <label>报名时间</label>                            <span class="field"><input type="text" name="join_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" />&nbsp;&nbsp;                                <input type="text" name="join_end_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>比赛时间</label>                            <span class="field"><input type="text" name="race_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" />&nbsp;&nbsp;                                <input type="text" name="race_end_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>赛程介绍</label>                        <span class="field"><textarea name="desc" cols="80" rows="5" class="longinput"></textarea></span>                    </p>                    <p>                        <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择审核状态" class="chzn-select" name="checkStatus" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">通过</option>                                    <option value="2">审核中</option>                                    <option value="3">未通过</option>                                </select>                            </span>                    </p>                    <p>                        <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛事状态" class="chzn-select" name="status" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="0">未开始</option>                                    <option value="1">进行中</option>                                    <option value="2">结束</option>                                </select>                            </span>                    </p>                    <p class="stdformbutton">                        <button class="submit radius2">确认提交</button>                        <input type="reset" class="reset radius2" value="清空列表" />                    </p>                </form>            </div><!--杯赛表单-->            <div id="cages" class="subcontent" style="display: none">                <!--<div class="contenttitle2">-->                <!--<h3>赛事详情</h3>-->                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->                <form class="stdform" action="/index.php/Admin/Race/addOk" method="post" enctype="multipart/form-data">                    <p>                        <label>联赛名称</label>                        <span class="field"><input type="text" name="rname" class="smallinput" /></span>                    </p>                    <p>                        <label>主办方姓名</label>                        <span class="field"><input type="text" name="sponsor_name" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>主办方电话</label>                        <span class="field"><input type="text" name="sponsor_phone" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>主办方QQ</label>                        <span class="field"><input type="text" name="sponsor_qq" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>联赛类型</label>                            <span class="formwrapper">                                <input type="radio" name="types" checked="checked"/> 联赛 &nbsp; &nbsp;                                <input type="radio" name="types" /> 杯赛 &nbsp; &nbsp;                            </span>                    </p>                    <p>                        <label>赛事LOGO</label>                            <span class="field">                                <input type="file" name="picurl" />                                <small class="desc">“上传图片仅支持jpg、jpeg、png格式的图片；LOGO大小为250*132像素”</small>                            </span>                    </p>                    <p>                        <label>赛事开始时间</label>                        <span class="field"><input type="text" name="race_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>奖金</label>                        <span class="field"><input type="text" name="bonus" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>游戏模式</label>                            <span class="formwrapper">                                <select data-placeholder="选择一个模式" name="race_mode" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="AP">全阵营选择</option>                                    <option value="CM">队长模式</option>                                    <option value="SD">个别征召</option>                                    <option value="AR">全阵营随机</option>                                    <option value="RD">随机征召</option>                                    <option value="RCM">反队长模式</option>                                    <option value="MO">单中模式</option>                                    <option value="LP">生疏模式</option>                                    <option value="CD">队长征召</option>                                    <option value="OMG">技能征召</option>                                    <option value="ARD">全阵营随机死亡竞赛</option>                                    <option value="SM">中路对单</option>                                </select>                            </span>                    </p>                    <p>                        <label>报名方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择报名方式" name="join_mode" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">自由模式</option>                                    <option value="2">密码模式</option>                                    <option value="3">申请模式</option>                                    <option value="4">邀请码模式</option>                                </select>                            </span>                    </p>                    <p>                        <label>比赛区域</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" name="game_area" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1">中国区</option>                                    <option value="2">东南亚区</option>                                    <option value="3">美洲区</option>                                    <option value="4">欧洲区</option>                                    <option value="5">全球性</option>                                </select>                            </span>                    </p>                    <!--<p>-->                    <!--<label>报名人数</label>-->                    <!--<span class="field"><input type="text" name="signed_num" class="smallinput" /></span>-->                    <!--&lt;!&ndash; <small class="desc">Small description of this field.</small> &ndash;&gt;-->                    <!--</p>-->                    <p>                        <label>报名费</label>                        <span class="field"><input type="text" name="join_cost" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="race_stage" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="United States">海选赛</option>                                    <option value="United Kingdom">小组赛</option>                                    <option value="Afghanistan">淘汰赛</option>                                    <option value="Albania">一连坐</option>                                </select>                            </span>                    </p>                    <p>                        <label>主办方</label>                        <span class="field"><input type="text" name="rice_sponsor" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>报名流程</label>                        <span class="field"><textarea cols="80" rows="5" class="longinput"></textarea></span>                    </p>                    <p>                        <label>联赛规则</label>                        <span class="field"><input type="text" name="input1" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>联系方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="United States">电话</option>                                    <option value="United Kingdom">微信</option>                                    <option value="Afghanistan">QQ</option>                                </select>                            </span>                    </p>                    <p>                        <label>报名时间</label>                        <span class="field"><input type="text" name="join_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>比赛时间</label>                        <span class="field"><input type="text" name="race_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>赛程介绍</label>                        <span class="field"><input type="text" name="input1"  class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                    </p>                    <p>                        <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择审核状态" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="United States">通过</option>                                    <option value="United Kingdom">审核中</option>                                    <option value="Afghanistan">未通过</option>                                </select>                            </span>                    </p>                    <p>                        <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛事状态" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="United States">未开始</option>                                    <option value="United Kingdom">进行中</option>                                    <option value="Afghanistan">结束</option>                                </select>                            </span>                    </p>                    <p class="stdformbutton">                        <button class="submit radius2">确认提交</button>                        <input type="reset" class="reset radius2" value="清空列表" />                    </p>                </form>            </div><!--铁笼赛表单-->        </div><!--contentwrapper-->        	</div><!-- centercontent -->        </div><!--bodywrapper--></body><script type="text/javascript">    var um = UE.getEditor('myEditor');    var um = UE.getEditor('myEditor1');    var um = UE.getEditor('myEditor2');    var um = UE.getEditor('myEditor3');    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(1).addClass("current").siblings().removeClass("current")        });    });</script></html>
=======
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/WdatePicker.js"></script><!--[if IE 9]>    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/><![endif]--><!--[if IE 8]>    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/><![endif]--><!--[if lt IE 9]>	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
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
</html>  <!--包含头文件-->    <!DOCTYPE html>
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
	<title>Document</title>
</head>
<body>
    <div class="vernav2 iconmenu">
	<ul>

		<li><a href="#race" class="addons">赛事管理</a>
			<span class="arrow"></span>
			<ul id="race">
				<li class="arrow">
					<a href="<?php echo U('Race/showList');?>">赛事列表</a></li>
				<li><a href="<?php echo U('Race/add');?>">添加赛事</a></li>
			</ul>
		</li>

		<li><a href="#racedetail" class="elements">赛事详情</a>
			<span class="arrow"></span>
			<ul id="racedetail">
				<li class="arrow">
					<a href="<?php echo U('Racedetail/showList');?>">详情列表</a></li>
				<li><a href="<?php echo U('Racedetail/add');?>">添加详情</a></li>
			</ul>
		</li>

		<li><a href="#team" class="typo">战队管理</a>
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

	</ul>
	<a class="togglemenu"></a>
	<br /><br />
</div><!--对战中心左侧栏-->
</body>
</html>  <!--包含对战中心左侧栏文件-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">添加赛事</h1>            <span class="pagedesc">这是关于CSGO的世锦赛，保证以下信息的真实性</span>                       <!--  <ul class="hornav">                <li class="current"><a href="#basicform">Basic</a></li>                <li><a href="#validation">Validation</a></li>            </ul> -->        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                                                    <div class="contenttitle2">                        <h3>赛事详情</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="/index.php/Admin/Race/addOk" method="post" enctype="multipart/form-data">                    	                        <p>                        	<label>联赛名称</label>                            <span class="field"><input type="text" name="rname" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方姓名</label>                            <span class="field"><input type="text" name="sponsor_name" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方电话</label>                            <span class="field"><input type="text" name="sponsor_phone" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方QQ</label>                            <span class="field"><input type="text" name="sponsor_qq" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>联赛类型</label>                            <span class="formwrapper">                                <input type="radio" name="types" /> 联赛 &nbsp; &nbsp;                                <input type="radio" name="types" checked="checked" /> 杯赛 &nbsp; &nbsp;                                <!-- <input type="radio" name="radiofield" disabled="disabled" /> Disabled Radio  &nbsp; &nbsp;                                <input type="radio" name="radiofield" checked="checked" disabled="disabled" /> Disabled Radio  -->                            </span>                        </p>                        <p>                            <label>赛事LOGO</label>                            <span class="field">                                <input type="file" name="picurl" />                            </span>                        </p>                        <p>                            <label>赛事开始时间</label>                            <span class="field"><input type="text" name="race_start_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>奖金</label>                            <span class="field"><input type="text" name="bonus" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>游戏模式</label>                            <span class="formwrapper">                                <select data-placeholder="选择一个模式" name="race_mode" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="全阵营模式">全阵营模式</option>                                  <option value="中单模式">中单模式</option>                                  <option value="技能征召">技能征召</option>                                </select>                            </span>                        </p>                        <p>                            <label>报名方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择报名方式" name="join_mode" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="自由模式">自由模式</option>                                  <option value="United Kingdom">密码模式</option>                                   <option value="Afghanistan">申请模式</option>                                   <option value="Albania">邀请码模式</option>                                                                   </select>                            </span>                        </p>                        <p>                            <label>比赛区域</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" name="game_area" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">中国区</option>                                   <option value="United Kingdom">东南亚区</option>                                   <option value="Afghanistan">美洲区</option>                                   <option value="Albania">欧洲区</option>                                   <option value="Algeria">全球性</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>报名人数</label>                            <span class="field"><input type="text" name="signed_num" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名费</label>                            <span class="field"><input type="text" name="join_mode" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="race_stage" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">海选赛</option>                                   <option value="United Kingdom">小组赛</option>                                   <option value="Afghanistan">淘汰赛</option>                                   <option value="Albania">一连坐</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>主办方</label>                            <span class="field"><input type="text" name="rice_sponsor" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名流程</label>                            <span class="field"><textarea cols="80" rows="5" class="longinput"></textarea></span>                         </p>                        <p>                            <label>联赛规则</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>联系方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">电话</option>                                   <option value="United Kingdom">微信</option>                                   <option value="Afghanistan">QQ</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>报名时间</label>                            <span class="field"><input type="text" name="join_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>比赛时间</label>                            <span class="field"><input type="text" name="race_time" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程介绍</label>                            <span class="field"><input type="text" name="input1"  class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择审核状态" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">通过</option>                                   <option value="United Kingdom">审核中</option>                                   <option value="Afghanistan">未通过</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛事状态" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">未开始</option>                                   <option value="United Kingdom">进行中</option>                                   <option value="Afghanistan">结束</option>                                                            </select>                            </span>                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2">确认提交</button>                            <input type="reset" class="reset radius2" value="清空列表" />                        </p>                                                                    </form>                 </div><!--subcontent--> -->                </div><!--contentwrapper-->        	</div><!-- centercontent -->        </div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(1).addClass("current").siblings().removeClass("current")        });    });</script></html>
>>>>>>> dffa6171d09a4534266e7c53e9ed1646f152043a
