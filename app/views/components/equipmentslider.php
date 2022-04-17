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
                                    <form method='post' action='Cart.class.php'>
                                        <input type='hidden' name='Id' value='". $data['equipmentdeals'][$i]["Id"] ."'/>
                                        <input type='hidden' name='Name' value='". $data['equipmentdeals'][$i]["Name"] ."'/>
                                        <input type='hidden' name='Price' value='". $data['equipmentdeals'][$i]["Price"] ."'/>
                                        <input type='hidden' name='Image' value='". $data['equipmentdeals'][$i]["Image"] ."'/>
                                        <input type='hidden' name='Point' value='". $data['equipmentdeals'][$i]["Point"] ."'/>
                                        <button type='submit' name='addcart' class='circular-btn'>
                                            <i class='far fa-cart-plus'></i>
                                        </button>
                                    </form>

                                    
                                    <form>
                                        <input type='hidden' value='none'/>
                                        <button type='button' class='circular-btn'>
                                        <i class='far fa-search'></i>
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
