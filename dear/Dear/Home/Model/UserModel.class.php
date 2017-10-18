<?php
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;

class UserModel extends RelationModel {
    protected $_validate = array(
    	array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    	array('password','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
    	array('repassword', 'password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
    	array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
   	);

    protected $_auto = array (
        array('password', 'md5', 3, 'function') , // 对password字段在新增和编辑的时候使md5函数处理
        array('date', 'time', 1, 'function'), // 对date字段在新增的时候写入当前时间戳
    );
}