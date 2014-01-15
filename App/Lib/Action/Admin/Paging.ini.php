<?php
class Paging_ini{
	//public $current_page = 1;
	//public $current_block = 1;
	public $show_pages = 5;  //每一个版块显示3页
	public $show_records = 5;  //每一页显示3条记录
	public $table_name = 'products';
	public $sql = "SELECT a.id,a.proname,a.marketprice,a.saleprice,a.discount,a.ishot,a.buymaxnum,b.brandname FROM products AS a INNER JOIN brand AS b ON a.brandid = b.id";
	
	/**
	* ajax参数设置
	*/
	const request_method = 'POST';
	const num = 'n';
	const block = 'b';
	const nextpage = 'np';
	const nextblock = 'nb';
	const prepage = 'pp';
	const preblock = 'pb';
}
?>