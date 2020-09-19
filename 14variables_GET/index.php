<?php

$cupon = filter_var($_GET['cupon'], FILTER_SANITIZE_STRING);
if(!$cupon) {

    var_dump("no hay cupón");
}

echo $cupon;

echo "<br/>";


$brayan = filter_var($_GET['luis'], FILTER_SANITIZE_STRING);
if(!$brayan) {

    var_dump("no hay luis");
}

echo $brayan;




