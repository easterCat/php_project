<?php
/*
*TestGuest Version 1.0
*Author:easterCat
*Web:(www.jiangpeng.pub)
*Date:2016-12-4
*/  
?>
<?php
	
	session_start();
	//定义一个常量，用来授权调用分离页面
	define("IN_TG",true);
	//定义一个常量，用来指定本页的内容
	define("SCRIPT","global");
	//定义个常量，切换页面样式
	define("STYLE","reigster");
	//引用公共文件
	require dirname(__FILE__).'/compoent/common_inc.php';//调用地址使用硬路径
	
	//判断是否提交了数据
	if(_get('action') == 'register'){
		//      为了防止恶意注册和跨站攻击
		//		$fyzm=$_POST['fyzm'];
		//
		//		if(!($fyzm==$_SESSION["code"])){
		//			_alert_back();
		//		}

		//引入注册页面的公共函数库,include一般在需要时引
		include dirname(__FILE__).'/compoent/register_func.php';  
		//创建一个数组用来存放数据
		$_clean = array();
		

		//检查账号是否正确
		$user_bool=check_username($_POST['fuser']);
		
		//检查密码是否正确
		$pwd_bool=check_password($_POST['fpwd']);
		//检查两次输入的密码是否一致
		$con_pwd_bool=confirm_password($_POST['con_fpwd'],$_POST['fpwd']);
		if($con_pwd_bool == 1){
			echo "两次输入的密码一致";
			echo '<br>';
		}
		
		//检查安全密码是否正确
		$sa_pwd_bool=check_sa_password($_POST['fpwd_tit']);
		//检查两次输入的安全密码是否一致
		$con_sa_pwd_bool=confirm_sa_password($_POST['fpwd_tit'],$_POST['fpwd_res']);
		if($con_sa_pwd_bool == 1){
			echo "两次输入的安全密码一致";
			echo '<br>';
		}
		
		//检查性别是否填写
		$sex_bool=check_sex($_POST['fsex']);
		
		//检查邮箱是否正确
		$email_bool=check_email($_POST['femail']);
		
		//检查qq号是否正确
		$qq_bool=check_qq($_POST['fqq']);
	
		//检查网址是否正确
		$web_bool=check_web($_POST['fwebads']);

		if($user_bool == 1&&$pwd_bool == 1&&$sa_pwd_bool == 1&&$sex_bool == 1&&$email_bool == 1&&$qq_bool == 1&&$web_bool == 1){
			$fuser=$_POST['fuser'];
			$fid = md5($fuser);
			$fpwd=$_POST['fpwd'];
			$fpwd_tit=$_POST['fpwd_tit'];
			$fsex=$_POST['fsex'];
			$fface=$_POST['fface'];
			$femail=$_POST['femail'];
			$fqq=$_POST['fqq'];
			$fwebads=$_POST['fwebads'];
			$fyzm=$_POST['fyzm'];
			$fremark=$_POST['fremark'];
			//插入顺序id,账号、密码、安全密码、性别、头像、邮箱、qq、网址、备注
			Array_push($_clean,$fid,$fuser,$fpwd,$fpwd_tit,$fsex,$fface,$femail,$fqq,$fwebads,$fremark);
		    print_r($_clean);
		    insert_database($_clean);
		}
	}
	//$_GET错误提示的解决方法
	function _get($str){
	    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
	    return $val;
	}
?>
<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>系统网站-注册</title>
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link rel="stylesheet" href="style/css/login.css">
		<link rel="stylesheet" href="style/css/face.css">
		<style media="screen">
			body {
				overflow: hidden;
				height: 100%;
				margin: 0;
				padding: 0;
			}
			
			img {
				width: 100%;
				height: 100%;
			}
		</style>
		<?php require ROOT_PATH.'compoent/title_inc.php'?>
	</head>

<body>
    <!--巨大的介绍区域开始-->
    <div class="face">
        <h5 class="face-title">选择头像</h5>
        <?php for($i=1;$i<100;$i++){?>
        <img src="face/newish_<?php echo $i?>_sm.png" alt="face/newish_<?php echo $i?>_sm.png" title="face_<?php echo $i?>" class="face-img" />
        <?php }?>
    </div>
	<div class="banner-rain">
		<div class="rain-con">
			<img id="background" alt="background" src="" />
		</div>

		<div class="container banner-title">
			<h2 class="jumbotron-text">欢迎注册页面！</h2>
			<p class="jumbotron-text">请在下面的输入框中填写您的信息完成注册</p>
			<p>
				<a href="login.html" class="btn btn-primary btn-lg" role="button">进入到登录页面</a>
			</p>
		</div>
	</div>
	<!--巨大的介绍区域结束-->
    <!--登录注册区域开始-->
    <div class="container" id="loginCon">
        <div class="row clearfix">
            <div class="col-md-3 column"></div>
            <div class="col-md-6 column register-con">
                <!--表单提交数据-->
                <form class="form-horizontal" name="register" role="form" method="post" action="register.php?action=register">
                    <!--<input type="hidden" name="action" id="" value="register" />-->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                        <div class="col-sm-10">
                            <input type="text" name="fuser" class="form-control" placeholder="*必填，至少两位" id="inputEmail3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            <input type="password" name="fpwd" class="form-control" placeholder="*必填，首字母大写" id="inputPassword3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
                        <div class="col-sm-10">
                            <input type="password" name="con_fpwd" class="form-control" placeholder="*请再次输入密码" id="inputPassword3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">安全密码</label>
                        <div class="col-sm-10">
                            <input type="password" name="fpwd_tit" class="form-control" placeholder="*必填，用于找回密码(6位数字)" id="inputPassword3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
                        <div class="col-sm-10">
                            <input type="password" name="fpwd_res" class="form-control" placeholder="*必填，请再次输入安全密码" id="inputPassword3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-10 radio">
                            <label>
                                <input type="radio" name="fsex" id="optionsRadios1" value="男" checked>男</label>
                            <label>
                                <input type="radio" name="fsex" id="optionsRadios1" value="男" checked>女</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">头像</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="fface" class="form-control" value="face/newish_67_sm.png" id="inputFace" />
                            <img id="openFace" src="face/newish_67_sm.png" style="width:38px;height:48px;cursor:pointer;" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                        <div class="col-sm-10">
                            <input type="email" name="femail" class="form-control" placeholder="*请填写正确的邮箱" id="inputEmail3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">QQ</label>
                        <div class="col-sm-10">
                            <input type="text" name="fqq" class="form-control" placeholder="*必填，用于找回密码" id="inputEmail3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">主页网址</label>
                        <div class="col-sm-10">
                            <input type="text" name="fwebads" class="form-control" placeholder="http://www." id="inputEmail3" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">验证码</label>
                        <div class="col-sm-5">
                            <input type="text" name="fyzm" class="form-control" id="inputEmail3" />
                        </div>
                        <div class="col-sm-5">
                        <img src="code.php" id="captcha" style="width:75px;height:30px;margin-top:2px;cursor:pointer;" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">备注</label>
                        <div class="col-sm-10">
                            <div class="textarea">
                                <textarea name="fremark" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default center-block submit-btn">注册</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 column"></div>
        </div>
    </div>
    <!--登录注册区域结束-->
    <!--底部功能区域开始-->
    <div class="row clearfix foot-con">
        <div class="container">
            <div class="col-md-4 column">
                <p>本网站仅支持IE9及以上版本，火狐，谷歌等支持HTML5的浏览器 京ICP备16008739号</p>
            </div>
            <div class="col-md-4 column">
                <button type="button" class="btn btn-lg btn-block" id="returnTop">返回顶部</button>
            </div>
            <div class="col-md-4 column button_right text-center" style="margin-top:5px;">
                <button type="button" class="btn btn-default "><i class="glyphicon glyphicon-home"></i>
                </button>
                <button type="button" class="btn btn-default "><i class="glyphicon glyphicon-flag"></i>
                </button>
                <button type="button" class="btn btn-default "><i class="glyphicon glyphicon-bookmark"></i>
                </button>
                <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-tint"></i>
                </button>
            </div>
        </div>
    </div>
    <!--底部功能区域结束-->
    <!--头部导航栏开始的位置-->
    <?php require ROOT_PATH. 'compoent/header_inc.php'; ?>
    <!--头部导航栏域结束-->
</body>
		<script src="js/common/jquery.min.js"></script>
		<script src="js/common/rainyday.min.js"></script>
		<script type="text/javascript" src="seajs/sea.js"></script>
		<script>
			seajs.config({
				base:"/seajs/",
				alias:{
					"jquery":"../js/common/jquery.min.js",
					"rainyday":"../js/common/rainyday.min.js"
				}
			});
			seajs.use("../php-xiang/js/ec-face",function(modA){
				modA.init();
			});
			window.onload = run();
			function run() {
				var image = document.getElementById('background');
				image.onload = function() {
					var engine = new RainyDay({
						image: this
					});
					engine.rain([
						[3, 2, 2]
					], 100);
				};
				image.crossOrigin = 'anonymous';
				image.src = 'img/img06.jpg';
			}
		</script>

</html>