
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
          <h2 class="page-head-title">Template update</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Template Update
                  
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
 <?php
     
      foreach ($list as $data) { 
    ?>
				<form id="Validation" action="<?php echo site_url('admin/template/update/'.$data->templateid.''); ?>"  method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-lg-4">	
                <div class="form-group">
                <label> Category</label>
                <select name="parent_id" class="form-control select2">
                                                                    
<?php

            foreach($categorylist as $row)
            {
  ?>   
        <option value="<?php echo $row->categoryid;?>" <?php  echo ($data->categoryid==$row->categoryid)?'selected=selected':''; ?>><?php echo $row->categoryname;?></option><?php }?> 
                                                </select>
                                                               </div>
                                                             </div>
                                                            <div class="col-lg-4">	   
                                                                <div class="form-group">
                                                                    <label>Template Title</label>
                                                                    <input type="text" name="template_name" class="validate[required] form-control" value="<?php echo $data->templatename;?>">
                                                                </div>
                                                            </div>
                                                      <div class="col-lg-4">  
                                                      <div class="form-group">
                                                                     <label>Price </label>
                                                  <input type="text" name="template_price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $data->templateprice;?>" class="validate[required] form-control ">
                                                                 </div>
                                                           </div>
                                                         </div>  
                                                         
                                                         
                                                         <div class="row">
                                                        	<div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Template URL </label>
                                                                
     <input type="text" name="template_icon" class="validate[required] form-control" value="<?php echo $data->templateicon;?>">
        

</div>
                                                             </div>
                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Template Image</label>
                                                  <input type="file" name="template_image" id="template_image" class="validate[required] form-control ">
                                                  <input type="hidden" name="old_image"  value="<?php echo $data->templateimage;?>">
                                                                 </div>
                                                             </div>
  <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Template Zip</label>
                                                  <input type="file" name="template_zip" id class="form-control ">
                                                  <input type="hidden" name="old_zip"  value="<?php echo $data->template_zip;?>">
                                                                 </div>
                                                             </div>
                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Priority </label>
                                                  <input type="text" name="priority" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate[required] form-control " value="<?php echo $data->priority;?>">
                                                                 </div>
                                                             </div>
                                                         </div>      
              
                                                         <div class="row">
                                                        	<div class="col-lg-12">	
                                                                <div class="form-group">
                                                                    <label>Template Description</label>
                                                                    <textarea  id="CKeditor"  name="template_description" rows="5" class="validate[required] form-control"><?php echo $data->templatedescription;?></textarea>
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
                          <?php $icon=$data->templateicon; }?>
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