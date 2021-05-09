
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Fluff - Login</title>
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
            <h2 class="account-title">Admin Landing</h2>
           
                
        </div>
    
    
        <form action="menu-admin.php">
            <button name="buttonclick" class="add-to-cart" >Edit Menu</button>    
        </form>
        <form action="add-product.php">
            <button name="buttonclick" class="add-to-cart" >Add Product</button>    
        </form>
        
    </div>


    <?php include('includes/page-footer.php'); ?>

</body>

</html>