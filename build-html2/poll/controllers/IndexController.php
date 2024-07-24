<?php 

include_once "../models/PollModel.php";

if(!isset($_SESSION['user']) || $_SESSION['user'] == ''){
    header("Location: /");
}

function indexAction($smarty){
	$smarty->assign('pageTitle', 'Build The World | Голосование за приз');
	$smarty->assign('page', 'Index');

	$userInfo = $_SESSION['user'];
	$pollInfo = getPollByUser($userInfo, 'btw');

	if ($pollInfo) {
		header("Location: /");
	}

	loadTemplate($smarty, 'poll/head');
	loadTemplate($smarty, 'poll/body');
	loadTemplate($smarty, 'poll/footer');
}

 ?>