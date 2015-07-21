<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../Public/css/bootstrap.min.css" />
<link rel="stylesheet" href="../Public/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../Public/css/fullcalendar.css" />
<link rel="stylesheet" href="../Public/css/colorpicker.css" />
<link rel="stylesheet" href="../Public/css/datepicker.css" />
<link rel="stylesheet" href="../Public/css/uniform.css">
<link rel="stylesheet" href="../Public/css/select2.css" />
<link rel="stylesheet" href="../Public/css/matrix-style.css" />
<link rel="stylesheet" href="../Public/css/matrix-media.css" />
<link rel="stylesheet" href="../Public/css/bootstrap-wysihtml5.css" />

<link href="../Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../Public/css/jquery.gritter.css" />
<style>
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(http://fontstatic.useso.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(http://fontstatic.useso.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans Extrabold'), local('OpenSans-Extrabold'), url(http://fontstatic.useso.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}
</style>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome  <?php echo (session('loginUserName')); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="__APP__/Public/logout"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="__APP__/Public/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->


<!--sidebar-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
  	<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="<?php if(!empty($item['submenu']))echo 'submenu'; ?> "> <a href="#"><i class="icon icon-th-list"></i> <span><?php echo ($item["title"]); ?></span> <span class="label label-important"><?php echo empty($item["submenu"])?"":count($item["submenu"]); ?></span></a>
	      <ul>
	      	<?php if(is_array($item['submenu'])): $i = 0; $__LIST__ = $item['submenu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subitem): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Admin/<?php echo ($subitem['name']); ?>"><?php echo ($subitem["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	      </ul>
	    </li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
<!--sidebar-menu-->


<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->

<div id="content-header">
    <div id="breadcrumb"> <a href="__URL__" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
</div>

<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
	这里是内容
</div>

<!--end-main-container-part-->

</div>

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2015 &copy; </div>
</div>

<!--end-Footer-part-->

<script src="../Public/js/excanvas.min.js"></script> 
<script src="../Public/js/jquery.min.js"></script> 
<script src="../Public/js/jquery.ui.custom.js"></script> 
<script src="../Public/js/bootstrap.min.js"></script> 
<script src="../Public/js/jquery.flot.min.js"></script> 
<script src="../Public/js/jquery.flot.resize.min.js"></script> 
<script src="../Public/js/jquery.peity.min.js"></script> 
<script src="../Public/js/fullcalendar.min.js"></script> 
<script src="../Public/js/matrix.js"></script> 
<script src="../Public/js/matrix.dashboard.js"></script> 
<script src="../Public/js/jquery.gritter.min.js"></script> 
<script src="../Public/js/matrix.interface.js"></script> 
<script src="../Public/js/matrix.chat.js"></script> 
<script src="../Public/js/jquery.validate.js"></script> 
<script src="../Public/js/matrix.form_validation.js"></script> 
<script src="../Public/js/jquery.wizard.js"></script> 
<script src="../Public/js/jquery.uniform.js"></script> 
<script src="../Public/js/select2.min.js"></script> 
<script src="../Public/js/matrix.popover.js"></script> 
<script src="../Public/js/jquery.dataTables.min.js"></script> 
<script src="../Public/js/matrix.tables.js"></script> 
<script src="../Public/js/bootstrap-datepicker.js"></script> 


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>