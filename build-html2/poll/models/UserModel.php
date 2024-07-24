<?php

function authorization($userLogin, $userPwd){

    $sql = "SELECT * FROM `eco_users`
                WHERE `user_login` = '{$userLogin}'
                AND `user_pwd` = '{$userPwd}'
                LIMIT 1";
    $rsUser = mysqli_query($GLOBALS["db"],$sql);
    $rs = mysqli_fetch_assoc($rsUser);
    return $rs;
}

function isUser($userLogin){

    $sql = "SELECT * FROM `eco_users`
                WHERE `user_login` = '{$userLogin}'
                LIMIT 1";
    $rsUser = mysqli_query($GLOBALS["db"],$sql);
    $rs = mysqli_fetch_assoc($rsUser);
    return $rs;
}

function registration($user){
    $sql = "INSERT INTO `eco_users`
            (`user_id`,
            `user_name`,
            `user_phone`,
            `user_social`,
            `user_city`,
            `user_school`,
            `user_class`,
            `user_teacher`,
            `user_teacherPosition`,
            `user_login`,
            `user_pwd`,
            `user_reg_date`,
            `user_currQuestion`,
            `user_endtest_date`,
            `user_percent`,
            `user_ip`)
            VALUES (NULL";
    foreach($user as $key => $value){
        if($key != 'registerPassword2' && $key != 'doItName'){
            $sql .= ", '{$value}'";
        }
    }
    $sql .= ")";
    $rsUser = mysqli_query($GLOBALS["db"],$sql);
    return $rsUser;
}

function getCurrentQuestion($userId){

    $sql = "SELECT `user_currQuestion` FROM `eco_users`
                    WHERE `user_id` = '{$userId}'
                    LIMIT 1";
    $rsUser = mysqli_query($GLOBALS["db"],$sql);
    $rs = mysqli_fetch_assoc($rsUser);
    return $rs['user_currQuestion'];

}

function changeCurrentQuestion($currQue, $userId){

    $sql = "UPDATE `eco_users` SET `user_currQuestion` = '{$currQue}' WHERE `eco_users`.`user_id` = '{$userId}';";
    $rs = mysqli_query($GLOBALS['db'],$sql);
    $_SESSION['user'] = authorization($_SESSION['user']['user_login'], $_SESSION['user']['user_pwd']);
    return $rs;
}

function getAllUsers($limitOf, $limitTo, $order, $type, $search){
    if($search != '0'){
        if($search == 'creative') {
            $sql = "SELECT * FROM `eco_users`
                    WHERE `isUpload_doc` = 1
                    LIMIT {$limitOf}, {$limitTo}";
            $sqlCount = "SELECT COUNT(*) FROM `eco_users` WHERE `isUpload_doc` = 1";
        } else {
            $search = trim(substr($search, 0, 64)); // Это можно убрать, это ограничение на 64 символа в поиске
            $search = preg_replace("#\#s=#msi", "", $search);
            $search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
            $search = preg_replace("#  +#msi", " ", $search);

            $sql = "SELECT * FROM `eco_users`
                    WHERE `user_name` LIKE '%".preg_replace("# #msi", "%' OR `user_name` LIKE '%", $search)."%'
                    OR `user_city` LIKE '%".preg_replace("# #msi", "%' OR `user_city` LIKE '%", $search)."%'
                    OR `user_school` LIKE '%".preg_replace("# #msi", "%' OR `user_school` LIKE '%", $search)."%'
                    OR `user_class` LIKE '%".preg_replace("# #msi", "%' OR `user_class` LIKE '%", $search)."%'
                    ORDER BY `{$order}` {$type}
                    LIMIT {$limitOf}, {$limitTo}";
            $sqlCount = "SELECT COUNT(*) FROM `eco_users`
                        WHERE `user_name` LIKE '%".preg_replace("# #msi", "%' OR `user_name` LIKE '%", $search)."%'
                        OR `user_city` LIKE '%".preg_replace("# #msi", "%' OR `user_city` LIKE '%", $search)."%'
                        OR `user_school` LIKE '%".preg_replace("# #msi", "%' OR `user_school` LIKE '%", $search)."%'
                        OR `user_class` LIKE '%".preg_replace("# #msi", "%' OR `user_class` LIKE '%", $search)."%'";
        }
    } else {
        $sql = "SELECT * FROM `eco_users`
                ORDER BY `{$order}` {$type}
                LIMIT {$limitOf}, {$limitTo}";
        $sqlCount = "SELECT COUNT(*) FROM `eco_users`";
    }
    
    $rsUser = mysqli_query($GLOBALS["db"],$sql);
    $rsCounter = mysqli_query($GLOBALS["db"],$sqlCount);
    $rs['users'] = createSmartyRsArray($rsUser);
    $rs['counter'] = mysqli_fetch_row($rsCounter);
    return $rs;
}

function deleteUserInfo($id){
    $sql = "DELETE FROM `eco_users` WHERE `user_id` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    if($rs){
        $sql = "DELETE FROM `eco_users_answers` WHERE `eco_users_answers_user_id` = '{$id}'";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        $sql = "DELETE FROM `eco_reviews` WHERE `review_user_id` = '{$id}'";
        $rs = mysqli_query($GLOBALS["db"],$sql);
    }
    return $rs;
}

function getUserInfo($userId){
    $sql = "SELECT * FROM `eco_users` WHERE `user_id` = '{$userId}' LIMIT 1";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function setPercent($id, $percent){
    $sql = "UPDATE `eco_users` SET `user_percent` = '{$percent}' WHERE `user_id` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function resetTestById($id){
    $sql = "UPDATE `eco_users` SET 
                `user_currQuestion` = '1', 
                `user_endtest_date` = '', 
                `user_percent` = '', 
                `isUpload_doc` = 0, 
                `user_uploadDate` = '', 
                `creative_comment` = '' WHERE `user_id` = '{$id}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    if($rs){
        $sql = "DELETE FROM `eco_users_answers` WHERE `eco_users_answers_user_id` = '{$id}'";
        $rs = mysqli_query($GLOBALS["db"],$sql);
        return $rs;
    }
}

function getReviewByUserId($userId){
    $sql = "SELECT * FROM `eco_reviews` WHERE `review_user_id` = '{$userId}'";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return mysqli_fetch_assoc($rs);
}

function getFullUsers(){
    $sql = "SELECT * FROM `eco_users`
            LEFT JOIN `eco_reviews`
            ON `eco_users`.`user_id` = `eco_reviews`.`review_user_id`
            ORDER BY `eco_users`.`user_id` ASC";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return createSmartyRsArray($rs);
}

function setUpload($userId, $uploadDate){
    $sql = "UPDATE `eco_users` SET `isUpload_doc` = '1', `user_uploadDate` = '{$uploadDate}' WHERE `eco_users`.`user_id` = $userId";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}

function setComment($userId, $comment) {
    $sql = "UPDATE `eco_users` SET `creative_comment` = '{$comment}' WHERE `eco_users`.`user_id` = $userId";
    $rs = mysqli_query($GLOBALS["db"],$sql);
    return $rs;
}