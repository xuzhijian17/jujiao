<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'focushop', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀 
	'TMPL_L_DELIM' => '{{',
	'TMPL_R_DELIM' => '}}',
	'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
	'DEFAULT_GROUP'  => 'Home', //默认分组
	'SHOW_PAGE_TRACE' => true,// 显示页面Trace信息
	// 'APP_GROUP_MODE' =>  1
);
?>