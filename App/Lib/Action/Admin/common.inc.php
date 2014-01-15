<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/ShangHai");
ini_set("display_errors","1"); //0 as not display errors
error_reporting(E_ALL|E_NOTICE);
//define('ROOT_PATH',realpath(getcwd())); //返回的是引用了这个文件的路径，谁引用它返回的就是谁的路径
//define('ROOT_PATH',dirname(__DIR__)); //返回的是引用了这个文件的路径，谁引用它返回的就是谁的路径
define('COMMON_PATH',__DIR__); //始终返回的是当前文件的路径

define('DEBUG',true);

require __DIR__.'/Paging.ini.php';
require __DIR__.'/Paging.class.php';
require __DIR__.'/PDOUtils.class.php';

?>