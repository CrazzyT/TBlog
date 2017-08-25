<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends AutoController {
    public function index(){
    	//读取权限配置
		$config = get_config();

    	$data = D('Title')->relation(true)->order('num desc')->limit(5)->select();
    	$this->assign('config',$config);
    	$this->assign('data',$data);
    	$this->display('Index/home');
    }
    
}