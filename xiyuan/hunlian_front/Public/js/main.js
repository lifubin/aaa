  function loginwin(){
	  $("#loginwin").modal('show');
		$("#loginwin_submit").click(function(){
			loginAjax();
		}); 
	  
   /* $("#loginwin").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	    
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	      "Ok": function() {
	    	  loginAjax();
	       //$(this).dialog("close");
	      },
	      "Cancel": function() {
	    	  $(this).dialog("close");
	    	 
	      }
	     }
    });*/
 }
  
  
  
function registerwin(){
	
	
	 $("#registerwin").modal('show');
		$("#loginwin_submit").click(function(){
			registerAjax();
		}); 
/*	$("#registerwin").dialog({
	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
	    
	     modal:true,//这个就是遮罩效果  
	     buttons: {
	    	"提交": function() {
	    		 //$("#regform").submit()
	    	  	registerAjax();//在这里调用函数
	    	  	//location.reload();
	          //  $(this).dialog("close");
	           // $("#regwinhtml").remove();
	    	},
	    	"取消": function() {
	    		 $(this).dialog("close");
	  	   	}
	  	 }
   });*/
}
  

function loginAjax()
{
	var data = $("#loginAjax").serialize();
	$.ajax({
		"type": 'POST', 
		"url":"/Index/loginAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			
			
			if(res.status==1){
				$("#alert_login").removeClass("alert-error").addClass("alert-success").html(res.info).removeClass("hidden");
				location.reload();
			}else{
				$("#alert_login").removeClass("alert-error").addClass("alert-error").html(res.info).removeClass("hidden");
				//location="/";
			}
		}
	});
}

function registerAjax()
{
	
	//验证手机号
	var data = $("#regform").serialize()
	//console.log(data);
	$.ajax({
		"type": 'POST', 
		"url":"/Index/registerAjax",
		"data":data,
		"dataType":"json",
		"success":function(res){
			if(res.status==1){
				$("#alert").removeClass("alert-error").addClass("alert-success").html(res.info).removeClass("hidden");
				loaction.reload();
			}else{
				$("#alert").removeClass("alert-error").addClass("alert-error").html(res.info).removeClass("hidden");
			}
		}
	});
	/*
	$.post("/Member/loginAjax",function(res){
		
		console.log(res);
	},'json');
	*/
}

//获取验证码
function getVerifyCode()
{
	$.post("/Index/getVerifyCodeAjax",function(res){
		console.log(res);
	},'json');
}


$(function(){
	
	$("#getVerifyCode").on("click",function(){
		getVerifyCode();
	});
});
