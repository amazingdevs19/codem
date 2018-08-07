 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transfer owner ship Website  </title>
    <style type="text/css">
      .post
{
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 0 0 1px #CCC;
}

.post .content1
{
    padding: 15px;
}
.post .author
{
    font-size: 11px;
    color: #737373;
    padding: 25px 30px 20px;
}
.post .post-img-content
{
    height: 280px;
    position: relative;
}
.post .post-img-content img
{
    position: absolute;
}
.post .post-title
{
    display: table-cell;
    vertical-align: bottom;
    z-index: 2;
    position: relative;
}
.post .post-title b
{
    background-color: rgba(51, 51, 51, 0.58);
    display: inline-block;
    margin-bottom: 5px;
    color: #FFF;
    padding: 10px 15px;
    margin-top: 5px;
}

    </style>
<?php include 'header.tpl';?>     

<link href='<?= base_url()?>assets/css/jquery.lighter.css' rel='stylesheet' type='text/css'>           
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Other Email ID</h4>
                            </div>
                            <div class="content  " style="padding: 20px">
                                
                                  <form>
                                   

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="text" class="form-control" name="email" placeholder="Enter Other Email " >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Confirm Email</label>
                                                <input type="text" class="form-control" name="cemail" placeholder="Enter Other Email Confirm " >
                                            </div>
                                        </div>
                                    </div>

                                  

                                    <button type="button" id="submit" value="Submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
                                     <div id="result"></div>
                                </form>



                            </div>
                        </div>
                    </div>

                 <div class="col-md-6">
                                
                                     <?php
                                      if (is_array($websitelist) && count($websitelist) > 0) 
                                      {
                                          $i=1;
                                        foreach($websitelist as $row)
                                        {?>


                                        <div class="col-sm-12 col-md-12">
            <div class="post">
                <div class="post-img-content">
                    <img src="<?= base_url() ?>/images/weblogo/<?= $row->websitelogo ?>" class="img-responsive" />
                    <span class="post-title"><b><?= $row->templatename ?></b><br />
                        <b><?= $row->websitetitle ?></b></span>
                </div>
                <div class="content1">
                    <div class="author">
                        
                        <time datetime="<?=  date("d-m-Y", strtotime($row->createdate)) ?>"><?=  date("d-m-Y", strtotime($row->createdate)) ?></time>
                    </div>
                    <div>
                       <?= $row->websitedescription ?>
                    </div>
                    <div class="pull-right ">
                       <span class="label label-<?= $row->status=='1'?"success":"danger"; ?>"><?= $row->status=='1'?'Active':'Deactive'; ?></span>

                    </div>  <br>
                </div>
            </div>
        </div>

                                       
                                         <?php $i++;} }
                                          else { ?>
                                         Record Not Found
                                          <?php } ?>
                                            



                            </div>
                        </div>
                    </div>


                

          
          </div>
          </div>
</div>


  


    <?php include 'footer.tpl';?>
   
</div>
   <!-- Sweet Alert 2 plugin -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
   <script type="text/javascript">
    $(function(){
      jQuery.extend({
      postJSON: function( url, data, callback) {
      return jQuery.post(url, data, callback, "json");
     }  
    });


      $("#submit").click(function(){

        var password = $("input[name='email']").val();
        if(password == $("input[name='cemail']").val()){
          $.postJSON('<?=base_url('index.php/welcome/checkemail');?>',{email:password} , function(data) {
          if(data=="")
          {

          swal("Email do not match", "not Register Email ID ",  "error"); 
          }
            else{
          $.each(data, function(idx, obj) {
          $("#result").html("<br><table class='table table-bordered othercustomer' ><tr><td><input type='hidden' name='websiteid' id='websiteid' value='<?=$websiteid?>'><input type='hidden' id='cid' value='"+obj.id+"'>First Name</td><td>"+obj.firstname+"</td></tr><tr><td>Last Name</td><td>"+obj.lastname+"</td></tr><tr><td>Email</td><td>"+obj.email+"</td></tr><tr><td colspan='2'><span class='label label-success'>Verified</span><input type='button' name='finalsubmit' value='Confirm' class='btn btn-fill btn-success pull-right'></td></tr></table>");
  
          });
          }
        });
      }
      else
      {
      swal("Email do not match", "Enter same Email",  "warning"); 
       $("#result").html("");
      }
      });


      ///
      $("#result").on("click","input[name='finalsubmit']",function(){
      swal({  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonText: "Yes, Transfer it!",
                  cancelButtonText: "No, cancel plx!",
                  closeOnConfirm: false,
                  closeOnCancel: false
                },function(isConfirm){
                    if (isConfirm){

                      $.post('<?=base_url('index.php/welcome/finaltransfer');?>',{cid:$("#cid").val(),websiteid:$("#websiteid").val()} , function(data) {
                        swal("Transfer!", "Your Subdomain Transfer.", "success");
                           });
                      
                    }else{
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
      });

     });
    </script>