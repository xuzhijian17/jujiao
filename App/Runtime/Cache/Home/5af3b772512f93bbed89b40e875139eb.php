<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<link type="text/css" rel="stylesheet" href="__PUBLIC__/styles/style.css" />
<link rel="stylesheet" href="__PUBLIC__/styles/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/styles/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/styles/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/styles/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/styles/nivo-slider.css" type="text/css" media="screen" />
<title>B2B</title>
</head>

<body>
<div id="top_banner" class="clear">
	<img src="__PUBLIC__/images/topBanner.jpg" title="ad" alt="ad" width="960" height="70" />
</div>

<div id="navigation">
	<ul class="menu">
		<?php $id = $_SESSION['userId']; ?>
		<?php if($id == ''): ?><li><a href="__ROOT__/Home/Index/regist">免费注册</a></li>
		<li><a href="__ROOT__/Home/Index/login">登录</a></li>
		<?php else: ?>
		<li>欢迎您，<span class="lightBlue">{$Think.session.username}</span></li>
		<li><a href="__URL__/logout">[退出]</a></li><?php endif; ?>
		<li><a href="">订单查询</a></li>
		<li id="my_shopping">
			<a href="">我的聚焦购物</a>
			<ul id="my_shopping_list">
				<li><a href="#">我的订单</a></li>
				<li><a href="#">我的现金券</a></li>
				<li><a href="#">我的红包</a></li>
				<li><a href="#">我的余额</a></li>
				<li><a href="#">我的收藏</a></li>
				<li><a href="#">我的心愿单</a></li>
				<li><a href="#">会员中心</a></li>
				<li><a href="#">我的金币</a></li>
				<li><a href="#"><b>VIP</b>专享</a></li>
			</ul>
		</li>
	</ul>
</div>

<!--bar-->
<div id="wrap">
	<div id="top_bar" class="clearfix">
		<div id="logo">
			<img src="__PUBLIC__/images/logo.png" title="T-Shop" alt="logo" />
		</div>
		<div id="search">
			<form name="" action="" method="post">
				<input class="sch" type="text" name="search" value="" />
				<input class="btn" type="submit" value="" />
			</form>
			<div class="search_left"></div>
		</div>
		<div id="shopping_car">
			<form name="orders" action="__ROOT__/Home/Buycar/index" method="post">
				<h6><a href="#">去购物车看看</a></h6>
				<div id="my_shop">
					<p class="info">
						购物车中还没有商品，<br />
						快去挑选心爱的商品吧
					</p>
					<ul>
						<?php if(is_array($myCarList)): foreach($myCarList as $key=>$myBuyPro): ?><li>
							<a href=""><img src="__PUBLIC__/images/<?php echo ($myBuyPro["imageName"]); ?>" alt="" /></a>
							<h1><a href=""><?php echo ($myBuyPro["proName"]); ?></a></h1>
							<div class="shop_induction">
								<span class="price">￥<?php echo ($myBuyPro["price"]); ?></span><span class="del"><a href="">删除</a></span>
							</div>
						</li><?php endforeach; endif; ?>
					</ul>
					<div id="totle">
						<p>共<b>4</b>件商品，合计<b>579</b>元</p><input type="submit" name="buycar" value="" />
					</div>
				</div>
				<input type="hidden" name="n" value="4" />
			</form>
		</div>
	</div>
</div>

<div id="main_bg" class="clearfix" style="width:100%;background:#e7f7f7;">
	<div id="main" class="clearfix">

		<!-- navigetion -->
		<div id="nav_menu" class="clearfix">
			<div id="all_product">
				<h6>所有商品分类</h6>
				<div id="product_box">
					<div class="product">
						<ul>
							<h1><a href="#">女鞋</a>&nbsp;&gt;</h1>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
						</ul>
					</div>
					<div class="product">
						<ul>
							<h1><a href="#">女鞋</a>&nbsp;&gt;</h1>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
						</ul>
					</div>
					<div class="product">
						<ul>
							<h1><a href="#">女鞋</a>&nbsp;&gt;</h1>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
						</ul>
					</div>
					<div class="product">
						<ul>
							<h1><a href="#">女鞋</a>&nbsp;&gt;</h1>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
						</ul>
					</div>
					<div class="product">
						<ul>
							<h1><a href="#">女鞋</a>&nbsp;&gt;</h1>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
							<li><a href="#">新款女鞋</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="nav_bar">
				<ul class="clearfix">
					<li><a href="#">限时特卖</a></li>
					<li><a href="#">聚焦商城</a></li>
					<li><a href="#">口碑中心</a></li>
					<li><a href="#">奢侈品</a></li>
					<li><a href="#">名品折扣</a></li>
					<li><a href="#">正品保证</a></li>
				</ul>
			</div>
		</div>

		<!-- picture -->
		<div id="wrap_img" class="clearfix" >
			<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <a href="#"><img src="__PUBLIC__/images/focus/focus_130400.jpg" data-thumb="__PUBLIC__/images/focus/focus_130400.jpg" width="760" alt="" title="产品描述1"/></a>
	                <a href="#"><img src="__PUBLIC__/images/focus/focus_130401.jpg" data-thumb="__PUBLIC__/images/focus/focus_130401.jpg" width="760" alt="" title="产品描述2" /></a>
	                <a href="#"><img src="__PUBLIC__/images/focus/focus_130402.jpg" data-thumb="__PUBLIC__/images/focus/focus_130402.jpg" width="760" alt="" title="产品描述3" /></a>
	                <a href="#"><img src="__PUBLIC__/images/focus/focus_130403.jpg" data-thumb="__PUBLIC__/images/focus/focus_130403.jpg" width="760" alt="" title="产品描述4" /></a>
	            </div>
	        </div>
	        <!-- 
	                     #图片侧边滚动
			<div id="box">
				<ul id="scrollbox">
					<li id="scrollImg">
						<ul>
							<li><a href="#" target="_blank"><img src="__PUBLIC__/images/focus/hot_2301.jpg" /></a></li>
							<li><a href="#" target="_blank"><img src="__PUBLIC__/images/focus/hot_2302.jpg" /></a></li>
							<li><a href="#" target="_blank"><img src="__PUBLIC__/images/focus/hot_2303.jpg" /></a></li>
							<li><a href="#" target="_blank"><img src="__PUBLIC__/images/focus/hot_2304.jpg" /></a></li>
							<li><a href="#" target="_blank"><img src="__PUBLIC__/images/focus/hot_2305.jpg" /></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
                     #图片侧边展示
		<div id="product_img" >
			<div id="pro_pic" class="clearfix" >
				<img src="__PUBLIC__/images/focus_nz_130411.jpg" title="product_img" alt="" />
				<img src="__PUBLIC__/images/focus/hot_2301.jpg" title="product_img" alt="" />
				<img src="__PUBLIC__/images/focus/hot_2302.jpg" title="product_img" alt="" />
				<img src="__PUBLIC__/images/focus/hot_2303.jpg" title="product_img" alt="" />
				<img src="__PUBLIC__/images/focus/hot_2304.jpg" title="product_img" alt="" />
				<img src="__PUBLIC__/images/focus/hot_2305.jpg" title="product_img" alt="" />
			</div>
			<div id="taggle_circle">
				<ul>
					<li><a href=""></a></li>
					<li><a href="">AA</a></li>
					<li><a href="">AA</a></li>
					<li><a href="">AA</a></li>
					<li><a href="">AA</a></li>
					<li><a href="">AA</a></li>
				</ul>
			</div>
			<div id="taggle_bg"></div>
		</div>
		 -->
		<!--article-->
		<div id="main-left" >
			<ul>
				<?php if(is_array($rowset)): $i = 0; $__LIST__ = $rowset;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proRow): $mod = ($i % 2 );++$i;?><li>
					<div class="content">
						<a href="__ROOT__/Home/Details/index"><h1><b><?php echo ($proRow['discount']/10); ?>折</b><?php echo ($proRow["proname"]); ?></h1></a>
						<a href="__ROOT__/Home/Details/index"><img src="__PUBLIC__/images/img350/<?php echo ($proRow["imagepath"]); ?>" width="160" title="camera" alt=""></a>
						<div class="price_tag">
							<span><?php echo ($proRow["saleprice"]); ?></span>
							<a href="__ROOT__/Home/Details/index"><input type="button" name=""/></a>
							<p>
								市场价 ¥<?php echo ($proRow["marketprice"]); ?><br />
								您节省 ¥<?php echo ($proRow['marketprice']-$proRow['saleprice']); ?>
							</p>
						</div>
					</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div id="pageNums">
				<?php $current_page = $currentPage; ?>
				<?php $total_page = $totalPages; ?>
				<?php $show_page = $showPages; ?>
				<?php if($current_page-$show_page >= 1): ?><a class="block-button" href="__ROOT__/<?php echo (GROUP_NAME); ?>/<?php echo (MODULE_NAME); ?>/<?php echo (ACTION_NAME); ?>/page/<?php echo ($current_page-$showPages); ?>">&nbsp;PrevBlock&nbsp;</a><?php endif; ?>
				<?php if($current_page-1 >= 1): ?><a class="page-button" href="__ROOT__/<?php echo (GROUP_NAME); ?>/<?php echo (MODULE_NAME); ?>/<?php echo (ACTION_NAME); ?>/page/<?php echo ($current_page-1); ?>">&nbsp;Prev&nbsp;</a><?php endif; ?>
				<?php if(is_array($pages)): foreach($pages as $key=>$n): if($current_page == $n): ?><a id="current-page" class="nums" href="javascript:void(0)" >&nbsp;<?php echo ($n); ?>&nbsp;</a>
					<?php else: ?>
						<a class="nums" href="__ROOT__/<?php echo (GROUP_NAME); ?>/<?php echo (MODULE_NAME); ?>/<?php echo (ACTION_NAME); ?>/page/<?php echo ($n); ?>">&nbsp;<?php echo ($n); ?>&nbsp;</a><?php endif; endforeach; endif; ?>
				<?php if($current_page+1 <= $total_page): ?><a class="page-button" href="__ROOT__/<?php echo (GROUP_NAME); ?>/<?php echo (MODULE_NAME); ?>/<?php echo (ACTION_NAME); ?>/page/<?php echo ($currentPage+1); ?>#main-left">&nbsp;Next&nbsp;</a><?php endif; ?>
				<?php if($current_page+$show_page <= $total_page): ?><a class="block-button" href="__ROOT__/<?php echo (GROUP_NAME); ?>/<?php echo (MODULE_NAME); ?>/<?php echo (ACTION_NAME); ?>/page/<?php echo ($current_page+$showPages); ?>#main-left">&nbsp;NextBlock&nbsp;</a><?php endif; ?>
			</div>
		</div>

		<div id="main-right">
			<img class="ad_pics" src="__PUBLIC__/images/3247_0.jpg" alt="" />
			<img class="ad_pics" src="__PUBLIC__/images/3247_1.jpg" alt="" />
			<img class="ad_pics" src="__PUBLIC__/images/3247_2.jpg" alt="" />
		</div>
	</div>
</div>

<!--foot-->
<div id="footer" >
	<ul class="clearfix">
		<li id="footer_title_1" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
		<li id="footer_title_2" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
		<li id="footer_title_3" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
		<li id="footer_title_4" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
		<li id="footer_title_5" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
		<li id="footer_title_6" class="footer_title">
			<ul class="footer_list">
				<li><a href="">购买流程</a></li>
				<li><a href="">积分说明</a></li>
				<li><a href="">发票制度</a></li>
				<li><a href="">会员制度</a></li>
				<li><a href="">购物保障</a></li>
				<li><a href="">常见问题</a></li>
			</ul>
		</li>
	</ul>
</div>

</body>
<script type="text/javascript" src="__PUBLIC__/scripts/script.js"></script>
<script type="text/javascript" src="__PUBLIC__/scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>
<script type="text/javascript">
	/**
	*注意要改#box的大小的话，不要随便乱改（#box大小是基于图片大小而变的）。如果是水平滚动就改宽，垂直滚动就改高。
	*/
	var speed = 50; //这里的速度是指0.03秒滚动条移动一个像素
	var img_w = 200;
	var img_h = 84;
	var directionNan = false;
	var run;
	$(document).ready(function() {

		$('#scrollbox').append('<li id="cloneScrollImg"><li>'); //添加图片克隆标签，实现无缝滚动的障眼法效果

		$('#box').hover(
			function(){
				clearTimeout(run);
			},
			function(){
				setTimeout("scrollImage("+directionNan+")",speed);
			});

		directionNan ? horizontal() : vertical();
	});
	function horizontal (argument) {
		var img_l = $('#scrollImg img').length;
		$('#box').css({'width': img_w*img_l,'height':img_h,'overflow':'hidden'}); //水平滚动在这里改宽
		$('#scrollbox').width(img_w*img_l*2);
		$('#scrollImg img').css({'width':img_w,'height':img_h,'border':'0'});
		$('#box ul').css({'margin':'0','padding':'0'});
		$('#box li').css({'list-style':'none','float':'left'});
		$('#scrollImg>ul').clone().prependTo($('#cloneScrollImg'));
		scrollImage(1);
	}
	function vertical (argument) {
		var img_l = $('#scrollImg img').length;
		$('#box').css({'width': img_w,'height':img_h*img_l,'overflow':'hidden'}); //垂直滚动在这里改高
		$('#scrollbox').height(img_h*img_l*2);
		$('#scrollImg img').css({'width':img_w,'height':img_h,'border':'0'});
		$('#box ul').css({'margin':'0','padding':'0'});
		$('#box li').css({'list-style':'none'});
		$('#scrollImg>ul').clone().prependTo($('#cloneScrollImg'));
		scrollImage(0);
	}
	function scrollImage (directionNan) {
		if (directionNan) {
			var left = $('#box').scrollLeft();
	        left++;
	        left = (left > $('#scrollImg').width() ? 0 : left);
	        $('#box').scrollLeft(left);
	        run = setTimeout("scrollImage(1)",speed);
		}else{
			var top = $('#box').scrollTop();
	        top++;
	        top = (top > $('#scrollImg').height() ? 0 : top);
	        $('#box').scrollTop(top);
	        run = setTimeout("scrollImage(0)",speed);
		}

	}
</script>
</html>