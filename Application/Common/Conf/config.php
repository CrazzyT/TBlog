<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'my_blog',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'my_',    // 数据库表前缀
 //    '配置项'=>'配置值'
	// 'DB_TYPE'               =>  'mysql',     // 数据库类型
 //    'DB_HOST'               =>  '192.168.1.244', // 服务器地址
 //    'DB_NAME'               =>  'wentao_blog',          // 数据库名
 //    'DB_USER'               =>  'biglion',      // 用户名
 //    'DB_PWD'                =>  'biglion',          // 密码
 //    'DB_PORT'               =>  '2121',        // 端口
 //    'DB_PREFIX'             =>  'my_',    // 数据库表前缀
 	'TMPL_ACTION_ERROR'     =>  'Public/message', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  'Public/message', // 默认成功跳转对应的模板文件
);