<?php
include_once('_config.php');

MyAutoload::start();


// si ma route/request est "homepage", alors je charge homepage
$request = $_GET['request'];


$router = new Routeur($request);
$router->renderControlleur();





