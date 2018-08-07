
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Template List</title>
<?php include 'header.tpl';?>
 <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Template List</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Template list
                <div class="tools"><a href="<?=base_url('admin/template/create')?>" class="btn btn-info"><span class="icon mdi mdi-plus"></span> Add</a></div>
              
                </div>
                <div class="panel-body ">
<div class="table-responsive">

<table class="table table-bordered">
<tbody><tr >
<th>SL</th>
<th>Title</th>
<th>Category Name</th>

<th>URL</th>
<th>Image</th>
<th>Zip</th>
<th>Price</th>
<th>Priority</th>
<td>Status</td>
<th>Action</th>
</tr>

                                                <?php

            $id=1;foreach($templatelist as $row)
            {?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $row->templatename; ?></td>
<td><?php echo $row->categoryname; ?></td>

<td><?=$row->templateicon?></td>
<td><img class="img-thumbnail zoom" src="<?=base_url()?>images/template/<?= $row->templateimage; ?>" style="width:50px;height: 50px;"></td>
<td><a href="<?=base_url('child_theme/'.$row->template_zip); ?>" ><span class="icon mdi mdi-download"></span><?=$row->template_zip?></a></td>
<td><?php echo '$'.$row->templateprice; ?></td>
<td><?php echo $row->priority; ?></td>
<td><span class="label label-<?php if($row->status=='Active'){echo"success";}else{echo"danger";} ?>"><?php echo $row->status; ?></span></td>

<td>

<a href="<?php echo site_url('admin/template/edit/'. $row->templateid); ?>" class="label label-success " data-toggle="tooltip" title="" data-original-title="Edit Category"><i class="fa fa-pencil-square-o"></i> Edit</a>
<a href="<?php echo site_url('admin/template/delete/'.$row->templateid); ?>" onclick="return confirm('Are you sure to delete data?');" class="label label-danger " data-toggle="tooltip" title="" data-confirm="Are you sure you want to delete the category : <span class='label label-danger'><?php echo $row->templatename; ?></span>" data-original-title="Delete Category"><i class="fa fa-trash"></i> Delete</a>
</td>
</tr><?php $id=$id+1; }
            ?>
</tbody>
</tbody></table></div>
</div> 
<div class="box-footer">
<ul class="pagination pull-right" style="margin: 0px 0;">

</ul> 
 
</div>




  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include('footer.tpl');  ?>
     <script src="<?= base_url()?>assets/js/image-tooltip.js"></script>
</div>
   <script type="text/javascript">
    $(function(){
      $('.zoom').imageTooltip();
      
    });
    </script>
  </body>
</html>