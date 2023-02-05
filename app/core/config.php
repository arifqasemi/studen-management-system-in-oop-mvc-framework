<?php



define('Website_title', 'My Website');
// define();
$path = str_replace("\\","/","http://" . $_SERVER['SERVER_NAME'] .__DIR__."/");
$path1 = str_replace($_SERVER['DOCUMENT_ROOT'],"", $path);

define('ROOT', str_replace('Core','public',$path1));
define('ASSET', str_replace('Core','public/assets',$path1));
