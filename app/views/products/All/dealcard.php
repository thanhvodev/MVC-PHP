<?php
$perpage = 6;
if (isset($_GET['page']) & !empty($_GET['page'])) {
    $curpage = $_GET['page'];
} else {
    $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$pageRes = $data["List"];
$totalres = count($pageRes);

$endpage = ceil($totalres / $perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
$i = $start;
$res = array();
while ($i < $start + $perpage && $i < count($data["List"])) {
    array_push($res, $data["List"][$i]);
    $i++;
}
?>

<div class="product-container">
    <div class="row d-flex justify-content-center">
        <?php
        $i = 0;
        while ($i < count($res)) { ?>
            <div class="col-sm-6 col-md-4 col-xl-4 col-xxl-4 col-12">
                <div class="rootProduct">
                    <div class="wrapProduct">
                        <div class="boxImg">
                            <div>
                                <a href='<?php echo URL_ROOT ?>/products/detail/<?php echo $res[$i]["ID"]; ?>'>
                                    <img src="<?php echo $res[$i]["Image"]; ?>" />
                                </a>
                            </div>

                            <div class="groupbtnProduct">
                                <form role='form' method='post' action="<?php echo URL_ROOT; ?>/cart/shoppingcart">
                                    <input type='hidden' name='Id' required value="<?php echo $res[$i]["ID"]; ?>" />
                                    <input type='hidden' name='Name' required value="<?php echo $res[$i]["Name"]; ?>" />
                                    <input type='hidden' name='Price' required value="<?php echo $res[$i]["Price"]; ?>" />
                                    <input type='hidden' name='Image' required value="<?php echo $res[$i]["Image"]; ?>" />
                                    <input type='hidden' name='Point' required value="<?php echo $res[$i]["Point"]; ?>" />
                                    <?php
                                    if (isContainCart($res[$i]["ID"])) {
                                        echo "
                                        <button type='button' name='' class='circular-btn'>
                                            <i class='far fa-check-circle'></i>
                                        </button>
                                        ";
                                    } else {
                                        echo "
                                        <button type='submit' name='addcart' class='circular-btn'>
                                            <i class='fas fa-cart-plus'></i>
                                        </button>
                                        ";
                                    }
                                    ?>
                                </form>

                                <iframe name='addToCart' style='display:none;'></iframe>

                                <form>
                                    <input type='hidden' value='none' />
                                    <button type='button' class='circular-btn'>
                                        <i class='fas fa-search'></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class='content'>
                            <div style='padding-top: 10px;'>
                                <a href="<?php echo URL_ROOT ?>/products/detail/<?php echo $res[$i]["ID"]; ?>">
                                    <?php echo $res[$i]["Name"]; ?>
                                    <span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px'>

                                        <?php
                                        if ($res[$i]["Point"] > 0)
                                            echo $res[$i]["Point"];
                                        else
                                            echo "*";
                                        ?>

                                    </span>
                                </a>
                            </div>
                            <div style='margin-top: 10px;'>
                                <p>
                                    <span>
                                        <?php
                                        echo currency_format($res[$i]["Price"]);
                                        ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>
    </div>
</div>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-5">
        <?php if ($curpage != $startpage) { ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">First</span>
                </a>
            </li>
        <?php } ?>
        <?php if ($curpage >= 2) { ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
        <?php } ?>
        <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
        <?php if ($curpage != $endpage) { ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Last</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>