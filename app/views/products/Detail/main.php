<?php
    require APP_ROOT . '/views/inc/head.php';
?>
<script src="<?= URL_ROOT ?>/js/product.js" type="text/javascript"></script>
<body>
    <div class="product-detail">
        <div class="topbar">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=<?= URL_ROOT ?> class="backtohome">Home</a></li>
                <li class="breadcrumb-item">
                <?php
                    if ($data["Type"] == 1){
                        echo "<a href='". URL_ROOT."/products/detail/food' class='backtohome'>Thực phẩm dinh dưỡng</a></li>";
                    }
                    else {
                        echo "<a href='". URL_ROOT."/products/detail/equipment' class='backtohome'>Dụng cụ tập luyện</a></li>";
                    }
                ?>    
                <li class="breadcrumb-item active" aria-current="page">
                    <?php
                        echo $data["Name"];
                    ?>
                </li>
            </ol>
        </div>
        <div class='row mainInfo pt-3'>
            <div class='col-md-6 col-sm-12'>
                <?php
                    require_once APP_ROOT . '/views/products/Detail/productImage.php';
                ?>
            </div>
            <div class='col-md-6 col-sm-12'>
                <?php
                    require_once APP_ROOT . '/views/products/Detail/description.php';
                ?>
            </div>
        </div>
        <div class='feedback pt-5'>
            <div class='divider mt-5'></div>
            <div class='title'><?php echo "Đánh giá của khách hàng (".count($data["Feedbacks"]).")";?></div>
            <div class='blog-title-hr'></div>
            <div class='row feedbacklist'>
                <?php
                    require_once APP_ROOT . '/views/products/Detail/feedback.php';
                ?>
            </div>
            <div class="rate text-center mt-5">
                <button type="button" class="btn btn-choose">Thêm đánh giá</button>
            </div>
        </div>
    </div>
</body>