<?php
 
$funds = 50;
$stock = 25;
$text = '';
 
switch (true) {
    case ($funds == 0):
        $text = 'Shoes not available';
        break;
 
    case ($funds > 0 && $stock < 10):
        $text = 'item out of stock';
        break;
 
    case ($funds >= 10):
        $text = 'Leather Shoes in Stock';
        break;
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
        <p>The current status is: **<?= $text ?>**</p>
    </main>
 
    <footer>
        <p>&copy; 2025 Mason Shoe Store. All rights reserved.</p>
    </footer>
 
</body>
</html>