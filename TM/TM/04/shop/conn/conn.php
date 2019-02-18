<?php
header("content-type:text/html;charset=utf-8");
$server_name = "localhost";
$admin_name = "root";
$admin_pwd = "";
$database_name = "shop";
$conn = mysqli_connect($server_name, $admin_name, $admin_pwd, $database_name);
if (!$conn) {
    die("连接失败：" . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
?>
