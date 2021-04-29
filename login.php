<?php


?>

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
            <h2 class="account-title">Login</h2>

            <form  name="login" method="post" action="controller\login_action.php" class="admin-form">
                <div class="column">
                    <span class="input-block login">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </span>

                    <span class="input-block login">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </span>
                </div>
                
            
            <div class="buttons-container">
                <input type="submit" class="pill-button" value="Login">
                <button class="pill-button">Forgot Password</button>
            </div>
            </form>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>