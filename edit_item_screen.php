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
    <?php include('includes/page-header.php'); 
        $xx = $_POST['productDesc'];?>
    <?php if ($_SESSION['Access'] != 2 ){
    header('Location:index.php');

    }
    ?>

    <div class="page-content admin-page">

        <div class="content-container">
            <h2 class="account-title">Edit Item</h2>

            <form class="admin-form" action="controller\admin\run_update.php" method="POST">
                <div class="column">
                    <span class="input-block">
                        <label for="id">ID:</label>
                        <input type="text" id="id" name="id" value=<?php echo $_POST['productID'];?>>
                    </span>

                    <span class="input-block">
                        <label for="name">Product Name:</label>
                        <input type="text" id="product-name" name="product-name" value=<?php echo $_POST['productName'];?>>
                    </span>

                    <span class="input-block">
                        <label for="price">Product Price:</label>
                        <input type="text" id="product-price" name="product-price" value=<?php echo $_POST['productPrice'];?>>
                    </span>

                </div>
                <div class="column">
                    <span class="input-block">
                        <label for="type">Product Type:</label>
                        <input type="text" id="type" name="type" value=<?php echo $_POST['productType'];?>>
                    </span>

                    <span class="input-block">
                        <label for="description">Product Description:</label>
                        <input type="text" id="description" name="description" value=<?php echo "$xx"?>>
                    </span>

                    <span class="input-block">
                        <label for="email">Product Image</label>
                        <input type="text" id="image" name="image" value=<?php echo $_POST['productImage'];?>>
                    </span>
                </div>
            
            <div class="buttons-container">
                <button type="submit" class="pill-button" name="update">Update</button>
                <button type="submit" class="pill-button" name="delete">Delete Account</button>
            </div>
            </form>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>