<?php
require APP_ROOT . '/views/inc/head.php';
?>

<body>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="#" target="__blank">Profile</a>
            <a class="nav-link" href="#" target="__blank">Đơn hàng</a>
            <a class="nav-link" href="#" target="__blank">Địa chỉ</a>
            <a class="nav-link" href="#" target="__blank">Thông báo</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Ảnh đại diện</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid img-account-profile rounded-circle mb-2"
                            src="<?php echo $_SESSION['image'] ?>" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Chi tiết tài khoản</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input class="form-control" id="inputUsername" type="text"
                                    placeholder="Enter your username" value="<?php echo $_SESSION['username'] ?>">
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputOrgName">Địa chỉ</label>
                                    <input class="form-control" id="inputOrgName" type="text"
                                        placeholder="Enter your organization name"
                                        value="<?php echo $_SESSION['address'] ?>">
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="<?php echo $_SESSION['email'] ?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputPhone">Số điện thoại</label>
                                    <input class="form-control" id="inputPhone" type="tel"
                                        placeholder="Enter your phone number"
                                        value="<?php echo $_SESSION['phonenum'] ?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Đổi mật khẩu</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nhập mật khẩu cũ</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Mật khẩu cũ...">
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputOrgName">Nhập mật khẩu mới</label>
                                    <input class="form-control" id="inputOrgName" type="text"
                                        placeholder="Mật khẩu mới...">
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Nhập lại mật khẩu mới</label>
                                <input class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Mật khẩu mới...">
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="button">Cập nhật mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>