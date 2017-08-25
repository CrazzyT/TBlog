<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class LabelModel extends RelationModel
{
	protected $_validate = array(
			array('label_name','','该标签已存在！',1,'unique',1)
		);
}
?>