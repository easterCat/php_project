<?php
ob_start();
header("Content-Type:text/html;charset=utf-8");
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	if ($user == '' || $pwd == '') {
		echo "<script>alert('请输入账号的密码');history.go(-1);</script>";
	} else {
		//设置服务器名称，管理员名称，管理员密码
		$_servername = "localhost";
		$_managername = "root";
		$_managerpwd = "";
		//创建连接
		//上传到网站上需要修改名称和密码
		$conn = mysql_connect($_servername, $_managername, $_managerpwd);
		mysql_set_charset('utf8');
		//数据库账号zjwdb_6089566密码Jp940612
		mysql_select_db("zjwdb_6089566");
		mysql_query("set name 'GBK'");
		$sql = "select username,password from user where username='{$user}' and password='{$pwd}'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if ($num) {
			$row = mysql_fetch_array($result);
			echo $row[0];
			echo "<script>alert('欢迎登录，{$row['0']}');window.location='../index.php';</script>";
		} else {
			echo "<script>alert('账号或者密码不正确');</script>";
		}
	}
} else {
	echo "<script>alert('提交失败');history.go(-1);</script>";
}
?>