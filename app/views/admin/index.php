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
        } else if ($data['page'] == 'delete_user') {
            require_once APP_ROOT . '/views/admin/message.php';
        } else if ($data['page'] == 'ban_user') {
            require_once APP_ROOT . '/views/admin/message.php';
        } else if ($data['page'] == 'unban_user') {
            require_once APP_ROOT . '/views/admin/message.php';
        }

        ?>
    </main>
    <footer>
        <?php
        require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
</body>