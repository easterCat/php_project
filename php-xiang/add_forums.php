<!DOCTYPE html>
<?php
	session_start();
	header("content-type:text/html;charset=utf8");
	
	//登录页面制作有问题，暂时先进行屏蔽
	//if(empty($_SESSION['username'])){
	//	echo "<script>alert('请先登录');location.href='login.html';</script>";
	//}
?>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>论坛</title>
		<style>
			table,
			td,
			tr {
				border: 1px solid #B10707;
			}
			
			.btn {
				background-color: #B10707;
				width: 90px;
				height: 40px;
				font-size: 15px;
				color: white;
				border: none;
			}
			
			#title {
				color: White;
			}
			
			.input {
				border: 1px solid red;
				width: 200px;
				height: 20px;
			}
			
			a {
				color: White;
			}
			
			.right {
				margin-left: 10px;
			}
		</style>
	</head>

	<body>
		<form action="php/save_forums.php" method="post">
			<table width="450px" cellspacing="0" cellpadding="8" align="center">
				<tr id="title">
					<td colspan="2" style="background-color: #B10707"> 论坛管理 <span class="right">[
						<a href="index.php">
							返回首页
						</a> ]</span></td>
				</tr>
				<tr>
					<td width="23%"><strong>论坛名称</strong></td>
					<td width="77%">
						<input name="forums_name" type="text" class="input">
					</td>
				</tr>
				<tr>
					<td width="23%"><strong>论坛主题</strong></td>
					<td width="77%">
						<input name="subject" type="text" class="input">
					</td>
				</tr>
				<tr>
					<td><strong>论坛简介</strong></td>
					<td>						<textarea name="forums_description" cols="30" rows="5"></textarea></td>
				</tr>
				<tr></tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" class="btn" value="添加">
						<input type="reset" name="submit2" class="btn" value="重置">
					</td>
				</tr>
			</table>
		</form>
	</body>

</html>