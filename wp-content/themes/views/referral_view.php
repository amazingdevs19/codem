 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Refer list  </title>


<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Refer List</h4>
                            </div>
                            <div class="content">
                                <?php if($this->session->flashdata('email')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('email')?>
  </div>
<?php } ?>
                        <form method="post" action="referral" novalidate>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input name="maillist" type="email"  class="tagsinput form-control tag-azure tag-fill"  >
                                        https://www.wam360.com/auth/regiter/<?=$referralcode?>
                                    </div>
                                    


                                    <input type="submit" class="btn btn-fill btn-info" value="Send"> <div class="pull-right">
<div class="referbox">Code : <?=$referralcode?>
                                    <button id="copytext" onclick="copyToClipboard('#holdtext')" class="btn btn-primary btn-sm pull-right btn-fill">Copy</button>
                                    </div> 
                                    <TEXTAREA ID="holdtext" STYLE="display:none;"><?=$referralcode?>
                                    </TEXTAREA>
                                     <span id="copyAnswer"></span>  
                                     </div>
                                </form>

                            </div>
                        </div>
                    </div>
          <!--col6 end-->
             <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Share with </h4>
                            </div>
                            <div class="content text-center">
                           <br><br>
                            <?php $url='https://www.wam360.com/auth/regiter/'.$referralcode;$text='Make your sharing refer point ';?>
                             <style type="text/css">
                                 .iconsize{font-size: 40px;  padding: 5px; width: 80px;}
                                 .facebook{color: #305190;}
                                 .google{color: #ea4335;}
                                 .twitter{color: #4285f4;}
                                 .linkedin{color: #0077b5;}
                                 .referbox{
                                    background-color: #f1f1f1;
                                    border: 1px solid #e3e3e3;
                                 padding: 5px 10px;
                                 height: 42px;
                                 
                                 font-size: 20px;
                                 font-weight: bold;
                                 
                                 }
                                 .referbox span{
                                    background-color: #5fba7d;
                                    float: right; padding: 2px;
                                    color: #fff;
                                 }
.btn .fa {
    width: 45px;
}
                             </style>
                                <button  data-sharer="facebook" data-url="<?=$url?>" class="sharer btn btn-simple"><i class="fa fa-facebook-square iconsize facebook"></i></button>
                                <button  class="sharer btn btn-simple" data-sharer="twitter" data-title="<?=$text?>" data-hashtags="<?=$text?>" data-url="<?=$url?>"><i class="fa fa-twitter iconsize twitter"></i></button>
                                <button  class="sharer btn btn-simple"  data-sharer="googleplus" data-url="<?=$url?>"><i class="fa fa-google-plus-square iconsize google"></i></button>
                                <button  class="sharer btn btn-simple"  data-sharer="linkedin" data-url="<?=$url?>"><i class="fa fa-linkedin  iconsize linkedin"></i></button>
                           
                          <br><br><br>
                            </div>
                        </div>
                    </div>
          <!--col6 end-->

          
          </div>
          </div>
          </div>
          <?php include 'footer.tpl';?>
          </div>
<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
  <script src="<?=base_url() ?>assets/js/bootstrap-checkbox-radio-switch-tags.js"></script>
  <script src="<?=base_url() ?>assets/js/sharer.min.js"></script>
  <script type="text/javascript">
    
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $("#copyAnswer").html("CopyToClipboard");
  $temp.remove();
}
  </script>


         