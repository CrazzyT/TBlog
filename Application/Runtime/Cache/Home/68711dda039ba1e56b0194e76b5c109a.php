<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php echo ($config["WEB_TITLE"]); ?> - 一个PHP程序员的个人博客网站</title>
    <link rel="shortcut icon" href="../images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="/Public/Home/plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="/Public/Home/plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="/Public/Home/css/global.css" rel="stylesheet" />
</head>
<body>
    <!-- 导航 -->
    <nav class="blog-nav layui-header">
        <div class="blog-container">
            <!-- QQ互联登陆 -->
            <a href="javascript:;" class="blog-user">
                <i class="fa fa-qq"></i>
            </a>
            <a href="javascript:;" class="blog-user layui-hide">
                <img src="/Public/Home/images/Absolutely.jpg" alt="Absolutely" title="Absolutely" />
            </a>
            <!-- 不落阁 -->
            <a class="blog-logo" href="home.html"><?php echo ($config["WEB_TITLE"]); ?></a>
            <!-- 导航菜单 -->
            <ul class="layui-nav" lay-filter="nav">
                <li class="layui-nav-item layui-this">
                    <a href="<?php echo U('Index/index');?>"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
                </li>
                <li class="layui-nav-item ">
                    <a href="<?php echo U('Article/show');?>"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('Resource/show');?>"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('Timeline/show');?>"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('About/show');?>"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('Login/login');?>"></i>&nbsp;登录</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('Login/logout');?>"></i>&nbsp;退出</a>
                </li>
            </ul>
            <!-- 手机和平板的导航开关 -->
            <a class="blog-navicon" href="javascript:;">
                <i class="fa fa-navicon"></i>
            </a>
        </div>
    </nav>
<!-- 本页样式表 -->
<link href="/Public/Home/css/detail.css" rel="stylesheet" />
<!-- 主体（一般只改变这里的内容） -->
<div class="blog-body">
    <div class="blog-container">
        <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
            <a href="home.html" title="网站首页">网站首页</a>
            <a href="article.html" title="文章专栏">文章专栏</a>
            <a><cite>基于layui的laypage扩展模块！</cite></a>
        </blockquote>
        <div class="blog-main">
            <div class="blog-main-left">
                <!-- 文章内容（使用Kingeditor富文本编辑器发表的） -->
                <input type="hidden" value="<?php echo ($data["title_id"]); ?>" class="tid">
                <div class="article-detail shadow">
                    <div class="article-detail-title">
                        <?php echo ($data["title_name"]); ?>
                    </div>
                    <div class="article-detail-info">
                        <span><?php echo (date("Y-m-d H:i:s",$data["title_time"])); ?></span>
                        <span><?php echo ($data["title_people"]); ?></span>
                        <span><?php echo ($data["num"]); ?></span>
                    </div>
                    <div class="article-detail-content">
                        <p style="text-align:center;">
                            <strong>
                                <span style="font-size:18px;">
                                    <br />
                                </span>
                            </strong>
                        </p>
                        <p style="text-align:center;">
                            <img src="/<?php echo ($data["title_img"]); ?>"/>
                        </p>
                        <p style="text-align:left;">
                            <br />
                        </p>
                        <hr />
                        <p>
                            <br />
                        </p>
                        <p>
                            <?php echo ($data["title_motto"]); ?>
                        </p>
                        
                        <hr />
                        <p>
                            <br />
                        </p>
                        <p>
                            &nbsp; &nbsp; 点赞不落阁：<a href="http://fly.layui.com/case/2017/" target="_blank"><span style="color:#337FE5;">点击前往</span></a>&nbsp; &nbsp; 完整演示请看后台：<span><a href="http://www.lyblogs.cn/admin" target="_blank"><span style="color:#337FE5;">点击前往</span></a></span>&nbsp; &nbsp; pagesize.js下载地址：<a href="https://pan.baidu.com/s/1kVK8UhT" target="_blank"><span style="color:#337FE5;">点击前往</span></a>
                        </p>
                        <hr />
                        &nbsp; &nbsp; 出自：哒哒哒
                        <p>
                            &nbsp; &nbsp; 地址：<a href="http://www.blog.cn" target="_blank">www.blog.cn</a>
                        </p>
                        <p>
                            &nbsp; &nbsp; 转载请注明出处！<img src="http://www.lyblogs.cn/kindeditor/plugins/emoticons/images/0.gif" border="0" alt="" />
                        </p>
                        <p> 
                            <br />
                        </p>
                    </div>
                </div>
                <!-- 评论区域 -->
                <div class="blog-module shadow" style="box-shadow: 0 1px 8px #a6a6a6;">
                    <div id="SOHUCS" sid=<?php echo ($data["title_id"]); ?> ></div> 
                    <script type="text/javascript"> 
                    (function(){ 
                    var appid = 'cytb8dvjS'; 
                    var conf = 'prod_e837f2833b87987e383e1895af71a7da'; 
                    var width = window.innerWidth || document.documentElement.clientWidth; 
                    if (width < 960) { 
                    window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
                </div>
            </div>
            <div class="blog-main-right">
                <!--右边悬浮 平板或手机设备显示-->
                <div class="category-toggle"><i class="fa fa-chevron-left"></i></div><!--这个div位置不能改，否则需要添加一个div来代替它或者修改样式表-->
                <div class="article-category shadow">
                    <div class="article-category-title">分类导航</div>
                    <!-- 点击分类后的页面和artile.html页面一样，只是数据是某一类别的 -->
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">ASP.NET MVC</a>
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">SQL Server</a>
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Entity Framework</a>
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">Web前端</a>
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">C#基础</a>
                    <a href="javascript:layer.msg(&#39;切换到相应分类&#39;)">杂文随笔</a>
                    <div class="clear"></div>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">相似文章</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                    </ul>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">随便看看</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- 底部 -->
<footer class="blog-footer">
    <p><span>Copyright</span><span>&copy;</span><span>2017</span><a href="http://www.lyblogs.cn">不落阁</a><span>Design By LY</span></p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备16029915号-1</a></p>
</footer>
<!--侧边导航-->
<ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
    <li class="layui-nav-item">
        <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
    </li>
    <li class="layui-nav-item layui-this">
        <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
    </li>
    <li class="layui-nav-item">
        <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
    </li>
    <li class="layui-nav-item">
        <a href="timeline.html"><i class="fa fa-road fa-fw"></i>&nbsp;点点滴滴</a>
    </li>
    <li class="layui-nav-item">
        <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
    </li>
</ul>
<!--分享窗体-->
<div class="blog-share layui-hide">
    <div class="blog-share-body">
        <div style="width: 200px;height:100%;">
            <div class="bdsharebuttonbox">
                <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
            </div>
        </div>
    </div>
</div>
<!--遮罩-->
<div class="blog-mask animated layui-hide"></div>
<!-- layui.js -->
<script src="/Public/Home/plug/layui/layui.js"></script>
<!-- 自定义全局脚本 -->
<script src="/Public/Home/js/global.js"></script>
<!-- 比较好用的代码着色插件 -->
<script src="/Public/Home/js/prettify.js"></script>
<!-- 本页脚本 -->
<script src="/Public/Home/js/detail.js"></script>
</body>
</html>
<script src="/Public/Home/js/jquery.1.12.js"></script>
<script type="text/javascript">
    var id = $('.tid').val();
    $.get("/index.php/Detail/see",{'id':id},function(result){
        // alert(2);
        console.log(result);
        // alert(result);
    },'json')
</script>