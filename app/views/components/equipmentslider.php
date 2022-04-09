<div class="image-slider">
    <?php
        $i = 0;
        while ($i < count($data['equipmentdeals'])){
            echo "
            <div class='image-item'>
                <div class='image'>
                    <img src='".$data['equipmentdeals'][$i]["Image"]."'alt=''>
                </div>
                <a href='./products/detail/".$data['equipmentdeals'][$i]["Id"]."'>".$data['equipmentdeals'][$i]["Name"]." <span class='badge' style='background: #ff871d;'>";
            if ($data['equipmentdeals'][$i]["Point"] > 0)
                echo $data['equipmentdeals'][$i]["Point"];
            else    
                echo "*";
            echo "
            </span></a>
                <div class='image-hr'></div>
                <div class='product-price text-center'>".$data['equipmentdeals'][$i]["Price"]." đ</div>
            </div>
            ";
            $i++;
        }
    ?>
</div>
