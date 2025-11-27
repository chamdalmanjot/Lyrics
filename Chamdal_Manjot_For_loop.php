<?php
 
$goal = 1000;
$startSales = 500;
$increase = 100;
$totalSales = $startSales;
$list = '';
 
for ($w = 1; $w <= 4; $w++) {
    $totalSales += $increase;
    $remaining = $goal - $totalSales;
 
    if ($totalSales >= $goal) {
        $status = "Target MET";
    } else {
        $status = "Target NOT met";
    }
 
    $list .= "<li>Week $w: Sales: $" . number_format($totalSales, 0) . ". Needed: $" . number_format($remaining, 0) . ". Status: $status.</li>";
}
 
if ($totalSales >= $goal) {
    $msg = "SUCCESS: Mason Shoe Store exceeded the $" . number_format($goal, 0) . " goal!";
} else {
    $msg = "ALERT: Mason Shoe Store failed to reach the $" . number_format($goal, 0) . " goal.";
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sales Target Tracker</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <h1>Mason Shoe Store: Sales Tracker</h1>
    <h2>Goal: $<?= number_format($goal, 0) ?> over 4 Weeks</h2>
    
    <h3>Weekly Report</h3>
    <ul>
        <?= $list ?>
    </ul>
 
    <h3>Final Summary</h3>
    <p>
        <?= $msg ?>
    </p>
</body>
</html>
 
<?php
