<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 16:02
 */

include("../conn/conn.php");

//创建模拟数据,生成商品数据
for ($i = 0; $i < 339; $i++) {
    $math = rand(154, 339);
    $math2 = rand(150, 200);
    $math3 = rand(5, 99);
    $math4 = rand(0, 99);
    $math5 = rand(1, 4);
    $math6 = rand(1, 17);
    $que = mysqli_query($conn, "insert into tb_shangpin (`id`, `mingcheng`, `tupian`, `shichangjia`, `huiyuanjia`, `shuliang`, `tuijian`, `addtime`, `cishu`, `jianjie`, `pingpai`, `xinghao`) VALUES ('$i','蛋糕','
images/$math6.jpg','$math','$math2','$math3','$math5','2017-2-29','$math4','这是一个商品','阿帕奇','爱国者')");
}

//创建模拟数据，生成分类数据
//$array = ['豆豆', '逗逗', '痘痘', '兜兜', '抖抖'];
//for ($i = 0; $i < 5; $i++) {
//    $math = rand(100, 200);
//    $data = $array[$i];
//    echo $data;
//    $que = mysqli_query($conn, "INSERT INTO `tb_type`(`typeid`, `typename`, `total`, `tupian`) VALUES ('$i','$data','$math','images/xiangxi_btn.gif')");
//}
//echo $que;

?>