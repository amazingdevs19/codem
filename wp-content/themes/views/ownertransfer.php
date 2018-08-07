 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transfer owner ship Website  </title>
<?php include 'header.tpl';?>     

<link href='<?= base_url()?>assets/css/jquery.lighter.css' rel='stylesheet' type='text/css'>           
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Webstie List</h4>
                            </div>
                            <div class="content table-responsive ">
                                <table class="table  table-bordered" id="websitelist">
                                    <thead>
                                      <tr class="active"><th>ID</th>
                                      <th>Category</th>
                                      <th>WebSite Title</th>
                                      <th  class="text-right">Logo</th>
                                      <th  class="text-right">Status</th>
                                      <th  class="text-right">Date</th>
                                      <th class="text-right">Actions</th>
                                    </tr></thead>
                                    <tbody>
                                     <?php
                                      if (is_array($websitelist) && count($websitelist) > 0) 
                                      {
                                          $i=1;
                                        foreach($websitelist as $row)
                                        {?>
                                        <tr>
                                          <td><?= $i ?></td>
                                          <td><?= $row->templatename ?></td>
                                          <td><?= $row->websitetitle ?></td>
                                          <td  class="text-right"> <a class='sample' data-height='720' data-lighter='<?= base_url() ?>/images/weblogo/<?= $row->websitelogo ?>' data-width='1280' href='<?= base_url() ?>/images/weblogo/<?= $row->websitelogo ?>'><img src="<?= base_url() ?>/images/weblogo/<?= $row->websitelogo ?>" width="50" height="50" alt="bussness" ></a></td>
                                          <td  class="text-right"><span class="label label-<?= $row->status=='1'?"success":"danger"; ?>"><?= $row->status=='1'?'Active':'Deactive'; ?></span></td>

                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->createdate)) ?></td>
                                          <td class="text-right">
                                 
                                  <a href="<?= base_url('index.php/welcome/member/'.$row->websiteid)?>"  rel="tooltip" data-placement="left" title="Transfer Website" class="btn btn-simple btn-primary btn-icon edit transfer"><i class="fa fa-users"></i></a>
                                 
                                          </td>
                                         </tr>
                                         <?php $i++;} }
                                          else { ?>
                                          <tr><td colspan="7">Record Not Found</td></tr>
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
    <script src='<?= base_url()?>assets/js/jquery.lighter.js' type='text/javascript'></script>
</div>
   <script type="text/javascript">
    $(function(){
      $('.zoom').imageTooltip();
     });
    </script>