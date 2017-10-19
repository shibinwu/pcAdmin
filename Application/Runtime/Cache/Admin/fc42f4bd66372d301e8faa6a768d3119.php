<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/ueditor.all.min.js"> </script><!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败--><!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文--><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/lang/zh-cn/zh-cn.js"></script><script type="text/javascript" charset="utf-8" src="/Public/Admin/js/custom/ue/ueditor.parse.min.js"></script>    <!--[if IE 9]>        <!--<link rel="stylesheet" media="screen" href="css/style.ie9.css"/>--><![endif]--><!--[if IE 8]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie8.css"/>--><![endif]--><!--[if lt IE 9]>	<!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
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
</html>  <!--包含对战中心左侧栏文件-->            <div class="centercontent">            <div class="pageheader">            <h1 class="pagetitle">赛事审核</h1>            <span class="pagedesc">这是关于CSGO的世锦赛，保证以下信息的真实性</span>        </div><!--pageheader-->                <div id="contentwrapper" class="contentwrapper">        	        	<div id="basicform" class="subcontent">                    <form id="form1" class="stdform" action="<?php echo U('editOk');?>" method="post" enctype="multipart/form-data">                    	                        <p>                        	<label>联赛名称</label>                            <span class="field"><input type="text" name="rname" value="<?php echo ($data["rname"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <input type="hidden" name="rid" value="<?php echo ($data["rid"]); ?>">                        <p>                            <label>主办方姓名</label>                            <span class="field"><input type="text" name="sponsor_name" value="<?php echo ($data["sponsor_name"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方电话</label>                            <span class="field"><input type="text" name="sponsor_phone" value="<?php echo ($data["sponsor_phone"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>主办方QQ</label>                            <span class="field"><input type="text" name="sponsor_qq" value="<?php echo ($data["sponsor_qq"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>联赛类型</label>                            <span class="formwrapper">                                <input type="radio" name="types" <?php if($data["types"] == 0): ?>checked="checked"<?php endif; ?> /> 联赛 &nbsp; &nbsp;                                <input type="radio" name="types" <?php if($data["types"] == 1): ?>checked="checked"<?php endif; ?> /> 杯赛 &nbsp; &nbsp;                                <input type="radio" name="types" <?php if($data["types"] == 2): ?>checked="checked"<?php endif; ?> /> 铁笼赛 &nbsp; &nbsp;                                <!-- <input type="radio" name="radiofield" disabled="disabled" /> Disabled Radio  &nbsp; &nbsp;                                <input type="radio" name="radiofield" checked="checked" disabled="disabled" /> Disabled Radio  -->                            </span>                        </p>                        <p>                            <label>赛事LOGO</label>                            <span class="field">                                <img src="<?php echo ($data["picurl"]); ?>" alt="" width="250px">                                <input type="file" name="picurl" />                            </span>                        </p>                        <!--<p>-->                            <!--<label>赛事开始时间</label>-->                            <!--<span class="field"><input type="text" name="race_start_time" value="<?php echo (date( 'Y-m-d H:i:s',$data["race_start_time"])); ?>" class="smallinput" /></span>-->                            <!--&lt;!&ndash; <small class="desc">Small description of this field.</small> &ndash;&gt;-->                        <!--</p>-->                        <p>                            <label>奖金</label>                            <span class="field"><input type="text" name="bonus" value="<?php echo ($data["bonus"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>游戏模式</label>                            <span class="formwrapper">                                <select data-placeholder="选择一个模式" name="race_mode" value="<?php echo ($data["race_mode"]); ?>" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                    <option value="AP" <?php if($data["race_mode"] == AP ): ?>selected="selected"<?php endif; ?>>全阵营选择</option>                                    <option value="CM" <?php if($data["race_mode"] == CM ): ?>selected="selected"<?php endif; ?>>队长模式</option>                                    <option value="SD" <?php if($data["race_mode"] == SD ): ?>selected="selected"<?php endif; ?>>个别征召</option>                                    <option value="AR" <?php if($data["race_mode"] == AR ): ?>selected="selected"<?php endif; ?>>全阵营随机</option>                                    <option value="RD" <?php if($data["race_mode"] == RD ): ?>selected="selected"<?php endif; ?>>随机征召</option>                                    <option value="RCM" <?php if($data["race_mode"] == RCM ): ?>selected="selected"<?php endif; ?>>反队长模式</option>                                    <option value="MO" <?php if($data["race_mode"] == MO ): ?>selected="selected"<?php endif; ?>>单中模式</option>                                    <option value="LP" <?php if($data["race_mode"] == LP ): ?>selected="selected"<?php endif; ?>>生疏模式</option>                                    <option value="CD" <?php if($data["race_mode"] == CD ): ?>selected="selected"<?php endif; ?>>队长征召</option>                                    <option value="OMG" <?php if($data["race_mode"] == OMG ): ?>selected="selected"<?php endif; ?>>技能征召</option>                                    <option value="ARD" <?php if($data["race_mode"] == ARD ): ?>selected="selected"<?php endif; ?>>全阵营随机死亡竞赛</option>                                    <option value="SM" <?php if($data["race_mode"] == SM ): ?>selected="selected"<?php endif; ?>>中路对单</option>                                </select>                            </span>                        </p>                        <p>                            <label>报名方式</label>                            <span class="formwrapper">                                <select data-placeholder="请选择报名方式" name="join_mode" value="<?php echo ($data["join_mode"]); ?>"class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="1" <?php if($data["join_mode"] == 1 ): ?>selected="selected"<?php endif; ?>>自由模式</option>                                  <option value="2" <?php if($data["join_mode"] == 2 ): ?>selected="selected"<?php endif; ?>>密码模式</option>                                  <option value="3" <?php if($data["join_mode"] == 3 ): ?>selected="selected"<?php endif; ?>>申请模式</option>                                  <option value="4" <?php if($data["join_mode"] == 4 ): ?>selected="selected"<?php endif; ?>>邀请码模式</option>                                </select>                            </span>                        </p>                        <p>                            <label>比赛区域</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" name="game_area" value="<?php echo ($data["game_area"]); ?> "class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="1" <?php if($data["game_area"] == 1 ): ?>selected="selected"<?php endif; ?>>中国区</option>                                  <option value="2" <?php if($data["gaem_area"] == 2 ): ?>selected="selected"<?php endif; ?>>东南亚区</option>                                  <option value="3" <?php if($data["game_area"] == 3 ): ?>selected="selected"<?php endif; ?>>美洲区</option>                                  <option value="4" <?php if($data["game_area"] == 4 ): ?>selected="selected"<?php endif; ?>>欧洲区</option>                                  <option value="5" <?php if($data["game_area"] == 5 ): ?>selected="selected"<?php endif; ?>>全球性</option>                                </select>                            </span>                        </p>                        <p>                            <label>报名人数</label>                            <span class="field"><input type="text" name="signed_num" value="<?php echo ($data["signed_num"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名费</label>                            <span class="field"><input type="text" name="join_cost" value="<?php echo ($data["join_cost"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程阶段</label>                            <span class="formwrapper">                                <select data-placeholder="请选择赛程阶段" name="rice_stage" value="<?php echo ($data["rice_stage"]); ?>" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="1" <?php if($data["rice_stage"] == 1 ): ?>selected="selected"<?php endif; ?>>海选赛</option>                                  <option value="2" <?php if($data["rice_stage"] == 2 ): ?>selected="selected"<?php endif; ?>>小组赛</option>                                  <option value="3" <?php if($data["rice_stage"] == 3 ): ?>selected="selected"<?php endif; ?>>淘汰赛</option>                                  <option value="4" <?php if($data["rice_stage"] == 4 ): ?>selected="selected"<?php endif; ?>>一连坐</option>                                                           </select>                            </span>                        </p>                        <p>                            <label>主办方</label>                            <span class="field"><input type="text" name="rice_sponsor" value="<?php echo ($data["rice_sponsor"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>报名流程：</label>                            <span class="field" ><script name='raceprocess'  cols="80" rows="5" class="longinput" type="text/plain" id="myEditor" style="width:666px;height:240px;">                            </script></span>                        </p>                        <!--编辑器内容用Js展示，用隐藏域传给JS-->                        <input type="hidden" value="<?php echo ($data["raceprocess"]); ?>" id="process"/>                        <p>                            <label>赛事规则：</label>                            <span class="field" ><script name='racerule'  cols="80" rows="5" class="longinput" type="text/plain" id="myEditor1" style="width:666px;height:240px;">                            </script></span>                        </p>                        <!--编辑器内容用Js展示，用隐藏域传给JS-->                        <input type="hidden" value="<?php echo ($data["racerule"]); ?>" id="rule"/>                        <p>                            <label>联系方式</label>                            <span class="formwrapper">                            	<input type="checkbox" value="1" name="contact" /> 电话 &nbsp; &nbsp;                            	<input type="checkbox" value="2" name="contact"  /> 微信 &nbsp; &nbsp;                                <input type="checkbox" value="3" name="contact"  /> QQ &nbsp; &nbsp;                            </span>                        </p>                        <!--隐藏域传递js处理的复选框值-->                        <input type="hidden" value="<?php echo ($data["contact"]); ?>" id="meidaHidden">                        <input id="aa" type="hidden" name="contact">                        <p>                            <label>报名时间</label>                            <span class="field"><input type="text" name="join_start_time"  class="smallinput" />&nbsp;&nbsp;                            <input type="text" name="join_end_time"  class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <!--隐藏域传递js处理的复选框值-->                        <input type="hidden" value="<?php echo ($data["join_time"]); ?>" id="joinHidden">                        <p>                            <label>比赛时间</label>                            <span class="field">                                <input type="text" name="race_start_time" value="<?php echo (date('Y-m-d H:i:s',$racetime[0])); ?>" class="smallinput" />                                <input type="text" name="race_end_time" value="<?php echo (date('Y-m-d H:i:s',$racetime[1])); ?>" class="smallinput" />                            </span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>赛程介绍</label>                            <span class="field"><textarea name="desc" cols="80" rows="5" class="longinput"><?php echo ($data["desc"]); ?></textarea></span>                        </p>                        <p>                            <label>审核状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择审核状态" name="checkStatus" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option value="1" <?php if($data["checkstatus"] == 1 ): ?>selected="selected"<?php endif; ?>>通过</option>                                    <option value="2" <?php if($data["checkstatus"] == 2 ): ?>selected="selected"<?php endif; ?>>审核中</option>                                    <option value="3" <?php if($data["checkstatus"] == 3 ): ?>selected="selected"<?php endif; ?>>未通过</option>                                </select>                            </span>                        </p>                        <p>                            <label>赛事状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛区域" class="chzn-select" style="width:350px;" tabindex="2">                                  <option value=""></option>                                   <option value="0" <?php if($data["status"] == 0 ): ?>selected="selected"<?php endif; ?>>未开始</option>                                  <option value="1" <?php if($data["status"] == 1 ): ?>selected="selected"<?php endif; ?>>进行中</option>                                  <option value="2" <?php if($data["status"] == 2 ): ?>selected="selected"<?php endif; ?>>结束</option>                                                           </select>                            </span>                        </p>                        <p class="stdformbutton">                            <button type="button" onclick="function a(){document.getElementById('form1').submit();}setTimeout(a,500);" class="submit radius2">确认提交</button>                            <input type="reset" class="reset radius2" id="btnReset" value="返回列表" />                        </p>                    </form>                 </div><!--subcontent-->                </div><!--contentwrapper-->        	</div><!-- centercontent -->        </div><!--bodywrapper--></body><script type="text/javascript">    //解决$方法不能用的问题    jQuery.noConflict();    jQuery(document).ready(function($){        var xuan = [];        //实例化编辑器        var ue = UE.getEditor('myEditor');        var ue1 = UE.getEditor('myEditor1');        //对编辑器的操作最好在编辑器ready之后再做        ue.ready(function() {            //设置编辑器的内容            var content = $("#process").val();            ue.setContent(content);        });        ue1.ready(function() {            //设置编辑器的内容            var content1 = $("#rule").val();            ue1.setContent(content1);        });        //提交或清空方法        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                window.location.href = "/index.php/Admin/Race/showlist";//                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(1).addClass("current").siblings().removeClass("current")            //处理复选框的提交数据            $('.submit').click(function() {//                $('input:checkbox:checked').each(function() {//                $('input:checkbox').parent().getElementsByClassName("checked").each(function() {                $(".checked").each(function(index,val){                    xuan.push($(".checked").eq(index).find("input").val());                });                //给隐藏域添加value属性并赋值                document.getElementById("aa").value=xuan;            });            //当页面加载完成的时候，自动调用该方法            window.onload=function(){                 //获得所要回显的值，此处为：100,1001,200,1400                 var checkeds = $("#meidaHidden").val();                 var join_time = $("#joinHidden").val();                 //拆分为字符串数组                 var checkArray =checkeds.split(",");                 var joinArray =join_time.split("-");                 //获得所有的复选框对象                 var checkBoxAll = $("input[name='contact']");                 //获得所有复选框（QQ,微信,手机）的value值，然后，用checkArray中的值和他们比较，如果有，则说明该复选框被选中                 for(var i=0;i<checkArray.length;i++){                     for(var j=0;j<checkBoxAll.length;j++){                         if(checkArray[i]==$(checkBoxAll[j]).val()){                             $(checkBoxAll[j]).parent().addClass("checked");                         }                     }                 }                var tmp = [];                 for(var i=0;i<joinArray.length;i++){                     var timestamp = joinArray[i]                     var d = new Date(timestamp * 1000);    //根据时间戳生成的时间对象                     var rizi = (d.getFullYear()) + "-" +                             (d.getMonth() + 1) + "-" +                             (d.getDate()) + " " +                             (d.getHours()) + ":" +                             (d.getMinutes()) + ":" +                             (d.getSeconds());                     tmp.push(rizi);                }                $("input[name='join_start_time']").attr('value',tmp[0]);                $("input[name='join_end_time']").attr('value',tmp[1]);//                console.log(tmp[1])            };        });    });</script></html>