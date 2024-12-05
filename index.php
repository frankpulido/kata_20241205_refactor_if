<?php
declare(strict_types=1);
require "sale_black_friday.php";

$client1 = new Loyalty(Kind::REGULAR);
$client2 = new Loyalty(Kind::PREMIUM);
$client3 = new Loyalty(Kind::VIP);
$client4 = new Loyalty(Kind::OTHER);

$sales_black_friday = [
    new SaleBlackFriday($client1, 1000),
    new SaleBlackFriday($client2, 2000),
    new SaleBlackFriday($client3, 3000),
    new SaleBlackFriday($client4, 500),
];

foreach ($sales_black_friday as $sale) {
    echo $sale->__toString();
    echo PHP_EOL;
}

?>