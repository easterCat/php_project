<?php
include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="209" height="438" valign="top" bgcolor="#F4F4F4">
            <div align="center">
                <?php include("left.php"); ?>
            </div>
        </td>
        <td width="557" align="center" valign="top" bgcolor="#FFFFFF">
            <script language="javascript">
                function chkinput(form) {
                    if (form.name.value == "") {
                        alert("名称不对!");
                        form.name.select();
                        return (false);
                    }
                    if (form.dz.value == "") {
                        alert("地址不对ַ!");
                        form.dz.select();
                        return (false);
                    }
                    if (form.yb.value == "") {
                        alert("邮编不对!");
                        form.yb.select();
                        return (false);
                    }
                    if (form.tel.value == "") {
                        alert("电话不对!");
                        form.tel.select();
                        return (false);
                    }
                    if (form.email.value == "") {
                        alert("邮箱不对ַ!");
                        form.email.select();
                        return (false);

                    }
                    if (form.email.value.indexOf("@") < 0) {
                        alert("邮箱格式不对!");
                        form.email.select();
                        return (false);
                    }
                    return (true);
                }
            </script>
            <table width="557" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="6"></td>
                </tr>
            </table>
            <table width="530" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF"
                   bgcolor="#FCC223">
                <tr>
                    <td height="25" bgcolor="#FEDD9A">
                        <div align="center" style="color: #720206">订单</div>
                    </td>
                </tr>
                <tr>
                    <td height="295">
                        <table width="530" height="293" border="0" align="center" cellpadding="0" cellspacing="1">

                            <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
                                <tr>
                                    <td width="100" height="25" bgcolor="#FFFFFF">
                                        <div align="center">下单人</div>
                                    </td>
                                    <td width="183" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="name2" size="25" class="inputcss"
                                                   style="background-color:#e8f4ff "
                                                   onMouseOver="this.style.backgroundColor='#ffffff'"
                                                   onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                        </div>
                                    </td>
                                    <td width="86" bgcolor="#FFFFFF">
                                        <div align="center">性别</div>
                                    </td>
                                    <td width="176" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <select name="sex">
                                                <option selected value="男">男</option>
                                                <option value="女">女</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25" bgcolor="#FFFFFF">
                                        <div align="center">邮编</div>
                                    </td>
                                    <td height="25" colspan="3" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="yb" size="25" class="inputcss"
                                                   style="background-color:#e8f4ff "
                                                   onMouseOver="this.style.backgroundColor='#ffffff'"
                                                   onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25" bgcolor="#FFFFFF">
                                        <div align="center">电话号码</div>
                                    </td>
                                    <td height="25" colspan="3" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="tel" size="25" class="inputcss"
                                                   style="background-color:#e8f4ff "
                                                   onMouseOver="this.style.backgroundColor='#ffffff'"
                                                   onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25" bgcolor="#FFFFFF">
                                        <div align="center">邮箱</div>
                                    </td>
                                    <td height="25" colspan="3" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input type="text" name="email" size="25" class="inputcss"
                                                   style="background-color:#e8f4ff "
                                                   onMouseOver="this.style.backgroundColor='#ffffff'"
                                                   onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25" bgcolor="#FFFFFF">
                                        <div align="center">地址</div>
                                    </td>
                                    <td height="25" colspan="3" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <input name="dz" type="text" class="inputcss" id="dz"
                                                   style="background-color:#e8f4ff "
                                                   onMouseOver="this.style.backgroundColor='#ffffff'"
                                                   onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50">
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td height="86" bgcolor="#FFFFFF">
                                        <div align="center">留言</div>
                                    </td>
                                    <td height="86" colspan="3" bgcolor="#FFFFFF">
                                        <div align="left">
                                            <textarea name="ly" cols="70" rows="5" class="inputcss"
                                                      style="background-color:#e8f4ff "
                                                      onMouseOver="this.style.backgroundColor='#ffffff'"
                                                      onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="22" colspan="4" bgcolor="#FFFFFF">
                                        <div align="center">
                                            <input name="submit2" type="submit" class="buttoncss" value="提交">
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<?php
include("bottom.php");
if ($_GET['dingdanhao'] != "") {
    $dd = $_GET['dingdanhao'];
    session_start();
    $array = explode("@", $_SESSION['producelist']);
    $sum = count($array) * 20 + 260;
    echo " <script language='javascript'>";
    echo " window.open('showdd.php?dd='+'" . $dd . "','newframe','top=150,left=200,width=600,height=" . $sum . ",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
    echo "</script>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
