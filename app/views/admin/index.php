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
        if ($data['page'] == 'users') {
            require_once APP_ROOT . '/views/admin/users.php';
        }

        ?>
    </main>
    <footer>
        <?php
        require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>