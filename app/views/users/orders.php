<?php
    if(!isset($_SESSION['user_id'])) {
        echo "<script type='text/javascript'>
            location.replace('index');
         </script>";  
    }
?>

<body>
    <script>
    $(document).ready(function() {

        $('.toggle-btn').click(function() {
            $(this).toggleClass('active').siblings().removeClass('active');
        });

    });

    </script>
    <div class="container mt-5 product-detail">
        <div class="headProduct">
            <div class="head-container">
                <a href="<?php echo URL_ROOT ?>/">
                    <button type="button">
                        Trang chủ
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <a href="./profile">
                    <button type="button">
                            Trang cá nhân
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">
                    Đơn hàng
                </p>
            </div>
        </div>        
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
                                    <th>Thời gian</th>
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
                                        <td><button class="btn btn btn-choose" disabled>'  . $row['STATUS_O'] .'</button></td>
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