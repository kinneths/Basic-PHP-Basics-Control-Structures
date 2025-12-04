<?php

$user = "Kenneth";

$pagbati = "Hello, " .$user;

$offer = array("any Taylor Swift merch",3,20,15);

$reg_price = $offer[1] * $offer[2];

$offer_price = $offer[1] * $offer[3];

$saving = $reg_price - $offer_price;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
            .save-tag{
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background: #ff6b6b;
                color: white;
                position: absolute;
                top: 20px;
                right: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 24px;
                font-weight: bold;
            }
        </style>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include "header.php"; ?>

        <h2><?php echo $pagbati; ?></h2>

        <div class="save-tag">
            Save $<?php echo $saving; ?>
        </div>

        <p>
            Buy <?php echo $offer[1]; ?> items of <?php echo $offer[0]; ?> to get a discount!
        </p>

        <p>
            Regular Price: $<?php echo $reg_price; ?><br>
            Discounted Price: $<?php echo $offer_price; ?>
        </p>

        <?php include "footer.php"; ?>

    </body>
</html>