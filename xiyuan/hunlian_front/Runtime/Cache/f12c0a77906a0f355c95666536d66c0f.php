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
    <div class="row-fluid images_head" id="home">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
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
                        <div class="span3 gallery">
                            <div class="gallery_contant">
                                <a href="__PUBLIC__/images/image12.png" class="lightbox">
                                    <img src="__PUBLIC__/images/photo1.png" alt="" /></a>

                                <a href="#">
                                    <h4>Lorem Ipsum is simply dummy text of</h4>
                                </a>
             
                           

                                <div class="like_gallery"><span class="like"><a href="#">1241</a></span></div>
                            </div>
                        </div>
                        <!--Photo-->
                        <div class="span3 gallery">
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
            <div class="bg_bottom"><h5><a href="#">more</a></h5></div>
        </div>
    </div>

    <!--contant_two_page-->

    <!--contant_two_page-->
    

  

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