<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
</head>
<body>

<body onbeforeunload="doUnload()" onmousedown="somefunction()">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>">WAM360</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
           
            
            <li><a href="#contact">Upgrade</a></li>
           
          </ul> 
         
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?=base_url('auth/login')?>" >Login</a></li>
             <li><a href="#about">Help</a></li>
           
          </ul>
           
        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br><br>
    <div class="container">

      

<style> body{overflow: none;}
#loading-img {
    background: url(<?= base_url('assets/img/loading.gif')?>) #fff center center no-repeat;
    height: 100%;
    z-index: 20;
}
.window {
    border: 1px solid rgb(195, 195, 195);
    width: 90%;
    border-radius: 4px;
    -webkit-box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
    -moz-box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
    box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
    text-align: left;
    vertical-align: top;
    margin: 0 20px;
    animation: zoom 500ms;
    -webkit-animation: zoom 500ms;
}
.window {
  height: 245px;
  display: inline-block;
}

.window .header {
  padding: 0 9px;
  line-height: 30px;
  vertical-align: top;
  padding: 9px 9px 0;
}

.window .header .title {
  font: 11px "Myriad Pro", "Arial";
}

.editor .title {
  text-align: center;
  display: inline-block;
  width: 75%;
  color: #766F79;
  vertical-align: middle;
}

.editor .body {
  padding: 18px 10px;
}

.editor .code {
  font: 11px Monaco, Courier New;
  color: #ccc;
}

.editor .code .code {
  color: #777;
}

.editor .code li {
  padding: 3px 0;
}

.editor .code .fn {
  color: #4A90E2;
}

.editor .code .v {
  color: #7ED321;
}

.editor .code .io {
  color: #000;
}

.window .bullet {
  height: 11px;
  width: 11px;
  display: inline-block;
  background: #ccc;
  border-radius: 100%;
  vertical-align: middle;
  margin-right: 5px;
}

.window .bullet-red {
  background: #DF7065;
}

.window .bullet-yellow {
  background: #E6BB46;
}

.window .bullet-green {
  background: #5BCC8B;
}

.browser .header {
  background: #E8E8E8;
  border-radius: 4px 4px 0 0;
  padding-bottom: 3px;
}

.browser .header .title {
  background: #fff;
  display: inline-block;
  width: 85%;
  border-radius: 4px;
  padding: 6px 14px 4px;
  margin-left: 10px;
  vertical-align: middle;
}

.browser .header .title .scheme {
  color: #7ED321;
}

.browser .body {
  padding: 16px;
  font: 11px "Lucida Grande", "Open Sans";
}

.browser .tweets {
  margin: 0;
  height: 150px;
  overflow-y: auto;
}

.browser .tweets li {
  height: 27px;
  line-height: 27px;
  width: 368px;
  vertical-align: middle;
  color: #4B434D;
  list-style-type: none;
  margin-bottom: 14px;
}

.browser .tweets img {
  width: 27px;
  height: 27px;
  border-radius: 100%;
  float: left;
  margin-right: 10px;
}

.browser .tweets .tweet {
  max-width: 300px;
  overflow: hidden;
  display: inline-block;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.browser .tweets .time {
  color: #9B9B9B;
  float: right;
}

.browser .tweets .new {
  animation: drop 500ms;
  -webkit-animation: drop 500ms;
}


@-webkit-keyframes zoom {
  0%   { opacity: 0; -webkit-transform: scale(1.15); }
  100% { opacity: 1; -webkit-transform: scale(1); }
}

@-webkit-keyframes drop {
  0%   { opacity: 0; -webkit-transform: translateY(-20px); }
  100% { opacity: 1; -webkit-transform: translateY(0px); }
}

@keyframes zoom {
  0%   { opacity: 0; transform: scale(1.15); }
  100% { opacity: 1; transform: scale(1); }
}

@keyframes drop {
  0%   { opacity: 0; transform: translateY(-20px); }
  100% { opacity: 1; transform: translateY(0px); }
}
#loading-img {
    background: url(<?=base_url('assets/img/loading.gif')?>) center center no-repeat;
    height: 100%;
    z-index: 9999;
}

.overlay {
    background: #fff;
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    z-index: 1003;
}
.ifreame {
    background: #fff;
  
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    z-index: 1004;
    overflow: none;
}
.blink-text {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {  
  50% { opacity: 0; }
}
.progress {
    display: block;
    text-align: center;
    width: 0;
    height: 6px;
    background: red;
    transition: width .3s;
}
.progress.hide {
    opacity: 0;
    transition: opacity 1.3s;
}
</style>
<div class="overlay"><p class="text-center blink-text">Creating Website, Please Wait :)</p>
    <div id="loading-img">
         
    </div>

</div>
<div class="progress"></div>
<div class="createview">
<div class="row">
 <div class="col-md-6">
     <div class="card card-wizard" id="wizardCard">
                            <form id="wizardForm" method="" action="#">

                            <div class="header text-center">
                                <h3 class="title">Create WebSite</h3>
                                <p class="category">Split a complicated flow in multiple steps</p>
                            </div>

                    <div class="content">
                        <ul class="nav">
                        <li><a href="#tab1" data-toggle="tab">Website</a></li>
                       
                      </ul>

                      <div class="tab-content">
                          <div class="tab-pane" id="tab1">
                                        <h5 class="text-center">Please tell us more about yourself.</h5>
                                        
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="form-group">
                                                    <label class="control-label">WebSite Name<star>*</star></label>
                                                    <input type="hidden" name="templateid" value="<?php echo  $templateid; ?>">
                                                     <input type="hidden" name="templatename" id="templatename" value="<?php echo  $templatename; ?>">
                                                    <input class="form-control" type="text" name="websitetitle"
                                                            placeholder="ex:Website Name"  />
                                                </div>
                                            </div>
                                        </div>

                          </div>

                          

                        <div class="tab-pane" id="tab3">
                          <h2 class="text-center text-space"><span class="finaltitle"></span> <br><small> Click on "<b>Finish</b>" to join our community</small></h2>
                          </div>

                      </div>
                    </div>

                    <div class="footer">
                                <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Back</button>
 <button type="button" class="btn btn-info btn-fill btn-wd btn-finish pull-right" onclick="onFinishWizard()">Finish</button>
                                <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Next</button>
                               

                                <div class="clearfix"></div>
                    </div>
                            </form>

                        </div>
                   </div>
                  

<div class="col-md-6">
<div class="window browser fading">
          <div class="header">
            <span class="bullet bullet-red"></span><span class="bullet bullet-yellow"></span><span class="bullet bullet-green"></span><span class="title"><span class="scheme">https://</span><span class="webtitle">yourwebsite</span>.wam360.com <a href="#" data-toggle="popover" title="custom domain"  data-placement="bottom" data-trigger="hover" data-content="Some content inside the popover" class="pull-right">custom domain</a></span>
          </div>
          <div class="body">
            
          </div>
        </div>
   </div>
</div>
</div>
<div class="ifreame" style="display:none;">
<nav role="navigation" class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?=base_url();?>" class="navbar-brand">Wam360</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=base_url('auth/login');?>">Save</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
 <div class="col-md-12">
  <iframe id="main_frame"  width="100%" height="100%" style="height:100vh" frameborder="0"></iframe>
 </div>
 </div>
 </div> 
  <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Forms Validations Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
      <!-- Sweet Alert 2 plugin -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
    <!-- Wizard Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
    
   
    <script type="text/javascript">



       $(function(){

        var $validator = $("#wizardForm").validate(
            {
                rules: {
                        websitetitle: 
                        {
                        required: true,
                        minlength: 5,
                        maxlength:10,
                        noSpace: true
                        }
            }
           });
        jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");
 $(".overlay").hide();
        //
         $('[data-toggle="popover"]').popover(); 
        $(window).bind("beforeunload", function() { 
         return confirm("Do you really want to close?"); 
        });
          
          $("input[name=websitetitle]").keyup(function(){
          var li=$(".webtitle").text($(this).val());
          });
            
       $('#wizardCard').bootstrapWizard({
              tabClass: 'nav nav-pills',
              nextSelector: '.btn-next',
              previousSelector: '.btn-back',
    
                onInit : function(tab, navigation, index){
                   //check number of tabs and fill the entire row
                    var $total = navigation.find('li').length;
                    $width = 100/$total;
                    $display_width = $(document).width();
                    if($display_width < 600 && $total > 3){
                       $width = 50;
                    }
                    navigation.find('li').css('width',$width + '%');
                },
                onTabClick : function(tab, navigation, index){
                    // Disable the posibility to click on tabs
                    return false;
                },
                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;
                   var wizard = navigation.closest('.card-wizard');
                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                      $(wizard).find('.btn-back').hide();
                        $(wizard).find('.btn-next').hide();
                        $(wizard).find('.btn-finish').show();
                        $(".finaltitle").text($(".webtitle").text());
                    }
                }

            });

        });

        function onFinishWizard(){
          
           var $valid = $('#wizardForm').valid();
                if(!$valid) {
                  $validator.focusInvalid();
                  return false;
                }
                 $(".overlay").show();
            var formData = new FormData();
            formData.append('sessionid', '<?=$guestuser?>');
            formData.append('templateid', $('input[name=templateid]').val());
            formData.append('websitetitle', $('input[name=websitetitle]').val());
             formData.append('templatename', $('#templatename').val());
            $.ajax({  url : '<?= base_url() ?>index.php/home/createwebsite',
                        type : 'POST',
                        data : formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false,  // tell jQuery not to set contentType
            success : function(data) {
        
              if(data=='Unique'){
                $(".overlay").hide();
               //swal("Unique Website Name", "Unique Website Name :)", "error");
               $('.card-wizard').find('.btn-finish').show();

              }else{
           if(data=='ok'){
            
            $(".overlay").hide();
           //here you can do something, sent the form to server via ajax and show a success message with swal
           // swal("Good job!", "You clicked the finish button!", "success");
             var themename= $('#templatename').val();
            var websitename=$('input[name=websitetitle]').val();
           
             // alert(websitename);
            $(".createview").hide();
            $(".ifreame").show();
              $("body").attr('class','sidebar-mini');
            var url="<?=base_url('/welcome/wplogin?webname=')?>"+websitename+"";
           // alert(url);
            $("#main_frame").attr('src',url);
       
             
            $(".overlay").hide();
            $('.card-wizard').find('.btn-finish').hide();
 }
          }
        }
            });

          
           //swal("Good job!", "Webstie is ready Click Login", "success");
            $(".overlay").hide();
            $(".finaltitle").text($(".webtitle").text());

           

        }


var isClose = false;
        //need to handle more cases like ctrl+R whose codes are not listed here
document.onkeydown = checkKeycode
function checkKeycode(e) {
var keycode;
if (window.event)
keycode = window.event.keyCode;
else if (e)
keycode = e.which;
if(keycode == 116)
{
isClose = true;
}
}
function somefunction()
{
isClose = true;
}
function doUnload()
{
if(!isClose)
{
alert('window is closing');
}
}
         window.onbeforeunload = function(){
          $.ajax({  url : '<?= base_url() ?>/home/tempweb',
                        type : 'POST',
                        data : {webname:$('input[name=websitetitle]').val()},
                        processData: false,  // tell jQuery not to process the data
                        contentType: false,  // tell jQuery not to set contentType
            success : function(data) {
        }});
}
    </script>

    </div> <!-- /container -->


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/585d4fb27418a41587c243f9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>
</html>