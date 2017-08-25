<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends AutoController {
    public function show(){
    	$id = I('get.id');
        $data = M('Title')->where(array('title_id'=>$id))->find();
        $this->assign('data',$data);
        $this->display();
    }
    public function see()
    {
        $id = I('get.id');
        if(IS_GET && IS_AJAX)
        {
            //浏览量
            M('Title')->where(['title_id'=>$id])->setInc('num');
            die;
        }
    }
}