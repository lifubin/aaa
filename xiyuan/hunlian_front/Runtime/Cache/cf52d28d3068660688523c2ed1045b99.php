<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>惜缘</title>
    
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.css" />
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap-responsive.css" />
    
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/lightbox/themes/default/jquery.lightbox.css" />
   	<link rel="stylesheet" href="__PUBLIC__/css/style.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css" />
 
    <!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
<![endif]-->
	

</head>
<body>
    <!--top_menu-->
    <div class="row-fluid top_menu">
        <div class="container">
            <div class="row">
                <div class="span13">
                    <nav>
                        <ul>
                            <!--enter your links and pages-->
                            <li><a href="/">首页</a></li>
                            <li><a href="gril_friend.html">女朋友</a></li>
                            <li><a href="#about">男朋友</a></li>
                            <li><a href="#Our_news">游玩</a></li>
                            <li><a href="#Our_story">美食</a></li>
                            <li><a href="#photos">购物</a></li>
                            <li><a href="#ceremony">电影</a></li>
                            <li><a href="#ceremony">游戏</a></li> 
                            <li><a href="#ceremony">搜缘</a></li>
                        </ul>
                        <select id="navigation_select">

                            <option value="" selected="selected">菜单</option>
                            <option value="/">首页</option>
                            <option value="#about">女朋友</option>
                            <option value="#Our_news">男朋友</option>
                            <option value="#Our_story">游玩</option>
                            <option value="#photos">美食</option>
                            <option value="#ceremony">购物</option>
                             <option value="#short">电影</option>
                             <li><a href="#ceremony">游戏</a></li>
                        </select>
                    </nav>
                    <span class="like2">
                    
                    	<?php if(!empty(Cookie::get("username"))){ ?>
                    		<div class="btn-group">
                    			
                        		<a href="#" data-toggle="dropdown" class="btn btn-danger" style="color:##ffffff;"><?php echo Cookie::get("username"); ?> (5)</a>
		                        <ul class="dropdown-menu">
		                            <li><a href="/Member/index">我的空间</a></li>
		                            <li><a href="/Member/setting">账号设置</a></li>
		                            <li><a href="#">我的消息(5)</a></li>
		                            <li><a href="#">我的关注</a></li>
		                            <li><a href="#">谁关注我</a></li>
		                            <li><a href="#">谁看过我</a></li>
		                            <li><a href="/Index/logout">退出惜缘</a></li>
		                        </ul>
                    		</div>
                    	<?php }else{ ?>
		                    <a href="javascript:void(0)" onclick="loginwin()">登录</a>
		                    <a href="javascript:void(0)" onclick="registerwin()">注册</a>
		                    <a href="javascript:void(0)" >忘记密码</a>
	                    <?php } ?>
                    </span>
                </div>

            </div>
        </div>
    </div>
    <!--slider_images-->
 
    <!--contant_one_page-->
    <div class="flag" id="about"></div>
    <div class="fulli_page_about">
        <div class="row-fluid bg_about">

            <div class="container about_block">
                <div class="span12 "></div>
                <div class="container page_bg">
	                <div class="span12 ">爱情宣言  <div class="btn-group"> <button class="btn btn-primary" data-toggle="modal" id= "love_declaration_btn">编辑</button></div></div>
	                <div class="row">
	                    <div class="span12">
	                        <div class="photo_about">
	                            <div><img src="__PUBLIC__/images/elena.png" alt="" id="header_upload" /></div>
	                        </div>
	                        <span id="memberinfo_description"><?php echo ($memberinfo["description"]); ?></span>
	                	</div>
	           	 	</div>
           	 	</div>
           	 	<div class="span12 "></div>
           	 	<div class="container page_bg">
	           	 	<div class="span12 ">个人信息  <div class="btn-group"> <a href="javascript:void(0)" id="memberinfo_btn" class="btn btn-primary">编辑</a></div></div>
		               	<table class="table table-striped">
		                         <tbody>
		                            <tr>
		                                <td>姓名</td>
		                                <td> <?php echo ($memberinfo["realname"]); ?></td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>性别</td>
		                                <td> <?php echo ($memberinfo["sex"]==1?"男":($memberinfo["sex"]==2?"女":"未知")); ?></td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>身高</td>
		                                <td> <?php echo $memberinfo["height"]?($memberinfo["height"]."CM"):"未知"; ?></td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>体重</td>
		                                <td> <?php echo $memberinfo["weight"]?($memberinfo["weight"]."KG"):"未知"; ?>  </td>
		                                <td>&nbsp;</td>
		                            </tr>
		                             <tr>
		                                <td>血型</td>
		                                <td> <?php echo $memberinfo["bloodtype"]?($memberinfo["bloodtype"]."型"):"未知"; ?> </td>
		                                <td>&nbsp;</td>
		                            </tr>
		                             <tr>
		                                <td>学历</td>
		                                <td> <?php echo ($memberinfo["education"]); ?> </td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>居住地</td>
		                                <td> <?php  $province = IndexAction::getProvince($memberinfo[province]); $city = IndexAction::getCity($memberinfo[province]); $district = IndexAction::getDistrict($memberinfo[city]); echo $province[0]["provinceName"]." &nbsp; ".$city[$memberinfo[city]]["cityName"]." &nbsp; ".$district[$memberinfo[district]]["districtName"]; ?> 
										</td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>职业</td>
		                                <td><?php echo ($memberinfo[occupation]); ?> </td>
		                                <td>&nbsp;</td>
		                            </tr>
		                            <tr>
		                                <td>月收入</td>
		                                <td> <?php echo ($memberinfo[income]); ?></td>
		                                <td>&nbsp;</td>
		                            </tr>
		                             <tr>
		                                <td>婚姻状况</td>
		                                <td> <?php echo ($memberinfo[marriage]==0?"未知":($memberinfo[marriage]==1?"未婚":"已婚")); ?></td>
		                                <td>&nbsp;</td>
		                            </tr>
		                        </tbody>
		                    </table>
	                </div>
                 <div class="span12 "></div>
                 <div class="container page_bg">
           	 	<div class="span12 ">兴趣性格  <div class="btn-group"> <a href="javascript:void(0)" class="btn btn-primary" id="hobby_btn">编辑</a></div></div>
                <table class="table table-striped">
                         <?php  if($memberinfo["interests"]){ $memberinfo["interests"] = explode(",",$memberinfo["interests"]); } if($memberinfo["character"]){ $memberinfo["character"] = explode(",",$memberinfo["character"]); } ?>
                         <tbody>
                            <tr>
                                <td>兴趣爱好</td>
                                <td> 
                                	<?php  $interests_array=array(); foreach($interestCharacterlist as $value){ if(in_array($value[id],$memberinfo["interests"])){ $interests_array[]=$value["title"]; } } echo implode(',',$interests_array); ?>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>性格特征</td>
                                <td> 
                                <?php  $character_array=array(); foreach($interestCharacterlist as $value){ if(in_array($value[id],$memberinfo["character"])){ $character_array[]=$value["title"]; } } echo implode(',',$character_array); ?>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="span12 "></div>
                <div class="container page_bg">
	           	 	<div class="span12 ">生活习惯   <div class="btn-group"> <a href="javascript:void(0)" id="Living_habits_btn" class="btn btn-primary">编辑</a></div></div>
	                <table class="table table-striped">
                         <tbody>
                            <tr>
                                <td>是否要小孩</td>
                                <td> <?php echo ($memberinfo[have_children]==1?"要":"不要"); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>能否接受异地恋</td>
                                <td> <?php echo ($memberinfo[remote_love]==1?"接受":"不接受"); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td>是否婚后和父母同住</td>
                                <td> <?php echo ($memberinfo[parent_together]==1?"不在一起":"在一起"); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="span12 "></div>
                <div class="container page_bg">
	           	 	<div class="span12 ">征友条件   <div class="btn-group"> <a href="javascript:void(0)" id="Partner_conditions_btn" class="btn btn-primary">编辑</a></div></div>
	                <table class="table table-striped">
                         <tbody>
                            <tr>
                                <td>居住地</td>
                                <td> 
                                	<?php  $province = IndexAction::getProvince($memberinfo[conditions_province]); $city = IndexAction::getCity($memberinfo[conditions_province]); $district = IndexAction::getDistrict($memberinfo[conditions_city]); echo $province[0]["provinceName"]."省".$city[$memberinfo[conditions_city]]["cityName"]."市".($district[$memberinfo[conditions_district]]["districtName"]?$district[$memberinfo[conditions_district]]["districtName"]."区":""); ?> 
                                
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>年龄</td>
                                <td> <?php echo ($memberinfo[conditions_age_min]); ?> - <?php echo ($memberinfo[conditions_age_max]); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>身高</td>
                                <td> <?php echo ($memberinfo[conditions_age_min]); ?> - <?php echo ($memberinfo[conditions_age_max]); ?> </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>最低收入</td>
                                <td> <?php echo ($memberinfo[conditions_income_min]); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                             <tr>
                                <td>最低学历</td>
                                <td> <?php echo ($memberinfo[conditions_edu_min]); ?></td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="span12 "></div>
                <div class="container page_bg">
           	 	<div class="span12 ">我的相册   <div class="btn-group"> <a href="javascript:void(0)" id="album_btn" class="btn btn-primary">编辑</a></div></div>
  					<div class="span12">
                    <div class="row">
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image10.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">11</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image11.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">55</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image12.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">14</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>


                                <div class="like_gallery"><span class="like"><a href="#">314</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image10.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">4</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image11.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">13412</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image12.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">3345</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
             	</div>
             </div>
        </div>
    </div>
    <!--contant_two_page-->
    
    <div class="flag" id="photos"></div>
    <div class="fulli_page">
        <div class="container page_bg">
            <div class="row">

                <div class="span12 love_badge">
                </div>
                <div class="span12">
                    <div class="row">
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image10.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">11</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image11.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">55</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image12.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">14</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">314</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image10.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                      

                                <div class="like_gallery"><span class="like"><a href="#">4</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image11.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">13412</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image12.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">3345</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span2 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image13.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_bottom"><h5><a href="#">更多</a></h5></div>
        </div>
    </div>
 



<!--button class="btn btn-primary" data-toggle="modal"  data-target="#myModal"> 开始演示模态框</button-->

<!-- 爱情宣言（Modal） -->
<div class="modal fade hide" id="love_declaration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">恋爱宣言</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="love_declarationAjax" class="form-horizontal" >
         		   <div class="form-group">
				      <label for="name">宣言</label>
				      <textarea  class="form-control" name="description" id="form_description" placeholder="输入您的恋爱宣言"></textarea>
				   </div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_love_declaration">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>

<?php  $province = IndexAction::getProvince() ?>


<!-- 基本信息（Modal） -->
<div class="modal fade hide" id="member_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">基本信息</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide">成功！很好地完成了提交。</div>
         	<form id="member_infoAjax"  role="form">
         		<div class="form-group">
				   <label for="realname" class="col-sm-2 control-label">姓名</label>
				   <div class="col-sm-10">
				      <input type="text" class="form-control" id="realname"  name="realname"  placeholder="请输入姓名"  value="<?php echo ($memberinfo[realname]); ?>" >
				   </div>
				</div>
				<div class="form-group">
	         		<label for="province" class="col-sm-2 control-label">所在地</label>
					<select id="province" name="province" >
			      		<option value="0">省</option>
						<?php foreach($province as $vo){ ?>
							<option value="<?php echo ($vo[serialId]); ?>" <?php if($memberinfo[province]==$vo["serialId"])echo "selected=selected"; ?> ><?php echo ($vo[provinceName]); ?></option>
						<?php } ?>
					</select>
					<select id="city" name="city">
			      		<option value="0">市</option>
						<?php  $citylist = IndexAction::getCity($memberinfo[province]); foreach($citylist as $value){ $selected = ""; if($value["serialId"]==$memberinfo[city])$selected="selected=true"; echo '<option value="'.$value["serialId"].'" '.$selected.' >'.$value["cityName"].'</option>'; } ?>
					</select>
					<select id="district" name="district">
			      		<option value="0">县</option>
						<?php  $districtlist = IndexAction::getDistrict($memberinfo[city]); foreach($districtlist as $value){ $selected = ""; if($value["serialId"]==$memberinfo[district])$selected="selected=true"; echo '<option value="'.$value["serialId"].'" '.$selected.' >'.$value["districtName"].'</option>'; } ?>
					</select>
				</div>
					
      <div class="form-group"><label for="education">学历</label>
      <select id="education" name="education">
      		<option value="">请选择</option>
			<option value="博士研究生" <?php if( $memberinfo[education]=="博士研究生") echo "selected=true"; ?> >博士研究生</option>
			<option value="硕士研究生" <?php if( $memberinfo[education]=="硕士研究生") echo "selected=true"; ?> >硕士研究生</option>
			<option value="本科" <?php if( $memberinfo[education]=="本科") echo "selected=true"; ?> >本科</option>
			<option value="大专" <?php if( $memberinfo[education]=="大专") echo "selected=true"; ?> >大专</option>
			<option value="高中及中专" <?php if( $memberinfo[education]=="高中及中专") echo "selected=true"; ?> >高中及中专</option>
			<option value="初中" <?php if( $memberinfo[education]=="初中") echo "selected=true"; ?> >初中</option>
		</select></div>
	  <div class="form-group"><label for="occupation">职业</label>
     <select id="occupation" name="occupation">
      		<option value="">请选择</option>
			<option value="在校学生" <?php if( $memberinfo[occupation]=="在校学生") echo "selected=true"; ?> >在校学生</option>
			<option value="军人" <?php if( $memberinfo[occupation]=="军人") echo "selected=true"; ?> >军人</option>
			<option value="私营业主" <?php if( $memberinfo[occupation]=="私营业主") echo "selected=true"; ?> >私营业主</option>
			<option value="企业职工" <?php if( $memberinfo[occupation]=="企业职工") echo "selected=true"; ?> >企业职工</option>
			<option value="农业劳动者" <?php if( $memberinfo[occupation]=="农业劳动者") echo "selected=true"; ?> >农业劳动者</option>
			<option value="事业单位" <?php if( $memberinfo[occupation]=="事业单位") echo "selected=true"; ?> >事业单位</option>
			<option value="其他" <?php if( $memberinfo[occupation]=="其他") echo "selected=true"; ?> >其他</option>
		</select></div>
		 <div class="form-group"><label for="income">月收入</label>
		<select id="income" name="income">
      		<option value="">请选择</option>
			<option value="2000" <?php if( $memberinfo[income]<=2000) echo "selected=true"; ?> >低于2000</option>
			<option value="5000" <?php if( $memberinfo[income]<=5000) echo "selected=true"; ?> >2000-5000</option>
			<option value="10000" <?php if( $memberinfo[income]<=10000) echo "selected=true"; ?> >5000-10000</option>
			<option value="20000" <?php if( $memberinfo[income]<=20000) echo "selected=true"; ?> >10000-20000</option>
			<option value="20001"  <?php if( $memberinfo[income]>2000) echo "selected=true"; ?> >20000以上</option>
		</select></div>
		<div class="form-group"><label for="marriage">婚姻状况</label>
		<select id="marriage" name="marriage">
      		<option value="">请选择</option>
			<option value="1"  <?php if( $memberinfo[marriage]==1) echo "selected=true"; ?> >未婚</option>
			<option value="2"  <?php if( $memberinfo[marriage]==2) echo "selected=true"; ?> >丧偶</option>
			<option value="3"  <?php if( $memberinfo[marriage]==3) echo "selected=true"; ?> >离异</option>
		</select></div>
		<div class="form-group"><label for="bloodtype">血型</label>
		<select id="bloodtype" name="bloodtype">
	     	<option value="">请选择</option>
			<option value="A" <?php if( $memberinfo[bloodtype]=="A") echo "selected=true"; ?> >A</option>
			<option value="B" <?php if( $memberinfo[bloodtype]=="B") echo "selected=true"; ?> >B</option>
			<option value="AB" <?php if( $memberinfo[bloodtype]=="AB") echo "selected=true"; ?> >AB</option>
			<option value="O" <?php if( $memberinfo[bloodtype]=="O") echo "selected=true"; ?> >O</option>
		</select></div>
      	<div class="form-group"><label for="sex">性别</label>
		<select id="sex" name="sex">
	     	<option value="">请选择</option>
			<option value="1" <?php if( $memberinfo[sex]==1) echo "selected=true"; ?> >男</option>
			<option value="2" <?php if( $memberinfo[sex]==2) echo "selected=true"; ?> >女</option>
		</select></div>
		
      <div class="form-group"><label for="height">身高</label>
      <input type="text" name="height" id="height"  class="text ui-widget-content ui-corner-all" placeholder="CM" value="<?php echo ($memberinfo[height]); ?>"></div>
      <div class="form-group"><label for="weight">体重</label>
      <input type="text" name="weight" id="weight"  class="text ui-widget-content ui-corner-all" placeholder="KG" value="<?php echo ($memberinfo[weight]); ?>"></div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_member_info">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<!-- 兴趣爱好（Modal） -->
<div class="modal fade hide" id="Hobby" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">兴趣爱好</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="HobbyAjax" class="form-horizontal" role="form">
         		   <div class="form-group"><label for="interests">性格特征</label>
			<table  class="table table-striped">
			<?php
 $instrestsize = 0; $charactorsize = 0; foreach($interestCharacterlist as $vo){ if($vo['type']==1) $instrestsize++; else $charactorsize++; } $n=0; $have_tr_start=1; $have_tr_end=0; foreach($interestCharacterlist as $vo){ if($vo[type]==1){ if($n%4==0){ $have_tr_start=1; } if($have_tr_start==1){ echo "<tr>"; $have_tr_start=0; } ?>
				<td><input type="checkbox" name="interests[]" value="<?php echo ($vo[id]); ?>" <?php if(in_array($vo[title],$interests_array))echo "checked=checked"; ?> ><?php echo ($vo[title]); ?></td>
				<?php  $n++; if($n%4==0){ $have_tr_end=1; } if($have_tr_end==1 || $instrestsize==$n){ echo "</tr>";$have_tr_end=0; } } } ?>
			</table>
		</div>
		
		<div class="form-group"><label for="character">兴趣爱好</label>
			<table  class="table table-striped">
			<?php  $n=0; $have_tr_start=1; $have_tr_end=0; foreach($interestCharacterlist as $vo){ if($vo[type]==2){ if($n%4==0){ $have_tr_start=1; } if($have_tr_start==1){ echo "<tr>"; $have_tr_start=0; } ?>
	     		<td><input type="checkbox" name="character[]" value="<?php echo ($vo[id]); ?>" <?php if(in_array($vo[title],$character_array))echo "checked=checked"; ?> ><?php echo ($vo[title]); ?></td>
				<?php  $n++; if($n%4==0){ $have_tr_end=1; } if($have_tr_end==1 || $instrestsize==$n){ echo "</tr>";$have_tr_end=0; } } } ?>
			</table>
		</div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_Hobby">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<div class="modal fade hide" id="Living_habits" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">生活习惯</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="Living_habitsAjax" class="form-horizontal" >
         		   <div class="form-group"><label for="have_children">是否要小孩</label>
				<select id="have_children" name="have_children">
			     	<option value="0">请选择</option>
					<option value="1"  <?php if($memberinfo[have_children]==1)echo "selected=selected"; ?> >要</option>
					<option value="2" <?php if($memberinfo[have_children]==2)echo "selected=selected"; ?> >不要</option>
				</select>
				</div>
				<div class="form-group"><label for="remote_love">能否接受异地恋</label>
				<select id="remote_love" name="remote_love">
			     	<option value="0">请选择</option>
					<option value="1" <?php if($memberinfo[remote_love]==1)echo "selected=selected"; ?> >接受</option>
					<option value="2" <?php if($memberinfo[remote_love]==2)echo "selected=selected"; ?> >不接受</option>
				</select>
				</div>
				<div class="form-group"><label for="parent_together">是否婚后和父母同住</label>
				<select id="parent_together" name="parent_together">
			     	<option value="0">请选择</option>
					<option value="1" <?php if($memberinfo[parent_together]==1)echo "selected=selected"; ?>  >是</option>
					<option value="2" <?php if($memberinfo[parent_together]==2)echo "selected=selected"; ?>  >否</option>
				</select>
				</div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_Living_habits">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<div class="modal fade hide" id="Partner_conditions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">征友条件</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="Partner_conditionsAjax" class="form-horizontal" >
         		   <div class="form-group"><label for="have_children">居住地</label>
		<select id="conditions_province" name="conditions_province" >
      		<option value="0">省</option>
      		<?php $province = IndexAction::getProvince() ?>
			<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["serialId"]); ?>" <?php if($memberinfo[conditions_province]==$vo["serialId"])echo "selected=selected"; ?> ><?php echo ($vo["provinceName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<select id="conditions_city" name="conditions_city">
      		<option value="0">市</option>
			<?php  $citylist = IndexAction::getCity($memberinfo[conditions_province]); foreach($citylist as $value){ $selected = ""; if($value["serialId"]==$memberinfo[conditions_city])$selected="selected=true"; echo '<option value="'.$value["serialId"].'" '.$selected.' >'.$value["cityName"].'</option>'; } ?>
		</select>
		<select id="conditions_district" name="conditions_district">
      		<option value="0">县</option>
			<?php  $districtlist = IndexAction::getDistrict($memberinfo[conditions_city]); foreach($districtlist as $value){ $selected = ""; if($value["serialId"]==$memberinfo[conditions_district])$selected="selected=true"; echo '<option value="'.$value["serialId"].'" '.$selected.' >'.$value["districtName"].'</option>'; } ?>
		</select>
		</div>
		
		<div class="form-group"><label for="conditions_income_min">月收入</label>
			<select id="conditions_income_min" name="conditions_income_min">
	      		<option value="">请选择</option>
				<option value="2000" <?php if( $memberinfo[conditions_income_min]<=2000) echo "selected=true"; ?> >低于2000</option>
				<option value="5000" <?php if( $memberinfo[conditions_income_min]<=5000) echo "selected=true"; ?> >2000-5000</option>
				<option value="10000" <?php if( $memberinfo[conditions_income_min]<=10000) echo "selected=true"; ?> >5000-10000</option>
				<option value="20000" <?php if( $memberinfo[conditions_income_min]<=20000) echo "selected=true"; ?> >10000-20000</option>
				<option value="20001"  <?php if( $memberinfo[conditions_income_min]>20000) echo "selected=true"; ?> >20000以上</option>
			</select>
		</div>
		<div class="form-group"><label for="conditions_edu_min">学历</label>
			<select id="conditions_edu_min" name="conditions_edu_min">
	      		<option value="">请选择</option>
				<option value="博士研究生" <?php if( $memberinfo[conditions_edu_min]=="博士研究生") echo "selected=true"; ?> >博士研究生</option>
				<option value="硕士研究生" <?php if( $memberinfo[conditions_edu_min]=="硕士研究生") echo "selected=true"; ?> >硕士研究生</option>
				<option value="本科" <?php if( $memberinfo[conditions_edu_min]=="本科") echo "selected=true"; ?> >本科</option>
				<option value="大专" <?php if( $memberinfo[conditions_edu_min]=="大专") echo "selected=true"; ?> >大专</option>
				<option value="高中及中专" <?php if( $memberinfo[conditions_edu_min]=="高中及中专") echo "selected=true"; ?> >高中及中专</option>
				<option value="初中" <?php if( $memberinfo[conditions_edu_min]=="初中") echo "selected=true"; ?> >初中</option>
			</select>
		</div>
		<div class="form-group"><label for="conditions_age">年龄</label>
			<input type="text" name="conditions_age_max" id="conditions_age_max"  class="text ui-widget-content ui-corner-all" placeholder="最大年龄"  value="<?php echo ($memberinfo[conditions_age_max]); ?>" style="width:40%" > -
			<input type="text" name="conditions_age_min" id="conditions_age_max"  class="text ui-widget-content ui-corner-all" placeholder="最小年龄" value="<?php echo ($memberinfo[conditions_age_min]); ?>" style="width:40%" >
		</div>
		<div class="form-group"><label for="conditions_height">身高</label>
			<input type="text" name="conditions_height_max" id="conditions_height_max"  class="text ui-widget-content ui-corner-all" placeholder="最大身高" value="<?php echo ($memberinfo[conditions_height_max]); ?>" style="width:40%"> -
			<input type="text" name="conditions_height_min" id="conditions_height_min"  class="text ui-widget-content ui-corner-all" placeholder="最小身高" value="<?php echo ($memberinfo[conditions_height_min]); ?>" style="width:40%">
		</div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_Partner_conditions">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<div class="modal fade hide" id="album" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">征友条件</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="Living_albumAjax" class="form-horizontal" >
         		<div  class="form-group"><label for="upload_album" id="upload_album"></label>
					<div id="pic_wrap" style="minheight:300px;">
					</div>
				</div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="submit_album">提交更改</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>

 
<link type="text/css" href="__PUBLIC__/css/uploadify.css" rel="stylesheet" />

<div id="album" title="相册"  class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable hidden">
  <form id="Living_albumAjax">
    <fieldset>
      <div class="alert hidden" id="alert_album"></div>
		
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>
 


  <div class="container">
        <div class="row">
            <div class="span12 love_badge copy">
            </div>
			<div align="center">More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - you could <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">给我留言</a></div>
        </div>
    </div>


<!-- 登录（Modal） -->
<div class="modal fade hide" id="loginwin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">登录</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="loginAjax" class="form-horizontal" >
         		   <div class="form-group">
				      <label for="name">姓名</label>
      <input type="text" name="login_mobile" id="login_mobile" placeholder="手机号" class="text ui-widget-content ui-corner-all">
       </div>
       <div class="form-group"> <label for="password">密码</label>
      <input type="password" name="login_password" id="login_password" placeholder="密码" class="text ui-widget-content ui-corner-all">
 				   </div>
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="loginwin_submit">提交</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


<div class="modal fade hide" id="registerwin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
            <h4 class="modal-title" id="myModalLabel">注册</h4>
         </div>
         
         <div class="modal-body">
         	<div class="alert alert-danger hide"></div>
         	<form id="regform" class="form-horizontal" >
         		   <div class="form-group"><label for="name">手机号</label>
      <input type="text" name="reg_mobile" id="reg_mobile" value="" class="text ui-widget-content ui-corner-all" placeholder="手机号"></div>
          <div class="form-group"><label for="password">密码</label>
      <input type="password" name="reg_password" id="reg_password" value="" class="text ui-widget-content ui-corner-all" placeholder="密码"></div>
   	  <input type="hidden" name="verify_session" id="verify_session">
         	</form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary" id="registerwin_submit">提交</button>
         </div>
      </div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>

</body>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/lightbox/jquery.lightbox.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.form.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.cookie.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
        	$('.lightbox').lightbox();

        });

        $("nav select").change(function () {
            window.location = $(this).find("option:selected").val();
        });
        
</script>
</html>

<script type="text/javascript" src="__PUBLIC__/js/member.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/area.js"></script>
<script src="__PUBLIC__/js/jquery.uploadify.min.js" type="text/javascript"></script>
<script>
$(function(){
	jqueryarea("province","city","district");
	jqueryarea("conditions_province","conditions_city","conditions_district");
	
	var member = null;
	$("#love_declaration_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.love_declarationwin();
	});
	$("#memberinfo_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.memberinfowin();
	});
	
	$("#hobby_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.hobbywin();
	});
	$("#Living_habits_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.livinghabitswin();
	});
	$("#Partner_conditions_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.partnerconditionswin();
	});
	
	$("#album_btn").click(function(){
		if(member!=null)delete member;
		var member = new Member();
		member.albumwin();
	});
	
	$('#header_upload').uploadify({
		'formData'     : {
			'timestamp' : '<?php echo $timestamp;?>',
			'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
			'type'		:	'header'
		},
		'swf'      : '__PUBLIC__/js/uploadify.swf',
		'buttonImage': '/Public/uploads/headers/thumb_<?php echo ($memberinfo["header"]); ?>', 
        //设置按钮的高度(单位px)，默认为30.(不要在值里写上单位，并且要求一个整数，width也一样)
        'width': 150,
		'uploader' : '/Public/upload',
		"debug":false,
		'fileSizeLimit':'5MB',
		'onUploadSuccess': function(file,data,respone){
            eval("data ="+data+";");
            console.log(data);
            if(data.code==1){
            	//ajax 提交
            	$.ajax({
            		"type": 'POST', 
            		"url":"/Member/updateInfoAjax",
            		"data":'header='+data.filepath,
            		"dataType":"json",
            		"success":function(res){
            			if(res==1){
            				$("#alert_love_declaration").removeClass("alert-error").addClass("alert-success").html("修改成功").removeClass("hidden");
            				location.reload();
            			}else{
            				$("#alert_love_declaration").removeClass("alert-error").addClass("alert-error").html("修改失败").removeClass("hidden");
            			}
            		}
            	});
            }else{
            	alert(data.info);
            }
        }
	});
	
	
	$('#upload_album').uploadify({
		'formData'     : {
			'timestamp' : '<?php echo $timestamp;?>',
			'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
			'type'		:	'album'
		},
		'swf'      : '__PUBLIC__/js/uploadify.swf',
        //设置按钮的高度(单位px)，默认为30.(不要在值里写上单位，并且要求一个整数，width也一样)
        'width': 150,
		'uploader' : '/Public/upload',
		"debug":false,
		'fileSizeLimit':'5MB',
		'onUploadSuccess': function(file,data,respone){
            eval("data ="+data+";");
            console.log(data);
           if(data.code==1){
        	   var obj = '<div class=" gallery">'
        	   		+'<div class="gallery_contant">'
               		+'<a class="lightbox" href="#">'
                  	+'<img alt="" src="/Public/uploads/album/thumb_'+data.filepath+'"></a>'+'<div class="like_gallery"><span class="delete"><a href="#">删除</a></span></div>'
                   	+' </div></div>';
            	$("#pic_wrap").append(obj)
            }else{
            	alert(data.info);
            }
        }
	});
	
	
})

</script>