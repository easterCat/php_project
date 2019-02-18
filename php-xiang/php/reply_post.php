<?php
	header("Content-type:text/html;charset=utf-8");
	//设置编码
	//设置服务器名称，管理员名称，管理员密码
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	//连接数据库
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
	mysqli_set_charset($conn, 'utf8');
	$id = $_GET['id'];
	$reply_author = $_POST['reply_author'];
	$reply_content = $_POST['reply'];
	$reply_time = date("Y-m-d H:i:s");
	$sql="update topic set reply_author='$reply_author',reply_content='$reply_content',reply_time='$reply_time' WHERE title='$id'";
	$que = mysqli_query($conn, $sql);
	if ($que) {
		echo "<script>alert('回复成功');location.href='../thread.php?id=$id'</script>";
	} else {
		echo "<script>alert('你的回复好像有点小问题.....');location.href='../thread.php'</script>";
	}
;
?>