<?php if (!defined('THINK_PATH')) exit();?>	
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
	
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/jmdp.css"/>
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


		<!--内容部分-->
		<div class="container" id="content" v-cloak>
			

			<!--侧导航-->
			<ul class="right-nav">
				<li v-for="nav in nav" :value="nav.id" :style="{background: nav.bgcolor}"><a href="javascript:;">{{nav.hyname}}</a></li>
				<li value="rmpp"><a href="javascript:;">热门品牌</a></li>
				<li value="cnxh"><a href="javascript:;">猜你喜欢</a></li>
				<li value="header" class="gotop"><a href="javascript:;"><img src="/fxpc/Public/Home/img/jmdp/go-top.png" />返回顶部</a></li>
			</ul>
		
		
			<!--banner-->
			<div class="banner-box">
				<div class="swiper-banner">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide"><img src="img/jmdp/banner1.png"/></div>
			      <div class="swiper-slide"><img src="img/jmdp/middle-banner1.png"/></div>
			      <div class="swiper-slide"><img src="img/jmdp/bottom-banner1.png"/></div>
			    </div>
			  </div>
			  <div class="login-box">
			  	<div class="header-box">
			  		<?php if(empty($_SESSION['user'])): ?><img src="/fxpc/Public/Home/img/jmdp/normal-header.png" />
			  		<?php else: ?>
						<img src="<?php echo ($_SESSION['user']['headimg']); ?>" /><?php endif; ?>
			  		<p>Hi,你好</p>
			  	</div>

				<?php if(empty($_SESSION['user'])): ?><div class="btn-box">
			  		<a href="<?php echo U('Login/register');?>">注册</a>
			  		<a href="<?php echo U('Login/login');?>">登录</a>
			  	</div>
				<?php else: ?>
					<div class="btn-box">
			  			<h4>欢迎您！</h4>
			  		</div><?php endif; ?>

			  </div>
			  <div class="xcx-box">
			  	<img src="/fxpc/Public/Home/img/jmdp/banner-xcx.png" />
			  	<p>扫描二维码查看小程序</p>
			  </div>
			</div>
		
		
			<!--选择导航-->
			<div class="nav-box">
				<span>选择</span>
				<ul>
					<li id="allall"><a class="active" href="javascript:;">全部</a></li>
					<li v-for="nav in nav" :id="nav.id"><a href="javascript:;">{{nav.hyname}}</a></li>
				</ul>
				
				<div class="input-box">
					<input type="text" placeholder="请输入你要查找的内容" />
					<a href="javascript:;"></a>
				</div>
			</div>
			
			
			<!--所有品牌盒子-->
			<div class="all-box all-box1">
				
				<!--快餐美食-->
				<div class="kcms" class="1">
					<div class="title">
						<p>快餐美食</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in kcms"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div><!--美食快餐end-->


				<!--中间轮播-->
				<div class="swiper-middle">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide" v-for="banner in middlebanner"><a :href="banner.jump"><img :src="banner.img"/></a></div>
			    </div>
			  </div>
			
			
				<!--服装服饰-->
				<div class="fzfs">
					<div class="title">
						<p>服装服饰</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in fzfs"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--教育培训-->
				<div class="jypx">
					<div class="title">
						<p>教育培训</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in jypx"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--美容健身-->
				<div class="mrjs">
					<div class="title">
						<p>美容健身</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in mrjs"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--超市便利-->
				<div class="csbl">
					<div class="title">
						<p>超市便利</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in csbl"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--母婴幼儿-->
				<div class="myye">
					<div class="title">
						<p>母婴幼儿</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in myye"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--家居家纺-->
				<div class="jjjf">
					<div class="title">
						<p>家居家纺</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in jjjf"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--三农养殖-->
				<div class="snyz">
					<div class="title">
						<p>三农养殖</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in snyz"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
			</div><!--all-box1   end-->
			
			
			<!--底部轮播-->
			<div class="swiper-bottom">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide"><img src="img/jmdp/banner1.png"/></div>
		      <div class="swiper-slide"><img src="img/jmdp/middle-banner1.png"/></div>
		      <div class="swiper-slide"><img src="img/jmdp/bottom-banner1.png"/></div>
		    </div>
		  </div>
			
			<div class="all-box">
				
				<!--热门品牌-->
				<div class="rmpp">
					<div class="title">
						<p>热门品牌</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in rmpp"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
				
				<!--猜你喜欢-->
				<div class="cnxh">
					<div class="title">
						<p>猜你喜欢</p>
						<a href="javascript:;">更多&gt;</a>
					</div>
					<ul class="pinpais">
						<li class="pinpai" v-for="item in cnxh"><a :href="item.jump">
							<img :src="item.img" />
							<div class="pinpai-text">
								<h5>{{item.name}}</h5>
								<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width: item.star*22+'px'}"></div>
		    				</div>
		    				<p class="good-com">好评率：<span>{{item.goodcom}}%</span></p>
		    				<p class="com-num">评论人数：<span>{{item.comnum}}人</span></p>
		    				<p class="joiner-com">加盟者评论：<span>{{item.joinernum}}人</span></p>
							</div>
						</a></li>
					</ul>
				</div>
				
			</div>
		</div><!--container   end-->
		
		
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
		
	
<script src="/fxpc/Public/Home/js/swiper.js"></script>
<script src="/fxpc/Public/Home/js/vue.js"></script>
<script>
	
	var vm = new Vue({
		el: '#content',
		data: {
			nav: [
				{ value: 'kcms', text: '快餐美食', bgcolor: '#fe9700' },
				{ value: 'fzfs', text: '服装服饰', bgcolor: '#efef27' },
				{ value: 'jypx', text: '教育培训', bgcolor: '#a4ef27' },
				{ value: 'mrjs', text: '美容健身', bgcolor: '#27ef40' },
				{ value: 'csbl', text: '超市便利', bgcolor: '#27ef8b' },
				{ value: 'myye', text: '母婴幼儿', bgcolor: '#27efd6' },
				{ value: 'jjjf', text: '家居家纺', bgcolor: '#27bdef' },
				{ value: 'snyz', text: '三农养殖', bgcolor: '#2772ef' },
			],
			banner: [ 
				{ jump: 'javascript:;', img: 'img/jmdp/banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/middle-banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/bottom-banner1.png', },
			],
			middlebanner: [ 
				{ jump: 'javascript:;', img: 'img/jmdp/banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/middle-banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/bottom-banner1.png', },
			],
			bottombanner: [ 
				{ jump: 'javascript:;', img: 'img/jmdp/banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/middle-banner1.png', },
				{ jump: 'javascript:;', img: 'img/jmdp/bottom-banner1.png', },
			],
			kcms:[
				{ jump: 'javascript:;', img: 'img/jmdp/kcms1.png', name: '豪大大鸡排', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms2.png', name: '杨国福麻辣烫', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms3.png', name: '来一碗', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms4.png', name: '俏渝婆', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms5.png', name: '老龚家牛肉面', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms6.png', name: '壹加壹美食坊', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms7.png', name: '潮祥记', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/kcms8.png', name: '五谷鱼粉', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			fzfs:[
				{ jump: 'javascript:;', img: 'img/jmdp/fzfs1.png', name: '天美婷内衣', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/fzfs2.png', name: '老北京布鞋', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/fzfs3.png', name: '艾尼尼童装', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/fzfs4.png', name: '比格比萨', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			jypx:[
				{ jump: 'javascript:;', img: 'img/jmdp/jypx1.png', name: '抱抱熊早教馆', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jypx2.png', name: '清大网校', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jypx3.png', name: '亿百分教育', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jypx4.png', name: '新艺代少儿美术教育', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			mrjs:[
				{ jump: 'javascript:;', img: 'img/jmdp/mrjs1.png', name: '唯伊唐科技美肤', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/mrjs2.png', name: '秀臣化妆品', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/mrjs3.png', name: '蝶美化妆品', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/mrjs4.png', name: '哈乐健身', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			csbl:[
				{ jump: 'javascript:;', img: 'img/jmdp/csbl1.png', name: '洁家环境家政服务', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/csbl2.png', name: '必多精致百货', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/csbl3.png', name: '潮尚优品', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/csbl4.png', name: '优品潮', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			myye:[
				{ jump: 'javascript:;', img: 'img/jmdp/myye1.png', name: '爱亲母婴', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/myye2.png', name: '怡恩贝婴儿护理', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/myye3.png', name: '格鲁比婴童', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/myye4.png', name: '丽婴房', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			jjjf:[
				{ jump: 'javascript:;', img: 'img/jmdp/jjjf1.png', name: '科温士彩粒漆', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jjjf2.png', name: '百木园全屋整装', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jjjf3.png', name: '皇庭窗帘布艺', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/jjjf4.png', name: '易布墙衣', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			snyz:[
				{ jump: 'javascript:;', img: 'img/jmdp/snyz1.png', name: '菜立方芽苗菜', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/snyz2.png', name: '泥鳅养殖', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/snyz3.png', name: '广源畜苗', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/snyz4.png', name: '农科九号生物养殖', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			rmpp:[
				{ jump: 'javascript:;', img: 'img/jmdp/rmpp1.png', name: '一点点奶茶', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/rmpp2.png', name: '快乐柠檬', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/rmpp3.png', name: '卡乐滋汉堡', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/rmpp4.png', name: '比格比萨', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
			cnxh:[
				{ jump: 'javascript:;', img: 'img/jmdp/cnxh1.png', name: '胡辣汤', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/cnxh2.png', name: '冷个串串', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/cnxh3.png', name: '美食客', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
				{ jump: 'javascript:;', img: 'img/jmdp/cnxh4.png', name: '奶爸烫烤', star: '7', goodcom: 70, comnum: 430, joinernum: 130 },
			],
		},

		created:function(){
			var self = this;
			$.get("<?php echo U('Jmdp/getReview');?>",function(data){
				console.log(data)
				var data = eval("("+data+")");
				self.nav = data.nav;
			})
		},

		methods: {
			
		},
	})
	
</script>
<script>

	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.jmdp').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
	
	
	//监听屏幕滚动 侧边栏事件
	contRightNav();
	$(window).scroll(function(){
		contRightNav();
	});
	$(window).resize(function(){
		contRightNav();
	});
	//侧边栏点击事件
	$('.right-nav li').click(function(){
		let val = $(this).attr('value');
		console.log(val);
		$('body,html').animate({scrollTop: $('.'+val).offset().top},800,'easeInOutQuad');
	});

	
	
	//选择导航点击事件
	$('.nav-box ul li').click(function(e){
		var selectClass = $(this).attr('id');
		if(selectClass == 'allall'){
			$(this).siblings().children('a').removeClass('active');
			$('.all-box1').children().show();
			$('.right-nav').fadeIn(300);
		}else{
			if($(e.target).hasClass('active')){
				return false;
			}
			$(this).siblings().children('a').removeClass('active');
			$(this).children('a').addClass('active');
			$('.all-box1').children().hide();
			$('.all-box1').children('.'+selectClass).fadeIn(200);
			$('.right-nav').fadeOut(300);
		}
	});
	
	
	
	
	//顶部轮播
	var bannerSwiper = new Swiper ('.swiper-banner', {
    loop: true, // 循环模式选项
		autoplay: {
			disableOnInteraction: false,
			delay: 3000,
		},
  });
  
  //中间轮播
  var middleSwiper = new Swiper ('.swiper-middle', {
    loop: true, // 循环模式选项
		autoplay: {
			disableOnInteraction: false,
			delay: 3000,
		},
  });
  
  //底部轮播
  var bottomSwiper = new Swiper ('.swiper-bottom', {
    loop: true, // 循环模式选项
		autoplay: {
			disableOnInteraction: false,
			delay: 3000,
		},
  });
  
 
 
 
	//获取.right-nav 到顶部的距离
 	function contRightNav(){
	 	let rightNavTop = $(window).scrollTop();
		let viewHeight = $(window).height();
		//.right-nav 的高度 605px
		let rightNavTopWhite = (viewHeight - 605)/2;		
		if($(window).scrollTop()<=634){									//.all-box1顶部  到  html顶部的距离  634px
			rightNavTop = 490;														//.all-box1顶部  到 .containe顶部的距离   490px
		}else{																					
			rightNavTop = $(window).scrollTop() - 144 + rightNavTopWhite;			//.containe顶部  到  html顶部的距离  144px
		}
		$('.right-nav').stop().animate({top: rightNavTop},400,'easeInOutQuad');
	}

	
</script>