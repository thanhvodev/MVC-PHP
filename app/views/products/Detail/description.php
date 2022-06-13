<?php
    require_once APP_ROOT . '/views/products/Detail/formatCurrency.php';
?>
<div class="detail">
    <div class="title text-center">
        <?php
            echo $data["Name"];
        ?>
    </div>
    <div class="extra-info text-center"><?php echo count($data["Feedbacks"]);?> đánh giá | Điểm đánh giá: <span class="badge" style='background: #ff871d;'>
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
    <!-- <div class='divider mt-3'></div> -->
    <!-- <div class="row pt-3">
        <h6 class="col-md-3 d-flex">Phân loại: </h6>
        <div class="col-md-9 d-flex justify-content-center">
        <div id="category">
            <?php
                // echo "<button class='cate clicked' id='0'>".$data["Category"][0]->CATEGORY."</button>";
                // $i = 1;
                // while ($i < count($data["Category"])){
                //     echo "<button class='cate' id='".$i."'>".$data["Category"][$i]->CATEGORY."</button>";
                //     $i++;
                // }
            ?>
        </div>
        </div>
    </div> -->
    <div class='divider mt-3'></div>
    <div class="row pt-3">
        <h6 class="col-md-3 d-flex">Giá sản phẩm: </h6>
        <div class="col-md-9 text-center" id="price" style="color: #ff871d; font-weight: 600; font-size: 20px;"><?php echo currency_format($data["Category"][0]->PRICE);?></div>
    </div>
    <div class='divider mt-3'></div>
    <div class="quantity row pt-3 align-items-center">
        <h6 class="col-md-3 d-flex">Số lượng: </h6>
        <div class="col-md-9 text-center">
        <div class="input-spinner">
            <button id="sub">-</button>
            <input type="text" id="qtyBox" value="1">
            <button id="add">+</button>
        </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-9 pt-3 num text-center" id="quantity"><?php echo $data["Category"][0]->QUANTITY." sản phẩm có sẵn";?></div>
    </div>
    <div class="action row">
        <div class="col-md-3 col-12"></div>
        <div class="col-md-9 col-12 d-flex justify-content-center g-5">

            <form role='form' method='post' action="<?php echo URL_ROOT; ?>/cart/shoppingcart">
                <input type='hidden' name='Id' required value="<?php echo $data['Id']; ?>" />
                <input type='hidden' name='Name' required value="<?php echo $data["Name"]; ?>" />
                <input type='hidden' name='Price' required id='priceproduct' value="<?php echo $data["Category"][0]->PRICE; ?>" />
                <input type='hidden' name='Image' required value="<?php echo $data["Images"][0]->IMAGE; ?>" />
                <input type='hidden' name='Point' required value="<?php echo $data["Point"]; ?>" />
                <input type ='hidden' name='QTY' require value="1" id='qtyvalue' />


                <?php
                    if(isContainCart($data['Id'])) {
                        echo "
                        <a href='".URL_ROOT."/cart/shoppingcart'>
                            <button type='button' name='' class='btn btn-choose'>Xem giỏ hàng</button>
                        </a>
                        ";
                    } else {
                        if (isset($_SESSION["user_id"])) {
                            echo "
                            <button type='submit' name='addcartqty' class='btn btn-choose'>Thêm vào giỏ hàng</button>
                            ";
                        } else {
                            echo "
                            <button type='button' name='addcartqty' data-bs-toggle='modal' data-bs-target='#mustLogin' class='btn btn-choose'>Thêm vào giỏ hàng</button>
                            ";
                        }
                    }
                ?>
                <div class="modal fade" id="mustLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p style="color: #ff871d; font-size: 18px; text-align: center">Vui lòng đăng nhập trước khi mua hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <button type="button" name='addcart' class="btn btn-choose">Mua ngay</button> -->
            </form>
        </div>
    </div>


<script type="text/javascript">

    let addBtn = document.querySelector('#add');
    let subBtn = document.querySelector('#sub');
    let qty = document.querySelector('#qtyBox');
    let qtyvalue = document.querySelector('#qtyvalue');
    addBtn.addEventListener('click', ()=>{
        qty.value = parseInt(qty.value) + 1;
        qtyvalue.value = qty.value;
    });

    subBtn.addEventListener('click',()=>{
        if (qty.value <= 1) {
            qty.value = 1;
        }
        else{
            qty.value = parseInt(qty.value) - 1;
        }
        qtyvalue.value = qty.value;
    });

    
</script>
</div>