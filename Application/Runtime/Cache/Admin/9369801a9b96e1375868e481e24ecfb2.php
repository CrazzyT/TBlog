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
<form class="layui-form" action="<?php echo U('Link/save');?>" method="post" id="idFromAdd">
    <div class="layui-form-item">
        <label class="layui-form-label">友链名称</label>
        <div class="layui-input-block">
            <input type="text" name="link_name" value="<?php echo ($data["link_name"]); ?>" id="link_name" required  lay-verify="required" placeholder="请输入友链名称" autocomplete="off" class="layui-input" >
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">友链地址</label>
        <div class="layui-input-block">
            <input type="text" name="link_url" value="<?php echo ($data["link_url"]); ?>" id="link_url" required  lay-verify="required" placeholder="请输入友链地址" autocomplete="off" class="layui-input" >
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name="link_id" value="<?php echo ($data["link_id"]); ?>">
            <input type="submit" value="修改" class="layui-btn"/>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>
<script src="/Public/admin/layer/layer.js"></script>
<script>
    $(function(){
        $("#idFromAdd").validate({
            rules:{
                link_name:{
                    required:true,
                    remote:{
                        url: "<?php echo U('Label/doAdd');?>",     //后台处理程序
                        type: "post",               //数据发送
                        dataType: "json",           //接受数据格式
                        data:{                     //要传递的数据
                            link_name: function(){
                                return $("#link_name").val();
                            }
                        }
                    }
                }
            },
            messages:{
                link_name:{
                    required:"友链必须填",
                    remote:"友链已经存在"
                }
            },
            //重写错误信心，提示
            showErrors:function(errorMap,errorList){
                console.log(errorMap,errorList);
                var msg = '';
                $.each(errorList,function(k,v){
                    msg += (v.message +"\r\n");
                })
                if(msg != ''){
                    layer.msg(msg);
                } //失去焦点
                onfocusout:false;
            }
        })
    })
</script>