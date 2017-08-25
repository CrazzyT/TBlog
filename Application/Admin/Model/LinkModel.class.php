<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class LinkModel extends RelationModel
{
	protected $_validate = array(
			array('link_name','','该友链已存在！',1,'unique',1)
		);
}
?>