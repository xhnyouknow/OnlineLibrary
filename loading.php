<? 
//初始化，连接数据库
include_once("Smarty.class.php");
$smarty=new Smarty;
$smarty->template_dir="./templates/";
$smarty->compile_dir="./templates_c/";
$smarty->configs_dir="./configs/";
$smarty->cache_dir="./cache/";
$dbh=new PDO("mysql:host=localhost;dbname=j14044054","j14044054","14044054");
$dbh->query("set names utf8");
$link=mysql_connect("localhost","j14044054","14044054");
mysql_select_db("j14044054");
mysql_query("set names utf8",$link);
?>