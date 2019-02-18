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
	//防止非html文件的调用
	if (!defined("SCRIPT")) {
	    exit("Script Error!");
	}
?>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="style/css/main.css">
	<link rel="stylesheet" href="style/css/<?php echo SCRIPT?>.css">
	<script src="js/common/jquery.min.js"></script>
	<script src="js/common/bootstrap.js"></script>

	
	