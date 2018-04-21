<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/smarty.php";
require_once "include/db.php";
require_once "include/session.php";
//$session->unsetAll();  // failsafe

$doit = filter_input(INPUT_POST, 'doit');

if (!is_null($doit)) {
  $session->dd = filter_input(INPUT_POST, 'dd');
}

// convert type records map from id to name
$types[0] = "-- ALL --";
$type_recs = R::findAll('type', 'order by name');
foreach($type_recs as $type_rec) {
  $types[$type_rec->id] = $type_rec->name;
}

//controls default order
if (!isset($session->bulb_order)) {
  $session->bulb_order = 'name';
}
$order = $session->bulb_order;


if (is_null($session->dd) || $session->dd == 0) {
  $bulbs = R::findAll('bulb', "order by $order");
}
if (isset($session->dd) && $session->dd != 0){
  $bulbs = R::findAll('bulb', "where type_id =? order by $order", [$session->dd]);
}
$data = [
  'bulbs' => $bulbs,
  'types' => $types,
  'dd'    => $session->dd,
  'order' => $order,
  'doit'  => $doit
];
$smarty->assign($data);
$smarty->display("index.tpl");

