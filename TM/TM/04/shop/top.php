<?php
session_start();
include("conn/conn.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF8">
    <title>公共top</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/flat-ui.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/jquery-2.0.3.js"></script>
    <!--    <script src="js/bootstrap.js"></script>-->
    <script src="js/flat-ui.js"></script>
</head>
<body>

<div class="header">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a href="index.php" class="navbar-brand">EasterCat</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">商品<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="shownew.php?page=1">最新商品</a></li>
                        <li><a href="showtuijian.php?page=1">推荐商品</a></li>
                        <li><a href="showhot.php?page=1">热门商品</a></li>
                    </ul>
                </li>
                <li><a href="showfenlei.php?id=1&page=1">分类列表</a></li>
                <li><a href="finddd.php"> 订单查询</a></li>
                <li><a href="gouwu1.php">购物车</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="#" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="hidden" name="jdcz" value="jdcz">
                        <input class="form-control" id="navbarInput-01" type="search" placeholder="请输入关键字">
                        <span class="input-group-btn">
                         <button type="submit" class="btn">
                            <span class="fui-search"></span>
                        </button>
                        <button type="button" class="btn btn-default"
                                onclick="javascript:window.location='highfind.php'">高级</button>
                    </span>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                        账户<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="text-center">
                            <img src="images/dangao.jpg" alt="" style="width:60px;" class="">
                            <a href="#">
                                <?php
                                if (isset($_SESSION['username'])) {
                                    if ($_SESSION['username'] == '') {
                                        echo "你丫先登录";
                                    } else {
                                        echo "账号:" . $_SESSION['username'];
                                    }
                                } else {
                                    echo "你丫先登录";
                                }
                                ?>
                            </a>
                        </li>
                        <li class="text-center"><a href="usercenter.php">用户中心</a></li>
                        <li class="text-center"><a href="logout.php">退出登录</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="visible-sm visible-xs">Settings
                        <span class="fui-gear"></span>
                    </span>
                        <span class="visible-md visible-lg">
                        <span class="fui-gear"></span>
                    </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="text-center"><a href="www.baidu.com">主页</a></li>
                        <li class="text-center"><a
                                    href="javascript:window.external.addFavorite('www.baidu.com')">添加收藏</a>
                        </li>
                        <li class="text-center"><a href="792751238@qq.com">邮件</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

