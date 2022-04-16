<?php
	require APP_ROOT . '/views/inc/head.php';
?>

<body>
    <?php
        require APP_ROOT . '/views/inc/nav.php';
    ?>

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
            }elseif ($data['page'] == 'orders') {
                require_once APP_ROOT . '/views/users/orders.php';
            }
        ?>
    </main>
    <footer>
        <?php 
            require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>