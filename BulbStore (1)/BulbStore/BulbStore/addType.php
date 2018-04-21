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
$name = filter_input(INPUT_POST, 'name');

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

try {   
  // trim before using
  $trim_name = trim($name);

  if (strlen($trim_name) < 1) {
    throw new Exception("type name cannot be empty");
  } 
  $typeWithName = R::findOne('type', "name=?", [$trim_name]);
  if (!is_null($typeWithName)) {
    throw new Exception("type with this name already exists");
  } 

  $type = R::dispense('type');
  $type->name = $name;
  $id = R::store($type);
  header("location: addTypeInitial.php");
}
catch (Exception $ex) {
  $message = $ex->getMessage();
}


$data = [
    'name'  => $name,
    'types' => $types,
    'message' => $message
];
$smarty->assign($data);
$smarty->display("addType.tpl");
