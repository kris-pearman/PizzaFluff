<?php
//include database connection file
include('controller/db.php');

//use try/catch block to query the database
try {
    $sql = "SELECT * FROM menu_items";
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

while ($row = $result->fetch()) {
    $products[] = array(
        'ItemID' => $row['Menu_Items_ID'],
        'ItemName' => $row['Name'],
        'ItemPrice' => $row['Price'],
        'ItemType' => $row['Type'],
        'ItemDescription' => $row['Description'],
        'ItemImage' => $row['Image']
    );
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Fluff - Menu</title>
    <meta name="charset" content="UTF-8">
    <meta name="description" content="Online pizza restaurant from the best pizza chef in town">
    <meta name="keywords" content="Pizza,Fluff,Restaurant,Delivery,Takeaway,Nottingham">
    <link rel="stylesheet" href="css/pizza-fluff-base.css">
    <link rel="stylesheet" href="css/product-menu.css">
    <link rel="stylesheet" href="css/options.css">
</head>

<body>
    <?php include('includes/page-header.php'); ?>

    <div class="page-content">
        <div class="content-container">
            <div class="pizza-fluff-logo"><img src="images/Pizzafluff.png"> </img></div>

            <section class="options-block">
                <h2 class="options-header">Pizza</h2>
                <div class="options-row">
                    <?php foreach ($products as $items) : ?>
                        <div class="product-card">
                            <img class="product-image" src="<?php echo $items['ItemImage']; ?>"></img>
                            <strong><?php echo $items['ItemName']; ?></strong>
                            <div class="product-description">
                                <?php echo $items['ItemDescription']; ?>
                            </div>
                            <div class="product-price">
                                <strong>&pound;<?php echo $items['ItemPrice']; ?></strong>
                            </div>
                            <div class="add-to-cart">BUY</div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header">Heading</h2>
                <div class="options-row">
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header">Heading</h2>
                <div class="options-row">
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header">Heading</h2>
                <div class="options-row">
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                    <div class="option">ITEM</div>
                </div>
            </section>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>