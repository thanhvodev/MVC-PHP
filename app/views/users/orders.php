<body>
    <script>
    $(document).ready(function() {

        $('.toggle-btn').click(function() {
            $(this).toggleClass('active').siblings().removeClass('active');
        });

    });
    </script>
    <div class="container mt-5">
        <a href="./profile"> &lt; &lt;Quay lại Trang cá nhân</a>
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Đơn #</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Tổng cộng</th>
                                    <th>Tạo ngày</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <?php 
                                if ($data['ordersData']->num_rows > 0) {
                                    // output data of each row
                                    while($row = $data['ordersData']->fetch_assoc()) {
                                        echo '<tr class="cell-1">

                                        <td>#SO-'  . $row['ID'] .'</td>
                                        <td>'  . $row['PRODUCT_NAMES'] .'</td>
                                        <td><span class="btn btn-primary">'  . $row['STATUS_O'] .'</span></td>
                                        <td>'  . $row['TOTAL'] .'</td>
                                        <td>'  . $row['CREATED'] .'</td>
                                        <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                            </tr>';
                                    }
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>