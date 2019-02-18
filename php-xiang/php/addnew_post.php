<?php
	//获取论坛的id值
	$forums_id = $_GET['forums_id'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$last_post_time = date('y-m-d h:i:s', time());
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	//连接数据库
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
	mysqli_set_charset($conn,'uft8');
	$sql = "insert into topic (author,title,content,last_post_time) VALUES ('$author','$title','$content','$last_post_time')";
	$que = mysqli_query($conn,$sql);
	if ($que) {
		echo "<script>alert('create success');location.href='../forums_detail.php?forums_id=$forums_id'</script>";
	} else {
		echo "<script>alert('create error');location.href='../addnew.php'</script>";
	}
?>