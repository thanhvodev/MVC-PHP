<?php
require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>

<body>
    <div class="rootCheckout">
        <!-- <div class="headCheckout d-flex align-items-center">
            <div class="container">
                <a href="/">
                    <button type="button">
                        Trang chủ
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <a href="?php echo URL_ROOT ?>/cart/shoppingcart">
                    <button type="button">
                        Giỏ hàng
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">Thanh toán</p>
            </div>
        </div> -->

        <div class="container">
            <div class="address">
                <div class="headAddress">
                    <div style="width: 50%; display:flex; align-items: center; color: #ff871d; font-size: 20px; font-weight: 600;">
                        <i class="fas fa-map-marker-alt"></i>
                        <p style="margin: 0px 10px;">Địa chỉ nhận hàng</p>
                    </div>

                    <div style="width: 50%; display:flex; align-items: center; justify-content: flex-end;">
                        <button data-bs-toggle="modal" data-bs-target="#addaddress">
                            <i class="fas fa-plus"></i>
                            <p style="margin: 0px 10px;">
                                <?php
                                if ($data['address']['issetaddress'] == False) {
                                    echo "Thêm địa chỉ mới";
                                } else {
                                    echo "Thay đổi địa chỉ";
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
                                        Vui lòng thêm địa chỉ nhận hàng
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
                                        <p>" . $data['address']['address']."</p>
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
                            <input class="form-control" type="text" placeholder="Nhập mã voucher">
                            <button type="button">
                                Áp dụng
                            </button>
                        </div>
                    </div>
                    <div class="thanhtoan">
                        <div>
                            <i class="fas fa-credit-card"></i>
                            <p>Phương thức thanh toán</p>
                        </div>

                        <div>
                            <h6>
                                Thanh toán khi nhận hàng
                            </h6>
                        </div>
                    </div>

                    <div class="confirm">
                        <div>
                            <!-- <i class="fas fa-credit-card"></i> -->
                            <h5>Thanh toán</h5>
                        </div>
                        <div>
                            <h6>Tiền hàng</h6>
                            <p>
                                <?php
                                echo currency_format(getTotalCart());
                                ?>
                            </p>
                        </div>

                        <div>
                            <h6>Phí vận chuyển</h6>
                            <p>
                                <?php
                                echo "0 VND";
                                ?>
                            </p>
                        </div>
                        <hr />
                        <div>
                            <h6>Tổng tiền thanh toán</h6>
                            <p>
                                <?php
                                echo currency_format(getTotalCart());
                                ?>
                            </p>
                        </div>

                        <div>
                            <form role="form" method="post" action="<?php echo URL_ROOT; ?>/checkout/checkout">
                                <button data-bs-toggle='modal' data-bs-target='#checkoutsuccess' type="submit" name="createOrderBill">
                                    Xác nhận thanh toán
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rightcart">
                    <div class="headCart">
                        <div class="thead1 theaditem">TÊN SẢN PHẨM</div>
                        <div class="thead2 theaditem">GIÁ</div>
                        <div class="thead3 theaditem">SỐ LƯỢNG</div>
                        <div class="thead4 theaditem">TỔNG</div>
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
                        <h3>GIỎ HÀNG</h3>
                        <div>
                            <p>TỔNG</p>
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

        <div class="modal fade" id="checkoutsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="color: #ff871d; font-size: 18px; text-align: center">Thanh toán thành công đơn hàng</p>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="addaddress" tabindex="-1" aria-labelledby="addaddresslable" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="padding:  20px; margin-top: 150px;">
                    <div class="modal-body addadr">
                        <h6>Địa chỉ mới</h6>
                        <form role="form" method="post" action="<?php echo URL_ROOT; ?>/checkout/checkout">
                            <div class="wi50">
                                <input required class="form-control" type="text" name="fullname" placeholder="Họ và tên">
                                <input required class="form-control" type="text" name="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="wi30">
                                <input required class="form-control" type="text" name="province" placeholder="Tỉnh, thành phố">
                                <input required class="form-control" type="text" name="district" placeholder="Quận, huyện">
                                <input required class="form-control" type="text" name="commune" placeholder="Phường, xã">
                            </div>
                            <div>
                                <input required class="form-control" type="text" name="toolsaddress" placeholder="Địa chỉ cụ thể">
                            </div>
                            <div class="btngroup">
                                <button data-bs-dismiss="modal" class="btninfo" type="button">Quay lại</button>
                                <button data-bs-dismiss="modal" class="btnsuccess" type="submit" name="addaddress">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>