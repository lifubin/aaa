<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> ThinkPHP示例：关联操作 </title>
<style type="text/css">
*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
div{ padding: 25px 20px;} 
body{ background: #fff; color: #333;}
h2{font-size:36px}
div.result{border:1px solid #d4d4d4;background:#FFC;color:#393939; padding:8px 20px;float:auto; width:450px;margin:2px}
pre{font-size:12px;}
</style>
</head>
<body>

<div >
	<h2>ThinkPHP示例：关联操作</h2>
	<?php if(is_array($info)): foreach($info as $key=>$i): echo ($i); ?><br/><?php endforeach; endif; ?>
</div>
</body>
</html>