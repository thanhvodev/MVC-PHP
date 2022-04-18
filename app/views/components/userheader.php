<div class="usergroup">
    <a href=<?php if(array_key_exists("user_id", $_SESSION)) echo  URL_ROOT."/users/profile"; else echo  URL_ROOT."/users/login";  ?>>
        <button type="button" class="hidden-btn normal-circle-btn">
            <i class="far fa-user"></i>
        </button>
    </a>
    <button type="button" class="normal-circle-btn" data-bs-toggle="offcanvas" data-bs-target="#cartRight"
        aria-controls="offcanvasRight">
        <i class="fas fa-shopping-cart"></i>
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="cartRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <p></p>
            <h5 id="offcanvasRightLabel">
                Shopping Cart
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class='rootCartItem01'>
                <div class="content">
                    <div class='imgItem'>
                        <img src='https://cdn.shopify.com/s/files/1/0554/5784/1199/products/8.png?v=1639708148' />
                    </div>
                    <div class='inforItem'>
                        <h3>Sport Suit Fitness 4</h3>
                        <h4>QTY : 1</h4>
                        <p>$50.00</p>
                    </div>
                    <div class='delete'>
                        <button type="button">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class='rootCartItem01'>
                <div class="content">
                    <div class='imgItem'>
                        <img src='https://cdn.shopify.com/s/files/1/0554/5784/1199/products/8.png?v=1639708148' />
                    </div>
                    <div class='inforItem'>
                        <h3>Sport Suit Fitness 4</h3>
                        <h4>QTY : 1</h4>
                        <p>$50.00</p>
                    </div>
                    <div class='delete'>
                        <button type="button">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer">
            <div class="totalcart">
                <h3>Total:</h3>
                <p>$100.00</p>
            </div>
            <div class="checkoutcart">
                <div class="checkoutitem">
                    <button class="checkoutitembtn view" type="button">
                        VIEW CART
                    </button>
                </div>
                <div class="checkoutitem">
                    <button class="checkoutitembtn" type="button">
                        CHECK OUT
                    </button>
                </div>
            </div>
        </div>
    </div>
    <form action="<?php echo URL_ROOT; ?>/users/logout" method="post">
        <button type="submit" class="hidden-btn normal-circle-btn" value="Đăng xuất">
            <i style="font-size: 20px;" class="fas fa-sign-out"></i>
        </button>
    </form>
</div>