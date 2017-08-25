<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends CommonController {
    public function show(){
    	$data = M('Type')->select();
    	$this->assign('data',$data);
        $this->display();
    }
    public function add(){
    	if(IS_POST){
    		$data['type_name'] = I('post.type_name');
            //自动验证
            if(!D('Type')->create()){
                $this->error(D('Type')->getError());
            }
	    	$res = M('Type')->add($data);
	    	if($res){
                // 记录日志
                admin_log('添加分类:'.$data['type_name']);
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
    	$res = M('Type')->where(array('type_id'=>$id))->delete();
    	if($res){
    		$this->success('成功','show');
    	}else{
    		$this->error();
    	}
    }
    public function doAdd()
    {
        $param = I('post.type_name');
        $data = M('Type')->where(["type_name" => $param])->find();
        if($data){
            echo 'false';
        }else{
            echo 'true';
        }
    }
    public function save(){
        if(IS_POST){
            $post['type_name'] = I('post.type_name');
            $id = I('param.type_id');
            $res = M('Type')->where(array('type_id'=>$id))->save($post);
            if($res){
                $this->success('修改成功','show');
            }else{
                $this->error();
            }
        }else{
            $id = I('param.id');
            $post = I('param.');
            $data = M('Type')->where(array('type_id'=>$id))->find();
            $this->assign('data',$data);
            $this->display();
        }
    }
}