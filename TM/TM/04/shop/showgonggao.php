<?php
include("top.php");
?>
    <table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php"); ?></td>
            <td width="557" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="557" height="46" background="images/gg.gif">
                            <div align="left"></div>
                        </td>
                    </tr>
                </table>
                <?php
                $sql = mysqli_query($conn, "select count(*) as total from tb_gonggao");
                $info = mysqli_fetch_array($sql);
                $total = $info["total"];
                if ($total == 0) {
                    echo "暂无公告";
                } else {
                    ?>
                    <table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="#EEEEEE">
                            <td width="296" height="20">
                                <div align="center">内容</div>
                            </td>
                            <td width="136">
                                <div align="center">标题</div>
                            </td>
                            <td width="68">
                                <div align="center">详细</div>
                            </td>
                        </tr>
                        <?php
                        $pagesize = 10;
                        if ($total <= $pagesize) {
                            $pagecount = 1;
                        }
                        if (($total % $pagesize) != 0) {
                            $pagecount = intval($total / $pagesize) + 1;
                        } else {
                            $pagecount = $total / $pagesize;
                        }
                        if (($_GET["page"]) == "") {
                            $page = 1;
                        } else {
                            $page = intval($_GET["page"]);
                        }

                        $sql1 = mysqli_query($conn, "select * from tb_gonggao order by time desc limit " . ($page - 1) * $pagesize . ",$pagesize ");
                        while ($info1 = mysqli_fetch_array($sql1)) {
                            ?>
                            <tr>
                                <td height="20">
                                    <div align="left">-<?php echo $info1["gonggao_con"]; ?></div>
                                </td>
                                <td height="20">
                                    <div align="center"><?php echo $info1["title"]; ?></div>
                                </td>
                                <td height="20">
                                    <div align="center">
                                        <a href="showgg.php?id=<?php echo $info1["id"]; ?>">点击查看</a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td height="20" colspan="3"> &nbsp;
                                <div align="right">共&nbsp;
                                    <?php
                                    echo $total;
                                    ?>
                                    &nbsp;条&nbsp;每页&nbsp;<?php echo $pagesize; ?>
                                    &nbsp;条&nbsp;第&nbsp;<?php echo $page; ?>
                                    &nbsp;页&nbsp;共&nbsp;<?php echo $pagecount; ?>&nbsp;页
                                    <?php
                                    if ($page >= 2) {
                                        ?>
                                        <a href="showgonggao.php?page=1" title="第一页"></a> <a
                                                href="showgonggao.php?id=<?php echo $id; ?>&page=<?php echo $page - 1; ?>"
                                                title="上一页"></a>
                                        <?php
                                    }
                                    if ($pagecount <= 4) {
                                        for ($i = 1; $i <= $pagecount; $i++) {
                                            ?>
                                            <a href="showgonggao.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                            <?php
                                        }
                                    } else {
                                        for ($i = 1; $i <= 4; $i++) {
                                            ?>
                                            <a href="showgonggao.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        <?php } ?>
                                        <a href="showgonggao.php?page=<?php echo $page - 1; ?>" title="上一页"></a> <a
                                                href="showgonggao.php?id=<?php echo $id; ?>&page=<?php echo $pagecount; ?>"
                                                title="最后一页"></a>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                <?php } ?>
            </td>
        </tr>
    </table>
<?php
include("bottom.php");
?>