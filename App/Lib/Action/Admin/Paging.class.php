<?php
class Paging Extends Paging_ini{
	//public $show_pages;
	//public $show_records;
	//public $table_name;
	//public $sql;
	static $pdo;
	/*
	public function __construct($_show_records,$_show_pages,$_table_name,$_sql){
		$this -> show_records = $_show_records;
		$this -> show_pages = $_show_pages;
		$this -> table_name = $_table_name;
		$this -> sql = $_sql;
		self::$pdo = new PDOUtils();
	}*/
	public function __construct(){
		self::$pdo = new PDOUtils();
	}
	public function totalRecords(){
		$rs = self::$pdo -> queryOnce("select count(id) from {$this -> table_name}");
		$total_records = $rs[0];
		return $total_records;
	}
	public function showRecordsByPage($current_page){
		$records = $this -> show_records;
		$offset = ($current_page - 1) * $records;
		
		return self::$pdo -> query($this -> sql." limit {$offset},{$records}");
	}
	public function totalPages(){
		return ceil($this -> totalRecords()/$this -> show_records);
	}
	public function totalBlocks(){
		return ceil($this -> totalPages()/$this -> show_pages);
	}
	public function DetectionCurrentPage($current_page){
		$current_page = ($current_page < 1 ? 1 : $current_page);
		$current_page = ($current_page > $this -> totalPages() ? $this -> totalPages() : $current_page);
		return $current_page;
	}
	public function DetectionCurrentBlock($current_block){
		$current_block = ($current_block < 1 ? 1 : $current_block);
		$current_block = ($current_block > $this -> totalBlocks() ? $this -> totalBlocks() : $current_block);
		return $current_block;
	}
	public function showStartPage($current_block){
		return ($current_block - 1) * $this -> show_pages + 1;
	}
	public function showEndPage($current_block){
		return $this -> showStartPage($current_block) + $this -> show_pages - 1;
	}
	public function showPageNum($current_block){
		$start_page = ($this -> showStartPage($current_block) < 1 ? 1 : $this -> showStartPage($current_block));
		$end_page = ($this -> showEndPage($current_block) > $this -> totalPages() ? $this -> totalPages() : $this -> showEndPage($current_block));
		return range($start_page,$end_page);
	}
	public function blockByPage($appoint_page){
		return ceil($appoint_page/$this -> show_pages);
	}
	public function DetectionPreviousPage($prev_page){
		return $prev_page >= 1 ? $prev_page : 1;
	}
	public function previous($prev_page,$current_block){
		return $this -> DetectionPreviousPage($prev_page) < $this -> showStartPage($current_block) ? $this -> DetectionCurrentBlock($current_block - 1) : $current_block;
	}
	public function DetectionNextPage($next_page){
		return $next_page >= $this -> totalPages() ? $this->totalPages() : $next_page;
	}
	public function next($next_page,$current_block){
		return $this -> DetectionNextPage($next_page) > $this -> showEndPage($current_block) ? $this -> DetectionCurrentBlock($current_block + 1) : $current_block;
	}
}

?>