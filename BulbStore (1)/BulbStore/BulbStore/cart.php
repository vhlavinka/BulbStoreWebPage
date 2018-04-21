<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/smarty.php";
require_once "include/db.php";
require_once "include/session.php";

//$session->cart = null;  // failsafe
//$session->cart_info = null;
//echo $session;

$doit = filter_input(INPUT_POST, 'doit');

if (!is_null($doit)) {
    $amount = filter_input(INPUT_POST, 'amount');
    $bulb_id = filter_input(INPUT_POST, 'bulb_id');
} else {
    $amount = 0;
    $bulb_id = 0;
}

if (!isset($session->cart)) {   // initialize cart array
    $session->cart = [];
} 
if (isset($session->cart)){

    foreach ($session->cart as $k => $v) {      // CLEAN UP                      
        if ($bulb_id == $k) {                  // unset cart items that already exist  
            unset($session->cart[$k]);               
        }
    }

    if (isset($bulb_id)) {                      // make sure bulb_id is set
        $session->cart[$bulb_id] = $amount;   // add to session array    
    }

    foreach ($session->cart as $cart_id => $value_amount) {
        if ($value_amount == 0) {
            unset($session->cart[$cart_id]);   // delete cart items equal to 0
        }
        $bulbs = R::findAll('bulb', "id=?", [$cart_id]);  //load bulbs for each $session->cart
    }

    if (!isset($session->cart_info)) {
        $session->cart_info = [];
    }
    if (isset($session->cart_info) && isset($bulb_id)) {
        foreach ($session->cart_info as $ci_key => $ci_val) {   // unset current entry if it exists before adding new one
            if ($ci_val['bulb_id'] == $bulb_id) {        // this way we won't have repeats in cart
                unset($session->cart_info[$ci_key]);
            }
        }
    }
    if(!is_null($doit)){
    // cart info array will load info from each bulb
    foreach ($bulbs as $bulb) {
        $session->cart_info[] = [
            'name' => $bulb->name,
            'bulb_id' => $bulb->id,
            'type' => $bulb->type->name,
            'price' => $bulb->price,
            'amount' => $amount,
            'sub_total' => (float)$amount * (float)$bulb->price
        ];
    }
    }
    foreach ($session->cart_info as $cart_info_key => $cart_info_value){    // CLEAN UP
        if($cart_info_value['amount']==0) {                                 // delete in the array if amount is 0
            unset($session->cart_info[$cart_info_key]);
        }
    }
}

if (!isset($total_price)){
    $total_price = 0.00;
}
foreach ($session->cart_info as $c) {
    $total_price = $total_price + $c['sub_total'];
}

$cart_query = http_build_query($session->cart);

$data = [
    'cart_info'   => $session->cart_info,
   // 'amount'      => $amount,       
    'session_cart'=> $session->cart,
    'total_price' => $total_price,
    'cart_query'  => $cart_query,
    'bulb_id'     => $bulb_id,
];
$smarty->assign($data);
$smarty->display("cart.tpl");


