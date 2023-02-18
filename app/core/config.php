<?php



define('Website_title', 'My Website');
// define();
$path = str_replace("\\","/","http://" . $_SERVER['SERVER_NAME'] .__DIR__."/");
$path1 = str_replace($_SERVER['DOCUMENT_ROOT'],"", $path);

define('ROOT', 'http://localhost/school/public/assets/');
define('ASSET', 'http://localhost/school/public/');
define('DBNAME','school');
define('DBHOST','localhost');
define('DBDRIVER','mysql');
define('DBPASS','');
define('DBUSER','root');