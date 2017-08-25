<?php
namespace Home\Controller;
use Think\Controller;
class AutoController extends Controller {
    public function _initialize(){
    	// parent::_initialize();
    	//记录来访信息
    	save_access();
    }
}