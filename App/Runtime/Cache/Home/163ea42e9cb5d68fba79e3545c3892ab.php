<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>聚焦购物--中国最大的摄影耗材网站</title>
<link href="__PUBLIC__/styles/global.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/styles/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/styles/layout.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/images/skins/default/styles/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/styles/jquery.jqzoom.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="__PUBLIC__/scripts/jquery-1.7.2.js"></script>
<script type="text/javascript" src="__PUBLIC__/scripts/jquery.jqzoom-core.js"></script>
<script type="text/javascript" src="__PUBLIC__/scripts/common.js"></script>
<script type="text/javascript">

$(function(){
	$("#increment").click(function(){
		var buyNum = parseInt($("#buyNum").val());
		var maxNum = parseInt($("#maxNum").val());
		if(buyNum<maxNum){
			$("#buyNum").val(parseInt($("#buyNum").val())+1);
		} else {
			window.alert("已超出最大的购买数量！");
		}
	})
	$("#decrement").click(function(){
		var buyNum = parseInt($("#buyNum").val());
		if(buyNum>1){
			$("#buyNum").val(parseInt($("#buyNum").val())-1);
		} else {
			window.alert("已超出最小的购买数量！");
		}
		
	})


	$(".jqzoom").jqzoom({
		title:null,
		zoomWidth:400,
		zoomHeight:350
	});

	//1.关闭topBanner
	$("#closeBanner").click(
		function(){
			$("#topBanner").slideUp(700);
		}
	);
	//2.控制“我的聚焦购物”
	popMenu("myFfocus","focusSubMenu");
	//3.控制“关注我们”
	popMenu("attention","attentionSubMenu");
	//4.控制“去购物车看看”
	popMenu("view_cart","cart_info");
	//5.控制“所有商品分类”菜单
	popMenu("topMenuTitle","mainMenu");
	
})
</script>
</head>
<body>
<!--顶部广告开始-->
<div id="topBanner"><img src="__PUBLIC__/images/topBanner.jpg" alt="" /></div>
<!--顶部广告结束-->
<!--快捷菜单开始-->
<div id="shortcut">
	<div class="wrap clearfix">
	<ul id="userArea">
		<li><a href="#">免费注册</a></li>
		<li><a href="#">登录</a></li>
		<li>欢迎您，<span class="lightBlue">平然</span></li>
		<li><a href="#">[退出]</a></li>
		<li><a href="#">订单查询</a></li>
		<li>
			<a href="#">我的聚焦购物</a>
			<dl id="focusSubMenu" style="display:none;">
			<dt><a href="#">我的订单</a></dt>
			<dt><a href="#">我的现金券</a></dt>
			<dt><a href="#">我的红包</a></dt>
			<dt><a href="#">我的余额</a></dt>
			<dt><a href="#">我的收藏</a></dt>
			<dt><a href="#">我的心愿单</a></dt>
			<dt><a href="#">会员中心</a></dt>
			<dt><a href="#">我的金币</a></dt>
			</dl>
		</li>	
	</ul>
	<ul id="shortMenu">
		<li><a href="#">手机商城</a></li>
		<li><a href="#">收藏本站</a></li>
		<li>
			<a href="#">关注我们</a>
			<dl id="attentionSubMenu" style="display:none;">
				<dd><a href="#">新浪微博</a></dd>
				<dd><a href="#">腾讯微博</a></dd>
				<dd><a href="#">QQ空间</a></dd>
			</dl>		
		</li>
	</ul>
	</div>
</div>
<!--快捷菜单结束-->
<!--头部区域开始-->
<div id="header" class="clearfix">
	<div id="logo"><img src="__PUBLIC__/images/logo.png" alt="聚焦购物" title="聚焦购物"/></div>
	<div id="search">
	  <form id="seachForm" name="seachForm" method="post" action="">
	  	<div id="seachLeftCorner"></div>
		<input type="text"   id="keywords" name="keywords"/>
		<input type="submit" id="searchBtn" name="searchBtn" value="查询"/>
      </form>
	</div>
	<a href="#" id="viewCart">去购物车看看</a>
	<div id="cartInfo" style="display:none;">
		<div id="cartEmpty">购物车中还没有商品，<br/><br/>快去挑选心爱的商品吧</div><br />
		<div id="cartFull">
			<div class="cartSingle clearfix">
				<div class="singlePic"><img src="images/3122_60_60.jpg" alt=""/></div>
				<div class="singleInfo">
					<a href="#" class="singleInfo_name" title="魔法城堡多功能收纳箱">魔法城堡多功能收纳箱</a>
					<div class="clearfix">
						<div class="singleInfo_salePrice">￥318</div>
						<div class="singleInfo_delete"><a href="#">删除</a></div>
					</div>
				</div>
			</div>
			<div class="cartSingle clearfix">
				<div class="singlePic"><img src="images/3122_60_60.jpg" alt=""/></div>
				<div class="singleInfo">
					<a href="#" class="singleInfo_name" title="魔法城堡多功能收纳箱">魔法城堡多功能收纳箱</a>
					<div class="clearfix">
						<div class="singleInfo_salePrice">￥318</div>
						<div class="singleInfo_delete"><a href="#">删除</a></div>
					</div>
				</div>
			</div>
			<div class="cartSingle clearfix">
				<div class="singlePic"><img src="images/3122_60_60.jpg" alt=""/></div>
				<div class="singleInfo">
					<a href="#" class="singleInfo_name" title="魔法城堡多功能收纳箱">魔法城堡多功能收纳箱</a>
					<div class="clearfix">
						<div class="singleInfo_salePrice">￥318</div>
						<div class="singleInfo_delete"><a href="#">删除</a></div>
					</div>
				</div>
			</div>
			<div class="cartSingle clearfix">
				<div class="singlePic"><img src="images/3122_60_60.jpg" alt=""/></div>
				<div class="singleInfo">
					<a href="#" class="singleInfo_name" title="魔法城堡多功能收纳箱">魔法城堡多功能收纳箱</a>
					<div class="clearfix">
						<div class="singleInfo_salePrice">￥318</div>
						<div class="singleInfo_delete"><a href="#">删除</a></div>
					</div>
				</div>
			</div>
			<div class="cartSingle clearfix">
				<div class="singlePic"><img src="images/3122_60_60.jpg" alt=""/></div>
				<div class="singleInfo">
					<a href="#" class="singleInfo_name" title="魔法城堡多功能收纳箱">魔法城堡多功能收纳箱</a>
					<div class="clearfix">
						<div class="singleInfo_salePrice">￥318</div>
						<div class="singleInfo_delete"><a href="#">删除</a></div>
					</div>
				</div>
			</div>
			<div id="cartCollectionInfo" class="clearfix">
				<span>共<strong id="countNum">6</strong>件商品，合计<em id="countMoney">579</em>元</span>
				<a href="#" class="accounts">去结算中心</a>
			</div>
		</div>
	</div>
</div>

<!--头部区域结束-->
<div class="container">
	<div id="navi" class="clearfix">
		<ul>
		<li><a href="#" id="topMenuTitle">所有商品分类</a></li>
		<li><a href="#">限时特卖</a></li>
		<li><a href="#">聚焦商城</a></li>
		<li><a href="#">口碑中心</a></li>
		<li><a href="#">奢侈品</a></li>
		<li><a href="#">名品折扣</a></li>
		<li><a href="#">正品保证</a></li>
		</ul>
		<!--所有商品分类菜单开始-->
		<div id="mainMenu" style="display:none;">
			<div class="menuItem">
				<dl>
					<dt><a href="#">女鞋</a>&gt;</dt>
					<dd><a href="#">新款女鞋</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>
			<div class="menuItem">
				<dl>
					<dt><a href="#">包 配件</a>&gt;</dt>
					<dd><a href="#">时尚女包</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>			
			<div class="menuItem">
				<dl>
					<dt><a href="#">女鞋</a>&gt;</dt>
					<dd><a href="#">新款女鞋</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>
			<div class="menuItem">
				<dl>
					<dt><a href="#">女鞋</a>&gt;</dt>
					<dd><a href="#">新款女鞋</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>						
			<div class="menuItem">
				<dl>
					<dt><a href="#">女鞋</a>&gt;</dt>
					<dd><a href="#">新款女鞋</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>			
			<div class="menuItem">
				<dl>
					<dt><a href="#">女鞋</a>&gt;</dt>
					<dd><a href="#">新款女鞋</a><a href="#">新款女鞋</a><a href="#">新款女鞋</a></dd>
				</dl>				
			</div>
		</div>		
		<!--所有商品分类菜单结束-->			
	</div>
	<div id="particular">
		<div id="particularTop">数码 &gt; <a href="#">摄影摄像</a> &gt;  <a href="#">数码相机</a> &gt;  <a href="#">卡西欧</a> &gt;  <a href="#">卡西欧TR200</a></div>
	</div>
	<div class="info_box">
		<div id="detail_info" class="clearfix">
			<div class="left">
				<a class="jqzoom" rel='gal1' href="__PUBLIC__/images/n800/rBEQYFGQh3AIAAAAAAFGHfBkHjcAABCigFiB7kAAUY1088.jpg"><img src="__PUBLIC__/images/n350/rBEQYFGQh3AIAAAAAAFGHfBkHjcAABCigFiB7kAAUY1088.jpg" alt="" width="350" height="350" id="img350" title=""/></a>
				<ul>
				<li class="backward"><a class="a" href="#">后退</a></li>
				<li><a href="#" rel="{gallery: 'gal1', smallimage: '__PUBLIC__/images/n350/rBEQYFGQh3AIAAAAAAFGHfBkHjcAABCigFiB7kAAUY1088.jpg',largeimage: '__PUBLIC__/images/n800/rBEQYFGQh3AIAAAAAAFGHfBkHjcAABCigFiB7kAAUY1088.jpg'}"><img src="__PUBLIC__/images/rBEQYFGQh3AIAAAAAAFGHfBkHjcAABCigFiB7kAAUY1088.jpg" alt=""/></a></li>
				<li><a href="#" rel="{gallery: 'gal1', smallimage: '__PUBLIC__/images/n350/rBEQWVEAi-wIAAAAAAEKtf35-E8AAAH8gBsBBkAAQrN197.jpg',largeimage: '__PUBLIC__/images/n800/rBEQWVEAi-wIAAAAAAEKtf35-E8AAAH8gBsBBkAAQrN197.jpg'}"><img src="__PUBLIC__/images/rBEQWVEAi-wIAAAAAAEKtf35-E8AAAH8gBsBBkAAQrN197.jpg" alt=""/></a></li>
				<li><a href="#" rel="{gallery: 'gal1', smallimage: '__PUBLIC__/images/n350/rBEQWFEAi_4IAAAAAAEk0A63RkEAAAH8gCRqTwAASTo729.jpg',largeimage: '__PUBLIC__/images/n800/rBEQWFEAi_4IAAAAAAEk0A63RkEAAAH8gCRqTwAASTo729.jpg'}"><img src="__PUBLIC__/images/rBEQWFEAi_4IAAAAAAEk0A63RkEAAAH8gCRqTwAASTo729.jpg" alt=""/></a></li>
				<li><a href="#" rel="{gallery: 'gal1', smallimage: '__PUBLIC__/images/n350/rBEQWVEAi_AIAAAAAAH1vlQRs20AAAH8gCd0MEAAfXW827.jpg',largeimage: '__PUBLIC__/images/n800/rBEQWVEAi_AIAAAAAAH1vlQRs20AAAH8gCd0MEAAfXW827.jpg'}"><img src="__PUBLIC__/images/rBEQWVEAi_AIAAAAAAH1vlQRs20AAAH8gCd0MEAAfXW827.jpg" alt=""/></a></li>
				<li><a href="#" rel="{gallery: 'gal1', smallimage: '__PUBLIC__/images/n350/rBEQWFEkJZ4IAAAAAAGsKaNCdxUAAAxoAJYC2IAAaxB466.jpg',largeimage: '__PUBLIC__/images/n800/rBEQWFEkJZ4IAAAAAAGsKaNCdxUAAAxoAJYC2IAAaxB466.jpg'}"><img src="__PUBLIC__/images/rBEQWFEkJZ4IAAAAAAGsKaNCdxUAAAxoAJYC2IAAaxB466.jpg" alt=""/></a></li>
				<li class="forward"><a class="a" href="#">前进</a></li>
				</ul>
		  </div>
			<div class="right">
			<input type="hidden" id="maxNum" value="5"/>
			<h1>艾美特（airmate）遥控落地扇FSW52R（全黑）</h1>
			<h2>商品编号：595936</h2>
			<h3>京 东 价：￥179.00</h3>
			<h4><span><a href="#" class="decrement" id="decrement">减少</a><input type="text" name="buyNum" id="buyNum" value="1"/><a href="#"  class="increment" id="increment">增加</a></span>购物数量:</h4>
			<div id="sel">
				<select id="province">
					<option value="0">--配送地址--</option>
					<option value="1">江西</option>
					<option value="2">河北</option>
					<option value="3">河南</option>
				</select>
			</div>
			<p>服　　务：由 京东 发货并提供售后服务。</p>
			<p>商品评分：(已有44094人评价)</p>
			<h5><a href="cart.html">放入购物车</a></h5>
			</div>
		</div>
		<div id="detail_description" class="clearfix">
			<div class="left">12</div>
			<div class="right">34</div>
		</div>
	</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
	
</div>
<!--页尾开始-->
<div id="footer">
	<div class="wrap clearfix">
		<dl>
			<dt class="nvice">购物指南</dt>
			<dd><a href="#">购买流程</a></dd>
			<dd><a href="#">积分说明</a></dd>
			<dd><a href="#">发票制度</a></dd>
			<dd><a href="#">会员制度</a></dd>
			<dd><a href="#">购物保障</a></dd>
			<dd><a href="#">常见问题</a></dd>
		</dl>
		<dl>
			<dt class="aftermarket">账户管理</dt>
			<dd><a href="#">自助修改邮箱</a></dd>
			<dd><a href="#">自助修改密码</a></dd>
			<dd><a href="#">自助修改手机</a></dd>
			<dd><a href="#">支付密码设置</a></dd>
			<dd><a href="#">账户余额查询</a></dd>
			<dd><a href="#">如何找回密码</a></dd>
		</dl>
		<dl>
			<dt class="distribution">配送方式</dt>
			<dd><a href="#">配送范围及时间</a></dd>
			<dd><a href="#">当日订当日达</a></dd>
			<dd><a href="#">当日订次日达</a></dd>
			<dd><a href="#">免运费标准</a></dd>
			<dd><a href="#">订单自提</a></dd>
			<dd><a href="#">订单配送查询</a></dd>
		</dl>
		<dl>
			<dt class="pay">支付方式</dt>
			<dd><a href="#">网上支付</a></dd>
			<dd><a href="#">货到付款</a></dd>
			<dd><a href="#">银行转帐</a></dd>
			<dd><a href="#">礼品卡支付</a></dd>
			<dd><a href="#">礼券支付</a></dd>
			<dd><a href="#">到款查询</a></dd>
		</dl>	
		<dl>
			<dt class="characteristic">订单服务</dt>
			<dd><a href="#">订单状态说明</a></dd>
			<dd><a href="#">订单拆分说明</a></dd>
			<dd><a href="#">订单配送查询</a></dd>
			<dd><a href="#">订单自助修改</a></dd>
			<dd><a href="#">订单自助取消</a></dd>
			<dd><a href="#">验货与签收</a></dd>
		</dl>
		<dl>
			<dt class="help">退换货</dt>
			<dd><a href="#">图书退换货</a></dd>
			<dd><a href="#">百货退换货</a></dd>
			<dd><a href="#">3C数码退换货</a></dd>
			<dd><a href="#">自助退货申请</a></dd>
			<dd><a href="#">自助换货申请</a></dd>
			<dd><a href="#">退换货进度查询</a></dd>
		</dl>											
	</div>
</div>
<!--页尾结束-->
<script type="text/javascript">
	function $$ (id) {
		return document.getElementById(id);
	}

	function main (argument) {
		var select = document.createElement('select');
		select.id = 'citys';
		select.style.display = 'none';
		$$('sel').appendChild(select);
		$$('province').onchange = function(){
			$$('citys').style.display = 'inline';
			if ($$('province').value == 0) {
				$$('citys').style.display = 'none';
			};
			if ($$('province').value == 1) {
				$$('citys').length = 0;
				var citys = new Array('上饶','南昌');
				for (var i = 0; i < citys.length; i++) {
					var op = document.createElement('option');
					op.value = i;
					op.text = citys[i];
					$$('citys').add(op);
				};

			}
			if ($$('province').value == 2) {
				$$('citys').length = 0;
				var citys = new Array();
				var citys = ['北京','天津'];
				for (var i = 0; i < citys.length; i++) {
					var op = document.createElement('option');
					op.value = i;
					op.text = citys[i];
					$$('citys').add(op);
				};
			};
			if ($$('province').value == 3) {
				$$('citys').length = 0;
				var citys = new Array();
				var citys = ['郑州','洛阳'];
				for (var i = 0; i < citys.length; i++) {
					var op = document.createElement('option');
					op.value = i;
					op.text = citys[i];
					$$('citys').add(op);
				};
			};
			
		}
	}
	window.onload =main;
</script>
</body>
</html>