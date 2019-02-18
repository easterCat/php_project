<?php
//session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF8">
    <title>公共top</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <script src="js/jquery-2.0.3.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<?php
include("top.php");
?>
<script language="javascript">
    function chknc(nc) {
        window.open("chkusernc.php?nc=" + nc, "newframe", "width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
    }
</script>
<script language="javascript">
    function chkinput(form) {
        if (form.usernc.value == "") {
            alert("请填写用户名");
            form.usernc.select();
            return (false);
        }
        if (form.p1.value == "") {
            alert("请填写用户名");
            form.p1.select();
            return (false);
        }
        if (form.p2.value == "") {
            alert("请填写用户名");
            form.p2.select();
            return (false);
        }
        if (form.p1.value.length < 6) {
            alert("请填写用户名");
            form.p1.select();
            return (false);
        }
        if (form.p1.value != form.p2.value) {
            alert("请填写用户名");
            form.p1.select();
            return (false);
        }
        if (form.email.value == "") {
            alert("请填写邮箱");
            form.email.select();
            return (false);
        }
        if (form.email.value.indexOf('@') < 0) {
            alert("请填写邮箱!");
            form.email.select();
            return (false);
        }
        if (form.tel.value == "") {
            alert("请填写手机");
            form.tel.select();
            return (false);
        }
        if (form.nc.value == "") {
            alert("请填写昵称");
            form.truename.select();
            return (false);
        }
        return (true);
    }
</script>
<table width="766" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="229" height="350" align="center" valign="top"
            bgcolor="#F0F0F0"><?php include("left.php"); ?></td>
        <td width="561" align="center" valign="top" bgcolor="#FFFFFF">
            <table width="557" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="500">
                        <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="557" height="46" background="images/user.gif">
                                    <div align="center" style="color: #FFFFFF"></div>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#fff">
                                    <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <form class="form-horizontal" role="form" name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this);">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="usernc" class="form-control inputcss"
                                                           id="inputEmail3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">密码</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="p1" class="form-control inputcss"
                                                           id="inputPassword3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">再次输入密码</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="p2" class="form-control inputcss"
                                                           id="inputPassword3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="email" class="form-control inputcss" id="inputPassword3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">QQ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="tel" class="form-control inputcss"
                                                           id="inputPassword3"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">手机</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="qq" class="form-control inputcss"
                                                           id="inputPassword3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3"
                                                       class="col-sm-2 control-label">昵称</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nc" class="form-control inputcss"
                                                           id="inputPassword3"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button name="submit2" type="submit"
                                                            class="btn btn-default buttoncss">
                                                        Sign in
                                                    </button>
                                                    <button name="reset" type="submit"
                                                            class="btn btn-default buttoncss">
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </td>
                            </tr>
                        </table>
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
