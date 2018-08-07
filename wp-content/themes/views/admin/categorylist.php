
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Category List</title>
<?php include 'header.tpl';?>
 <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">category List</h2>
          
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">category list
                  <div class="tools"><a href="<?=base_url('admin/category/create')?>"  class="btn btn-info"><span class="icon mdi mdi-plus"></span> Add</a></div>
              
                </div>
                <div class="panel-body table-responsive">


<table class="table table-bordered">
<tbody><tr >
<th>SL</th>
<th>Category</th>
<th>Parent Category</th>

<th>Icon</th>
<th>Image</th>

<th>Priority</th>
<td>Status</td>
<th>Action</th>
</tr>

                                                <?php

            $id=1;foreach($categorylist as $row)
            {?>
<tr>
<td><?php echo $id; ?></td>

<td><?php if(!$row->parentid==0){echo"Main";} else{echo $row->categoryname;} ?></td>
<td><?php echo $row->categoryname; ?></td>
<td><?php if(empty($row->categoryicon)){echo"&nbsp;"; }else{echo"<i class='fa $row->categoryicon' style='font-size: 30px;'></i>";}?></td>
<td><img class="img-thumbnail zoom" src="<?=base_url('images/category/'.$row->categoryimage) ?>" style="width:50px;height: 60px;"></td>

<td>1</td>
<td><span class="label label-<?php if($row->status=='Active'){echo"success";}else{echo"danger";} ?>"><?php echo $row->status; ?></span></td>

<td>

<a href="<?php echo site_url('admin/category/edit/'. $row->categoryid); ?>" class="label label-success " data-toggle="tooltip" title="" data-original-title="Edit Category"><i class="fa fa-pencil-square-o"></i> Edit</a>
<a href="<?php echo site_url('admin/category/delete/'. $row->categoryid); ?>" onclick="return confirm('Are you sure to delete data?');" class="label label-danger " data-toggle="tooltip" title="" data-confirm="Are you sure you want to delete the category : <span class='label label-danger'><?php echo $row->categoryname; ?></span>" data-original-title="Delete Category"><i class="fa fa-trash"></i> Delete</a>
</td>
</tr><?php $id=$id+1; }
            ?>
</tbody>
</tbody></table>
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
  </body>
</html>