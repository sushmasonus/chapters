<?php
include 'header.php';
?>
<style type="text/css">
</style>
<div class = "container">
    <div class="wrapper">
        <form action="login_action.php" method="post" name="Login_Form" class="form-signin">
            <?php
            if(isset($_GET['error']) && $_GET['error']==1){
                ?>
                <div class="alert alert-danger">
                    Login Failed
                </div>
                <?php
            }
            ?>
            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
              <hr class="colorgraph"><br>

              <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

              <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
        </form>
    </div>
</div>
<?php
include 'footer.php';
