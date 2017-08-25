<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends CommonController {
	public function index(){
		if(IS_POST){
			$data = I('post.');
			foreach ($data as $key => $value) {
				$res = M('Conf')->where(['cfg_key'=>$key])->save(['cfg_key'=>$key,'cfg_value'=>$value]);
				if($res === false){
					$this->error('更新失败');
				}
			}
			$this->success('hao');
		}else{
			$config = get_config();
			$this->assign('config',$config);
			$this->display();
		}
	}
}