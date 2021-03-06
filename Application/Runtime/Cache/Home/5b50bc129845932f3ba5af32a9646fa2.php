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
<link href="/Public/Home/css/article.css" rel="stylesheet" />
<!-- 主体（一般只改变这里的内容） -->
<div class="blog-body">
    <div class="blog-container">
        <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
            <a href="home.html" title="网站首页">网站首页</a>
            <a><cite>文章专栏</cite></a>
        </blockquote>
        <div class="blog-main">
            <div class="blog-main-left">
                <!-- <div class="shadow" style="text-align:center;font-size:16px;padding:40px 15px;background:#fff;margin-bottom:15px;">
                    未搜索到与【<span style="color: #FF5722;">keywords</span>】有关的文章，随便看看吧！
                </div> -->
            <?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="article shadow">
                    <div class="article-left">
                        <img src="/<?php echo ($v["title_img"]); ?>" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="<?php echo U('Detail/show');?>?id=<?php echo ($v["title_id"]); ?>"><?php echo ($v["title_name"]); ?></a>
                        </div>
                        <div class="article-abstract">
                            <?php echo ($v["title_motto"]); ?>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo (date("Y-m-d H:i:s",$v["title_time"])); ?></span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo ($v["title_people"]); ?></span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#"><?php echo ($v["type_name"]); ?></a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;<?php echo ($v["num"]); ?></span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div><?php endforeach; endif; ?>
            </div>
            <div class="blog-main-right">
                <div class="blog-search">
                    <form class="layui-form" action="">
                        <div class="layui-form-item">
                            <div class="search-keywords  shadow">
                                <input type="text" name="keywords" lay-verify="required" placeholder="输入关键词搜索" autocomplete="off" class="layui-input">
                            </div>
                            <div class="search-submit  shadow">
                                <a class="search-btn" lay-submit="formSearch" lay-filter="formSearch"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="article-category shadow">
                    <div class="article-category-title">分类导航</div>
                    <?php if(is_array($type)): foreach($type as $key=>$v): ?><a href="javascript:layer.msg(&#39;切换到相应分类&#39;)" value="<?php echo ($v["type_id"]); ?>"><?php echo ($v["type_name"]); ?></a><?php endforeach; endif; ?>
                    <div class="clear"></div>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">作者推荐</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Web安全之跨站请求伪造CSRF</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">C#基础知识回顾-扩展方法</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC自定义错误页</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
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
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">常用正则表达式</a></li>
                    </ul>
                </div>
                <!--右边悬浮 平板或手机设备显示-->
                <div class="category-toggle"><i class="fa fa-chevron-left"></i></div>
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
<!-- 全局脚本 -->
<script src="/Public/Home/js/global.js"></script>
</body>
</html>