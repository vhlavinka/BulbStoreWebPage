<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/session.php";
require_once "include/db.php";
require_once "include/smarty.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

$bulb_id = filter_input(INPUT_GET, 'bulb_id');
$amount = filter_input(INPUT_GET, 'amount');
$bulb = R::load('bulb', $bulb_id);

if(!isset($amount)) {
    $amount = "";
}

if ($bulb->image != null) {
  $image = "img/bulbs/{$bulb->image->name}";
}
else {
  $image = "img/unavailable.jpg";
}


$data = [
    'bulb' => $bulb,
    'image' => $image,
    'bulb_id'=>$bulb_id,
    'amount' => $amount
];
$smarty->assign($data);
$smarty->display("showBulb.tpl");
