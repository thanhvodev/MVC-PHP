<script src="<?= URL_ROOT ?>/js/product.js" type="text/javascript"></script>

<body>
    <div class="product-detail">
        <div class="headProduct" style="height: auto">
            <div class="container">
                <a href="<?php echo URL_ROOT ?>/">
                    <button type="button">
                        Home
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <a href="<?php
                            if ($data["Type"] == 1) {
                                echo URL_ROOT . "/products/detail/food";
                            } else {
                                echo URL_ROOT . "/products/detail/equipment";
                            }
                            ?>  /">
                    <button type="button">
                        <?php
                        if ($data["Type"] == 1) {
                            echo "Thực phẩm dinh dưỡng";
                        } else {
                            echo "Dụng cụ tập luyện";
                        }
                        ?>
                    </button>
                </a>
                <p>
                    <i class="fas fa-angle-right"></i>
                </p>
                <p class="title">
                    <?php
                    echo $data["Name"];
                    ?>
                </p>
            </div>
            <div class='row mainInfo pt-3' style="width: 100%">
                <div class='col-md-6 col-sm-12'>
                    <?php
                    require_once APP_ROOT . '/views/products/Detail/productImage.php';
                    ?>
                </div>
                <div class='col-md-6 col-sm-12'>
                    <?php
                    require_once APP_ROOT . '/views/products/Detail/description.php';
                    ?>
                </div>
            </div>
            <div class='feedback pt-5'>
                <div class='divider mt-5'></div>
                <div class='title'><?php echo "Đánh giá của khách hàng (" . count($data["Feedbacks"]) . ")"; ?></div>
                <div class='blog-title-hr'></div>
                <div class='row feedbacklist' style="width: 100%">
                    <?php
                    require_once APP_ROOT . '/views/products/Detail/feedback.php';
                    ?>
                </div>
                <div class="rate text-center mt-5">
                    <button type="button" class="btn btn-choose" data-bs-toggle="modal" data-bs-target="#addFeedback">Thêm đánh giá</button>
                    <div class="modal fade" id="addFeedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addFeedbackLabel"><?php echo "Đánh giá cho " . $data["Name"]; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    if (!array_key_exists("user_id", $_SESSION)) {
                                        echo "<div style='color: #fd7e14'>Vui lòng đăng nhập để đánh giá sản phẩm!</div>";
                                    } else {
                                        echo "
                                        <div class='row d-flex justify-content-center align-items-center'>
                                        <i class='col-1 bi bi-person-circle' style='font-size: 2rem; color: #ff871d;'></i>
                                        <h5 class='col-2'>" . $_SESSION['username'] . "</h5>";
                                        echo "
                                    <form method='POST'>
                                        <label for=\"exampleFormControlTextarea1\" class=\"form-label\" style='color: #fd7e14'>Vui lòng chọn sao và điền nội dung đánh giá dưới đây!</label>
                                        <div class='rating'>
                                            <input type='hidden' name='rating' class='rating__result' value='1'></input>
                                            <i class='rating__star fas fa-star'></i>
                                            <i class='rating__star fas fa-star'></i>
                                            <i class='rating__star fas fa-star'></i>
                                            <i class='rating__star fas fa-star'></i>
                                            <i class='rating__star fas fa-star'></i>
                                        </div>";
                                        echo "
                                        <textarea class=\"form-control mt-3\" name='content' rows=\"3\" required></textarea>
                                        <button type='button' class='btn btn-secondary mt-3' data-bs-dismiss='modal'>Hủy</button>
                                        <button type='submit' class='btn btn-choose mt-3' name='feedback'>Lưu đánh giá</button>
                                    </form></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const ratingStars = [...document.getElementsByClassName("rating__star")];
    const ratingResult = document.querySelector(".rating__result");

    function executeRating(stars, result) {
        const starClassActive = "rating__star fas fa-star";
        const starClassUnactive = "rating__star far fa-star";
        const starsLength = stars.length;
        let i;
        result.setAttribute('value', 5)
        stars.map((star) => {
            star.onclick = () => {
                i = stars.indexOf(star);

                if (star.className.indexOf(starClassUnactive) !== -1) {
                    result.setAttribute('value', i + 1)
                    for (i; i >= 0; --i) {
                        stars[i].className = starClassActive;
                    }
                } else {
                    result.setAttribute('value', i)
                    for (i; i < starsLength; ++i) {
                        stars[i].className = starClassUnactive;
                    }
                }
            };
        });
        result.setAttribute('value', rating)
    }

    executeRating(ratingStars, ratingResult);
</script>