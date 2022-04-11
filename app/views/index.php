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
            }
        ?>
    </main>
    <footer>
        <?php 
            require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>