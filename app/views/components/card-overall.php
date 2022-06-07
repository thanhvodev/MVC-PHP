<div class='row d-flex justify-content-center'>
    <div class='col-md-4 card-overall'>
        <div class='card shadow' style='border-left: .25rem solid #4e73df!important'>
            <div class='card-body'>
                <div class='row no-gutters align-items-center'>
                    <div class="col">
                        <div class="title mb-1" style='color: #4e73df'>Số lượng mặt hàng</div>
                        <div class="number mb-0"><?php echo count($data['products']);?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x" style='color: #dddfeb'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-4 card-overall'>
        <div class='card shadow' style='border-left: .25rem solid #1cc88a!important'>
            <div class='card-body'>
                <div class='row no-gutters align-items-center'>
                    <div class="col">
                        <div class="title mb-1" style='color: #1cc88a'>Sản phẩm trong kho</div>
                        <div class="number mb-0"><?php echo $data['nums'];?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x" style='color: #dddfeb'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-4 card-overall'>
        <div class='card shadow'>
            <div class='card-body'>
                <div class='row no-gutters align-items-center'>
                    <div class="col">
                        <div class="title mb-1">Đánh giá</div>
                        <div class="number mb-0"><?php echo count($data['feedbacks']);?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x" style='color: #dddfeb'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>