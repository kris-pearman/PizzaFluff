
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

    <div class="page-content admin-page">

        <div class="content-container">
            <h2 class="account-title">Your Basket</h2>
            <?php
                if (isset($_SESSION['$ercode'])) 
                {
                echo "Error Occuring";
                unset($_SESSION['$ercode']);
                }

            if (isset($_SESSION['basket'])){
                foreach($_SESSION['basket'] as $items) :
                echo $items['ID'];
                echo $items['Name'];
                echo $items['Price'];
                endforeach;
            }
            else 
            {
                echo "Basket Empty";
            }


            ?>
                
        </div>
    <?php if (isset($_SESSION['basket'])){
        ?>
    <form action="controller\confirm_order.php" method="POST">
        <button name="buttonclick" type="submit" class="add-to-cart">BUY</button>
        <?php } ?>
    </form>
    </div>


    <?php include('includes/page-footer.php'); ?>

</body>

</html>