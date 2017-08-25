<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller 
{
	public function __construct(){
		parent::__construct();
		//验证是否登录
		$isLogined = session('isLogined');
		if(!isset($isLogined)){
			$this->error('请登录',U('Login/index'));
		}
		//读取权限配置
		$this->config = get_config();
		//$this->$config = dispose_config($config);
		
	}
	
	
 	public function upload($img){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     C('UPLOAD_SIZE') ;// 设置附件上传大小
	    $upload->exts      =      C('UPLOAD_ETS');// 设置附件上传类型
	    $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
	    $upload->rootPath  =      './'; // 设置附件上传目录
	    // 上传文件
	    $info   =   $upload->upload();
	    $return = ['isError'=>0,'msg'=>'','data'=>''];
	    if(!$info)
	    {
	        // 上传错误提示错误信息
	        $return['isError']=1;
	        $return['msg']=$upload->getError();
	    }
	    else{
	        $imgPath=$info[$img]['savepath']. $info['img']['savename'];
	        $return['isError']=0;
	        $return['data']=$imgPath;
	    }
	    return $return;
	}
}