<div class="modal fade LoginModal" id="SignUpModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--  -->

            <div class="modal-body registration">
                <div>
                    <h3 style="text-align: center; font-size: 20px; letter-spacing: 1px; margin: 20px 0px;">ĐĂNG KÝ
                    </h3>
                </div>
                <div>
                    <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/register">
                        <input class="form-control" type="text" placeholder="Tên của bạn" name="username" required />
                        <input class="form-control" type="email" placeholder="Địa chỉ Email" name="email" required />
                        <input class="form-control" type="password" placeholder="Mật khẩu" name="password"
                            pattern=".{8,}" title="Eight or more characters" required />
                        <input class="form-control" type="password" placeholder="Xác nhận mật khẩu"
                            name="confirmPassword" pattern=".{8,}" title="Nhập 8 kí tự trở lên" required />
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="registercheckbox" required>
                            <label class="form-check-label" for="registercheckbox">
                                Tôi đồng ý với các điều khoản của website
                            </label>
                        </div>
                        <button type="submit" class="loginbtn" value="Register" name="register">ĐĂNG KÝ</button>
                    </form>
                </div>
                <div>
                    <p class="boxortheraction">
                        <button data-bs-toggle="modal" data-bs-target="#LoginModal" class="linkbtn">Quay lại đăng nhập</button>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>