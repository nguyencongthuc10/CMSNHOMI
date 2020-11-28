<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-389">
  <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://shtheme.com/demosd/travelguidewp/" id="logo">
                       <img src="../1647/images/logo_login.png" width="170" height="30" alt="" data-retina="true"></a>
                </div>
                <div class="col-sm-8">
                    <a href="https://shtheme.com/demosd/travelguidewp/" class="btn_home pull-right"><i class="icon_house_alt"></i></a>
                </div>
            </div>
        </div>
    </header>
    <div class="container margin_30">
        <div class="row">
            <div class="col-md-12">
                  <p><img src="http://shtheme.com/demosd/travelguidewp/wp-content/uploads/2017/03/bg_login.png" width="377" height="150" alt="" class="img-responsive" style="margin:auto;">
                  </p>
            </div>
        </div>
         
        <div class="row">
  
           <div class="col-lg-4 col-lg-offset-2 col-sm-6"> 
<div id="wpcrlLoginSection" class="container-fluid">
       
        <div class="box_login">
                            <strong><i class="icon_key_alt"></i><h3>Login</h3></strong>
                <form name="wpcrlLoginForm" id="wpcrlLoginForm" method="post" class="">
                    <div id="wpcrl-login-loader-info" class="wpcrl-loader" style="display:none;">
                        <img src="https://shtheme.com/demosd/travelguidewp/wp-content/plugins/wp-custom-register-login/public/images/ajax-loader.gif"/>
                        <span>Please wait ...</span>
                    </div>
                    <div id="wpcrl-login-alert" class="alert alert-danger" role="alert" style="display:none;"></div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="wpcrl_username" id="wpcrl_username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="wpcrl_password" id="wpcrl_password" placeholder="Password" >
                    </div>
                                        <input type="hidden" name="redirection_url" id="redirection_url" value="https://shtheme.com/demosd/travelguidewp/?page_id=389" />

                    <input type="hidden" id="wpcrl_login_nonce" name="wpcrl_login_nonce" value="16eb887cc7" /><input type="hidden" name="_wp_http_referer" value="/demosd/travelguidewp/?page_id=389" />                    <button type="submit" class="btn btn-primary">Login</button>
                                        <button id="btnForgotPassword" type="button" class="btn btn-primary">Forgot Password</button>
                                    </form>
                <div id="wpcrlResetPasswordSection" class=" hidden">
                        <h3>Reset Password</h3>

            <div id="wpcrl-resetpassword-loader-info" class="wpcrl-loader" style="display:none;">
                <img src="https://shtheme.com/demosd/travelguidewp/wp-content/plugins/wp-custom-register-login/public/images/ajax-loader.gif"/>
                <span>Please wait ...</span>
            </div>
            <div id="wpcrl-resetpassword-alert" class="alert alert-danger" role="alert" style="display:none;"></div>

            <form name="wpcrlResetPasswordForm" id="wpcrlResetPasswordForm" method="post">
                                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="wpcrl_rp_email" id="wpcrl_rp_email" placeholder="Email">
                    </div>
                    <input type="hidden" name="wpcrl_current_url" id="wpcrl_current_url" value="https://shtheme.com/demosd/travelguidewp/?page_id=389" />
                                    <input type="hidden" id="wpcrl_resetpassword_nonce" name="wpcrl_resetpassword_nonce" value="7d5620fc52" /><input type="hidden" name="_wp_http_referer" value="/demosd/travelguidewp/?page_id=389" />                <button type="submit" class="btn btn-primary">Reset Password</button>
                <button type="button" id="btnReturnToLogin" class="btn btn-primary">Return to Login</button>

            </form>
</div>
            
                        </div>
        
        
        </div>
</div>
 <div class="col-lg-4 col-sm-6"> 
<div id="wpcrlRegisterSection" class="container-fluid">
       
        <div class="box_login">
            <strong><i class="icon_lock-open_alt"></i><h3>Register</h3></strong>

                <form name="wpcrlRegisterForm" id="wpcrlRegisterForm" method="post">

                    <div id="wpcrl-reg-loader-info" class="wpcrl-loader" style="display:none;">
                        <img src="https://shtheme.com/demosd/travelguidewp/wp-content/plugins/wp-custom-register-login/public/images/ajax-loader.gif"/>
                        <span>Please wait ...</span>
                    </div>
                    <div id="wpcrl-register-alert" class="alert alert-danger" role="alert" style="display:none;"></div>
                    <div id="wpcrl-mail-alert" class="alert alert-danger" role="alert" style="display:none;"></div>
                                        <div class="form-group">
                        <label for="firstname">First name</label>
                        <sup class="wpcrl-required-asterisk">*</sup>
                        <input type="text" class="form-control" name="wpcrl_fname" id="wpcrl_fname" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" name="wpcrl_lname" id="wpcrl_lname" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <sup class="wpcrl-required-asterisk">*</sup>
                        <input type="text" class="form-control" name="wpcrl_username" id="wpcrl_username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <sup class="wpcrl-required-asterisk">*</sup>
                        <input type="text" class="form-control" name="wpcrl_email" id="wpcrl_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <sup class="wpcrl-required-asterisk">*</sup>
                        <input type="password" class="form-control" name="wpcrl_password" id="wpcrl_password" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <label for="confrim password">Confirm Password</label>
                        <sup class="wpcrl-required-asterisk">*</sup>
                        <input type="password" class="form-control" name="wpcrl_password2" id="wpcrl_password2" placeholder="Confirm Password" >
                    </div>

                                            <div class="form-group">
                            <label class="control-label" id="captchaOperation"></label>

                            <input type="text" placeholder="Captcha answer" class="form-control" name="wpcrl_captcha" />

                        </div>
                    
                    <input type="hidden" name="wpcrl_current_url" id="wpcrl_current_url" value="https://shtheme.com/demosd/travelguidewp/?page_id=389" />
                    <input type="hidden" name="redirection_url" id="redirection_url" value="https://shtheme.com/demosd/travelguidewp/?page_id=389" />

                    <input type="hidden" id="wpcrl_register_nonce" name="wpcrl_register_nonce" value="633fcda988" /><input type="hidden" name="_wp_http_referer" value="/demosd/travelguidewp/?page_id=389" />                    <button type="submit" class="btn btn-primary">
                        Register</button>
                </form>
                        </div>
    </div>
</div>
<p></p>
      
    </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
                                                    © TravelGuide 2017 - All Rights Reserved                                     
            </div>
        </div>
        <!-- End row -->
    </div>
</div>