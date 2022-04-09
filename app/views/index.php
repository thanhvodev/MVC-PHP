<?php
	require APP_ROOT . '/views/inc/head.php';
?>

<body>
    <?php
        require APP_ROOT . '/views/inc/nav.php';
    ?>

    <!-- <header>
        <h1>Welcome to <?= SITE_NAME ?> !</h1>
        <h1>Go to 'app/views/index.php' to edit your site</h1>
        <h1>Generate you files on https://mvc-generator.herokuapp.com/</h1>
    </header> -->

    <main>
        <!-- Carousel -->
        <?php
            if ($data['page'] == 'homepage') {
                require_once APP_ROOT . '/views/mainaction/homepage.php';
            }
        ?>
    </main>
    <a href="./users/register">Register</a>
    <a href="./products/detail/1">Product Detail</a>
    <!-- require APP_ROOT . '/views/inc/footer.php'; -->
    <footer>
        <?php 
            require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>