<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý sản phẩm</h1>
<div id="liveAlertPlaceholder"></div>
<div class='row d-flex align-items-center'>
    <div class='col-md-4 col-12 mt-5'>
        <img src=<?php echo $data['img'][0]->IMAGE;?> width='100%' style='border-radius: 10px'>
    </div>
    <div class='col-md-8 col-12'>
        <form method='POST'>
            <h5 class='text-center mb-3' style='color: #ff871d'>Chỉnh sửa sản phẩm</h5>
            <div class='mb-3'>
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value='<?php echo $data['name'];?>' required>
            </div>
            <div class='mb-3'>
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="description" rows='3' maxlength='10000' value='<?php echo $data['des'];?>' required><?php echo $data['des'];?></textarea>
            </div>
            <div class='mb-3'>
                <label for="image" class="form-label">Hình ảnh sản phẩm</label>
                <textarea class="form-control" name="image" rows='2' required><?php echo $data['img'][0]->IMAGE;?></textarea>
            </div>
            <div class='mb-3'>
                <input type='hidden' name='product_id' value=<?php echo $data['id']?>>
                <input type='hidden' name='old_image' value='<?php echo $data['img'][0]->IMAGE;?>'>
                <input type='hidden' name='cateid' value=<?php echo $data['cate'][0]->ID;?>>
                <label for="cate1" class="form-label">Tên phân loại</label>
                <input type="text" class="form-control" name="cate1" value='<?php echo $data['cate'][0]->CATEGORY;?>' required>
            </div>
            <div class='mb-3'>
                <label for="price1" class="form-label">Giá</label>
                <input type="text" class="form-control" name="price1" value=<?php echo $data['cate'][0]->PRICE;?> required>
            </div>
            <div class='mb-3'>
                <label for="quantity1" class="form-label">Số lượng</label>
                <input type="text" class="form-control" name="quantity1" value=<?php echo $data['cate'][0]->QUANTITY;?> required>
            </div>
            <div class='text-center'>
                <button type='submit' class='btn btn-choose mt-3' name='edit'>Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>