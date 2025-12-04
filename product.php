<?php
$user = "Kenneth";

$greet = "Hello";
if ($user != "") {
    $greet = "Hello, " .$user;
}

$product = "Taylor Swift Merch";
$cost = 10;

$totals = array();

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $i * $cost;
    $discount = ($cost / 100) * ($i * 4);
    $price = $subtotal - $discount;

    $totals[$i] = $price;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
    </head>
    <body>

    <?php require "header.php";?>

    <h2><?php echo $greet; ?></h2>
    <h3><?php echo $product; ?> Prices</h3>
    
    <table border ="1" cellpadding="5" cellspacing="0">    <tr>
        <th>Quantity</th>
        <th>Price (with discount)</th>
    </tr>

    <?php foreach ($totals as $quantity => $price) { ?>
        <tr>
            <td>
                <?php
                    echo $quantity ." item";
                    echo($quantity == 1) ? "" : "s";
                    ?>
            </td>
            <td>$<?php echo number_format($price,2);?></td>
        </tr>
        <?php } ?>
    </table>

    <?php include "footer.php";?>
    <link rel="stylesheet" href="styles.css">
    </body>
</html>