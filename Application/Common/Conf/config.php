<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_DENY_PHP'         =>  false, // 默认模板引擎是否禁用PHP原生代码

	/* 数据库设置 */
    //mysql oracle mssql access db2 sqlite ...
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_wnv',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    // 'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
);