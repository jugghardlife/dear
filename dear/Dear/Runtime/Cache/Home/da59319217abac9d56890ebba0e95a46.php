<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/dear/Public/css/swiper.min.css">
    <script type="text/javascript" src="/dear/Public/js/jquery.min.js"></script>
	<style>
		  html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    ::-webkit-input-placeholder { /* WebKit browsers */  
    	color:    #fff;  
	}  
	:-moz-placeholder { /* Mozilla Firefox 4 to 18 */  
   		color:    #fff;  
   		opacity:  1;  
	}  
	::-moz-placeholder { /* Mozilla Firefox 19+ */  
  		 color:    #fff;  
   		opacity:  1;  
	}  
	:-ms-input-placeholder { /* Internet Explorer 10+ */  
   		color:    #fff;  
	}  
	</style>
</head>
<body style="position: relative;">
	<div style="position: absolute;z-index: 9;background-color: rgba(0,0,0,0.8);width: 100vw;height: 100vh;"></div>
    <div style="position: absolute;z-index: 10;right: 40px;top: 20px;"><a href="http://localhost/dear/Home" style="color: #fff;text-decoration:none;">返回首页</a></div>
	<div style="position: absolute;z-index: 10;left: 45vw;top: 30vh;">
        <form action="" style="display: flex; flex-direction: column;">
    		<p style="color: #fff;font-size: 30px;text-align: center;">登  录</p>
    		<input type="text" name="username" id="username" placeholder="用 户 名" style="height: 26px;width: 240px;outline: none;border: none;padding: 4px;background-color: rgba(87,225,239,0.3);border-radius: 2px;color: #fff;text-align: center;">
    		<input type="password" name="password" id="password" placeholder="密  码" style="height: 26px;width: 240px;margin-top: 10px;outline: none;border: none;padding: 4px;background-color: rgba(87,225,239,0.3);border-radius: 2px;color: #fff;text-align: center;">
    		<div style="margin-top: 20px;display: flex;">


<input type="text" id="verify" placeholder="请输入验证码" style="height: 32px;width: 130px;border:none;outline:none;padding: 4px;background-color: rgba(87,225,239,0.3);border-radius: 2px;color: #fff;text-align: center;"/>


            <!-- <input type="text" id="verify" placeholder="请输入验证码" style="height: 32px;width: 130px;border:none;outline:none;padding: 4px;background-color: rgba(87,225,239,0.3);border-radius: 2px;color: #fff;text-align: center;" onblur="ckverify(this)"/> -->

            <img src="/dear/index.php/Home/Login/verify" alt="" id="ver_img" style="width: 100px;height: 40px;display: block;margin-left: 10px;border-radius:2px;cursor:pointer;" onclick="this.src='/dear/index.php/Home/Login/verify/'+Math.random()"/></div>
    		<input type="submit" name="submit" id="submit" value="登  录" style="height: 34px;width: 248px;margin-top: 36px;outline: none;border: none;color: #0c5865;font-weight: 600;border-radius: 2px;">
        </form>
	</div>
   
	<!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc1.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc2.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc3.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc4.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc5.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc6.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc7.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc8.jpg" alt="" style="width: 100%;height: 100%;"></div>
            <div class="swiper-slide" style="width: 100vw;height: 100vh;"><img src="/dear/Public/images/bgc9.jpg" alt="" style="width: 100%;height: 100%;"></div>
        </div>
    </div>
	<script src="/dear/Public/js/swiper.min.js"></script>
	<!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        paginationClickable: true,
        autoplay:6000,
        loop:true,
    });
    </script>
    <script src="/dear/Public/js/jquery.min.js"></script>
    <script>
       function ver_img(){
            document.getElementById('ver_img').src='/dear/index.php/Home/Login/verify/'+Math.random()
        };
        $('#submit').click(function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            var code=$('#verify').val();
            $.ajax({
                type: 'POST',
                url: 'http://localhost/dear/home/login/login',
                cache:false,  
                dataType:'json',
                data:{
                    username:username,
                    password:password,
                    code:code,
                }
            })
            .done(function(data){
                if(data.state==1){
                    alert('登录成功')
                    window.location.href='http://localhost/dear/admin';
                }else if(data.state==2){
                    alert("用户不存或密码错误")
                }else if(data.state==3){
                    alert("验证码错误")
                }
                console.log(data.state)
                ver_img()
            })
        })
    </script>
</body>
</html>