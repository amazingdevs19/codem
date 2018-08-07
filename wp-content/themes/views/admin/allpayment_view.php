<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Payment List</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/jquery.gritter/css/jquery.gritter.css"/>
    <?php include('header.tpl'); ?>
  

      <div class="be-content">
       
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Payment list
                
                
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover userlist">
                    <thead>
                      <tr>
                       
                        <th style="width:20%;">User</th>
                        <th style="width:17%;">Email ID</th>
                        <th style="width:15%;">Transaction</th>
                        <th style="width:10%;">Amount</th>
                        <th style="width:10%;">IP</th>
                        <th style="width:10%;">Pay Email</th>
                        <th style="width:10%;">Date</th>
                        <th style="width:10%;">Status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                     
                       <?php foreach($allpayment as $u): ?>
                        <tr>

                         <td><span><?php echo $u->firstname." ". $u->lastname; ?></span></td>
                        <td>   <?php echo $u->email; ?></td>
                        <td>
                        <?php echo $u->txn_id; ?>
                        </td>
                        <td> $<?php echo $u->payment_gross; ?></td>
                        <td> <?php echo $u->ipaddress; ?></td>
                        <td> <?php echo $u->payer_email; ?></td>
                        <td><span><?php echo date("d-M-Y", strtotime($u->currentdate)); ?></span></td>
                       <td>
                        <?=$u->payment_status ?>
                         
                       </td>
                        <td>
                       
                        </td>
      
      
          </tr>
      <?php endforeach; ?>
                       <tr><td colspan="2"></td><td colspan="2" class="text-right">Total : $<?= $total ?> /-</td><td colspan="4"></td></tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include('footer.tpl');  ?>
<script src="<?=base_url()?>assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
  <script type="text/javascript">

// Ajax post
$(document).ready(function() {
$(".userlist").on("click",".active",function(event) {
 
event.preventDefault();

$.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "index.php/admin/user/activeuser",

data: {user: $(this).attr('id'), active: $(this).attr('data-active')},
success: function(res) {
 var s=res.split(',');
$.gritter.add({title:s[0],class_name:s[1]});
}
});
});
});
</script>
  </body>
</html>