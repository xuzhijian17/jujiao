<?php
class ProductsModel extends Model{
	public function getCarProducts() {
		$carProList = array(
			array('imageName'=>'24043_60_60.jpg','proName'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','price'=>59),
			array('imageName'=>'24043_60_60.jpg','proName'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','price'=>59),
			array('imageName'=>'24043_60_60.jpg','proName'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','price'=>59),
			array('imageName'=>'24043_60_60.jpg','proName'=>'格兰宝石（GEMSPA）粉水晶身体乳 285ml','price'=>59)
		);
		return $carProList;
	}

	public function getTotalProductRecords(){
		$products = M('products');
		$totalRecords = $products->count ();
		return $totalRecords;
	}
	public function getProducts($pageObj,$currentPage){
		$products = M('products');
		$rowset = $products->field('id,proname,marketprice,saleprice,discount,imagepath')->order('id desc')->limit(($currentPage - 1) * $pageObj->showRecords,$pageObj->showRecords)->select();
		//$rowset = $products->field('id,proname,marketprice,saleprice,imagepath')->limit ( $pageObj->firstRow . ',' . $pageObj->listRows )->order ( 'id asc' )->select (); //使用ORG中的分页需要在convention.php中添加'VAR_PAGE'=> 'p',	// 默认分页跳转变量
		return $rowset;
	}

}