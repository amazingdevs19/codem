<?php include('header.tpl'); ?>
   <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ticket List
<a href="<?=base_url('support-ticket')?>" class="btn btn-fill btn-success btn-sm pull-right">Create A ticket   </a>
                                </h4>
                            </div>
                            <div class="content">


<div class="panel-body table-responsive">


<table class="table table-bordered">
<tbody><tr class="active" >
<th>Ticket ID</th>
<th>Title</th>
<th>Subject</th>
<th>Status</th>
<th>Action</th>

</tr>

                                                <?php
if (is_array($supportlist) && count($supportlist) > 0) {
            foreach($supportlist as $row)
            {?>
<tr>
<td><a href="<?php echo site_url('support/view/'. $row->id); ?>"  data-toggle="tooltip" title="" data-original-title="Ticket View"><?php echo $row->id; ?></a></td>
<td><?php echo $row->title; ?></td>
<td><?php echo $row->subject; ?></td>
<td><span class="label label-<?=$row->status=='Open'?'success':'danger'; ?>"><?=$row->status=='Open'?'Open':'Close'; ?></span></td>
<td>
<a href="<?php echo site_url('support/view/'. $row->id); ?>" class="label label-info " data-toggle="tooltip" title="" data-original-title="Ticket View"><i class="fa fa-pencil-square-o"></i> Ticket</a>
</td>
</tr><?php } }
 else { ?>
<tr><td colspan="7">Record Not Found</td></tr>
<?php } ?>
            
</tbody>
</tbody></table>

</div> 




							</div>
						</div>
	</div>
   
<?php include('footer.tpl'); ?>