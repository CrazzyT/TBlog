<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class TypeModel extends RelationModel
{
	protected $_validate = array(
			array('type_name','','该分类已存在！',1,'unique',1)
		);
}
?>