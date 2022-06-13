<?php
    require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';

    function getTotalCart() {
        $total = 0;
        if (isset($_SESSION['cart'])) {
            $res = $_SESSION['cart'];
            for ($i = 0; $i < count($res); $i++) {
                $total += $res[$i]['Price'] * $res[$i]['QTY'];
            }
        }
        return $total;
    }

?>

<div class="usergroup">
    <a href=<?php if (array_key_exists("user_id", $_SESSION)) echo  URL_ROOT . "/users/profile";
            else echo  URL_ROOT . "/users/login";  ?>>
        <button type="button" class="hidden-btn normal-circle-btn">
            <i class="far fa-user"></i>
        </button>
    </a>
    <button type="button" class="normal-circle-btn" data-bs-toggle="offcanvas" data-bs-target="#cartRight" aria-controls="offcanvasRight">
        <i class="fas fa-shopping-cart"></i>
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="cartRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <p></p>
            <h5 id="offcanvasRightLabel">
                Giỏ hàng
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <?php
        if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
            echo "
                <div class='offcanvas-body'>
                    <div class='emptycart'>
                        <div class='emptycartbox'>
                            <p>Giỏ hàng của bạn đang trống</p>
                            <div class='backtoshop'>
                                <a href='" . URL_ROOT . "'>Mua hàng</a>
                            </div>    
                        </div>
                    </div>
                </div>
                ";
        } else {
            echo "
                    <div class='offcanvas-body'>";
            if (isset($_SESSION['cart'])) {
                $res = $_SESSION['cart'];
                $index = 0;
                while ($index < count($res)) {
                    echo "
                                        <div class='rootCartItem01'>
                                            <div class='content'>
                                                <div class='imgItem'>
                                                    <img src='" . $res[$index]['Image'] . "' />
                                                </div>
                                                <div class='inforItem'>
                                                    <h3>" . $res[$index]['Name'] . "</h3>
                                                    <h4>QTY : " . $res[$index]['QTY'] . "</h4>
                                                    <p>" . $res[$index]['Price'] * $res[$index]['QTY'] . "</p>
                                                </div>
                                                <div class='delete'>
                                                    <form method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                                        <input type='hidden' name='Id' value='".$res[$index]['Id']."'>
                                                        <button type='submit' name='deleteFromCart'>
                                                            <i class='far fa-trash-alt'></i>
                                                        </button>
                                                    </form>

                                                    <iframe name='deleteFromCart' style='display:none;'></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                    $index++;
                }
            }
            echo "
                    </div>
                    <div class='offcanvas-footer'>
                        <div class='totalcart'>
                            <h3>Tổng:</h3>
                            <p>" .currency_format(getTotalCart()). "</p>
                        </div>
                        <div class='checkoutcart'>
                            <div class='checkoutitem view'>
                                <a href='" . URL_ROOT . "/cart/shoppingcart'>
                                    Xem giỏ hàng
                                </a>
                            </div>
                            <div class='checkoutitem'>
                                <a href='".URL_ROOT."/checkout/checkout'>
                                    Thanh toán
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        ?>
    </div>
    <form action="<?php echo URL_ROOT; ?>/users/logout" method="post">
        <button type="submit" class="hidden-btn normal-circle-btn" value="Đăng xuất">
            <i style="font-size: 20px;" class="fas fa-sign-out"></i>
        </button>
    </form>
</div>