<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/smarty.php";

$data = [
  'page_title' => 'Sample',
];
$smarty->assign($data);
$smarty->display("sample.tpl");
