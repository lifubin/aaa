<?php

class MemberAction extends CommonAction {

	public function setting(){
		$this->display();
	}
	
	public function _before_index()
	{
		$id = $_SESSION["id"];
		$member_info = D("MemberInfo")->where(array("member_id"=>$id))->find();
		$member = D("Member")->where(array("id"=>$id))->find();
		$province = IndexAction::getProvince();
		$member_info = array_merge($member_info,$member);
		$InterestCharacter =D("InterestCharacter");
		$InterestCharacterlist = $InterestCharacter->select();
		//var_dump($InterestCharacterlist);
		$this->assign("province",$province);
		$this->assign("memberinfo",$member_info);
		$this->assign("interestCharacterlist",$InterestCharacterlist);
	}
	
	public function updateInfoAjax()
	{
		//var_dump($_POST);
		if(isset($_POST["interests"]) && is_array($_POST["interests"])){
			$_POST["interests"] = array_unique($_POST["interests"]);
			$_POST["interests"] = implode(",", $_POST["interests"]);
		}
		if(isset($_POST["character"]) && is_array($_POST["character"])){
			$_POST["character"] = array_unique($_POST["character"]);
			$_POST["character"] =  implode(",", $_POST["character"]);
		}
		echo D("MemberInfo")->where("member_id=".$_SESSION["id"])->save($_POST);
	}
	
	public function _after_insert()
	{
		$memberid = $this->_last_insert_id;
		D("memberinfo")->save(array("memberid"=>$memberid));
	}
	
	public function getSelfMemberInfoAjax(){
		$memberid = $_SESSION["id"];
		echo json_encode(D("MemberInfo")->where(array("member_id"=>$memberid))->find());
	}
	
	
	
	
}