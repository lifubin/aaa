<?php
// 角色模块
class RoleAction extends CommonAction {
    function _filter(&$map){
        if(!empty($_POST['name'])) {
        $map['title'] = array('like',"%".$_POST['name']."%");
        }
    }


    public function _before_insert(){
    	$_POST["status"]=1;
    }
    
    public function _before_edit(){
       $Group = D('Role');
        //查找满足条件的列表数据
        $list     = $Group->field('id,name')->select();
        $this->assign('list',$list);
        $model = D("Node");
       	$nodelist = $model->where('status=1 and level<4')->order('type asc,pid asc,sort desc,id asc')->select();
       	if($nodelist){
       		$tmp = array();
       		foreach($nodelist as $value){
				if($value["level"]==1){
					$tmp[$value["id"]]=$value;
				}elseif ($value["level"]==2){
					$tmp[$value["pid"]]["subnode"][$value["id"]]=$value;
					$tmp[$value["id"]]=$value;
				}else{
					$tmp[$value["id"]]=$value;
					$tmp[$tmp[$value["pid"]]["pid"]]["subnode"][$value["pid"]]["subnode"][$value["id"]]=$value;
				}    			
       		}
       		foreach($tmp as $key=>$value){
       			if($value["pid"]!=0){
       				unset($tmp[$key]);
       			}
       		}
       		$nodelist = $tmp;
       		$this->assign('nodelist',$nodelist);
       	}
        $access = D("access");
        $access_list = $access->where("role_id=".$_GET["id"])->select();
        if($access_list){
        	$tmp = array();
        	foreach ($access_list as $value){
        		$tmp[$value["node_id"]]=$value["node_id"];
        	}
        	$access_list = $tmp;
        	$this->assign('accesslist',$access_list);
        }
        parent::_menu();
    }

    public function _after_update(){
        $access = D("access");
        $node = D("node");
       /* if (false === $model->create()) {
            $this->error($model->getError());
        }*/
        //保存当前数据对象
        //$id =  $model->save();
        //var_dump($_POST);
        if($_POST["id"]){
        	
        	$access->where("role_id=".$_POST["id"])->delete();
        	foreach ($_POST["node"] as $value){
        		//var_dump($value);
        		//var_dump("role_id=".$_POST["id"]." and node_id=".$value);
        		//
        		$result = $node->where("id=".$value)->find();
        		if($result["level"]<3){
        			continue;
        		}
        		$accessData = array();
        		$accessData["role_id"]=$_POST["id"];
        		$accessData["level"]=$result["level"];
        		
        		$accessData["pid"]=$result["pid"];
        		$accessData["node_id"]=$value;
        		
        		$access = M("access");
        		$r = $access->add($accessData);
        		
        		//var_dump($r);
        	}
        }
    	
    }
    
    public function _before_add(){
       	$Group = D('Role');
       	$_POST["status"]=1;
        //查找满足条件的列表数据
        $list     = $Group->field('id,name')->select();
        $this->assign('list',$list);
        //$nodelist = D("Node");
       	//$nodelist = $nodelist->where('status=1 and level<4')->order('type asc,pid asc,sort desc,id asc')->select();
        parent::_menu();
    }
    
    public function _before_index(){
    	$role = D("Role");
    	$list     = $role->field('id,name')->select();
        $this->assign('list',$list);
    	parent::_menu();
    }
    
}