<?php 

function sendPoll($poll, $userInfo, $site) {
	$sql = "INSERT INTO `poll` (`poll_id`, `poll_userLogin`, `poll_userId`, `poll_userSite`, `poll_reward`) 
			VALUES (NULL, '{$userInfo['user_login']}', '{$userInfo['user_id']}', '{$site}', '{$poll}')";
	$rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function getPollByUser($userInfo, $site) {
	$sql = "SELECT * FROM `poll` WHERE `poll_userLogin` = '{$userInfo['user_login']}' AND `poll_userId` = '{$userInfo['user_id']}' AND `poll_userSite` = '{$site}'";
	$rsPoll = mysqli_query($GLOBALS["db"],$sql);
	$rs = mysqli_fetch_assoc($rsPoll);
    return $rs;
}

function changePoll($poll, $userInfo, $site) {
	$sql = "UPDATE `poll` SET `poll_reward` = '{$poll}' WHERE `poll_userId` = '{$userInfo['user_id']}' AND `poll_userLogin` = '{$userInfo['user_login']}' AND `poll_userSite` = '{$site}'";
	$rsPoll = mysqli_query($GLOBALS["db"],$sql);
	return $rsPoll;

}

 ?>