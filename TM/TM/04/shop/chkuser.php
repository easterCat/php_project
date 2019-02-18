<?php
include("conn/conn.php");
$username = $_POST["username"];
$userpwd = md5($_POST["userpwd"]);
//将生成的验证码和输入的验证码一起接收到，进行比较
$yz = $_POST["yz"];
$num = $_POST["num"];
if (strval($yz) != strval($num)) {
    echo "<script>alert('验证码错误!');history.go(-1);</script>";
    exit;
}

/*
 *
 */

class chkinput
{
//var定义类似于public，已不推荐使用
    public $name;
    public $pwd;

//构造函数定义的三方法：首先定义__construct()函数，其次从父类继承，如果都没有就会将与类同名的函数当做构造函数
    function __construct($x, $y)
    {
        $this->name = $x;
        $this->pwd = $y;
    }

    public function checkinput()
    {
        include("conn/conn.php");
        $sql = mysqli_query($conn, "select * from tb_user where name='" . $this->name . "'");
        $info = mysqli_fetch_array($sql);
        if ($info == false) {
            echo "<script language='javascript'>alert('登录信息错误');history.back();</script>";
            exit;
        } else {
            if ($info["dongjie"] == 1) {
                echo "<script language='javascript'>alert('登录成功');history.back();</script>";
                exit;
            }
            if ($info["pwd"] == $this->pwd) {
                session_start();
                $_SESSION["username"] = $info["name"];
                $_SESSION["producelist"] = "";
                $_SESSION["quatity"] = "";
                header("location:index.php");
                exit;
            } else {
                echo "<script language='javascript'>alert('用户错误');history.back();</script>";
                exit;
            }
        }
    }

}

$obj = new chkinput(trim($username), trim($userpwd));
$obj->checkinput();
?>