<?php
return array(
	//'配置项'=>'配置值'
    // 'URL_MODEL' => 2,           //模板
    'SHOW_PAGE_TRACE' => true,      //开启trace调试模式

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PREFIX'             =>  'shop_',    // 数据库表前缀

    'URL_MODEL'     =>  2,//设置url模式为rewrite重写模式

    'MODULE_ALLOW_LIST' =>    array('Home','Admin'),//允许列表
    'DEFAULT_MODULE'    =>    'Admin',  // 默认模块
    'SHOW_PAGE_TRACE'   =>      true,
    'TMPL_L_DELIM'      =>    '{{',     //左定界符
    'TMPL_R_DELIM'      =>    '}}'      //右定界符
);