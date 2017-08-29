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
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Wnv.<span>Admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
            <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<!--<div class="notification">
                <a class="count" href="notifications.html"><span>9</span></a>
        	</div>
			-->
            <div class="userinfo">
            	<img src="/Public/Admin/images/thumbs/avatar.png" alt="" />
                <span>Juan Dela Cruz</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">            	<div class="avatar">
                	<a href=""><img src="/Public/Admin/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
<div class="userdata">
                	<h4>Juan Dela Cruz</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
            <li><a href="<?php echo U('Index/index');?>"><span class="icon icon-flatscreen"></span>首页</a></li>
            <li class="current"><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>
            <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>
            <li><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>
            <li><a href="<?php echo U('Index/mall');?>"><span class="icon icon-chart"></span>商城</a></li>
            <li><a href="<?php echo U('Index/news');?>"><span class="icon icon-flatscreen"></span>咨讯</a></li>
            <li><a href="<?php echo U('Index/active');?>"><span class="icon icon-flatscreen"></span>活动管理</a></li>
            <li><a href="<?php echo U('Index/member');?>"><span class="icon icon-chart"></span>会员管理</a></li>
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

            <li><a href="#error" class="error">赛事管理</a>
                <span class="arrow"></span>
                <ul id="error">
                    <li class="current">
                        <a href="<?php echo U('Race/showList');?>">赛事列表</a></li>
                    <li><a href="<?php echo U('Race/add');?>">添加赛事</a></li>
                </ul>
            </li>

            <li><a href="#team" class="error">战队管理</a>
                <span class="arrow"></span>
                <ul id="team">
                    <li><a href="<?php echo U('Team/showList');?>">战队列表</a></li>
                    <li><a href="<?php echo U('Team/add');?>">添加战队</a></li>
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
    </div><!--左侧栏-->
        
    <div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">Tables</h1>
            <span class="pagedesc">This is a sample description of a page</span>
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">

                <div class="contenttitle2">
                	<h3>Table with Action</h3>
                </div><!--contenttitle-->
                <div class="tableoptions">
                	<button class="deletebutton radius3" title="table2">Delete Selected</button> &nbsp;
                    <select class="radius3">
                    	<option value="">Show All</option>
                        <option value="">Rendering Engine</option>
                        <option value="">Platform</option>
                    </select> &nbsp;
                    <button class="radius3">Apply Filter</button>
                </div><!--tableoptions-->	
                <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                    <colgroup>
                        <col class="con0" style="width: 7%" />
                        <col class="con1" style="width: 8%" />
                        <col class="con0" style="width: 8%" />
                        <col class="con1" style="width: 8%" />
                        <col class="con0" style="width: 7%" />
                        <col class="con1" style="width: 7%" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="head0">联赛名称</th>
                        <th class="head1">主办方姓名</th>
                        <th class="head0">主办方电话</th>
                        <th class="head1">主办方QQ</th>
                        <th class="head0">赛事类型</th>
                        <th class="head1">赛事方式</th>
                        <th class="head0">赛事LOGO</th>
                        <th class="head1">赛事开始时间</th>
                        <th class="head0">奖金</th>
                        <th class="head1">操作</th>
                        <!--<th class="head0">游戏模式</th>-->
                        <!--<th class="head0">报名方式</th>-->
                        <!--<th class="head0">比赛区域</th>-->
                        <!--<th class="head0">报名人数</th>-->
                        <!--<th class="head0">报名费</th>-->
                        <!--<th class="head0">赛程阶段</th>-->
                        <!--<th class="head0">主办方</th>-->
                        <!--<th class="head0">报名流程</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vol["rname"]); ?></td>
                            <td><?php echo ($vol["sponsor_name"]); ?></td>
                            <td><?php echo ($vol["sponsor_phone"]); ?></td>
                            <td><?php echo ($vol["sponsor_qq"]); ?></td>
                            <td><?php echo ($vol["types"]); ?></td>
                            <td><?php echo ($vol["game_type"]); ?></td>
                            <td><?php echo ($vol["picurl"]); ?></td>
                            <td><?php echo ($vol["race_start_time"]); ?></td>
                            <td><?php echo ($vol["bonus"]); ?></td>
                            <!--<td><?php echo ($vol["race_mode"]); ?></td>-->
                            <!--<td><?php echo ($vol["join_mode"]); ?></td>-->
                            <!--<td><?php echo ($vol["game_area"]); ?></td>-->
                            <!--<td><?php echo ($vol["signed_num"]); ?></td>-->
                            <!--<td><?php echo ($vol["join_cost"]); ?></td>-->
                            <!--<td><?php echo ($vol["rice_stage"]); ?></td>-->
                            <!--<td><?php echo ($vol["rice_sponsor"]); ?></td>-->
                            <!--<td><?php echo ($vol["raceprocess"]); ?></td>-->
                            <!--<td class="center">4</td>-->
                            <!--<td class="center">X</td>-->
                            <td class="center"><a href="javascript:;" data-id="<?php echo ($vol["rid"]); ?>" class="edit">编辑</a> &nbsp; <a href="javascript:;" data-id="<?php echo ($vol["rid"]); ?>" class="del">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>

        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->

    
</div><!--bodywrapper-->

</body>
<script type="text/javascript">

    //jQuery代码
    jQuery(function(){
        //给删除按钮绑定点击事件
        jQuery('.del').on('click',function(){
            //事件处理程序
            id = this.getAttribute('data-id');    //jQuery对象，类数组的对象
//            console.log(id);
            //遍历jQuery对象
            //需要将id拼凑成1,2,3,4形式
//            var ids = '';
//            for(var i = 0;i < id.length;i++){
//                ids += id[i].value + ',';
//            }
            //去除末尾多余的逗号
//            ids = ids.substring(0,ids.length-1);
            //console.log(ids);
            window.location.href = '/index.php/Admin/Race/del/id/' + id;
        });

        //给编辑按钮绑定点击事件
        jQuery('.edit').on('click',function(){
            //事件的处理程序
            id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
            //alert(id);
            window.location.href = '/index.php/Admin/Race/edit/id/' + id;
        });
    });
   </script>
</html>