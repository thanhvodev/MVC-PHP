<div class='row d-flex justify-content-center'>
    <div class='col-md-4 card-overall'>
        <div class='card shadow' style='border-left: .25rem solid #4e73df!important'>
            <div class='card-body'>
                <div class='row no-gutters align-items-center'>
                    <div class="col">
                        <div class="title mb-1" style='color: #4e73df'>Số thành viên hiện tại</div>
                        <div class="number mb-0"><?php echo $data['users']->num_rows; ?></div>
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
                        <div class="title mb-1" style='color: #1cc88a'>Số thành viên bị cấm hiện tại</div>
                        <div class="number mb-0"><?php echo $data['noOfBanned']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x" style='color: #dddfeb'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>