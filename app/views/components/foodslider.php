<div class="image-slider">
    <?php
        $i = 0;
        while ($i < count($data['fooddeals'])){
            echo "
            <div class='image-item'>
                <div class='image-grid__item'>
                    <a href='./products/detail/".$data['fooddeals'][$i]["Id"]." class='grid-item'>
                    <div class='grid-item__image' style='background-image: url(".$data['fooddeals'][$i]["Image"].")'></div>
                    <div class='grid-item__hover'></div>
                    <div class='grid-item__name'>Read more</div>
                    </a>
                </div>
                <a href='./products/detail/".$data['fooddeals'][$i]["Id"]."'>".$data['fooddeals'][$i]["Name"]." <span class='badge' style='background: #ff871d;'>";
            if ($data['fooddeals'][$i]["Point"] > 0)
                echo $data['fooddeals'][$i]["Point"];
            else    
                echo "*";
            echo "
            </span></a>
                <div class='image-hr'></div>
                <div class='product-price text-center'>".currency_format($data['fooddeals'][$i]["Price"])."</div>
            </div>
            ";
            $i++;
        }
    ?>
</div>
