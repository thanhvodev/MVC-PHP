<div class="col-5 left-hidden">
    <button class="btnmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#hidden-navbar" aria-controls="hiddenNavbar">
        <i class="fad fa-bars"></i>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" id="hidden-navbar" aria-labelledby="hiddenNavbarLabel">
        <div class="offcanvas-header">
            <h5 id="hiddenNavbarLabel"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="headbody">
                <button type="button" class="active">
                    <i style="margin-right: 20px;" class="fad fa-bars"></i> MENU
                </button>

                <?php
                    if (isset($_SESSION['user_id'])) {
                        echo "
                        <button type='button'>
                            <a href='".URL_ROOT."/users/profile'>
                                <i style='margin-right: 20px;' class='far fa-user'></i> NGƯỜI DÙNG
                            </a>
                        </button>
                        ";
                    } else {
                        echo "
                        <button data-bs-toggle='modal' data-bs-target='#LoginModal' type='button'>
                            <i style='margin-right: 20px;' class='far fa-user'></i> ĐĂNG NHẬP
                        </button>
                        ";
                    }
                ?>
                
                
                
                
                
            </div>

            <div class="links" style="overflow: hidden">
                <a href=<?= URL_ROOT ?>>
                <button type="button">Trang chủ</button>
                </a>
                <a class="dropdown-toggle" href="#" role="button" id="productDropDown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                    <button type="button">
                        Sản phẩm
                    </button>
                </a>

                <ul class="dropdown-menu" aria-labelledby="productDropDown" id="contentproductDropDown">
                    <li class="dropdown-itembox"><a class="dropdown-item"
                        href="<?php echo URL_ROOT ?>/products/detail/food">Thực phẩm chức năng</a></li>
                    <li class="dropdown-itembox"><a class="dropdown-item"
                        href="<?php echo URL_ROOT ?>/products/detail/equipment">Dụng cụ tập luyện</a></li>
                </ul>


                <a href="<?php echo URL_ROOT . "/about/about"; ?>">
                <button type="button">
                    Thông tin
                </button>
                </a>
                <a href="<?php echo URL_ROOT . "/blogs"; ?>">
                <button type="button">
                    Sự kiện
                </button>
                </a>
                <a href="<?php echo URL_ROOT . "/blogs"; ?>">
                <button type="button">Blog</button>
                </a>
            </div>

            
            <?php 
                if(isset($_SESSION['user_id'])) {
                    echo "
                    <form action='".URL_ROOT."/users/logout' method='post'>
                        <button id='logoutbtn' type='submit' value='Đăng xuất'>
                            <AiOutlineLogout size={25} /> Đăng xuất
                        </button>
                    </form>
                    ";
                } else {
                    echo "";
                }
            ?>

        </div>
        <div class="offcanvas-footer">
            <button id="offtabs" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                Thoát
            </button>
        </div>
    </div>
</div>