<?php
/*
 *TestGuest Version 1.0
 *Author:easterCat
 *Web:(www.jiangpeng.pub)
 *Date:2017-2-25
 */
?>

<?php
//定义一个常量，用来授权调用分离页面
define("IN_TG", true);
//定义一个常量，用来指定本页的内容,命名可以叫index，login，register引入不同的css
define("SCRIPT", "global");
//定义个常量，切换页面样式
define("STYLE","forums");
//引用公共文件
require dirname(__FILE__) . '/compoent/common_inc.php';
//调用地址使用硬路径
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>论坛</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<?php require ROOT_PATH.'compoent/title_inc.php'?>
		<style>
			table {
				width: 55%;
				margin-top: 10px;
			}

			.title {
				background-color: #B10707;
				font-size: 17px;
				color: #fff;
			}

			.right {
				margin-left: 120px;
			}
		</style>
	</head>
	<?php
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	//连接数据库
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
	//设定字符集
	mysqli_set_charset($conn, "utf8");
	//连接检测
	if (!$conn) {
		 die("连接失败：" . mysqli_connect_error());
	}
	$sql = "select * from forums";
	$que = mysqli_query($conn,$sql);
	$sum = mysqli_num_rows($que);
	?>

	<body>
		<div class="row clearfix header_banner">
			<div class="col-md-12 column">
				<div class="wrapper">
					<ul id="sb-slider" class="sb-slider" style="max-width:100%;">
						<li>
							<a href="#" target="_blank">
								<img src="img/img02.jpg" alt="image1" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<table border="1px" cellspacing="0" cellpadding="8" align="center">
			<tr class="title">
				<td COLSPAN="3">论坛列表<span class="right">[
					<a style="color: white" href="add_forums.php">
						添加
					</a> ]</span></td>
			</tr>
			<tr>
				<td width="10%"><strong>主题</strong></td>
				<td width="40"><strong>论坛</strong></td>
				<td width="15"><strong>最后更新</strong></td>
			</tr>
			<?php
				if($sum>0) {
				while ($row = mysqli_fetch_array($que)) {
			?>
			<tr>
			<td><?php echo $row['subject'] ?></td>
			<td><?php echo "<div class=\"bold\"><a class=\"forum\" href=\"forums_detail.php?forums_id=".$row['forums_id'] . "\">" . $row["forums_name"] . "</a></div>"
			. $row["forums_description"] ?></td>
			<td>
			<div><?php echo $row["last_post_time"]?></div>
			</td>
			</tr>
			<?php
					}
				}else{
					echo "<tr><td colspan='3'>对不起，论坛正在建设中，感谢你的关注......</td></tr>";
				}
			?>
		</table>
		
		<!--头部导航栏开始的位置-->
		<?php
		require ROOT_PATH . 'compoent/header_inc.php';
		//转换成硬路径
		?>
	</body>
	<script src="js/common/jquery.slicebox.js"></script>
	<script type="text/javascript" src="seajs/sea.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script>
		//配置参数
		seajs.config({
			base: "../seajs/",
			alias: {
				"jquery":"../js/common/jquery.min.js",
				"bootstrap":"../js/common/bootstrap.min.js",
				"slicebox": "../js/common/jquery.slicebox.js",
			}
		});
		//加载入口模块
		seajs.use(["../php-xiang/js/ec-index","../php-xiang/js/ec-initSliceBox"],function(modA,modB){
			modA.init();
			modB.init();
		});
	</script>

</html>