<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/smarty.php";
require_once "include/db.php";

// We need: name, id type, price, amount, sub total
$bag_id = filter_input(INPUT_GET, 'bag_id');

$bag = R::findOne("bag", "id=?", [$bag_id]);            // get bag so we can get user
$user = R::findOne("user", "id=?", [$bag->user_id]);    // get user

$items = R::findAll("item", "bag_id=?", [$bag_id]);     // get all items with this bag id

foreach ($items as $i) {
    $bulbs = R::findAll("bulb", "id=?", [$i->bulb_id]); // get the bulb from each item
}

$total = 0;
foreach ($items as $item) {
    $total += $item->amount * $item->bulb->price;
}

$button_title                                           // button confirmation
    = is_null($session->button_title) ? "Process" : $session->button_title;
unset($session->button_title);

$data = [
    'items' => $items,
    'bag_id' => $bag_id,
    'user' => $user,
    'button_title' => $button_title,
    'total'=>$total
];
$smarty->assign($data);
$smarty->display("showBag.tpl");

