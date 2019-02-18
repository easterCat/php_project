<?php
//为header加入缓冲区
ob_start();
header("Content-Type:text/html;charset=utf-8");
//页面编码
//初始化将默认错误设置为空值
$userErr = $pwdErr = $emailErr = $sexErr = $webErr = $remarkErr = "";
//初始化将默认值设置为空值
$user = $pwd = $email = $sex = $web = $remark = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
	if (empty($_POST["fuser"])) {//empty()可以换成isset(),也可以直接使用判断，推荐isset()
		$userErr = "账号是必须的！";
	} else {

		$user = test_input($_POST["fuser"]);
		if (preg_match("/[a-zA-Z0-9\_]*$/", $user)) {
			$userErr = "只允许字母数字下划线";
			echo "账号注册成功，您的账号为：";
			echo $user;
			echo "<br>";
		}
	}

	if (empty($_POST["fpwd"])) {
		$pwdErr = "密码是必须的";
	} else {
		$pwd = test_input($_POST["fpwd"]);
		if (preg_match("/([A-Z]{1})([a-zA-Z0-9]{1,12})/", $pwd)) {
			echo "注册密码正确，您的密码为：";
			echo $pwd;
			echo "<br>";
		} else {
			echo "您的密码格式不对，首字母必须大写";
			echo "<br>";
		}
	}

	if (empty($_POST["femail"])) {
		$emailErr = "请填写正确的邮箱";
	} else {
		$email = test_input($_POST["femail"]);
		if (preg_match("/^([a-zA-Z0-9]{1,18})@([a-zA-Z0-9]{1,5})\.([a-z]{2,4})$/", $email)) {
			echo "邮箱格式输入正确，您的注册邮箱为：";
			echo $email;
			echo "<br>";
		} else {
			echo "邮箱格式输入错误";
			echo "<br>";
		}
	}

	if (empty($_POST["fsex"])) {
		$sexErr = "请选择性别";
	} else {
		$sex = test_input($_POST["fsex"]);
		echo "你的性别为：";
		echo $sex;
		echo "<br>";
	}

	if (empty($_POST["fwebads"])) {
		$webErr = "请输入正确的网址";
	} else {
		$web = test_input($_POST["fwebads"]);
		if (preg_match("/(www).([a-zA-Z0-9]{1,15}).([a-z]{1,5})/", $web)) {
			echo "网址输入正确,您的注册链接";
			echo $web;
			echo "<br>";
		} else {
			echo "网址输入错误";
			echo "<br>";
		}
	}
	$remark = test_input($_POST["remark"]);
	echo "您的备注为：";
	echo $remark;
	echo "<br>";
}

if (strlen($user) != 0 && strlen($pwd) != 0 && strlen($email) != 0 && strlen($sex) != 0 && strlen($web) != 0) {
	//设置服务器名称，管理员名称，管理员密码
	$_servername = "localhost";
	$_managername = "root";
	$_managerpwd = "";
	//创建连接
	//上传到网站上需要修改名称和密码
	$conn = mysql_connect($_servername, $_managername, $_managerpwd);
	mysql_set_charset($conn, 'utf8');
	//连接检测
	if (!$conn) {
		die("连接失败：" . mysql_connect_error());
	}
	//连接数据库
	mysql_select_db("zjwdb_6089566");
	mysql_query("set name 'GBK'");
	$sql = "select username from user where username='$user'";
	$result = mysql_query($sql);
	echo $sql;
	echo "<br>";
	echo $result;
	echo "<br>";
	$zsql = "SELECT username FROM user";
	$zresult = mysql_query($zsql);
	echo $zsql;
	echo "<br>";
	echo $zresult;
	echo "<br>";

	$num = mysql_num_rows($result);
	if ($num) {
		echo "<script>alert('账号已经存在');history.go(-1);</script>";
	} else {
		echo "注册成功";
		echo "<br>";
		$sql_insert = "INSERT INTO user (username,password,email,sex,address,remark) values ('$user','$pwd','$email','$sex','$web','$remark');";
		$result_insert = mysql_query($sql_insert);
		echo $result_insert;
		echo "<br>";
		echo "为什么连不上";
		echo $user;
		echo "<br>";
		echo $pwd;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $sex;
		echo "<br>";
		echo $web;
		echo "<br>";
		echo $remark;
		echo "<br>";
		if ($result_insert) {
			echo "<script>alert('注册成功！');window.location='../login.html';</script>";
		} else {
			echo "<script>alert('系统繁忙，请稍候！'); </script>";
		}
	}
}

function test_input($data) {
	$data = trim($data);
	//头尾过滤,去除前后空格
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	//将数据解析之后
	return $data;
}
?>