<?php


$name = "Home";

function dd($value){

echo "<pre>";
var_dump($value);
echo "</pre>";

die();
}

//dd($_SERVER);

//ECHO $_SERVER['REQUEST_URI'];

//echo $_SERVER['REQUEST_URL']==='/PHP/websites/demo/' ? 'be-grey-900 text-white': 'text-grey-300';
require "view/index.view.php";



