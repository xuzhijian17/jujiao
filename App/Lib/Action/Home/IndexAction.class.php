<?php
require 'ThinkPHP/Extend/Library/Tool/Paging.class.php';

//import('App.Model.Products');
//import('ORG.Util.Page');
//import('Extend.Library.Tool.Paging');
class IndexAction extends Action {
	public function index() {
		
		$products = D('Products');
		$pageObj = new Paging($products->getTotalProductRecords(),5);
		//$pageObj = new Page ( $products->getTotalProductRecords(), 10 ); //使用ORG中的分页需要在convention.php中添加'VAR_PAGE'=> 'p',	// 默认分页跳转变量
		//$rowset = $products->getProducts($pageObj,$currentPage);
		/*
		$pageObj->config = array( 'header'=> '条数据' ,
								'prev'=>"&lt;" ,
								'next'=>'&gt;' ,
								'first'=>'&lt;&lt;' ,
								'last'=>'&gt;&gt;' ,
								'theme'=>"%totalRow% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%" 
								);
		*/
		//$pages = $pageObj->show ();
		$currentPage = $pageObj->DetectionCurrentPage($_GET['page']);
		$showPages = $pageObj->showPages;
		$totalPages = $pageObj->totalPages();
		$pages = $pageObj -> showPageNum($currentPage);
		$rowset = $products->getProducts($pageObj,$currentPage);

		$this->assign ( 'rowset', $rowset );
		$this->assign ( 'pages', $pages );
		$this->assign('currentPage',$currentPage);
		$this->assign('showPages',$showPages);
		$this->assign('totalPages',$totalPages);
		$this->assign('myCarList',$products->getCarProducts());
		
		$this->display('index');
	}
	public function login() {
		$this->display('login');
	}
}