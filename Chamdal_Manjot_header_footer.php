<?php
 
$itemName = "Sales Goal";
$price = 1000;
$stock = 500;
$quantity = 100;
$message = '';
$list = '';
 
for ($w = 1; $w <= 4; $w++) {
    $stock += $quantity;
    $rem = $price - $stock;
 
    if ($stock >= $price) {
        $status = "Target MET";
    } else {
        $status = "Target NOT met";
    }
 
    $list .= "<li>Week $w: Total Sales: $" . number_format($stock, 0) . ". Needed: $" . number_format($rem, 0) . ". Status: $status.</li>";
}
 
if ($stock >= $price) {
    $message = "SUCCESS: Mason Shoe Store exceeded the $" . number_format($price, 0) . " $itemName!";
} else {
    $message = "ALERT: Mason Shoe Store failed to reach the $" . number_format($price, 0) . " $itemName.";
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mason Shoe Store | Sales Tracker</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
    <header>
        <h1>MASON SHOE STORE</h1>
        <nav>
            <a href="index.php">Home</a> |
            <a href="products.php">Shoes</a> |
            <a href="about.php">About Us</a> |
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <h2><?= $itemName ?>: $<?= number_format($price, 0) ?> over 4 Weeks</h2>
        
        <h3>Weekly Report</h3>
        <ul>
            <?= $list ?>
        </ul>
 
        <h3>Final Summary</h3>
        <p>
            <?= $message ?>
        </p>
    </main>
    <footer>
        <p>&copy; <?= date("Y") ?> Created by: Manjot Chamdal.</p>
        <p>123 Main Street | City, State | (555) 555-SHOE</p>
    </footer>
</body>
</html>
 