<?php
include("conn/conn.php");
$title = $_POST['title'];
$content = $_POST['content'];
$spid = $_GET['id'];
$time = date("Y-m-j");
session_start();
$username = $_SESSION['username'];
$sql = mysqli_query($conn, "select * from tb_user where name=$username");
$info = mysqli_fetch_array($sql);
$userid = $info['id'];
mysqli_query($conn, "insert into `tb_pingjia` (`userid`,`spid`,`title`,`content`,`time`) values ('$userid','$spid','$title','$content','$time') ");
echo "<script>alert('添加成功!');history.back();</script>";
?>