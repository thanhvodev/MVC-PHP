<div class="modal fade LoginModal" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--  -->

            <div class="modal-body registration">
                <div class="logologin">
                    <img srcset="http://localhost/MVC-PHP/public/imgs/logo.png" />
                </div>
                <div>
                    <h3 style="text-align: center; font-size: 20px; letter-spacing: 1px; margin-bottom: 20px;">Great to have you back!</h3>
                </div>
                <div>
                    <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/login">
                        <input class="form-control" type="email" placeholder="Email Address" name="email" required/>
                        <input class="form-control" type="password" placeholder="Password" name="password" required/>
                        <div sytle="margin-bottom: 20px;">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#ForgotPassModal" class="linkbtn">Forgot your password ?</button>
                        </div>
                        <button type="submit" class="loginbtn" value="Sign In" name="signin">LOG IN</button>
                    </form>
                </div>
                <div>
                    <p class="boxortheraction">
                        Don't have an account ?
                        <button data-bs-toggle="modal" data-bs-target="#SignUpModal" class="linkbtn">Register now</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>