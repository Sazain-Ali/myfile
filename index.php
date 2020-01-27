<?php

$std = array ("stdId" => 1001, "stdName" => "Zainab", "stdClass" => "VII-C");

$stdDetails = array ("fName" => "Zahra", "lName" => "Ali");

$array = array_merge($std, $stdDetails);

var_dump($array);

?>