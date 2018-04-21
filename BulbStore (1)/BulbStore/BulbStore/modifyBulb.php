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

$bulb_id = filter_input(INPUT_POST, 'bulb_id');
$cancel = filter_input(INPUT_POST, 'cancel');



if (!is_null($cancel)) {
  header("location: .");
  exit();
}

$bulb = R::load('bulb',$bulb_id);

// get images to choose from
$images = [];
$image_recs = R::findAll('image', 'order by name');
foreach($image_recs as $image_rec) {
  $images[$image_rec->id] = $image_rec->name;
}

//$name = filter_input(INPUT_POST, 'name');
//$type = filter_input(INPUT_POST, 'type');
$price = filter_input(INPUT_POST, 'price');
$in_stock = filter_input(INPUT_POST, 'in_stock');
$description = filter_input(INPUT_POST, 'description');
$image = filter_input(INPUT_POST, 'image');

try {
  $trim_price = trim($price);
  $trim_in_stock = trim($in_stock);

  if (!preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $trim_price)) {
    throw new Exception("illegal price format");
  }
  if (!preg_match("/^\d+$/", $trim_in_stock)) {
    throw new Exception("illegal in_stock format");
  }
  
  $bulbWithName = R::findOne('bulb', "name=?", [$trim_name]);
  
  if (!is_null($bulbWithName) && $bulbWithName->id != $bulb->id) {
    throw new Exception("another bulb with this name already exists");
  }
  
  $bulb->price = $trim_price;
  $bulb->in_stock = $trim_in_stock;
  $bulb->description = $description; // make sure input is ok
  $bulb->image_id = $image; 
  $id = R::store($bulb);
  header("location: .");
  exit();
}
catch (Exception $ex) {
  $message = $ex->getMessage();
}


$data = [
    'name'  => $bulb->name,
    'type'  => $bulb->type_id,
    'price' => $price,
    'in_stock' => $in_stock,
    'description' => $description,
    'images' => $images,
    'image' => $image,
    'message' => $message,
    'bulb_id' => $bulb_id
];
$smarty->assign($data);
$smarty->display("modifyBulb.tpl");
