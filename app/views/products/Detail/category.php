<div id="category">
    <?php
        echo "<button class='cate clicked' id='0'>".$data["Category"][0]->CATEGORY."</button>";
        $i = 1;
        while ($i < count($data["Category"])){
            echo "<button class='cate' id='".$i."'>".$data["Category"][$i]->CATEGORY."</button>";
            $i++;
        }
    ?>
</div>
<script>      
    var price = <?php 
    $price = array();
    $i = 0;
    while ($i < count($data["Category"])){
        array_push($price, $data["Category"][$i]->PRICE);
        $i++;
    }
    echo '["' . implode('", "', $price) . '"]';
    ?>;
    var quantity = <?php 
    $quantity = array();
    $i = 0;
    while ($i < count($data["Category"])){
        array_push($quantity, $data["Category"][$i]->QUANTITY);
        $i++;
    }
    echo '["' . implode('", "', $quantity) . '"]';
    ?>;
    var header = document.getElementById("category");
    var btns = header.getElementsByClassName("cate");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("clicked");
            current[0].className = current[0].className.replace(" clicked", "");
            this.className += " clicked";
            var x = document.getElementById("price");
            x.innerHTML = price[parseInt(current[0].id)] + " đ";
            var y = document.getElementById("quantity");
            y.innerHTML = quantity[parseInt(current[0].id)] + " sản phẩm có sẵn";
        });
    }
</script>