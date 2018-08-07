<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo-fav.png">
    <title>WAM360 Admin Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
   <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="<?php echo base_url(); ?>assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
              <div class="panel-body">           <?php

if (isset($error_message)) {
?>
<div role="alert" class="alert alert-danger alert-simple alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><?php echo $error_message;?>
                  </div>
   

<?php }
echo validation_errors();
?>
      <form class="form-horizontal m-t-20" action="" method="post">
        
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="username" id="username" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password"  name="password" id="password" required="" placeholder="Password">
          </div>
        </div>

        <div class="form-group row login-tools">
                      <div class="col-xs-6 login-remember">
                        <div class="be-checkbox">
                          <input type="checkbox" id="checkbox-signup">
                          <label for="checkbox-signup">Remember Me</label>
                        </div>
                      </div>
                      <div class="col-xs-6 login-forgot-password"><a href="admin/forgot">Forgot Password?</a></div>
                    </div>

       
        <div class="form-group text-center m-t-40">
          <div class="col-xs-12">
            <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <div class="form-group m-t-30 m-b-0">
          <div class="col-sm-12 text-center">
           <?php  ?>
          </div>
        </div>
      </form>
   </div>
            </div>
            <div class="splash-footer"><span> 2016 © WAM360.</span></div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
      });
      
    </script>
  </body>
   
</html>
