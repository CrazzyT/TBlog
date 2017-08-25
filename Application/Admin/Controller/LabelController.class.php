<?php
namespace Admin\Controller;
use Think\Controller;
class LabelController extends CommonController {
    public function show(){
    	$data = M('Label')->select();
    	$this->assign('data',$data);
        $this->display();
    }
    public function add(){
    	if(IS_POST){
    		$data['label_name'] = I('post.label_name');
            //自动验证
            if(!D('Label')->create()){
                $this->error(D('Label')->getError());
            }
	    	$res = M('Label')->add($data);
	    	if($res){
                // 记录日志
                admin_log('添加标签:'.$data['label_name']);
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
    	$res = M('Label')->where(array('label_id'=>$id))->delete();
    	if($res){
    		$this->success('成功','show');
    	}else{
    		$this->error();
    	}
    }
    public function doAdd()
    {
        $param = I('post.label_name');
        $data = M('Label')->where(["label_name" => $param])->find();
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
            $post['label_name'] = I('post.label_name');
            $id = I('param.label_id');
            $res = M('Label')->where(array('label_id'=>$id))->save($post);
            if($res){
                $this->success('修改成功','show');
            }else{
                $this->error();
            }
        }else{
            $id = I('param.id');
            $post = I('param.');
            $data = M('Label')->where(array('label_id'=>$id))->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
}