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

            <form class="admin-form">
                <div class="column">
                    <span class="input-block">
                        <label for="name">Username</label>
                        <input type="text" id="name" name="name">
                    </span>

                    <span class="input-block">
                        <label for="address-line-1">Password</label>
                        <input type="text" id="address-line-1" name="address-line-1">
                    </span>

                </div>
                
            </form>
            <div class="buttons-container">
                <button class="pill-button">Login</button>
                <button class="pill-button">Forgot Password</button>
            </div>
        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>