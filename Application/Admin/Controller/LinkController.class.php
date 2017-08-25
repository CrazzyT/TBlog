<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController {
    public function show(){
    	$data = M('Link')->select();
    	$this->assign('data',$data);
        $this->display();
    }
    public function add(){
    	if(IS_POST){
            $data['link_name'] = I('post.link_name');
    		$data['link_url'] = I('post.link_url');
            //自动验证
            if(!D('Link')->create()){
                $this->error(D('Link')->getError());
            }
	    	$res = M('Link')->add($data);
	    	if($res){
                // 记录日志
                admin_log('添加友链:'.$data['link_name']);
	    		$this->success('成功','show');
	    	}else{
	    		$this->error();
	    	}
    	}else{
    		$this->display();
    	}
    }
    public function del(){
    	$id = I('param.id');
    	$res = M('Link')->where(array('link_id'=>$id))->delete();
    	if($res){
    		$this->success('成功','show');
    	}else{
    		$this->error();
    	}
    }
    public function doAdd()
    {
        $param = I('post.link_name');
        $data = M('Link')->where(["link_name" => $param])->find();
        if($data)
        {
            echo 'false';
        }
        else
        {
            echo 'true';
        }
    }
    public function save(){
        if(IS_POST){
            $post['link_name'] = I('post.link_name');
            $post['link_url'] = I('post.link_url');
            $id = I('param.link_id');
            $res = M('Link')->where(array('link_id'=>$id))->save($post);
            if($res){
                $this->success('修改成功','show');
            }else{
                $this->error();
            }
        }else{
            $id = I('param.id');
            $post = I('param.');
            $data = M('Link')->where(array('link_id'=>$id))->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
}