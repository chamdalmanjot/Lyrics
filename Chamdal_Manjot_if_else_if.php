<?php
$funds = 20;
$stock = 5;
 
if ($funds == 0) {
    $text = 'Shoes not available';
} elseif ($funds > 0 && $stock < 10) {
    $text = 'Item out of stock, ordered already';
} elseif ($funds >= 10) {
    $text = 'Best Shoes in Town';
} else {
    $text = 'Insufficient funds for luxury items';
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MASON SHOE STORE</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <header>
        <h1>MASON SHOE STORE</h1>
    </header>
 
    <main>
        <h2>LUXURY SHOES</h2>
        <p>Current Status: **<?= $text ?>**</p>
    </main>
 
    
</body>
</html>
 