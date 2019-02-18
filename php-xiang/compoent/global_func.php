<?php
	/*
	*TestGuest Version 1.0
	*Author:easterCat
	*Web:(www.jiangpeng.pub)
	*Date:2016-12-4
	*/
	/*
	 * _runtime()是用来获取执行耗时
	 * @access public
	 * @return float
	 */
	function _runtime()
	{
	    $_mtime = explode(' ', microtime());
	    return $_mtime[1] + $_mtime[0];
	}
	function _alert_back()
	{
	    echo "<script type='text/javascript'>alert('非法操作');history.back();</script>";
	}
	/*
	*_createCaptcha()是用来生成验证码
	* @access public
	* @return float
	*/
	function _code()
	{
	    function random($len)
	    {
	        $srcstr = "1a2s3d4f5g6hj8k9qwertyupzxcvbnm";
	        mt_srand();
	        $strs = "";
	        for ($i = 0; $i < $len; $i++) {
	            $strs .= $srcstr[mt_rand(0, 30)];
	        }
	        return $strs;
	    }
	    //随机生成的字符串
	    $str = random(4);
	    //验证码图片的宽度
	    $width = 60;
	    //验证码图片的高度
	    $height = 30;
	    //声明需要创建的图层的图片格式
	    @header("Content-Type:image/png");
	    //创建一个图层
	    $captcha_img = imagecreatetruecolor($width, $height);
	    //创建灰色颜色
	    $white_color = imagecolorallocate($captcha_img, 240, 240, 240);
	    //将创建的灰色颜色填充
	    imagefill($captcha_img, 0, 0, $white_color);
	    //创建黑色颜色
	    $black_color = imagecolorallocate($captcha_img, 180, 180, 180);
	    //创建一个边框,填充黑色
	    imagerectangle($captcha_img, 0, 0, $width - 1, $height - 1, $black_color);
	    //随机创建6个线条
	    for ($i = 0; $i < 6; $i++) {
	        $rnd_color = imagecolorallocate($captcha_img, mt_rand(0, 155), mt_rand(5, 205), mt_rand(1, 200));
	        imageline($captcha_img, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $rnd_color);
	    }
	    //随机雪花
	    for ($i = 0; $i < 5; $i++) {
	        imagestring($captcha_img, 1, mt_rand(1, $width), mt_rand(1, $height), '*', $rnd_color);
	    }
	    //字体色
	    $font = imagecolorallocate($captcha_img, 41, 63, 38);
	    //输出验证码
	    for ($i = 0; $i < 4; $i++) {
	        imagestring($captcha_img, 5, $i * $width / 4 + mt_rand(1, 5), mt_rand(2, $height / 2), $str[$i], $font);
	    }
	    //输出图片
	    imagepng($captcha_img);
	    imagedestroy($captcha_img);
	    $str = md5($str);
	    //选择 cookie
	    //SetCookie("verification", $str, time() + 7200, "/");
	    //选择 Session
	    $_SESSION["code"] = $str;
	}
?>