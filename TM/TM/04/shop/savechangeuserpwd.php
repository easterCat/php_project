<?php
session_start();
$p1 = md5(trim($_POST['p1']));
$p2 = trim($_POST['p2']);

$name = $_SESSION['username'];

class chkchange
{
    public $name;
    public $p1;
    public $p2;

    public function chkchange($x, $y, $z)
    {
        $this->name = $x;
        $this->p1 = $y;
        $this->p2 = $z;

    }

    public function changepwd()
    {
        include("conn/conn.php");
        $sql = mysqli_query($conn,"select * from tb_user where name='" . $this->name . "'");
        $info = mysqli_fetch_array($sql);
        if ($info['pwd'] != $this->p1) {
            echo "<script>alert('输入的密码不正确!');history.back();</script>";
            exit;
        } else {
            mysqli_query($conn,"update tb_user set pwd='" . md5($this->p2) . "' ,pwd1='$this->p2' where name='$this->name'");
            echo "<script>alert('修改密码成功!');history.back();</script>";
            exit;
        }
    }
}

$obj = new chkchange($name, $p1, $p2);
$obj->changepwd()
?>