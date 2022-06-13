<?php
require APP_ROOT . '/views/inc/head.php';
?>

<body>


    <div>
        <?php
        require APP_ROOT . '/views/inc/header.php';
        ?>
    </div>

    <main>
        <!-- Carousel -->
        <?php
        if ($data['page'] == 'homepage') {
            require_once APP_ROOT . '/views/mainaction/homepage.php';
        } elseif ($data['page'] == 'login') {
            require_once APP_ROOT . '/views/users/login.php';
        } elseif ($data['page'] == 'register') {
            require_once APP_ROOT . '/views/users/register.php';
        } elseif ($data['page'] == 'profile') {
            require_once APP_ROOT . '/views/users/profile.php';
        } elseif ($data['page'] == 'shoppingcart') {
            require_once APP_ROOT . '/views/cart/shoppingcart.php';
        } elseif ($data['page'] == 'orders') {
            require_once APP_ROOT . '/views/users/orders.php';
        } elseif ($data['page'] == 'allproducts') {
            require_once APP_ROOT . '/views/products/All/main.php';
        } elseif ($data['page'] == 'productdetail') {
            require_once APP_ROOT . '/views/products/Detail/main.php';
        } elseif ($data['page'] == 'checkout') {
            require_once APP_ROOT . '/views/checkout/checkout.php';
        } elseif ($data['page'] == 'checkoutsuccess') {
            require_once APP_ROOT . '/views/checkout/checkoutsuccess.php';
        }  elseif ($data['page'] == 'message') {
            require_once APP_ROOT . '/views/users/message.php';
        } elseif ($data['page'] == 'about') {
            require_once APP_ROOT . '/views/about/about.php';
        }

        ?>
    </main>
    <footer>
        <?php
        require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>