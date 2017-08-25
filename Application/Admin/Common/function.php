<?php

/**
 * 记录日志
 */
function admin_log($logInfo){
	$adminInfo = session('isLogined');
    $logData = ['log_time'=>time(),'user_id'=>$adminInfo['user_id'],'log_info'=>$logInfo,'log_ip'=>get_client_ip()];
    M('Log')->add($logData);
}
/**
 * 验证管理员密码
 * @return [type] [description]
 */
function check_pwd(){
	$userPwd = I('post.user_pwd');
	$patt = '/^[a-zA-Z]\w{5,}$/';
	
	if(preg_match($patt,$userPwd)){
		return true;
	}else{
		return false;
	}
}
/**
 * 删除缓存文件
 */
function deleteFile($dirName)
{
    if(file_exists($dirName))
    {
        $handle = opendir($dirName);
        while(($file = readdir($handle))!== false)
        {
            if($file == '.' || $file == '..')
            {
                continue;
            }
            if(is_dir($dirName.$file))
            {
                deleteFile($dirName.$file.'/');
            }
            else
            {
                //清除文件
                $result = unlink($dirName.$file);
                if(!$result)
                {
                    return false;
                }
            }
        }
        closedir($handle);
        return true;
    }
}

?> 