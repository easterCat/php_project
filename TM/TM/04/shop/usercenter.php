<?php
include("top.php");
?>
<?php
if ($_SESSION["username"] == "") {
    echo "<script>alert('请先进行登录!');history.back();</script>";
    exit;
}
?>

<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php"); ?></td>
        <td width="537" align="center" valign="top" bgcolor="#FFFFFF">
            <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td></td>
                </tr>
            </table>
            <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <ul class="nav navbar-nav">
                            <li> 用户名:<span
                                        style="color: #0000FF;line-height:50px;"></span><?php echo $_SESSION["username"]; ?>
                            </li>
                            <li class="active"><a href="usercenter.php">用户中心</a></li>
                            <li><a href="userleaveword.php">用户留言</a></li>
                            <li><a href="changeuserpwd.php">更改密码</a></li>
                            <li><a href="logout.php">退出用户</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td></td>
                </tr>
            </table>
            <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="20" bgcolor="#FFEDBF">
                        <div align="center" style="color: #660206">当前用户：<?php echo $_SESSION["username"]; ?></div>
                    </td>
                </tr>
                <tr>
                    <td height="160" bgcolor="#FFEDBF">
                        <table width="500" height="160" border="0" align="center" cellpadding="0" cellspacing="1">
                            <script language="javascript">
                                function chkinput1(form) {
                                    if (form.email.value == "") {
                                        alert("邮箱为空!");
                                        form.email.select();
                                        return (false);
                                    }
                                    if (form.email.value.indexOf('@') < 0) {
                                        alert("邮箱错误!");
                                        form.email.select();
                                        return (false);
                                    }
                                    if (form.tel.value == "") {
                                        alert("电话号码为空!");
                                        form.tel.select();
                                        return (false);
                                    }
                                    return (true);
                                }
                            </script>
                            <form name="form1" method="post" action="changeuser.php" onSubmit="return chkinput1(this)">
                                <?php
                                $sql = mysqli_query($conn, "select * from tb_user where name='" . $_SESSION["username"] . "'");
                                $info = mysqli_fetch_array($sql);
                                ?>
                                <tr>
                                    <td width="100" height="20" bgcolor="#FFFFFF">
                                        <div align="center">用户名</div>
                                    </td>
                                    <td width="397" bgcolor="#FFFFFF">
                                        <div align="left"><?php echo $_SESSION["username"]; ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="center">昵称</div>
                                    </td>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="truename" size="25" class="inputcssnull"
                                                   value="<?php echo $info["nc"]; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="center">E-mail</div>
                                    </td>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="email" size="25" class="inputcssnull"
                                                   value="<?php echo $info["email"]; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="center">QQ号</div>
                                    </td>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="qq" size="25" class="inputcssnull"
                                                   value="<?php echo $info["qq"]; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="center">电话号码</div>
                                    </td>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="tel" size="25" class="inputcssnull"
                                                   value="<?php echo $info["tel"]; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="center">注册日期</div>
                                    </td>
                                    <td height="20" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="dizhi" size="25" class="inputcssnull"
                                                   value="<?php echo $info["regtime"]; ?>">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" colspan="2" bgcolor="#FFFFFF">
                                        <div align="center">
                                            <input name="submit2" type="submit" class="buttoncss" value="提交">
                                            &nbsp;&nbsp;
                                            <input name="reset" type="reset" class="buttoncss" value="重置">
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <div align="center" style="color: #0000FF">(请谨慎修改)</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php
include("bottom.php");
?>
</body>
</html>
