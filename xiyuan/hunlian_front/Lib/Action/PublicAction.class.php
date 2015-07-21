<?php

class PublicAction extends Action {
	
	public function upload(){
		
		if($_POST['type']=="header"){
			$targetFolder = '/Public/uploads/headers/';
			$width="150";
		}elseif($_POST['type']=="album"){
			$targetFolder = '/Public/uploads/album/';
			$width = "200";
		}else{
			echo json_encode(array("code"=>0,"info"=>"error file Storage"));
			exit;
		}
		import('@.ORG.Util.Image');
		$verifyToken = md5('unique_salt' . $_POST['timestamp']);
		
		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			if(($_FILES[size]/(1024*1024))>5){
				echo json_encode(array("code"=>0,"info"=>"filesize is too large"));
				exit;
			}
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetDoc = rtrim($targetPath,'/') . '/' ;
		
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			$targetFileName = md5($fileParts[filename].time().rand(1,1000)).".".$fileParts['extension'];
			if (in_array($fileParts['extension'],$fileTypes)) {
				
				move_uploaded_file($tempFile,$targetDoc.$targetFileName);
				Image::thumb($targetDoc.$targetFileName, $targetDoc."thumb_".$targetFileName,"",$width);
				
				echo json_encode(array("code"=>1,"filepath"=>$targetFileName,"info"=>"upload success"));
				exit;
			} else {
				echo json_encode(array("code"=>0,"info"=>"upload failed"));
				exit;
			}
		}else{
			echo json_encode(array("code"=>0,"info"=>"valid error"));exit;
		}
	}
	
	
	
}