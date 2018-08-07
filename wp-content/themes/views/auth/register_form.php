
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>Register for free by WAM360</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro"/>

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard">

    <meta name="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <!-- Schema.org markup for Google+ -->
    
    <!-- Twitter Card data -->

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="<?php echo base_url(); ?><?php echo base_url(); ?>s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$29">
    <meta name="twitter:label2" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="../dashboard.html" />
    <meta property="og:image" content="<?php echo base_url(); ?><?php echo base_url(); ?>s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg"/>
    <meta property="og:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful." />
    <meta property="og:site_name" content="Creative Tim" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<style type="text/css">
.navbar {
   
    box-shadow: none !important;
}
    .connect-with-button {
        display: block;
    float: left;
    margin: 0;
    width: 132px;
    height: 33px;
    margin-left: 30px;
    margin-top: 15px;
}

.marginleft13 {
    margin-left: 13px;
}

.account-sprites {
    background: url("<?php echo base_url(); ?>images/social-buttons.png") no-repeat top left;
}

.account-sprites-facebook {
    background-position: 0 0;
}

.account-sprites-google {
    background-position: 0 -34px;
}
.error {
    color: #fff;
}
</style>
</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="<?php echo base_url('auth/login'); ?>">
                        Looking to login?
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper wrapper-full-page">
    <div class="full-page register-page" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/full-screen-image-2.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
        <?php
$email = array(
    'name'  => 'email',
    'id'    => 'email',
    'value' => set_value('email'),
    'maxlength' => 80,
    'class' => 'form-control',
    'placeholder'=>'Enter Email',
);
$firstname = array(
    'name'  => 'firstname',
    'id'    => 'firstname',
    'value' => set_value('firstname'),
    'maxlength' => 20,
    'class' => 'form-control',
    'placeholder'=>'Your First Name',
);
$lastname = array(
    'name'  => 'lastname',
    'id'    => 'lastname',
    'value' => set_value('lastname'),
    'maxlength' => 20,
    'class' => 'form-control',
    'placeholder'=>'Your Last Name',
);
$password = array(
    'name'  => 'password',
    'id'    => 'password',
    'value' => set_value('password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'class' => 'form-control',
    'placeholder'=>'Password',
);
$confirm_password = array(
    'name'  => 'confirm_password',
    'id'    => 'confirm_password',
    'value' => set_value('confirm_password'),
    'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
    'class' => 'form-control',
    'placeholder'=>'Confirm Password',
);
$captcha = array(
    'name'  => 'captcha',
    'id'    => 'captcha',
    'maxlength' => 8,
);


$error_message = '';
if( form_error($email['name']) !=''){
$error_message = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($email['name']) )."</small>";
}

if(isset($errors[$email['name']])){
$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$email['name']] )."</small>";
}

if( form_error($firstname['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($firstname['name'])."</small>";
}

if(isset($errors[$firstname['name']])){
$error_message .= "<small class=\"error\">".$errors[$firstname['name']]."</small>";
}

if( form_error($lastname['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($lastname['name'])."</small>";
}

if(isset($errors[$lastname['name']])){
$error_message .= "<small class=\"error\">".$errors[$lastname['name']]."</small>";
}

if( form_error($password['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($password['name'])."</small>";
}

if( form_error($confirm_password['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($confirm_password['name'])."</small>";
}

$captcha_content = '';
if ($captcha_registration) {
    if ($use_recaptcha) {
        $captcha_content = '
        <div id="account-signup-divider" class="shared-divider">
            <div class="shared-divider-label">
                <span>Confirmation Code</span>
            </div>
        </div>

        <div id="recaptcha_image"></div>
        <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type(\'audio\')">Get an audio CAPTCHA</a></div>
        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type(\'image\')">Get an image CAPTCHA</a></div>

        <div class="recaptcha_only_if_image">Enter the words above</div>
        <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
        <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

        <div id="account-signup-divider" class="shared-divider"></div>
        ';

        $captcha_content .= $recaptcha_html;
    } else {
        $captcha_content = '
        <div id="account-signup-divider" class="shared-divider">
            <div class="shared-divider-label">
                <span>Confirmation Code</span>
            </div>
        </div>

        <p>Enter the code exactly as it appears:</p>
        '.$captcha_html.'
        <p>'.form_label('Confirmation Code', $captcha['id']).'</p>
        <p>'.form_input($captcha).'</p>

        <div id="account-signup-divider" class="shared-divider"></div>
        ';
    }
}

if( form_error('recaptcha_response_field') !=''){
$error_message = "<small class=\"error\">".form_error('recaptcha_response_field')."</small>";
}

if( form_error($captcha['name']) !=''){
$error_message = "<small class=\"error\">".form_error($captcha['name'])."</small>";
}
?>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>WAM360</h2>
                            <h4>Register for free and experience the dashboard today</h4>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Free Account</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-graph1"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Awesome Performances</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="pe-7s-headphones"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Global Support</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

                            </div>
                        </div>

                    </div>

                    <!--
<?php echo $error_message; ?>

					<div class="row left10">

						<?php echo form_label('Email', $email['id']); ?>
							
							<div class="logbtn regbtn_margin">
								<button type="submit" id="loginBtn" class="nice radius button white">Register</button>
							</div>
						</form>
					</div>

					<div id="account-signup-divider" class="shared-divider">
						<div class="shared-divider-label">
							<span>or Register with</span>
						</div>
					</div>
					<div id="connect-with-buttons">
						<a href="/auth_oa2/session/facebook" class="connect-with-button account-sprites account-sprites-facebook" title="Facebook Connect"></a>
						<a href="/auth_oa2/session/google" class="connect-with-button marginleft13 account-sprites account-sprites-google" title="Google"></a>
					</div>
				</div>



                    -->
                    <div class="col-md-4 col-md-offset-s1">
                        	<?php echo form_open($this->uri->uri_string()); ?>
						
                            <div class="card card-plain">
                                <div class="content">
                               <input type="hidden" name="ref" value="<?= $ref;?>">
                                    <div class="form-group">
                                    <?php echo form_input($email); ?>
						            </div>
                                    <!--<div class="form-group">
                                    	<?php echo form_input($firstname); ?>
                                     </div>
                                    <div class="form-group">
                                        <?php echo form_input($lastname); ?>
                                   </div>-->
                                    <div class="form-group">
                                      <?php echo form_password($password); ?>
                                     </div>
                                    <div class="form-group">
                                     <?php echo form_password($confirm_password); ?>
									 </div>
                                    <div class="form-group">
                                    
							    <?php echo $captcha_content; ?>
							 </div>

                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Free Account</button>
                                </div>
                                <br>
                                <div id="connect-with-buttons">
                                
            <a href="<?php echo base_url(); ?>index.php/auth_oa2/session/facebook" class="connect-with-button account-sprites account-sprites-facebook" title="Facebook Connect"></a>
            <a href="<?php echo base_url(); ?>index.php/auth_oa2/session/google" class="connect-with-button marginleft13 account-sprites account-sprites-google" title="Google"></a>
            <br>
          </div>
              <br>                   <p><?php echo $error_message; ?></p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright text-center">
                    &copy; 2016 <a href="http://www.wam360.com/">WAM360</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>

</div>


    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>