<?php
class MemberInfoModel extends Model {
    // 自动验证设置
    protected $_validate = array(
        array('description', 'require', '长度不能超过500字！', 0,500),//1为必须验证
    	array("province",'number',"请选择省"),
    	array("city",'number',"请选择市"),
    	array("district",'number',"请选择县"),
    	array("city",'number',"请选择省"),
    	array("memberid",'number',"会员id为数字",0,"unique"),
    	array("birthday",'number',"生日为数字"),
    	array("sex",array(0,1,2),"性别为数字",0,"between"),
    	array("height",'number',"身高为数字"),
    	array("weight",'number',"体重为数字"),
    	array("bloodtype",array('A','AB','B','O'),"血型不正确",0,"in"),
    	array("education",array('博士研究生','硕士研究生','本科','初中','大专','高中及中专'),"教育类型不正确",0,"in"),
    	array('occupation', 500, '职业小于500字！', 0,"length"),
    	array('income', "number", '收入为数字！'),
    	array('marriage', "number", '婚姻位数字！'),
    	array('have_children', "number", '值位数字！'),
    	array('remote_love', "number", '值位数字！'),
    	array('parent_together', "number", '值位数字！'),
    	array('album', "require", '相册不为空！'),
    	array('header', "require", '头像不为空！'),
    	array('realname', "require", '姓名不为空！'),
    	array('conditions_province', "number", '择偶条件省选择错误！'),
    	array('conditions_city', "number", '择偶条件市选择错误！'),
    	array('conditions_district', "number", '择偶条件区选择错误！'),
    	array('conditions_age_max', "number", '择偶条件最大年龄填写错误！'),
    	array('conditions_age_min', "number", '择偶条件最小年龄填写错误！'),
    	array('conditions_height_max', "number", '择偶条件最大身高填写错误！'),
    	array('conditions_height_min', "number", '择偶条件最小身高填写错误！'),
    	array('conditions_income_min', "number", '择偶条件最低收入填写错误！'),
    	array('conditions_edu_min', "require", '择偶条件最低教育水平填写错误！'),
    );
    // 自动填充设置
    protected $_auto = array(
        //array('create_time', 'time', self::MODEL_INSERT, 'function'),
    );
}