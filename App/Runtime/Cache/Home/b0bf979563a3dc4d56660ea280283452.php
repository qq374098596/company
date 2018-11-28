<?php if (!defined('THINK_PATH')) exit();?>	
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
			
		<style>
			
			.big-box{ width: 1920px; height: 800px; margin: 20px 0 60px; background: url(/fxpc/Public/Home/img/gywm/big-bg.png); position: relative; left: 50%; margin-left: -960px; }
			.big-box .big-bg{ width: 1200px; height: 800px; margin: 0 auto;  }
			.big-box .numbox{ width: 600px; height: 370px; float: left; text-align: center; }
			.big-box .numbox h1{ font-size: 100px; color: #12C173; margin-top: 120px; }
			.big-box .numbox p{ font-size: 20px; color: #fff; }
			
			.big-box .company-box{ float: left; width: 100%; height: 365px; padding: 23px 21px; box-sizing: border-box; background: #fff; border-radius: 10px; }
			.big-box .company-box img{ float: left; }
			.big-box .company-box .company-text{ text-align: center; }
			.big-box .company-box .company-text h3{ font-size: 24px; color: #12c173; line-height: 57px; margin-bottom: 10px; }
			.big-box .company-box .company-text p,.big-box .company-box .company-text h5{ font-weight: normal; font-size: 18px; color: #333; line-height: 40px; }
			.big-box .company-box .company-text h5{ margin-top: 40px; }
			.big-box .company-box .company-text h5 span{ color: #12C173; }
			
			
		</style>
	</head>
	<body>
		<!--顶部-->
		
		
<div class="header">
	<div class="container">
		<div class="title">您好，
		<?php if(!empty($_SESSION['user'])): ?><a href="" style="color: red"><?php echo ($_SESSION['user']['name']); ?></a>
		<?php else: endif; ?>
		欢迎来到返乡创业网！</div>
		<ul>
			<li><a href="javascript:;">项目合作</a></li>
			<li><a href="javascript:;">创业圈</a></li>
			<li><a href="javascript:;">微信</a></li>
			<?php if(empty($_SESSION['user'])): ?><li class="user"><a href="<?php echo U('Login/login');?>">登录</a><a> / </a><a href="<?php echo U('Login/register');?>">注册</a></li>
			<?php else: ?>
				<li class="user"><a href="<?php echo U('Login/quit');?>">退出</a></li><?php endif; ?>
		</ul>
	</div>
</div>


<!--导航-->
<div class="nav">
	<div class="container">
		<a href="index.html"><img src="/fxpc/Public/Home/img/index/logo.png" /></a>
		<ul>
			<li class="index active"><a href="<?php echo U('/');?>">首页</a></li>
			<li class="cyq"><a href="<?php echo U('Cyq/cyq');?>">创业圈</a></li>
			<li class="jmzd"><a href="<?php echo U('Jmzd/jmzd');?>">加盟诊断</a></li>
			<li class="jmdp"><a href="<?php echo U('Jmdp/jmdp');?>">加盟点评</a></li>
			<li class="yxxm"><a href="<?php echo U('Yxxm/yxxm');?>">严选项目</a></li>
			<li class="cyds"><a href="<?php echo U('Cyds/cyds');?>">创业导师</a></li>
			<li class="cygs"><a href="<?php echo U('Cygs/cygs');?>">创业故事</a></li>
			<li class="gywm"><a href="<?php echo U('Gywm/gywm');?>">关于我们</a></li>
		</ul>
		<div class="input-box">
			<input type="text" />
			<a href="javascript:;"></a>
		</div>
	</div>
</div>


		<!--内容-->
		<div class="big-box">
			<div class="big-bg">
				<div class="year numbox">
					<h1>5</h1>
					<p>年技术沉淀</p>
				</div>
				<div class="hour numbox">
					<h1>24</h1>
					<p>小时为您服务</p>
				</div>
				<div class="company-box">
					<img src="/fxpc/Public/Home/img/gywm/company-img.png" />
					<div class="company-text">
						<h3>我们是谁</h3>
						<p>返乡创业网致力于打造“返乡”创业综合服务平台</p>
						<p>提供开店加盟，品牌代理等创业项目诊断</p>
						<p>还原品牌真实面目，建立行业中立第三方加盟点评平台</p>
						<p>为返乡创业者最大限度降低风险！</p>
						<h5>联系我们：<span>4008882487</span></h5>
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		
		<!--底部-->
		
	<div class="footer">
	<div class="footer-t">
		<div class="container">
			<ul>
				<li><a href="gywm.html">关于我们</a></li>
				<li><a href="cyq.html">创业圈 &nbsp;</a></li>
				<li><a href="jmzd.html">加盟诊断</a></li>
				<li><a href="jmdp.html">加盟点评</a></li>
				<li><a href="yxxm.html">严选品牌</a></li>
				<li><a href="cyds.html">创业导师</a></li>
				<li><a href="cygs.html">创业故事</a></li>
			</ul>
			<div class="footer-l">
				<p class="telphone">400-888-2487</p>
				<p>fanxiangchuangye@fanxiang.top</p>
				<p>service@fanxiang.top</p>
				<p>上海市浦江镇茸锦科技园</p>
			</div>
			<div class="footer-r">
				<img src="/fxpc/Public/Home/img/gzh-erwei.png" />
				<img src="/fxpc/Public/Home/img/xcx-erwei.png" />
			</div>
		</div>
	</div>
	<div class="footer-b">
		<div class="container">
			<p>沪ICP18030623号 400882487</p>
			<p><a href="javascript:;">服务条款</a>&nbsp; | &nbsp;<a href="javascript:;">隐私政策</a></p>
		</div>
	</div>
</div>
</body>
</html>
<script src="/fxpc/Public/Home/js/jquery-3.3.1.js"></script>

<script>
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.gywm').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
</script>