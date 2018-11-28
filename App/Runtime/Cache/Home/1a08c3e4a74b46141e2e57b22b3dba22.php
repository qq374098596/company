<?php if (!defined('THINK_PATH')) exit();?>
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
	
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/cygs.css"/>
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

		<!--视口-->
		<div id="app" v-cloak>
			<!--轮播图-->
			<div class="swiper-banner">
		    <div class="swiper-wrapper">
		    	<div class="swiper-slide" v-for="item in banner"><a :href="item.jump"><img :src="item.img"/></a></div>
		    </div>
		    <div class="swiper-pagination"></div>
		  </div>
			<!--内容-->
			<div class="story-box">
			<div class="title"><img src="/fxpc/Public/Home/img/cygs/story-title.png" /></div>
			<ul class="stories">
				<li v-for="item in gushi">
					<div class="story-l">
						<img style="width:180px;height:140px" :src="item.banner"/>
						<h5>{{item.title}}</h5>
						<p v-html="item.gushi"></p>
						<a :href="item.src"><img src="/fxpc/Public/Home/img/cygs/more-btn.png" /></a>
					</div>
					<div class="story-r">
						<span></span>	
						<h1>{{item.time.slice(5,10)}}</h1>
						<p>-{{item.time.slice(0,4)}}</p>
					</div>
				</li>
			</ul>
			
			<div class="page"></div>
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
<script src="/fxpc/Public/Home/js/vue.js"></script>
<script>
	var vm = new Vue({
		el: '#app',
		data: {
			//轮播图
			banner: [
				{ jump: 'javascript:;', img: 'img/cygs/banner1.png' },
				{ jump: 'javascript:;', img: 'img/jmdp/banner1.png' },
				{ jump: 'javascript:;', img: 'img/jmdp/middle-banner1.png' },
				{ jump: 'javascript:;', img: 'img/jmdp/bottom-banner1.png' },
			],
			//创业故事
			gushi:[
				{ img: 'img/cygs/gushi1.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '2018-10-28', describe: '<div style="color:red">111</div>'  },
				{ img: 'img/cygs/gushi2.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi3.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi4.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi5.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi6.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi7.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi8.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi9.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  },
				{ img: 'img/cygs/gushi10.png', title: '不要问怎么做，要问为什么做？', src: 'javascript:;', day: '10-28', year: '2018', describe: '当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀而感慨伤怀当别的毕业生还在为逝时光与再也无法追业......'  }
			]
		},

		created:function(){
			var self = this;
			$.get("<?php echo U('Cygs/getStory');?>",function(data){
				console.log(data);
				var data = eval("("+data+")");
				self.gushi = data.gushi;
			})
		},

		methods: {
			
		}
	});
</script>
<script>
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.cygs').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
	
	//轮播图
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
</script>