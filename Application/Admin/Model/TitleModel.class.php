<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class TitleModel extends RelationModel
{
	protected $_validate = array(
			array('title_name','','文章标题重复!',1,'unique',1)
		);
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