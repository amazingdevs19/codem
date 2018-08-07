
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container forgot-password">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="<?php echo base_url(); ?>assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Forgot your password?</span></div>
              <div class="panel-body">
                <form action="adminforgot" method="get">
                  <p>Don't worry, we'll send you an email to reset your password.</p>
                  <div class="form-group xs-pt-20">
                    <input type="email" name="email" required="" placeholder="Your Email" autocomplete="off" class="form-control">
                  </div>
                  <p class="xs-pt-5 xs-pb-20">Don't remember your email? <a href="#">Contact Support</a>.</p>
                  <div class="form-group xs-pt-5">
                    <button type="submit" class="btn btn-block btn-primary btn-xl">Reset Password</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="splash-footer">&copy; 2016  WAM360</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?=base_url()?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      
      });
    </script>
  </body>
</html>