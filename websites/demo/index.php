
<?php 

require 'function.php';
//dd($_SERVER);

$uri =$_SERVER['REQUEST_URI'];

if($uri === '/PHP/websites/demo/'){

require 'controllers/index.php';
} elseif($uri === '/PHP/websites/demo/about'){

require 'controllers/about.php';
}elseif($uri === '/PHP/websites/demo/contact'){

require 'controllers/contact.php';
}


