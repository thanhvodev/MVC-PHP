<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="./public/css/app.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<div class="card product-card border-0 shadow">
    <div class="row d-flex justify-content-center">
        <div class="item">
            <div class="box" style="background-image: url(<?= $data["Image"] ?>);">
                <div class="cover">
                    <button type="button" class="circular-btn me-2">
                        <i class="bi bi-search" style="font-size: 20px;"></i>
                    </button>
                    <button type="button" class="circular-btn">
                        <i class="bi bi-cart-plus" style="font-size: 20px;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="card-text text-center">
            <div class="product-name">
            <?= $data["Name"] ?></div>
            <div class="product-price mb-1"><?= $data["Price"] ?></div>
        </div>
    </div>
</div>