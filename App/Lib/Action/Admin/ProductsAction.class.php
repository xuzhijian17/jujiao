<?php
class ProductsAction extends Action {
	public function index($value='')
	{
		$this->display();
	}

	public function ajaxDo(){
		echo __DIR__;
		exit();
		require (__DIR__.'/common.inc.php');

		$n = Paging_ini::num;
		$b = Paging_ini::block;
		$np = Paging_ini::nextpage;
		$nb = Paging_ini::nextblock;
		$pp = Paging_ini::prepage;
		$pb = Paging_ini::preblock;
			
		if(isset($_SERVER['REQUEST_METHOD'])){
			switch(Paging_ini::request_method){
				case 'GET': $method = &$_GET; break;
				case 'POST': $method = &$_POST; break;
			}
			$p = new Paging();
		}


		if(isset($method[$n])){
			$records = $p -> totalRecords();
			$totalPages = $p -> totalPages();
			$totalBlcoks = $p -> totalBlocks();

			$appoint_page = $p -> DetectionCurrentPage(intval(+$method[$n])); //检测传过来的页是否合法，注意这里最好造下型，不然传过去的是字符串，js不好做算术运算
			$jump_block = $p -> blockByPage($appoint_page); //通过页数获取所在的版块数
			
			$showRecords = $p -> showRecordsByPage($appoint_page);
			$showPageNum = $p -> showPageNum($jump_block);
			
			$rs = json_encode(array($appoint_page,$jump_block,$showPageNum,$showRecords,$records,$totalPages,$totalBlcoks));
		}
		if(isset($method[$np]) && isset($method[$b])){

			$next_page = $p -> DetectionCurrentPage(intval(+$method[$np])); //检测传过来的下一页是否合法
			$next_block = $p -> next($next_page,intval(+$method[$b])); //检测是否到达版块结尾，如果到达自动跳转到下一版块
			
			$showPageNum = $p -> showPageNum($next_block); //显示下一页的页数
			$showRecords = $p -> showRecordsByPage($next_page); //显示下一页的数据
			
			$rs = json_encode(array($next_page,$next_block,$showPageNum,$showRecords));
		}
		if(isset($method[$nb])){

			$next_block = $p -> DetectionCurrentBlock(intval(+$method[$nb])); //检测传过来的下一版块是否合法
			$next_page = $p -> showStartPage($next_block); //如果合法则获取下一版块第一页的数据,如果是最后一个版块又跳到最后一个版块的第一页了
			
			$showPageNum = $p -> showPageNum($next_block); //显示下一版块的页数
			$showRecords = $p -> showRecordsByPage($next_page); //显示下一版块第一页的数据

			$rs = json_encode(array($next_page,$next_block,$showPageNum,$showRecords));
		}
		if(isset($method[$pp]) && isset($method[$b])){
			
			$pre_page = $p -> DetectionCurrentPage(intval($method[$pp]));
			$pre_block = $p -> previous($pre_page,intval($method[$b]));
			
			$showPageNum = $p -> showPageNum($pre_block);
			$showRecords = $p -> showRecordsByPage($pre_page);
			
			$rs = json_encode(array($pre_page,$pre_block,$showPageNum,$showRecords));
		}
		if(isset($method[$pb])){

			$pre_block = $p -> DetectionCurrentBlock(intval($method[$pb]));
			$pre_page = $p -> showStartPage($pre_block);

			$showPageNum = $p -> showPageNum($pre_block);
			$showRecords = $p -> showRecordsByPage($pre_page);

			$rs = json_encode(array($pre_page,$pre_block,$showPageNum,$showRecords));
		}
		echo isset($rs) ? $rs : 0;
	}
}