<?php session_start();
    if (isset($_SESSION['Customer'])){
	    $username = $_SESSION['Username'];
    }
    else {
        $username = "blank";
    }
    
?>


<!doctype html>
<html>
<link rel="stylesheet" href="css/navigation.css">

<nav class="main-navigation">
    <a href="deals.php" class="navigation-option">Deals</a>
    <a href="menu.php" class="navigation-option">Menu</a>
    <a href="account.php" class="navigation-option">Account</a>
    <a href="Login.php" class="navigation-option">Login</a>
    <a href="Basket.php"><img class="trolley-icon" src="/PizzaFluff/images/cart.svg"></img></a>
    
    <?php 
        if (isset($_SESSION['Access'] )){
            if ($_SESSION['Access'] == 2    ){
                echo '<a href="admin-landing.php" class="navigation-option">Admin</a>' ;
            }
        }
    ?>
    <?php echo $username; ?>
    
</nav>

</html>