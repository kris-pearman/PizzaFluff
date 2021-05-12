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

    <div class="page-content admin-page">

        <div class="content-container">
            <h2 class="account-title">My Account Details</h2>

            <form class="admin-form" action="controller\admin\register.php" method="POST">
                <div class="column">
                    <span class="input-block">
                        <label for="name">First Name:</label>
                        <input type="text" id="name" name="name">
                    </span>

                    <span class="input-block">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname">
                    </span>

                    <span class="input-block">
                        <label for="address-line-1">Address Line 1:</label>
                        <input type="text" id="address-line-1" name="address-line-1">
                    </span>

                    <span class="input-block">
                        <label for="address-line-2">Address Line 2:</label>
                        <input type="text" id="address-line-1" name="address-line-2">
                    </span>

                    <span class="input-block">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </span>

                </div>
                <div class="column">
                    <span class="input-block">
                        <label for="postcode">Postcode:</label>
                        <input type="text" id="postcode" name="postcode">
                    </span>

                    <span class="input-block">
                        <label for="phone-number">Phone Number:</label>
                        <input type="tel" id="phone-number" name="phone-number">
                    </span>

                    <span class="input-block">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email">
                    </span>

                    <span class="input-block">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                    </span>
                </div>
                <div class="buttons-container">
                    <button type="submit" class="pill-button" name="update">Update</button>
                    <button type="submit" class="pill-button" name="register">Register</button>
                    <button type="submit" class="pill-button" name="delete">Delete Account</button>
                </div>
            </form action="controller\admin\update_accounts.php" >
            

        </div>
    </div>

    <?php include('includes/page-footer.php'); ?>

</body>

</html>