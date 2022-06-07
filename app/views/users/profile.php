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
        $("#upLoadButton").hide();
        // $("#fileToUpload").click(function() {
        //     $("#upLoadButton").show();
        // });
        $(document).on('change', '#fileToUpload', function() {
            $("#upLoadButton").show();
        })
    });
    </script>
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <form>
                <input class="nav-link" type="submit" value="Profile" style="border: none; color: #fd871d;">
            </form>
            <form action="<?php echo URL_ROOT; ?>/users/seeOrders" method="post">
                <input class="nav-link" type="submit" value="Đơn hàng" style="border: none; color: #fd871d;">
            </form> <!-- <a class="nav-link" href="#" target="__blank">Địa chỉ</a> -->
            <!-- <a class="nav-link" href="#" target="__blank">Thông báo</a> -->
            <!-- <a class="nav-link" href="./logout" target="__blank">Đăng xuất</a> -->
            <form action="<?php echo URL_ROOT; ?>/users/logout" method="post">
                <input class="nav-link" type="submit" value="Đăng xuất" style="border: none; color: #fd871d;">
            </form>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Ảnh đại diện</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid img-account-profile rounded-circle mb-2" alt=""
                            srcset="<?php echo URL_ROOT; ?>/public/imgs/<?php echo $_SESSION['image'] ?>">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <form action="<?php echo URL_ROOT; ?>/users/uploadImage" method="post"
                            enctype="multipart/form-data">
                            <button class="btn btn-primary" type="submit" name="submit" id="upLoadButton">Upload new
                                image</button>
                            <input class="mt-4" type="file" name="fileToUpload" id="fileToUpload">
                        </form>
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
                                <label class="small mb-1" for="inputUsername">Tên người dùng</label>
                                <input name="username" class="form-control" id="username" type="text"
                                    placeholder="Tên người dùng" value="<?php echo $_SESSION['username'] ?>" required>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="address">Địa chỉ</label>
                                    <input name="address" class="form-control" id="address" type="text"
                                        placeholder="Địa chỉ" value="<?php echo $_SESSION['address'] ?>" required>
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input name="email" class="form-control" id="email" type="email" placeholder="Email"
                                    value="<?php echo $_SESSION['email'] ?>" required>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="phonenum">Số điện thoại</label>
                                    <input name="phonenum" class="form-control" id="phonenum" type="tel"
                                        placeholder="Số điện thoại" value="<?php echo $_SESSION['phonenum'] ?>"
                                        pattern="[0-9]{8,}" title="Have more than 8 numbers and don't contain letters"
                                        required>
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-choose" type="submit">Lưu thay đổi</button>
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
                                    placeholder="Mật khẩu cũ..." pattern=".{8,}" title="Eight or more characters"
                                    required>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="newpass">Nhập mật khẩu mới</label>
                                    <input name="newpass" class="form-control" id="newpass" type="password"
                                        placeholder="Mật khẩu mới..." pattern=".{8,}" title="Eight or more characters"
                                        required>
                                </div>
                                <!-- Form Group (location)-->
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="confirmpassword">Nhập lại mật khẩu
                                    mới</label>
                                <input name="confirmpassword" class="form-control" id="confirmpassword" type="password"
                                    placeholder="Mật khẩu mới..." pattern=".{8,}" title="Eight or more characters"
                                    required>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-choose" type="submit">Cập nhật mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>