<?php

$business=[
    'name' => 'laracasts',
    'cost' => 15,
    "categories"=> ["Testiing","PHP","JavaScript"]
];

foreach($business ['categories'] as $category){

echo $category;
}


function register ($user){
    //create the user record in the db 
    //log them in 
    //send a welcom email
    //redirect to their new dashboard
}

require "index.view.php";

?>