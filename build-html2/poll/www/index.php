<?php
include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';
include_once '../controllers/UserController.php';
include_once '../models/UserModel.php';
include_once '../models/AuthModel.php';
include_once "../models/PollModel.php";

session_start();

$cookieName = 'user';
$cookieNameMD5 = md5($cookieName);
$maxQuestions = 25;

if(isset($_SESSION['user'])){
    $pollInfo = getPollByUser($_SESSION['user'], 'btw');
    if ($pollInfo) {
        $smarty->assign('pollInfo', $pollInfo);
    }
    $smarty->assign('arUser', $_SESSION['user']);
}

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$smarty->assign('controllerName', $controllerName);

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
$smarty->assign('actionName', $actionName);

loadPage($smarty, $controllerName, $actionName);