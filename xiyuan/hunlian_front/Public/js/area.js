function jqueryarea(provinceobjid,cityobjid,districtobjid){

		$("body").on("change","#"+provinceobjid,function(){

				var provinceid = $(this).val();
				console.log(provinceid);
				if(provinceid!=0){
					$.ajax({
						type:"post",
						url:"/Index/getCity",
						data:"type=ajax&provinceid="+provinceid,
						success:function(res){
							$("#"+cityobjid).html("<option value='0'>市</option>");
							$("#"+districtobjid).html("<option value='0'>县</option>");
							for(var i=0;i<res.length;i++){
								//console.log(res[i]);
								$("#"+cityobjid).append("<option value='"+res[i].serialId+"'>"+res[i].cityName+"</option>");
							}
							$( "#"+cityobjid ).selectmenu( "refresh" );
							$( "#"+districtobjid ).selectmenu( "refresh" );
						},
						dataType:"json"
					})			
				}
			});
			
			//点击市
			$("body").on("change","#"+cityobjid,function(){
				var cityid=$(this).val();
				if(typeof(cityid)!=="undefined" && cityid!=0){
					$.ajax({
						type:"post",
						url:"/Index/getDistrict",
						data:"type=ajax&cityid="+cityid,
						success:function(res){
							$("#"+districtobjid+"").html("<option value='0'>县</option>");
							for(var i=0;i<res.length;i++){
								//console.log(res[i]);
								$("#"+districtobjid+"").append("<option value='"+res[i].serialId+"'>"+res[i].districtName+"</option>");
							}
							$( "#"+districtobjid+"" ).selectmenu( "refresh" );
						},
						dataType:"json"
					})			
				}
			});
			
			
			
}