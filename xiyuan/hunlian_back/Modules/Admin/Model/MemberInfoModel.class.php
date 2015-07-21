<?php
// 用户模型
class MemberInfoModel extends CommonModel {
    public $_validate	=	array(
    	array('sex','required'),         
    	array('birthday','required'),
    );
}