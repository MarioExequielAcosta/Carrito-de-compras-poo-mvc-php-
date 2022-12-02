<?php

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
$base_url .= dirname($_SERVER['SCRIPT_NAME']);

define('BASE_URL', $base_url) ;
define('BASE_DIR', dirname($_SERVER['SCRIPT_NAME'])."/");

define('IVA',.21);


define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'test');
 





try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>