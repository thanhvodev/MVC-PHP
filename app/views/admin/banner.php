

<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý banner</h1>

<div id="liveAlertPlaceholder"></div>


<div class='head-product d-flex justify-content-end mt-3 me-0'>
    <button type="button" class='btn btn-choose' data-bs-toggle="modal" data-bs-target="#addBanner">Thêm banner mới</button>
    <div class="modal fade" id="addBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel"><?php echo "Thêm banner mới"; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method='POST'>
                        <div class='mb-3'>
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class='mb-3'>
                            <label for="description" class="form-label">Mô tả chi tiết</label>
                            <textarea class="form-control" name="description" rows='3' maxlength='10000' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                            <input type="text" class="form-control" name="images" rows='3' placeholder='URL hình ảnh' required></input>
                        </div>
                        <div class='text-center'>
                            <button type='submit' class='btn btn-choose mt-3' name='addbanner'>Thêm banner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modifyBanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel"><?php echo "Chỉnh sửa banner"; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method='POST'>
                        <div class='mb-3'>
                            <label for="title" class="form-label">Tiêu đề</label>
                            <input type="text" id="titlebanner" class="form-control" name="title" required>
                        </div>
                        <div class='mb-3'>
                            <label for="description" class="form-label">Mô tả chi tiết</label>
                            <textarea id="desbanner" class="form-control" name="description" rows='3' maxlength='10000' required></textarea>
                        </div>
                        <div class='mb-3'>
                            <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                            <input id="imgbanner" type="text" class="form-control" name="images" rows='3' placeholder='URL hình ảnh' required></input>
                        </div>

                        <input type='hidden' name='id' id="idbanner" require/>
                        <div class='text-center'>
                            <button type='submit' class='btn btn-choose mt-3' name='modify'>Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề banner</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        
        <?php 
        $i = 0;
        while ($i < count($data['banner'])){
            echo "<tr>";
            echo "<td class='IDbanner'>".$data['banner'][$i]->ID."</td>";
            echo "<td class='TITLEbanner' style='font-weight: 500; color: #ff871d'>".$data['banner'][$i]->TITLE."</td>";            
            echo "<td class='DESbanner'>".$data['banner'][$i]->DESCRIPTION."</td>";
            echo "<td><img class='IMGbanner' width='100px' src='".$data['banner'][$i]->IMAGES."'/></td>";
            echo "
            <td>
            <div class='row d-flex justify-content-center'>
                <div class='col-lg-6 col-12'>
                    <button onclick='setDataModify(".$i.")' data-bs-toggle='modal' data-bs-target='#modifyBanner' class='btn btn-success' style='background-color: #1cc88a !important; border-color: #1cc88a !important'>Sửa<i class='bi bi-pencil-square'></i></button>
                </div>
                <div class='col-lg-6 col-12'>
                    <form method='POST'>
                        <input type='hidden' name='ID' value='". $data['banner'][$i]->ID."'>
                        <button class='btn btn-choose' style='margin: 0 !important' name='deleteBanner'>Xóa<i class='bi bi-trash3'></i></button>
                    </form>
                </div>
            </div>
            </td></tr>";
            $i++;
        }
        ?>


    </tbody>
    <script>
        function setDataModify(index) {
            index = parseInt(index);

            console.log(typeof(index));
            var ID = document.querySelectorAll('.IDbanner')[index].innerHTML;
            var TITLE = document.querySelectorAll('.TITLEbanner')[index].innerHTML;
            var DES = document.querySelectorAll('.DESbanner')[index].innerHTML;
            var IMAGE = document.querySelectorAll('.IMGbanner')[index].src;

            console.log(ID, TITLE, DES, IMAGE);

            var idbanner = document.querySelector('#idbanner');
            var titlebanner = document.querySelector("#titlebanner");
            var desbanner = document.querySelector("#desbanner");
            var imgbanner = document.querySelector("#imgbanner")

            idbanner.value = parseInt(ID);
            titlebanner.value = TITLE;
            titlebanner.placeholder = TITLE;
            desbanner.value = DES;
            desbanner.placeholder = DES;
            imgbanner.value = IMAGE;
            imgbanner.placeholder = IMAGE;
        }
    </script>
</table>