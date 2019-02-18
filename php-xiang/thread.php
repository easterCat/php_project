<?php
	header("Content-type:text/html;charset=utf-8");
	//设置编码
	// 创建连接//设置服务器名称，管理员名称，管理员密码
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	//连接数据库
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
	mysqli_set_charset($conn,'utf8');
	$title = $_GET['id'];
	$sql = "select * from topic where title='$title'";
	$que = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($que);
?>
<!DOCTYPE html>
<html lang="en">

	<head>
    	<meta charset="UTF-8">
    	<title>详情</title>
    	<style>
	        .left {
			    width: 170px;
			}
			
			.bg {
			    background-color: #B10707;
			    color: white;
			}
			
			.fh {
			    margin-left: 18px;
			}
			
			.spa {
			    margin-left: 25px;
			}
			
			.ind {
			    text-indent: 2em;
			}					
    	</style>
	</head>
	<body>
		<table width="400px" border="1" cellpadding="12" cellspacing="0" align="center">
		 <tr>
		 <td colspan="2" class="bg">帖子标题：<?php echo $row['title'] ?>
		 <span class="fh"><a style="color:#fff" href="forums.php">[返回]</a></span>
		 </td>
		 </tr>
		 <tr>
		 <td rowspan="2" class="left">
		 发帖人：
		 <?php
		 	echo $row['author']
		 ?>
		 </td>
		 <td>
		 发帖时间：<?php echo $row['last_post_time']?>
		 <span class="spa"><a href="reply.php?id=<?php echo $row['title']?>">回复</a></span>
		 </td>
		 </tr>
		 <tr class="ind">
		 <td><?php echo $row['content']?></td>
		 </tr>
		 <?php
			if ($row['reply_content'] == "") {
				echo "<tr>
			 <td colspan='2'>暂时还没有回复哦！！！</td>
			 </tr>";
			} else {
				echo 
				"<tr><td colspan='2'><p>回复人:".$row['reply_author']."</p><p>回复时间:" . $row['reply_time']."</p><p>回复内容:" .$row['reply_content']."</p></td></tr>";
			}
		 ?>
		</table>
	</body>
</html>