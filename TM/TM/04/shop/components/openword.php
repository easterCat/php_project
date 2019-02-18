<?php
header("content-type:text/html;charset=utf-8");

// 建立一个指向新COM组件的索引
$word = new COM("word.application") or die("Can't start Word!");
// 显示目前正在使用的Word的版本号 
//echo “Loading Word, v. {$word->Version}<br>”; 
// 把它的可见性设置为0（假），如果要使它在最前端打开，使用1（真） 
// to open the application in the forefront, use 1 (true) 
$word->Visible = 1;

//打开一个文档
$word->Documents->OPen("C:/wamp/www/TM/TM/04/shop/123.doc");
//$word->Documents[1]->SaveAs("C:/wamp/www/TM/TM/04/shop/123.html", 8);

//获取htm文件内容并输出到页面 (文本的样式不会丢失)
//$content = file_get_contents(realpath("women.html"));
//读取文档内容 

//获取word文档内容并输出到页面（文本的原样式已丢失）
$test = $word->ActiveDocument->content->Text;


echo $test;
echo "<br>";
//将文档中需要换的变量更换一下 
$test = str_replace("123", "我是一个好孩子", $test);
echo $test;
$word->Documents->Add();
// 在新文档中添加文字 
$word->Selection->TypeText("$test");
//把文档保存在目录中
$word->Documents[1]->SaveAs("C:/wamp/www/TM/TM/shop/12345.doc");
// 关闭与COM组件之间的连接 
$word->Quit();
?>