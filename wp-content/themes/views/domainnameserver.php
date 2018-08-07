 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Domain Name Server List  </title>
    <?php include 'header.tpl';?>
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Domain Name Server </h4>
                            </div>
                            <div class="content">

                <?php echo validation_errors(); ?>
                <?php if (isset($message)) { ?>
                <div class="alert alert-success">  <button type="button" aria-hidden="true" class="close">×</button> data inserted successfully</div><br>
                <?php } ?>
                                <form method="post" action="">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Domain Name</label>
                                        <input type="hidden" name="subdomainid" value="<?=$domainid?>">
                                        <input type="text" placeholder="Enter Domain Name" name="domainname" class="form-control">
                                    </div>
                                    </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label >
                                           IPAddress 
                                        </label>

                                                
                                                    <input type="text" readonly name="ipaddress" value="<?=$ipaddress?>" class="form-control">
                                                <span class="help-block">copy paste ip domain DNS</span>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                    
                                </form>


                             </div>
                        </div>
         </div>

         <div class="col-md-6"  style="display: none">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Domain Name List</h4>
                            </div>
                            <div class="content" style="display: none">

                            <table class="table  table-striped" id="emaillist">
                                    <thead>
                                      <tr><th>ID</th>
                                      
                                      <th>Domain</th>
                                      <th  class="text-right">Email</th>
                                      <th  class="text-right">Password</th>
                                      <th  class="text-right">Date</th>
                                      <th  class="text-right">Last Update</th>
                                      <th class="text-right">Status</th>
                                      <th class="text-right">Action</th>
                                    </tr></thead>
                                    <tbody>
                                     <?php
                                      if (is_array($dnslist) && count($dnslist) > 0) 
                                      {
                                          $i=1;
                                        foreach($dnslist as $row)
                                        {?>
                                        <tr>
                                          <td><?= $i ?></td>
                                          <td><?= $row->domain ?></td>
                                        
                                          <td  class="text-right">
                                         
                                         </td>
                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->createdate)) ?></td>
                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->expired)) ?></td>
                                          <td  class="text-right"><span class="label label-<?= $row->status=='1'?"success":"danger"; ?>"><?= $row->status=='1'?'Active':'Deactive'; ?></span></td>

                                         <td class="text-right">
                                         <a href="<?=base_url('index.php/property/emailedit/'.$row->websiteid);?>"  rel="tooltip" data-placement="left" title="Payment" class="btn btn-simple btn-info btn-icon like">Edit</a>
                                          <a href="<?=base_url('index.php/property/emaildelete/'.$row->websiteid);?>" rel="tooltip" data-placement="left" title="Delete" class="btn btn-simple btn-danger btn-icon remove" onclick="return confirm('Are you sure to delete data?');" ><i class="fa fa-times"></i></a>
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
