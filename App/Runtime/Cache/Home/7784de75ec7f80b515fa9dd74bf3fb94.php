<?php if (!defined('THINK_PATH')) exit();?>		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
	
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/cyq.css"/>
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

		<!--弹窗-->
		<div id="tanchuang"></div>

		<!--内容-->
		<div class="container" id="content" v-cloak>
			<!--banner-->
			<div class="banner-box">
				<div class="swiper-banner">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide" v-for="item in bannerimg"><a :href="item.jump"><img :src="item.src"/></a></div>
			    </div>
			    <div class="swiper-pagination"></div>
			  </div>
			  
			  <div class="btn-box">
			  	<a href="javascript:;" class="sign-in" @click="qiandao" v-if="isqiandao == 0"><img src="/fxpc/Public/Home/img/cyq/qiandao-icon1.png" />签到 +1</a>
			  	<a class="sign-ined" v-else><img src="/fxpc/Public/Home/img/cyq/qiandao-icon2.png" />已签到</a>
			  	<a href="javascript:;"><img src="/fxpc/Public/Home/img/cyq/new-icon2.png" />发布新贴</a>
			  </div>
			  <div class="hot-box">
			  	<div class="title"><img src="/fxpc/Public/Home/img/cyq/hot-icon.png"/>热门话题</div>
			  	<ul class="huati-box">
			  		<li v-for="item in hothuati"><a :href="item.src">{{item.name}}</a></li>
			  	</ul>
			  	<a href="javascript:;"><img src="/fxpc/Public/Home/img/cyq/replace-btn.png" />换一批</a>
			  </div>
			</div>
			
			<!--创圈推荐-->
			<div class="recommend">
				<div class="title">
					<div class="tiezi-infor">
						<div class="today">今日发帖：<span>{{todayNum}}</span></div>
						<div class="today">昨日发帖：<span>{{yestdayNum}}</span></div>
						<div class="today">帖子总数：<span>{{allNum}}</span></div>
					</div>
				</div>
				
				<ul>
					<li v-for="item in cqtj">
						<img :src="item.imgsrc"/>
						<h5><a :href="item.src">{{item.title}}</a></h5>
						<p><a :href="item.authorsrc">{{item.nickname}}</a><span>发布于 {{item.time}}</span></p>
						<a :href="item.src">查看详情</a>
					</li>
				</ul>
				
				<div class="long-list"><img src="/fxpc/Public/Home/img/cyq/long-list.png" /></div>
			</div>
			
			<!--帖子部分-->
			<div class="tiezi-box">
				<!--帖子左侧部分-->
				<div class="tiezi-box-l">
					<div class="btn-box">
						<a href="javscript:;">全部帖子</a>
						<a href="javscript:;">最新主贴</a>
						<a href="javscript:;">创圈精华</a>
					</div>
					
					<ul>
						<li v-for="item in tiezi">
							<img :src="item.headimg"/>
							<div class="tiezi-describe">
								<h5><a :href="item.src">{{item.title}}</a></h5>
								<span class="user-name"><a :href="item.authorsrc">{{item.author}}</a></span>
								<span class="time">发布于 {{item.time}}</span>
								<span class="look">查看：<a>{{item.looknum}}</a></span>
								<span>|</span>
								<span class="reply">回复：<a>{{item.replaynum}}</a></span>
							</div>
							<a href="javascript:;" class="tiezi-more"><img src="/fxpc/Public/Home/img/cyq/tiezi-list-btn.png" /></a>
						</li>
					</ul>
					
					<div class="page"></div>
				</div>
				
				<!--帖子右侧部分-->
				<div class="tiezi-box-r">
					<!--热帖排行-->
					<div class="hot-sort">
						<div class="title"><img src="/fxpc/Public/Home/img/cyq/hot-icon.png" />热帖排行</div>
						<ul>
							<li v-for="item in hottiezi">
								<p>{{item.num}}.</p>
								<a :href="item.src">
									<h5>{{item.title}}</h5>
									<span>查看：</span>
									<span>{{item.look}}</span>
									<span>回复：</span>
									<span>{{item.replay}}</span>
									<span>赞：</span>
									<span>{{item.good}}</span>
								</a>
							</li>
						</ul>
						<div class="short-list"><img src="/fxpc/Public/Home/img/cyq/short-list.png" /></div>
					</div>
				
					<!--创圈之星-->
					<div class="cq-star">
						<div class="title"><img src="/fxpc/Public/Home/img/cyq/star-icon.png" />创圈之星</div>
						<ul>
							<li v-for="item in cqzx">
								<div class="header-box"><img :src="item.headimg" /><div class="product"></div></div>
								<a :href="item.usersrc">{{item.nickname}}</a>
								<p>发帖数量：<span>{{item.num}}</span></p>
							</li>
						</ul>
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

<script src="/fxpc/Public/Home/js/swiper.js"></script>
<script src="/fxpc/Public/Home/js/jquery.pagination.js"></script>
<script src="/fxpc/Public/Home/js/vue.js" ></script>
<script>
	var vm = new Vue({
  	el: '#content',
  	data:{
  		isqiandao: 0,
  		todayNum: 155,
  		yestdayNum: 564,
  		allNum: 45124513,
  		//轮播图
  		bannerimg:[
  			{ src:'img/cyq/banner1.png', jump:'javascript:;'},
  			{ src:'img/cyq/banner2.png', jump:'javascript:;'},
  		],
  		//热门话题
  		hothuati:[
  			
  		],
  		//创圈推荐
  		cqtj:[
  			
  		],
  		//帖子列表
  		tiezi:[
  			
  		],
  		//热帖排行
  		hottiezi:[
  			
  		],
  		//创圈之星
  		cqzx:[
  			
  		]
  	},
  	
  	created:function(){
  		var self = this;
  		$.get("<?php echo U('Cyq/getCard');?>",function(data){
  			console.log(data);
  			var data = eval("(" + data + ")");
  			self.tiezi = data.tiezi;
  			self.cqzx = data.cqzx;
  			self.hottiezi = data.hottiezi;
  			self.cqtj = data.cqtj;
  			self.hothuati = data.hothuati;
  		})
  	},
  	
  	methods:{
  		qiandao: function(){
  			this.isqiandao = 1;
  			this.tanchuang('签到成功')
  		},
  		tanchuang: function(content){
  			$('#tanchuang').html(content).fadeIn(1000).fadeOut(1000);
  		}
  	}
  });
	
</script>
<script>
	$('.nav ul li').siblings().removeClass('active');
	$('.cyq').addClass('active');
	//头部导航选择
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$('.cyq').addClass('active');
	// });
	
	
	 //分页插件
	$('.page').pagination({
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
		homePage:'首页',
		endPage:'末页',
		isHide:true,
		jump:false,
		callback:function(apis){
			//跳转要做的事件
			
		}
	});	
	
	
	//顶部轮播
	var bannerSwiper = new Swiper ('.swiper-banner', {
    loop: true, // 循环模式选项
		autoplay: {
			disableOnInteraction: false,
			delay: 3000,
		},
		pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>