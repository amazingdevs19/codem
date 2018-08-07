 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Refer Point List  </title>
    <?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Refer Point List</h4>
                            </div>
                            <div class="content table-responsive ">
                                <table class="table  table-striped" id="websitelist">
                                    <thead>
                                      <tr><th>ID</th>
                                      <th>Full Name</th>
                                      <th>Email ID</th>
                                      <th  class="text-right">Credit</th>
                                      <th  class="text-right">Date</th>
                                      <th class="text-right">Status</th>
                                    </tr></thead>
                                    <tbody>
                                     <?php
                                      if (is_array($history) && count($history) > 0) 
                                      {
                                          $i=1;
                                        foreach($history as $row)
                                        {?>
                                        <tr>
                                          <td><?= $i ?></td>
                                          <td><?= $row->firstname.' '.$row->lastname ?></td>
                                          <td><?= $row->email ?></td>
                                          <td  class="text-right"><?php if($row->credit!=0){echo '+ '.$row->credit;} ?></td>
                                         

                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->currentdate)) ?></td>
                                          <td class="text-right"><span class="label label-<?php if($row->status=='1'){echo"success";}else{echo"danger";} ?>"><?= $row->status?'Active':'Deactive'; ?></span>   </td>
                                         </tr>
                                         <?php $i++;}
?>
                                          <tr><td colspan="3"></td><td colspan="1" class="text-right">Total: <?= $sum ?> /-</td><td colspan="3"></td></tr>

<?php
                                          }
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
  
</div>
  