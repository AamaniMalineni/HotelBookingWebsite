<?php

//Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
defined('DB_USER') ? null : define("DB_USER","aamanimalineni");		  //define our database user	
defined('DB_PASS') ? null : define("DB_PASS","aamanimalinenipass");			  //define our database Password	
defined('DB_NAME') ? null : define("DB_NAME","aamanimalinenidatabase"); //define our database Name
try {
    $dsn = 'mysql:host=localhost;dbname=aamanimalinenidatabase';
    $username = 'aamanimalineni';
$password = 'aamanimalinenipass';
$db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
$error_message = $e->getMessage();
include('database_error.php');
exit();
}


$thisFile = str_replace('\\', '/', __FILE__);
$docRoot =$_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'includes/config.php'), '', $thisFile);
$srvRoot  = str_replace('config/config.php','', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>