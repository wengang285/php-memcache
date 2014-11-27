<?php

ini_set( 'display_errors', 'on' );
//error_reporting(E_ALL);
error_reporting(E_ERROR);

require_once "Memcache.class.php";

echo CommMemcache::set("test_ket","test_value",0,300);


echo CommMemcache::get("test_ket");

?>