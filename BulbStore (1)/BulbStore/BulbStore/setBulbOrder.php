<?php

/* --------------------------
    VALERIE HLAVINKA
    417 - USER INTERFACES
    PROGRAM 2
----------------------------*/

require_once "include/session.php";

$field = filter_input(INPUT_GET, 'field');

$session->bulb_order = $field;

//exit();  // use this to hold off redirection

header("location: .");
