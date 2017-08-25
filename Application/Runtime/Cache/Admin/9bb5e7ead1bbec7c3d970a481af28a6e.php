<?php if (!defined('THINK_PATH')) exit();?><script src="/Public/Admin/js/jquery.1.12.js"></script>
<script src="/Public/Admin/js/jquery.validate.js"></script>
<script src="/Public/Admin/js/messages_zh.js"></script>
<link rel="shortcut icon" href="/Public/admin/images/Logo_40.png" type="image/x-icon">
<!-- layui.css -->
<link href="/Public/admin/plugin/layui/css/layui.css" rel="stylesheet" />
<!-- font-awesome.css -->
<link href="/Public/admin/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!-- animate.css -->
<link href="/Public/admin/css/animate.min.css" rel="stylesheet" />
<!-- 本页样式 -->
<link href="/Public/admin/css/main.css" rel="stylesheet" />
<form class="layui-form" action="<?php echo U('Config/index');?>" method="post" id="idFromAdd">
    <div class="layui-form-item">
        <label class="layui-form-label">网站域名</label>
        <div class="layui-input-block">
            <input type="text" name="WEB_SIZE" value="<?php echo ($config['WEB_SIZE']); ?>" required  lay-verify="required" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">网站标题</label>
        <div class="layui-input-block">
            <input type="text" name="WEB_TITLE" value="<?php echo ($config['WEB_TITLE']); ?>" required  lay-verify="required" autocomplete="off" class="layui-input" >
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">每页显示条数</label>
        <div class="layui-input-block">
            <input type="text" name="PAZE_SIZE" value="<?php echo ($config['PAZE_SIZE']); ?>" required  lay-verify="required" autocomplete="off" class="layui-input" >
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">是否开启注册功能</label>
        <div class="layui-input-block">
            <input type="radio" name="IS_OFF" <?php if($config['IS_OFF'] == 0): ?>checked="true"<?php endif; ?> value="0" title="开启" >
            <input type="radio" name="IS_OFF"  <?php if($config['IS_OFF'] == 1 ): ?>checked="true"<?php endif; ?>value="1" title="不开启" >
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="submit" value="修改" class="layui-btn"/>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="/Public/admin/layer/layer.js"></script>
<script src="/Public/admin/plugin/layui/layui.js"></script>
<script>
    //Demo
    layui.use('form', function(){
        var form = U('Config/index');

        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>