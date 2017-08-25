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
<a class="layui-btn layui-btn-normal" href="<?php echo U('Link/add');?>">友链添加</a>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>友链列表</legend>
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
            <th>友链名称</th>
            <th>友链地址</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><input name="" lay-skin="primary" type="checkbox"></td>
            <td><?php echo ($v["link_name"]); ?></td>
            <td><?php echo ($v["link_url"]); ?></td>
            <td>
                <div class="layui-btn-group">
                    <a class="layui-btn layui-btn-small" href="<?php echo U('Link/save');?>?id=<?php echo ($v["link_id"]); ?>">修改</a>
                    <a class="layui-btn layui-btn-small" href="<?php echo U('Link/del');?>?id=<?php echo ($v["link_id"]); ?>">删除</a>
                </div>
            </td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>