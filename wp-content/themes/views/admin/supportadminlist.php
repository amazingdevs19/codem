
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Support Admin  List</title>
    
<?php include 'header.tpl';?>
 <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Support  List</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Support  List
               
              
                </div>
                <div class="panel-body ">
                <div class="table-responsive">
                <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
<?php echo validation_errors(); ?>

                                   
               <!--******************** START SESSION SETFLASH MESSAGES *****************************-->
     <?php if(isset($message)){?>
          <div class="alert alert-success ">      
              <button type='button' class='close' data-dismiss='alert'>×</button>
            <?php echo $message;?>
          </div>
        <?php } ?>

<table class="table table-bordered list" >
<thead>
<tr>
<th>No</th>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Title</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
<th>Image</th>
<th>Status</th>
<th>IP</th>
<th>Action</th>
</tr>
</thead>
<tbody>

                                                <?php
                                                $i=1;
if (is_array($supportlist) && count($supportlist) > 0) {
            foreach($supportlist as $row)
            {?>
<tr>
<td><a href="<?php echo site_url('admin/supportadmin/replyticket/'. $row->tid); ?>" data-id="<?= $row->tid ?>" class="modelbox" data-toggle="tooltip" title="" data-original-title="Ticket View"><i class="fa fa-pencil-square-o"></i> <?= $i; ?></a></td>
<td><?= $row->tid ?></td>
<td><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></td>
<td><?php echo $row->email; ?></td>
<td><?=substr($row->title,1,50) ;?>..</td>
<td><?php echo $row->subject; ?></td>
<td><?=substr($row->message,1,60) ;?>..</td>
<td><?= $row->currentdate?></td>
<td><img class="img-thumbnail zoom" onerror="this.src='<?php echo base_url(); ?>images/noimage.png'" src="<?php echo base_url(); ?>images/support/<?php echo $row->image; ?>" style="width:50px;height: 50px;"></td>

<td><span class="label label-<?php if($row->status=='Open'){echo"success";}else{echo"danger";} ?>"><?php echo $row->status; ?></span></td>
<td><?= $row->ipaddress?></td>
<td>

<a href="<?php echo site_url('admin/supportadmin/replyticket/'. $row->tid); ?>" class="label label-success " data-toggle="tooltip" title="" data-original-title="Ticket View"><i class="fa fa-pencil-square-o"></i> Ticket</a><br>
<a href="<?php echo site_url('admin/supportadmin/replyticket/'. $row->tid); ?>"  class="label label-info modelbox" data-id="<?= $row->tid ?>" data-toggle="tooltip" title="" data-original-title="Reply"><i class="fa fa-pencil-square-o"></i> Reply</a>

</td>
</tr><?php $i++;} }
 else { ?>
<tr><td colspan="7">Record Not Found</td></tr>
<?php } ?>
            
</tbody>
</tbody></table>
    </div>
    </div>
    </div>
	</div>
</div>
            </div>
          </div>
        </div>
      </div>


   
    <?php include('footer.tpl');  ?>
    <script src="<?= base_url()?>assets/js/image-tooltip.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script type="text/javascript">
    var editor = CKEDITOR.replace('message-text');
    $(function(){
        $('.zoom').imageTooltip();
        
            
    });
    </script>



  </body>
</html>
