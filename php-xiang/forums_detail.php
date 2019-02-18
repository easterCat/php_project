<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	//设置编码
	//isset()检测变量是否设置，并且不是null
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	//接收页码，如果页码还没传，就将其设置为1
	$page = !empty($page) ? $page : 1;
	//获取论坛的id值
	$forums_id = $_GET['forums_id'];
	
	
	//设置服务器名称，管理员名称，管理员密码
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
	if(!$conn){
		die("连接失败：".mysqli_connect_error());
	}
	//设定字符集
	$_charset = mysqli_set_charset($conn, "utf8"); 
	//	$_charset=mysqli_character_set_name($conn);//获取当前默认字符集
	if($_charset){
		//echo "字符集设置成功";
	}
	//数据库账号zjwdb_6089566密码Jp940612
	//mysql_select_db($_datebasename);
	
	
	$table_name = "topic";
	//每页显示的数据个数
	$perpage = 5;
	//最大页数和总记录数
	$total_sql = "select count(*) from $table_name";
	$total_result = mysqli_query($conn,$total_sql);
	if(!$total_result){
		//echo 'Could not run query:'.mysqli_error($conn);
		exit;
	}else{
		//echo "查询最大页数和总记录数成功";
	}
	//从结果集中取得一行作为枚举数组
	$total_row = mysqli_fetch_row($total_result);
	//获取最大页码数
	$total = $total_row[0];
	//获取最大页码数
	//向上整数
	$total_page = ceil($total / $perpage);
	//临界点,若果$page大于总页码时，将$page值设定为总页码，无法增大
	//当下一页数大于最大页数时的情况
	$page = $page > $total_page ? $total_page : $page;
	//分页设置初始化
	$start = ($page - 1) * $perpage;
	$sql = "select * from topic limit $start ,$perpage";
	$que = mysqli_query($conn,$sql);
	//取得结果集中行的数目
	$sum = mysqli_num_rows($que);//就是查找出来的一页有多少行
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>帖子</title>
		<style>
			.cen {
				border: none;
				width: 600px;
				margin: 0 auto;
				height: 40px;
				background-color: rgba(34, 35, 62, 0.08);
			}

			.left {
				width: 535px;
				float: left;
			}

			.right {
				width: 65px;
				height: 30px;
				background-color: #B10707;
				float: left;
				margin-top: 8px;
			}
			
			.title {
				background-color: #B10707;
				color: white;
			}
			
			.list {
				margin-left: 12px;
			}
		</style>
	</head>
	<body>
		<div class="cen">
			<div class="left">
				<?php
					$title_sql = "select forums_name from forums where forums_id ='$forums_id'";
					$title_query = mysqli_query($conn,$title_sql);
					//从结果集中取得一行作为关联数组，或数字数组，或二者兼有
					$title_row = mysqli_fetch_array($title_query);
					$forums_name = $title_row['forums_name'];
					echo "当前论坛为：<a href=\"index.php\">$forums_name</a>-->>$forums_name";
				?>
			</div>
			<div class="right">
				<a style="color:#fff" href="addnew.php?forums_id=<?php echo $forums_id?>">发布新帖</a>
			</div>
		</div>
		<table width="600px" border="1" cellpadding="8" cellspacing="0" align="center">
			<tr class="title">
				<td colspan="3">帖子列表 <span class="list">[
					<a style="color: #fff" href="index.php">
						返回
					</a> ]</span></td>
			</tr>
			<tr>
				<td width="280px">主题列表</td>
				<td width="160px" >作者</td>
				<td width="160px">最后更新</td>
			</tr>
			<?php
				if($sum>0) {
				while($row=mysqli_fetch_array($que)) {
			?>
			<tr>
			<td width="280px"><div><a href="thread.php?id=<?php echo $row['title']?>"</a><?php echo $row['title']?></div> </td>
			<td width="160px"><?php echo $row['author'] ?></td>
			<td width="160px"><?php echo $row['last_post_time']?></td>
			</tr>
			<tr>
			<td colspan="3">
			<?php }
				}
				else{
				echo "<tr><td colspan='5'>本版块没有帖子.....</td></tr>";
				}
			?>
			</td>
			</tr>
			<tr>
			<td colspan="5">
			<div id="baner" style="margin-top: 20px">
			<a href="<?php
			echo "$_SERVER[PHP_SELF]?page=1"
			?>">首页</a>
			  <a href="<?php
			echo "$_SERVER[PHP_SELF]?page=".($page-1)
			?>">上一页</a>
			<!-- 显示123456等页码按钮-->
			<?php
				for ($i = 1; $i <= $total_page; $i++) {
					if ($i == $page) {//当前页为显示页时加背景颜色
						echo "<a style='padding: 5px 5px;background: #000;color: #FFF' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
					} else {
						echo "<a style='padding: 5px 5px' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
					}
				}
			?>
			<a href="<?php
			echo "$_SERVER[PHP_SELF]?page=".($page+1)
			?>">下一页</a>
			<a href="<?php
			echo "$_SERVER[PHP_SELF]?page={$total_page}"
			?>">
			末页
			</a>
			  <span>共<?php echo $total?>条
			</span>
			</div>
			</td>
			</tr>
		</table>
	</body>
</html>
