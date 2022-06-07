<?php
require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>

<body>
    <div class="rootCheckout">
        <div class="headCheckout">
            <div class="container">
                <a href="<?php echo URL_ROOT ?>/">
                    <button type="button">
                        Home
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <a href="<?php echo URL_ROOT ?>/cart/shoppingcart">
                    <button type="button">
                        Cart
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">Payment</p>
            </div>
        </div>

        <div class="container">
            <div class="address">
                <div class="headAddress">
                    <div style="width: 50%; display:flex; align-items: center; color: #ff871d; font-size: 20px; font-weight: 600;">
                        <i class="fas fa-map-marker-alt"></i>
                        <p style="margin: 0px 10px;">Received Address</p>
                    </div>

                    <div style="width: 50%; display:flex; align-items: center; justify-content: flex-end;">
                        <button data-bs-toggle="modal" data-bs-target="#addaddress">
                            <i class="fas fa-plus"></i>
                            <p style="margin: 0px 10px;">
                                <?php
                                if ($data['address']['issetaddress'] == False) {
                                    echo "Add New Address";
                                } else {
                                    echo "Change Address";
                                }
                                ?>
                            </p>
                        </button>
                    </div>
                </div>
                <div class="contentAddress">
                    <?php
                    if ($data['address']['issetaddress'] == False) {
                        echo "
                                <div class='noaddress'>
                                    <h6>
                                        Please add shipping address!
                                    </h6>
                                </div>
                            ";
                    } else {
                        echo "
                                <div class='addressdetail'>
                                    <div class='namephone'>
                                        <h5>" . $data['address']['fullname'] . "</h5>
                                        <h6>" . $data['address']['phone'] . "</h6>
                                    </div>
                                    <div style='width: 75%; height: 57px;'>
                                        <p>" . $data['address']['toolsaddress'] . ", " . $data['address']['commune'] . ", " . $data['address']['district'] . ", " . $data['address']['province'] . "</p>
                                    </div>
                                </div>
                            ";
                    }
                    ?>
                </div>
            </div>

            <div class="cart">
                <div class="leftcart">
                    <div class="voucher">
                        <div>
                            <i class="fas fa-ticket-alt"></i>
                            <p>Shop Voucher</p>
                        </div>
                        <div>
                            <input class="form-control" type="text" placeholder="Enter voucher code">
                            <button type="button">
                                Apply
                            </button>
                        </div>
                    </div>
                    <div class="thanhtoan">
                        <div>
                            <i class="fas fa-credit-card"></i>
                            <p>Payment methods</p>
                        </div>

                        <div>
                            <h6>
                                Payment on delivery
                            </h6>
                        </div>
                    </div>

                    <div class="confirm">
                        <div>
                            <!-- <i class="fas fa-credit-card"></i> -->
                            <h5>Checkout</h5>
                        </div>
                        <div>
                            <h6>commodity money</h6>
                            <p>
                                <?php
                                echo currency_format(getTotalCart());
                                ?>
                            </p>
                        </div>

                        <div>
                            <h6>Transport fee</h6>
                            <p>
                                <?php
                                echo currency_format(45000);
                                ?>
                            </p>
                        </div>
                        <hr />
                        <div>
                            <h6>Total Payment</h6>
                            <p>
                                <?php
                                echo currency_format(getTotalCart() + 45000);
                                ?>
                            </p>
                        </div>

                        <div>
                            <form role="form" method="post" action="<?php echo URL_ROOT; ?>/checkout/checkout">
                                <button type="submit" name="createOrderBill">
                                    Order Confirmation
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rightcart">
                    <div class="headCart">
                        <div class="thead1 theaditem">PRODUCT NAME</div>
                        <div class="thead2 theaditem">PRICE</div>
                        <div class="thead3 theaditem">QUANTITY</div>
                        <div class="thead4 theaditem">TOTAL</div>
                    </div>
                    <div class="bodyCart">
                        <?php

                        if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
                            echo "";
                        } else {
                            $i = 0;
                            while ($i < count($_SESSION['cart'])) {
                                echo "
                                    <div class='cartItem'>
                                        <div class='thead1 theaditem'>
                                            <img src='" . $_SESSION['cart'][$i]['Image'] . "' />
                                            <h6>" . $_SESSION['cart'][$i]['Name'] . "</h6>
                                        </div>
                                        <div class='thead2 theaditem'>" . currency_format($_SESSION['cart'][$i]['Price']) . "</div>
                                        <div class='thead3 theaditem'>
                                            " . $_SESSION['cart'][$i]['QTY'] . "
                                        </div>
                                        <div class='thead4 theaditem'>" . currency_format($_SESSION['cart'][$i]['QTY'] * $_SESSION['cart'][$i]['Price']) . "</div>
                                    </div>
                                ";
                                $i++;
                            }
                        }

                        ?>
                    </div>

                    <div class="footercart">
                        <h3>CART TOTALS</h3>
                        <div>
                            <p>TOTAL</p>
                            <span>
                                <?php
                                echo currency_format(getTotalCart());
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="addaddress" tabindex="-1" aria-labelledby="addaddresslable" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="padding:  20px; margin-top: 150px;">
                    <div class="modal-body addadr">
                        <h6>New address</h6>
                        <form role="form" method="post" action="<?php echo URL_ROOT; ?>/checkout/checkout">
                            <div class="wi50">
                                <input required class="form-control" type="text" name="fullname" placeholder="Full name">
                                <input required class="form-control" type="text" name="phone" placeholder="Your phone number">
                            </div>
                            <div class="wi30">
                                <input required class="form-control" type="text" name="province" placeholder="Province">
                                <input required class="form-control" type="text" name="district" placeholder="District">
                                <input required class="form-control" type="text" name="commune" placeholder="Commune">
                            </div>
                            <div>
                                <input required class="form-control" type="text" name="toolsaddress" placeholder="Tools Address">
                            </div>
                            <div class="btngroup">
                                <button data-bs-dismiss="modal" class="btninfo" type="button">Cancel</button>
                                <button data-bs-dismiss="modal" class="btnsuccess" type="submit" name="addaddress">Execute</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>