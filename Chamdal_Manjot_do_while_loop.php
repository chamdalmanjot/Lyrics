<?php
 
$itemName = "Black Leather Boots";
$price = 150.00;
$quantity = 0;
$stock = 15;
$message = '';
 
do {
    if ($quantity <= 0) {
        $message = "Item in Stock";
    }
 
    if ($quantity == 0) {
        $quantity = 2; 
    }
 
} while ($quantity <= 0);
 
$message = match (true) {
    $quantity > $stock => "Sorry, we only have $stock units of $itemName in stock.",
    
    default => (function() use ($price, $quantity, $itemName) {
        $totalPrice = $price * $quantity;
        return "Success! You purchased $quantity units of $itemName for a total of $" . number_format($totalPrice, 2) . ".";
    })(),
};
 
?>
 
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/styles.css" />
<head>
    <meta charset="UTF-8">
    <title>Purchase Confirmation</title>
    <style>body {font-family: Arial;}</style>
</head>
<body>
    <h2>Mason Shoe Store Purchase</h2>
    <h3>Item: <?= $itemName ?></h3>
    <p>Price: $<?= number_format($price, 2) ?></p>
    <hr>
    <p><strong>Result:</strong> <?= $message ?></p>
    <p>Quantity processed: <?= $quantity ?></p>
</body>
</html>
 