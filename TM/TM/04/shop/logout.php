<?php
session_start();
//销毁一个session里面的全部数据
session_destroy();
header("location:index.php");
?>