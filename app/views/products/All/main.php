<?php
    require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>
<body>
    <div class="product-detail">
        <div class="topbar">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=<?= URL_ROOT ?> class="backtohome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                <?php
                    if ($data["Type"] == 1){
                        echo "Thực phẩm dinh dưỡng</li>";
                    }
                    else {
                        echo "Dụng cụ tập luyện</li>";
                    }
                ?>    
            </ol>
        </div>
        <?php
            require APP_ROOT . '/views/products/All/dealcard.php';
        ?>
    </div>
</body>