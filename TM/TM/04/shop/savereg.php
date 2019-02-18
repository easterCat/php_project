<?php
session_start();
include("conn/conn.php");
$name = $_POST['usernc'];
$id = md5($name);
$pwd1 = $_POST['p1'];
$pwd = md5($_POST['p1']);
$email = $_POST['email'];
$tel = $_POST['tel'];
$qq = $_POST['qq'];
$nc = $_POST['nc'];
$regtime = date("Y-m-j");
$dongjie = 0;
$sql = mysqli_query($conn,"select * from tb_user where name='" . $name . "'");
$info = mysqli_fetch_array($sql);
if ($info == true) {
    echo "<script>alert('用户名已经存在');history.back();</script>";
    exit;
} else {
    mysqli_query($conn,"insert into tb_user (id,name,pwd,dongjie,email,tel,qq,nc,regtime,pwd1) values ('$id','$name','$pwd','$dongjie','$email','$tel','$qq','$nc','$regtime','$pwd1')");
	$_SESSION["username"] = $name;
	$_SESSION["producelist"] = "";
	$_SESSION["quatity"] = "";
    echo "<script>alert('注册成功!');window.location='index.php';</script>";
}
?>
