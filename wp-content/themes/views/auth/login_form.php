

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8" />

  <title>User Login :WAM360</title>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="icon" type="image/png" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/assets/img/favicon.ico">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
     <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro"/>
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard">
    <meta name="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <!-- Schema.org markup for Google+ -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$29">
    <meta name="twitter:label2" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="../dashboard.html" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg"/>
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
.error {
    color: #fff;
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
            <a class="navbar-brand" href="http://www.wam360.com">WAM360</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="<?php echo base_url('index.php/auth/register'); ?>">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/full-screen-image-1.jpg" >

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
<?php
$login = array(
    'name'  => 'login',
    'id'    => 'login',
    'value' => set_value('login'),
    'class' => 'form-control',
  'placeholder'=>'Enter Email',
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or login';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'form-control',
  'placeholder'=>'Password'
);
$remember = array(
    'name'  => 'remember',
    'id'    => 'remember',
    'value' => 1,
    'checked'   => set_value('remember'),
  'data-toggle '=>'checkbox',
);
$captcha = array(
    'name'  => 'captcha',
    'id'    => 'captcha',
    'maxlength' => 8,
);


$error_message = '';
if( form_error($login['name']) !=''){
$error_message = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($login['name']) )."</small>";
}

if(isset($errors[$login['name']])){
$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$login['name']] )."</small>";
}

if( form_error($password['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($password['name'])."</small>";
}

if(isset($errors[$password['name']])){
$error_message .= "<small class=\"error\">".$errors[$password['name']]."</small>";
}

$captcha_content = '';
if ($show_captcha) {
    if ($use_recaptcha) {
        $captcha_content = '<div class="form-group">
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
        <input type="text" id="recaptcha_response_field" class="form-control" placeholder="Enter Word" name="recaptcha_response_field" />

        <div id="account-signup-divider" class="shared-divider"></div>
        </div>';

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
        <?php echo form_open($this->uri->uri_string()); ?>

                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                <div class="content">
                               
                                          <?php echo $error_message; ?>
                                    <div class="form-group">
                                        <label>Email address</label>
                                      <?php echo form_input($login); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                         <?php echo form_password($password); ?>
                                    </div>
                                     <?php echo $captcha_content; ?>
                                    <div class="form-group">
                                        <label class="checkbox">
                                               <?php echo form_checkbox($remember); ?>
              
                                            remember <a href="<?php echo base_url(); ?>index.php/auth/forgot_password/" class="pull-right">forgot</a>
                                        </label>
                                         
                                    </div>
                                </div>
                                <div class="footer text-center">
                                  
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Login</button>
                                <br>
                                <div id="connect-with-buttons">
                                
            <a href="<?php echo base_url(); ?>index.php/auth_oa2/session/facebook" class="connect-with-button account-sprites account-sprites-facebook" title="Facebook Connect"></a>
            <a href="<?php echo base_url(); ?>index.php/auth_oa2/session/google" class="connect-with-button marginleft13 account-sprites account-sprites-google" title="Google"></a>
            <br>
          </div>
          </div></div>
                           

                        </form>

                    </div>
                </div>
            </div>
        </div>

      <footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.wam360.com/">wam360</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>



    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>


  <!--  Forms Validations Plugin -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>

  

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
  <script src="<?php echo base_url(); ?>assets/js/light-bootstrap-dashboard.js"></script>

  <!--   Sharrre Library    -->
 <script src="<?php echo base_url(); ?>assets/js/jquery.sharrre.js"></script>

  <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
            
        });
    </script>

</body>
  </html>
