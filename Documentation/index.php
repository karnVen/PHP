<div class="header">
    <h1>Welcome to our store!</h1>
    
    <p>Hello, <?php echo "Alex"; ?>!</p>
    
    <p>Your balance is: <?= "$50.00" ?></p>
</div>

<?php
$price = "20"; // This is a STRING because it's in quotes
$tax = 5;      // This is an INT

// PHP Juggling: It sees the '+' and converts "20" to 20 automatically.
$total = $price + $tax; 
$st= "i am string";

echo get_debug_type($total); // Output: int
echo $total; // Output: 25
var_dump($total);
var_dump($st);


//////////////

$user = "Alex";
$discount = 20;

// Using Heredoc for a clean, multi-line string
$message = <<<EMAIL
    Hello {$user},
    
    We have a special offer for you:
    Get {$discount}% off your next order!
    
    Click here to shop.
EMAIL;

echo $message;

?>    
