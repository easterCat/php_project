<?php
session_start();
include "../conn/conn.php";
include "../inc/chec.php";
include "../inc/func.php";
$a_sql = "select * from tb_iss where p_id = ".$_SESSION[id];
$a_rst = mysql_query($a_sql,$conn);
?>
<link href="../css/style.css" rel="stylesheet" />
<script src="../js/client_js.js"></script>
<table width="765" border="1" cellpadding="0" cellspacing="0" class="big_td">
	<tr>
		<td height="33" background="../images/list.jpg" id="list">发布审核</td>
	</tr>
</table>
<table width="765" border="0" cellpadding="0" cellspacing="0" bgcolor="#DEEBEF" class="big_td">
	<tr>
		<td height="30" colspan="5" align="center" valign="middle"><a href="add_issuance.php">发布申请</a></td>
	</tr>
	<tr>
		<td width="100" height="25" align="center" valign="middle">日期</td>
		<td width="100" height="25" align="center" valign="middle">标题</td>
		<td width="100" height="25" align="center" valign="middle">内容</td>
		<td width="100" height="25" align="center" valign="middle">是否批示</td>
		<td width="100" height="25" align="center" valign="middle">操作</td>
	</tr>
<?php
	while($a_rows = mysql_fetch_array($a_rst)){
?>
	<tr>
		<td height="30"><?php echo $a_rows[i_time]; ?></td>
		<td height="30"><?php echo $a_rows[i_title]; ?></td>
		<td height="30"><?php echo $a_rows[i_content]; ?></td>
		<td height="30">
<?php
		if($a_rows[i_state] == 3)
			echo "未审核";
		else
			echo (($a_rows[i_state] == 0)?"通过":"未通过"); 
?>
		</td>
		<td height="30"><a href="modify_issuance.php?id=<?php echo $a_rows[id]; ?>">修改</a>||<a href="del_issuance_chk.php?id=<?php echo $a_rows[id]; ?>" onclick="return del_mess();">删除</a></td>
	</tr>
<?php
}
?>
</table>