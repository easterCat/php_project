<?php
include("top.php");
include("banner.php")
?>
<<<<<<< HEAD
<table width="" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td bgcolor="#F5F5F5">
            <table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="209" valign="top" bgcolor="#F5F5F5"><?php include("left.php"); ?></td>
                    <td width="557" height="438" align="center" valign="top" bgcolor="#F5F5F5">
                        <table width="557" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="553" bgcolor="#FFFFFF">
                                    <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="557" height="50"><img src="images/tuijian.gif" width="557"
                                                                             height="50" border="0" usemap="#Map2"></td>
                                        </tr>
                                    </table>
                                    <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="555" height="110">
                                                <table width="530" height="110" border="0" align="center"
                                                       cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="265">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin where tuijian=1 order by addtime desc limit 0,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == false) {
                                                                echo "不错哦";
                                                            } else {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "不错哦";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><img
                                                                                src="images/circle.gif"
                                                                                width="10"
                                                                                height="10"><?php echo $info["mingcheng"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "库存不足";
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="265">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin where tuijian=1 order by addtime desc limit 1,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == true) {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "情趣";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><?php echo $info["mingcheng"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "������";
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="10" background="images/line1.gif"></td>
                                        </tr>
                                    </table>
                                    <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46"><img src="images/new.gif" width="557" height="46" border="0"
                                                                 usemap="#Map3"></td>
                                        </tr>
                                    </table>
                                    <table width="543" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="543" height="110">
                                                <table width="540" height="110" border="0" align="center"
                                                       cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="265">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin order by addtime desc limit 0,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == false) {
                                                                echo "亲亲我";
                                                            } else {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "问问";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><?php echo $info["mingcheng"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "������";
                                                                            }
                                                                            ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="265">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin order by addtime desc limit 1,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == true) {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "啊啊";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><?php echo $info["mingcheng"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "������";
                                                                            }
                                                                            ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="10" background="images/line1.gif"></td>
                                        </tr>
                                    </table>
                                    <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46"><img src="images/hot.gif" width="557" height="46" border="0"
                                                                 usemap="#Map4"></td>
                                        </tr>
                                    </table>
                                    <table width="553" border="00" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="553" height="110">
                                                <table width="540" height="110" border="0" align="center"
                                                       cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="275">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin order by id desc limit 0,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == false) {
                                                                echo "请问";
                                                            } else {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "萨达";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><font color="FF6501"><img
                                                                                    src="images/circle.gif"
                                                                                    width="10"
                                                                                    height="10">&nbsp;<?php echo $info["mingcheng"]; ?>
                                                                            </font></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "������";
                                                                            }
                                                                            ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="255">
                                                            <?php
                                                            $sql = mysqli_query($conn, "select * from tb_shangpin order by id desc limit 0,1");
                                                            $info = mysqli_fetch_array($sql);
                                                            if ($info == true) {
                                                                ?>
                                                                <table width="270" border="0" cellspacing="0"
                                                                       cellpadding="0">
                                                                    <tr>
                                                                        <td width="130" rowspan="5">
                                                                            <div align="center">
                                                                                <?php
                                                                                if (trim($info["tupian"] == "")) {
                                                                                    echo "啊啊";
                                                                                } else {
                                                                                    ?>
                                                                                    <img
                                                                                        src="<?php echo $info["tupian"]; ?>"
                                                                                        width="80" height="80"
                                                                                        border="0">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </td>
                                                                        <td width="11" height="16">&nbsp;</td>
                                                                        <td width="124"><?php echo $info["mingcheng"]; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["shichangjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td><?php echo $info["huiyuanjia"]; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="16">&nbsp;</td>
                                                                        <td>
                                                                            <?php
                                                                            if ($info["shuliang"] > 0) {
                                                                                echo $info["shuliang"];
                                                                            } else {
                                                                                echo "������";
                                                                            }
                                                                            ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="30" colspan="2"><a
                                                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/xiangxi_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a> <a
                                                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                                                    src="images/goumai_btn.gif"
                                                                                    width="60" height="18"
                                                                                    border="0"></a></td>
                                                                    </tr>
                                                                </table>
                                                                <?php
                                                            }
                                                            ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="10"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
=======
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <h5>推荐商品<a href="showtuijian.php" class="btn btn-default pull-right" style="color:#fff;"
                       role="button">更多</a></h5>
>>>>>>> 0928cdeae8e762cb987654bdbe0009fcf04e1633
            <?php
            $sql = mysqli_query($conn, "select * from tb_shangpin where tuijian=1 order by addtime desc limit 0,4");
            $info = mysqli_fetch_array($sql);
            if ($info == false) {
                echo "<script>alert('推荐商品查找失败');</script>";
            } else {
                for ($i = 0; $i < 4; $i++) {
                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <?php if ($info['tupian'] == '') {
                                echo "暂无预览图片";
                            } else {
                                ?>
                                <img src="<?php echo $info['tupian'] ?>" alt="">
                                <?php
                            }
                            ?>
                            <div class="caption">
                                <h6>名称:<?php echo $info['mingcheng'] ?></h6>
                                <p>
                                    <span>价格:<?php echo $info['huiyuanjia'] ?></span><span>库存:<?php if ($info['shuliang'] == 0) {
                                            echo "库存不足";
                                        } else {
                                            echo $info['shuliang'];
                                        }
                                        ?>
                                    </span>
                                </p>
                                <p>
                                    <a href="lookinfo.php?id=<?php echo $info['id'] ?>"
                                       class="btn btn-primary glyphicon glyphicon-heart" style="color:#fff;"
                                       role="button">查看详情</a>
                                    <a href="addgouwuche.php?id=<?php echo $info['id'] ?>"
                                       class="btn btn-default glyphicon glyphicon-shopping-cart" style="color:#fff;"
                                       role="button">购物车</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <h5>最新商品<a href="shownew.php" class="btn btn-default pull-right" style="color:#fff;" role="button">更多</a>
            </h5>
            <?php
            $sql2 = mysqli_query($conn, "select * from tb_shangpin order by addtime desc limit 0,4");
            $info2 = mysqli_fetch_array($sql2);
            if ($info2 == false) {
                echo "最新商品查询失败";
            } else {
                for ($i = 0; $i < 4; $i++) {
                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <?php
                            if ($info2['tupian'] === '') {
                                echo '暂无预览图片';
                            } else {
                                ?>
                                <img src="<?php echo $info2['tupian']; ?>" alt="">
                                <?php
                            }
                            ?>
                            <div class="caption">
                                <h6>名称:<?php echo $info2['mingcheng'] ?></h6>
                                <p>
                                    <span>价格:<?php echo $info2['huiyuanjia'] ?></span>
                                    <span>库存:<?php if ($info2['shuliang'] == 0) {
                                            echo '暂无库存';
                                        } else {
                                            echo $info2['shuliang'];
                                        } ?>
                                    </span>
                                </p>
                                <p>
                                    <a href="lookinfo.php?id=<?php echo $info2['id'] ?>"
                                       class="btn btn-primary glyphicon glyphicon-heart" style="color:#fff;"
                                       role="button">查看详情</a>
                                    <a href="addgouwuche.php?id=<?php echo $info2['id'] ?>"
                                       class="btn btn-default glyphicon glyphicon-shopping-cart" style="color:#fff;"
                                       role="button">购物车</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row column">
        <div class="col-md-12">
            <h5>热门商品<a href="showhot.php" class="btn btn-default pull-right" style="color:#fff;" role="button">更多</a>
            </h5>
            <?php
            $sql3 = mysqli_query($conn, "select * from tb_shangpin order by id desc limit 0,4");
            $info3 = mysqli_fetch_array($sql3);
            if ($info3 == false) {
                echo "热门商品查找失败";
            } else {
                for ($i = 0; $i < 4; $i++) {
                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <?php
                            if ($info3['tupian'] == '') {
                                echo "暂无预览图片";
                            } else {
                                ?>
                                <img src="<?php echo $info3['tupian']; ?>" alt="">
                            <?php } ?>
                            <div class="caption">
                                <h6>名称:<?php echo $info3['mingcheng']; ?></h6>
                                <p><span>价格:<?php echo $info3['huiyuanjia']; ?></span><span>库存:<?php
                                        if ($info3['shuliang'] == 0) {
                                            echo "库存不足";
                                        } else {
                                            echo $info3['shuliang'];
                                        }
                                        ?>
                                    </span>
                                </p>
                                <p>
                                    <a href="" class="btn btn-primary  glyphicon glyphicon-heart" style="color:#fff;"
                                       role="button">查看详情</a>
                                    <a href="" class="btn btn-default  glyphicon glyphicon-shopping-cart"
                                       style="color:#fff;"
                                       role="button">购物车</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include("left.php");
include("bottom.php");
?>
</body>
</html>
