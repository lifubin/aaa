$("#submit_love_declaration").click(function(){
	
})

function Member(){
	
	var o = {};
	
	function init(){
		
		if(typeof($.cookie('authkey'))=="undefined"){
			//location = "/Index/index?login";
			loginwin();
			return false;
		}else{
			return true;
		}
	}
	
o.love_declarationwin = function (){
	if(!init())return;
	$('#love_declaration').modal('show');
	$("#submit_love_declaration").click(function(){
		love_declarationAjax();
		
	});
}

function love_declarationAjax()
{
	var data = $("#love_declarationAjax").serialize();
	
	$.ajax({
		"type": 'POST', 
		"url":"/Member/updateInfoAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			if(res==1){
				//$("#alert_love_declaration").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
				$('#love_declaration').modal('hide')
				//location.reload();
				$("#memberinfo_description").html($("#form_description").val());
			}else{
				var id = $("#love_declaration .alert-danger");
				id.show().html("信息修改失败");
				setTimeout(function () {
					id.fadeOut(1000);
			    }, 5000);
			}
		}
	});
}

o.memberinfowin = function(){
	if(!init())return;
	$('#member_info').modal('show');
	$("#submit_member_info").click(function(){
		member_infoAjax();
	});
	/*$("#member_info").removeClass("hidden").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	     width:450,
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  member_infoAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	       $(this).dialog("close");
	      }
	     }
   });*/
}

function member_infoAjax()
{
	var data = $("#member_infoAjax").serialize();
	$.ajax({
		"type": 'POST', 
		"url":"/Member/updateInfoAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			console.log(res);
			if(res==1){
				$("#alert_member_info").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
				location.reload();
			}else{
				$("#alert_member_info").removeClass("alert-error").addClass("alert-error").html("修改失败").removeClass("hidden");
			}
		},
		"failed":function(res){
			//console.log(res);
		}
	});
}

//生活习惯窗口
o.livinghabitswin = function(){
	if(!init())return;
	$('#Living_habits').modal('show');
	$("#submit_Living_habits").click(function(){
		 livinghabitsAjax();
	});
	/*
	$("#Living_habits").removeClass("hidden").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	     width:450,
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  livinghabitsAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	       $(this).dialog("close");
	      }
	     }
   });*/
}


function livinghabitsAjax()
{
	var data = $("#Living_habitsAjax").serialize();
	console.log(data);
	$.ajax({
		"type": 'POST', 
		"url":"/Member/updateInfoAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			if(res==1){
				$("#alert_Living_habits").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
				location.reload();
			}else{
				$("#alert_Living_habits").removeClass("alert-error").addClass("alert-error").html("修改失败").removeClass("hidden");
			}
		}
	});
}



//征友条件
o.partnerconditionswin = function(){
	
	if(!init())return;
	$('#Partner_conditions').modal('show');
	$("#submit_Partner_conditions").click(function(){
		 partnerconditionsAjax();
	});
/*	$("#Partner_conditions").removeClass("hidden").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	     width:450,
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  partnerconditionsAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	    	  $(this).dialog("close");
	      }
	 }
   });*/
}


function partnerconditionsAjax()
{
	var data = $("#Partner_conditionsAjax").serialize();
	console.log(data);
	$.ajax({
		"type": 'POST', 
		"url":"/Member/updateInfoAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			if(res==1){
				$("#alert_Partner_conditions").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
				location.reload();
			}else{
				$("#alert_Partner_conditions").removeClass("alert-error").addClass("alert-error").html("修改失败").removeClass("hidden");
			}
		}
	});
}




//兴趣
o.hobbywin = function (){
	if(!init())return;
	$("#Hobby").modal('show');
	$("#submit_Hobby").click(function(){
		 hobbyAjax();
		
	});
	/*$("#Hobby").removeClass("hidden").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	     width:450,
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  hobbyAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	    	  $(this).dialog("close");
	      }
	 }
 });*/
}


function hobbyAjax()
{
	var data = $("#HobbyAjax").serialize();
	console.log(data);
	$.ajax({
		"type": 'POST', 
		"url":"/Member/updateInfoAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			if(res==1){
				$("#alert_Hobby").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
				location.reload();
			}else{
				$("#alert_Hobby").removeClass("alert-error").addClass("alert-error").html("修改失败").removeClass("hidden");
			}
		}
	});
}
 

o.albumwin = function (){
	if(!init())return;
	$("#album").modal('show');
	$("#submit_album").click(function(){
		love_declarationAjax();
		
	});
	/*
	$("#album").removeClass("hidden").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	     width:450,
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  //hobbyAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	    	  $(this).dialog("close");
	      }
	 }
 });*/
}


return o;

}


