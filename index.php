<?php
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];
foreach ($products as $product) {
    if ($product["price"] < 20 ){
        echo $product["name"] . " has price of "  . $product["price"];
        echo "<br/>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <h1 style="text-transform: capitalize">Malik Abdullah</h1>
    <hr>
    <ul>
        <?php foreach ($products as $product    ){?>
        <?php if ($product["price"] < 25){?>
                <li>
                    <?php echo $product["name"] . " " . "has price of " . $product["price"]; ?>
                </li>
            <?php   } ?>
        <?php } ?>
    </ul>
</header>
</body>
</html>