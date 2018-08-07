<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All User List</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/jquery.gritter/css/jquery.gritter.css"/>
    <?php include('header.tpl'); ?>
  

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">User List</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">User list
                
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover userlist">
                    <thead>
                      <tr>
                       
                        <th style="width:20%;">User</th>
                        <th style="width:17%;">Email ID</th>
                        <th style="width:15%;">Mobile No</th>
                        <th style="width:10%;">Country</th>
                        <th style="width:10%;">Date</th>
                        <th style="width:10%;">Status</th>
                        <th style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody>
                     
                       <?php foreach($userlist as $u): ?>
                        <tr>

                         <td class="user-avatar cell-detail user-info"><img src="<?=base_url('assets/img/avatar6.png')?>" alt="Avatar"><span><?php echo $u->firstname." ". $u->lastname; ?></span></td>
                        <td class="cell-detail">   <?php echo $u->email; ?></td>
                        <td class="cell-detail">
                        <?php echo $u->mobileno; ?>
                        </td>
                        <td class="cell-detail"> <?php echo $u->country; ?></td>
                        <td class="cell-detail"><span><?php echo date("d-M-Y", strtotime($u->created)); ?></span></td>
                       <td class="cell-detail ">
                        <?php if($u->activated==1){ ?>
                         <span class="text-success active"  id="<?= $u->user_id ?>" data-active="0">
                           Active
                         </span>
                         <?php } else { ?>

                           <span class="text-danger active" id="<?= $u->user_id ?>"  data-active="1">
                          Deactive
                         </span>
                      <?php } ?>
                       </td>
                        <td class="cell-detail">
                        <div class="switch-button  switch-button-success">
                          <input type="checkbox" class="switch-button-danger" disabled <?php if($u->activated==1){ echo'checked';} else{echo '';}  ?> name="swt<?= $u->user_id ?>" id="swt<?= $u->user_id ?>"><span>
                            <label for="swt<?= $u->user_id ?>"></label></span>
                        </div>
                        </td>
      
      
          </tr>
      <?php endforeach; ?>
                       
                     
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