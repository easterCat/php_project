<?php
	header("content-type:text/html;charset = utf8");
	
	//设置服务器名称，管理员名称，管理员密码
	$_servername = "localhost";
	$_managername = "zjwdb_6089566";
	$_managerpwd = "Jp940612";
	$_datebasename = "zjwdb_6089566";
	//创建连接
	//上传到网站上需要修改名称和密码
	//连接数据库
	$conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);

	//连接检测
	if (!$conn) {
		die("连接失败：" . mysqlI_connect_error());
	}
	mysqli_set_charset($conn, "utf8");
	
	
	$forums_name = $_POST["forums_name"];
	$forums_id = md5($forums_name);
	$forums_description = $_POST["forums_description"];
	$_subject = $_POST["subject"];
	$last_post_time = date('y-m-d h:i:s', time());
	
	$sql = "insert into forums (forums_id,forums_name,forums_description,subject,last_post_time) VALUES ('$forums_id','$forums_name','$forums_description','$_subject','$last_post_time')";
	$que = mysqli_query($conn,$sql);
	if ($que) {
		echo "<script>alert('add success');location.href='../forums.php';</script>";
	} else {
		echo "<script>alert('add error,please wait a moment');location.href='../add_forums.php'</script>";
	}
?>