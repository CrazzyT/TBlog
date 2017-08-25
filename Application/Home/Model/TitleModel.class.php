<?php
namespace Home\Model;
use Think\Model\RelationModel;
class TitleModel extends RelationModel
{
	protected $_link = array(    
		'Type'=>array(        
			'mapping_type'  => self::BELONGS_TO,        
			'class_name'    => 'Type',        
			'foreign_key'   => 'type_id',        
			'as_fields' => 'type_name',        
		),    
	);
}
?>