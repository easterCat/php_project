<?php
include("top.php");
?>
    <table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php"); ?></td>
            <td width="581" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div align="left"> &nbsp;
                                <?php

                                $sql = mysqli_query($conn, "select * from tb_type order by typeid desc");
                                $info = mysqli_fetch_object($sql);
                                if ($info == false) {
                                    echo "没有分类!";
                                } else {
                                    do {
                                        echo "<a href='showfenlei.php?id=" . $info->typeid . "&page=1'>" . $info->typename . "&nbsp;</a>";

                                    } while ($info = mysqli_fetch_object($sql));
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
                <?php
                if ($_GET["id"] == "") {
                    $sql = mysqli_query($conn, "select * from tb_type order by typeid desc limit 0,1");
                    $info = mysqli_fetch_array($sql);
                    $id = $info["id"];
                } else {
                    $id = $_GET["id"];
                }
                $sql1 = mysqli_query($conn, "select * from tb_type where typeid=$id");
                $info1 = mysqli_fetch_array($sql1);
                $sql = mysqli_query($conn, "select count(*) as total from tb_shangpin where tuijian=$id order by addtime desc");
                $info = mysqli_fetch_array($sql);

                $total = $info["total"];
                $page_count = $total;
                if ($total == 0) {
                    echo "<div align='center'>分类下无货物!</div >";
                } else {
                    ?>
                    <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td bgcolor="#FEE7C5">
                                <div><span style="color: #666666; font-weight: bold">
                                    <span style="color: #000000">分类名称：</span><span><?php echo $info1['typename']; ?></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td background="images/line1.gif"></td>
                        </tr>
                    </table>
                    <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
                        <?php
                        $page_size = 5;
                        if ($total <= $page_size) {
                            $page_total = 1;
                        }
                        if (($total % $page_size) != 0) {
                            $page_total = intval($total / $page_size);

                        } else {
                            $page_total = $total / $page_size;
                        }
                        if (($_GET["page"]) == "") {
                            $page_now = 1;
                        } else {
                            $page_now = ceil($_GET["page"]);
                        }

                        $sql1 = mysqli_query($conn, "select * from tb_shangpin where tuijian=$id order by addtime desc limit " . ($page_now - 1) * $page_size . ",$page_size ");


                        while ($info1 = mysqli_fetch_array($sql1)) {
                            ?>
                            <tr>
                                <td width="89" rowspan="6">
                                    <div align="center">
                                        <?php
                                        if ($info1["tupian"] == "") {
                                            echo "没有预览图!";
                                        } else {
                                            ?>
                                            <a href="lookinfo.php?id=<?php echo $info1["id"]; ?>"><img border="0"
                                                                                                       width="80"
                                                                                                       height="80"
                                                                                                       src="<?php echo $info1["tupian"]; ?>"></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </td>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">名称</div>
                                </td>
                                <td colspan="5">
                                    <div align="left"><a
                                                href="lookinfo.php?id=<?php echo $info1["id"]; ?>"><?php echo $info1["mingcheng"]; ?></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">品牌</div>
                                </td>
                                <td width="101" height="20">
                                    <div align="left"><?php echo $info1["pingpai"]; ?></div>
                                </td>
                                <td width="62">
                                    <div align="center" style="color: #000000">型号</div>
                                </td>
                                <td colspan="3">
                                    <div align="left"><?php echo $info1["xinghao"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">简介</div>
                                </td>
                                <td height="20" colspan="5">
                                    <div align="left"><?php echo $info1["jianjie"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20">
                                    <div align="center" style="color: #000000">添加时间</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info1["addtime"]; ?></div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">数量:</div>
                                </td>
                                <td width="69" height="20">
                                    <div align="left"><?php echo $info1["shuliang"]; ?></div>
                                </td>
                                <td width="63">
                                    <div align="center" style="color: #000000">推荐</div>
                                </td>
                                <td width="73">
                                    <div align="left"><?php echo $info1["tuijian"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20">
                                    <div align="center" style="color: #000000">市场价</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info1["shichangjia"]; ?>元</div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">会员价</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info1["huiyuanjia"]; ?>元</div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">折扣</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo (ceil(($info1["huiyuanjia"] / $info1["shichangjia"]) * 100)) . "%"; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" colspan="6" width="461">
                                    <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a
                                                href="addgouwuche.php?id=<?php echo $info1["id"]; ?>"><img
                                                    src="images/goumai_btn.gif" width="60" height="18" border="0"
                                                    style=" cursor:hand"></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="10" colspan="7" background="images/line1.gif"></td>
                            </tr>
                            <?php
                        }

                        ?>
                    </table>
                    <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <?php
                            include("components/Page.php");
                            $newPage = new Page($page_count, 5, $page_now, "showfenlei.php?id=$id&page=", 2);
                            echo $newPage->write_html();
                            ?>
                        </tr>
                    </table>
                    <?php
                }
                ?>
            </td>
        </tr>
    </table>
<?php
include("bottom.php");
?>