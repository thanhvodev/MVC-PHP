<?php
$perpage = 5;
if (isset($_GET['page']) & !empty($_GET['page'])) {
    $curpage = $_GET['page'];
} else {
    $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$pageRes = $data['blogs'];
$totalres = count($pageRes);

$endpage = ceil($totalres / $perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;
$i = $start;
$res = array();
while ($i < $start + $perpage && $i < count($data['blogs'])) {
    array_push($res, $data['blogs'][$i]);
    $i++;
};

$res2 = $data['events'];
?>
<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý Blogs</h1>
<div id="liveAlertPlaceholder"></div>

<div class='head-product d-flex justify-content-end mt-3 me-0'>
    <button type="button" class='btn btn-choose' data-bs-toggle="modal" data-bs-target="#addProduct">Thêm Blog mới</button>
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel"><?php echo "Thêm sản phẩm mới"; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method='POST'>
                        <div class='mb-3'>
                            <label for="name" class="form-label">Vui lòng chọn loại sản phẩm</label>
                            <select class="form-select" name="type" aria-label="Select type" required>
                                <option selected disabled>-- Loại sản phẩm --</option>
                                <option value="1">Thực phẩm dinh dưỡng</option>
                                <option value="2">Dụng cụ tập luyện</option>
                            </select>
                        </div>
                        <div class='mb-3'>
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class='mb-3'>
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="description" rows='3' maxlength='10000' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                            <textarea class="form-control" name="image" rows='3' placeholder='Điền link hình ảnh cho sản phẩm' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="cate1" class="form-label">Tên phân loại</label>
                            <input type="text" class="form-control" name="cate1" required>
                        </div>
                        <div class='mb-3'>
                            <label for="price1" class="form-label">Giá</label>
                            <input type="text" class="form-control" name="price1" required>
                        </div>
                        <div class='mb-3'>
                            <label for="quantity1" class="form-label">Số lượng</label>
                            <input type="text" class="form-control" name="quantity1" required>
                        </div>
                        <div class='text-center'>
                            <button type='submit' class='btn btn-choose mt-3' name='add'>Thêm sản phẩm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $i = 0;
        while ($i < count($res)){
            echo "<tr>";
            echo "<td>".$res[$i]->ID."</td>";
            echo "<td style='font-weight: 500; color: #ff871d'>".$res[$i]->TITLE."</td>";            
            
            echo "<td><img width='100px' src='".$res[$i]->IMAGE."'/></td>";
            // echo "<td>";
            // echo "<span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px'>";
            echo "
            <td>
            <div class='row d-flex justify-content-center'>
                <div class='col-lg-6 col-12'>
                    <a href='".URL_ROOT."/admin/blogs/".$res[$i]->ID."'><button class='btn btn-success' style='background-color: #1cc88a !important; border-color: #1cc88a !important' name='requestedit'>Sửa<i class='bi bi-pencil-square'></i></button></a>
                </div>
                <div class='col-lg-6 col-12'>
                    <form method='POST'>
                        <input type='hidden' name='product_id' value='". $res[$i]->ID."'>
                        <button class='btn btn-choose' style='margin: 0 !important' name='delete'>Xóa<i class='bi bi-trash3'></i></button>
                    </form>
                </div>
            </div>
            </td></tr>";
            $i++;
        }
        ?>
    </tbody>
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

        const alert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
        }
    </script>
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


<div class='head-product d-flex justify-content-end mt-3 me-0'>
    <button type="button" class='btn btn-choose' data-bs-toggle="modal" data-bs-target="#addProduct">Thêm Event mới</button>
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel"><?php echo "Thêm sản phẩm mới"; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method='POST'>
                        <div class='mb-3'>
                            <label for="name" class="form-label">Vui lòng chọn loại sản phẩm</label>
                            <select class="form-select" name="type" aria-label="Select type" required>
                                <option selected disabled>-- Loại sản phẩm --</option>
                                <option value="1">Thực phẩm dinh dưỡng</option>
                                <option value="2">Dụng cụ tập luyện</option>
                            </select>
                        </div>
                        <div class='mb-3'>
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class='mb-3'>
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="description" rows='3' maxlength='10000' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                            <textarea class="form-control" name="image" rows='3' placeholder='Điền link hình ảnh cho sản phẩm' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="cate1" class="form-label">Tên phân loại</label>
                            <input type="text" class="form-control" name="cate1" required>
                        </div>
                        <div class='mb-3'>
                            <label for="price1" class="form-label">Giá</label>
                            <input type="text" class="form-control" name="price1" required>
                        </div>
                        <div class='mb-3'>
                            <label for="quantity1" class="form-label">Số lượng</label>
                            <input type="text" class="form-control" name="quantity1" required>
                        </div>
                        <div class='text-center'>
                            <button type='submit' class='btn btn-choose mt-3' name='add'>Thêm sản phẩm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        // print_r($res2);
        $i = 0;
        while ($i < count($res2)){
            echo "<tr>";
            echo "<td>".$res2[$i]->ID."</td>";
            echo "<td style='font-weight: 500; color: #ff871d'>".$res2[$i]->TITLE."</td>";            
            
            echo "<td><img width='100px' src='".$res2[$i]->IMAGE."'/></td>";
            // echo "<td>";
            // echo "<span class='badge' style='background-color: #ff871d; color: #fff; margin-left: 5px'>";
            echo "
            <td>
            <div class='row d-flex justify-content-center'>
                <div class='col-lg-6 col-12'>
                    <a href='".URL_ROOT."/admin/blogs/".$res2[$i]->ID."'><button class='btn btn-success' style='background-color: #1cc88a !important; border-color: #1cc88a !important' name='requestedit'>Sửa<i class='bi bi-pencil-square'></i></button></a>
                </div>
                <div class='col-lg-6 col-12'>
                    <form method='POST'>
                        <input type='hidden' name='product_id' value='". $res2[$i]->ID."'>
                        <button class='btn btn-choose' style='margin: 0 !important' name='delete'>Xóa<i class='bi bi-trash3'></i></button>
                    </form>
                </div>
            </div>
            </td></tr>";
            $i++;
        }
        ?>
    </tbody>
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

        const alert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
        }
    </script>
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