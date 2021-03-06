<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<title>聚焦购物网上商城管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/styles/admin_common.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/styles/manage.css">
<script type="text/javascript" src="__PUBLIC__/scripts/jquery-1.7.2.js"></script>
</head>

<body scroll="no">
<div class="header">
  <div class="logo">bagecms.com</div>
  <div class="nav">
    <ul>
            <li index="0">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/default/home" target="win" hidefocus>首页</a></div>
      </li>
            <li index="1">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/config/index" target="win" hidefocus>设置</a></div>
      </li>
            <li index="2">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/post/index" target="win" hidefocus>内容</a></div>
      </li>
            <li index="3">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/admin/index" target="win" hidefocus>用户</a></div>
      </li>
            <li index="4">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/template/index" target="win" hidefocus>模板</a></div>
      </li>
            <li index="5">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/attr/index" target="win" hidefocus>组件</a></div>
      </li>
            <li index="6">
        <div><a href="/bagecms3.1.0/upload/index.php?r=admini/database/index" target="win" hidefocus>工具</a></div>
      </li>
          </ul>
  </div>
  <div class="logininfo"><span class="welcome"><img src="/bagecms3.1.0/upload/static/admin/images/user_edit.png" align="absmiddle"> 欢迎, <em>admin</em> </span> <a href="/bagecms3.1.0/upload/index.php?r=admini/admin/ownerUpdate" target="win">修改密码</a> <a href="/bagecms3.1.0/upload/index.php?r=admini/public/logout" target="_top">退出登录</a> <a href="/bagecms3.1.0/upload/index.php" target="_blank">前台首页</a></div>
</div>
<div class="topline">
  <div class="toplineimg left" id="imgLine"></div>
</div>


<div class="main" id="main">
	<div class="mainA">
    <div id="leftmenu" class="menu">
      <ul index="0" class="left_menu">
          <li index="0"><a href="__ROOT__/Admin/Index/index" target="win">系统首页</a></li>
          <li index="1"><a id="productslist" href="__ROOT__/Admin/Products/index" target="win">商品列表</a></li>
        </ul>
      <ul index="1" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/config/index" target="win">站点设置</a></li>
          <li index="1"><a href="/bagecms3.1.0/upload/index.php?r=admini/config/seo" target="win">SEO设置</a></li>
          <li index="2"><a href="/bagecms3.1.0/upload/index.php?r=admini/config/upload" target="win">上传设置</a></li>
          <li index="3"><a href="/bagecms3.1.0/upload/index.php?r=admini/config/custom" target="win">自定义设置</a></li>
        </ul>
      <ul index="2" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/post/index" target="win">内容管理</a></li>
          <li index="1"><a href="/bagecms3.1.0/upload/index.php?r=admini/post/comment" target="win">评论管理</a></li>
          <li index="2"><a href="/bagecms3.1.0/upload/index.php?r=admini/post/special" target="win">专题管理</a></li>
          <li index="3"><a href="/bagecms3.1.0/upload/index.php?r=admini/page/index" target="win">单页管理</a></li>
        </ul>
      <ul index="3" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/admin/index" target="win">管理员列表</a></li>
          <li index="1"><a href="/bagecms3.1.0/upload/index.php?r=admini/admin/group" target="win">管理员权限</a></li>
          <li index="2"><a href="/bagecms3.1.0/upload/index.php?r=admini/logger/admin" target="win">管理员日志</a></li>
          <li index="3"><a href="/bagecms3.1.0/upload/index.php?r=admini/question/index" target="win">留言反馈</a></li>
        </ul>
      <ul index="4" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/template/index" target="win">网站模板</a></li>
        </ul>
      <ul index="5" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/attr/index" target="win">属性管理</a></li>
          <li index="1"><a href="/bagecms3.1.0/upload/index.php?r=admini/other/attach" target="win">附件管理</a></li>
          <li index="2"><a href="/bagecms3.1.0/upload/index.php?r=admini/operation/link" target="win">链接管理</a></li>
          <li index="3"><a href="/bagecms3.1.0/upload/index.php?r=admini/operation/ad" target="win">广告管理</a></li>
        </ul>
      <ul index="6" class="left_menu">
          <li index="0"><a href="/bagecms3.1.0/upload/index.php?r=admini/database/index" target="win">数据库管理</a></li>
          <li index="1"><a href="/bagecms3.1.0/upload/index.php?r=admini/tools/cache" target="win">缓存管理</a></li>
        </ul>
    </div>
</div>


	<div class="mainB" id="mainB">
    <iframe src="/bagecms3.1.0/upload/index.php?r=admini/default/home" name="win" id="win" width="100%" height="100%" frameborder="0"></iframe>
</div>

</div>

</body>
</html>