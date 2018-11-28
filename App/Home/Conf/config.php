<?php
return array(
	//'配置项'=>'配置值'
	//token表单令牌
	'TOKEN_ON' => true,
	'TOKEN_NAME' => '__hash__',
	'TOKEN_TYPE' => 'md5',
	'TOKEN_RESET' => true,

	//数据库配置
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'fx_xiao', // 数据库名
	// 'DB_USER'   => 'fx_xiao', // 用户名
	// 'DB_PWD'    => 'm6eHF6m3RBtaeGW6',  // 密码
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root',  // 密码

	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'fanxiang_', // 数据库表前缀
);