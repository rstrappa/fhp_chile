<?php
require_once 'model/database.php';
session_start();

$controller = 'personas';

if(!isset($_REQUEST['c']))
{
	//echo 'default';
	require_once "controller/$controller.controller.php";
	$controller = ucwords($controller) .'Controller';
	$controller = new $controller;
	$controller->Index();
}
else
{
	$controller = strtolower($_REQUEST['c']);
	//echo $controller;
	$accion = $_REQUEST['a'];
	//echo $accion;
	require_once "controller/$controller.controller.php";
	$controller = ucwords($controller).'Controller';
	$controller = new $controller;

	call_user_func(array($controller,$accion));



}

?>
