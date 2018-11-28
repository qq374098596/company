<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="/fxpc/Public/Home/css/public.css"/>
		<style>
			/*全样式*/
			.login-header{ width: 100%; height: 88px; background: rgba(18,193,115,.5); position: fixed; top: 0; z-index: 1; }
			.login-header .container a{ float: left; margin-top: 16px; }
			.login-header .container p{ float: right; margin-top: 30px; font-size: 28px; line-height: 28px; color: #fff; font-family: 'CTLaoSongSJ'; }
			.login-header .container p img{ float: left; margin: 2px 10px 0 0; }
			
			
			
			.big-bg{ width: 1920px; height: 876px; position: relative; left: 50%; margin-left: -960px; background: url(/fxpc/Public/Home/img/log-reg/log-bg.png)no-repeat; }
			.big-bg .login-box{ position: absolute; width: 406px; padding: 0 26px; box-sizing: border-box; height: 495px; text-align: center; right: 80px; top: 220px; background: url(/fxpc/Public/Home/img/log-reg/login-box-bg.png)no-repeat; border-radius: 10px; }
			.big-bg .login-box .show-error{ display: none; position: absolute; left: 40px; bottom: -40px; font-size: 14px; color: #12C173; }
			.big-bg .login-box .show-error img{ float: left; margin: 1px 6px; }
			.big-bg .login-box p{ font-size: 14px; color: #cecece; margin-top: 40px; }
			.big-bg .login-box h5{ font-size: 24px; color: #666; line-height: 54px; margin-bottom: 20px; background: url(/fxpc/Public/Home/img/log-reg/list-line.png)no-repeat; }
			.big-bg .login-box>div{ width: 100%; height: 46px; padding: 0 4px; box-sizing: border-box; position: relative; margin-bottom: 20px; }
			.big-bg .login-box>div>input{ width: 100%; height: 46px; font-size: 14px; border: 2px solid #f9faf9; border-radius: 6px; box-sizing: border-box; padding-left: 54px; }
			/*.big-bg .login-box>div>input::-webkit-input-placeholder{ color: #8c8c8c; }
			.big-bg .login-box>div>input::-ms-input-placeholder{ color: #8c8c8c; }
			.big-bg .login-box>div>input::-moz-placeholder{ color: #8c8c8c; }*/
			.big-bg .login-box>div input:focus{ outline: none; }
			.big-bg .login-box>div img{ position: absolute; top: 13px; left: 20px; }
			.big-bg .login-box>div:not(.user-box) img{ top: 10px; }
			.big-bg .login-box .code-box{ margin-bottom: 15px; }
			.big-bg .login-box .code-box .code-img{ width: 86px; height: 38px; position: absolute; right: 8px; left: auto; top: 4px; }
			.big-bg .login-box .code-box .code-img img{ top: 0; left: 0; }
			.big-bg .login-box .forget-box{ height: 20px; margin-bottom: 15px; }
			.big-bg .login-box .forget-box label{ float: left; font-size: 14px; color: #8c8c8c; margin-left: 10px; }
			.big-bg .login-box .forget-box a{ float: right; font-size: 14px; color: #8c8c8c; margin-right: 10px; }
			.big-bg .login-box .forget-box label input{ float: left; margin: 4px 6px 0 0; }
			.big-bg .login-box .login-btn{ background: #ff9800; border-radius: 6px; color: #fff; cursor: pointer; font-size: 20px; line-height: 46px; }
			.big-bg .login-box .go-reg{ line-height: 46px; text-align: right; font-size: 14px; color: #b0afaf; }
			.big-bg .login-box .go-reg a{ color: #12C173; }
			
		</style>
	</head>
	<body>
		<!--顶部-->
		<div class="login-header">
			<div class="container">
				<a href="<?php echo U('/');?>"><img src="/fxpc/Public/Home/img/log-reg/logo.png"/></a>
				<p><img src="/fxpc/Public/Home/img/log-reg/tel-icon.png"/>400-888-2487</p>
			</div>
		</div>

		<!--内容-->
		<div class="big-bg">
			<div class="container">
				
				
				
				<div class="login-box">
					<h3 class="show-error"><img src="/fxpc/Public/Home/img/log-reg/error-icon.png" />用户名不存在或验证码错误</h3>
					<p>UESR LOGIN</p>
					<h5>用户登录</h5>
					{__TOKEN__}
					<!--用户框-->
					<div class="user-box">
						<img src="/fxpc/Public/Home/img/log-reg/user-icon.png" />
						<input type="text" id="username" placeholder="请输入手机号或者邮箱" />
					</div>
					<!--密码框-->
					<div class="pas-box">
						<img src="/fxpc/Public/Home/img/log-reg/pas-icon.png" />
						<input type="text" id="password" placeholder="6-12位数字和字母组合" />
					</div>
					<!--验证码框-->
					<div class="code-box">
						<img src="/fxpc/Public/Home/img/log-reg/code-icon.png" />
						<input type="text" id="code" placeholder="请输入验证码" />
						<a class="code-img" href="javascript:;"><img src="<?php echo U('Home/captcha');?>" onclick="this.src='<?php echo U('Home/captcha');?>?'+Math.random()"/></a>
					</div>
					<!--记住。。。-->
					<div class="forget-box">
						<label><input type="checkbox" />记住用户名</label>
						<a href="javascript:;">忘记密码？</a>
					</div>
					
					<div class="login-btn">登录</div>
					<div class="go-reg">现在还不是返乡创业会员？ 现在 <a href="<?php echo U('Login/register');?>">免费注册</a></div>
					
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
	$('.nav ul li').click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
	});

	$('.login-btn').on('click',function(){
		var username = $('#username').val();
		var password = $('#password').val();
		var code = $('#code').val();
		var token = $("input[name=__hash__]").val();
		
		$.ajax({
			url:"<?php echo U('Login/login');?>",
			data:{_token:token,username:username,password:password,code:code},
			type:"post",
			dataType:"json",
			success:function(data){
				console.log(data);
				if (data.status == 0) {
					alert(data.error);
					$('.code-img img').attr("src","<?php echo U('Home/captcha');?>?"+Math.random());
				}else{
					alert('登录成功');
					window.location.href = "<?php echo U('/');?>";
				}
			}
		})
	})

</script>