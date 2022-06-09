<?php
$perpage = 5;
if (isset($_GET['page']) & !empty($_GET['page'])) {
    $curpage = $_GET['page'];
} else {
    $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$pageRes = $data['products'];
$totalres = count($pageRes);

$endpage = ceil($totalres / $perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
$i = $start;
$res = array();
while ($i < $start + $perpage && $i < count($data['products'])) {
    array_push($res, $data['products'][$i]);
    $i++;
}
?>
<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý sản phẩm</h1>
<?php
    require_once APP_ROOT . '/views/components/card-overall.php';
?>
<div class='head-product row mt-3'>
    <div class='col-auto'>
        <button class='btn btn-choose'>Thêm sản phẩm mới</button>
    </div>
</div>
<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm</th>
            <!-- <th>Mô tả</th> -->
            <th>Hình ảnh</th>
            <!-- <th>Phân loại</th> -->
            <th>Điểm đánh giá</th>
            <th>Thao tác</th>
            <!-- <th>Số lượng sản phẩm</th> -->
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 0;
        while ($i < count($res)){
            echo "<tr>";
            echo "<td>".$res[$i]["ID"]."</td>";
            echo "<td style='font-weight: 500; color: #ff871d'>".$res[$i]["Name"]."</td>";            
            if ($res[$i]["Type"] == 2){
                echo "<td>Thực phẩm dinh dưỡng</td>";
            }
            else {
                echo "<td>Dụng cụ tập luyện</td>";
            }
            echo "<td><img width='100px' src='".$res[$i]["Image"]."'/></td>";
            echo "<td>";
            echo "<span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px'>";
            if ($res[$i]["Point"] > 0)
                echo $res[$i]["Point"];
            else
                echo "*";
            echo "</></td>";
            echo "
            <td>
            <div class='row d-flex justify-content-center'>
                <div class='col-lg-6 col-12'>
                    <button class='btn btn-success' style='background-color: #1cc88a !important; border-color: #1cc88a !important'>Sửa<i class='bi bi-pencil-square'></i></button>
                </div>
                <div class='col-lg-6 col-12'>
                    <button class='btn btn-choose' style='margin: 0 !important'>Xóa<i class='bi bi-trash3'></i></button>
                </div>
            </div>
            </td></tr>";
            $i++;
        }
        ?>
    </tbody>
</table>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-3">
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