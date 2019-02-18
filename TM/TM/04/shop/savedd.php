<?php
session_start();
include("conn/conn.php");
$xiadanren = $_SESSION['username'];
$sql = mysqli_query($conn, "select * from tb_user where name=$xiadanren");
$info = mysqli_fetch_array($sql);
$dingdanhao = date("YmjHis") . $info["id"];
$spc = $_SESSION['producelist'];
$slc = $_SESSION['quatity'];

$shouhuoren = $_POST['name2'];
$sex = $_POST['sex'];

$youbian = $_POST['yb'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$dizhi = $_POST['dz'];
if (trim($_POST['ly']) == "") {
    $leaveword = "";
} else {
    $leaveword = $_POST['ly'];
}

$time = date("Y-m-j H:i:s");
$zt = "zhuti";
$total = $_SESSION['total'];
$que = mysqli_query($conn, "INSERT INTO `tb_dingdan`(`dingdanhao`, `spc`, `slc`, `shouhuoren`, `sex`, `dizhi`, `youbian`, `tel`, `email`, `leaveword`, `time`, `xiandanren`, `zt`, `total`) VALUES ('$dingdanhao','$spc','$slc','$shouhuoren','$sex','$dizhi','$youbian','$tel','$email','$leaveword','$time','$xiadanren','$zt','$total')");

header("location:gouwu2.php?dingdanhao=$dingdanhao");
?>
