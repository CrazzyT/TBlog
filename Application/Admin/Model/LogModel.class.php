<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class LogModel extends RelationModel
{
	protected $_link = array(    
		'User'=>array(        
			'mapping_type'  => self::BELONGS_TO,        
			'class_name'    => 'User',        
			'foreign_key'   => 'user_id',        
			'as_fields' => 'user_name',        
		),    
	);
}
?>