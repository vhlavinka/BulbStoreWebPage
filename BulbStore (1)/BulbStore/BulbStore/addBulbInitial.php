<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/smarty.php";
require_once "include/db.php";

if (!isset($session->login)) {
  header("location: login.php");
  exit();
}
if (!$session->login->is_admin) { // not an admin
  die("Prohibited");
}

$cancel = filter_input(INPUT_POST, 'cancel');

if (!is_null($cancel)) {
  header("location: .");
  exit();
}

// load types to choose from
$types = [];
$type_recs = R::findAll('type', 'order by name');
foreach($type_recs as $type_rec) {
  $types[$type_rec->id] = $type_rec->name;
}

// find image ids being used already
$bulbs = R::findAll('bulb');

// load images to choose from
$images = [];
$image_recs = R::findAll('image', 'order by name');

foreach($image_recs as $image_rec){
    $images[$image_rec->id] = $image_rec->name;
}

//foreach ($image_recs as $image_rec) {
//    foreach ($bulbs as $bulb) {
//        if ($bulb->image_id != $image_rec->id) {
//            $images[$image_rec->id] = $image_rec->name;
//        } elseif (isset($images[$image_rec->id])) {
//            unset($images[$image_rec_id->id]);
//        }
//    }
//}

$data = [
    'name'  => null,
    'types'  => $types,
    'price' => null,
    'in_stock' => null,
    'description' => null,
    'images' => $images
];
$smarty->assign($data);
$smarty->display("addBulb.tpl");
