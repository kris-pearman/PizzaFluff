<?php
//include database connection file
include('controller/db.php');
//use try/catch block to query the database

// if ($_SESSION['level'] != 3) {
//     echo "administrator required";
//     exit();
// }

try {
    $sql = "SELECT * FROM menu_items WHERE Type = 'Mains' ";
    $mainsresult = $pdo->query($sql);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

while ($row = $mainsresult->fetch()) {
    $mainproducts[] = array(
        'ItemID' => $row['Menu_Items_ID'],
        'ItemName' => $row['Name'],
        'ItemPrice' => $row['Price'],
        'ItemType' => $row['Type'],
        'ItemDescription' => $row['Description'],
        'ItemImage' => $row['Image']
    );
}

try {
    $sql = "SELECT * FROM menu_items WHERE Type = 'Sides' ";
    $sidesresult = $pdo->query($sql);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

while ($row = $sidesresult->fetch()) {
    $sidesproducts[] = array(
        'ItemID' => $row['Menu_Items_ID'],
        'ItemName' => $row['Name'],
        'ItemPrice' => $row['Price'],
        'ItemType' => $row['Type'],
        'ItemDescription' => $row['Description'],
        'ItemImage' => $row['Image']
    );
}

try {
    $sql = "SELECT * FROM menu_items WHERE Type = 'Desserts' ";
    $dessertsresult = $pdo->query($sql);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

while ($row = $dessertsresult->fetch()) {
    $dessertsproducts[] = array(
        'ItemID' => $row['Menu_Items_ID'],
        'ItemName' => $row['Name'],
        'ItemPrice' => $row['Price'],
        'ItemType' => $row['Type'],
        'ItemDescription' => $row['Description'],
        'ItemImage' => $row['Image']
    );
}

try {
    $sql = "SELECT * FROM menu_items WHERE Type = 'Drinks' ";
    $drinksresult = $pdo->query($sql);
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}

while ($row = $drinksresult->fetch()) {
    $drinksproducts[] = array(
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
    <?php if ($_SESSION['Access'] != 2 ){
    header('Location:index.php');
    }
    ?>
    

    <div class="page-content">
        <div class="content-container">
            <div class="pizza-fluff-logo"><img src="images/Pizzafluff.png"> </img></div>

            <section class="options-block">
                <h2 class="options-header"><a id="mains">Mains</h2>
                <div class="options-row">
                    <?php foreach ($mainproducts as $items) : ?>
                        <div class="product-card">
                            <img class="product-image" src="<?php echo $items['ItemImage']; ?>"></img>
                            <strong><?php echo $items['ItemName']; ?></strong>
                            <div class="product-description">
                                <?php echo $items['ItemDescription']; ?>
                            </div>
                            <div class="product-price">
                                <strong>&pound;<?php echo $items['ItemPrice']; ?></strong>
                            </div>
                            <form action="edit_item_screen.php" method="POST">
                                <button name="buttonclick" type="submit" class="add-to-cart">BUY</button>
                                <input type="hidden" value="<?php echo $items['ItemID']; ?>" name="productID">
                                <input type="hidden" value="<?php echo $items['ItemName']; ?>" name="productName">
                                <input type="hidden" value="<?php echo $items['ItemPrice']; ?>" name="productPrice">
                                <input type="hidden" value="<?php echo $items['ItemDescription']; ?>" name="productDesc">
                                <input type="hidden" value="<?php echo $items['ItemType']; ?>" name="productType">
                                <input type="hidden" value="<?php echo $items['ItemImage']; ?>" name="productImage">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header"><a id="sides">Sides</h2>
                <div class="options-row">
                    <?php foreach ($sidesproducts as $items) : ?>
                        <div class="product-card">
                            <img class="product-image" src="<?php echo $items['ItemImage']; ?>"></img>
                            <strong><?php echo $items['ItemName']; ?></strong>
                            <div class="product-description">
                                <?php echo $items['ItemDescription']; ?>
                            </div>
                            <div class="product-price">
                                <strong>&pound;<?php echo $items['ItemPrice']; ?></strong>
                            </div>
                            <form action="edit_item_screen.php" method="POST">
                                <button name="buttonclick" type="submit" class="add-to-cart">BUY</button>
                                <input type="hidden" value="<?php echo $items['ItemID']; ?>" name="productID">
                                <input type="hidden" value="<?php echo $items['ItemName']; ?>" name="productName">
                                <input type="hidden" value="<?php echo $items['ItemPrice']; ?>" name="productPrice">
                                <input type="hidden" value="<?php echo $items['ItemDescription']; ?>" name="productDesc">
                                <input type="hidden" value="<?php echo $items['ItemType']; ?>" name="productType">
                                <input type="hidden" value="<?php echo $items['ItemImage']; ?>" name="productImage">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header"><a id="drinks">Drinks</h2>
                <div class="options-row">
                    <?php foreach ($drinksproducts as $items) : ?>
                        <div class="product-card">
                            <img class="product-image" src="<?php echo $items['ItemImage']; ?>"></img>
                            <strong><?php echo $items['ItemName']; ?></strong>
                            <div class="product-description">
                                <?php echo $items['ItemDescription']; ?>
                            </div>
                            <div class="product-price">
                                <strong>&pound;<?php echo $items['ItemPrice']; ?></strong>
                            </div>
                            <form action="edit_item_screen.php" method="POST">
                                <button name="buttonclick" type="submit" class="add-to-cart">BUY</button>
                                <input type="hidden" value="<?php echo $items['ItemID']; ?>" name="productID">
                                <input type="hidden" value="<?php echo $items['ItemName']; ?>" name="productName">
                                <input type="hidden" value="<?php echo $items['ItemPrice']; ?>" name="productPrice">
                                <input type="hidden" value="<?php echo $items['ItemDescription']; ?>" name="productDesc">
                                <input type="hidden" value="<?php echo $items['ItemType']; ?>" name="productType">
                                <input type="hidden" value="<?php echo $items['ItemImage']; ?>" name="productImage">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="options-block">
                <h2 class="options-header"><a id="desserts">Desserts</h2>
                <div class="options-row">
                    <?php foreach ($dessertsproducts as $items) : ?>
                        <div class="product-card">
                            <img class="product-image" src="<?php echo $items['ItemImage']; ?>"></img>
                            <strong><?php echo $items['ItemName']; ?></strong>
                            <div class="product-description">
                                <?php echo $items['ItemDescription']; ?>
                            </div>
                            <div class="product-price">
                                <strong>&pound;<?php echo $items['ItemPrice']; ?></strong>
                            </div>
                            <form action="edit_item_screen.php" method="POST">
                                <button name="buttonclick" type="submit" class="add-to-cart">BUY</button>
                                <input type="hidden" value="<?php echo $items['ItemID']; ?>" name="productID">
                                <input type="hidden" value="<?php echo $items['ItemName']; ?>" name="productName">
                                <input type="hidden" value="<?php echo $items['ItemPrice']; ?>" name="productPrice">
                                <input type="hidden" value="<?php echo $items['ItemDescription']; ?>" name="productDesc">
                                <input type="hidden" value="<?php echo $items['ItemType']; ?>" name="productType">
                                <input type="hidden" value="<?php echo $items['ItemImage']; ?>" name="productImage">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>