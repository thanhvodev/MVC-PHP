<?php
    require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>

<body>
    <div class="rootCart">
        <!-- <div class="headCart">
            <div class="container">
                <a href="<?php echo URL_ROOT ?>/">
                    <button type="button">
                        Home
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">Your Shopping Cart</p>
            </div>
        </div> -->
        <div class="product-detail">
            <div class="headProduct d-flex align-items-center">
                <div class="head-container">
                    <a href="<?php echo URL_ROOT ?>/">
                        <button type="button">
                            Trang chủ
                        </button>
                    </a>
                    <p>
                        <i class="fas fa-angle-right"></i>
                    </p>
                    <p class="title">
                        Giỏ hàng của tôi
                    </p>
                </div>
            </div>
        </div>
        <div class="mainCart">
            <div class="theadCart">
                <div class="thead1 theaditem">PRODUCT NAME</div>
                <div class="thead2 theaditem">PRICE</div>
                <div class="thead3 theaditem">QUANTITY</div>
                <div class="thead4 theaditem">TOTAL</div>
                <div class="thead5 theaditem"></div>
            </div>

            <div class="bodyCart">

                <!--  -->
                <?php

                if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
                    echo "";
                } else {
                    $i = 0;
                    while ($i < count($_SESSION['cart'])) {
                        echo "
                        <div class='rootCartItem02'>
                            <div class='cartItem800'>
                                <div class='thead1 theaditem'>
                                    <img src='".$_SESSION['cart'][$i]['Image']."' />
                                    <h6>".$_SESSION['cart'][$i]['Name']."</h6>
                                </div>
                                <div class='thead2 theaditem'>". currency_format($_SESSION['cart'][$i]['Price']) ."</div>
                                <div class='thead3 theaditem'>
                                    <div class='boxQTY'>
                                        <div class='boxQTYitem'>".$_SESSION['cart'][$i]['QTY']."</div>
                                        <div class='boxQTYitem'>
                                            <div>
                                                <form role='form' method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                                    <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                                    <button type='submit' name='addToCartById'>
                                                        <i class='fas fa-angle-up'></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                                <form role='form' method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                                    <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                                    <button type='submit' name='reduceToCartById'>
                                                        <i class='fas fa-angle-down'></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='thead4 theaditem'>".currency_format($_SESSION['cart'][$i]['QTY'] * $_SESSION['cart'][$i]['Price'])."</div>
                                <div class='thead5 theaditem'>
                                    <form method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                        <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                        <button style='color: red;' type='submit' name='deleteFromCart'>
                                            <i class='fas fa-trash-alt'></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>

                            <div class='cartItem400'>
                                <div>
                                    <div class='left'>
                                        <h5>".$_SESSION['cart'][$i]['Name']."</h5>
                                    </div>
                                    <div class='right'>
                                        <img src='".$_SESSION['cart'][$i]['Image']."' />
                                    </div>
                                </div>
                                <div>
                                    <div class='left'>
                                        <h6></h6>
                                    </div>
                                    <div class='right'></div>
                                </div>
                                <div>
                                    <div class='left'>
                                        <p>Product Price</p>
                                    </div>
                                    <div class='right'>
                                        <p>".currency_format($_SESSION['cart'][$i]['Price'])."</p>
                                    </div>
                                </div>
                                <div>
                                    <div class='left'>
                                        <h6>Quantity</h6>
                                    </div>
                                    <div class='right'>
                                        <div class='boxQTY'>
                                            <div class='boxQTYitem'>".$_SESSION['cart'][$i]['QTY']."</div>
                                            <div class='boxQTYitem'>
                                                <div>
                                                    <form role='form' method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                                        <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                                        <button type='submit' name='addToCartById'>
                                                            <i class='fas fa-angle-up'></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form role='form' method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                                        <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                                        <button type='submit' name='reduceToCartById'>
                                                            <i class='fas fa-angle-down'></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class='left'>
                                        <p><span>Sub Total</span></p>
                                    </div>
                                    <div class='right'>
                                        <p><span>".currency_format($_SESSION['cart'][$i]['QTY'] * $_SESSION['cart'][$i]['Price'])."</span></p>
                                    </div>
                                </div>
                                <div>
                                    <div class='left'>

                                    </div>
                                    <div class='right'>
                                        <form method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                            <input type='hidden' name='Id' value='".$_SESSION['cart'][$i]['Id']."'>
                                            <button class='deleteBtn' style='color: red;' type='submit' name='deleteFromCart'>
                                                <i class='fas fa-trash-alt'></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        $i++;
                    }
                }

                ?>
                <!--  -->
            </div>
        </div>

        <div class="footerCart">
            <!-- <button type="button">
                UPDATE CART
            </button> -->
            <a href="<?php echo URL_ROOT ?>/products/detail/food">
                <button class="linkbutton" type="button">
                    CONTINUE SHOPPING
                </button>
            </a>
        </div>

        <div class="toCheckout">
            <div class="checkout">
                <h3>CART TOTALS</h3>
                <hr />
                <div>
                    <p>TOTAL</p>
                    <span>
                        <?php
                            echo currency_format(getTotalCart());
                        ?>
                    </span>
                </div>
                <a href="<?php echo URL_ROOT ?>/checkout/checkout">
                    <button type="button">
                        PROCEED TO CHECKOUT
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>