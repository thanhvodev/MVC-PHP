<div class="usergroup">
    <a href=<?php if(array_key_exists("user_id", $_SESSION)) echo "./users/profile"; else echo "./users/login";  ?>>
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
            <!-- <CartItem01 />
            <CartItem01 />
            <CartItem01 />
            <CartItem01 />
            <CartItem01 /> -->
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

    <button type="button" class="hidden-btn normal-circle-btn">
        <i style="font-size: 20px;" class="far fa-sign-out-alt"></i>
    </button>
</div>