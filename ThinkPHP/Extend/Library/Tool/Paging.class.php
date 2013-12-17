<?php
/**
 *
 * 该类主要功能是对获取的当前页进行安全检测以及根据当前页来滚动的显示页码位置，对下一页以及下一版块、跳转的判断可写在模板中
 * @author xuzhijian
 *
 */
class Paging extends Think{
	protected $totalRecords; //总记录数，必选参数
	public $showRecords = 10; //显示的记录数，非必选参数，但一般会给值

	public $initialPage = 1; //初始化显示的页数
	public $showPages = 9; //显示的页码数
	public $currentPagePosition = 5; //当前页的位置，即在显示的页码数中的位置，如果要在中间刚好是($showPages+1/2)


	public function __construct($_totalRecords,$_showRecords=null){
		$this->totalRecords = $_totalRecords;
		if($_showRecords){
			$this->showRecords = $_showRecords;
		}
	}
	public function setConfig($key,$value=null){
		if(is_array($key)){
			foreach ($key as $attr => $val){
				$this -> $attr = $val;
			}
		}
		$this->$key = $value;
		return $this;
	}
	/**
	 *
	 * 获取总页数
	 * return int
	 */
	public function totalPages(){
		return ceil($this -> totalRecords / $this -> showRecords);
	}
	/**
	 *
	 * 检测当前页是否合法
	 * @param int $currentPage
	 * return int
	 */
	public function DetectionCurrentPage($currentPage){
		$currentPage = ($currentPage < 1 ? 1 : $currentPage);
		$currentPage = ($currentPage > $this -> totalPages() ? $this -> totalPages() : $currentPage);
		return empty($currentPage) ? intval($this->initialPage) : intval($currentPage);
	}
	/**
	 *
	 * 获取显示的页码数量
	 * @param int $currentPage
	 * return array
	 */
	public function showPageNum($currentPage){
		if($this -> totalPages() <= $this->showPages){
			//当总页数小于等于显示的页码数量时
			$start = 1;
			$end = $this -> totalPages();
		}else{
			//当总页数大于显示的页码数量时，并对起始页和结束页进行合法检测
			$start = ($currentPage - $this -> currentPagePosition + 1 < 1 ? 1 : $currentPage - $this -> currentPagePosition + 1);
			$end = ($start + $this->showPages - 1 > $this -> totalPages() ? $this -> totalPages() : $start + $this->showPages - 1);
		}
		return range($start,$end);
	}
}