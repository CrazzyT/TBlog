<?php  
/**
 * 记录来访用户信息
 */
function save_access(){
    $userName = session('username');
    $userName = isset($userName) ? $userName : '';
    $data = ['ip'=>get_client_ip(),'acs_time'=>$_SERVER['REQUEST_TIME'],'user_agent'=>$_SERVER['HTTP_USER_AGENT'],'url'=>$_SERVER['REQUEST_URI'],'user_name'=>$userName];
    M('Access')->add($data);
}
?>