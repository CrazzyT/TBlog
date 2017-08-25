<?php if (!defined('THINK_PATH')) exit();?> <link rel="shortcut icon" href="/Public/Admin/images/Logo_40.png" type="image/x-icon">
<!-- layui.css -->
<link href="/Public/Admin/plugin/layui/css/layui.css" rel="stylesheet" />
<!-- font-awesome.css -->
<link href="/Public/Admin/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!-- animate.css -->
<link href="/Public/Admin/css/animate.min.css" rel="stylesheet" />
<!-- 本页样式 -->
<link href="/Public/Admin/css/main.css" rel="stylesheet" />
<style>
</style>
<script src="/Public/Admin/js/jquery.1.12.js"></script>
<link rel="stylesheet" href="/Public/Admin/markdown/css/editormd.css"/>
<script src="/Public/Admin/markdown/editormd.js"></script>
<form class="layui-form" action="<?php echo U('Title/add');?>" method="post" enctype="multipart/form-data">
    <div class="layui-form-item">
        <label class="layui-form-label">文章标题</label>
        <div class="layui-input-block">
            <input type="text" name="title_name" required  lay-verify="required" placeholder="请输入文章标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章作者</label>
        <div class="layui-input-inline">
            <input type="text" name="title_people" required lay-verify="required" placeholder="请输入文章作者" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">辅助文字</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章图片</label>
        <div class="layui-input-block">
            <input type="file" name="img" class="layui-upload-file" id="img">
            <input type="hidden" class="tupian" name="img_path">
            <img src="" alt="" width="20px" height="20px" id='img_show'>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章分类</label>
        <div class="layui-input-block">
            <select name="type_id" lay-verify="required">
                <option value="0">请选择</option>
                <?php if(is_array($type)): foreach($type as $key=>$v): ?><option value="<?php echo ($v["type_id"]); ?>"><?php echo ($v["type_name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">文章标签</label>
        <div class="layui-input-block">
            <?php if(is_array($data)): foreach($data as $key=>$v): ?><input type="checkbox" name="label_id[]" title="<?php echo ($v["label_name"]); ?>" value="<?php echo ($v["label_id"]); ?>" ><?php endforeach; endif; ?>
        </div>
    </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">是否展示</label>
        <div class="layui-input-block">
            <input type="radio" name="status" value="0" title="展示" checked>
            <input type="radio" name="status" value="1" title="不展示" >
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">文章内容</label>
        <!--编辑器-->
        <div id="test-editormd" class="good">
            <textarea style="display:none;" id="ts" name="title_motto"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="/Public/admin/plugin/layui/layui.js"></script>
<script>
    //Demo
    layui.use('form', function(){
        var form = U('Title/show');

        //监听提交
        form.on('submit(formDemo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
    //    调用编辑器
    var testEditor;
    $(function(){
        testEditor = editormd("test-editormd", {
            width   : "1300px",
            height  : 540,
            syncScrolling : "single",
            path    : "/Public/Admin/markdown/lib/"
        });
    });
    //  layui中ajax文件上传
    layui.use('upload', function(){
        layui.upload({
            elem:'#img'
            ,url: '<?php echo U("Title/getUpload");?>'
            ,method: 'post' //上传接口的http类型
            ,before: function(input){
                //返回的参数item，即为当前的input DOM对象
                console.log('文件上传中');
            }
            ,success: function(res){
                if(res.code==1){
                    var imgpath=res.data.src;
                    $(".tupian").val(imgpath);
                    $("#img_show").attr('src',imgpath.substr(1));
                }else{
                    layer.msg(res.msg);
                }
            }
        });
    });
</script>