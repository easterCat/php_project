<?php
include("top.php");
?>
    <table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="209" height="438" valign="top" bgcolor="#FFFFFF"><?php include("left.php"); ?></td>
            <td width="581" align="center" valign="top" bgcolor="#FFFFFF">
                <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="46" background="images/hot1.gif">&nbsp;</td>
                    </tr>
                </table>
                <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td background="images/line1.gif"></td>
                    </tr>
                </table>
                <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
                    <?php
                    $sql2 = mysqli_query($conn, "select * from tb_shangpin order by addtime");
					//总共多少条
                    $page_count = mysqli_num_rows($sql2);
					//总共多少页
                    $page_num = ceil($page_count / 5);
                    //每页显示多少
                    $page_size = 5;
                    //获取当前页面的页
  					$page_now = $_GET['page'];
					
					$select_from = $page_now * 5 - $page_size;
					$select_to = $select_from + $page_size;
                    $sql = mysqli_query($conn, "select * from tb_shangpin order by cishu desc limit $select_from,$select_to");
                    $info = mysqli_fetch_array($sql);
                    if ($info == false) {
                        echo "请先进行登录!";
                    } else {
                        do {
                            ?>
                            <tr>
                                <td width="89" rowspan="6">
                                    <div align="center">
                                        <?php
                                        if ($info["tupian"] == "") {
                                            echo "暂无预览图!";
                                        } else {
                                            ?>
                                            <a href="lookinfo.php?id=<?php echo $info["id"]; ?>"><img border="0"
                                                                                                      width="80"
                                                                                                      height="80"
                                                                                                      src="<?php echo $info["tupian"]; ?>"></a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </td>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">名称</div>
                                </td>
                                <td colspan="2">
                                    <div align="left"><a
                                                href="lookinfo.php?id=<?php echo $info["id"]; ?>"><?php echo $info["mingcheng"]; ?></a>
                                    </div>
                                </td>
                                <td>
                                	<div align="center" style="color: #000000">ID号</div>
                                </td>
                                <td colspan="2">
                                	 <div align="left"><?php echo $info["id"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">品牌</div>
                                </td>
                                <td width="101" height="20">
                                    <div align="left"><?php echo $info["pingpai"]; ?></div>
                                </td>
                                <td width="62">
                                    <div align="center" style="color: #000000">型号</div>
                                </td>
                                <td colspan="3">
                                    <div align="left"><?php echo $info["xinghao"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="93" height="20">
                                    <div align="center" style="color: #000000">简介</div>
                                </td>
                                <td height="20" colspan="5">
                                    <div align="left"><?php echo $info["jianjie"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20">
                                    <div align="center" style="color: #000000">添加时间</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info["addtime"]; ?></div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">数量</div>
                                </td>
                                <td width="69" height="20">
                                    <div align="left"><?php echo $info["shuliang"]; ?></div>
                                </td>
                                <td width="63">
                                    <div align="center" style="color: #000000">登记</div>
                                </td>
                                <td width="73">
                                    <div align="left"><?php echo $info["tuijian"]; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20">
                                    <div align="center" style="color: #000000">市场价</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info["shichangjia"]; ?>元</div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">会员价</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo $info["huiyuanjia"]; ?>元</div>
                                </td>
                                <td height="20">
                                    <div align="center" style="color: #000000">折扣</div>
                                </td>
                                <td height="20">
                                    <div align="left"><?php echo (@ceil(($info["huiyuanjia"] / $info["shichangjia"]) * 100)) . "%"; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" colspan="6" width="461">
                                    <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a
                                                href="addgouwuche.php?id=<?php echo $info["id"]; ?>"><img
                                                    src="images/goumai_btn.gif" width="60" height="18" border="0"
                                                    style=" cursor:hand"></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="10" colspan="7" background="images/line1.gif"></td>
                            </tr>
                            <?php
                        } while ($info = mysqli_fetch_array($sql));
                    }
                    ?>
                    <tr>
                	<?php
                    include("components/Page.php");
                    $newPage = new Page($page_count, 5, $page_now, 'showhot.php?page=', 2);
                    echo $newPage->write_html();
                    ?>
                    </tr>
                </table>
                 
            </td>
        </tr>
    </table>
<?php
include("bottom.php");
?>