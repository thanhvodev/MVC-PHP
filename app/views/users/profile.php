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
                        <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/updateData">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input name="username" class="form-control" id="username" type="text"
                                    placeholder="Enter your username" value="<?php echo $_SESSION['username'] ?>">
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="address">Địa chỉ</label>
                                    <input name="address" class="form-control" id="address" type="text"
                                        placeholder="Enter your organization name"
                                        value="<?php echo $_SESSION['address'] ?>">
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input name="email" class="form-control" id="email" type="email"
                                    placeholder="Enter your email address" value="<?php echo $_SESSION['email'] ?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="phonenum">Số điện thoại</label>
                                    <input name="phonenum" class="form-control" id="phonenum" type="tel"
                                        placeholder="Enter your phone number"
                                        value="<?php echo $_SESSION['phonenum'] ?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">Đổi mật khẩu</div>
                    <div class="card-body">
                        <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/updatePassword">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="password">Nhập mật khẩu cũ</label>
                                <input name="password" class="form-control" id="password" type="password"
                                    placeholder="Mật khẩu cũ...">
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="newpass">Nhập mật khẩu mới</label>
                                    <input name="newpass" class="form-control" id="newpass" type="password"
                                        placeholder="Mật khẩu mới...">
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="confirmpassword">Nhập lại mật khẩu
                                    mới</label>
                                <input name="confirmpassword" class="form-control" id="confirmpassword" type="password"
                                    placeholder="Mật khẩu mới...">
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Cập nhật mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>