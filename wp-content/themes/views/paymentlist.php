 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transfer owner ship Website  </title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         <div class="row">
         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Payment by Paypal List</h4>
                            </div>
                            <div class="content table-responsive ">

                  <table class="table table-bordered userlist">
                    <thead>
                      <tr class="active">
                       
                        <th style="width:5%;">No</th>
                        
                        <th style="width:15%;">Transaction</th>
                        <th style="width:10%;" class="text-right">Amount</th>
                        <th style="width:10%;">IP</th>
                        <th style="width:30%;">Pay Email</th>
                        <th style="width:10%;">Date</th>
                        <th style="width:10%;">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                     
                       <?php $id=1; $sum=0; foreach($paymentlist as $u): ?>
                        <tr>

                         <td><?=$id?></td>
                        
                        <td>
                        <?php echo $u->txn_id; ?>
                        </td>
                        <td class="text-right"> $<?php echo $u->payment_gross;$sum+=$u->payment_gross; ?></td>
                        <td> <?php echo $u->ipaddress; ?></td>
                        <td> <?php echo $u->payer_email; ?></td>
                        <td><span><?php echo date("d-M-Y", strtotime($u->currentdate)); ?></span></td>
                       <td>
                        <?=$u->payment_status ?>
                         
                       </td>
                       
      
      
          </tr>
      <?php $id++; endforeach; ?>
                       <tr><td colspan="2"></td><td colspan="2" class="text-left">Total : $<?= $sum ?> /-</td><td colspan="4"></td></tr>
                     
                    </tbody>
                  </table>
                 </div>
          </div>
</div>

</div>
</div>
</div>

  


    <?php include 'footer.tpl';?>