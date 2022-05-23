<div class="modal fade LoginModal" id="ForgotPassModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--  -->

            <div class="modal-body registration">
                <div>
                    <h3 style="text-align: center; font-size: 20px; letter-spacing: 1px; margin: 20px 0px;">RESET YOUR
                        PASSWORD</h3>
                </div>
                <div>
                    <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/resetPassword">
                        <input class="form-control" type="email" placeholder="Email Address" id="email" name="email"
                            required />
                        <button type="submit" class="loginbtn">SUBMIT</button>
                    </form>
                </div>
                <div>
                    <p class="boxortheraction">
                        <button data-bs-toggle="modal" data-bs-target="#LoginModal" class="linkbtn">Cancel</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>