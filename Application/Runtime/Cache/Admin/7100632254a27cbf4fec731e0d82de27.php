<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/Public/Admin/css/layui.css"  media="all">
</head>
<body>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>操作日志</legend>
</fieldset>
<div class="layui-inline">
    
    <div class="layui-input-inline">
        <select name="month" id="type_id">
            <option value="0">请选择删除时间</option>
            <option value="1">删除一个月前内容</option>
            <option value="3">删除三个月前内容</option>
        </select>
    </div>
    <input type="button" value="删除" id="del">
</div>
<div class="layui-form">
    <table class="layui-table">
        <colgroup>
            <col width="50">
            <col width="150">
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
        <tr>
            <th><input name="" lay-skin="primary" lay-filter="allChoose" type="checkbox"></th>
            <th>操作内容</th>
            <th>操作IP</th>
            <th>操作时间</th>
            <th>操作人</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><input name="" lay-skin="primary" type="checkbox"></td>
            <td><?php echo ($v["log_info"]); ?></td>
            <td><?php echo ($v["log_ip"]); ?></td>
            <td><?php echo (date('Y:m:d H:i:s',$v["log_time"])); ?></td>
            <td><?php echo ($v["user_name"]); ?></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
<script type="text/javascript" src="/Public/Admin/js/jquery.1.12.js"></script>
<script>
    $(function(){
        $("#del").click(function(){
            var month = $('select[name="month"] option:selected').val();
            location.href = "/Admin.php/Log/del/month/"+month;
        })
    })
</script>