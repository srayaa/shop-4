<?php /* Smarty version Smarty-3.1.17, created on 2014-11-17 20:07:57
         compiled from "D:\wamp\www\shop\view\default\public\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132385469e51d1d3e92-92267356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f285ddd3eff83744c9fbd8be845b5dddb805bf4e' => 
    array (
      0 => 'D:\\wamp\\www\\shop\\view\\default\\public\\login.tpl',
      1 => 1416131176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132385469e51d1d3e92-92267356',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5469e51d252de1_71989626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469e51d252de1_71989626')) {function content_5469e51d252de1_71989626($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/login.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/login.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 注册登陆
</div>
<div id="login">	
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">
		<dl>
			<dd>用 户 名：<input type="text" name="user" class="text"/><span> [必填](*用户名长度2到20位)</span></dd>
			<dd>密　　码：<input type="password" id="pwd" name="pwd" class="text"/><span> [必填](*密码长度必须大于6位)</span></dd>
			<dd>验 证 码：<input type="text" name="validateCode" class="text code"/><span>（*输入下图中的字符，不区分大小写）</span></dd>
			<dd class="code"><img src="?a=index&m=validateCode" alt="验证码" onclick=" this.src='?a=index&m=validateCode&'+Math.random();"/> <span class="change">看不清换一张</span></dd>
			<dd><label><input type="checkbox" name="keep">保留这次登录信息</label></dd>
			<dd>提　　交：<input type="submit" name="send" class="sub" value="登陆"/></dd>
		</dl>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
