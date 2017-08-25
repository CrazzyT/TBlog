<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    /**
     * 用户展示
     */
    public function show(){
        $data = M('User')->select();
        $this->assign('data',$data);
        $this->display();
    }
    /**
     * 用户添加
     */
    public function add(){
    	if(IS_POST){
            $data['user_name'] = I('post.user_name');
            $data['user_pwd'] = I('post.user_pwd');
    		$data['repwd'] = I('post.repwd');
            //自动验证
            if(!D('User')->create()){
                $this->error(D('User')->getError());
            }

	    	$res = M('User')->add($data);
	    	if($res){
	    		$this->success('成功','show');
	    	}else{
	    		$this->error();
	    	}
    	}else{
    		$this->display();
    	}
    }
    public function doAdd()
    {
        $param = I('post.user_name');
        $data = M('User')->where(["user_name" => $param])->find();
        if($data)
        {
            echo 'false';
        }
        else
        {
            echo 'true';
        }
    }
    /**
     * 删除用户
     * @return [type] [description]
     */
    public function del(){
        $id = I('param.id');
        $res = M('User')->where(array('user_id'=>$id))->delete();
        if($res){
            $this->success('成功','show');
        }else{
            $this->error();
        }
    }
}