<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>控制台页面_AmaAdmin后台管理系统模板 - 源码之家</title>
    <link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/plugins/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/custom/dashboard.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
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
        <li><a href="<?php echo U('Index/task');?>"><span class="iconfont icon-chart"></span>任务管理</a></li>
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
   <!--包含导航文件-->

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
</div><!--任务管理左侧栏-->
</body>
</html>  <!--包含任务左侧栏文件-->

    <div class="centercontent">

        <div class="pageheader">
            <h1 class="pagetitle">控制台</h1>
            <span class="pagedesc">页面的描述内容</span>

            <ul class="hornav">
                <li class="current"><a href="#updates">最新更新</a></li>
                <li><a href="#activities">最近活动</a></li>
            </ul>
        </div><!--pageheader-->

        <div id="contentwrapper" class="contentwrapper">

            <div id="updates" class="subcontent">
                <div class="notibar announcement">
                    <a class="close"></a>
                    <h3>Announcement</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div><!-- notification announcement -->

                <div class="two_third dashboard_left">

                    <ul class="shortcuts">
                        <li><a href="" class="settings"><span>设置</span></a></li>
                        <li><a href="" class="users"><span>用户</span></a></li>
                        <li><a href="" class="gallery"><span>相册</span></a></li>
                        <li><a href="" class="events"><span>事件</span></a></li>
                        <li><a href="" class="analytics"><span>分析</span></a></li>
                    </ul>

                    <br clear="all" />

                    <div class="contenttitle2 nomargintop">
                        <h3>Visit Overview</h3>
                    </div><!--contenttitle-->

                    <div class="overviewhead">
                        <div class="overviewselect">
                            <select id="overviewselect" name="select">
                                <option value="">Last 1 hour ago</option>
                                <option value="">Last 5 hours ago</option>
                                <option value="">Today</option>
                                <option value="">Yesterday</option>
                                <option value="">This Week</option>
                                <option value="">Last Week</option>
                                <option value="">This Month</option>
                                <option value="">Last Month</option>
                            </select>
                        </div><!--floatright-->
                        From: &nbsp;<input type="text" id="datepickfrom" /> &nbsp; &nbsp; To: &nbsp;<input type="text" id="datepickto" />
                    </div><!--overviewhead-->

                    <br clear="all" />

                    <table cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">
                        <colgroup>
                            <col class="con0" width="20%" />
                            <col class="con1" width="20%" />
                            <col class="con0" width="20%" />
                            <col class="con1" width="20%" />
                            <col class="con0" width="20%" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="head0">Metric</th>
                            <th class="head1">Rates</th>
                            <th class="head0">Impressions</th>
                            <th class="head1">Unique Visits</th>
                            <th class="head0">Average Time (min)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="progress progress150">
                                    <div class="bar"><div style="width: 60%;" class="value bluebar"></div></div>
                                </div>
                            </td>
                            <td>67.3%</td>
                            <td>856, 220</td>
                            <td class="center">32, 012</td>
                            <td class="center">20.5</td>
                        </tr>
                        </tbody>
                    </table>

                    <br clear="all" />

                    <div id="chartplace" style="height:300px;"></div>

                    <br clear="all" />

                    <table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">
                        <colgroup>
                            <col class="con0" style="width: 4%" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                            <col class="con0" />
                            <col class="con1" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">Rendering engine</th>
                            <th class="head0">Browser</th>
                            <th class="head1">Platform(s)</th>
                            <th class="head0">Engine version</th>
                            <th class="head1">CSS grade</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="head0"><input type="checkbox" class="checkall" /></th>
                            <th class="head1">Rendering engine</th>
                            <th class="head0">Browser</th>
                            <th class="head1">Platform(s)</th>
                            <th class="head0">Engine version</th>
                            <th class="head1">CSS grade</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td align="center"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet  Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                            <td align="center"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                            <td align="center"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                        </tbody>
                    </table>

                    <br />

                    <div class="widgetbox">
                        <div class="title"><h3>Latest Articles</h3></div>
                        <div class="widgetcontent">
                            <div id="scroll1" class="mousescroll">
                                <ul class="entrylist">
                                    <li>
                                        <div class="entry_wrap">
                                            <div class="entry_img"><img src="/Public/Admin/images/thumbs/image1.png" alt="" /></div>
                                            <div class="entry_content">
                                                <h4><a href="">Why Won't My Cat Eat?</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="even">
                                        <div class="entry_wrap">
                                            <div class="entry_img"><img src="/Public/Admin/images/thumbs/image2.png" alt="" /></div>
                                            <div class="entry_content">
                                                <h4><a href="">We Are About Color</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="entry_wrap">
                                            <div class="entry_img"><img src="/Public/Admin/images/thumbs/image3.png" alt="" /></div>
                                            <div class="entry_content">
                                                <h4><a href="">Ancient Technology</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="even">
                                        <div class="entry_wrap">
                                            <div class="entry_img"><img src="/Public/Admin/images/thumbs/image4.png" alt="" /></div>
                                            <div class="entry_content">
                                                <h4><a href="">Bird's Nest Soup</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--#scroll1-->
                        </div><!--widgetcontent-->
                    </div><!-- widgetbox -->


                </div><!--two_third dashboard_left -->

                <div class="one_third last dashboard_right">

                    <div class="contenttitle2 nomargintop">
                        <h3>Top Rated Sites</h3>
                    </div><!--contenttitle-->


                    <ul class="toplist">
                        <li>
                            <div>
                                	<span class="three_fourth">
                                    	<span class="left">
                                    		<span class="title"><a href="">loremipsum.com</a></span>
                                        	<span class="desc">Social Network</span>
                                    	</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class="one_fourth last">
                                    	<span class="right">
                                        	<span class="h3">8.1</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                <br clear="all" />
                            </div>
                        </li>
                        <li>
                            <div>
                                	<span class="three_fourth">
                                    	<span class="left">
                                    		<span class="title"><a href="">dolorsitamet.net</a></span>
                                        	<span class="desc">Social Network</span>
                                    	</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class="one_fourth last">
                                    	<span class="right">
                                        	<span class="h3">7.8</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                <br clear="all" />
                            </div>
                        </li>
                        <li>
                            <div>
                                	<span class="three_fourth">
                                    	<span class="left">
                                    		<span class="title"><a href="">consectetur.org</a></span>
                                        	<span class="desc">Social Network</span>
                                    	</span><!--left-->
                                    </span><!--three_fourth-->
                                    <span class="one_fourth last">
                                    	<span class="right">
                                        	<span class="h3">7.5</span>
                                        </span><!--right-->
                                    </span><!--one_fourth-->
                                <br clear="all" />
                            </div>
                        </li>
                    </ul>

                    <div class="widgetbox">
                        <div class="title"><h3>Newly Registered User</h3></div>
                        <div class="widgetoptions">
                            <div class="right"><a href="">View All Users</a></div>
                            <a href="">Add User</a>
                        </div>
                        <div class="widgetcontent userlistwidget nopadding">
                            <ul>
                                <li>
                                    <div class="avatar"><img alt="" src="/Public/Admin/images/thumbs/avatar1.png" /></div>
                                    <div class="info">
                                        <a href="">Squint</a> <br />
                                        Front-End Engineer <br /> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="images/thumbs/avatar2.png" /></div>
                                    <div class="info">
                                        <a href="">Eunice</a> <br />
                                        Architectural Designer <br /> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="images/thumbs/avatar1.png" /></div>
                                    <div class="info">
                                        <a href="">Captain Gutt</a> <br />
                                        Software Engineer <br /> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="images/thumbs/avatar2.png" /></div>
                                    <div class="info">
                                        <a href="">Flynn</a> <br />
                                        Accounting Manager <br /> 18 minutes ago
                                    </div><!--info-->
                                </li>
                            </ul>
                            <a class="more" href="">View More Users</a>
                        </div><!--widgetcontent-->
                    </div>

                    <div class="widgetbox">
                        <div class="title"><h3>Latest News</h3></div>
                        <div class="widgetcontent">
                            <div id="accordion" class="accordion">
                                <h3><a href="#">Section 1</a></h3>
                                <div>
                                    <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                    </p>
                                </div>
                                <h3><a href="#">Section 2</a></h3>
                                <div>
                                    <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                    </p>
                                </div>
                                <h3><a href="#">Section 3</a></h3>
                                <div>
                                    <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                    </p>
                                    <ul class="margin1020">
                                        <li>List item one</li>
                                        <li>List item two</li>
                                        <li>List item three</li>
                                    </ul>
                                </div>
                                <h3><a href="#">Section 4</a></h3>
                                <div>
                                    <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                    </p>
                                    <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                    </p>
                                </div>
                            </div>
                        </div> <!--widgetcontent-->
                    </div><!--widgetbox-->

                </div><!--one_third last-->


            </div><!-- #updates -->

            <div id="activities" class="subcontent" style="display: none;">
                &nbsp;
            </div><!-- #activities -->

        </div><!--contentwrapper-->

        <br clear="all" />

    </div><!-- centercontent -->


</div><!--bodywrapper-->

</body>
<!--js代码关于退出操作-->
<script type="text/javascript">
    jQuery(function() {
        jQuery('.exit').click(function () {
            window.location.href = "/index.php/Admin/Public/logout";
        });
        jQuery(".headermenu>li").eq(8).addClass("current").siblings().removeClass("current")
    });
</script>
</html>