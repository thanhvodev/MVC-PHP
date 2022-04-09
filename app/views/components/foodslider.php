<div class="image-slider">
    <?php
        $i = 0;
        while ($i < count($data['fooddeals'])){
            echo "
            <div class='image-item'>
                <div class='image'>
                    <img src='".$data['fooddeals'][$i]["Image"]."'alt=''>
                </div>
                <a href='./products/detail/".$data['fooddeals'][$i]["Id"]."'>".$data['fooddeals'][$i]["Name"]." <span class='badge' style='background: #ff871d;'>";
            if ($data['fooddeals'][$i]["Point"] > 0)
                echo $data['fooddeals'][$i]["Point"];
            else    
                echo "*";
            echo "
            </span></a>
                <div class='image-hr'></div>
                <div class='product-price text-center'>".$data['fooddeals'][$i]["Price"]." đ</div>
            </div>
            ";
            $i++;
        }
    ?>
</div>
