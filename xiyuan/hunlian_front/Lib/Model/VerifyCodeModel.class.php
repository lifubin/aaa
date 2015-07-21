<?php
class VerifyCodeModel extends Model {
    // 自动验证设置
    protected $_validate = array(
        array('mobile', '/^1[3458]{1}\d{9}$/', '手机号必须！', Model::MUST_VALIDATE),//1为必须验证
        array('verify_code', 'require', '验证码必须',0,"6"),
    	array('code', 'verify_code', '验证码不正确',0,"confirm"),
        array('verify_session', 'require', '验证session必须',0,"32"),
    );
    // 自动填充设置
    protected $_auto = array(
        array('addtime', 'time', self::MODEL_INSERT, 'function'),
    );
}