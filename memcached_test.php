<?php

ini_set( 'display_errors', 'on' );
//error_reporting(E_ALL);
error_reporting(E_ALL);

require_once "Memcached.class.php";

/*
$begin = time();
for($i=0;$i<10000;$i++){
	$iRet=CommMemcache::set("test_ket_{$i}","test_value",MEMCACHE_COMPRESSED,300);
	if($iRet===false){
		echo "set false {$i}\n";
	}
}
$end = time();

echo "set use=".($end-$begin)."\n";



$begin = time();
for($i=0;$i<10000;$i++){
	$iRet=CommMemcache::get("test_ket_{$i}");
	if($iRet===false){
		echo "get false {$i}\n";
	}
}
$end = time();

echo "get use=".($end-$begin)."\n";


$begin = time();
for($i=0;$i<10000;$i++){
	$iRet=CommMemcache::delete("test_ket_{$i}");
	if($iRet===false){
		echo "delete false {$i}\n";
	}
}
$end = time();

echo "delete use=".($end-$begin)."\n";
*/

//delete在key值不存在或者过期时，会返回false
/*
$iRet=CommMemcache::delete("test_ket_1");
if($iRet===false){
	echo "delete false\n";
}
*/

//add 操作当key值存在且没有过期的时候，会返回false
/*
$iRet=CommMemcache::add("test_ket_1","test_value_2",MEMCACHE_COMPRESSED,10);
if($iRet===false){
	echo "add false\n";
}


print_r(CommMemcache::get("test_ket_1"));

//set 操作当key值存在且没有过期的时候，会覆盖value，相当于replace
//当key值不存在或者过期的时候，则会写入新的value和失效时间
$iRet=CommMemcache::set("test_ket_1","test_value_1",MEMCACHE_COMPRESSED,10);
if($iRet===false){
	echo "set false\n";
}

print_r(CommMemcache::get("test_ket_1"));

*/

//replace在key值存在且没有过期的时候，会f覆盖value，当key值不存在或者过期时，返回false

/*
$iRet=CommMemcache::replace("test_ket_1","test_value_3",MEMCACHE_COMPRESSED,10);
if($iRet===false){
	echo "replace false\n";
}

print_r(CommMemcache::get("test_ket_1"));

*/

/*
$iRet=CommMemcache::delete("test_ket_1");
if($iRet===false){
	echo "delete false\n";
}
*/
/*
$iRet=CommMemcache::set("test_ket_1",10);
if($iRet===false){
	echo "set false\n";
}
*/

/*
$iRet=CommMemcache::increment("test_ket_1",2);
if($iRet===false){
	echo "increment false\n";
}


$iRet=CommMemcache::decrement("test_ket_1",10);
if($iRet===false){
	echo "decrement false\n";
}


print_r(CommMemcache::get("test_ket_1"));

*/



$begin=time();
for($i=0;$i<100000;$i++){
	$info["test_key_{$i}"]="test_value_{$i}";
}

$iRet=CommMemcache::setMulti($info,10);
$end = time();

if($iRet===false){
	echo "setMulti false\n";
}

echo "setMulti use=".($end-$begin)."\n";






print_r(CommMemcache::get("test_key_99999"));

/*
$m = new Memcached();
$m->addServer("127.0.0.1", 11211);

$items = array(
	"test_ket_1"=>"value_1",
	"test_ket_2"=>"value_2",
	"test_ket_3"=>"value_3",
	"test_ket_4"=>"value_4"
);
$m->setMulti($items);
$result = $m->getMulti(array('test_ket_1','test_ket_2','bad_key'), $cas);
var_dump($result);
*/


?>