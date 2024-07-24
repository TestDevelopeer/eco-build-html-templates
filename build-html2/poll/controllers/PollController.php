<?php 
include_once "../models/PollModel.php";

function sendpollAction() {
	
	if (isset($_POST['poll'])) {
		$poll = $_POST['poll'];
		$userInfo = $_SESSION['user'];
		$isHavePoll = getPollByUser($userInfo, 'btw');
		if (!$isHavePoll && $poll !== '') {
			$res = sendPoll($poll, $userInfo, 'btw');
		} else {
			$res = changePoll($poll, $userInfo, 'btw');
		}
		
		if ($res) {
			setcookie('poll', true, time() + 2592000, '/' );
			$rs['success'] = 1;
		} else {
			$rs['success'] = 0;
		}
	} else {
		$rs['success'] = 0;
	}
	
	echo json_encode($rs);
}

 ?>