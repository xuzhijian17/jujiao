<?php
class PDOUtils {
	private static $host;
	private static $username;
	private static $password;
	private static $dbname;
	private static $encoding;
	
	function __construct($_host='',$_username='',$_password='',$_dbname='',$_encoding='') {
		self::$host = ($_host ? $_host : '127.0.0.1');
		self::$username = ($_username ? $_username : 'root');
		self::$password = ($_password ? $_password : 'root');
		self::$dbname = ($_dbname ? $_dbname : 'focushop');
		self::$encoding = ($_encoding ? $_encoding : 'utf8');
	}
	private static function link(){
		$link = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname,self::$username,self::$password);
		$link -> query("set names ".self::$encoding);
		return $link;
	}
	public function queryTotal($table_name,$sql_column="*"){
		$link = self::link();
		$sql="select {$sql_column} from {$table_name}";
		$stmt = $link -> prepare($sql);
		$stmt -> execute();
		$totalRows = $stmt -> rowCount();
		self::close($link,$stmt);
		return $totalRows;
	}
	public function queryOnce($sql,$bind_param=array(),$fetch_style=PDO::FETCH_BOTH){
		$link = self::link();
		$stmt = $link -> prepare($sql);
		$stmt -> execute($bind_param);
		$rows = $stmt -> fetch($fetch_style);
		if(DEBUG){
			echo mysql_error(); //common.inc.php定义的DEBUG常量
		}
		self::close($link,$stmt);
		return $rows;
	}
	public function queryRollBack($multisqls){
		try{
			$link = self::link();
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$link -> beginTransaction();
			$i = 0;
			foreach($multisqls as $sql){
				$stmt = $link -> exec($sql);
				$i += $stmt;
			}
			return $i < count($multisqls) ? $link -> rollBack() : $link -> commit();
		}catch(Exception $e){
			$link -> rollBack();
			echo $e -> getMessage();
		}
	}
	public function query($sql,$bind_param=array(),$fetch_style=PDO::FETCH_BOTH){
		$link = self::link();
		$stmt = $link -> prepare($sql);
		$stmt -> execute($bind_param);
		if(DEBUG){
			echo mysql_error(); //common.inc.php定义的DEBUG常量
		}
		$lst = array();
		while($rows = $stmt -> fetch($fetch_style)){
			$lst[] = $rows;
		}
		self::close($link,$stmt);
		return $lst;
	}
	public function operate($sql,$bind_param=array()){
		$link = self::link();
		$stmt = $link -> prepare($sql);
		$affected_rows = $stmt -> execute($bind_param);
		if(DEBUG){
			echo mysql_error(); //common.inc.php定义的DEBUG常量
		}
		self::close($link,$stmt);
		return $affected_rows; 
	}
	public function operateLastId($sql,$bind_param=array()){
		$link = self::link();
		$stmt = $link -> prepare($sql);
		$affected_rows = $stmt -> execute($bind_param);
		if(DEBUG){
			echo mysql_error(); //common.inc.php定义的DEBUG常量
		}
		self::close($link,$stmt);
		return $link -> lastInsertId(); 
	}
	private static function close($link,$stmt){
		$link = null;
		$stmt = null;
	}
}
/*
$pdo = new PDOUtils();
$multisqls = array("insert into t_note(name,cont,fromname) values('xzj','hi guys','kaka')",
					"update t_demo set aa = 3 where id = 2");
$rs = $pdo -> queryRollBack($multisqls);
//$rs = $pdo -> operate("update t_cont set title=? where id=?",array('afdsdfe',9));
//$rs = $pdo -> operate("insert into t_cont(title,cont) values(?,?)",array('xsfj','somsdfse...'));

echo "<pre>";
//var_dump($rs);
echo "</pre>";
*/
?>