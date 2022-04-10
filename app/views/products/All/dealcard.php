<?php
    $perpage = 8;
    if(isset($_GET['page']) & !empty($_GET['page'])){
        $curpage = $_GET['page'];
    }else{
        $curpage = 1;
    }
    $start = ($curpage * $perpage) - $perpage;
    $pageRes = $data["List"];
    $totalres = count($pageRes);
    
    $endpage = ceil($totalres/$perpage);
    $startpage = 1;
    $nextpage = $curpage + 1;
    $previouspage = $curpage - 1;
    $i = $start;
    $res = array();
    while ($i < $start + $perpage && $i < count($data["List"])){
        array_push($res, $data["List"][$i]);
        $i++;
    }
?>
<div class="row all-products d-flex justify-content-center">
    <?php
        $i = 0;
        while ($i < count($res)){ ?>
            <div class="col-4 card product-card border-0 shadow ms-3 mt-3">
                <div class="row d-flex justify-content-center">
                    <div class="item">
                        <div class="box" style="background-image: url(<?= $res[$i]["Image"] ?>);">
                            <div class="cover">
                                <button type="button" class="circular-btn">
                                    <i class="bi bi-cart-plus" style="font-size: 20px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="card-text text-center">
                    <?php
                        echo "<a class='hihi' href='./".$res[$i]["ID"]."'>".$res[$i]["Name"]." <span class='badge' style='background: #ff871d;'>";
                        if ($res[$i]["Point"] > 0)
                            echo $res[$i]["Point"];
                        else    
                            echo "*";
                        echo "</span></a>";
                    ?>
                        <div class="product-price mb-1"><?= currency_format($res[$i]["Price"]) ?></div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        }
    ?>
</div>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-5">
    <?php if($curpage != $startpage){ ?>
        <li class="page-item">
        <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">First</span>
        </a>
        </li>
        <?php } ?>
        <?php if($curpage >= 2){ ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
        <?php } ?>
        <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
        <?php if($curpage != $endpage){ ?>
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
