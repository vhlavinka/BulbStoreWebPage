<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/db.php";
require_once "include/session.php";
require_once "include/smarty.php";

$cart = filter_input(INPUT_POST, 'cart'); // pass in cart array in form of query
parse_str($cart, $items); // parse the query and generate an array of items

foreach($session->cart as $key_sc => $val_sc){  // reset cart 
    unset($session->cart[$key_sc]);
}

foreach($session->cart_info as $key_ci => $val_ci){ // reset cart info
    unset($session->cart_info[$key_ci]);
}
   
// create bag
$bag = R::dispense('bag');
$bag->user_id = $session->login->id;
$bag->made_on = date("Y-m-d H:i:s", time());
$id = R::store($bag);

// create items
foreach ($items as $key => $value) {
    $item = R::dispense('item');
    $item->bulb_id = $key;
    $item->bag_id = $bag->id;
    $item->amount = $value;
    $bulb = R::findOne('bulb', "id=?",[$key]);
    $item->price = $bulb->price;   // need to get bulb->price, price will show up correct on
                                   // showBags because its being loaded directly from bulb and not item
    $id = R::store($item);
}

header("location: myBags.php");
exit();
//$data = [
//    'bag' => $bag,
//    'cart'=> $cart,
//    'items'=>$items
//];
//$smarty->assign($data);
//$smarty->display("createBagFromCart.tpl");
