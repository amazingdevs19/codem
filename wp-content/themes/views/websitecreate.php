
<?php include('header.tpl'); ?>

<style>

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
    z-index: 10999;
}
.ifreame {
    background: #fff;
  
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 1;
    z-index: 10999;
}
.blink-text {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {  
  50% { opacity: 0; }
}
</style>
<div class="ifreame" style="display:none;">
<div class="row">
 <div class="col-md-12">
  <iframe id="main_frame"  width="100%" height="100%" style="height:100vh" frameborder="0"></iframe>
 </div>
 </div>
 </div>
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
                                                    <input class="form-control" type="text" name="websitetitle"
                                                            placeholder="ex:Website Name"  />
                                                             <input type="hidden" name="templatename" id="templatename" value="<?php echo  $templatename; ?>">
                                                </div>
                                            </div>
                                        </div>

            					    </div>

            					    <div class="tab-pane" id="tab2">
                                        <h5 class="text-center">Please give us more details about your platform.</h5>
                                       
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label class="control-label">Logo</label>
                                                    <input class="form-control"
                                                           type="file"
                                                           name="websitelogo"
                                                           placeholder="ex: "
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Description<star>*</star></label>


                                                   <textarea rows="8" cols="61" id="websitedescription"  name="websitedescription">test</textarea>

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
                                 <button type="button" class="btn btn-info btn-fill btn-wd btn-finish pull-right" onclick="onFinishWizard()">Finish</button>

                              
                                <div class="clearfix"></div>
            				</div>
                            </form>

                        </div>
                   </div>
                  

<div class="col-md-6">
<div class="window browser fading">
          <div class="header">
            <span class="bullet bullet-red"></span><span class="bullet bullet-yellow"></span><span class="bullet bullet-green"></span><span class="title"><span class="scheme">https://</span><span class="webtitle">yourwebsite</span>.wam360.com <a href="<?=base_url('website-list')?>" data-toggle="popover" title="custom domain"  data-placement="bottom" data-trigger="hover" data-content="Some content inside the popover" class="pull-right">custom domain</a></span>
          </div>
          <div class="body">
            <ul id="tweets" class="tweets"></ul>
          </div>
        </div>
   </div>
</div>
</div>

 <div class="overlay"><p class="text-center blink-text">Creating Website, Please Wait :)</p>
    <div id="loading-img">
         
    </div>

</div>

<?php include('footer.tpl'); ?>
<!--  Forms Validations Plugin -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
      <!-- Sweet Alert 2 plugin -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
    <!-- Wizard Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
    <!-- ckeditor Plugin    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>-->
 
    
    <script type="text/javascript">
       // var editor = CKEDITOR.replace('websitedescription');
        $(function(){ $('[data-toggle="popover"]').popover(); 
       $(".overlay").hide();
 jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value.indexOf(" ") < 0 && value != ""; 
}, "No space please and don't leave it empty");

        $("input[name=websitetitle]").keyup(function(){
            var li=$(".webtitle").text($(this).val());
            //$(".webtitle").text('yourwebsite');
            });
            var $validator = $("#wizardForm").validate({
    		  rules: {
    		   
    		       websitetitle: {
    		        required: true,
                    minlength: 5,
                    maxlength:10,
                    noSpace:true
                }
    		   ,
    		  }
    		});



            // you can also use the nav-pills-[blue | azure | green | orange | red] for a different color of wizard

            $('#wizardCard').bootstrapWizard({
            	tabClass: 'nav nav-pills',
            	nextSelector: '.btn-next',
                previousSelector: '.btn-back',
            	onNext: function(tab, navigation, index) {
            		var $valid = $('#wizardForm').valid();
            		if(!$valid) {
            			$validator.focusInvalid();
            			return false;
            		}
            	},
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
                    } else if($current == 1){
                        $(wizard).find('.btn-back').hide();
                    } else {
                        $(wizard).find('.btn-back').show();
                        $(wizard).find('.btn-next').show();
                        $(wizard).find('.btn-finish').hide();
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
       
        $('.card-wizard').find('.btn-finish').hide();
        $(".overlay").show();
            var formData = new FormData();
            formData.append('websitelogo', 'sample.jpg');
            formData.append('templateid', $('input[name=templateid]').val());
            formData.append('websitetitle', $('input[name=websitetitle]').val());
             formData.append('templatename', $('#templatename').val());
            formData.append('websitedescription','sample');
            $("#loadingMessage").show();
            $.ajax({url : '<?= base_url() ?>index.php/welcome/savewebsite',
                        type : 'POST',
                        data : formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false,  // tell jQuery not to set contentType
            success : function(data) {
              console.log(data);
   if(data=='Unique'){$(".overlay").hide();
    swal("Unique Website Name", "Unique Website Name :)", "error");
     $('.card-wizard').find('.btn-finish').show();

   }else{
           if(data=='ok'){
            
            $(".overlay").hide();
           //here you can do something, sent the form to server via ajax and show a success message with swal
            swal("Good job!", "You clicked the finish button!", "success");
             var themename= $('#templatename').val();
            var websitename=$('input[name=websitetitle]').val();
             // alert(websitename);
            $(".createview").hide();
            $(".ifreame").show();
              $("body").attr('class','sidebar-mini');
            var url="http://testing.wam360.com/index.php/welcome/wplogin?webname="+websitename;
           // alert(url);
            $("#main_frame").attr('src',url);
            // alert(themename);
           /* $.ajax({
                method: 'POST',
                url: '<?=base_url()?>/child_theme/childtheme.php',
                data: {folderName: themename,websitename:websitename},
                success: function(data) {
                    //console.log(data); //"The directory has been created."
                  //  location.href = '<?=base_url()?>domain/'+$('input[name=websitetitle]').val();
                }
            });*/
             
            $(".overlay").hide();
            $('.card-wizard').find('.btn-finish').hide();
 }
 else{
  $(".overlay").hide();
 swal("Max Website limit 3", "Your limit over is safe :)", "error");
 $('.card-wizard').find('.btn-finish').show();
 }
}
            }
            });
            
            $(".finaltitle").text($(".webtitle").text());

           

        }
    </script>
</html>
