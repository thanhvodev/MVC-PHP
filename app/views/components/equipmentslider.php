<?php 

    

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


<div class="container image-slider">
    <?php
        $i = 0;
        while ($i < count($data['equipmentdeals'])){
            echo "
                <div>
                    <div class='rootProduct'>
                        <div class='wrapProduct'>
                            <div class='boxImg'>
                                <div>
                                    <a href='./products/detail/".$data['equipmentdeals'][$i]["Id"]."'>
                                        <img src=" . $data['equipmentdeals'][$i]["Image"] . "></img>
                                    </a>
                                </div>
                                <div class='groupbtnProduct'>
                                    <form method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                        <input type='hidden' name='Id' value='". $data['equipmentdeals'][$i]["Id"] ."'/>
                                        <input type='hidden' name='Name' value='". $data['equipmentdeals'][$i]["Name"] ."'/>
                                        <input type='hidden' name='Price' value='". $data['equipmentdeals'][$i]["Price"] ."'/>
                                        <input type='hidden' name='Image' value='". $data['equipmentdeals'][$i]["Image"] ."'/>
                                        <input type='hidden' name='Point' value='". $data['equipmentdeals'][$i]["Point"] ."'/>";
                                        if (isContainCart($data['equipmentdeals'][$i]["Id"])) {
                                            echo "
                                            <button type='button' name='' class='circular-btn'>
                                                <i class='far fa-check-circle'></i>
                                            </button>
                                            ";
                                        } else {

                                            if (isset($_SESSION['user_id'])) {
                                                echo "
                                                <button type='submit' name='addcart' class='circular-btn'>
                                                    <i class='fas fa-cart-plus'></i>
                                                </button>
                                                ";
                                            } else {
                                                echo "
                                                <button name='' class='circular-btn' type='button' data-bs-toggle='modal' data-bs-target='#mustLogin'>
                                                    <i class='fas fa-cart-plus'></i>
                                                </button>
                                                ";
                                            }
                                        }
                            echo "  </form>

                                    
                                    <form>
                                        <input type='hidden' value='none'/>
                                        <button type='button' class='circular-btn'>
                                        <i class='fas fa-search'></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class='content'>
                                <div>
                                    <a href='./products/detail/".$data['equipmentdeals'][$i]["Id"]."'>
                                        ".$data['equipmentdeals'][$i]["Name"]." <span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px;'>";
                                            if ($data['equipmentdeals'][$i]["Point"] > 0)
                                                echo $data['equipmentdeals'][$i]["Point"];
                                            else    
                                                echo "0";
                                            echo "
                                        </span>
                                    </a>
                                </div>
                                <div style='margin-top: 10px;'>
                                    <p><span>".currency_format($data['equipmentdeals'][$i]["Price"])."</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $i++;
        }
    ?>
</div>
