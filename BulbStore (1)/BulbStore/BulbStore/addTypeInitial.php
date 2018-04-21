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

$types = [];
$type_recs = R::findAll('type', 'order by name');
foreach($type_recs as $type_rec) {
  $types[$type_rec->id] = $type_rec->name;
}

$data = [
    'types' => $types,
    'name'  => null,

];
$smarty->assign($data);
$smarty->display("addType.tpl");