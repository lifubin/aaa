<?php
class MemberModel extends Model {
    // 自动验证设置
    protected $_validate = array(
        array('mobile', 'require', '手机号必须！'),//1为必须验证
     	array('mobile', '/^1[3458]{1}\d{9}$/', '手机号不正确！'),
        array('password', 'require', '密码必须'),
    	array('email', 'email', '密码必须'),
    	array('status',array(1,2) , '密码必须',0,'in'),
     	array('nickname','require' , '昵称错误',0,64)
    );
    // 自动填充设置
    protected $_auto = array(
    	array('password','pwdHash',self::MODEL_BOTH,'callback'),
    	array('last_login_time','time',self::MODEL_UPDATE,'function'),
        array('register_time', 'time', self::MODEL_INSERT, 'function'),
    );
    
    protected function pwdHash() {
    	if(isset($_POST['password'])) {
    		return pwdHash($_POST['password']);
    	}else{
    		return false;
    	}
    }
}