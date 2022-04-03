<?php
require APP_ROOT . '/views/inc/head.php';
?>

<div class="navbar">
    <?php
    require APP_ROOT . '/views/inc/nav.php';
    ?>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="<?php echo URL_ROOT; ?>/users/register"
>  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <b>Already registered ?</b> <br></b><a href="login.php">Login here</a></
                </div>  
            </div>  
        </div>  
    </div>  
</div>  