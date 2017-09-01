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
            <li><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>
            <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>
            <li class="current"><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>
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
    </div><!--leftmenu-->
        
    <div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">竞猜用户数据</h1>
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
                    <!--<th class="head0">竞猜数据ID</th>-->
                    <!--<th class="head1">竞猜比赛ID</th>-->
                    <th class="head0">竞猜比赛数据的ID</th>
                    <th class="head0">竞猜用户的ID</th>
                    <th class="head0">竞猜队伍的ID</th>
                    <th class="head0">竞猜商品ID</th>
                    <th class="head0">用户竞猜方式</th>
                    <th class="head0">商品数量</th>
                    <th class="head1">竞猜结果</th>
                    <th class="head0">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                        <!--<td><?php echo ($vol["dgid"]); ?></td>-->
                        <!--<td><?php echo ($vol["gid"]); ?></td>-->
                        <td><?php echo ($vol["dgid"]); ?></td>
                        <td><?php echo ($vol["userid"]); ?></td>
                        <td><?php echo ($vol["gtid"]); ?></td>
                        <td><?php echo ($vol["goodid"]); ?></td>
                        <td><?php if($vol["type"] == 1): ?>dota饰品竞猜
                            <?php elseif($vol["type"] ==2): ?>csgo饰品竞猜
                            <?php else: ?>P豆竞猜<?php endif; ?>
                        </td>
                        <td><?php echo ($vol["num"]); ?></td>

                        <td><?php if($vol["result"] == 1): ?>赢
                            <?php elseif($vol["result"] ==2): ?>输
                            <?php else: ?>平局<?php endif; ?>
                        </td>
                        <td class="center"><a href="javascript:;" data-id="<?php echo ($vol["duid"]); ?>" class="edit">编辑</a> &nbsp; <a href="javascript:;" data-id="<?php echo ($vol["duid"]); ?>" class="del">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <!--<?php if($vol["pid"] == 0): ?>顶级部门<?php else: echo ($vol["parentName"]); endif; ?>-->

        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->

    
</div><!--bodywrapper-->

</body>
<script type="text/javascript">


    //jQuery代码
    jQuery(function(){
        //DOM动态修改分页的显示内容
        document.getElementById("dyntable_first").innerHTML = "首页";
        document.getElementById("dyntable_previous").innerHTML = "上一页";
        document.getElementById("dyntable_next").innerHTML = "下一页";
        document.getElementById("dyntable_last").innerHTML = "末页";
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
            window.location.href = '/index.php/Admin/Guessuser/del/id/' + id;
        });

        //给编辑按钮绑定点击事件
        jQuery('.edit').on('click',function(){
            //事件的处理程序
            id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
            //alert(id);
            window.location.href = '/index.php/Admin/Guessuser/edit/id/' + id;
        });
    });
   </script>
</html>