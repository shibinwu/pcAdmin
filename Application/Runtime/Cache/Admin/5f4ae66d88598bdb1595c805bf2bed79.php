<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>查看消息页面_AmaAdmin后台管理系统模板 - 源码之家</title>
<link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.alerts.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/messages.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">

    <!DOCTYPE html>
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
</html>   <!--包含网页头文件-->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    </body><div class="header">
    <ul class="headermenu">
        <li><a href="<?php echo U('Index/index');?>" attr=""><span class="icon icon-flatscreen"></span>首页</a></li>
        <li><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>
        <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>
        <li><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>
        <li><a href="<?php echo U('Index/mall');?>"><span class="icon icon-chart"></span>商城</a></li>
        <li><a href="<?php echo U('Index/news');?>"><span class="icon icon-flatscreen"></span>咨讯</a></li>
        <li><a href="<?php echo U('Index/active');?>"><span class="icon icon-flatscreen"></span>活动管理</a></li>
        <li><a href="<?php echo U('Index/member');?>"><span class="icon icon-chart"></span>会员管理</a></li>
    </ul>
    <script>
        var lis=jQuery(".headermenu>li>a");
        console.log(location.href)
        for(var i=0;i<lis.length;i++){
            if(location.href){
                jQuery(".headermenu>li").removeClass("current");
                jQuery(this).parents("li").addClass("current");
            }
        }
    </script>

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
<script>
    jQuery.noConflict();
    jQuery(document).ready(function($){

    })

</script>   <!--包含导航文件-->

    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="#formsub" class="editor">roll饰品</a>
                <span class="arrow"></span>
                <ul id="formsub">
                    <li><a href="forms.html">饰品列表</a></li>
                    <li><a href="wizard.html">添加饰品</a></li>
                </ul>
            </li>

            <li><a href="#formsub" class="editor">积分管理</a>
                <span class="arrow"></span>
                <ul id="formsub">
                    <li><a href="forms.html">积分列表</a></li>
                    <li><a href="wizard.html">添加积分</a></li>
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
    
    <div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Messages</h1>
            <span class="pagedesc">The content below are loaded using ajax</span>
            
            <ul class="hornav">
                <li class="current"><a href="#inbox">Inbox</a></li>
                <li><a href="#compose">Compose New</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
             
             <div id="inbox" class="subcontent">
             
                <div class="msghead">
                    <ul class="msghead_menu">
                        <li><a class="reportspam">Report Spam</a></li>
                        <li class="marginleft5 dropdown" id="actions">
                            <a class="dropdown_label" href="#actions">
                            Actions
                            <span class="arrow"></span>
                            </a>
                            <ul>
                                <li><a href="">Mark as Read</a></li>
                                <li><a href="">Mark as Unread</a></li>
                                <li><a href="">Move to Folder</a></li>
                                <li><a href="">Add Star</a></li>
                            </ul>
                        </li>
                        <li class="marginleft5"><a class="msgtrash" title="Trash"></a></li>
                    	<li class="right"><a class="next"></a></li>
                        <li class="right"><a class="prev prev_disabled"></a></li>
                        <li class="right"><span class="pageinfo">1-10 of 2,139</span></li>
                    </ul>
                    <span class="clearall"></span>
                </div><!--msghead-->
                
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable mailinbox">
                    <colgroup>
                        <col class="con1" width="4%"/>
                        <col class="con0" width="4%" />
                        <col class="con1" width="15%"/>
                        <col class="con0" width="63%"/>
                        <col class="con1" width="4%"/>
                        <col class="con1" width="10%"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th width="20" class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall" /></th>
                        <th class="head0">&nbsp;</th>
                        <th class="head1">Sender</th>
                        <th class="head0">Subject</th>
                        <th class="head1 attachement">&nbsp;</th>
                        <th class="head0">Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall2" /></th>
                            <th class="head0"></th>
                            <th class="head1">Sender</th>
                            <th class="head0">Subject</th>
                            <th class="head1 attachement">&nbsp;</th>
                            <th class="head0">Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Hiccup Haddock</td>
                            <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">July 1</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                            <td class="attachment"></td>
                            <td class="date">June 30</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Puss in Boots</td>
                            <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 28</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Humpty Dumpty</td>
                            <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">June 20</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar starred"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 19</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Hiccup Haddock</td>
                            <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">July 1</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                            <td class="attachment"></td>
                            <td class="date">June 30</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Puss in Boots</td>
                            <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 28</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Humpty Dumpty</td>
                            <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">June 20</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar starred"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 19</td>
                        </tr>

                    </tbody>
                </table>             
             </div>
             <div id="compose" class="subcontent" style="display: none">&nbsp;</div>
        </div><!--contentwrapper-->
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
<!--js代码关于退出操作-->
<script type="text/javascript">
    jQuery(function() {
        jQuery('.exit').click(function () {
            window.location.href = "/index.php/Admin/Public/logout";
        });
        jQuery(".headermenu>li").eq(6).addClass("current").siblings().removeClass("current")
    });
</script>
</html>