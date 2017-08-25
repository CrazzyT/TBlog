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
              
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
  <legend>用户添加</legend>
</fieldset>
 
<form class="layui-form layui-form-pane" action="<?php echo U('User/add');?>" method="post" id="idFromAdd">
  <div class="layui-form-item">
    <label class="layui-form-label">账户名称：</label>
    <div class="layui-input-inline">
      <input type="text" name="user_name" id="user_name" lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">账户密码：</label>
    <div class="layui-input-inline">
      <input type="password" name="user_pwd" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <!-- <div class="layui-form-mid layui-word-aux">请务必填写用户名</div> -->
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">确认密码：</label>
    <div class="layui-input-inline">
      <input type="password" name="repwd" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <!-- <div class="layui-form-mid layui-word-aux">请务必填写用户名</div> -->
  </div>
  <div class="layui-form-item">
    <button class="layui-btn" lay-submit="" lay-filter="demo2">注册</button>
  </div>
</form>

</body>
</html>
<script src="/Public/admin/layer/layer.js"></script>
<script>
    $(function(){
        $("#idFromAdd").validate({
            rules:{
                user_name:{
                    required:true,
                    remote:{
                        url: "<?php echo U('User/doAdd');?>",     //后台处理程序
                        type: "post",               //数据发送
                        dataType: "json",           //接受数据格式
                        data:{                     //要传递的数据
                            user_name: function(){
                                return $("#user_name").val();
                            }
                        }
                    }
                }
            },
            messages:{
                user_name:{
                    required:"用户必须填",
                    remote:"用户已经存在"
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