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
                    <h3 style="text-align: center; font-size: 20px; letter-spacing: 1px; margin: 20px 0px;">REGISTER
                    </h3>
                </div>
                <div>
                    <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/register">
                        <input class="form-control" type="text" placeholder="Enter Your Name" name="username" required />
                        <input class="form-control" type="email" placeholder="Email Address" name="email" required />
                        <input class="form-control" type="password" placeholder="Enter Password" name="password"
                            pattern=".{8,}" title="Eight or more characters" required />
                        <input class="form-control" type="password" placeholder="Comfirm Password"
                            name="confirmPassword" pattern=".{8,}" title="Eight or more characters" required />
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="registercheckbox" required>
                            <label class="form-check-label" for="registercheckbox">
                                I agree all statements in Terms of service
                            </label>
                        </div>
                        <button type="submit" class="loginbtn" value="Register" name="register">REGISTER</button>
                    </form>
                </div>
                <div>
                    <p class="boxortheraction">
                        <button data-bs-toggle="modal" data-bs-target="#LoginModal" class="linkbtn">Back to
                            login</button>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>