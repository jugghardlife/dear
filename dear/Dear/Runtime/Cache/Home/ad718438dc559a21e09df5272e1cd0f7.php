<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert title here</title>
<link rel="stylesheet" href="/dear/Public/js/layui/css/layui.css">
<link rel="stylesheet" href="/dear/Public/css/swiper.min.css" />
<link rel="stylesheet" type="text/css" href="/dear/Public/css/card.css">
</head>
<body>
	<input type="hidden" id="hidden_username" value="<?php echo ($data[username]); ?>">
	<header style="background-color: #1c909a;width: 99.5vw;z-index: 10;">
		<div class="inner" style="width: 1020px;margin: 0 auto;height: 60px;display: flex;justify-content:space-between;">
			<div class="logo" >
				<a href="http://localhost/dear/home" style="display: flex;">
					<img src="/dear/Public/images/logo.svg" alt="" />
					<p style="color:#fff;margin-left: 4px;margin-top: 30px;font-size: 80%;padding: 0;">宠爱一生</p>
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
		<div class="inner" style="width: 1020px;margin: 0 auto;">
			<div class="banner" style="margin-top: 20px;">
				<div class="swiper-container">
        			<div class="swiper-wrapper">
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 1</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 2</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 3</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 4</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 5</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 6</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 7</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 8</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 9</div>
            			<div class="swiper-slide" style="height: 200px;background-color: blue;">Slide 10</div>
        			</div>
    			</div>
			</div>
			<div style="border: 1px solid #eee;-moz-box-shadow:2px 2px 5px #333333; -webkit-box-shadow:2px 2px 5px #333333; box-shadow:2px 2px 5px #333333;margin-top: 40px;"></div>
			<div style="margin-top: 20px;margin-left: 20px;">
				<span style="color: red;">秦皇岛</span><a href="">[切换城市]</a>
			</div>
				
			<ul style="display: flex;width: 1020px;margin: 0 auto;flex-wrap:wrap;">
				<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="margin-left: 46px;">
						<a href="http://localhost/dear/home/find/details/id/<?php echo ($vo["id"]); ?>">
							<div class="single-member effect-2">
								<div class="member-image">
									<img src="/dear/Public/images/member_270x210.jpg" alt="Member">
								</div>
								<div class="member-info">
									<h3><?php echo ($vo["title"]); ?></h3>
									<h5><?php echo ($vo["title"]); ?></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<div class="social-touch">
										<a class="fb-touch" href="#"></a>
										<a class="tweet-touch" href="#"></a>
										<a class="linkedin-touch" href="#"></a>
									</div>
								</div>
							</div>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			
		</div>
	</div>
	<script src="/dear/Public/js/swiper.min.js"></script>
	<script src="/dear/Public/js/jquery.min.js"></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
   
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        freeMode: true,
        loop:'true',
        autoplay:'1000',
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