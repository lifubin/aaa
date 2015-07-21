  function loginwin(){
        	$("#loginwin").dialog({
        	     autoOpen: true,//如果设置为true，则默认页面加载完毕后，就自动弹出对话框；相反则处理hidden状态。
        	     bgiframe: true, //解决ie6中遮罩层盖不住select的问题 
        	    
        	     modal:true,//这个就是遮罩效果  
        	     buttons: {
        	      "Ok": function() {
        	          test();//在这里调用函数
        	       $(this).dialog("close");
        	      },
        	      "Cancel": function() {
        	       $(this).dialog("close");
        	      }
        	     }
        	    });
        }