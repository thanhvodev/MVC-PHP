<div class="col-5 left-hidden">
    <button class="btnmenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#hidden-navbar" aria-controls="hiddenNavbar">
        <i class="fad fa-bars"></i>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" id="hidden-navbar" aria-labelledby="hiddenNavbarLabel">
        <div class="offcanvas-header">
            <h5 id="hiddenNavbarLabel"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="headbody">
                <button type="button" class="active">
                    <i style="margin-right: 20px;" class="fad fa-bars"></i> MENU
                </button>
                
                <button type="button" onClick={handleBackToLogin}>
                    <i style="margin-right: 20px;" class="far fa-user"></i> LOGIN
                </button>
                
                <!-- <button type="button">
                    <a href="#">
                    <i style="margin-right: 20px;" class="far fa-user"></i> USER
                    </a>
                </button> -->
                
            </div>

            <div class="links">
                <a to="/">
                <button type="button">Home</button>
                </a>
                <a to="/">
                <button type="button">
                    Products
                </button>
                </a>
                <a to="/">
                <button type="button">
                    About Us
                </button>
                </a>
                <a to="/">
                <button type="button">
                    Events
                </button>
                </a>
                <a to="/">
                <button type="button">Blog</button>
                </a>
            </div>

            
            <button type="button" id="logoutbtn">
                <AiOutlineLogout size={25} /> LOGOUT
            </button>

        </div>
        <div class="offcanvas-footer">
            <button id="offtabs" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                CLOSE
            </button>
        </div>
    </div>
</div>