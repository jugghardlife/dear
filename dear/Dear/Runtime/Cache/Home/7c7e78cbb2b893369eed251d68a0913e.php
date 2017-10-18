<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <div style="border: 1px solid #eee;margin: 80px 0;padding: 40px;border-radius: 2px;">
            <div>
                <h3 style="text-align: center;font-size: 30px;color: #555;"><?php echo ($info['title']); ?></h3>
                <div style="display: flex;width: 750px;margin: 20px auto;">
                    <p style="color: #666;">发布人:<span> <?php echo ($info['username']); ?></span></p>
                    <p style="color: #666;">电话:<span> <?php echo ($info['tel']); ?></span></p>
                    <p style="color: #666;">品种:<span> <?php echo ($info['varieties']); ?></span></p>
                    <p style="color: #666;">地区:<span> <?php echo ($info['province']); echo ($info['city']); ?></span></p>
                </div>
                <div style="padding: 20px;">
                    <p style="color: #666;"><?php echo ($info['content']); ?></p>
                </div>
                <div style="display: flex;justify-content:space-between;padding: 10px;">
                    <div></div>
                    <p style="color: #666;">时间:<span><?php echo ($info['time']); ?></span></p>
                </div>
            </div>
        </div>
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