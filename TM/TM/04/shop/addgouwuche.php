<?php
session_start();
include("conn/conn.php");
if ($_SESSION['username'] == "") {
    echo "<script>alert('请先进行登录!');history.back();</script>";
    exit;
}
$id = strval($_GET['id']);
$sql = mysqli_query($conn,"select * from tb_shangpin where id='" . $id . "'");
$info = mysqli_fetch_array($sql);
if ($info['shuliang'] <= 0) {
    echo "<script>alert('商品数量不足，请选其它商品!');history.back();</script>";
    exit;
}
$array = explode("@", $_SESSION['producelist']);
for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] == $id) {
        echo "<script>alert('重复添加!');history.back();</script>";
        exit;
    }
}
$_SESSION['producelist'] = $_SESSION['producelist'] . $id . "@";
$_SESSION['quatity'] = $_SESSION['quatity'] . "1@";
header("location:gouwu1.php");
?> 