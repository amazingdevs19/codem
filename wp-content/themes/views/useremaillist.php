 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email List  </title>
    <?php include 'header.tpl';?>
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create Email Address </h4>
                            </div>
                            <div class="content">

                            <?php echo validation_errors(); ?>
                            <?php if (isset($message)) { ?>
                           <div class="alert alert-success">    <button type="button" aria-hidden="true" class="close">×</button>  <?=$message;?> </div><br>
                           <?php } ?>

                                <form method="post" action="">
                               <div class="row">
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label >
                                           Email 
                                        </label>

                                                <div class="input-group">
                                                   
                                                    <input type="text" placeholder="Username" name="username" class="form-control"> <span class="input-group-addon">@</span>
                                                </div>
                                           
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Domain Name</label>
                                        <input type="hidden" name="domainname">
                                        <select name="domain" class="form-control">
                                        <option value="0">--Select--</option>
                                        
                                          <?php
                                  
                                        foreach($dnslist as $row)
                                        {
                                            ?>
                                        <option value="<?=$row->domainid?>"><?=$row->domainname?></option>
                                        
                                      <?php } 
                                           ?>
                                          </select> 
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="pconfirm" placeholder="Password" class="form-control">
                                    </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label></label>
                                        <input type="button" name="generate" value="Generate" id="generate" class="btn btn-success btn-fill btn-sm">
                                        <input type="button" name="hidebtn" value="Show" id="hidebtn" class="btn btn-primary btn-fill btn-sm">
                                  
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label></label>
                                         <button type="submit" class="btn btn-fill btn-info pull-right">Submit</button>
                                    &nbsp;</div>
                                    </div>
                                    </div>
                                           </form>


                             </div>
                        </div>
         </div>

         <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email List</h4>
                            </div>
                            <div class="content table-responsive">

                            <table class="table  table-bordered" id="emaillist">
                                    <thead>
                                      <tr class="active"><th>ID</th>
                                      
                                     <!-- <th>Domain</th>-->
                                      <th  class="text-right">Email</th>
                                      <th  class="text-right">Password</th>
                                      <th  class="text-right">Date</th>
                                      <th  class="text-right">Last Update</th>

                                      <th class="text-right">Status</th>
                                      <th class="text-right">Action</th>
                                    </tr></thead>
                                    <tbody>
                                     <?php
                                      if (is_array($emaillist) && count($emaillist) > 0) 
                                      {
                                          $i=1;
                                        foreach($emaillist as $row)
                                        {?>
                                        <tr>
                                          <td><?= $i ?></td>
                                         <!-- <td><?= $row->domainname ?></td>
                                        -->
                                          <td  class="text-right">
                                         <?= $row->email ?>
                                         </td>
                                           <td  class="text-right">
                                          <a href="javascript:;" rel="tooltip" data-placement="top" title="<?= $row->password ?>"  >*************</a>
                                         </td>
                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->currentdate)) ?></td>
                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->lastdate)) ?></td>
                                          <td  class="text-right"><span class="label label-<?= $row->status=='1'?"success":"danger"; ?>"><?= $row->status=='1'?'Active':'Deactive'; ?></span></td>

                                         <td class="text-right">
                                         <a href="<?=base_url('index.php/property/emailedit/'.$row->did);?>"  rel="tooltip" data-placement="left" title="Payment" class="btn btn-simple btn-info btn-icon like"><i class="fa fa-edit text-success"></i></a>
                                         <a href="<?=base_url('index.php/property/loginemail/'.$row->did);?>"  rel="tooltip" data-placement="left" title="Payment" class="btn btn-simple btn-info btn-icon like">Login</a>
                                          <a href="<?=base_url('index.php/property/emaildelete/'.$row->did);?>" rel="tooltip" data-placement="left" title="Delete" class="btn btn-simple btn-danger btn-icon remove" onclick="return confirm('Are you sure to delete data?');" ><i class="fa fa-times"></i></a>
                                          </td>
                                          
                                         </tr>
                                         <?php $i++;} }
                                          else { ?>
                                          <tr><td colspan="8">Record Not Found</td></tr>
                                          <?php } ?>
                                              </tbody>
                                </table>



                                 </div>
                                </div>
                                 </div>


          
          </div>
          </div>
        </div>
    <?php include 'footer.tpl';?>  
    <script type="text/javascript">
        $(function(){
        $("select[name='domain']").change(function(){
           $("input[name='domainname']").val($("select[name='domain'] option:selected").text());
        });
        $("#generate").click(function(){
           $("input[name='pconfirm'],input[name='password']").val(generatePassword());
        });
        $("#hidebtn").click(function(){
            if($(this).val()=='Show'){
                $(this).val("Hide");
                $("input[name='pconfirm'],input[name='password']").attr('type','text');
                }
                else
                {
                    $(this).val("Show");
                $("input[name='pconfirm'],input[name='password']").attr('type','password');
                
                }
        }); 
        function generatePassword() {
        var length = 12,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()",
        retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        return retVal;
        }
         }); 
    </script>
</div>
