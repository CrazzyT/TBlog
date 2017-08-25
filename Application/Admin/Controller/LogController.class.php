<?php
namespace Admin\Controller;
use Think\Controller;
class LogController extends CommonController {
    public function show(){
    	$data = D('Log')->relation(true)->select();
    	$this->assign('data',$data);
        $this->display();
    }
    /**
     * 删除操作日志
     */
    public function del(){
    	$month = I('get.month',1);
    	$time = time() - $month * 30 * 24 * 3600;
    	$map['log_time'] = array('elt',$time); // elt 小于等于
    	$res = M('Log')->where($map)->delete();
    	if($res){
    		$this->success('ok',U('Log/show'));
    	}else{
    		$this->error();
    	}
    }
}