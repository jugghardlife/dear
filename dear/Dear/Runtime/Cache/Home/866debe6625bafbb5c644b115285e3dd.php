<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>fullPage.js — 背景演示_dowebok</title>
<link rel="stylesheet" href="/dear/Public/css/jquery.fullPage.css">
<link rel="stylesheet" href="/dear/Public/js/layui/css/layui.css">
</head>
<body>
	<input type="hidden" id="hidden_username" value="<?php echo ($data[username]); ?>">
	<header style="background-color: #1c909a;position:fixed;width: 100vw;z-index: 10;">
		<div class="inner" style="width: 1020px;margin: 0 auto;height: 60px;display: flex;justify-content:space-between;">
			<div class="logo" >
				<a href="http://localhost/dear/home" style="display: flex;">
					<img src="/dear/Public/images/logo.svg" alt="" style="margin-top: 10px;"/>
					<p style="color:#fff;margin-left: 4px;margin-top: 30px;font-size: 80%;">宠爱一生</p>
				</a>
			</div>
			<div class="nav">
				<ul style="display: flex;margin-top: 20px;">
					<li><a href="http://localhost/dear/home/find" style="color:#fff;font-size: 110%;">寻宝启示</a></li>
					<li style="margin-left: 30px;"><a href="http://localhost/dear/home/encounter" style="color:#fff;font-size: 110%;">遇到宝宝</a></li>
					<li style="margin-left: 30px;"><a href="http://localhost/dear/Home/Adopt" style="color:#fff;font-size: 110%;">领养宝宝</a></li>
					<li style="margin-left: 30px;"><a href="http://localhost/dear/home/experience" style="color:#fff;font-size: 110%;">宝宝经验</a></li>
					<li style="margin-left: 30px;"><a href="http://localhost/dear/home/memory" style="color:#fff;font-size: 110%;">美好回忆</a></li>
					<li style="margin-left: 60px;font-size: 80%;margin-top: 6px;color:#eee;" id="login_user">
						
					</li>
				</ul>
			</div>
		</div>
	</header>
	<div class="main">
		<div id="dowebok">
			<div class="section section1">
				<div class="inner" style="width: 900px;margin: 0 auto;">
					<div style="-webkit-transform:translate3d(-120px,0px,0px);-moz-transform:translate3d(-120px,0px,0px);-ms-transform:translate3d(-120px,0px,0px);transform:translate3d(-120px,0px,0px)">
						<h3 style="font-size: 180%;font-weight: 900;">我的一生只有你</h3>
						<p style="font-size:120%;margin-top: 20px;line-height: 25px;color:#666;">你的一生可能会有很多朋友，或者会很养多的狗，但是狗狗的一生只有你。</p>
						<p style="font-size:120%;line-height: 25px;color:#666;">请不要忘记...我永远爱你</p>
					</div>
					<img src="/dear/Public/images/timg.jpg" alt="" style="width: 684px;height: 384px;-webkit-transform:translate3d(500px,0px,0px);-moz-transform:translate3d(500px,0px,0px);-ms-transform:translate3d(500px,0px,0px);transform:translate3d(500px,0px,0px);border-radius: 5px;" />
				</div>
			</div>
			<div class="section section2">
				<div class="wrap" style="width: 100vw;height:100vh;">
					<img src="/dear/Public/images/page2.jpg" alt="" style="width: 100%;height: 100%;"/>
				</div>
			</div>
			<div class="section section3">
				<div class="wrap" style="width: 100vw;height:100vh;">
					<img src="/dear/Public/images/page3.jpg" alt="" style="width: 100%;height: 100%;"/>
				</div>
			</div>
			<div class="section section4">
				<div class="wrap" style="width: 100vw;height:100vh;">
					<img src="/dear/Public/images/page4.jpg" alt="" style="width: 100%;height: 100%;"/>
				</div>
			</div>
		</div>
	</div>
<script src="/dear/Public/js/jquery-1.8.3.min.js"></script>
<script src="/dear/Public/js/jquery.fullPage.min.js"></script>
<script src="/dear/Public/js/layui/layui.js"></script>
<script>
	$(function(){
		$('#dowebok').fullpage({
			navigation:true,
		});
	});
</script>
<script>
//注意：导航 依赖 element 模块，否则无法进行功能性操作
layui.use('element', function(){
  var element = layui.element();
  
  //…
});
</script>
<script>
	var username = $('#hidden_username').val();
	if(username){
		$('#login_user').append("<a href='http://localhost/dear/admin' style='margin-right:2px;color:#eee;'>"+username+"</a>|<a href='#' style='margin-left: 2px;color:#eee;' id='logout'>登出</a>")
	}else{
		$('#login_user').append("<a href='http://localhost/dear/home/login' style='margin-right:2px;color:#eee;'>登录</a>|<a href='' style='margin-left: 2px;color:#eee;'>注册</a>")
	}
</script>
<script>
	$("#logout").click(function(e){
        console.log('hello');
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'http://localhost/dear/home/logout',
          cache:false,  
          dataType:'json',
          success:function(success){  
              console.log(success)
              $(location).attr('href', 'http://localhost/dear/Home');
          },
          error: function(error){
              console.log(error)
          } 
        })
      })
</script>
</body>
</html>