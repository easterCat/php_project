<?php
	//为header加入缓冲区
	ob_start();
	header("Content-Type:text/html;charset=utf-8");
	//页面编码
	//初始化将默认错误设置为空值
	$remarkErr = "";
	//初始化将默认值设置为空值
	$remark = "";
	function check_username($user_data)
	{
	    $userErr = "";
	    $user = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        //empty()可以换成isset(),也可以直接使用判断，推荐isset()
	        $userErr = "账号是必须的！";
	        echo $userErr;
	        return $reg_bool = 0;
	    } else {
	        $user = test_input($user_data);
	        if (preg_match("/[a-zA-Z0-9\\_]*\$/", $user)) {
	            echo "账号输入正确";
	            echo $user;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            $userErr = "只允许字母数字下划线";
	            echo $userErr;
	            return $reg_bool = 0;
	        }
	    }
	}
	function check_password($user_data)
	{
	    $pwdErr = "";
	    $pwd = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $pwdErr = "密码是必须的";
	        return $reg_bool = 0;
	    } else {
	        $pwd = test_input($user_data);
	        if (preg_match("/([A-Z]{1})([a-zA-Z0-9]{1,12})/", $pwd)) {
	            echo "注册密码正确，您的密码为：";
	            echo $pwd;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            echo "您的密码格式不对，首字母必须大写";
	            return $reg_bool = 0;
	        }
	    }
	}
	function confirm_password($user_data, $user_data2)
	{
	    $con_fpwdErr = "";
	    $con_fpwd = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $pwdErr = "密码是必须的";
	        return $reg_bool = 0;
	    } else {
	        if ($user_data == $user_data2) {
	            return $reg_bool = 1;
	        } else {
	            echo "两次输入的密码不一致";
	            return $reg_bool = 0;
	        }
	    }
	}
	function check_sa_password($user_data)
	{
	    $sa_pwdErr = "";
	    $sa_pwd = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $pwdErr = "安全密码是必须的";
	        return $reg_bool = 0;
	    } else {
	        $pwd = test_input($user_data);
	        if (preg_match("/([0-9]{6})/", $pwd)) {
	            echo "安全密码正确，您的安全密码为：";
	            echo $pwd;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            echo "您的安全密码格式";
	            return $reg_bool = 0;
	        }
	    }
	}
	function confirm_sa_password($user_data, $user_data2)
	{
	    $con_sa_fpwdErr = "";
	    $con_sa_fpwd = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $pwdErr = "安全密码是必须的";
	        return $reg_bool = 0;
	    } else {
	        if ($user_data == $user_data2) {
	            return $reg_bool = 1;
	        } else {
	            echo "两次输入的密码不一致";
	            return $reg_bool = 0;
	        }
	    }
	}
	function check_email($user_data)
	{
	    $emailErr = "";
	    $email = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $emailErr = "请填写正确的邮箱";
	        return $reg_bool = 0;
	    } else {
	        $email = test_input($user_data);
	        if (preg_match("/([a-zA-Z0-9]{1,18})@([a-z0-9]{1,5}).([a-z]{2,4})/", $email)) {
	            echo "邮箱格式输入正确，您的注册邮箱为：";
	            echo $email;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            echo "邮箱格式输入错误";
	            return $reg_bool = 0;
	        }
	    }
	}
	function check_sex($user_data)
	{
	    $sexErr = "";
	    $sex = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $sexErr = "请选择性别";
	        return $reg_bool = 0;
	    } else {
	        $sex = test_input($user_data);
	        echo "你的性别为：";
	        echo $sex;
	        echo '<br>';
	        return $reg_bool = 1;
	    }
	}
	function check_qq($user_data)
	{
	    $qqErr = "";
	    $qq = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $qqErr = "请输入QQ号码";
	        return $reg_bool = 0;
	    } else {
	        $qq = test_input($user_data);
	        if (preg_match("/([0-9]{2,11})/", $qq)) {
	            echo "QQ号码正确，您的QQ为：";
	            echo $qq;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            echo "您的QQ号码错误";
	            return $reg_bool = 0;
	        }
	    }
	}
	function check_web($user_data)
	{
	    $webErr = "";
	    $web = "";
	    $reg_bool = 0;
	    if (empty($user_data)) {
	        $webErr = "请输入正确的网址";
	        return $reg_bool = 0;
	    } else {
	        $web = test_input($user_data);
	        if (preg_match("/(www).([a-zA-Z0-9]{1,15}).([a-z]{1,5})/", $web)) {
	            echo "网址输入正确,您的注册链接:";
	            echo $web;
	            echo '<br>';
	            return $reg_bool = 1;
	        } else {
	            echo "网址输入错误";
	            return $reg_bool = 0;
	        }
	    }
	}
	function insert_database($dataArray)
	{
	    if (strlen($dataArray[0]) != 0 && strlen($dataArray[1]) != 0 && strlen($dataArray[2]) != 0 && strlen($dataArray[3]) != 0 && strlen($dataArray[4]) != 0 && strlen($dataArray[5]) != 0 && strlen($dataArray[6]) != 0 && strlen($dataArray[7]) != 0 && strlen($dataArray[8]) != 0 && strlen($dataArray[9]) != 0) {
	    	//设置编码
			// 创建连接//设置服务器名称，管理员名称，管理员密码
			$_servername = "localhost";
			$_managername = "zjwdb_6089566";
			$_managerpwd = "Jp940612";
			$_datebasename = "zjwdb_6089566";
	        $conn = mysqli_connect($_servername, $_managername, $_managerpwd,$_datebasename);
			if(!$conn){
				die("连接数据库失败");
			}
	        mysqli_set_charset($conn,'uft8');
	        $sql = "select username from user where username='{$dataArray[1]}'";
	        $result = mysqli_query($conn,$sql);
	        $zsql = "SELECT username FROM user";
	        $zresult = mysqli_query($conn,$zsql);
	        $num = mysqli_num_rows($result);
	        if ($num) {
	            echo "<script>alert('账号已经存在');history.go(-1);';</script>";
	        } else {
	            $sql_insert = "INSERT INTO user (id,username,password,safaword,sex,face,email,qq,address,remark) values ('{$dataArray['0']}','{$dataArray['1']}','{$dataArray['2']}','{$dataArray['3']}','{$dataArray['4']}','{$dataArray['5']}','{$dataArray['6']}','{$dataArray['7']}','{$dataArray['8']}','{$dataArray['9']}')";
	            $result_insert = mysqli_query($conn,$sql_insert);
	            if ($result_insert) {
	                echo "<script>alert('注册成功！');window.location.href='login.html';</script>";
	            } else {
	                echo "<script>alert('系统繁忙，请稍候！'); </script>";
	            }
	        }
	    }
	}
	function test_input($data)
	{
	    $data = trim($data);
	    //头尾过滤,去除前后空格
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    //将数据解析之后
	    return $data;
	}
?>