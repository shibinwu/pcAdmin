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
</html>


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


        <!DOCTYPE html>
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

        <li><a href="#user" class="editor">登录信息</a>
            <span class="arrow"></span>
            <ul id="user">
                <li><a href="<?php echo U('Member/showList');?>">信息列表</a></li>
                <!--<li><a href="<?php echo U('Member/add');?>">添加信息</a></li>-->
            </ul>
        </li>

        <li><a href="#detail" class="error">会员详情</a>
            <span class="arrow"></span>
            <ul id="detail">
                <li><a href="<?php echo U('Memberdetail/showList');?>">详情列表</a></li>
                <!--<li><a href="<?php echo U('Team/add');?>">添加详情</a></li>-->
            </ul>
        </li>

        <li><a href="#message" class="error">会员评论</a>
            <span class="arrow"></span>
            <ul id="message">
                <li><a href="<?php echo U('Membermessage/showList');?>">评论列表</a></li>
                <!--<li><a href="<?php echo U('Membermessage/add');?>">添加评论</a></li>-->
            </ul>
        </li>

        <li><a href="#property" class="error">会员资产</a>
            <span class="arrow"></span>
            <ul id="property">
                <li><a href="<?php echo U('Memberproperty/showList');?>">资产列表</a></li>
                <!--<li><a href="<?php echo U('Team/add');?>">添加资产</a></li>-->
            </ul>
        </li>

        <li><a href="#friend" class="error">我的好友</a>
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
</html>
        
    <div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">好友列表</h1>
            <!--<span class="pagedesc"></span>-->
            
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">


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
                        <col class="con0" style="width: 13%" />
                        <col class="con1"  />
                        <col class="con0"  />
                        <col class="con1"  />
                        <col class="con0"  />
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="head0">uID1</th>
                        <th class="head1">uID2</th>
                        <th class="head0">好友状态</th>
                        <th class="head1">添加时间</th>
                        <th class="head0">操作</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vol["uid1"]); ?></td>
                            <td><?php echo ($vol["uid2"]); ?></td>
                            <td><?php echo ($vol["status"]); ?></td>
                            <td><?php echo ($vol["addtime"]); ?></td>
                            <td class="center"><a href="javascript:;" data-id="<?php echo ($vol["fid"]); ?>" class="edit">编辑</a> &nbsp; <a href="javascript:;" data-id="<?php echo ($vol["fid"]); ?>" class="del">删除</a></td>
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
//            alert(1);
            id = this.getAttribute('data-id');    //jQuery对象，类数组的对象
//            alert(id)
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
            window.location.href = '/index.php/Admin/Friend/del/id/' + id;
        });

        //给编辑按钮绑定点击事件
        jQuery('.edit').on('click',function(){
            //事件的处理程序
            id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
            //alert(id);
            window.location.href = '/index.php/Admin/Friend/edit/id/' + id;
        });
    });
   </script>
</html>