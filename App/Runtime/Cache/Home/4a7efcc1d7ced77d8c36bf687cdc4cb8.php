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
			[v-cloak]{ display: none; }
			p,span,div{ cursor: default; }
			.swiper-banner{ width: 1200px; height: 380px; margin: 20px auto; overflow: hidden; position: relative; }
			.swiper-banner img{ width: 100%; }
			.swiper-banner .swiper-pagination{ width: 100%; left: 0; bottom: 40px; }
			.swiper-banner .swiper-pagination span{ width: 12px; height: 12px; border-radius: 0; }
			.swiper-banner .swiper-pagination-bullet{ opacity: .2; }
			.swiper-banner .swiper-pagination-bullet-active{ opacity: 1; }
			
			
			/*内容部分样式*/
			#content{ width: 1200px; margin: 0 auto; background: #fff; border-radius: 10px; }
			
			/*选择部分样式*/
			.select-box{ width: 100%; height: 240px; padding: 0 40px; box-sizing: border-box; }		
			.select-box>div{ width: 100%; height: 80px; background: url(/fxpc/Public/Home/img/yxxm/line.png)no-repeat bottom; padding-left: 15px; box-sizing: border-box; }
			.select-box .show-select span{ line-height: 80px; font-size: 18px; }
			.select-box .show-select>a{ padding: 2px 22px; border-radius: 21px; font-size: 18px; line-height: 18px; color: #12C173; border: 1px solid #12C173; margin-left: 20px; }
			.select-box .show-select>a:nth-child(2){ padding: 2px 12px; }
			.select-box .show-select>a.init{ border-color: #fe9700; color: #fe9700; }
			.select-box .show-select .input-box{ float: right; width: 276px; height: 80px; padding: 23px 0; box-sizing: border-box; position: relative; right: 20px; }
			.select-box .show-select .input-box input{ width: 252px; height: 32px; font-size: 12px; border: 1px solid #dcdcdc; border-radius: 16px; padding-left: 22px; transition: .3s; }
			.select-box .show-select .input-box input::-webkit-input-placeholder{ color: #b5b5b5; }
			.select-box .show-select .input-box input::-ms-input-placeholder{ color: #b5b5b5; }
			.select-box .show-select .input-box input::-moz-placeholder{ color: #b5b5b5; }
			.select-box .show-select .input-box a{ width: 20px; height: 20px; position: absolute; right: 10px; top: 30px; background: url(/fxpc/Public/Home/img/index/search-btn.png)no-repeat;  }
			.select-box .show-select .input-box input:focus{ outline: none; border-color: #12bd61; }
			
			.select-profession span{ font-size: 14px; line-height: 80px; color: #747474; float: left; }
			.select-profession ul{ float: left; padding: 26px 0 26px 15px; }
			.select-profession ul li{ float: left; border-radius: 14px; margin-left: 5px; }
			.select-profession ul li a{ float: left; color: #747474; font-size: 14px; padding: 3px 18px; border-radius: 14px; border: 1px solid #fff; }
			.select-profession ul li a.active{ border-color: #12C173; color: #12C173; }
			.select-profession ul li a:hover{ border-color: #12C173; color: #12C173; }
			.select-profession>a{ float: left; line-height: 20px; padding-left: 20px; margin: 30px 0 30px 10px; background: url(/fxpc/Public/Home/img/yxxm/all-icon.png)no-repeat 5px; font-size: 14px; color: #747474; }
			
			.select-box .select-sort{ background: none; }
			.select-sort span{ font-size: 14px; line-height: 80px; color: #747474; float: left; }
			.select-sort ul{ float: left; padding: 26px 0 26px 15px; }
			.select-sort ul li{ float: left; margin-left: 10px; }
			.select-sort ul li a{ float: left; color: #747474; font-size: 14px; padding: 3px 18px; border-radius: 14px; border: 1px solid #fff; }
			.select-sort ul li a.active{ border-color: #12C173; color: #12C173; }
			.select-sort ul li a:hover{ border-color: #12C173; color: #12C173; }
			
			/*严选title样式*/
			.yx-title{ width: 1200px; height: 66px; margin-top: 28px; position: relative; background: url(/fxpc/Public/Home/img/yxxm/yanxuan-title.png)no-repeat; background-size: 1200px 66px; }
			.yx-title a{ padding: 2px 20px 2px 30px; font-size: 18px; color: #ff4800; border: 1px solid #ff4800; border-radius: 15px; background: #fff; position: absolute; top: 15px; right: 40px; }
			.yx-title img{ position: relative; left: -10px; }
			
			/*项目盒子样式*/
			.items-box{ width: 1200px;margin: 30px 0 20px; }
			.items-box ul{ width: 100%; padding: 5px 0 30px; overflow: hidden; }
			.items-box ul li{ width: 550px; height: 360px; float: left; margin: 0 0 20px 30px; border: 1px solid #fff; transition: .2s; border-radius: 10px; overflow: hidden; }
			.items-box ul li:hover{ box-shadow: 0px 2px 9px 1px rgba(181, 181, 181, 0.25); border: solid 1px #21c47c;}
			.items-box ul li:hover .item-left{ background: #21c47c;}
			.items-box ul li:hover .item-left a{ color: #fff; border-color: #fff; }
			.items-box ul li:hover .item-left h5, .items-box ul li:hover .item-left p{ color: #fff; }
			.items-box ul li .item-left{ width: 200px; height: 100%; float: left; background: #f6f7f7; transition: .2s; }
			.items-box ul li .item-left .header-box{ width: 162px; height: 162px; margin: 30px auto 20px; text-align: center; background: url(/fxpc/Public/Home/img/yxxm/header-bg.png)no-repeat; background-size: 162px 162px; }
			.items-box ul li .item-left .header-box img{ width: 132px; height: 132px; margin-top: 15px; }
			.items-box ul li .item-left h5{ text-align: center; font-size: 18px; font-weight: normal; color: #424242; transition: .2s; }
			.items-box ul li .item-left p{ font-weight: lighter; text-align: center; font-size: 18px; line-height: 32px; transition: .2s; }
			.items-box ul li .item-left a{ display: block; width: 160px; padding: 19px 0; line-height: 55px; margin: 15px auto 0; transition: .2s; font-size: 18px; line-height: 18px; color: #555; border: 1px solid #555; border-radius: 28px; text-align: center; }
			
			.items-box ul li .item-right{ width: 350px; height: 100%; float: right; padding: 39px 32px; box-sizing: border-box; } 
			.items-box ul li .item-right .item-title{ width: 100%; height: 45px; font-size: 22px; font-weight: bold; position: relative; color: #424242; background: url(/fxpc/Public/Home/img/yxxm/item-title-line.png)no-repeat bottom; }
			.items-box ul li .item-right .item-title a{ width: 20px; height: 19px; position: absolute; right: 0; top: 1px; }
			.items-box .item-com{ width: 100%; margin: 23px 0 10px; float: left; }
			.items-box .star-box{ width: 154px; height: 19px; position: relative; margin-bottom: 5px; float: left; padding-left: 5px; box-sizing: border-box; }
			.items-box .noactive, .items-box .active{ position: absolute; top: 0; left: 0; }
			.items-box .noactive{ width: 154px; height: 19px; background: url(/fxpc/Public/Home/img/star1.png); }
			.items-box .active{ height: 19px; background: url(/fxpc/Public/Home/img/star2.png); }
			.items-box .item-com span{ float: right; width: 132px; text-align: center; font-size: 14px; color: #424242; }
			.items-box .item-info{ float: left; width: 100%; }
			.items-box .item-info p{ padding-left: 5px; font-size: 14px; border-bottom: 1px solid #f2f2f4; line-height: 34px; color: #6c6b6b; }
			.items-box .item-info p>a{ float: right; width: 120px; }
			.items-box .item-info p>span{ color: #424242; font-weight: bold; }
			.items-box .item-info p a>span{ color: #424242; font-weight: bold; }
			
			
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

		<!--轮播图-->
		<div class="swiper-banner">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide"><img src="img/jmdp/banner1.png"/></div>
	      <div class="swiper-slide"><img src="img/jmdp/middle-banner1.png"/></div>
	      <div class="swiper-slide"><img src="img/jmdp/bottom-banner1.png"/></div>
	    </div>
	    <div class="swiper-pagination"></div>
	  </div>
	  
	  
	  <!--内容部分-->
	  <div id="content" v-cloak>
	  	
	  	<!--选择部分-->
	  	<div class="select-box">
	  		<div class="show-select">
	  			<span>选择</span>
	  			<a v-if="oneprofession" href="javascript:;">{{oneprofession}}</a>
	  			<a v-if="onesort" href="javascript:;">{{onesort}}</a>
	  			<a class="init" v-if="oneprofession || onesort" href="javascript:;" @click="initSelect">重置</a>
	  			<div class="input-box">
						<input type="text" placeholder="请输入你要查找的品牌" />
						<a href="javascript:;"></a>
					</div>
	  		</div>
	  		
	  		<div class="select-profession">
	  			<span>行业:</span>
	  			<ul>
	  				<li @click="selectProfession" v-for="item in allprofession"><a href="javascript:;">{{item}}</a></li>
	  			</ul>
	  			<a href="javascript:;" @click="selectall">全部</a>
	  		</div>
	  		
	  		<div class="select-sort">
	  			<span>排序:</span>
	  			<ul>
	  				<li @click="selectSort" v-for="item in sorts" :data-name="item.english"><a href="javascript:;">{{item.name}}</a></li>
	  			</ul>
	  		</div>
	  	</div>
	  	
	  	
	  	<!--严选title-->
	  	<div class="yx-title">
	  		<a href="javascript:;"><img src="/fxpc/Public/Home/img/yxxm/yxdp-icon.png" />我来点评</a>
	  	</div>
	  	
	  	
	  	<!--严选项目s-->
	  	<div class="items-box">
	  		<ul>
	  			<li v-for="(item, index) in yxitems" v-if="oneprofession == '' ? true : item.hyname ==  oneprofession">
	  				<div class="item-left">
	  					<div class="header-box"><img :src="item.imgsrc" /></div>
	  					<h5>{{item.name}}</h5>
	  					<p>-{{item.hyname}}-</p>
	  					<a href="javascript:;">查看详情</a>
	  				</div>
	  				
	  				<div class="item-right">
	  					<div class="item-title">{{item.name}}<a href="javascript:;" :data-index="index" @click="islike($event)"><img v-if="item.islike" :src="likesrc.active" /><img v-else :src="likesrc.normal" /></a></div>
	  					
	  					<div class="item-com">
	  						<div class="star-box">
		    					<div class="noactive"></div>
		    					<div class="active" :style="{width:item.starlevel*22+'px'}"></div>
		    				</div>
		    				<span>{{item.compeople}}人点评</span>
	  					</div>
	  					
	  					<div class="item-info">
	  						<p>好评率：<span>{{item.goodcom}}%</span></p>
		  					<p>加盟费：<span>{{item.jiamengfei}}W</span></p>
		  					<p>加盟门店：<span>{{item.jiamengshop}}</span> <a>直营门店：<span>{{item.zhiyingshop}}</span></a></p>
		  					<p>公司：<span>{{item.company}}</span></p>
		  					<p>电话：<span>{{item.tel}}</span></p>
	  					</div>
	  				</div>
	  			</li>
	  		</ul>
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
<script src="/fxpc/Public/Home/js/vue.js"></script>
<script>
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.yxxm').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });


	var vm = new Vue({
		el: '#content',
		data: {
			oneprofession: '',
			onesort: '',
			showprofession:[
				
			],
			allprofession: {
				
			},
			sorts: [
				{ name:'时间', english: 'time' },
				{ name:'热度', english: 'hot' },
			],
			likesrc:{
				normal: '/fxpc/Public/Home/img/yxxm/like1.png',
				active: '/fxpc/Public/Home/img/yxxm/like2.png'
			},
			yxitems:[],
			
		},

		created:function(){
			var self = this;
			$.get("<?php echo U('Yxxm/getStrictly');?>",function(data){
				console.log(data)
				var data = eval("("+data+")")
				self.yxitems = data.yxitems;
				self.allprofession = data.allprofession;
				self.showprofession = data.allprofession;
			})
		},
		methods:{
			selectProfession: function(e){
				$(e.target).parent().siblings().children().removeClass('active');
				$(e.target).addClass('active');
				this.oneprofession = $(e.target).html()
			},
			selectSort: function(e){
				$(e.target).parent().siblings().children().removeClass('active');
				$(e.target).addClass('active');
				this.onesort = $(e.target).html();
				var pro = $(e.target).parent().data('name');
				console.log(pro);
				this.yxitems.sort(this.paixu(pro));
			},
			paixu: function(pro){
				return function(a,b){
					var val1 = a[pro];
					var val2 = b[pro];
					return val2 - val1;
				}
			},
			initSelect: function(){
				this.oneprofession = '';
				this.onesort = '';
				$('.select-profession li a').removeClass('active');
				$('.select-sort li a').removeClass('active');
				this.yxitems.sort(this.paixu('zonghe'));
			},
			islike: function(e){
				if('是否登陆'){
					let index = $(e.currentTarget).data('index');
					this.yxitems[index].islike = this.yxitems[index].islike == '' ? 1 : '';
				}else{
					console.log('去登陆')
				}
			},
			selectall: function(){
				this.initSelect();
			},
		}
	
	});
	
	
	
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
</script>