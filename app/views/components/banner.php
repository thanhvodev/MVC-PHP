<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">

        <?php 
            $i = 1;
                echo "
                <div class='carousel-item active'>
                    <img src='".$data['banner'][0]->IMAGES."' alt='' class='d-block' style='width: 100vw; height: 90vh; min-width: 800px;'>
                    <div class='carousel-caption banner'>
                        <h3>".$data['banner'][0]->TITLE."</h3>
                        <p>".$data['banner'][0]->DESCRIPTION."</p>
                    </div>
                </div>
                ";
            while ($i < count($data['banner'])) {
                echo "
                <div class='carousel-item'>
                    <img src='".$data['banner'][$i]->IMAGES."' alt='' class='d-block' style='width:100vw; height: 90vh; min-width: 800px;'>
                    <div class='carousel-caption banner'>
                        <h3>".$data['banner'][$i]->TITLE."</h3>
                        <p>".$data['banner'][$i]->DESCRIPTION."</p>
                    </div>
                </div>
                ";
                $i++;
            }
        ?>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="awesome-thing">
    <div class="thing">
        <img class="thing-image"
            src="//cdn.shopify.com/s/files/1/0554/5784/1199/files/1_1e862949-1c29-4712-878e-b7fa9bf2a7cf.png?v=1639533201"
            alt="..." />
        <h4>
            FRIENDLY SUPPORT
        </h4>
        <p>Hỗ trợ 24/7</p>
    </div>
    <div class="thing">
        <img class="thing-image"
            src="//cdn.shopify.com/s/files/1/0554/5784/1199/files/3_4d31e578-9b6d-49ad-a774-fcb2912f74da.png?v=1639533202"
            alt="..." />
        <h4>
            EASY RETURNS
        </h4>
        <p>Trả hàng sau 7 ngày nếu sản phẩm bị lỗi</p>
    </div>
    <div class="thing">
        <img class="thing-image"
            src="//cdn.shopify.com/s/files/1/0554/5784/1199/files/4_dc75de55-5f72-4e3e-998a-b7208c2aaed8.png?v=1639533201"
            alt="..." />
        <h4>
            QUALITY GUARANTEED
        </h4>
        <p>Chất lượng được đảm bảo</p>
    </div>
    <div class="thing">
        <img class="thing-image"
            src="//cdn.shopify.com/s/files/1/0554/5784/1199/files/2_59cfc1e7-0a9b-44c7-ae33-1525f2950b01.png?v=1639533202"
            alt="..." />
        <h4>
            FREE SHIPPING
        </h4>
        <p>Giao hàng miễn phí</p>
    </div>
</div>