

<div class="container image-slider">
    <?php
    $i = 0;
    while ($i < count($data['fooddeals'])) {
        echo "
                <div>
                    <div class='rootProduct'>
                        <div class='wrapProduct'>
                            <div class='boxImg'>
                                <div>
                                    <a href='./products/detail/" . $data['fooddeals'][$i]["Id"] . "'>
                                        <img src=" . $data['fooddeals'][$i]["Image"] . "></img>
                                    </a>
                                </div>
                                <div class='groupbtnProduct'>
                                    <form role='form' method='post' action='" . URL_ROOT . "/cart/shoppingcart'>
                                        <input type='hidden' name='Id' required value='" . $data['fooddeals'][$i]["Id"] . "'/>
                                        <input type='hidden' name='Name' required value='" . $data['fooddeals'][$i]["Name"] . "'/>
                                        <input type='hidden' name='Price' required value='" . $data['fooddeals'][$i]["Price"] . "'/>
                                        <input type='hidden' name='Image' required value='" . $data['fooddeals'][$i]["Image"] . "'/>
                                        <input type='hidden' name='Point' required value='" . $data['fooddeals'][$i]["Point"] . "'/>";
                                        if (isContainCart($data['fooddeals'][$i]["Id"])) {
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

                                    <iframe name='addToCart' style='display:none;'></iframe>
                                
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
                                    <a href='./products/detail/" . $data['fooddeals'][$i]["Id"] . "'>
                                        " . $data['fooddeals'][$i]["Name"] . " <span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px;'>";
        if ($data['fooddeals'][$i]["Point"] > 0)
            echo $data['fooddeals'][$i]["Point"];
        else
            echo "0";
        echo "
                                        </span>
                                    </a>
                                </div>
                                <div style='margin-top: 10px;'>
                                    <p><span>" . currency_format($data['fooddeals'][$i]["Price"]) . "</span></p>
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