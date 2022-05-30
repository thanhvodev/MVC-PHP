<?php
require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>

<body>
    <div class="product-detail">
        <div class="headProduct d-flex align-items-center">
            <div class="head-container">
                <a href="<?php echo URL_ROOT ?>/">
                    <button type="button">
                        Home
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">
                    <?php
                    if ($data["Type"] == 1) {
                        echo "Thực phẩm dinh dưỡng</li>";
                    } else {
                        echo "Dụng cụ tập luyện</li>";
                    }
                    ?>
                </p>
            </div>
            <div class="action">
                <button class="btn btn-choose">Quản lý sản phẩm</button>
            </div>
        </div>
        <?php
        require APP_ROOT . '/views/products/All/dealcard.php';
        ?>
    </div>
</body>