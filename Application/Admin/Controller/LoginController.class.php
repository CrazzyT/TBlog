<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		if(IS_POST){
			$data = I('post.');
            //校验验证码
            if(empty($data)){
                $this->error('管理员账号或密码不对');
            }
            if(!$this->checkVerify($data['code'])){
                $this->error('验证码不正确');
            }
            //验证账号是否正确
            $adminInfo = M("User")->where(['user_name'=>$data['user_name']])->find();
            if(empty($adminInfo['salt'])){
                //没有盐  第一次
                //第一次登录  生成盐
                $salt = rand(1,999999);
                $newPwd = md5(md5($data['user_pwd']).$salt);
                M('User')->where(['user_id'=>$adminInfo['user_id']])->save(['user_pwd'=>$newPwd,'salt'=>$salt]);
                if($adminInfo['user_pwd'] == md5($data['user_pwd'])){
                    //登录成功
                    $this->updataUser($adminInfo['user_id']);
                    session('isLogined',$adminInfo);
                    $this->redirect('Index/index');
                }else{
                    $this->error('管理员账号或密码不对');
                }
            }else{
                if($adminInfo['user_pwd'] == md5(md5($data['user_pwd']).$adminInfo['salt'])){
                    //登录成功
                    $this->updataUser($adminInfo['user_id']);
                    session('isLogined',$adminInfo);
                    $this->redirect('Index/index');
                }else{
                    $this->error('管理员账号或密码不对');
                }
            }
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
    	$this->display('Login/index');
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