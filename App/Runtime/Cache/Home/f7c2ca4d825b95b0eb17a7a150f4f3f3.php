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
			[v-cloak]{ visibility: hidden; }
			
			/*banner样式*/
			#content{ width: 1200px; margin: 20px auto; position: relative; }
			.banner-box{ width: 100%; height: 400px; position: relative; }
			.banner-box .big-bg{ width: 1920px; height: 100%; padding-top: 120px; box-sizing: border-box; text-align: center; background: url(/fxpc/Public/Home/img/cyds/banner.png); position: absolute; top: 0; left: -360px; z-index: -1; }
			.banner-box h1{ font-size: 56px; font-weight: normal; color: #323232; }
			.banner-box p{ font-size: 28px; color: #12c173; margin-top: 15px; }
			
			/*ceo样式*/
			.ceo-box{ width: 1200px; height: 525px; background: #fff; margin: 20px 0; border-radius: 5px; overflow: hidden; padding-top: 40px; box-sizing: border-box; }
			.ceo-box>h3{ font-size: 36px; color: #323232; margin-bottom: 70px; text-align: center; }
			.ceo-box .ceo-header, .ceo-box .ceo-describe{ float: left; }
			.ceo-box .ceo-header{ width: 330px; height: 330px; margin: 0 40px; }
			.ceo-box .ceo-describe{ width: 790px; padding: 0 40px 0 10px; box-sizing: border-box; text-align: justify; line-height: 32px; }
			.ceo-box .ceo-describe h3{ font-size: 20px; color: #323232; line-height: 35px; }
			.ceo-box .ceo-describe h5{ font-size: 20px; color: #12C173; line-height: 35px; }
			.ceo-box .ceo-describe p{ width: 100%; font-size: 16px; color: #848484; }
			.ceo-box .ceo-describe div{ width: auto; height: 24px; color: #323232; margin-top: 20px; }
			.ceo-box .ceo-describe div img{ float: left; margin-right: 30px; }
			.ceo-box .ceo-describe div span{ display: inline-block; line-height: 24px; }
			
			
			/*导师样式*/
			.daoshi-box{ width: 1200px; position: relative; background: #fff; margin-top: 20px; padding-top: 25px; }
			
			.daoshi-box-t .daoshi-title{ width: 142px; height: 55px; margin: 0 auto; font-size: 35px; color: #323232; background: url(/fxpc/Public/Home/img/cyds/ds-border-bottom.png)no-repeat bottom; }
			.daoshi-box-t .daoshi-select-box{ width: 100%; padding: 0 20px; box-sizing: border-box; }
			.daoshi-box-t .select-profession{ width: 100%; height: 60px; margin-top: 38px; background: url(img/cyds/line.png)no-repeat bottom; }
			.select-profession ul, .select-profession ul li, .select-profession span, .select-profession>a{ float: left; }
			.select-profession span{ line-height: 34px; }
			.select-profession a.select-all{ font-size: 14px; color: #747474; line-height: 34px; padding-left: 18px; background: url(/fxpc/Public/Home/img/cyds/all-icon.png)no-repeat 0 11px; margin: 0 10px 0 20px; }
			.select-profession a.select-all:hover{ color: #12C173; }
			.select-profession ul, .select-sort ul{ padding-top: 3px; }
			.select-profession ul li, .select-sort ul li{ float: left; border-radius: 14px; margin-left: 8px; }
			.select-profession ul li a, .select-sort ul li a{ float: left; color: #747474; font-size: 14px; padding: 3px 11px; border-radius: 14px; border: 1px solid #fff; }
			.select-profession ul li a.active, .select-sort ul li a.active{ border-color: #12C173; color: #12C173; }
			.select-profession ul li a:hover, .select-sort ul li a:hover{ border-color: #12C173; color: #12C173; }
			.daoshi-box-t .input-box{ float: right; width: 276px; height: 34px; box-sizing: border-box; position: relative; }
			.daoshi-box-t .input-box input{ width: 252px; height: 32px; font-size: 12px; border: 1px solid #dcdcdc; border-radius: 16px; padding-left: 22px; transition: .3s; }
			.daoshi-box-t .input-box input::-webkit-input-placeholder{ color: #b5b5b5; }
			.daoshi-box-t .input-box input::-ms-input-placeholder{ color: #b5b5b5; }
			.daoshi-box-t .input-box input::-moz-placeholder{ color: #b5b5b5; }
			.daoshi-box-t .input-box a{ width: 20px; height: 20px; position: absolute; right: 10px; top: 7px; background: url(/fxpc/Public/Home/img/index/search-btn.png)no-repeat;  }
			.daoshi-box-t .input-box input:focus{ outline: none; border-color: #12bd61; }
			.daoshi-box-t .select-sort{ width: 100%; height: 60px; margin-top: 10px; background: url(/fxpc/Public/Home/img/cyds/line.png)no-repeat bottom; padding-top: 5px; box-sizing: border-box; }
			.daoshi-box-t .select-profession,.daoshi-box-t .select-sort{ background-size: 1160px; }
			.select-sort span, .select-sort ul{ float: left; }
			.select-sort span{ line-height: 30px; }
			
			.daoshi-box-b{ padding: 0 5px; margin: 30px 0; box-sizing: border-box; overflow: hidden; }
			.daoshi-box-b li{ width: 220px; height: 340px; float: left; border-radius: 5px; text-align: center; margin: 0 0 20px 15px; border: 1px solid #f2f2f2; transition: .2s; }
			.daoshi-box-b li:hover{ box-shadow: 0 0 10px #f2f2f2; }
			.daoshi-box-b li:hover .daoshi-describe{ top: 170px; }
			.daoshi-item .daoshi-header{ width: 220px; height: 230px; overflow: hidden; position: relative; }
			.daoshi-item .daoshi-header .daoshi-describe{ width: 100%; height: 60px; background: rgba(18,193,115,.8); line-height: 20px; font-size: 12px; position: absolute; top: 100%; transition: .4s; color: #fff; text-align: center; }
			.daoshi-item .daoshi-header .daoshi-describe>p:first-child{ margin-top: 11px; }
			.daoshi-item .daoshi-header span.jianjian{ position: absolute; bottom: 0; left: 50%; margin-left: -8px; width: 0; height: 0; border-width: 0 8px 6px 8px; border-style: solid; border-color: #fff transparent; }
			.daoshi-item h1{ font-size: 18px; color: #323232; margin-top: 6px; }
			.daoshi-item h3{ font-size: 14px; color: #12C173; }
			.daoshi-item .daoshi-detail p{ float: left; font-size: 12px; width: 50%; padding-left: 29px; box-sizing: border-box; color: #323232; text-align: left; margin: 6px 0; }
			.daoshi-item p.zili, .daoshi-item p.address{ padding-left: 38px; }
			.daoshi-item p.age{ background: url(/fxpc/Public/Home/img/cyds/daoshi-nl.png)no-repeat 12px 0; }
			.daoshi-item p.zili{ background: url(/fxpc/Public/Home/img/cyds/daoshi-zl.png)no-repeat 21px 0; }
			.daoshi-item p.obj{ background: url(/fxpc/Public/Home/img/cyds/daoshi-xm.png)no-repeat 12px 0; }
			.daoshi-item p.address{ background: url(/fxpc/Public/Home/img/cyds/daoshi-dz.png)no-repeat 21px 0; }
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
		<div id="content" v-cloak>
			<!--banner-->
			<div class="banner-box">
				<div class="big-bg">
					<h1>创业导师</h1>
					<p>帮助你创业·并爱上返乡创业</p>
				</div>
				
			</div>
			
			<!--CEO部分-->
			<div class="ceo-box">
				<h3>CEO&amp;返乡创始人</h3>
				<div class="ceo-header"><img src="/fxpc/Public/Home/img/cyds/ceo-header.png" /></div>
				<div class="ceo-describe">
					<h3>杨士乐</h3>
					<h5>返乡创业网创始人</h5>
					<p>返乡创业网创始人杨士乐,连续创业者,曾是上海支付宝口碑最早的服务商,中国首家共享图书联合创始人,也曾任职过饿了么,杨士乐看到了返乡创业的趋势以及二线以下城市甚至县镇的发展趋势,决心帮助更多人返乡创业,在创立平台之初走访了近百位返乡创业者,他们返乡回到自己的城市之后大部分选择了开店创业,而开店的创业者里绝大多数人选择了加盟这一方式。而返乡创业人返乡的理由大致相同,父母渐渐老去需要有人照顾,孩子已到了小学或初中也需要自己在身边教育。</p>
					<div><img src="/fxpc/Public/Home/img/cyds/email.png" /><span>1008611@fanxiang.com</span></div>
					<div><img src="/fxpc/Public/Home/img/cyds/tel.png" /><span>+ 12345671234</span></div>
				</div>
			</div>
		
		
			<!--导师部分-->
			<div class="daoshi-box">
				<!--导师部分上部-->
				<div class="daoshi-box-t">
					<div class="daoshi-title">创业导师</div>
					<div class="daoshi-select-box">
						<div class="select-profession">
							<span>选择：</span>
							<a class="select-all" href="javascript:;" @click="selectAll">全部</a>
							<ul>
								<li v-for="item in profession" @click="selectProfession"><a href="javascript:;">{{item}}</a></li>
							</ul>
							<div class="input-box">
								<input type="text" placeholder="请输入你要查找的导师" />
								<a href="javascript:;"></a>
							</div>
						</div>
						<div class="select-sort">
							<span>选择：</span>
							<ul>
								<li v-for="(item, index) in sorts" :data-index="index"><a href="javascript:;" @click="selectSort">{{item}}</a></li>
							</ul>
						</div>
					</div>
				</div>
			
				<!--导师部分下部-->
				<ul class="daoshi-box-b">
					<li class="daoshi-item" v-for="item in daoshis" v-if="oneprofession == '' ? true : item.hyname ==  oneprofession"><a target="_blank" :href="daoshiUrl+'#name'+item.name" append>
						<div class="daoshi-header">
							<img style="width:220px;height:230px" :src="item.headimg" />
							<div class="daoshi-describe">
								<p>{{item.jieshao}}</p>
								<!-- <p>{{item.describe}}</p> -->
							</div>
							<span class="jianjian"></span>
						</div>
						
						<div class="daoshi-detail">
							<h1>{{item.name}}</h1>
							<h3>{{item.hyname}}</h3>
							<p class="age">年龄：<span>{{item.old}}</span></p>
							<p class="zili">资历：<span>{{item.zizhi}}</span></p>
							<p class="obj">项目：<span>{{item.xiangmu}}</span></p>
							<p class="address">地址：<span>{{item.are}}</span></p>
						</div>
					</a></li>
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

<script src="/fxpc/Public/Home/js/vue.js"></script>
<script>	
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.cyds').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
	
	var vm = new Vue({
		el: '#content',
		data: {
			oneprofession: '',
			daoshiUrl: 'daoshi-detail.html',
			profession: {
				
			},
			sorts:[
				'默认排序', '咨询最多',
			],
			daoshis:[

			],
			
			normalsort: '',
		},
		
		created:function(){
			var self = this;
			$.get("<?php echo U('Cyds/getTutor');?>",function(data){
				//console.log(data);
				var data = eval("("+data+")")
				//console.log(data)
				self.daoshis = data.daoshis;
				self.profession = data.profession;
			})
		},

		mounted: function(){
			this.copydaoshis();
			console.log(this.normalsort);
		},
		
		methods: {
			selectProfession: function(e){
				$(e.target).parent().siblings().children('a').removeClass('active');
				$(e.target).addClass('active');
				this.oneprofession = $(e.target).html();
			},
			copydaoshis: function(){
				this.normalsort = this.daoshis;
			},
			
			selectAll: function(){
				$('.select-profession li a').removeClass('active');
				this.oneprofession = '';
			},
			
			selectSort: function(e){
				if($(e.target).parent().data('index') == 0){
					this.daoshis = this.normalsort;
				}else if($(e.target).parent().data('index') == 1){
					this.daoshis.sort(this.paixu('consultnum'));
				}
				
			},
			
			paixu: function(pro){
				return function(a,b){
					var val1 = a[pro];
					var val2 = b[pro];
					return val2 - val1;
				}
			},
		}
	})
	
</script>