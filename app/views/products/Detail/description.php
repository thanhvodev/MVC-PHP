<?php
    require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>
<div class="detail">
    <div class="title">
        <?php
            echo $data["Name"];
        ?>
    </div>
    <div class="extra-info"><?php echo count($data["Feedbacks"]);?> đánh giá | Điểm đánh giá: <span class="badge" style='background: #ff871d;'>
    <?php 
        if ($data["Point"] > 0)
            echo round($data["Point"], 1);
        else    
            echo "*";
    ?>
    </span></div>
    <div class='divider mt-3'></div>
    <div class="description pt-3">
        <?php
            echo $data["Description"];
        ?>
    </div>
    <div class='divider mt-3'></div>
    <div class="row pt-3">
        <h6 class="col-md-4 d-flex">Phân loại: </h6>
        <div class="col-md-8">
            <?php
                require_once APP_ROOT . '/views/products/Detail/category.php';
            ?>
        </div>
    </div>
    <div class='divider'></div>
    <div class="row pt-3">
        <h6 class="col-md-3 d-flex">Giá sản phẩm: </h6>
        <div class="col-md-6 text-center" id="price" style="color: #ff871d; font-weight: 600; font-size: 20px;"><?php echo currency_format($data["Category"][0]->PRICE);?></div>
    </div>
    <div class='divider mt-3'></div>
    <div class="quantity row pt-3">
        <h6 class="col-md-4 d-flex">Số lượng: </h6>
        <div class="col-md-4 text-center">
            <?php
                require_once APP_ROOT . '/views/products/Detail/inputSpinner.php';
            ?>
        </div>
        <div class="col-md-4 num text-center" id="quantity"><?php echo $data["Category"][0]->QUANTITY." sản phẩm có sẵn";?></div>
    </div>
    <div class="action mt-4 text-center">
        <button type="button" class="btn btn-choose">Thêm vào giỏ hàng</button>
        <button type="button" class="btn btn-choose ms-5">Mua ngay</button>
    </div>
</div>