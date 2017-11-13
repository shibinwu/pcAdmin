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
                    <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatarbig.png"  width="80px" height="100px" alt="" />
                        <?php else: ?>
                        <img src="http://t.codechm.com/<?php echo (session('picurl')); ?>" width="80px" height="100px" alt="" /><?php endif; ?>
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
</html>  <!--包含头文件-->
    
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
    <title>商城左侧栏</title>
	
</head>
<body>
    <div class="vernav2 iconmenu">
    <ul>

        <li><a href="#dota" class="drafts">DOTA英雄</a>
            <span class="arrow"></span>
            <ul id="dota">
                <li><a href="<?php echo U('Dota/showList');?>">英雄列表</a></li>
                <li><a href="<?php echo U('Dota/add');?>">添加英雄</a></li>
            </ul>
        </li>
        <li><a href="#csgo" class="drafts">CSGO武器</a>
            <span class="arrow"></span>
            <ul id="csgo">
                <li><a href="<?php echo U('Csgo/showList');?>">武器列表</a></li>
                <li><a href="<?php echo U('Csgo/add');?>">添加武器</a></li>
            </ul>
        </li>

        <li><a href="#goodsattr" class="elements">属性管理</a>
            <span class="arrow"></span>
            <ul id="goodsattr">
                <li><a href="<?php echo U('Goodsattr/dotaList');?>">英雄属性</a></li>
                <li><a href="<?php echo U('Goodsattr/csgoList');?>">武器属性</a></li>
                <li><a href="<?php echo U('Goodsattr/add');?>">添加属性</a></li>
            </ul>
        </li>

        <li><a href="#goods" class="drafts">商品管理</a>
            <span class="arrow"></span>
            <ul id="goods">
                <li><a href="<?php echo U('Goods/showList');?>">商品列表</a></li>
                <li><a href="<?php echo U('Goods/add');?>">添商品加</a></li>
            </ul>
        </li>

        <li><a href="#goodssell" class="sent">出售管理</a>
            <span class="arrow"></span>
            <ul id="goodssell">
                <li><a href="<?php echo U('Goodssell/showList');?>">出售列表</a></li>
                <li><a href="<?php echo U('Goodssell/add');?>">添加出售</a></li>
            </ul>
        </li>

        <li><a href="#goodswant" class="inbox">求购管理</a>
            <span class="arrow"></span>
            <ul id="goodswant">
                <li><a href="<?php echo U('Goodswant/showList');?>">求购列表</a></li>
                <li><a href="<?php echo U('Goodswant/add');?>">添加求购</a></li>
            </ul>
        </li>

    </ul>
    <a class="togglemenu"></a>
    <br /><br />
</div><!--商城左侧栏-->
</body>
</html>   <!--包含商城左侧栏文件-->
        
    <div class="centercontent tables">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">商品列表</h1>

        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">


            <table cellpadding="0" cellspacing="0" border="0" class="stdtable" id="dyntable">
                <colgroup>
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                </colgroup>
                <thead>
                <tr>
                    <th class="head0">ID</th>
                    <th class="head1">商品名称</th>
                    <th class="head0">商品图片</th>
                    <th class="head1">游戏</th>
                    <!--<th class="head0">英雄/武器</th>-->
                    <!--<th class="head1">属性名称</th>-->
                    <th class="head0">市场估价</th>
                    <th class="head1">库存</th>
                    <th class="head0">售卖区</th>
                    <th class="head1">可否竞猜</th>
                    <th class="head0">累计成交量</th>
                    <th class="head1">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vol["id"]); ?></td>
                        <td><?php echo ($vol["name"]); ?></td>
                        <td><img width="60" height="40" src="http://t.codechm.com/<?php echo ($vol['icon']); ?>"/></td>
                        <td><?php if($vol["game_owner"] == 1): ?>dota
                            <?php elseif($vol["game_owner"] ==2): ?>csgo
                            <?php else: ?>&nbsp<?php endif; ?>
                        </td>
                        <!--<td><?php echo ($vol["game_owner"]); ?></td>-->
                        <!--<td><?php echo ($vol["own_id"]); ?></td>-->
                        <!--<td><?php echo ($vol["attr_ids"]); ?></td>-->
                        <td><?php echo ($vol["valuation"]); ?></td>
                        <td><?php echo ($vol["stock"]); ?></td>
                        <td><?php if($vol["part"] == 1): ?>推荐区
                            <?php elseif($vol["part"] ==2): ?>打折区
                            <?php elseif($vol["part"] ==3): ?>人气区
                            <?php elseif($vol["part"] ==4): ?>土豪区
                            <?php elseif($vol["part"] ==5): ?>求购区
                            <?php else: ?>&nbsp<?php endif; ?>
                        </td>
                        <td><?php if($vol["guess"] == 1): ?>可竞猜
                            <?php elseif($vol["guess"] ==0): ?>不可竞猜
                            <?php else: ?>&nbsp<?php endif; ?>
                        </td>
                        <td><?php echo ($vol["saled_num"]); ?></td>

                        <td class="center">
                            <?php if($vol[game_owner] == 1): ?><a href="javascript:;" data-id="<?php echo ($vol["id"]); ?>" class="dotaEdit">编辑</a> &nbsp;

                            <?php else: ?>
                            <a href="javascript:;" data-id="<?php echo ($vol["id"]); ?>" class="csgoEdit">编辑</a> &nbsp;<?php endif; ?>
                            <a href="javascript:;" data-id="<?php echo ($vol["id"]); ?>" class="del">删除</a>
                        </td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

        </div><!--contentwrapper-->
        
	</div><!-- centercontent -->

    
</div><!--bodywrapper-->

</body>
<script type="text/javascript">
    //解决$方法不能用的问题
    jQuery.noConflict();
    jQuery(document).ready(function($){
        //给dota删除按钮绑定点击事件
        $('.dotaDel').on('click',function(){
            //事件处理程序
            id = this.getAttribute('data-id');    //jQuery对象，类数组的对象
            window.location.href = '/index.php/Admin/Goods' + '/dotaDel/id/' + id;
        });
        //给csgo删除按钮绑定点击事件
        $('.csgoDel').on('click',function(){
            //事件处理程序
            id = this.getAttribute('data-id');    //jQuery对象，类数组的对象
            window.location.href = '/index.php/Admin/Goods' + '/csgoDel/id/' + id;
        });
        //给编辑按钮绑定点击事件(用document解决分页后不能点击的bug)
        $(document).on('click',".dotaEdit",function(){
            //事件的处理程序
            id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
            //alert(id);
            window.location.href = '/index.php/Admin/Goods'+'/dotaEdit/id/' + id;
        });
        $(document).on('click',".csgoEdit",function(){
            //事件的处理程序
            id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
            //alert(id);
            window.location.href = '/index.php/Admin/Goods'+'/csgoEdit/id/' + id;
        });
        //给退出按钮绑定点击事件
        $('.exit').click(function () {
            window.location.href = "/index.php/Admin/Public/logout";
        });
        //默认选中效果，箭头指向
        $(function(){
            $(".headermenu>li").eq(4).addClass("current").siblings().removeClass("current")
        });
    });
</script>
<script type="text/javascript" src="/Public/Admin/js/plugins/footer.js"></script>
</html>