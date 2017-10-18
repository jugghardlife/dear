<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert title here</title>
    <link rel="stylesheet" href="/dear/Public/js/layui/css/layui.css" />
    <script src="/dear/Public/js/utf8-php/ueditor.config.js"></script>
    <script src="/dear/Public/js/utf8-php/ueditor.all.min.js"></script>
    <script src="/dear/Public/js/utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<header>
    <div>
        <ul class="layui-nav" lay-filter="" style="display:flex;justify-content:space-between;">
            <div style="display: flex;">
                <div class="logo" style="width: 140px;height: 60px;">
                    <a href="http://localhost/dear/home" style="display:flex;">
                        <img src="/dear/Public/images/logo.png" alt="" style="width: 50px;height: 50px;display:block;margin-top: 6px;"/>
                        <p style="color:#fff;margin-left: 2px;margin-top: 35px;font-size: 80%;">真爱一生</p>
                    </a>
                </div>
                <li class="layui-nav-item"><a href="http://localhost/dear/home/find">寻找宝宝</a></li>
                <li class="layui-nav-item"><a href="http://localhost/dear/home/encounter">遇到宝宝</a></li>
                <li class="layui-nav-item"><a href="http://localhost/dear/Home/Adopt">领养宝宝</a></li>
                <li class="layui-nav-item"><a href="http://localhost/dear/home/experience">宝宝经验</a></li>
                <li class="layui-nav-item"><a href="http://localhost/dear/home/memory">美好回忆</a></li>
            </div>
            <div style="margin-right: 40px;">
                <li class="layui-nav-item">
                    <a href="javascript:;"><?php echo (session('username')); ?></a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                        <dd><a href="#" id="logout">注销</a></dd>
                        <dd><a href="">修改密码</a></dd>
                    </dl>
                </li>
            </div>
        </ul>
    </div>
</header>
<div class="main" style="display:flex;">
    <div class="sidebar">
        <ul class="layui-nav layui-nav-tree" lay-filter="test" style="height:100%;width: 160px;">
            <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
            <li class="layui-nav-item layui-nav-itemed"><a href="javascript:void(0)">首页</a></li>
            <li class="layui-nav-item"><a href="javascript:void(0)">我的收藏</a></li>
            <li class="layui-nav-item"><a href="javascript:void(0)">我的收藏</a></li>
            <li class="layui-nav-item"><a href="javascript:void(0)">我的粉丝</a></li>
        </ul>
    </div>
    <div>
        <div style="margin-top: 6vh;margin-left: 10vw;border: 1px solid #c2c2c2;padding: 40px 10px;height: 100vh;width: 70vw;border-radius: 5px;">
            <input type="hidden" value="<?php echo ($data['id']); ?>" class="id">
            <div class="layui-form-item" style="width: 60vw;">
                <label class="layui-form-label">单行输入框</label>
                <div class="layui-input-block">
                    <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input title" value="<?php echo ($data['title']); ?>">
                </div>
            </div>
            <div style="display: flex;">
                <div class="layui-form-item">
                    <label class="layui-form-label">品种</label>
                    <div class="layui-input-inline">
                        <input type="text" name="varieties" required lay-verify="required" placeholder="请输入品种" autocomplete="off" class="layui-input varieties" value="<?php echo ($data['varieties']); ?>">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">电话</label>
                    <div class="layui-input-inline">
                        <input type="text" name="tel" required lay-verify="required" placeholder="请输入电话" autocomplete="off" class="layui-input tel" value="<?php echo ($data['tel']); ?>">
                    </div>
                </div>
            </div>
            <div class="option layui-form-item" data-toggle="distpicker" style="display: flex;">
                <label class="layui-form-label">地区</label>
                <div class="form-group" style="display: flex;">
                    <select class="form-control layui-input layui-input-inline" id="province1" name="province" data-province="<?php echo ($data[province]); ?>"></select>
                    <select class="form-control layui-input layui-input-inline" id="city1" name="city" data-city="<?php echo ($data[city]); ?>" style="margin-left: 20px;"></select>
                    <!--<select class="form-control layui-input layui-input-inline" id="district1" name="district" style="margin-left: 20px;"></select>-->
                </div>
            </div>
            <div style="margin: 40px auto 20px; width: 59vw;">
                <textarea id="container"><?php echo ($data[content]); ?></textarea>
            </div>
            <div style="display: flex;justify-content:space-between;">
                <div></div>
                <div style="margin-right: 120px;">
                    <button class="layui-btn layui-btn-small submit">提交</button>
                    <button class="layui-btn layui-btn-small cancel">取消</button>
                </div>
            </div>
        </div>
        <div style="height: 6vh;background-color: #fff;">

        </div>
    </div>
</div>
<footer></footer>
<script src="/dear/Public/js/layui/layui.js"></script>
<script src="/dear/Public/js/jquery.min.js"></script>
<script src="/dear/Public/js/bootstrap.min.js"></script>
<script src="/dear/Public/js/distpicker.data.js"></script>
<script src="/dear/Public/js/distpicker.js"></script>
<script src="/dear/Public/js/main.js"></script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element();

        //…
    });
</script>
<script id="container" name="content" type="text/plain">
      这里写你的初始化内容
  </script>
<script type="text/javascript">
    var ue = UE.getEditor('container',{
        initialFrameHeight:600
    });
</script>
<script>
    $('.submit').click(function(e){
        e.preventDefault();
        console.log("hello")
        var id=$('.id').val()
        var title = $(this).parent().parent().parent().find('.title').val()
        var varieties = $(this).parent().parent().parent().find('.varieties').val()
        var tel = $(this).parent().parent().parent().find('.tel').val()
        var province1 = $('#province1').val()
        var city1 = $('#city1').val()
        var content = UE.getEditor('container').getContent()
        console.log(title)
        console.log(varieties)
        console.log(tel)
        console.log(province1)
        console.log(city1)
        console.log(content)
        $.ajax({
            type: "POST",
            url: "http://localhost/dear/admin/Add5/update",
            data: {
                id:id,
                title:title,
                varieties:varieties,
                tel:tel,
                province1:province1,
                city1:city1,
                content:content
            },
            cache:false,
            dataType: "json",
            success: function (res) {
                console.log(res)
                window.location.href="http://localhost/dear/admin/";
            },
            error: function (msg) {
                console.log(msg)
            }
        });
    })
</script>
<script>
    $('.cancel').click(function(e){
        e.preventDefault();
        console.log("hello")
        window.location.href="http://localhost/dear/admin/";
    })
</script>
<!-- <script>
  layui.use('layedit', function(){
    var layedit = layui.layedit
    ,$ = layui.jquery;

    //构建一个默认的编辑器
    var index = layedit.build('LAY_demo1');

    //编辑器外部操作
    var active = {
      content: function(){
        alert(layedit.getContent(index)); //获取编辑器内容
      }
      ,text: function(){
        alert(layedit.getText(index)); //获取编辑器纯文本内容
      }
      ,selection: function(){
        alert(layedit.getSelection(index));
      }
    };

    $('.site-demo-layedit').on('click', function(){
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });
    layedit.set({
      uploadImage: {
        url: 'http://localhost/dear/admin/Add/add' //接口url
        ,type: 'post' //默认post
      }
    });
    //自定义工具栏
    layedit.build('LAY_demo2', {
      tool: ['del','underline','italic','strong', '|', 'left', 'center', 'right','|','link', 'unlink','face','image']
      ,height: 400
    })
  });
</script> -->
</body>
</html>