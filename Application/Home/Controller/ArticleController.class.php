<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function show(){
		$type = M('Type')->select();
		$data = D('Title')->relation(true)->select();
		$this->assign('type',$type);
		$this->assign('data',$data);
		$this->display();
	}
}