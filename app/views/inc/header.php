<div class="containerheader">
    <div class="header-root">
        <div class="header">
            <div class="row">
                <div class="col-5 left">
                    <div class="list-item">
                        <div class="item active">
                            <a href=<?= URL_ROOT ?>>Home</a>
                        </div>
                        <div class="item">
                            <a class="dropdown-toggle" href="#" role="button" id="productDropDown" data-bs-toggle="dropdown" aria-expanded="false">Products</a>

                            <ul class="dropdown-menu" aria-labelledby="productDropDown" id="contentproductDropDown">
                                <li class="dropdown-itembox"><a class="dropdown-item" href="<?php echo URL_ROOT ?>/products/detail/food">Foods</a></li>
                                <li class="dropdown-itembox"><a class="dropdown-item" href="<?php echo URL_ROOT ?>/products/detail/equipment">Equipments</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <a href="/">About Us</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo URL_ROOT . "/blogs";?>">Event</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo URL_ROOT . "/blogs";?>">Blog</a>
                        </div>
                    </div>
                </div>

                <?php
                require APP_ROOT . "/views/components/responsiveheader.php";
                ?>

                <div class="col-2 mid">
                    <a style="cursor: pointer;" href="<?php echo URL_ROOT; ?>">
                        <div class="box-logo">GYMASIUM</div>
                    </a>
                    <a style="cursor: pointer;" href="<?php echo URL_ROOT; ?>">
                        <div class="hiddenbox">GYM</div>
                    </a>
                </div>

                <div class="col-5 right">
                    <div class="search">
                        <button type="button" class="normal-circle-btn" data-bs-toggle="offcanvas" data-bs-target="#hidden-search" aria-controls="offcanvasTop">
                            <i class="fas fa-search"></i>
                        </button>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="hidden-search" data-bs-scroll="true" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasTopLabel"></h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="searchbody">
                                    <div class="boxsearch">
                                        <h3>
                                            Start typing and hit Enter
                                        </h3>
                                        <div class="formbox">
                                            <input type="text" name="search" placeholder="Search anything" autoComplete="off" />
                                            <button type="button" class="normal-circle-btn">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        if(!isset($_SESSION['user_id'])) {
                            echo "
                                <div class='usergroup'>
                                    <button data-bs-toggle='modal' data-bs-target='#LoginModal' type='button' class='hidden-btn normal-circle-btn'>
                                        <i style='font-size: 20px;' class='fas fa-sign-in'></i>
                                    </button>
                                </div>
                            ";
                        } else {
                                require APP_ROOT . '/views/components/userheader.php';    
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <?php
        require APP_ROOT . '/views/components/signin.php';
        require APP_ROOT . '/views/components/signup.php';
        require APP_ROOT . '/views/components/forgot.php';
    ?>

</div>