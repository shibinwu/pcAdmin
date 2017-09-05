<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><!--[if IE 9]>    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/><![endif]--><!--[if IE 8]>    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/><![endif]--><!--[if lt IE 9]>	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="topheader">
    <div class="left">
        <h1 class="logo">Wnv.<span>Admin</span></h1>
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
            <img src="/Public/Admin/images/thumbs/avatar.png" alt="" />
            <span><?php echo (session('uname')); ?></span>
        </div><!--userinfo-->

        <div class="userinfodrop">
            <div class="avatar">
                <a href=""><img src="/Public/Admin/images/thumbs/avatarbig.png" alt="" /></a>
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
                <h4>Juan</h4>
                <span class="email">youremail@yourdomain.com</span>
                <ul>
                    <li><a href="editprofile.html">编辑资料</a></li>
                    <li><a href="accountsettings.html">账号设置</a></li>
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
        <li><a href="index.html"><span class="icon icon-flatscreen"></span>首页</a></li>
        <li><a href="battle.html"><span class="icon icon-flatscreen"></span>对战中心</a></li>
        <li><a href="bigdata.html"><span class="icon icon-pencil"></span>大数据</a></li>
        <li><a href="guess.html"><span class="icon icon-message"></span>竞猜</a></li>
        <li><a href="mall.html"><span class="icon icon-chart"></span>商城</a></li>
        <li><a href="news.html"><span class="icon icon-flatscreen"></span>咨讯</a></li>
        <li><a href="active.html"><span class="icon icon-flatscreen"></span>活动管理</a></li>
        <li><a href="member.html"><span class="icon icon-chart"></span>会员管理</a></li>
    </ul>

    <div class="headerwidget">
        <div class="earnings">
            <div class="one_half">
                <h4>Today's Earnings</h4>
                <h2>$640.01</h2>
            </div><!--one_half-->
            <div class="one_half last alignright">
                <h4>Current Rate</h4>
                <h2>53%</h2>
            </div><!--one_half last-->
        </div><!--earnings-->
    </div><!--headerwidget-->

</div><!--header-->
</html> <!--包含导航文件-->    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <div class="vernav2 iconmenu">
	<ul>
		<li><a href="#formsub" class="editor">游戏管理</a>
			<span class="arrow"></span>
			<ul id="formsub">
				<li><a href="forms.html">游戏类型</a></li>
				<li><a href="wizard.html">饰品</a></li>
				<li><a href="editor.html">英雄</a></li>
			</ul>
		</li>

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

		<li><a href="#teammember" class="error">战队成员</a>
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
</html>  <!--包含对战中心左侧栏文件-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">添加赛事</h1>            <span class="pagedesc">这是关于CSGO的世锦赛，保证以下信息的真实性</span>                       <!--  <ul class="hornav">                <li class="current"><a href="#basicform">Basic</a></li>                <li><a href="#validation">Validation</a></li>            </ul> -->        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                                                    <div class="contenttitle2">                        <h3>赛事详情</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="/index.php/Admin/Race/addOk" method="post">                    	                        <p>                        	<label>联赛名称</label>                            <span class="field"><input type="text" name="rname" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方姓名</label>                            <span class="field"><input type="text" name="sponsor_name" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方电话</label>                            <span class="field"><input type="text" name="sponsor_phone" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方QQ</label>                            <span class="field"><input type="text" name="sponsor_qq" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>联赛类型</label>                            <span class="formwrapper">                                <input type="radio" name="types" /> 联赛 &nbsp; &nbsp;                                <input type="radio" name="types" checked="checked" /> 杯赛 &nbsp; &nbsp;                                <!-- <input type="radio" name="radiofield" disabled="disabled" /> Disabled Radio  &nbsp; &nbsp;                                <input type="radio" name="radiofield" checked="checked" disabled="disabled" /> Disabled Radio  -->                            </span>                        </p>                        <p>                            <label>赛事LOGO</label>                            <span class="field">                                <input type="file" name="picurl" />                            </span>                        </p>                        <p>                            <label>赛事开始时间</label>                            <span class="field"><input type="text" name="race_start_time" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>奖金</label>                            <span class="field"><input type="text" name="bonus" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>游戏模式</label>                            <span class="formwrapper">                                <select data-placeholder="选择一个模式" name="race_mode" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="全阵营模式">全阵营模式</option>                                  <option value="中单模式">中单模式</option>                                  <option value="Afghanistan">技能征召</option>                                   <option value="Albania">Albania</option>                                   <option value="Algeria">Algeria</option>                                   <option value="American Samoa">American Samoa</option>                                   <option value="Andorra">Andorra</option>                                   <option value="Angola">Angola</option>                                   <option value="Anguilla">Anguilla</option>                                   <option value="Antarctica">Antarctica</option>                                   <option value="Antigua and Barbuda">Antigua and Barbuda</option>                                   <option value="Argentina">Argentina</option>                                   <option value="Armenia">Armenia</option>                                   <option value="Aruba">Aruba</option>                                   <option value="Australia">Australia</option>                                   <option value="Austria">Austria</option>                                   <option value="Azerbaijan">Azerbaijan</option>                                   <option value="Bahamas">Bahamas</option>                                                                  </select>                            </span>                        </p>                        <p>                            <label>报名方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择报名方式" name="join_mode" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="自由模式">自由模式</option>                                  <option value="United Kingdom">密码模式</option>                                   <option value="Afghanistan">申请模式</option>                                   <option value="Albania">邀请码模式</option>                                                                   </select>                            </span>                        </p>                        <p>                            <label>比赛区域</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" name="game_area" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">中国区</option>                                   <option value="United Kingdom">东南亚区</option>                                   <option value="Afghanistan">美洲区</option>                                   <option value="Albania">欧洲区</option>                                   <option value="Algeria">全球性</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>报名人数</label>                            <span class="field"><input type="text" name="signed_num" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名费</label>                            <span class="field"><input type="text" name="join_mode" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="race_stage" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">海选赛</option>                                   <option value="United Kingdom">小组赛</option>                                   <option value="Afghanistan">淘汰赛</option>                                   <option value="Albania">一连坐</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>主办方</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名流程</label>                            <span class="field"><textarea cols="80" rows="5" class="longinput"></textarea></span>                         </p>                        <p>                            <label>联赛规则</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>联系方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">电话</option>                                   <option value="United Kingdom">微信</option>                                   <option value="Afghanistan">QQ</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>报名时间</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>比赛时间</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程介绍</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">通过</option>                                   <option value="United Kingdom">审核中</option>                                   <option value="Afghanistan">未通过</option>                                                            </select>                            </span>                        </p>                        <p>                            <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="United States">未开始</option>                                   <option value="United Kingdom">进行中</option>                                   <option value="Afghanistan">结束</option>                                                            </select>                            </span>                        </p>                                                <p>                            <label>创建时间</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>修改时间</label>                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                                                <p class="stdformbutton">                        	<button class="submit radius2">提交</button>                            <input type="reset" class="reset radius2" value="Reset Button" />                        </p>                                                                    </form>                 </div><!--subcontent--> -->                </div><!--contentwrapper-->        	</div><!-- centercontent -->        </div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(1).addClass("current").siblings().removeClass("current")        });    });</script></html>