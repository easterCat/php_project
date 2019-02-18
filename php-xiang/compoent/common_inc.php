<?php
	/*
	*TestGuest Version 1.0
	*Author:easterCat
	*Web:(www.jiangpeng.pub)
	*Date:2016-12-4
	*/
	//防止恶意调用
	if (!defined("IN_TG")) {
	    exit("Access Defined");
	}
	//常规路径转换为硬路径，速度更快
	//require dirname(__FILE__).'/compoent/common_inc.php';
	$root_path = substr(dirname(__FILE__), 0, -8);
	//将获取的硬路径地址赋值给一个常量
	define("ROOT_PATH", $root_path);
	//拒绝PHP低版本
	if (PHP_VERSION < '4.1.0') {
	    exit('php version is too low');
	}
	//需要引入核心函数库
	require ROOT_PATH . 'compoent/global_func.php';
	//执行消耗时间
	//	$_start_time = _runtime(); //正常赋值
	//  define('START_TIME',_runtime());  //常量赋值
	$GLOBALS['start_time'] = _runtime();
	//超级全局变量赋值,3种效果是一样的
	//	usleep(2000000);
?>
