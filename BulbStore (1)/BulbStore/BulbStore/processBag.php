<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/db.php";
require_once "include/session.php";

if (!isset($session->login)) {  // not authenticated
  header("location: login.php");
  exit();
}
if (!$session->login->is_admin) { // not an admin
  die("Prohibited");
}

$bag_id = filter_input(INPUT_GET, 'bag_id');
$confirm = filter_input(INPUT_GET, 'confirm');

$bag = R::load('bag', $bag_id);                     // get bag we want to remove
$items = R::findAll('item', "bag_id=?",[$bag_id]);  // get the items in bag

if (!$confirm) {
  // go back with message, button title change, and confirm setting
  $session->message = "Press again to confirm";
  $session->button_title = "Confirm";
  $session->confirm = 1;
  header("location: showBag.php?bag_id=$bag_id");
  exit();
}

// must update the stock for each bulb
foreach($items as $i){            
    $bulb = R::load('bulb', $i->bulb_id);
    if ($bulb->in_stock < $i->amount) {
        $session->message = "Insufficient stock";
        header("location: showBag.php?bag_id=$bag_id");
        exit();
    } else {
        $bulb->in_stock = $bulb->in_stock - $i->amount;
        R::store($bulb);
    }
}

// must delete the items before we can delete the bag
foreach($items as $item){
   R::trash($item);
}

R::trash($bag);

$session->message = "Bag #$bag_id successfully processed";

header("location: allBags.php");



