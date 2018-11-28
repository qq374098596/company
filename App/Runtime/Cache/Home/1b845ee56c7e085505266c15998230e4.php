<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
	
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/myself.css"/>
	</head>
	<body>

		
<div class="header">
	<div class="container">
		<div class="title">您好，欢迎来到返乡创业网！</div>
		<ul>
			<li><a href="javascript:;">项目合作</a></li>
			<li><a href="javascript:;">创业圈</a></li>
			<li><a href="javascript:;">微信</a></li>
			<?php if(empty($_SESSION['user'])): ?><li class="user"><a href="<?php echo U('Login/login');?>">登录</a><a> / </a><a href="<?php echo U('Login/register');?>">注册</a></li>
			<?php else: ?>
				<li class="user">
					<a href="<?php echo U('Ucenter/index');?>"><?php echo ($_SESSION['user']['name']); ?></a>
					<a href="<?php echo U('Login/quit');?>">退出</a>
					<!--<a href="login.html">登录</a><a> / </a><a href="register.html">注册</a>-->
				</li><?php endif; ?>
		</ul>
	</div>
</div>


<!--导航-->
<div class="nav">
	<div class="container">
		<a href="<?php echo U('/');?>"><img src="/fxpc/Public/Home/img/index/logo.png" /></a>
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

		<!--banner-->
		<div class="banner-box">
			<img src="<?php echo ($_SESSION['user']['headimg']); ?>" />
			<h5>皮皮猫</h5>
			<span>总积分：</span>
			<span>54859</span>
			<span>可用积分：</span>
			<span>54859</span>
		</div>
			
			
		<div class="content">
			<!--侧边栏按钮-->
			<div class="data-btns">
				<!--基本资料-->
				<div class="title">基本资料</div>
				<!--基本情况-->
				<div class="jbqk"><p data-id="jbqk" class="jbqk menu-btn active">基本情况</p></div>
				<!--我的收藏-->
				<div class="wdsc"><p>我的收藏</p>
					<ul>
						<li><a class="xmsc menu-btn" data-id="wdsc" data-subid="xmsc" data-btn="sub-btn" >项目收藏</a></li>
						<li><a class="dssc menu-btn" data-id="wdsc" data-subid="dssc" data-btn="sub-btn" >导师收藏</a></li>
						<li><a class="tzsc menu-btn" data-id="wdsc" data-subid="tzsc" data-btn="sub-btn" >帖子收藏</a></li>
						<li><a class="gssc menu-btn" data-id="wdsc" data-subid="gssc" data-btn="sub-btn" >故事收藏</a></li>
					</ul>
				</div>
				<!--账号设置-->
				<div class="zhsz"><p>账号设置</p>
					<ul>
						<li><a class="jbxx menu-btn" data-id="jbxx" data-btn="sub-btn" >基本信息</a></li>
						<li><a class="dlmm menu-btn" data-id="dlmm" data-btn="sub-btn" >登录密码</a></li>
						<li><a class="sjyz menu-btn" data-id="sjyz" data-btn="sub-btn" >手机验证</a></li>
					</ul>
				</div>
				
				<div class="line"></div>
				
				<!--我的诊断-->
				<div class="title">我的诊断</div>
				<!--诊断记录-->
				<div class="zdjl"><p class="zdjl menu-btn" data-id="zdjl">诊断记录</p></div>
				
				<div class="line"></div>
				
				<!--加盟项目-->
				<div class="title">加盟项目</div>
				<!--我的项目-->
				<div class="wdxm"><p class="wdxm menu-btn" data-id="jmxm" data-subid="wdxm">我的项目</p></div>
				<!--严选项目-->
				<div class="yxxm"><p class="yxxm menu-btn" data-id="jmxm" data-subid="yxxm">严选项目</p></div>
				
				<div class="line"></div>
				
				<!--我的点评-->
				<div class="title">我的点评</div>
				<!--项目点评-->
				<div class="xmdp"><p class="xmdp menu-btn" data-id="xmdp">项目点评</p></div>
				<!--严选点评-->
				<div class="yxdp"><p class="yxdp menu-btn" data-id="yxdp">严选点评</p></div>
				
				<div class="line"></div>
				
				<!--我的帖子-->
				<div class="title">我的帖子</div>
				<!--我的主贴-->
				<div class="wdzt"><p class="wdzt menu-btn" data-id="wdtz" data-subid="wdzt">我的主贴</p></div>
				<!--我的回帖-->
				<div class="wdht"><p class="wdht menu-btn" data-id="wdtz" data-subid="wdht">我的回帖</p></div>
				
			</div><!--data-btns   end-->
			
			
			<!--切换页面-->
			<div class="data-pages">
				
				<!--基本情况内容-->
				<div class="data-page jbqk-page">
					<div class="title"><span>基本情况</span></div>
					<div class="my-infor">
						<div class="header-box">
							<img src="<?php echo ($_SESSION['user']['headimg']); ?>" />
							<input type="file" accept="image/*" />
						</div>
						<h5>皮皮喵</h5>
						<ul>
							<li>我的加盟：<span>1</span></li>
							<li>我的收藏：<span><?php echo ($collection); ?></span></li>
							<li>我的积分：<span><?php echo ($integral); ?></span></li>
							<li>我的主贴：<span><?php echo ($card); ?></span></li>
							<li>我的点评：<span>26</span></li>
						</ul>
					</div>
					
					<div class="xm-title"><span class="wdxm-sub-sub active">我的项目</span><span class="yxxm-sub-sub">严选项目</span></div>
					<!--项目部分-->
					<div class="wdxm-sub-sub-page sub-page">
						<ul>
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm2.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>饿了么城市代理</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm1.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header2.png" />
									</div>
								</div>
								<h5>味千拉面</h5>
								<p>状态：已关闭</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm3.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header3.png" />
									</div>
								</div>
								<h5>正新鸡排</h5>
								<p>状态：营业中</p>
								<a href="javascript:;">查看详情</a>
							</li>
						</ul>
					</div>
					
					<!--基本情况严选项目-->
					<div class="yxxm-sub-sub-page sub-page">
						<ul>
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm1.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>味千拉面</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm3.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>正新鸡排</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<!--<li>
								<div class="img-box">
									<img src="img/myself/wdxm2.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>饿了么城市代理</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>-->
						</ul>
					</div>
				</div>
				
				<!--我的收藏-->
				<div class="data-page wdsc-page">
					<div class="xm-title">
						<span class="xmsc-sub active" data-id="xmsc">项目收藏</span>
						<span class="dssc-sub" data-id="dssc">导师收藏</span>
						<span class="tzsc-sub" data-id="tzsc">帖子收藏</span>
						<span class="gssc-sub" data-id="gssc">故事收藏</span>
					</div>
					<!--项目收藏-->
					<div class="xmsc-sub-page sub-page">
						<ul>
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm2.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>饿了么城市代理</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm1.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header2.png" />
									</div>
								</div>
								<h5>味千拉面</h5>
								<p>状态：已关闭</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm3.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header3.png" />
									</div>
								</div>
								<h5>正新鸡排</h5>
								<p>状态：营业中</p>
								<a href="javascript:;">查看详情</a>
							</li>
						</ul>
					</div>
					
					<!--导师收藏-->
					<div class="dssc-sub-page sub-page">
						<ul class="daoshi-box-b">
							<li class="daoshi-item"><a href="javascript:;">
								<div class="daoshi-header">
									<img src="img/myself/daoshi1.png" />
									<div class="daoshi-describe">
										<p>自创品牌</p>
										<p>目前已开5家奶茶分店</p>
									</div>
									<span class="jianjian"></span>
								</div>
								<div class="daoshi-detail">
									<h1>年康</h1>
									<h3>餐饮导师</h3>
									<p class="age">年龄：<span>32岁</span></p>
									<p class="zili">资历：<span>5年</span></p>
									<p class="obj">项目：<span>奶茶店</span></p>
									<p class="address">地址：<span>安徽</span></p>
								</div>
							</a></li>
							
							<li class="daoshi-item"><a href="javascript:;">
								<div class="daoshi-header">
									<img src="img/myself/daoshi2.png" />
									<div class="daoshi-describe">
										<p>自创品牌</p>
										<p>目前已开5家奶茶分店</p>
									</div>
									<span class="jianjian"></span>
								</div>
								<div class="daoshi-detail">
									<h1>年康</h1>
									<h3>餐饮导师</h3>
									<p class="age">年龄：<span>32岁</span></p>
									<p class="zili">资历：<span>5年</span></p>
									<p class="obj">项目：<span>奶茶店</span></p>
									<p class="address">地址：<span>安徽</span></p>
								</div>
							</a></li>
							
							<li class="daoshi-item"><a href="javascript:;">
								<div class="daoshi-header">
									<img src="img/myself/daoshi3.png" />
									<div class="daoshi-describe">
										<p>自创品牌</p>
										<p>目前已开5家奶茶分店</p>
									</div>
									<span class="jianjian"></span>
								</div>
								<div class="daoshi-detail">
									<h1>年康</h1>
									<h3>餐饮导师</h3>
									<p class="age">年龄：<span>32岁</span></p>
									<p class="zili">资历：<span>5年</span></p>
									<p class="obj">项目：<span>奶茶店</span></p>
									<p class="address">地址：<span>安徽</span></p>
								</div>
							</a></li>
						</ul>
					</div>

					<!--帖子收藏-->
					<div class="tzsc-sub-page sub-page">
						<ul>
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业测试：50个迹象表明你真该创业了!</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
							
							<li>
								<img src="img/cyq/user2.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业者如何白手起家创业？</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
							
							<li>
								<img src="img/cyq/user3.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">不想外出打工了，试试这5个暴利创业小项目，低成本高回报</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
							
							<li>
								<img src="img/cyq/user4.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业测试：50个迹象表明你真该创业了!</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
							
							<li>
								<img src="img/cyq/user5.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业者如何白手起家创业？</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
							
							<li>
								<img src="img/cyq/user6.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">不想外出打工了，试试这5个暴利创业小项目，低成本高回报</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
								<a href="javascript:;" class="tiezi-more"><img src="img/cyq/tiezi-list-btn.png" /></a>
							</li>
						</ul>
					</div>
					
					<!--故事收藏-->
					<div class="gssc-sub-page sub-page">
						<ul class="stories">
							<li>
								<div class="story-l">
									<img src="img/cygs/gushi1.png"/>
									<h5><a href="javascript:;">不要问怎么做，要问为什么做？</a></h5>
									<p>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......</p>
									<a href="javascript:;"><img src="img/cygs/more-btn.png" /></a>
								</div>
								<div class="story-r">
									<span></span>	
									<h1>11-13</h1>
									<p>-2018</p>
								</div>
							</li>
							
							<li>
								<div class="story-l">
									<img src="img/cygs/gushi2.png"/>
									<h5><a href="javascript:;">不要问怎么做，要问为什么做？</a></h5>
									<p>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......</p>
									<a href="javascript:;"><img src="img/cygs/more-btn.png" /></a>
								</div>
								<div class="story-r">
									<span></span>	
									<h1>11-06</h1>
									<p>-2018</p>
								</div>
							</li>
							
							<li>
								<div class="story-l">
									<img src="img/cygs/gushi3.png"/>
									<h5><a href="javascript:;">不要问怎么做，要问为什么做？</a></h5>
									<p>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......</p>
									<a href="javascript:;"><img src="img/cygs/more-btn.png" /></a>
								</div>
								<div class="story-r">
									<span></span>	
									<h1>10-30</h1>
									<p>-2018</p>
								</div>
							</li>
							
							<li>
								<div class="story-l">
									<img src="img/cygs/gushi4.png"/>
									<h5>不要问怎么做，要问为什么做？</h5>
									<p>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......</p>
									<a href="javascript:;"><img src="img/cygs/more-btn.png" /></a>
								</div>
								<div class="story-r">
									<span></span>	
									<h1>10-28</h1>
									<p>-2018</p>
								</div>
							</li>
							
							<li>
								<div class="story-l">
									<img src="img/cygs/gushi5.png"/>
									<h5>不要问怎么做，要问为什么做？</h5>
									<p>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......</p>
									<a href="javascript:;"><img src="img/cygs/more-btn.png" /></a>
								</div>
								<div class="story-r">
									<span></span>	
									<h1>10-28</h1>
									<p>-2018</p>
								</div>
							</li>
						</ul>
					</div>
					
				</div>

				<!--基本信息-->
				<div class="data-page jbxx-page">
					<div class="title"><span>基本信息</span></div>
					<ul>
						<li><span>用户名：</span><input type="text" value="<?php echo ($_SESSION['user']['name']); ?>" /></li>
						<li>
							<span>性别：</span>
							<form>
								<label><input type="radio" name="sex" value="1" />男</label>
								<label><input type="radio" name="sex" value="0" />女</label>
								<label><input type="radio" name="sex" value="x" />保密</label>
							</form>
						</li>
						<li><span>真实姓名：</span><input type="text" value="培培菇凉" /></li>
						<li><span>邮箱：</span><input type="text" class="no-border" readonly="readonly" value="<?php echo ($_SESSION['user']['email']); ?>" /><a class="revise" href="javascript:;">修改</a></li>
						<li><span>手机：</span><input type="text" class="no-border" readonly="readonly" value="<?php echo ($_SESSION['user']['mobile']); ?>" /><a class="revise" href="javascript:;">修改</a></li>
						<li><span>微信：</span><input type="text" class="no-border" readonly="readonly" value="mine1125" /><a class="revise" href="javascript:;">修改</a></li>
						<li><span>QQ：</span><input type="text" class="no-border" readonly="readonly" value="1125160768" /><a class="revise" href="javascript:;">修改</a></li>
						<li>
							<span>所在地：</span>
							<div id="target">
					        <div class="form-group"><select></select></div>
					        <div class="form-group"><select></select></div>
					        <div class="form-group"><select></select></div>
					      </div>
						</li>
					</ul>
					<a class="updata" href="javascript:;">更新资料</a>
				</div>

				<!--登录密码-->
				<div class="data-page dlmm-page">
					<div class="title"><span>登录密码</span></div>
					<ul>
						<li><span>原密码：</span><input type="text" /></li>
						<li><span>新密码：</span><input type="text" /></li>
						<li><span>确认密码：</span><input type="text" /></li>
					</ul>
					<a class="updata" href="javascript:;">提交</a>
				</div>
				
				<!--手机验证-->
				<div class="data-page sjyz-page">
					<div class="title"><span>手机验证</span></div>
					<ul>
						<li><span>新的手机号：</span><input class="new-telphone" type="text" /><p class="kong"><a>x</a>手机号码不能为空</p></li>
						<li><span>验证码：</span><input type="text" /><a class="get-code" href="javascript:;">获取验证码</a></li>
					</ul>
					<a class="updata" href="javascript:;">提交</a>
				</div>

				<!--诊断记录-->
				<div class="data-page zdjl-page">
					<div class="title"><span>诊断记录</span></div>

					<?php if(is_array($diagnosis)): foreach($diagnosis as $key=>$v): ?><div class="jilu">
						<div class="header-box"><img src="img/myself/zdjl1.png" /></div>
						<div class="jilu-name">
							<h5><?php echo ($v["pinpai"]); ?></h5>
							<p>接收邮箱：<?php echo ($v["jsfs"]); ?></p>
						</div>
						<div class="jilu-time">诊断于：<?php echo ($v["time"]); ?></div>
					</div><?php endforeach; endif; ?>

				</div>
				
				<!--加盟项目-->
				<div class="data-page jmxm-page">
					<div class="xm-title">
						<span class="wdxm-sub active" data-id="wdxm" >我的项目</span>
						<span class="yxxm-sub" data-id="yxxm">严选项目</span>
					</div>
					<!--我的项目-->
					<div class="wdxm-sub-page sub-page">
						<ul>
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm2.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>饿了么城市代理</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm1.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header2.png" />
									</div>
								</div>
								<h5>味千拉面</h5>
								<p>状态：已关闭</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm3.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header3.png" />
									</div>
								</div>
								<h5>正新鸡排</h5>
								<p>状态：营业中</p>
								<a href="javascript:;">查看详情</a>
							</li>
						</ul>
					</div>
					<!--严选项目-->
					<div class="yxxm-sub-page sub-page">
						<ul>
							<!--<li>
								<div class="img-box">
									<img src="img/myself/wdxm2.png" />
									<div class="xm-header">
										<img src="img/myself/zdjl1.png" />
									</div>
								</div>
								<h5>饿了么城市代理</h5>
								<p>状态：开店中</p>
								<a href="javascript:;">查看详情</a>
							</li>-->
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm1.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header2.png" />
									</div>
								</div>
								<h5>味千拉面</h5>
								<p>状态：已关闭</p>
								<a href="javascript:;">查看详情</a>
							</li>
							
							<li>
								<div class="img-box">
									<img src="img/myself/wdxm3.png" />
									<div class="xm-header">
										<img src="img/myself/xm-header3.png" />
									</div>
								</div>
								<h5>大脸鸡排</h5>
								<p>状态：营业中</p>
								<a href="javascript:;">查看详情</a>
							</li>
						</ul>
					</div>
					
				</div>
				
				<!--项目点评-->
				<div class="data-page xmdp-page">
					<div class="title"><span>项目点评</span></div>
					<ul>
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/zdjl1.png" /></div>
		  					<h5>饿了么城市代理</h5>
		  					<p>- 项目代理 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  			
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/xm-header2.png" /></div>
		  					<h5>味千拉面</h5>
		  					<p>- 餐饮美食 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  			
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/xm-header3.png" /></div>
		  					<h5>正新鸡排</h5>
		  					<p>- 餐饮美食 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  		</ul>
		  		<div class="xmdp-pagination pagination"></div>
				</div>
				
				<!--严选点评-->
				<div class="data-page yxdp-page">
					<div class="title"><span>严选点评</span></div>
					<ul>
		  			
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/xm-header2.png" /></div>
		  					<h5>味千拉面</h5>
		  					<p>- 餐饮美食 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  			
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/zdjl1.png" /></div>
		  					<h5>饿了么城市代理</h5>
		  					<p>- 项目代理 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  			
		  			<li>
		  				<div class="item-left">
		  					<div class="header-box"><img src="img/myself/xm-header3.png" /></div>
		  					<h5>正新鸡排</h5>
		  					<p>- 餐饮美食 -</p>
		  					<a href="javascript:;">查看详情</a>
		  				</div>
		  				<div class="item-right">
		  					<div class="header-box"><img src="img/myself/header.png" /></div>
		  					<div class="item-title">皮皮喵<a>未开店</a></div>
		  					<div class="item-com">
		  						<div class="star-box">
			    					<div class="noactive"></div>
			    					<div class="active" style="width:154px"></div>
			    				</div>
		  					</div>
		  					<div class="item-info">
			  					<a>加盟费：<span>￥1万</span></a>
			  					<a>总成本：<span>￥3万</span></a>
			  					<a>加盟时间：<span>2013-11-07</span></a>
			  					<a>月营收：<span>10万</span></a>
			  					<a>开店城市：<span>沈阳</span></a>
			  					<p><img src="img/myself/jmdp-icon.png" />上海创杨信息技术有限公司</p>
		  					</div>
		  					<p>签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完以后找什么都要钱，都不管</p>
		  					<div class="item-bottom">
		  						<p>2018-11-09</p>
		  						<span>赞（128）</span>
		  						<span>回应（7）</span>
		  					</div>
		  				</div>
		  			</li>
		  		</ul>
		  		<div class="yxdp-pagination pagination"></div>
				</div>

				<!--我的帖子-->
				<div class="data-page wdtz-page">
					<div class="xm-title">
						<span class="wdzt-sub active" data-id="wdzt">我的主贴</span>
						<span class="wdht-sub" data-id="wdht">我的回贴</span>
					</div>
					<!--我的主贴-->
					<div class="wdzt-sub-page sub-page">
						<ul>
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业测试：50个迹象表明你真该创业了!</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业者如何白手起家创业？</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">不想外出打工了，试试这5个暴利创业小项目，低成本高回报</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业测试：50个迹象表明你真该创业了!</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">创业者如何白手起家创业？</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5><a href="javascript:;">不想外出打工了，试试这5个暴利创业小项目，低成本高回报</a></h5>
									<span class="user-name"><a href="javascript:;">叮当你个猫</a></span>
									<span class="time">发布于 2018/11/15 14:36:59</span>
									<span class="look">查看：<a>125489</a></span>
									<span>|</span>
									<span class="reply">回复：<a>59846</a></span>
								</div>
							</li>
						</ul>
						
						<div class="wdzt-pagination  pagination"></div>
					</div>
					<!--我的回帖-->
					<div class="wdht-sub-page sub-page">
						<ul>
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5>叮当你个喵 回复 <a href="javascript:;"> 樱木花道</a>的主贴<a href="javacript:;">“创业者如何白手起家？”</a></h5>
									<span class="time">2018/11/15 14:36:59</span>
									<p class="tiezi-detail">自媒体不是泡沫。所以不是谁都可以挣到钱的<a href="javascript:;">查看更多&gt;&gt;</a></p>
									
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5>叮当你个喵 回复 <a href="javascript:;"> 樱木花道</a>的主贴<a href="javacript:;">“创业者如何白手起家？”</a></h5>
									<span class="time">2018/11/15 14:36:59</span>
									<p class="tiezi-detail">自媒体不是泡沫。所以不是谁都可以挣到钱的<a href="javascript:;">查看更多&gt;&gt;</a></p>
									
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5>叮当你个喵 回复 <a href="javascript:;"> 樱木花道</a>的主贴<a href="javacript:;">“创业者如何白手起家？”</a></h5>
									<span class="time">2018/11/15 14:36:59</span>
									<p class="tiezi-detail">自媒体不是泡沫。所以不是谁都可以挣到钱的<a href="javascript:;">查看更多&gt;&gt;</a></p>
									
								</div>
							</li>
							
							<li>
								<img src="img/cyq/user1.png"/>
								<div class="tiezi-describe">
									<h5>叮当你个喵 回复 <a href="javascript:;"> 樱木花道</a>的主贴<a href="javacript:;">“创业者如何白手起家？”</a></h5>
									<span class="time">2018/11/15 14:36:59</span>
									<p class="tiezi-detail">自媒体不是泡沫。所以不是谁都可以挣到钱的<a href="javascript:;">查看更多&gt;&gt;</a></p>
									
								</div>
							</li>
						</ul>
						<div class="wdht-pagination pagination"></div>
					</div>
					
				</div>

			</div><!--data-pages   end-->
			
			
			
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
		
	</body>
</html>
<script src="/fxpc/Public/Home/js/jquery-3.3.1.js"></script>
<script src="/fxpc/Public/Home/js/distpicker.data.js"></script>
<script src="/fxpc/Public/Home/js/jquery.pagination.js"></script>
<script>
	
	//选择地区插件
	$('#target').distpicker({
		autoSelect: false
	});
	
	//基本情况-更换头像
	$('.jbqk-page .header-box input').change(function(){
		var file = this.files[0];
		var reader = new FileReader();
		reader.readAsDataURL(file); 
		reader.onloadend = function(e){
			$('.jbqk-page .header-box img').attr('src',e.target.result);
			$('.banner-box img').attr('src',e.target.result)
		};
	})
	
	//账号设置基本信息修改样式
	$('.jbxx-page .revise').click(function(){
		$(this).siblings('input').removeAttr('readonly').css('border-color','#e3e3e3');
	});
	$('.jbxx-page .updata').click(function(){
		$('.no-border').attr('readonly','readonly').css('border-color','#fff');
	});

	//更换手机号码样式更改
	$('.sjyz-page .new-telphone').blur(function(){
		if($(this).val() == ''){
			$(this).siblings('p.kong').fadeIn(200)
		}
		$('.sjyz-page .new-telphone').focus(function(){
			$(this).siblings('p.kong').fadeOut(200)
		});
	});
	
	
	//分页插件
	//项目点评分页
	$('.xmdp-pagination').pagination({
		totalData: 320,				//总数据条数
		showDate: 10,
		pageCount : 32, 			//总页数
		current: 1,						//当前页
		prevContent:'&lang;',
		nextContent:'&rang;',
		keepShowPN:true,			
		mode:'fixed',
		count: 8,
		coping:true,
		homePage:'首',
		endPage:'末',
		isHide:true,
		jump:false,
		callback:function(apis){
			//跳转要做的事件
			
		}
	});	
	//严选点评分页
	$('.yxdp-pagination').pagination({
		totalData: 320,				//总数据条数
		showDate: 10,
		pageCount : 32, 			//总页数
		current: 1,						//当前页
		prevContent:'&lang;',
		nextContent:'&rang;',
		keepShowPN:true,			
		mode:'fixed',
		count: 8,
		coping:true,
		homePage:'首',
		endPage:'末',
		isHide:true,
		jump:false,
		callback:function(apis){
			//跳转要做的事件
			
		}
	});	
	//我的回帖分页
	$('.wdht-pagination').pagination({
		totalData: 320,				//总数据条数
		showDate: 10,
		pageCount : 32, 			//总页数
		current: 1,						//当前页
		prevContent:'&lang;',
		nextContent:'&rang;',
		keepShowPN:true,			
		mode:'fixed',
		count: 8,
		coping:true,
		homePage:'首',
		endPage:'末',
		isHide:true,
		jump:false,
		callback:function(apis){
			//跳转要做的事件
			
		}
	});	
	//我的主贴分页
	$('.wdzt-pagination').pagination({
		totalData: 320,				//总数据条数
		showDate: 10,
		pageCount : 32, 			//总页数
		current: 1,						//当前页
		prevContent:'&lang;',
		nextContent:'&rang;',
		keepShowPN:true,			
		mode:'fixed',
		count: 8,
		coping:true,
		homePage:'首',
		endPage:'末',
		isHide:true,
		jump:false,
		callback:function(apis){
			//跳转要做的事件
			
		}
	});	
	
	
	//右侧page页面切换
	$('.menu-btn').click(function(e){
		clearActive();
		$('.menu-btn').removeClass('active');
		$(this).addClass('active');
		if($(this).data('btn') == 'sub-btn'){
			$(this).parent().css('color','#12C173').parent('ul').siblings('p').addClass('active');
		}
		if($(this).data('subid') == ''){
			let whichPage = $(this).data('id');
			$('.'+whichPage+'-page').siblings('.data-page').hide();
			$('.'+whichPage+'-page').fadeIn(200);
		}else{
			let whichPage = $(this).data('id');
			$('.'+whichPage+'-page').siblings('.data-page').hide();
			$('.'+whichPage+'-page').fadeIn(200);
			$('.'+whichPage+'-page').children('.xm-title').children('.'+$(this).data('subid')+'-sub').click();
		}
	});
	function clearActive(){
		$('.data-btns>div p').removeClass('active');
		$('.data-btns>div ul li').css('color','#777')
	}
	
	//page下子菜单切换
	$('.xm-title span').click(function(){
		if($(this).hasClass('active')){
			return false;
		}else{
			let pageName = $(this).data('id');
			$('.menu-btn').removeClass('active');
			$('.data-btns .'+pageName).addClass('active');
			$('.data-btns .'+pageName).parent('li').siblings().css('color','#777')
			$('.data-btns .'+pageName).parent('li').css('color','#12C173')
			let classname = $(this).attr('class');
			$('.'+classname+'-page').siblings('.sub-page').stop().hide();
			$('.'+classname+'-page').fadeIn(200);
			$(this).siblings('span').removeClass('active');
			$(this).addClass('active');
		}
	});
	
	
	
	//侧边栏菜单收缩
	$('.data-btns>div p').click(function(){
		$(this).siblings().slideToggle(300);
	});
	
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.myself').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
</script>