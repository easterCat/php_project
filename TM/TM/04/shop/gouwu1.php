<?php
include("top.php");
?>
<?php

if ($_SESSION['username'] == "") {
    echo "<script>alert('请先进行登录!');history.back();</script>";
    exit;
}
?>
    <table class="table">
        <tr>
            <td width="229" height="438" valign="top" bgcolor="#F4F4F4"><?php include("left.php"); ?></td>
            <td width="561" align="center" valign="top" bgcolor="#FFFFFF">
                <table class="table">
                    <form name="form1" method="post" action="gouwu1.php">
                        <tr>
                            <td height="46" background="images/cart.gif"></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFFFFF">
                                <table class="table table-striped" border="0" align="center" cellpadding="0"
                                       cellspacing="1">
                                    <?php
                                    $_SESSION["total"] = "";
                                    //当结账时
                                    if ($_GET['qk'] == "yes") {
                                        $_SESSION['producelist'] = "";
                                        $_SESSION['quatity'] = "";
                                    }
                                    $arraygwc = explode("@", $_SESSION['producelist']);
                                    $s = 0;
                                    for ($i = 0; $i < count($arraygwc); $i++) {
                                        $s += intval($arraygwc[$i]);
                                    }
                                    if ($s == 0) {
                                        echo "<tr>";
                                        echo " <td>结账成功</td>";
                                        echo "</tr>";
                                    } else {
                                        ?>
                                        <tr>
                                            <td>名称</td>
                                            <td>数量</td>
                                            <td>市场价</td>
                                            <td>会员价</td>
                                            <td>折扣</td>
                                            <td>总价</td>
                                            <td>删除</td>
                                        </tr>
                                        <?php
                                        $total = 0;
                                        $array = explode("@", $_SESSION['producelist']);
                                        $arrayquatity = explode("@", $_SESSION['quatity']);
                                        while (list($name, $value) = each($_POST)) {
                                            for ($i = 0; $i < count($array) - 1; $i++) {
                                                if (($array[$i]) == $name) {
                                                    $arrayquatity[$i] = $value;
                                                }
                                            }
                                        }
                                        $_SESSION['quatity'] = implode("@", $arrayquatity);

                                        for ($i = 0; $i < count($array) - 1; $i++) {
                                            $id = $array[$i];
                                            $num = $arrayquatity[$i];

                                            if ($id != "") {
                                                $sql = mysqli_query($conn, "select * from tb_shangpin where id=$id");
                                                $info = mysqli_fetch_array($sql);
                                                $total1 = $num * $info['huiyuanjia'];
                                                $total += $total1;
                                                $_SESSION["total"] = $total;
                                                ?>
                                                <tr>
                                                    <td><?php echo $info['mingcheng']; ?></td>
                                                    <td><input type="text" name="<?php echo $info['id']; ?>" size="2"
                                                               class="inputcss" value=<?php echo $num; ?>></td>
                                                    <td><?php echo $info['shichangjia']; ?></td>
                                                    <td><?php echo $info['huiyuanjia']; ?></td>
                                                    <td><?php echo @(ceil(($info['huiyuanjia'] / $info['shichangjia']) * 100)) . "%"; ?></td>
                                                    <td><?php echo $info['huiyuanjia'] * $num . "Ԫ"; ?></td>
                                                    <td><a href="removegwc.php?id=<?php echo $info['id'] ?>">清除</a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td height="25" colspan="8" bgcolor="#FFFFFF">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-3">
                                                        <input name="submit2" type="submit" value="提交">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="gouwu2.php">收银台</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="gouwu1.php?qk=yes">购物车结账</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <span>总额<?php echo $total; ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>
<?php
include("bottom.php");
?>