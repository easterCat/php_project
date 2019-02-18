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
	if (!defined("STYLE")) {
	    exit("Access Defined");
	}
	//执行耗时放到这里
	$_end_time = _runtime();
?>

<!--头部导航栏开始的位置-->
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>	<a class="navbar-brand" href="index.php">Biwork</a>
                    <a class="navbar-brand login-btn" href="login.html">登录</a>
                    <a class="navbar-brand register-btn" href="register.php">注册</a>
                    <a class="navbar-brand register-btn" href="#">本程序执行耗时:<?php echo round($_end_time - $GLOBALS['start_time'],4)?>秒</a>
                    <!-- <span class="login" style="margin-right:10px;">登录</span><span class="login">注册</span>-->
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if(STYLE=="index"){echo "class='activeBtn'";}?>>	<a href="index.php#1F" >首页</a>
                        </li>
                        <li <?php if(STYLE=="forums"){echo "class='activeBtn'";}?>>	<a href="forums.php">留言板</a>
                        </li>
                        <li>	<a href="index.php#3F">最新项目</a>
                        </li>
                        <li>	<a href="index.php#4F">团队介绍</a>
                        </li>
                        <li >	<a href="index.php#5F">联系方式</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>