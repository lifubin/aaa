<?php

import('@.ORG.Util.Cookie');
class IndexAction extends Action {

    // 首页
    public function index() {
    	
   
        $this->display();
    }

    //会员
    public function registerAjax(){
    	//var_dump($_POST);
    	$_POST["mobile"]=trim($_POST["reg_mobile"]);
    	$_POST["password"]=trim($_POST["reg_password"]);
    	$res = $this->insert();
    
    	$this->loginCookie($res["id"],$_POST["mobile"],$res["password"]);
    	$info = D("member")->find(array("mobile"=>$_POST["mobile"],"password"=>pwdHash($_POST["password"])));
    	if($info){
    		$this->loginCookie($info["id"],$info["mobile"],$info["password"]);
    	}
    	echo $res;
    	//echo json_encode(array("aaa"));
    }
    
    public function loginAjax(){
    	//var_dump($_POST);
    
    	$_POST["mobile"] = $_POST["login_mobile"];
    	$res = D("member")->where(array("mobile"=>$_POST["mobile"]))->find();
    	
    	if($res){
    		//var_dump($res["password"]);
    		//var_dump(pwdHash($_POST["login_password"]));
    		if(pwdHash($_POST["login_password"])==$res["password"]){
    			$this->loginCookie($res["id"],$res["mobile"],$res["password"]);
    			echo json_encode(array("info"=>"登录成功","status"=>1));
    		}else{
    			echo json_encode(array("info"=>"密码错误","status"=>0));
    		}
    	}else{
    		echo json_encode(array("info"=>"手机号码有误","status"=>0));
    	}
    }
    
    protected function loginCookie($id,$username,$password)
    {
    	//$authkey= pwdHash($id."_".$username."_".$password);
    	Cookie::set("authkey",session_id());
    	Cookie::set("username",$username);
    	//session_id();
    	session_start();
    	$_SESSION["username"]=$username;
    	$_SESSION["id"]=$id;
    
    }
    
    public function logout()
    {
    	$authkey = Cookie::get("authkey");
    	//Cookie::get("username");
    	//$authkey= md5($id."_".$username."_".$password);
    	session_id($authkey);
    	session_start();
    	unset($_SESSION["username"]);
    	unset($_SESSION["id"]);
    	session_destroy();
    	Cookie::delete("authkey");
    	Cookie::delete("username");
    	//$this->redirect("/");
    	echo <<<EOF
    	<script>location="/";</script>
EOF;
    
    }
    
    //获取省
    public static function getProvince($provinceid){
    	$m = M();
    	$sql = "select  serialId,provinceName  from province";
    	if(!empty($provinceid) || isset($_REQUEST["provinceid"])){
    		$provinceid = $provinceid?$provinceid:intval($_REQUEST["provinceid"]);
    		$sql.= " where  serialId=".intval($provinceid);
    	}
    
	    if(isset($_POST[type])&&$_POST[type]=="ajax"){
	    	echo json_encode($m->query($sql));
	    }else{
	   		return $m->query($sql);
	    }
    }
    
    //获取市
    public static function getCity($provinceid=0){
	    $m = M();
	    $sql = "select serialId,cityName from city";
	    if(!empty($provinceid) || isset($_REQUEST["provinceid"])){
		    $provinceid = $provinceid?$provinceid:intval($_REQUEST["provinceid"]);
		    $sql.= " where cityUpIdNum=".intval($provinceid);
    	}
    
    	if(isset($_POST[type])&&$_POST[type]=="ajax"){
    		echo json_encode($m->query($sql));
    	}else{
		    $result = $m->query($sql);
		    $tmp = array();
		    foreach($result as $key=>$value){
		    	$tmp[$value["serialId"]]=$value;
		    }
		    $result = $tmp;
		    return $result;
    	}	
    
    }
    
    //获取县
    public static function getDistrict($cityid=0){
	    $m = M();
	    $sql = "select serialId,districtName from district";
	    if(!empty($cityid) || isset($_REQUEST["cityid"])){
		    $cityid = $cityid?$cityid:intval($_REQUEST["cityid"]);
		    $sql.= " where districtUpIdNum=".intval($cityid);
	    }
    
	    if(isset($_POST[type])&&$_POST[type]=="ajax"  ){
	    	echo json_encode($m->query($sql));
	    }else{
		    $result = $m->query($sql);
		    $tmp = array();
		    foreach($result as $key=>$value){
		   		$tmp[$value["serialId"]]=$value;
		    }
		    $result = $tmp;
		    return $result;
    	}
    
    }
    
}