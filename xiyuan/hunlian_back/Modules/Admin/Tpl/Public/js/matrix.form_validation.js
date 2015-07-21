
$(document).ready(function(){
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	//节点验证
	$("#node_form").validate({
		rules:{
			name:{
				required:true,
				maxlength:32,
			},
			title:{
				required:true
			},
			pid:{
				required:true,
				number:true 
			}
			
		},
		messages:{
			name:{
	    	  required:"节点名不能为空",
	    	  maxlength:"输入的范围在1-32之间的字符."
			},
			title:{
	    	  required:"标题不能为空",
	    	  maxlength:"输入的范围在1-32之间的字符."
			},
			pid:{
	    	  required:"请选择父节点",
	    	  maxlength:"输入的范围在1-32之间的字符."
			}
	    },
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	//角色验证
	$("#role_form").validate({
		rules:{
			name:{
				required:true,
				maxlength:32,
			},
			ename:{
				required:true,
				maxlength:32,
			}
			
		},
		messages:{
			name:{
	    	  required:"角色名不能为空",
	    	  maxlength:"输入的范围在1-32之间的字符."
			},
			ename:{
	    	  required:"角色英文名不能为空",
	    	  maxlength:"输入的范围在1-32之间的字符."
			}
	    },
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	
  /*  $("#node_add_form").validate({
		rules:{
			name:{
				required:true
			},
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});*/
	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			pwd2:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
});
