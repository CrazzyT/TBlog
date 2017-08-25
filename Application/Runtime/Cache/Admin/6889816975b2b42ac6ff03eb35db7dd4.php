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
<a class="layui-btn layui-btn-normal" href="<?php echo U('User/add');?>">用户添加</a>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>用户列表</legend>
</fieldset>

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
            <th>用户ID</th>
            <th>用户名称</th>
            <th>登录IP</th>
            <th>登录时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><input name="" lay-skin="primary" type="checkbox"></td>
            <td><?php echo ($v["user_id"]); ?></td>
            <td><?php echo ($v["user_name"]); ?></td>
            <td><?php echo ($v["user_ip"]); ?></td>
            <td><?php echo (date('Y:m:d H:i:s',$v["user_time"])); ?></td>
            <td>
                <div class="layui-btn-group">
                    <a class="layui-btn layui-btn-small">修改</a>
                    <a class="layui-btn layui-btn-small" href="<?php echo U('User/del');?>?id=<?php echo ($v["user_id"]); ?>">删除</a>
                </div>
            </td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>