<div class="containerheader">
    <div class="header-root">
        <div class="header">
            <div class="row">
                <div class="col-5 left">
                    <div class="list-item">
                        <div class="item active">
                            <a href=<?= URL_ROOT ?>>Trang chủ</a>
                        </div>
                        <div class="item">
                            <a class="dropdown-toggle" href="#" role="button" id="productDropDown"
                                data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>

                            <ul class="dropdown-menu" aria-labelledby="productDropDown" id="contentproductDropDown">
                                <li class="dropdown-itembox"><a class="dropdown-item"
                                        href="<?php echo URL_ROOT ?>/products/detail/food">Thực phẩm chức năng</a></li>
                                <li class="dropdown-itembox"><a class="dropdown-item"
                                        href="<?php echo URL_ROOT ?>/products/detail/equipment">Dụng cụ tập luyện</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <a href="<?php echo URL_ROOT . "/about/about"; ?>">Thông tin</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo URL_ROOT . "/events"; ?>">Sự kiện</a>
                        </div>
                        <div class="item">
                            <a href="<?php echo URL_ROOT . "/blogs"; ?>">Blog</a>
                        </div>
                    </div>
                </div>

                <?php
                require APP_ROOT . "/views/components/responsiveheader.php";
                ?>

                <div class="col-2 mid">
                    <a style="cursor: pointer;" href="<?php echo URL_ROOT; ?>">
                        <div class="box-logo">GYMNASIUM</div>
                    </a>
                    <!-- <a style="cursor: pointer;" href="">
                        <div class="hiddenbox">GYM</div>
                    </a> -->
                </div>

                <div class="col-5 right">
                    <div class="search">
                        <button type="button" class="normal-circle-btn" data-bs-toggle="offcanvas"
                            data-bs-target="#hidden-search" aria-controls="offcanvasTop">
                            <i class="fas fa-search"></i>
                        </button>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="hidden-search" data-bs-scroll="true"
                            aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasTopLabel"></h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="searchbody"
                                    style="display: flex; flex-direction:column; align-items: center">
                                    <div class="boxsearch">
                                        <h3>
                                            Tìm kiếm mọi thứ ở đây ...
                                        </h3>
                                        <div class="formbox">
                                            <input type="text" name="search" id="searchinput"
                                                placeholder="Tìm kiếm" autoComplete="off" />
                                            <button type="button" class="normal-circle-btn">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="boxsearch">
                                        <table id="search-result" style="margin-top: 20px; background-color: rgb(250, 250, 250); width: 100%; padding: 16px; box-sizing: border-box;"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (!isset($_SESSION['user_id'])) {
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

<?php
function isContainCart($Id)
{
    if (!isset($_SESSION['cart'])) {
        return false;
    }
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i]['Id'] == $Id) {
            return true;
        }
    }
    return false;
}
?>


<script>
$(document).ready(function() {
    $('#searchinput').keyup(function() {
        var target = $('#searchinput').val()
        $.post('<?php echo URL_ROOT; ?>/public/ajax/searching.php', {
            data: target
        }, function(data) {
            $('#search-result').html(data)
        })
    })
})
</script>