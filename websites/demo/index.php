
<?php 

require 'function.php';
//dd($_SERVER);

$uri =parse_url($_SERVER['REQUEST_URI'])['path'];

// if($uri === '/PHP/websites/demo/'){

// require 'controllers/index.php';
// } elseif($uri === '/PHP/websites/demo/about'){

// require 'controllers/about.php';
// }elseif($uri === '/PHP/websites/demo/contact'){

// require 'controllers/contact.php';
// }

$routes =[
    '/PHP/websites/demo/'=>'controllers/index.php',
    '/PHP/websites/demo/about.php'=>'controllers/about.php',
    '/PHP/websites/demo/contact.php' => 'controllers/contact.php',
];

if (array_key_exists($uri,$routes)){
    require $routes[$uri];
}


