    <div class="login">

        <form action="login.php" method="post" name="login_form">
            <fieldset>
                <div class="logo">
                    <!-- <a href="http://localhost/ios-admin/admindashboard.php"> -->
                    <!-- <img src="<?php //echo base_url(); ?>assets/images/studiobooth.png" /> -->
                    <h3>Marathon Forever</h3>
                    <!-- </a> -->
                </div>
                <div class="field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" />
                </div>
                <div class="field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="action">
                    <input type="submit" value="Login" onclick="formhash(this.form, this.form.password); return false;" />
                    <!-- <a href="javascript:void(0);" class="forgot-password-link">Forgot Password?</a> -->
                    <div style="clear:both;"></div>
                </div>
            </fieldset>
            <!-- <pre>
							</pre> -->
        </form>
    </div>
    <div class="forgot-password">
        <form action="" method="post" onsubmit="return ValidateForgotPassword();" name="forgot_pass_form">
            <fieldset>
                <div class="logo">
                    <a href="http://localhost/ios-admin/admindashboard.php"><img src="<?php echo base_url(); ?>assets/images/studiobooth.png" />
                    </a>
                </div>
                <b>Note:</b> Reset password link will be send on your registered email id.
                <br />
                <br />
                <div id="forgot-pass-result"></div>
                <div class="field">
                    <label for="email">Registered Email:</label>
                    <input type="email" id="registered_email" name="registered_email" required />
                </div>
                <div class="action">
                    <input type="submit" value="Send mail" />
                    <a href="javascript:void(0);" class="forgot-password-login">Login?</a>
                    <div style="clear:both;"></div>
                </div>
            </fieldset>
        </form>
    </div>