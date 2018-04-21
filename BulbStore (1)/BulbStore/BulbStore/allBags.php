<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/db.php";
require_once "include/session.php";
require_once "include/smarty.php";


$bags = R::findAll('bag');
foreach($bags as $b){
  $users = R::findOne('user', "id=?", [$b->user_id]);  
}

$data = [
    'bags' => $bags
];
$smarty->assign($data);
$smarty->display("allBags.tpl");
