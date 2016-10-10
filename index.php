<?php

// include
include_once("hlr.class.php");

$hlr = new hlr('081706076876');

// Cek all. Return: array
$data = $hlr->lookup();

echo '<pre>';
print_r($data);
echo '</pre>';

/* Cek by specific provider. Return: string
$city = $hlr->indosat(); // telkomsel, indosat, xl
echo $city;
*/