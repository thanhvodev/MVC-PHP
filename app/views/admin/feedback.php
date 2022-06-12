<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý sản phẩm</h1>
<h4 class='text-center mb-3'>Tất cả đánh giá của sản phẩm <span style='color: #ff871d'><?php echo $data['name'];?></span></h4>
<div class='row feedbacklist align-items-center' style="width: 100%">
    <div class='col-md-4 col-sm-12'>
        <img src='<?php echo $data['img'];?>' width = '100%' style='border-radius: 10px'>
    </div>
    <div class='col-md-8 col-sm-12'>
        <?php
            $count = 0;
            while ($count < count($data["feedback"])){
                echo "
                <div class='row d-flex align-items-center mt-4'>
                    <div class='col-2 d-flex justify-content-center'>
                        <i class='bi bi-person-circle' style='font-size: 2rem; color: #ff871d'></i>
                    </div>
                    <div class='col-3'>
                    <h6>".$data["feedback"][$count]->USERNAME."</h6></div>";
                echo "<div class='col-3 all-star'>";
                $i = 1;
                while ($i <= $data["feedback"][$count]->RATING){
                    echo "<i class='ratingstar fas fa-star'></i>";
                    $i++;
                }
                $i = 1;
                while ($i <= 5 - $data["feedback"][$count]->RATING){
                    echo "<i class='ratingstar far fa-star'></i>";
                    $i++;
                }
                echo "</div>
                <div class='col-4 text-center'>
                <h6 style='color: #767676'>".$data["feedback"][$count]->TIMESTAMP."</h6></div>";
                echo "
                <div class='col-2'></div>
                <div class='col-10'>
                    <input class='form-control' type='text' value='".$data["feedback"][$count]->CONTENT."' aria-label='Disabled input example' disabled readonly>
                </div>
                ";
                echo "</div>";
                $count++;
            }
        ?>
    </div>
</div>