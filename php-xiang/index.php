<?php
/*
 *TestGuest Version 1.0
 *Author:easterCat
 *Web:(www.jiangpeng.pub)
 *Date:2016-12-4
 */
?>

<?php
//定义一个常量，用来授权调用分离页面
define("IN_TG", true);
//定义一个常量，用来指定本页的内容,命名可以叫index，login，register引入不同的css
define("SCRIPT", "global");
//定义个常量，切换页面样式
define("STYLE","index");
//引用公共文件
require dirname(__FILE__) . '/compoent/common_inc.php';
//调用地址使用硬路径
?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<?php require ROOT_PATH.'compoent/title_inc.php'?>
		<style>
	    .top-banner {
		    background-color: rgba(255, 255, 255, 0.55);
		}
		
		.top-banner a {
		    color: #019135;
		}
		
		h1 {
		    margin-top: 100px;
		    font-family: 'Microsoft Yahei';
		    font-size: 36px;
		    color: #019157;
		}
		</style>
	</head>

	<body>
		<!--<div class="header-clear" id="1F"></div>-->
		<div class="row clearfix header_banner">
			<div class="col-md-12 column">
				<div class="wrapper">
					<ul id="sb-slider" class="sb-slider" style="max-width:100%;">
						<li>
							<a href="#" target="_blank">
								<img src="img/img02.jpg" alt="image1" />
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row clearfix project_con">
			<div class="col-md-12 column">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-12 column">
							<div class="row">
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg glyphicon glyphicon-globe my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 大数据处理分析系统 </h3>
											<p>
												多样、准确的大数据处理分析系统，运用Hadoop技术，超越传统数据库技术，为您提供更精确得数据支持，助您轻松驾驭海量数据。
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg glyphicon glyphicon-compressed my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 电商数据抓取 </h3>
											<p>
												可采集主流电商数据， 包括电商产品名称、价格、销售量、产品型号、地区、 商家信息等信息，可用于比价、政采、产品销售量分析等业务。
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg glyphicon glyphicon-leaf my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 智能办公应用系统 </h3>
											<p>
												丰富、高效的智能办公应用系统，为团队打造更有效的沟通平台，多终端协同，为您的团队提供更强的凝聚力，助您智慧办公
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg glyphicon glyphicon-eye-open my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 商业网站开发 </h3>
											<p>
												高端、安全的商业网站开发服务，工作室成员均曾供职于大型IT公司，有多年网站开发经验，为您提供一站式全程服务，助您轻松完成商业推广。
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg  	glyphicon glyphicon-certificate my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 辅助决策支持系统 </h3>
											<p>
												易用、及时的辅助决策支持系统，为您实时监测企业经营的状态，并提供科学、精确的决策依据，助您优化企业管理流程，降低成本。
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<p class="text-center">
											<a class="btn btn-primary btn-lg glyphicon glyphicon-filter my_btn " href="javascript:void(0);"></a>
										</p>
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 信息查询系统 </h3>
											<p>
												多为单位的管理与业务工作服务，起到全局协调一致的作用,对某一问题提供一个或多个方案供使用者参考。
											</p>
											<p>
												<a class="btn btn-primary" href="#">
													了解
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row clearfix project_con">
			<div class="col-md-12 column">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-12 column">
							<div class="row">
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-2-s.jpg" />
										<div class="caption">
											<h3> 朝阳区学生体质健康报表 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-1-s.jpg" />
										<div class="caption">
											<h3> 北京市朝阳区教育数据管理平台 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-3-s.jpg" />
										<div class="caption">
											<h3> 朝阳区发改委价格鉴定管理系统 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-4-s.jpg" />
										<div class="caption">
											<h3> 朝阳区税源分析系统 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-5-s.jpg" />
										<div class="caption">
											<h3> 北京商务服务业运行监测与公共服务平台 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="thumbnail">
										<img alt="" src="img/project-6-s.jpg" />
										<div class="caption">
											<h3> 国家电网公司战略规划模型综合集成系统 </h3>
											<p></p>
											<p>
												<a class="btn btn-primary" href="#">
													详情
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row clearfix dothing_con">
			<div class="col-md-12 column">
				<p style="text-align:center;font-size:22px;">
					<em>数据驱动成长，系统辅助决策</em>
				</p>
				<div class="container">
					<div class="col-md-4">
						<div class="thumbnail">
							<p class="text-center">
								<a class="btn btn-primary btn-lg glyphicon glyphicon-home my_btn " href="javascript:void(0);"></a>
							</p>
							<div class="caption">
								<h3> 关于我们 </h3>
								<p>
									团队发展至今已经拥有了十余人的成熟团队，精通系统开发、数据分析、建模预测、团队成员均供职于各大互联网公司，有丰富的项目经验，能够做好每一个项目.
								</p>
								<p>
									<a class="btn btn-primary" href="#">
										更多
									</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<p class="text-center">
								<a class="btn btn-primary btn-lg glyphicon glyphicon-align-justify my_btn " href="javascript:void(0);"></a>
							</p>
							<div class="caption">
								<h3> 项目成果 </h3>
								<p>
									在电力系统开发领域、数据系统开发领域、电商数据分析领域，我们完成了湖南、安徽。广东。北京。上海等多地区相关项目，有丰富的项目经验和多项解决方案.
								</p>
								<p>
									<a class="btn btn-primary" href="#">
										更多
									</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail">
							<p class="text-center">
								<a class="btn btn-primary btn-lg glyphicon glyphicon-th-large my_btn " href="javascript:void(0);"></a>
							</p>
							<div class="caption">
								<h3> 为您提供 </h3>
								<p>
									在电力系统开发领域、数据系统开发领域、电商数据分析领域，我们完成了湖南、安徽。广东。北京。上海等多地区相关项目，有丰富的项目经验和多项解决方案.
								</p>
								<p>
									<a class="btn btn-primary" href="#">
										更多
									</a>
							</div>
						</div>
					</div>
				</div>
				<p style="text-align:center;font-size:22px;">
					<em>关于我们</em>
				</p>
				<div class="container ours_con">
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">周希学</h4> 多次担任项目主要负责人</br>高级软件工程师</br>供职于国内顶尖互联网公司
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">邢圳</h4> 高级数据工程师</br>精通海量数据的存储</br>丰富的数据库操作经验
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">王建龙</h4>高级软件工程师</br>拥有丰富的系统开发经验</br>熟练掌握java开发
							</div>
						</div>
					</div>
				</div>
				<div class="container ours_con">
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">程序</h4> 高级数据分析师</br>经济学硕士学位</br>拥有丰富的数据挖掘经验
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">肥付</h4> 高级软件工程师</br>精通数据的抽取和交互</br>熟练掌握java开发
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media">
							<a class="pull-left btn btn-primary glyphicon glyphicon-align-justify my_btn2" href="#"></a>
							<div class="media-body">
								<h4 class="media-heading">蒋鹏</h4>web前端工程师</br>多年web工作经验</br>熟练掌握web开发
							</div>
						</div>
					</div>
				</div>
				<!-- <p style="text-align:center;font-size:22px;"> <em>项目成果</em>
				</p> -->
				<div class="container">
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
				</div>
				<div class="container">
					<p style="text-align:center;font-size:22px;">
						<em>为您提供</em>
					</p>
				</div>
				<div class="container">
					<div class="col-md-4">
						<ul class="list-group">
							<li class="list-group-item">
								<span class="badge">新</span> 可视化数据监控
							</li>
							<li class="list-group-item">
								<span class="badge">新</span> 专业的技术咨询
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<li class="list-group-item">
							<span class="badge">新</span> 便捷的业务分析
						</li>
						<li class="list-group-item">
							<span class="badge">新</span> 精确的决策支持
						</li>
					</div>
					<div class="col-md-4">
						<li class="list-group-item">
							<span class="badge">新</span> 便捷的业务分析
						</li>
						<li class="list-group-item">
							<span class="badge">新</span> 精确的决策支持
						</li>
					</div>
				</div>
			</div>
		</div>

		<div class="row clearfix send-con">
			<div class="container">
				<div class="col-md-8 column">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-sm-4">
								<input type="email" class="form-control" id="inputEmail3" placeholder="请输入姓名" />
							</div>
							<div class="col-sm-4">
								<input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" />
							</div>
							<div class="col-sm-4">
								<input type="password" class="form-control" id="inputPassword3" placeholder="请输入邮箱" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<textarea class="form-control" rows="6"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-10">
								<button type="submit" class="btn btn-default">
								发送
								</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 column">
					<dl>
						<dt>
						关于我们
						</dt>
						<dd>
							自成立以来，BI工作室致力于在系统集成领域的建设，我们不断成长、不断积累，终于出色完成了北京市朝阳区教育数据管理平台、朝阳区税源分析系统等一系列复杂数据平台的建设，有着独立进行大数据分析处理的能力。 我们真挚的希望能与您一起迈进大数据时代！
						</dd>
						<dt>
						地址：
						</dt>
						<dd>
							北京市朝阳区
						</dd>
						<dd>
							QQ: 195605774
						</dd>
						<dd>
							Email: biwork@yeah.net
						</dd>
						<dd>
							留言的回复信息将以邮件的形式发送到您的邮箱，请注意邮箱是否填写正确。
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<!--底部返回顶部按钮位置-->
		<div class="row clearfix foot-con">
			<div class="container">
				<div class="col-md-4 column">
					<p>
						本网站仅支持IE9及以上版本，火狐，谷歌等支持HTML5的浏览器 京ICP备16008739号
					</p>
				</div>
				<div class="col-md-4 column">
					<button type="button" class="btn btn-lg btn-block" id="returnTop">
					返回顶部
					</button>
				</div>
				<div class="col-md-4 column button_right text-center" style="margin-top:5px;">
					<button type="button" class="btn btn-default ">
					<i class="glyphicon glyphicon-home"></i>
					</button>
					<button type="button" class="btn btn-default ">
					<i class="glyphicon glyphicon-flag"></i>
					</button>
					<button type="button" class="btn btn-default ">
					<i class="glyphicon glyphicon-bookmark"></i>
					</button>
					<button type="button" class="btn btn-default">
					<i class="glyphicon glyphicon-tint"></i>
					</button>
				</div>
			</div>
		</div>
		<!--头部导航栏开始的位置-->
		<?php
		require ROOT_PATH . 'compoent/header_inc.php';
		//转换成硬路径
		?>
	</body>
	<script type="text/javascript" src="js/sea.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script>
		//配置参数
		seajs.config({
			base:'./js/',
			paths: {
				"lib":"./lib/"
			},
			alias: {
				"jquery":"lib/jquery.min",
				"bootstrap":"lib/bootstrap.min",
				"slicebox": "lib/slicebox",
			}
		});
		//加载入口模块
		seajs.use(["ec-index","ec-initSliceBox"],function(modA,modB){
			console.log(modA);
			modA.init();
			modB.init();
		});
	</script>
</html>