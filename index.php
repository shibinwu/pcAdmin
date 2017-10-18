<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

//开启/关闭生成目录安全文件
define('BUILD_DIR_SECURE', false);

#定义上传路径的常量
//define('WORKING_PATH',str_replace('\\','/',__DIR__));
define('WORKING_PATH','/www/wwwroot/t.codechm.com/pc/public/');
//define('WORKING_PATH','/t.codechm.com/pc/public/');
//define('WORKING_PATH',str_ireplace(str_replace("/","\\",$_SERVER['PHP_SELF']),'',__FILE__)."\\");
//define('UPLOAD_ROOT_PATH', '/Public/Upload/');
define('UPLOAD_ROOT_PATH', 'upload/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单