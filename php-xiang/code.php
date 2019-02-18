<?php
/*
*TestGuest Version 1.0
*Author:easterCat
*Web:(www.jiangpeng.pub)
*Date:2016-12-4
*/  


//此部分无法外部调用*********
session_start();
//引用公共函数文件
require dirname(__FILE__).'\compoent\global_func.php';
//运行验证码函数
_code();

?>