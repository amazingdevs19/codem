
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category Update</title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Category update</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Category Update
                  
                </div>
                <div class="panel-body ">
              
               <?php echo validation_errors(); ?>

                                   
               <!--******************** START SESSION SETFLASH MESSAGES *****************************-->
     <?php if(isset($message)){?>
          <div class="alert alert-success ">      
              <button type='button' class='close' data-dismiss='alert'>×</button>
            <?php echo $message;?>
          </div>
        <?php } ?>
     
      foreach ($list as $data) { 
    ?>
        <form id="Validation" action="<?php echo site_url('admin/category/update/'.$data->categoryid.''); ?>"  method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-lg-6">  
                <div class="form-group">
                <label> Category</label>
                <select name="parent_id" class="form-control select2">
                                                                    
<?php

            foreach($categorylist as $row)
            {
              if(!$row->parentid==0){
  ?>   
        <option value="<?php echo $row->categoryid;?>" <?php  echo ($data->categoryid==$row->categoryid)?'selected=selected':''; ?>><?php echo $row->categoryname;?></option>
        <?php }

else {?>
<option value="<?php echo $row->categoryid;?>" <?php  echo ($data->categoryid==$row->categoryid)?'selected=selected':''; ?>> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->categoryname;?></option>
<?php
  }     }?> 
                                                </select>
                                                               </div>
                                                             </div>
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Category Title</label>
                                                                    <input type="text" name="category_name" class="validate[required] form-control" value="<?php echo $data->categoryname;?>">
                                                                </div>
                                                            </div>
                                                         </div>  
                                                         
                                                         
                                                         <div class="row">
                                                          <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label>Template Icon Class </label>
                                                                    <div class="input-group">
     <input type="text" name="category_icon" class="validate[required] form-control" value="<?php echo $data->categoryicon;?>">
    <span class="input-group-btn">
       <button id="btnfonticon" class="btn btn-primary iconpicker"><i class="glyphicon glyphicon-ban-circle"></i>
                                        <input type="hidden" value="glyphicon-ban-circle"><span class="caret"></span></button>

    </span>    
</div>
</div>
                                                             </div>
                                                            <div class="col-lg-4">
                                                                 <div class="form-group">
                                                                     <label>Category Image</label>
                                                  <input type="file" name="category_image" id="category_image" class="validate[required] form-control ">
                                                  <input type="hidden" name="hidden_image" value="<?=$data->categoryimage;?>">
                                                                 </div>
                                                             </div>
  
                                                          <!--  <div class="col-lg-4">
                                                                 <div class="form-group">
                                                                     <label>Priority </label>
                                                  <input type="text" name="priority" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate[required] form-control " value="<?php echo $data->priority;?>">
                                                                 </div>
                                                             </div>-->
                                                         </div>      
              
                                                         <div class="row">
                                                          <div class="col-lg-12"> 
                                                                <div class="form-group">
                                                                    <label>Category Description</label>
                                                                    <textarea  id="CKeditor"  name="template_description" rows="5" class="validate[required] form-control"><?php echo $data->categorydescription;?></textarea>
                                                                </div>
                                                             </div>
                                                          </div>  
                                                         
                                                         <h4><i class="fa fa-arrow-right"></i> SEO Details</h4>
                                                         
                                                         <div class="row">
                                                          <div class="col-lg-6">  
                                                                <div class="form-group">
                                                                    <label>SEO Title</label>
                                                                    <input type="text" name="seo_title" class="validate[required] form-control" value="<?php echo $data->seotitle;?>">
                                                                </div>
                                                             </div>
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>SEO Keywords</label>
                                                                    <input type="text" name="seo_keyword" class="validate[required] form-control" value="<?php echo $data->seokeywords;?>">
                                                                </div>
                                                            </div>
                                                         </div> 
                                                         
                                                         <div class="row">
                                                          <div class="col-lg-12"> 
                                                                <div class="form-group">
                                                                    <label>SEO Description</label>
                                                                    <textarea name="seo_description" rows="3" class="validate[required] form-control"><?php echo $data->seodescription;?></textarea>
                                                                </div>
                                                             </div>
                                                          </div> 
                            <div class="form-actions">
                              <button name="save" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                          <?php $icon=$data->categoryicon; }?>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php include 'footer.tpl';?>


    <script src="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/js/iconset/iconset-fontawesome-4.1.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/css/bootstrap-iconpicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>assets/lib/custom-select/custom-select.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/lib/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('CKeditor');
        $(function () {
         $(".select2").select2();
            // Custom options
            $('#btnfonticon').iconpicker({
                align: 'center', // Only in div tag
                arrowClass: 'btn-danger',
                arrowPrevIconClass: 'icon-control-start',
                arrowNextIconClass: 'icon-control-end',
                cols: 10,
                footer: true,
                header: true,
                icon: '<?php echo $icon; ?>',
                iconset: 'fontawesome',
                labelHeader: '{0} of {1} pages',
                labelFooter: '{0} - {1} of {2} icons',
                placement: 'bottom', // Only in button tag
                rows: 5,
                search: true,
                searchText: 'Search',
                selectedClass: 'btn-success',
                unselectedClass: ''
            }).change(function (e) {
 $("input[name='template_icon']").empty();
                $("input[name='template_icon']").val(e.icon);
            });
        });

    </script>