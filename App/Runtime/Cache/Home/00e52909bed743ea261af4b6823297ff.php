<?php if (!defined('THINK_PATH')) exit();?>		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/swiper.css"/>
	
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/index.css"/>
	</head>
	<body>
		<!--顶部-->
		
		
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
			<div class="container">
				<img src="/fxpc/Public/Home/img/index/banner-xcx.png" />
				<div class="input-group-box">
					<form>
						{__TOKEN__}
						<div class="input-group">
							<div class="pinpai"><p>意向品牌：</p><input type="text" id="pinpai" placeholder="请输入要查询的品牌" /></div>
							<div class="dizhi">
								<p>开店地址：</p>
					      <div id="target">
					        <div id="eprovinceName" class="form-group"><select></select></div>
					        <div id="ecityName" class="form-group"><select></select></div>
					        <div id="edistrictName" class="form-group"><select></select></div>
					      </div>
					      <input id="specific" placeholder="请输入要开店具体地址" />
							</div>
							<div class="lianxi"><p>联系方式：</p><input type="text" id="jsfs" placeholder="请输入微信号/手机号/邮箱" /></div>
						</div>
						
						<div class="zhenduan">
							<label><input type="button" id="but" value="开始诊断"></label>
							<p>已有<span>1314</span>位用户成功诊断</p>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!--一站式返乡创业平台-->
		<div class="pingtai">
			<div class="container">
				<div class="text-box">
					<img src="/fxpc/Public/Home/img/index/pingtai-title.png"/>
					<a class="more" href="javascript:;"><img src="/fxpc/Public/Home/img/index/more.png" /></a>
					<p>返乡创业集<span>· 导师指导 · 加盟点评 · 加盟诊断 · 严选品牌</span>  于一体打造全新模式，不仅有优秀创业文章供你查看还有众多优秀导师指导。</p>
					<h6>ONE STOP HOME BUSINESS PLATFORM</h6>
				</div>
				
				<div class="content-box">
					<div class="content">
						<h3>上海创扬信息技术有限公司</h3>
						<p>上海创扬信息技术有限公司致力于成为中国最新锐的媒体运营。及文化产品整合机构，自成立以来，凭借良好的项目运营能力，一直服务于大众人群以及各种品牌。</p>
						<img src="/fxpc/Public/Home/img/index/pingtai.png" />
					</div>
				</div>
			</div>
		</div>
		
		
		
			<!--加盟点评-->
			<div class="dianping">
				<div class="container">
					<div class="text-box">
						<img src="/fxpc/Public/Home/img/index/dianping-title.png" />
						<a class="more" href="javacsript:;"><img src="/fxpc/Public/Home/img/index/more.png" /></a>
						<p>真实加盟者点评，还原品牌真实面目！</p>
						<h6>COMMENT ON JOINING</h6>
					</div>
					
					<div class="content">
						<div class="swiper-container">
			        		<div class="swiper-button-prev"></div>
			        		<div class="swiper-button-next"></div>
			        		<div class="swiper-wrapper">


			        		<!--第一个点评-->
								<?php if(is_array($_review)): foreach($_review as $key=>$v): ?><div class="swiper-slide">
			        				<div class="dianping-detail">
			        					<div class="dianping-people">
			        						<div class="people-header"><img src="img/index/header-img.png" /></div>
			        						<p class="people-name"><?php echo ($v["pinpainame"]); ?></p>
			        						<div class="dianpinged">
			        							<p class="dianping-pinpai"><?php echo ($v["pinpainame"]); ?></p>
			        							<div class="star-box">
			        								<div class="noactive"></div>
			        								<div class="active"></div>
			        								<ul class="click-block">
			        									<li><a href="javascript:;"></a></li>
			        									<li><a href="javascript:;"></a></li>
			        									<li><a href="javascript:;"></a></li>
			        									<li><a href="javascript:;"></a></li>
			        									<li><a href="javascript:;"></a></li>
			        								</ul>
			        							</div>
			        						</div>
			        					</div>
			        					<div class="dianping-text">
			        						<p><a href="javascript:;">签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完合同你想让他们帮你干什么都是要钱跟抢没区别，之前承诺过得开店大力扶持，老师亲自上门指导签合同前你是大爷什么都为你着想。签完合同之后交了钱哈哈你自己看着办吧 承诺你7万开店那是在做梦，反正签完合同你想让他们帮你干什么都是要钱跟抢没区别，之前承诺过得开店大力扶持，老师亲自上门指导</a></p>
			        					</div>
			        				</div>
			        	
			        				<div class="dianping-img"><img style="width:607px;height:267px" src="<?php echo ($v["imglist"]); ?>" /></div>
			        			</div><?php endforeach; endif; ?>

			        		</div>
			        		<div class="swiper-pagination"></div>
			    		</div>
					</div>
				</div>
			</div>
			
			<!--创业导师-->
			<div class="daoshi">
				<div class="container">
					<div class="text-box">
						<img src="/fxpc/Public/Home/img/index/daoshi-title.png"/>
						<a class="more" href="javacsript:;"><img src="/fxpc/Public/Home/img/index/more.png" /></a>
						<p>授人以鱼不如授人以渔，大量创业导师提供专业创业指导</p>
						<h6>ENTERPRISE TUTOR</h6>
					</div>
					
					<div class="content-box">
						<div class="swiper-daoshi-prev"></div>
			     		<div class="swiper-daoshi-next"></div>
						<div class="swiper-daoshi">
					    	<div class="swiper-wrapper">
					    		<!--年康-->
					    		<?php if(is_array($_tutor)): foreach($_tutor as $key=>$v): ?><div class="swiper-slide niankang">
					    			<div class="daoshi-di"></div>
					    			<div class="daoshi-hover">
										<div class="daoshi-box">
											<div class="daoshi-header">
												<img style="width:202px;height:202px" src="<?php echo ($v["headimg"]); ?>" />
												<p>创业导师<?php echo ($v["name"]); ?></p>
											</div>
											<div class="daoshi-describe">
												<p><?php echo ($v["xiangmuxiangqing"]); ?></p>
											</div>
											<div class="daoshi-detail">
												<div>
													<p class="nl">年龄：<?php echo ($v["old"]); ?>岁</p>
													<p class="zl">资历：<?php echo ($v["zizhi"]); ?>年</p>
												</div>
												<div>
													<p class="xm">项目：<?php echo ($v["xiangmu"]); ?></p>
													<p class="dz">地址：<?php echo ($v["are"]); ?></p>
												</div>
											</div>
										</div>
					      			</div>
					    		</div><?php endforeach; endif; ?>

					    		<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--创业圈-->
			<div class="quan">
			<div class="container">
				<div class="text-box">
					<img src="/fxpc/Public/Home/img/index/quan-title.png"/>
					<a class="more" href="javacsript:;"><img src="/fxpc/Public/Home/img/index/more.png" /></a>
					<h6>BUSINESS CIRCLE</h6>
					<p>全民参与-创业交流社区</p>
				</div>
				<div class="content-box">
					
					<ul class="container">
						<?php if(is_array($_card)): foreach($_card as $key=>$v): ?><li>
							<div class="quan-imgbox"><img style="width:100px;height:100px" src="<?php echo ($v["headimg"]); ?>" /></div>
							<a href="#"><?php echo ($v["title"]); ?></a>
							<p><img src="/fxpc/Public/Home/img/index/quan-plicon.png" /><span>发帖人：叮当你个猫</span><?php echo ($v["time"]); ?></p>
							<span>当别的毕业生还在为逝去的大学时光与再也无法追回的青川而感慨伤怀......</span>
						</li><?php endforeach; endif; ?>
					</ul>
					<a href="javascript:;" class="quan-click" title="点击跳转创业圈"></a>
				</div>
			</div>
		</div>

		<!--vue内容-->
		<div id="content" v-cloak>
			<!--严选项目-->
			<div class="yanxuan">
			<div class="container">
				<div class="text-box">
					<img src="/fxpc/Public/Home/img/index/yanxuan-title.png"/>
					<a class="more" href="yxxm.html"><img src="/fxpc/Public/Home/img/index/more.png" /></a>
					<p>筛选优质项目，让好的品牌脱颖而出</p>
					<h6>STRICT SELECTION OF PROJECTS</h6>
				</div>
				<div class="content-box">
					<ul class="container">
						<li v-for="yxxm in yxxm"><a :href="yxxm.jump"><img :src="yxxm.img" /></a></li>
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

<script src="/fxpc/Public/Home/js/distpicker.data.js"></script>
<script src="/fxpc/Public/Home/js/swiper.js"></script>
<script src="/fxpc/Public/Home/js/vue.js"></script>
<script>
	
	var vm = new Vue({
		el: '#content',
		data: {
			yxxm: [ 
				
			]
		},

		created:function(){
			var self = this;
			$.get("<?php echo U('Home/index');?>",function(data){
				//console.log(data)
				var data = eval("("+data+")");
				console.log(data)
				self.yxxm = data.yxxm;
				
			})
			
		},

		methods: {
			
		},
	});
	
</script>
<script>
	//选择地区插件
	$('#target').distpicker({
		autoSelect: false
	});
	
	//头部导航选择
	$('.nav ul li').siblings().removeClass('active');
	$('.index').addClass('active');
	// $('.nav ul li').click(function(){
	// 	$(this).siblings().removeClass('active');
	// 	$(this).addClass('active');
	// });
	

	
	//点评轮播
	var mySwiper = new Swiper ('.swiper-container', {
    loop: true, // 循环模式选项
    pagination: {
      el: '.swiper-pagination',
      clickable :true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
  //导师轮播
  var swiperDaoshi = new Swiper('.swiper-daoshi', {
  	loop: true, // 循环模式选项
    slidesPerView: 3,
    spaceBetween: 5,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-daoshi-next',
      prevEl: '.swiper-daoshi-prev',
    },
  });
  
  
//获取页面网址内容
//function pageName()
//{
//    var a = location.href;
//    var b = a.split("/");
//    var c = b.slice(b.length-1, b.length).toString(String).split(".");
//    console.log(a,b,c,c.slice(0, 1));
//    return console.log(c.slice(0, 1));
//}
//pageName();

$('#but').on('click',function(){
	//console.log($('#target option:selected').val());
	var eprovinceName = $('#eprovinceName option:selected').val();
	var ecityName = $('#ecityName option:selected').val();
	var edistrictName = $('#edistrictName option:selected').val();
	var address = eprovinceName + ecityName + edistrictName +$('#specific').val();
	console.log(address);
	var pinpai = $('#pinpai').val();
	var contact = $('#jsfs').val();
	var uid = "<?php echo ($_SESSION['user']['id']); ?>";
	$.ajax({
		url:"<?php echo U('Index/diagnosis');?>",
		data:{pinpai:pinpai,contact:contact,address:address,uid:uid},
		type:"post",
		dataType:"json",
		success:function(data){
			if (data.status == 0) {
				alert(data.error);
			}
		}
	})
})
</script>