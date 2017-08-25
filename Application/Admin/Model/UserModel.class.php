<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel
{
	protected $_validate = array(
			array('user_name','','管理员已存在！',1,'unique',1),
			array('repwd','user_pwd','确认密码不一致！',1,'confirm'),
			array('user_pwd','check_pwd','密码格式不正确',1,'function')
		);
}
?>