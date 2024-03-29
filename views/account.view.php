

<section class="main-container col1-layout">
    <div class="main container">
        
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
        </div>
        <?php  endif ?>
        <?php
        if(isset($_SESSION['error'])):?>
        <div class="alert alert-danger">
            <?php
                echo $_SESSION['error'];
                unset($_SESSION['error'])
            ?>
        </div>
        <?php endif ?>
        <div class="page-content">          
            <div class="account-login">
                <div class="box-authentication">
                    <form action="account.php" type="post">
                        <h4>Sign Up</h4>
                        <p class="before-login-text">Welcome back! Sign in to your account</p>

                        <label for="username_login">Username<span class="required">*</span></label>
                        <input id="username_login" type="text" class="form-control" value="" name="username">

                        <label for="emmail_login">Email address<span class="required">*</span></label>
                        <input id="emmail_login" type="text" class="form-control" value=""name="email">

                        <label for="password_login">Password<span class="required">*</span></label>
                        <input id="password_login" type="password" class="form-control" value="" name="password">

                        <p class="forgot-pass"><a href="#">Lost your password?</a></p>
                       
                        <input type="submit" name="submit"value="">
                        
                       
                        <!-- <label class="inline" for="rememberme">
                            <input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me
                        </label> -->
                    </form>
                </div>
                <div class="box-authentication">
                    <h4>Register</h4><p>Create your very own account</p> 											
                    <label for="emmail_register">Email address<span class="required">*</span></label>
                    <input id="emmail_register" type="text" class="form-control">
                    <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                    
                        <div class="register-benefits">
                            <h5>Sign up today and you will be able to :</h5>
                            <ul>
                                <li>Speed your way through checkout</li>
                                <li>Track your orders easily</li>
                                <li>Keep a record of all your purchases</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>

    </div>
</section>