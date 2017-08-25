<?php
//读取权限配置
function get_config(){
    $cfgList = M('Conf')->select();
    $config = [];
    foreach ($cfgList as $key => $value) {
        $config[$value['cfg_key']] = $value['cfg_value'];
    }
    //缓存
    S('config',$config);
    return $config;
}
function p($data){
	echo '<pre />';
	print_r($data);
}