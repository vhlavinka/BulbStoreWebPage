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

$bulb_id = filter_input(INPUT_GET, 'bulb_id');

// get bulb from id
$bulb = R::load('bulb', $bulb_id);

// get images to choose from
$images = [];
$image_recs = R::findAll('image', 'order by name');
foreach($image_recs as $image_rec) {
  $images[$image_rec->id] = $image_rec->name;
}

$data = [
    'name'  => $bulb->name, 
    'type' => $bulb->type_id,
    'price' => $bulb->price,
    'in_stock' => $bulb->in_stock,
    'description' => $bulb->description,
    'images' => $images,
    'image' => $bulb->image_id,
    'bulb_id'=>$bulb_id
];
$smarty->assign($data);
$smarty->display("modifyBulb.tpl");
