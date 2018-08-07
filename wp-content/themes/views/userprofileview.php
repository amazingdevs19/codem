  <?php include('header.tpl'); ?>
  <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile <a href="javascript:;" class="edit btn btn-sm btn-fill btn-info pull-right">Edit</a></h4>

                            </div>
                            <div class="content">
                            <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success"> 
  <button type="button" aria-hidden="true" class="close">×</button>     
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
                                <form method="post" id="profile" action="profile/create"  enctype="multipart/form-data"> <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstname" disabled class="form-control" placeholder="Name" value="<?=$firstname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" disabled class="form-control" placeholder="Last Name" value="<?= $lastname; ?>">
                                            </div>
                                        </div>

                                       <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" disabled class="form-control" placeholder="Username" value="<?= $username; ?>">
                                            </div>
                                        </div>
                                        -->
                                    </div>

                                    <div class="row">
                                     
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" disabled value="<?= $email; ?>" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile No</label>
                                                <input type="text" class="form-control" disabled placeholder="Mobile No" value="<?= $mobile; ?>" name="mobile">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Photo</label>

                                                <figure>
<div class="fileupload fileupload-new" data-provides="fileupload">

<span class="btn btn-file btn-primary btn-fill btn-sm">
<span class="fileupload-new">Change Photo</span>
<span class="fileupload-exists">Change</span><input type="file" name="user_image">
</span>
<a href="#" class="btn btn-default fileupload-exists btn-sm" data-dismiss="fileupload">Remove</a>
<div class="fileupload-preview fileupload-exists thumbnail" style="width: 80px; height: 80px;"></div>
<div class="fileupload-new thumbnail" style="width: 80px; height: 80px;">
<img src="<?= $picture_url; ?>" class="img-responsive" style="width: 100%; height: 100%;">
</div>

</div>
</figure>
                                                <input type="hidden" name="oldimage"  class="form-control"  value="<?= $picture_url; ?>">
                                            </div>
                                        </div>

                                    </div>

                                   
                                    <div class="row">
                                     <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select  disabled class="form-control" name="gender" >
                                                    <option <?php echo ($gender == 'Male')? 'selected': '';?>>Male</option>
                                                    <option <?php echo ($gender == 'Female')? 'selected': '';?>>Female</option>
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" disabled class="form-control" name="address" placeholder="Home Address" value="<?=$address; ?>" >
                                            </div>
                                        </div>
                                      <!--  <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Referral Code</label>
                                                <input type="number" name="referralcode" disabled value="<?=$referralcode; ?>" class="form-control" placeholder="Referral Code">
                                            </div>
                                        </div>
                                    -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" disabled class="form-control"  name="country" value="<?=$country?>">
                                                          <!--<select name="country" disabled class="form-control" onchange="selectState(this.options[this.selectedIndex].value)">
                                <option value="-1">Select Country</option>
                                <?php
                                foreach($list->result() as $listElement){
                                    ?>
                                    <option value="<?php echo $listElement->id?>" <?php echo ($listElement->country_name == $country)? 'selected': '';?>><?php echo $listElement->country_name?></option>
                                    <?php
                                }
                                ?>
                            </select>-->
                  
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" disabled class="form-control"  name="state" value="<?=$state?>">
                                                
                                               <!-- <select id="state_dropdown"  name="state" disabled class="form-control" onchange="selectCity(this.options[this.selectedIndex].value)">
                                <option value="-1">Select State</option>
                            </select>-->
                            <span id="state_loader"></span>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>

                            <!--<select id="city_dropdown" name="city" disabled class="form-control" >
                                <option value="-1">Select City</option>
                            </select>-->
                             <input type="text" disabled class="form-control"  name="city" value="<?=$city?>">
                                               
                            <span id="city_loader"></span>
         
                                                
                                            </div>
                                        </div>
                                    
                                    </div>

                                  

                                    <button type="submit" disabled class="btn  btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                                                 </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?= $picture_url; ?>" alt="..."/>

                                      <h4 class="title"><?= $firstname; ?> <?=$lastname; ?><br />
                                         <small><?= $username; ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 
                                <?= $country; ?> , <?=$city; ?>
                                 <br>
                                 <?=$address; ?>
                                 <br>
                                    <div class="referbox"><?=$referralcode?>
                                    <button id="copytext" onclick="copyToClipboard('#holdtext')" class="btn btn-primary btn-sm pull-right btn-fill">Copy</button>
                                    </div> 
                                    <TEXTAREA ID="holdtext" STYLE="display:none;"><?=$referralcode?>
                                    </TEXTAREA>
                                     <span id="copyAnswer"></span>              
                                </p>
                            </div>
                            <hr>
                             <div class="text-center">
                             <?php $url='https://www.wam360.com/auth/regiter/'.$referralcode;$text='Make your sharing refer point ';?>
                             <style type="text/css">
                                 .iconsize{font-size: 40px;  padding: 5px;}
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

                             </style>
                                <button  data-sharer="facebook" data-url="<?=$url?>" class="sharer btn btn-simple"><i class="fa fa-facebook-square iconsize facebook"></i></button>
                                <button  class="sharer btn btn-simple" data-sharer="twitter" data-title="<?=$text?>" data-hashtags="<?=$text?>" data-url="<?=$url?>"><i class="fa fa-twitter iconsize twitter"></i></button>
                                <button  class="sharer btn btn-simple"  data-sharer="googleplus" data-url="<?=$url?>"><i class="fa fa-google-plus-square iconsize google"></i></button>
                                <button  class="sharer btn btn-simple"  data-sharer="linkedin" data-url="<?=$url?>"><i class="fa fa-linkedin  iconsize linkedin"></i></button>


<?php $userreferral?>

                            </div>
                        <hr>
                        <!--Refer-->
            <?php if($this->session->flashdata('codemessage')){?>
                 <div class="alert alert-success"> 
            <button type="button" aria-hidden="true" class="close">×</button>     
              <?php echo $this->session->flashdata('codemessage')?>
              </div>
            <?php } ?>
                        
                        <?php if(empty($userreferral)){?>
                        <form action="profile/friendrefercode" method="post">
                        <div class="row">
                        <div class="col-md-8">
                                            <div class="form-group text-left">
                                               <label style="padding-top:15px;padding-left:10px;">Refer Code:</label>
 
                         <input type="text" name="frefer" placeholder="Enter Referral Code" style="width:60%" class="form-control pull-right">
                        </div></div>
                                <div class="col-md-4">
                                            <div class="form-group">
                                                <label></label>
                        <input type="submit" value="Save" class="btn btn-fill btn-warning">
                        </div>
                        </div>
                        </div>
                        </form>
<?php }?>
                        <!--End-->
                        </div>
                    </div>
                      <?php include('footer.tpl'); ?>
                      <script src="<?=base_url() ?>assets/js/sharer.min.js"></script>
                      <link href="<?php echo base_url(); ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" type="text/css"/>
                        <script src="<?php echo base_url(); ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.min.js" type="text/javascript"></script>

                      <script type="text/javascript">

                        function selectState(country_id){
    if(country_id!="-1"){
        loadData('state',country_id);
        $("#city_dropdown").html("<option value='-1'>Select City</option>");
    }else{
        $("#state_dropdown").html("<option value='-1'>Select State</option>");
        $("#city_dropdown").html("<option value='-1'>Select City</option>");
    }
}

function selectCity(state_id){
    if(state_id!="-1"){
        loadData('city',state_id);
    }else{
        $("#city_dropdown").html("<option value='-1'>Select City</option>");
    }
}

function loadData(loadType,loadId){
    var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
    $("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(500).html('Please wait... <img src="<?=base_url()?>assets/img/loader.gif" />');
    $.ajax({
        type: "POST",
        url: "common/loadData",
        data: dataString,
        cache: false,
        success: function(result){
            $("#"+loadType+"_loader").hide();
            $("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");
            $("#"+loadType+"_dropdown").append(result);
        }
    });
}

                          $(function(){
                             $(".edit").click(function(){
                               
                                $("input[type=text],select,button[type=submit]").prop("disabled", function( i, val ) {
                                        return !val;
                                    });
                                  
                             });   

                          });
                          // setup the varriables


function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $("#copyAnswer").html("CopyToClipboard");
  $temp.remove();
}
                      </script>