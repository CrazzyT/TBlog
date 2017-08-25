<?php
namespace Admin\Controller;
use Think\Controller;
class DelController extends CommonController {
    public function show(){
        if(IS_AJAX){
            $data = D('Title')->relation(true)->where(['status'=>1])->select();
            echo json_encode($data);exit();
        }
		$this->display();
    }
    public function del(){
    	$id = I('get.id');
    	M('title_label')->where(array('title_id'=>$id))->delete();
        $data = M('Title')->where(array('title_id'=>$id))->delete();

		if($data){
	        echo 1;
	      }else{
	        echo 0;
	      }
    }
    /**
     * 还原
     */
    public function restore(){
        $id = I('get.id');
        $data['status'] = 0;
        $res=M('Title')->where(array('title_id'=>$id))->save($data);
        if($res){
            echo 1;
          }else{
            echo 0;
          }
    }
}