<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/db.php";
require_once "include/session.php";
require_once "include/smarty.php";

//$user = R::load('user', $session->login->id);
$bags = R::findAll('bag', "where user_id = {$session->login->id}");

$data = [
    'bags' => $bags
];
$smarty->assign($data);
$smarty->display("myBags.tpl");