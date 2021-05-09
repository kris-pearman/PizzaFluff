<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Fluff - Account</title>
    <meta name="charset" content="UTF-8">
    <meta name="description" content="Online pizza restaurant from the best pizza chef in town">
    <meta name="keywords" content="Pizza,Fluff,Restaurant,Delivery,Takeaway,Nottingham">
    <link rel="stylesheet" href="css/pizza-fluff-base.css">
    <link rel="stylesheet" href="css/account.css">
</head>

<body>
<?php include('includes/page-header.php'); ?>
    <?php if ($_SESSION['Access'] != 2 ){
    header('Location:index.php');
    }
    ?>

    <div class="page-content admin-page">

        <div class="content-container">
            <h2 class="account-title">Edit Item</h2>

            <form class="admin-form" action="controller\admin\insert_product.php" method="POST">
                <div class="column">
                    <span class="input-block">
                        <label for="name">Product Name:</label>
                        <input type="text" id="product-name" name="product-name" value=>
                    </span>

                    <span class="input-block">
                        <label for="price">Product Price:</label>
                        <input type="text" id="product-price" name="product-price" value=>
                    </span>

                </div>
                <div class="column">
                    <span class="input-block">
                        <label for="type">Product Type:</label>
                        <input type="text" id="type" name="type" value=>
                    </span>

                    <span class="input-block">
                        <label for="description">Product Description:</label>
                        <input type="text" id="description" name="description" value=>
                    </span>

                    <span class="input-block">
                        <label for="email">Product Image</label>
                        <input type="text" id="image" name="image" value=>
                    </span>
                </div>
            
            <div class="buttons-container">
                <button type="submit" class="pill-button" name="insert">Insert</button>
            </div>
            </form>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>