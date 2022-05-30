<?php
require APP_ROOT . '/views/inc/head.php';
?>

<body>
    <div class="admin-page d-flex">
        <div class="sidebar">
            <div class="box-logo"><a style="cursor: pointer;" href="<?php echo URL_ROOT; ?>">GYMNASIUM</a></div>
            <div class="hiddenbox"><a style="cursor: pointer;" href="<?php echo URL_ROOT; ?>">GYM</a></div>
            <div class="toggle">
                <i class="bi bi-list"></i>
            </div>
            <ul>
                <li class="list active ">
                    <a href="#">
                        <i class="bi bi-people"></i>
                        <span class="title">Quản lý thành viên</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <i class="bi bi-handbag"></i>
                        <span class="title">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <i class="bi bi-calendar-event"></i>
                        <span class="title">Quản lý blog/sự kiện</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <i class="bi bi-info-circle"></i>
                        <span class="title">Quản lý thông tin</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <i class="bi bi-box-arrow-left" id="log_out"></i>
                        <span class="title">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <?php
            if ($data['page'] == 'users') {
                require_once APP_ROOT . '/views/admin/users.php';
            } else if ($data['page'] == 'delete_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'ban_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'unban_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'message') {
                require_once APP_ROOT . '/views/admin/message.php';
            }
            ?>
        </div>
    </div>
    <footer>
        <?php
            // require APP_ROOT . '/views/inc/footer.php';
        ?>
    </footer>
    <script>
        let menuToggle = document.querySelector('.toggle');
        let sidebar = document.querySelector('.sidebar');
        let logo = document.querySelector('.box-logo');
        let smlogo = document.querySelector('.hiddenbox');
        let content = document.querySelector('.content');
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active');
            sidebar.classList.toggle('active');
            logo.classList.toggle('active');
            smlogo.classList.toggle('active');
            content.classList.toggle('active');
        }
        let list = document.querySelectorAll('.list');
        for (let i = 0; i < list.length; i++){
            list[i].onclick = function(){
                let j = 0;
                while (j < list.length){
                    list[j++].className = 'list';
                }
                list[i].className = 'list active';
            }
        }
    </script>
</body>
