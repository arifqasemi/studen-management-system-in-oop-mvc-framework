<?php
require_once("database.php");
require_once("model.php");
require_once("function.php");
require_once("config.php");
require_once("controller.php");
require_once("router.php");
require_once("autoload.php");

spl_autoload_register(function($class){
   require "../app/model/" .($class) .".php";
});
