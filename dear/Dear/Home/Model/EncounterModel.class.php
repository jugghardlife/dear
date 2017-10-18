<?php
namespace Admin\Model;
use Think\Model;
use Think\Model\RelationModel;

class EncounterModel extends RelationModel {
    protected $_link=array(
        'User'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'foreign_key'=>'uid',
            'mapping_fields'=>'username',
            'as_fields'=>'username',
        ),
    );
}