<?php
require APP_ROOT . '/views/inc/head.php';
?>

<body>
    <div class="admin-page d-flex">
        <div class="sidebar">
            <div class="box-logo"><a style="cursor: pointer;" href="<?php echo URL_ROOT ?>/admin/users">GYMNASIUM</a></div>
            <div class="hiddenbox"><a style="cursor: pointer;" href="<?php echo URL_ROOT ?>/admin/users">GYM</a></div>
            <div class="toggle">
                <i class="bi bi-list"></i>
            </div>
            <ul>
                <li class="list ">
                    <a href="<?php echo URL_ROOT ?>/admin/users/1">
                        <i class="bi bi-people"></i>
                        <span class="title">Quản lý thành viên</span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo URL_ROOT ?>/admin/products/all">
                        <i class="bi bi-handbag"></i>
                        <span class="title">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo URL_ROOT ?>/admin/blogevent">
                        <i class="bi bi-calendar-event"></i>
                        <span class="title">Quản lý blog/sự kiện</span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo URL_ROOT ?>/admin/banner">
                        <i class="bi bi-info-circle"></i>
                        <span class="title">Quản lý banner</span>
                    </a>
                </li>
                <form action="<?php echo URL_ROOT; ?>/users/logout" method='post'>
                        <button style="border-radius: 20px; width: 200px; color: #ff871d; margin: 20px 20px;" id='logoutbtn' type='submit' value='Đăng xuất'>
                            <span class="title">Đăng xuất</span>
                        </button>
                    </form>
            </ul>
        </div>
        <div class="content">
            <div class="page" style="display: none"><?php echo $data['page'];?></div>
            <?php
            if (isset($data['feedback'])){
                require_once APP_ROOT . '/views/admin/feedback.php';
            }
            else if (isset($data['name']) && strlen($data['name']) > 0){
                require_once APP_ROOT . '/views/admin/productdetail.php';
            }
            else if ($data['page'] == 'users') {
                require_once APP_ROOT . '/views/admin/users.php';
            } else if ($data['page'] == 'delete_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'ban_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'unban_user') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'message') {
                require_once APP_ROOT . '/views/admin/message.php';
            } else if ($data['page'] == 'products') {
                require_once APP_ROOT . '/views/admin/products.php';
            } else if ($data['page'] == 'blogevent') {
                require_once APP_ROOT . '/views/admin/blogevent.php';
            } else if ($data['page'] == "banner") {
                require_once APP_ROOT . '/views/admin/banner.php';
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
        let page = document.querySelector('.page').innerHTML;
        if (page == "users"){
            index = 0;
        }
        else if (page == "products"){
            index = 1;
        }
        else if (page == "blogevent"){
            index = 2;
        }
        else if (page == "banner"){
            index = 3;
        }
        let j = 0;
        while (j < list.length){
            list[j++].className = 'list';
        }
        list[index].className = 'list active';
    </script>
</body>
