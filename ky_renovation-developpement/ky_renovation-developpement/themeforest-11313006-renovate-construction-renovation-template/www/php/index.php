<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once('header.php');
if(file_exists(basename(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php')))
	require_once(basename(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php'));
else
	require_once("404.php");
require_once('footer.php');
?>