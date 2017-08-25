<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		if(IS_POST){
			$data = I('post.');
            //校验验证码
            if(empty($data)){
                $this->error('用户账号或密码不对');
            }
            if(!$this->checkVerify($data['code'])){
                $this->error('验证码不正确');
            }
            $this->success('登录成功',U('Index/index'));
		}else{
			$this->display();
		}
    }
    
    
	/**
     * 退出
     */
    public function logout(){
        session('isLogined',null);
        session('[destroy]');
    	$this->display('Login/login');
    }
    /**
     * 验证码
     */
    public function code(){
        ob_clean();
    	$config =    array(    'fontSize'    =>    25,    // 验证码字体大小    
            'length'      =>    3,     // 验证码位数    
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }
    /**
     * 验证码校验
     */
    public function checkVerify($code, $id = ''){    
        $verify = new \Think\Verify();    
        return $verify->check($code, $id);
    }
    /**
     * 每次登录修改 ip time
     */
    public function updataUser($user_id){
        $user_ip = get_client_ip();
        $user_time = time();
        M('User')->where(['user_id'=>$user_id])->save(array('user_ip'=>$user_ip,'user_time'=>$user_time));
       
    }
}