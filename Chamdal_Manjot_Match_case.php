<?php
 
$shoeType = 'sneakers'; 
$discount = 0;
$regularPrice = 100.00;
 
$discount = match ($shoeType) {
    'leather shoes' => 30,
    'sneakers' => 20,
    'slippers' => 10,
    'sports shoes' => 50,
    default => 0,
};
 
$discountAmount = $regularPrice * ($discount / 100);
$salePrice = $regularPrice - $discountAmount;
 
$text = "The $shoeType are $discount% off today! Regular price: $" . number_format($regularPrice, 2) . ". Sale price: $" . number_format($salePrice, 2) . ".";
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MASON SHOE STORE - BIG SALE</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <header>
        <h1>MASON SHOE STORE</h1>
       
    </header>
 
    <main>
        <h2>TOMORROW BIG SALE</h2>
        <p>Current Item Checked: **<?= ucwords($shoeType) ?>**</p>
        <p>Sale Status: **<?= $text ?>**</p>
        
        <h3>All Discounts</h3>
        <ul>
            <li>Leather Shoes: 30%</li>
            <li>Sneakers: 20%</li>
            <li>Slippers: 10%</li>
            <li>Sports Shoes: 50%</li>
        </ul>
    </main>
 
</body>
</html>
 
