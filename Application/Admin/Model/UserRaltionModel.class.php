<?php
/*
 * 用户与角色关联模型
 */
namespace Admin\Model;

use Think\Model;

class UserRaltionModel extends Model\RelationModel
{
    //定义主表名称
    protected $tableName = 'user';
    //定义关联关系
    protected $_link = array(
        'role'=>array(
            'mapping_type'=>self::MANY_TO_MANY,
            'foreign_key'=>'user_id',//指定主表外键
            'relation_key'=>'role_id',//指定关联表外键
            'relation_table'=>'role_user',//指定中间表名称
            'mapping_fields'=>'id,name,remark'//读取的字段
        ),
    );
}